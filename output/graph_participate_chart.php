<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/chartpage.php');
add_nocache_headers();

require_once("include/graph_participate_variables.php");

if( !Security::processPageSecurity( $strtablename, 'S' ) )
	return;

require_once('classes/searchclause.php');




$layout = new TLayout("chart6", "CoralCoral", "MobileCoral");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";

$layout->blocks["center"][] = "message";
$layout->skins["pageinfo"] = "1";

$layout->blocks["center"][] = "pageinfo";
$layout->containers["form"] = array();
$layout->container_properties["form"] = array(  );
$layout->containers["form"][] = array("name"=>"chart", 
	"block"=>"", "substyle"=>1  );

$layout->skins["form"] = "2";

$layout->blocks["center"][] = "form";
$layout->blocks["right"] = array();
$layout->containers["searchpanel"] = array();
$layout->container_properties["searchpanel"] = array(  );
$layout->containers["searchpanel"][] = array("name"=>"vsearch1", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["searchpanel"][] = array("name"=>"vsearch2", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["searchpanel"][] = array("name"=>"search_saving_buttons", 
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->containers["searchpanel"][] = array("name"=>"searchpanel", 
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["searchpanel"] = "3";

$layout->blocks["right"][] = "searchpanel";
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu"] = "menu";

$layout->blocks["right"][] = "menu";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();
$layout->container_properties["toplinks"] = array(  );
$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch", 
	"block"=>"asearch_link", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["graph_participate_chart"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button1");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");


// add master layouts 


$mode = postvalue("mode");
if( $mode == "listdetails" )
	$pageMode = CHART_DETAILS;
elseif( $mode == "listdetailspopup" )
	$pageMode = CHART_POPUPDETAILS;
elseif( $mode == "dashchart" )
	$pageMode = CHART_DASHBOARD;
elseif( $mode == "dashdetails" )
	$pageMode = CHART_DASHDETAILS;
else
	$pageMode = CHART_SIMPLE;

$detailsMode = $pageMode != CHART_SIMPLE;

$xt = new Xtempl( $detailsMode );

$id = postvalue("id");
$id = $id ? $id : 1;

// set params for a RunnerPage constructor
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_CHART;
$params["masterTable"] = postvalue("mastertable");
$params["isGroupSecurity"] = $isGroupSecurity; // a global variable
$params["masterKeysReq"] = array();

if( $pageMode = CHART_DASHBOARD )
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
}

if( isset($_REQUEST["masterKeys"]) )
	$masterKeys = my_json_decode( $_REQUEST["masterKeys"] );
	
$i = 0;
while (true) 
{
	$i++;
	if (isset($_REQUEST["masterkey".$i]))
		$_masterKey = $_REQUEST["masterkey".$i];
	elseif (isset($masterKeys["masterkey".$i]))
		$_masterKey = $masterKeys["masterkey".$i];
	else
		break;
	$params["masterKeysReq"][$i] = $_masterKey;
}

$pageObject = new ChartPage($params);
$pageObject->init();

// Save search processing
if( postvalue("saveSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$searchParams = $pageObject->getSearchParamsForSaving();
	$pageObject->searchLogger->saveSearch( $searchName, $searchParams );
	
	$pageObject->searchClauseObj->savedSearchIsRun = true;
	$_SESSION[$pageObject->sessionPrefix.'_advsearch'] = serialize( $pageObject->searchClauseObj );
	
	echo my_json_encode( $searchParams );
	exit();
}
// Delete the saved search
if( postvalue("deleteSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$pageObject->searchLogger->deleteSearch( $searchName );
	exit();
}

$pageObject->process();

?>
