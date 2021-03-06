<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/paper_author_abstract_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","Rounded1Orange1","MobileOrange1");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["paper_author_abstract_view"] = $layout;


$layout = new TLayout("viewtab","Rounded1Orange1","MobileOrange1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["paper_author_abstract_view_Institution_11"] = $layout;

$layout = new TLayout("viewtab","Rounded1Orange1","MobileOrange1");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["paper_author_abstract_view_Institution_21"] = $layout;



//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: paper_author_abstract_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "date_submit";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("date_submit");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "fullPaper";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("fullPaper");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "paperStatus";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("paperStatus");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "funded";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("funded");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "title";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("title");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "abstract";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("abstract");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "address1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("address1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "country1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("country1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "author2";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("author2");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "institution2";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("institution2");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "address2";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("address2");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "country2";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("country2");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("paperID", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["paperID"]));

////////////////////////////////////////////
//date_submit - 
	
	$value = $pageObject->showDBValue("date_submit", $data, $keylink);
	if($mainTableOwnerID=="date_submit")
		$ownerIdValue=$value;
	$xt->assign("date_submit_value",$value);
	if(!$pageObject->isAppearOnTabs("date_submit"))
		$xt->assign("date_submit_fieldblock",true);
	else
		$xt->assign("date_submit_tabfieldblock",true);
////////////////////////////////////////////
//fullPaper - 
	
	$value = $pageObject->showDBValue("fullPaper", $data, $keylink);
	if($mainTableOwnerID=="fullPaper")
		$ownerIdValue=$value;
	$xt->assign("fullPaper_value",$value);
	if(!$pageObject->isAppearOnTabs("fullPaper"))
		$xt->assign("fullPaper_fieldblock",true);
	else
		$xt->assign("fullPaper_tabfieldblock",true);
////////////////////////////////////////////
//paperStatus - 
	
	$value = $pageObject->showDBValue("paperStatus", $data, $keylink);
	if($mainTableOwnerID=="paperStatus")
		$ownerIdValue=$value;
	$xt->assign("paperStatus_value",$value);
	if(!$pageObject->isAppearOnTabs("paperStatus"))
		$xt->assign("paperStatus_fieldblock",true);
	else
		$xt->assign("paperStatus_tabfieldblock",true);
////////////////////////////////////////////
//funded - 
	
	$value = $pageObject->showDBValue("funded", $data, $keylink);
	if($mainTableOwnerID=="funded")
		$ownerIdValue=$value;
	$xt->assign("funded_value",$value);
	if(!$pageObject->isAppearOnTabs("funded"))
		$xt->assign("funded_fieldblock",true);
	else
		$xt->assign("funded_tabfieldblock",true);
////////////////////////////////////////////
//title - 
	
	$value = $pageObject->showDBValue("title", $data, $keylink);
	if($mainTableOwnerID=="title")
		$ownerIdValue=$value;
	$xt->assign("title_value",$value);
	if(!$pageObject->isAppearOnTabs("title"))
		$xt->assign("title_fieldblock",true);
	else
		$xt->assign("title_tabfieldblock",true);
////////////////////////////////////////////
//abstract - HTML
	
	$value = $pageObject->showDBValue("abstract", $data, $keylink);
	if($mainTableOwnerID=="abstract")
		$ownerIdValue=$value;
	$xt->assign("abstract_value",$value);
	if(!$pageObject->isAppearOnTabs("abstract"))
		$xt->assign("abstract_fieldblock",true);
	else
		$xt->assign("abstract_tabfieldblock",true);
////////////////////////////////////////////
//address1 - 
	
	$value = $pageObject->showDBValue("address1", $data, $keylink);
	if($mainTableOwnerID=="address1")
		$ownerIdValue=$value;
	$xt->assign("address1_value",$value);
	if(!$pageObject->isAppearOnTabs("address1"))
		$xt->assign("address1_fieldblock",true);
	else
		$xt->assign("address1_tabfieldblock",true);
////////////////////////////////////////////
//country1 - 
	
	$value = $pageObject->showDBValue("country1", $data, $keylink);
	if($mainTableOwnerID=="country1")
		$ownerIdValue=$value;
	$xt->assign("country1_value",$value);
	if(!$pageObject->isAppearOnTabs("country1"))
		$xt->assign("country1_fieldblock",true);
	else
		$xt->assign("country1_tabfieldblock",true);
////////////////////////////////////////////
//author2 - 
	
	$value = $pageObject->showDBValue("author2", $data, $keylink);
	if($mainTableOwnerID=="author2")
		$ownerIdValue=$value;
	$xt->assign("author2_value",$value);
	if(!$pageObject->isAppearOnTabs("author2"))
		$xt->assign("author2_fieldblock",true);
	else
		$xt->assign("author2_tabfieldblock",true);
////////////////////////////////////////////
//institution2 - 
	
	$value = $pageObject->showDBValue("institution2", $data, $keylink);
	if($mainTableOwnerID=="institution2")
		$ownerIdValue=$value;
	$xt->assign("institution2_value",$value);
	if(!$pageObject->isAppearOnTabs("institution2"))
		$xt->assign("institution2_fieldblock",true);
	else
		$xt->assign("institution2_tabfieldblock",true);
////////////////////////////////////////////
//address2 - 
	
	$value = $pageObject->showDBValue("address2", $data, $keylink);
	if($mainTableOwnerID=="address2")
		$ownerIdValue=$value;
	$xt->assign("address2_value",$value);
	if(!$pageObject->isAppearOnTabs("address2"))
		$xt->assign("address2_fieldblock",true);
	else
		$xt->assign("address2_tabfieldblock",true);
////////////////////////////////////////////
//country2 - 
	
	$value = $pageObject->showDBValue("country2", $data, $keylink);
	if($mainTableOwnerID=="country2")
		$ownerIdValue=$value;
	$xt->assign("country2_value",$value);
	if(!$pageObject->isAppearOnTabs("country2"))
		$xt->assign("country2_fieldblock",true);
	else
		$xt->assign("country2_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "paper_author_abstract";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "paper_author_abstract";
			continue;
		}
		
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
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
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
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "paper_author_abstract";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='paper_author_abstract_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
