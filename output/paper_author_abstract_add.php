<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/paper_author_abstract_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'A') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("add22","Rounded1Orange1","MobileOrange1");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["paper_author_abstract_add"] = $layout;

$layout = new TLayout("tab","Rounded1Orange1","MobileOrange1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["paper_author_abstract_add_Institution_11"] = $layout;

$layout = new TLayout("tab","Rounded1Orange1","MobileOrange1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"addtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["paper_author_abstract_add_Institution_21"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "paper_author_abstract_inline_add.htm";
else
	$templatefile = "paper_author_abstract_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);


$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: paper_author_abstract_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing fullPaper - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_fullPaper = $pageObject->getControl("fullPaper", $id);
		$control_fullPaper->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing fullPaper - end
//	processing userID - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_userID = $pageObject->getControl("userID", $id);
		$control_userID->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing userID - end
//	processing date_submit - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_date_submit = $pageObject->getControl("date_submit", $id);
		$control_date_submit->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing date_submit - end
//	processing cid - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_cid = $pageObject->getControl("cid", $id);
		$control_cid->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing cid - end
//	processing paperStatus - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_paperStatus = $pageObject->getControl("paperStatus", $id);
		$control_paperStatus->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing paperStatus - end
//	processing funded - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_funded = $pageObject->getControl("funded", $id);
		$control_funded->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing funded - end
//	processing title - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_title = $pageObject->getControl("title", $id);
		$control_title->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing title - end
//	processing abstract - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_abstract = $pageObject->getControl("abstract", $id);
		$control_abstract->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing abstract - end
//	processing author1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_author1 = $pageObject->getControl("author1", $id);
		$control_author1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing author1 - end
//	processing institution1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_institution1 = $pageObject->getControl("institution1", $id);
		$control_institution1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing institution1 - end
//	processing address1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_address1 = $pageObject->getControl("address1", $id);
		$control_address1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing address1 - end
//	processing country1 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_country1 = $pageObject->getControl("country1", $id);
		$control_country1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing country1 - end
//	processing author2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_author2 = $pageObject->getControl("author2", $id);
		$control_author2->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing author2 - end
//	processing institution2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_institution2 = $pageObject->getControl("institution2", $id);
		$control_institution2->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing institution2 - end
//	processing address2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_address2 = $pageObject->getControl("address2", $id);
		$control_address2->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing address2 - end
//	processing country2 - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd!=ADD_INLINE;
	if($inlineAddOption)
	{
		$control_country2 = $pageObject->getControl("country2", $id);
		$control_country2->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing country2 - end

//	insert ownerid value if exists
	if($strOriginalTableName == $pageObject->pSet->getOwnerTable("userID"))
		$avalues["userID"] = prepare_for_db("userID",$_SESSION["_".$strTableName."_OwnerID"]);



	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing fullPaper - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_fullPaper->afterSuccessfulSave();
			}
//	processing fullPaper - end
//	processing userID - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_userID->afterSuccessfulSave();
			}
//	processing userID - end
//	processing date_submit - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_date_submit->afterSuccessfulSave();
			}
//	processing date_submit - end
//	processing cid - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_cid->afterSuccessfulSave();
			}
//	processing cid - end
//	processing paperStatus - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_paperStatus->afterSuccessfulSave();
			}
//	processing paperStatus - end
//	processing funded - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_funded->afterSuccessfulSave();
			}
//	processing funded - end
//	processing title - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_title->afterSuccessfulSave();
			}
//	processing title - end
//	processing abstract - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_abstract->afterSuccessfulSave();
			}
//	processing abstract - end
//	processing author1 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_author1->afterSuccessfulSave();
			}
//	processing author1 - end
//	processing institution1 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_institution1->afterSuccessfulSave();
			}
//	processing institution1 - end
//	processing address1 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_address1->afterSuccessfulSave();
			}
//	processing address1 - end
//	processing country1 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_country1->afterSuccessfulSave();
			}
//	processing country1 - end
//	processing author2 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_author2->afterSuccessfulSave();
			}
//	processing author2 - end
//	processing institution2 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_institution2->afterSuccessfulSave();
			}
//	processing institution2 - end
//	processing address2 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_address2->afterSuccessfulSave();
			}
//	processing address2 - end
//	processing country2 - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd!=ADD_INLINE;
			if($inlineAddOption)
			{
				$control_country2->afterSuccessfulSave();
			}
//	processing country2 - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'paper_author_abstract_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'paper_author_abstract_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: paper_author_abstract_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["paperID"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["paperID"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strWhere=whereAdd($strWhere,SecuritySQL("Search"));
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["paperID"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
	$defvalues["userID"] = $_SESSION['userID'];
	$defvalues["date_submit"] = Now();
	$defvalues["cid"] = $_GET['conf'];;
	$defvalues["paperStatus"] = "New";
	$defvalues["author1"] = $_SESSION['fullName'];
	$defvalues["institution1"] = $_SESSION['institution'];
	$defvalues["address1"] = $_SESSION['address'];
	$defvalues["country1"] = $_SESSION['country'];
}

//	insert default ownerid value if exists
	if($strOriginalTableName == $pageObject->pSet->getOwnerTable("userID"))
		$defvalues["userID"] = prepare_for_db("userID",$_SESSION["_".$strTableName."_OwnerID"]);


if($readavalues)
{
	$defvalues["userID"]=@$avalues["userID"];
	$defvalues["cid"]=@$avalues["cid"];
	$defvalues["author1"]=@$avalues["author1"];
	$defvalues["institution1"]=@$avalues["institution1"];
	$defvalues["address1"]=@$avalues["address1"];
	$defvalues["country1"]=@$avalues["country1"];
	$defvalues["author2"]=@$avalues["author2"];
	$defvalues["institution2"]=@$avalues["institution2"];
	$defvalues["address2"]=@$avalues["address2"];
	$defvalues["country2"]=@$avalues["country2"];
	$defvalues["funded"]=@$avalues["funded"];
	$defvalues["date_submit"]=@$avalues["date_submit"];
	$defvalues["title"]=@$avalues["title"];
	$defvalues["abstract"]=@$avalues["abstract"];
	$defvalues["paperStatus"]=@$avalues["paperStatus"];
	$defvalues["fullPaper"]=@$avalues["fullPaper"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("userID"))
		$xt->assign("userID_fieldblock",true);
	else
		$xt->assign("userID_tabfieldblock",true);
	$xt->assign("userID_label",true);
	if(isEnableSection508())
		$xt->assign_section("userID_label","<label for=\"".GetInputElementId("userID", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("cid"))
		$xt->assign("cid_fieldblock",true);
	else
		$xt->assign("cid_tabfieldblock",true);
	$xt->assign("cid_label",true);
	if(isEnableSection508())
		$xt->assign_section("cid_label","<label for=\"".GetInputElementId("cid", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("author1"))
		$xt->assign("author1_fieldblock",true);
	else
		$xt->assign("author1_tabfieldblock",true);
	$xt->assign("author1_label",true);
	if(isEnableSection508())
		$xt->assign_section("author1_label","<label for=\"".GetInputElementId("author1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("institution1"))
		$xt->assign("institution1_fieldblock",true);
	else
		$xt->assign("institution1_tabfieldblock",true);
	$xt->assign("institution1_label",true);
	if(isEnableSection508())
		$xt->assign_section("institution1_label","<label for=\"".GetInputElementId("institution1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("address1"))
		$xt->assign("address1_fieldblock",true);
	else
		$xt->assign("address1_tabfieldblock",true);
	$xt->assign("address1_label",true);
	if(isEnableSection508())
		$xt->assign_section("address1_label","<label for=\"".GetInputElementId("address1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("country1"))
		$xt->assign("country1_fieldblock",true);
	else
		$xt->assign("country1_tabfieldblock",true);
	$xt->assign("country1_label",true);
	if(isEnableSection508())
		$xt->assign_section("country1_label","<label for=\"".GetInputElementId("country1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("author2"))
		$xt->assign("author2_fieldblock",true);
	else
		$xt->assign("author2_tabfieldblock",true);
	$xt->assign("author2_label",true);
	if(isEnableSection508())
		$xt->assign_section("author2_label","<label for=\"".GetInputElementId("author2", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("institution2"))
		$xt->assign("institution2_fieldblock",true);
	else
		$xt->assign("institution2_tabfieldblock",true);
	$xt->assign("institution2_label",true);
	if(isEnableSection508())
		$xt->assign_section("institution2_label","<label for=\"".GetInputElementId("institution2", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("address2"))
		$xt->assign("address2_fieldblock",true);
	else
		$xt->assign("address2_tabfieldblock",true);
	$xt->assign("address2_label",true);
	if(isEnableSection508())
		$xt->assign_section("address2_label","<label for=\"".GetInputElementId("address2", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("country2"))
		$xt->assign("country2_fieldblock",true);
	else
		$xt->assign("country2_tabfieldblock",true);
	$xt->assign("country2_label",true);
	if(isEnableSection508())
		$xt->assign_section("country2_label","<label for=\"".GetInputElementId("country2", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("funded"))
		$xt->assign("funded_fieldblock",true);
	else
		$xt->assign("funded_tabfieldblock",true);
	$xt->assign("funded_label",true);
	if(isEnableSection508())
		$xt->assign_section("funded_label","<label for=\"".GetInputElementId("funded", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("date_submit"))
		$xt->assign("date_submit_fieldblock",true);
	else
		$xt->assign("date_submit_tabfieldblock",true);
	$xt->assign("date_submit_label",true);
	if(isEnableSection508())
		$xt->assign_section("date_submit_label","<label for=\"".GetInputElementId("date_submit", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("title"))
		$xt->assign("title_fieldblock",true);
	else
		$xt->assign("title_tabfieldblock",true);
	$xt->assign("title_label",true);
	if(isEnableSection508())
		$xt->assign_section("title_label","<label for=\"".GetInputElementId("title", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("abstract"))
		$xt->assign("abstract_fieldblock",true);
	else
		$xt->assign("abstract_tabfieldblock",true);
	$xt->assign("abstract_label",true);
	if(isEnableSection508())
		$xt->assign_section("abstract_label","<label for=\"".GetInputElementId("abstract", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("paperStatus"))
		$xt->assign("paperStatus_fieldblock",true);
	else
		$xt->assign("paperStatus_tabfieldblock",true);
	$xt->assign("paperStatus_label",true);
	if(isEnableSection508())
		$xt->assign_section("paperStatus_label","<label for=\"".GetInputElementId("paperStatus", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("fullPaper"))
		$xt->assign("fullPaper_fieldblock",true);
	else
		$xt->assign("fullPaper_tabfieldblock",true);
	$xt->assign("fullPaper_label",true);
	if(isEnableSection508())
		$xt->assign_section("fullPaper_label","<label for=\"".GetInputElementId("fullPaper", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
	$pageObject->readOnlyFields["userID"] = htmlspecialchars($pageObject->showDBValue("userID", $defvalues));
	$pageObject->readOnlyFields["cid"] = htmlspecialchars($pageObject->showDBValue("cid", $defvalues));
	$pageObject->readOnlyFields["date_submit"] = htmlspecialchars($pageObject->showDBValue("date_submit", $defvalues));
	$pageObject->readOnlyFields["paperStatus"] = htmlspecialchars($pageObject->showDBValue("paperStatus", $defvalues));
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
		//	select only owned records
		$where=whereAdd($where,SecuritySQL("Search"));
		
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["paperID"]));
	
////////////////////////////////////////////
//	userID
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("userID", $data, $keylink);
		$showValues["userID"] = $value;
		$showFields[] = "userID";
	}	
//	cid
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("cid", $data, $keylink);
		$showValues["cid"] = $value;
		$showFields[] = "cid";
	}	
//	author1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("author1", $data, $keylink);
		$showValues["author1"] = $value;
		$showFields[] = "author1";
	}	
//	institution1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("institution1", $data, $keylink);
		$showValues["institution1"] = $value;
		$showFields[] = "institution1";
	}	
//	address1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("address1", $data, $keylink);
		$showValues["address1"] = $value;
		$showFields[] = "address1";
	}	
//	country1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("country1", $data, $keylink);
		$showValues["country1"] = $value;
		$showFields[] = "country1";
	}	
//	author2
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("author2", $data, $keylink);
		$showValues["author2"] = $value;
		$showFields[] = "author2";
	}	
//	institution2
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("institution2", $data, $keylink);
		$showValues["institution2"] = $value;
		$showFields[] = "institution2";
	}	
//	address2
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("address2", $data, $keylink);
		$showValues["address2"] = $value;
		$showFields[] = "address2";
	}	
//	country2
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("country2", $data, $keylink);
		$showValues["country2"] = $value;
		$showFields[] = "country2";
	}	
//	funded
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("funded", $data, $keylink);
		$showValues["funded"] = $value;
		$showFields[] = "funded";
	}	
//	date_submit
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("date_submit", $data, $keylink);
		$showValues["date_submit"] = $value;
		$showFields[] = "date_submit";
	}	
//	title
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("title", $data, $keylink);
		$showValues["title"] = $value;
		$showFields[] = "title";
	}	
//	abstract
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("abstract", $data, $keylink);
		$showValues["abstract"] = $value;
		$showFields[] = "abstract";
	}	
//	paperStatus
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("paperStatus", $data, $keylink);
		$showValues["paperStatus"] = $value;
		$showFields[] = "paperStatus";
	}	
//	fullPaper
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("fullPaper", $data, $keylink);
		$showValues["fullPaper"] = $value;
		$showFields[] = "fullPaper";
	}	
		$showRawValues["paperID"] = substr($data["paperID"],0,100);
		$showRawValues["userID"] = substr($data["userID"],0,100);
		$showRawValues["cid"] = substr($data["cid"],0,100);
		$showRawValues["author1"] = substr($data["author1"],0,100);
		$showRawValues["institution1"] = substr($data["institution1"],0,100);
		$showRawValues["address1"] = substr($data["address1"],0,100);
		$showRawValues["country1"] = substr($data["country1"],0,100);
		$showRawValues["author2"] = substr($data["author2"],0,100);
		$showRawValues["institution2"] = substr($data["institution2"],0,100);
		$showRawValues["address2"] = substr($data["address2"],0,100);
		$showRawValues["country2"] = substr($data["country2"],0,100);
		$showRawValues["funded"] = substr($data["funded"],0,100);
		$showRawValues["date_submit"] = substr($data["date_submit"],0,100);
		$showRawValues["title"] = substr($data["title"],0,100);
		$showRawValues["abstract"] = substr($data["abstract"],0,100);
		$showRawValues["paperStatus"] = substr($data["paperStatus"],0,100);
		$showRawValues["fullPaper"] = substr($data["fullPaper"],0,100);
		$showRawValues["paymentStatus"] = substr($data["paymentStatus"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							//	select only owned records
				$where=whereAdd($where,SecuritySQL("Search"));
				$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
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
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "paper_author_abstract";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
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
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "paper_author_abstract";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
