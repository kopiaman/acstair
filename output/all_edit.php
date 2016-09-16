<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/all_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'E') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired");
	return;
}

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;




if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = ($inlineedit == EDIT_INLINE) ? "all_inline_edit.htm" : "all_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing paperID - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_paperID = $pageObject->getControl("paperID", $id);
		$control_paperID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing paperID - end
//	processing userID - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_userID = $pageObject->getControl("userID", $id);
		$control_userID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing userID - end
//	processing author1 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_author1 = $pageObject->getControl("author1", $id);
		$control_author1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing author1 - end
//	processing institution1 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_institution1 = $pageObject->getControl("institution1", $id);
		$control_institution1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing institution1 - end
//	processing address1 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_address1 = $pageObject->getControl("address1", $id);
		$control_address1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing address1 - end
//	processing country1 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_country1 = $pageObject->getControl("country1", $id);
		$control_country1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing country1 - end
//	processing author2 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_author2 = $pageObject->getControl("author2", $id);
		$control_author2->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing author2 - end
//	processing institution2 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_institution2 = $pageObject->getControl("institution2", $id);
		$control_institution2->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing institution2 - end
//	processing address2 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_address2 = $pageObject->getControl("address2", $id);
		$control_address2->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing address2 - end
//	processing country2 - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_country2 = $pageObject->getControl("country2", $id);
		$control_country2->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing country2 - end
//	processing funded - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_funded = $pageObject->getControl("funded", $id);
		$control_funded->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing funded - end
//	processing date_submit - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_date_submit = $pageObject->getControl("date_submit", $id);
		$control_date_submit->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing date_submit - end
//	processing title - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_title = $pageObject->getControl("title", $id);
		$control_title->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing title - end
//	processing abstract - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_abstract = $pageObject->getControl("abstract", $id);
		$control_abstract->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing abstract - end
//	processing paperStatus - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_paperStatus = $pageObject->getControl("paperStatus", $id);
		$control_paperStatus->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing paperStatus - end
//	processing fullPaper - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_fullPaper = $pageObject->getControl("fullPaper", $id);
		$control_fullPaper->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing fullPaper - end
//	processing paymentStatus - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_paymentStatus = $pageObject->getControl("paymentStatus", $id);
		$control_paymentStatus->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing paymentStatus - end
//	processing fullName - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_fullName = $pageObject->getControl("fullName", $id);
		$control_fullName->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing fullName - end
//	processing cnameShort - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_cnameShort = $pageObject->getControl("cnameShort", $id);
		$control_cnameShort->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing cnameShort - end
//	processing cname - begin
	$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode

	if($condition)
	{
		$control_cname = $pageObject->getControl("cname", $id);
		$control_cname->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

	}
//	processing cname - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing paperID - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_paperID->afterSuccessfulSave();
				}
	//	processing paperID - end
			//	processing userID - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_userID->afterSuccessfulSave();
				}
	//	processing userID - end
			//	processing author1 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_author1->afterSuccessfulSave();
				}
	//	processing author1 - end
			//	processing institution1 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_institution1->afterSuccessfulSave();
				}
	//	processing institution1 - end
			//	processing address1 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_address1->afterSuccessfulSave();
				}
	//	processing address1 - end
			//	processing country1 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_country1->afterSuccessfulSave();
				}
	//	processing country1 - end
			//	processing author2 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_author2->afterSuccessfulSave();
				}
	//	processing author2 - end
			//	processing institution2 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_institution2->afterSuccessfulSave();
				}
	//	processing institution2 - end
			//	processing address2 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_address2->afterSuccessfulSave();
				}
	//	processing address2 - end
			//	processing country2 - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_country2->afterSuccessfulSave();
				}
	//	processing country2 - end
			//	processing funded - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_funded->afterSuccessfulSave();
				}
	//	processing funded - end
			//	processing date_submit - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_date_submit->afterSuccessfulSave();
				}
	//	processing date_submit - end
			//	processing title - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_title->afterSuccessfulSave();
				}
	//	processing title - end
			//	processing abstract - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_abstract->afterSuccessfulSave();
				}
	//	processing abstract - end
			//	processing paperStatus - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_paperStatus->afterSuccessfulSave();
				}
	//	processing paperStatus - end
			//	processing fullPaper - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_fullPaper->afterSuccessfulSave();
				}
	//	processing fullPaper - end
			//	processing paymentStatus - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_paymentStatus->afterSuccessfulSave();
				}
	//	processing paymentStatus - end
			//	processing fullName - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_fullName->afterSuccessfulSave();
				}
	//	processing fullName - end
			//	processing cnameShort - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_cnameShort->afterSuccessfulSave();
				}
	//	processing cnameShort - end
			//	processing cname - begin
							$condition = $inlineedit==EDIT_INLINE;//($inlineedit) inline mode
			
				if($condition)
				{
					$control_cname->afterSuccessfulSave();
				}
	//	processing cname - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: all_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: all_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["paperID"] = $evalues["paperID"];
	$data["userID"] = $evalues["userID"];
	$data["author1"] = $evalues["author1"];
	$data["institution1"] = $evalues["institution1"];
	$data["address1"] = $evalues["address1"];
	$data["country1"] = $evalues["country1"];
	$data["author2"] = $evalues["author2"];
	$data["institution2"] = $evalues["institution2"];
	$data["address2"] = $evalues["address2"];
	$data["country2"] = $evalues["country2"];
	$data["funded"] = $evalues["funded"];
	$data["date_submit"] = $evalues["date_submit"];
	$data["title"] = $evalues["title"];
	$data["abstract"] = $evalues["abstract"];
	$data["paperStatus"] = $evalues["paperStatus"];
	$data["fullPaper"] = $evalues["fullPaper"];
	$data["paymentStatus"] = $evalues["paymentStatus"];
	$data["fullName"] = $evalues["fullName"];
	$data["cnameShort"] = $evalues["cnameShort"];
	$data["cname"] = $evalues["cname"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	


	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables

	$keylink = "";


//	paperID - 
	$value = $pageObject->showDBValue("paperID", $data, $keylink);
	$showValues["paperID"] = $value;
	$showFields[] = "paperID";
		$showRawValues["paperID"] = substr($data["paperID"],0,100);

//	userID - 
	$value = $pageObject->showDBValue("userID", $data, $keylink);
	$showValues["userID"] = $value;
	$showFields[] = "userID";
		$showRawValues["userID"] = substr($data["userID"],0,100);

//	cid - 
	$value = $pageObject->showDBValue("cid", $data, $keylink);
	$showValues["cid"] = $value;
	$showFields[] = "cid";
		$showRawValues["cid"] = substr($data["cid"],0,100);

//	author1 - 
	$value = $pageObject->showDBValue("author1", $data, $keylink);
	$showValues["author1"] = $value;
	$showFields[] = "author1";
		$showRawValues["author1"] = substr($data["author1"],0,100);

//	institution1 - 
	$value = $pageObject->showDBValue("institution1", $data, $keylink);
	$showValues["institution1"] = $value;
	$showFields[] = "institution1";
		$showRawValues["institution1"] = substr($data["institution1"],0,100);

//	address1 - 
	$value = $pageObject->showDBValue("address1", $data, $keylink);
	$showValues["address1"] = $value;
	$showFields[] = "address1";
		$showRawValues["address1"] = substr($data["address1"],0,100);

//	country1 - 
	$value = $pageObject->showDBValue("country1", $data, $keylink);
	$showValues["country1"] = $value;
	$showFields[] = "country1";
		$showRawValues["country1"] = substr($data["country1"],0,100);

//	author2 - 
	$value = $pageObject->showDBValue("author2", $data, $keylink);
	$showValues["author2"] = $value;
	$showFields[] = "author2";
		$showRawValues["author2"] = substr($data["author2"],0,100);

//	institution2 - 
	$value = $pageObject->showDBValue("institution2", $data, $keylink);
	$showValues["institution2"] = $value;
	$showFields[] = "institution2";
		$showRawValues["institution2"] = substr($data["institution2"],0,100);

//	address2 - 
	$value = $pageObject->showDBValue("address2", $data, $keylink);
	$showValues["address2"] = $value;
	$showFields[] = "address2";
		$showRawValues["address2"] = substr($data["address2"],0,100);

//	country2 - 
	$value = $pageObject->showDBValue("country2", $data, $keylink);
	$showValues["country2"] = $value;
	$showFields[] = "country2";
		$showRawValues["country2"] = substr($data["country2"],0,100);

//	funded - 
	$value = $pageObject->showDBValue("funded", $data, $keylink);
	$showValues["funded"] = $value;
	$showFields[] = "funded";
		$showRawValues["funded"] = substr($data["funded"],0,100);

//	date_submit - 
	$value = $pageObject->showDBValue("date_submit", $data, $keylink);
	$showValues["date_submit"] = $value;
	$showFields[] = "date_submit";
		$showRawValues["date_submit"] = substr($data["date_submit"],0,100);

//	title - 
	$value = $pageObject->showDBValue("title", $data, $keylink);
	$showValues["title"] = $value;
	$showFields[] = "title";
		$showRawValues["title"] = substr($data["title"],0,100);

//	abstract - 
	$value = $pageObject->showDBValue("abstract", $data, $keylink);
	$showValues["abstract"] = $value;
	$showFields[] = "abstract";
		$showRawValues["abstract"] = substr($data["abstract"],0,100);

//	paperStatus - 
	$value = $pageObject->showDBValue("paperStatus", $data, $keylink);
	$showValues["paperStatus"] = $value;
	$showFields[] = "paperStatus";
		$showRawValues["paperStatus"] = substr($data["paperStatus"],0,100);

//	fullPaper - 
	$value = $pageObject->showDBValue("fullPaper", $data, $keylink);
	$showValues["fullPaper"] = $value;
	$showFields[] = "fullPaper";
		$showRawValues["fullPaper"] = substr($data["fullPaper"],0,100);

//	paymentStatus - 
	$value = $pageObject->showDBValue("paymentStatus", $data, $keylink);
	$showValues["paymentStatus"] = $value;
	$showFields[] = "paymentStatus";
		$showRawValues["paymentStatus"] = substr($data["paymentStatus"],0,100);

//	fullName - 
	$value = $pageObject->showDBValue("fullName", $data, $keylink);
	$showValues["fullName"] = $value;
	$showFields[] = "fullName";
		$showRawValues["fullName"] = substr($data["fullName"],0,100);

//	cnameShort - 
	$value = $pageObject->showDBValue("cnameShort", $data, $keylink);
	$showValues["cnameShort"] = $value;
	$showFields[] = "cnameShort";
		$showRawValues["cnameShort"] = substr($data["cnameShort"],0,100);

//	cname - 
	$value = $pageObject->showDBValue("cname", $data, $keylink);
	$showValues["cname"] = $value;
	$showFields[] = "cname";
		$showRawValues["cname"] = substr($data["cname"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																					
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	$flyId = $ids+1;
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "all";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "all";
			continue;
		}
		
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}	
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "all";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);


$viewlink = "";
$viewkeys = array();
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='all_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>
