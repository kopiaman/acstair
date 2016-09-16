<?php
require_once(getabspath("classes/cipherer.php"));




$tdataconference = array();
	$tdataconference[".truncateText"] = true;
	$tdataconference[".NumberOfChars"] = 80;
	$tdataconference[".ShortName"] = "conference";
	$tdataconference[".OwnerID"] = "";
	$tdataconference[".OriginalTable"] = "conference";

//	field labels
$fieldLabelsconference = array();
$fieldToolTipsconference = array();
$pageTitlesconference = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconference["English"] = array();
	$fieldToolTipsconference["English"] = array();
	$pageTitlesconference["English"] = array();
	$fieldLabelsconference["English"]["cid"] = "Cid";
	$fieldToolTipsconference["English"]["cid"] = "";
	$fieldLabelsconference["English"]["cname"] = "Conference Name";
	$fieldToolTipsconference["English"]["cname"] = "";
	$fieldLabelsconference["English"]["address"] = "Address";
	$fieldToolTipsconference["English"]["address"] = "";
	$fieldLabelsconference["English"]["city"] = "City";
	$fieldToolTipsconference["English"]["city"] = "";
	$fieldLabelsconference["English"]["country"] = "Country";
	$fieldToolTipsconference["English"]["country"] = "";
	$fieldLabelsconference["English"]["cstatus"] = "Status";
	$fieldToolTipsconference["English"]["cstatus"] = "";
	$fieldLabelsconference["English"]["sDate"] = "Date Start";
	$fieldToolTipsconference["English"]["sDate"] = "";
	$fieldLabelsconference["English"]["eDate"] = "End Date";
	$fieldToolTipsconference["English"]["eDate"] = "";
	$fieldLabelsconference["English"]["cTime"] = "Time";
	$fieldToolTipsconference["English"]["cTime"] = "";
	$fieldLabelsconference["English"]["about"] = "About";
	$fieldToolTipsconference["English"]["about"] = "";
	$fieldLabelsconference["English"]["slogan"] = "Slogan";
	$fieldToolTipsconference["English"]["slogan"] = "";
	$fieldLabelsconference["English"]["importantDate"] = "Important Date";
	$fieldToolTipsconference["English"]["importantDate"] = "";
	$fieldLabelsconference["English"]["subTheme"] = "Sub Theme";
	$fieldToolTipsconference["English"]["subTheme"] = "";
	$fieldLabelsconference["English"]["venueInfo"] = "Venue Info";
	$fieldToolTipsconference["English"]["venueInfo"] = "";
	$fieldLabelsconference["English"]["venueMap"] = "Venue Map";
	$fieldToolTipsconference["English"]["venueMap"] = "";
	$fieldLabelsconference["English"]["venuePhoto"] = "Venue Photos";
	$fieldToolTipsconference["English"]["venuePhoto"] = "";
	$fieldLabelsconference["English"]["accomodation"] = "Accomodation";
	$fieldToolTipsconference["English"]["accomodation"] = "";
	$fieldLabelsconference["English"]["location"] = "Location";
	$fieldToolTipsconference["English"]["location"] = "";
	$fieldLabelsconference["English"]["cnameShort"] = "Conference Shortname";
	$fieldToolTipsconference["English"]["cnameShort"] = "";
	$fieldLabelsconference["English"]["cnameCode"] = "Cname Code";
	$fieldToolTipsconference["English"]["cnameCode"] = "";
	$fieldLabelsconference["English"]["visa"] = "Visa";
	$fieldToolTipsconference["English"]["visa"] = "";
	$fieldLabelsconference["English"]["opt"] = "Option";
	$fieldToolTipsconference["English"]["opt"] = "";
	$fieldLabelsconference["English"]["gallery"] = "Gallery Flickr";
	$fieldToolTipsconference["English"]["gallery"] = "";
	$fieldLabelsconference["English"]["proceeding"] = "Proceeding Link";
	$fieldToolTipsconference["English"]["proceeding"] = "";
	if (count($fieldToolTipsconference["English"]))
		$tdataconference[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsconference[""] = array();
	$fieldToolTipsconference[""] = array();
	$pageTitlesconference[""] = array();
	if (count($fieldToolTipsconference[""]))
		$tdataconference[".isUseToolTips"] = true;
}


	$tdataconference[".NCSearch"] = true;



$tdataconference[".shortTableName"] = "conference";
$tdataconference[".nSecOptions"] = 0;
$tdataconference[".recsPerRowList"] = 1;
$tdataconference[".recsPerRowPrint"] = 1;
$tdataconference[".mainTableOwnerID"] = "";
$tdataconference[".moveNext"] = 1;
$tdataconference[".entityType"] = 0;

$tdataconference[".strOriginalTableName"] = "conference";




$tdataconference[".showAddInPopup"] = false;

$tdataconference[".showEditInPopup"] = false;

$tdataconference[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconference[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconference[".fieldsForRegister"] = array();

$tdataconference[".listAjax"] = false;

	$tdataconference[".audit"] = false;

	$tdataconference[".locking"] = false;

$tdataconference[".edit"] = true;
$tdataconference[".afterEditAction"] = 1;
$tdataconference[".closePopupAfterEdit"] = 1;
$tdataconference[".afterEditActionDetTable"] = "";

$tdataconference[".add"] = true;
$tdataconference[".afterAddAction"] = 1;
$tdataconference[".closePopupAfterAdd"] = 1;
$tdataconference[".afterAddActionDetTable"] = "";

$tdataconference[".list"] = true;





$tdataconference[".delete"] = true;

$tdataconference[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataconference[".searchSaving"] = false;
//

$tdataconference[".showSearchPanel"] = true;
		$tdataconference[".flexibleSearch"] = true;

if (isMobile())
	$tdataconference[".isUseAjaxSuggest"] = false;
else
	$tdataconference[".isUseAjaxSuggest"] = true;

$tdataconference[".rowHighlite"] = true;


								
$tdataconference[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconference[".isUseTimeForSearch"] = true;




$tdataconference[".detailsLinksOnList"] = "1";

$tdataconference[".allSearchFields"] = array();
$tdataconference[".filterFields"] = array();
$tdataconference[".requiredSearchFields"] = array();



$tdataconference[".googleLikeFields"] = array();
$tdataconference[".googleLikeFields"][] = "gallery";
$tdataconference[".googleLikeFields"][] = "proceeding";



$tdataconference[".tableType"] = "list";

$tdataconference[".printerPageOrientation"] = 0;
$tdataconference[".nPrinterPageScale"] = 100;

$tdataconference[".nPrinterSplitRecords"] = 40;

$tdataconference[".nPrinterPDFSplitRecords"] = 40;



$tdataconference[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataconference[".pageSize"] = 20;

$tdataconference[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconference[".strOrderBy"] = $tstrOrderBy;

$tdataconference[".orderindexes"] = array();
$tdataconference[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "cid");

$tdataconference[".sqlHead"] = "SELECT cid,  cname,  cnameShort,  cnameCode,  sDate,  eDate,  cTime,  location,  address,  city,  country,  slogan,  about,  importantDate,  subTheme,  venueInfo,  venueMap,  venuePhoto,  accomodation,  visa,  cstatus,  cid AS opt,  gallery,  proceeding";
$tdataconference[".sqlFrom"] = "FROM conference";
$tdataconference[".sqlWhereExpr"] = "";
$tdataconference[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "sDate";
	$tabFields[] = "eDate";
	$tabFields[] = "cTime";
$arrEditTabs[] = array('tabId'=>'Date_Time1',
					   'tabName'=>"Date/Time",
					   'nType'=>'1',
					   'nOrder'=>8,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "location";
	$tabFields[] = "address";
	$tabFields[] = "city";
	$tabFields[] = "country";
	$tabFields[] = "venueInfo";
	$tabFields[] = "venueMap";
	$tabFields[] = "venuePhoto";
$arrEditTabs[] = array('tabId'=>'Venue1',
					   'tabName'=>"Venue",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "about";
$arrEditTabs[] = array('tabId'=>'About1',
					   'tabName'=>"About",
					   'nType'=>'1',
					   'nOrder'=>20,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "subTheme";
$arrEditTabs[] = array('tabId'=>'Sub_Theme1',
					   'tabName'=>"Sub Theme",
					   'nType'=>'1',
					   'nOrder'=>22,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "importantDate";
$arrEditTabs[] = array('tabId'=>'Important_Date1',
					   'tabName'=>"Important Date",
					   'nType'=>'1',
					   'nOrder'=>24,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "accomodation";
$arrEditTabs[] = array('tabId'=>'Accomodation1',
					   'tabName'=>"Accomodation",
					   'nType'=>'1',
					   'nOrder'=>26,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "visa";
$arrEditTabs[] = array('tabId'=>'Visa___Immigration1',
					   'tabName'=>"Visa & Immigration",
					   'nType'=>'1',
					   'nOrder'=>28,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataconference[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "sDate";
	$tabFields[] = "eDate";
	$tabFields[] = "cTime";
$arrAddTabs[] = array('tabId'=>'Date_Time1',
					  'tabName'=>"Date/Time",
					  'nType'=>'1',
					  'nOrder'=>8,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "location";
	$tabFields[] = "address";
	$tabFields[] = "city";
	$tabFields[] = "country";
	$tabFields[] = "venueInfo";
	$tabFields[] = "venueMap";
	$tabFields[] = "venuePhoto";
$arrAddTabs[] = array('tabId'=>'Venue1',
					  'tabName'=>"Venue",
					  'nType'=>'1',
					  'nOrder'=>12,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "about";
$arrAddTabs[] = array('tabId'=>'About1',
					  'tabName'=>"About",
					  'nType'=>'1',
					  'nOrder'=>20,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "subTheme";
$arrAddTabs[] = array('tabId'=>'Sub_Theme1',
					  'tabName'=>"Sub Theme",
					  'nType'=>'1',
					  'nOrder'=>22,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "importantDate";
$arrAddTabs[] = array('tabId'=>'Important_Date1',
					  'tabName'=>"Important Date",
					  'nType'=>'1',
					  'nOrder'=>24,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "accomodation";
$arrAddTabs[] = array('tabId'=>'Accomodation1',
					  'tabName'=>"Accomodation",
					  'nType'=>'1',
					  'nOrder'=>26,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	$tabFields[] = "visa";
$arrAddTabs[] = array('tabId'=>'Visa___Immigration1',
					  'tabName'=>"Visa & Immigration",
					  'nType'=>'1',
					  'nOrder'=>28,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataconference[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Date_Time1',
					   'tabName'=>"Date/Time",
					   'nType'=>'1',
					   'nOrder'=>6,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Venue1',
					   'tabName'=>"Venue",
					   'nType'=>'1',
					   'nOrder'=>10,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'About1',
					   'tabName'=>"About",
					   'nType'=>'1',
					   'nOrder'=>18,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Sub_Theme1',
					   'tabName'=>"Sub Theme",
					   'nType'=>'1',
					   'nOrder'=>20,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Important_Date1',
					   'tabName'=>"Important Date",
					   'nType'=>'1',
					   'nOrder'=>22,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Accomodation1',
					   'tabName'=>"Accomodation",
					   'nType'=>'1',
					   'nOrder'=>24,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Visa___Immigration1',
					   'tabName'=>"Visa & Immigration",
					   'nType'=>'1',
					   'nOrder'=>26,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Follow_Up_Letter1',
					   'tabName'=>"Follow Up Letter",
					   'nType'=>'1',
					   'nOrder'=>28,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataconference[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconference[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconference[".arrGroupsPerPage"] = $arrGPP;


$tableKeysconference = array();
$tableKeysconference[] = "cid";
$tdataconference[".Keys"] = $tableKeysconference;

$tdataconference[".listFields"] = array();
$tdataconference[".listFields"][] = "cnameShort";
$tdataconference[".listFields"][] = "sDate";
$tdataconference[".listFields"][] = "eDate";
$tdataconference[".listFields"][] = "location";
$tdataconference[".listFields"][] = "city";
$tdataconference[".listFields"][] = "cstatus";
$tdataconference[".listFields"][] = "opt";

$tdataconference[".hideMobileList"] = array();


$tdataconference[".viewFields"] = array();

$tdataconference[".addFields"] = array();
$tdataconference[".addFields"][] = "gallery";
$tdataconference[".addFields"][] = "proceeding";
$tdataconference[".addFields"][] = "cnameCode";
$tdataconference[".addFields"][] = "cnameShort";
$tdataconference[".addFields"][] = "cname";
$tdataconference[".addFields"][] = "slogan";
$tdataconference[".addFields"][] = "cstatus";
$tdataconference[".addFields"][] = "sDate";
$tdataconference[".addFields"][] = "eDate";
$tdataconference[".addFields"][] = "cTime";
$tdataconference[".addFields"][] = "location";
$tdataconference[".addFields"][] = "address";
$tdataconference[".addFields"][] = "city";
$tdataconference[".addFields"][] = "country";
$tdataconference[".addFields"][] = "venueInfo";
$tdataconference[".addFields"][] = "venueMap";
$tdataconference[".addFields"][] = "venuePhoto";
$tdataconference[".addFields"][] = "about";
$tdataconference[".addFields"][] = "subTheme";
$tdataconference[".addFields"][] = "importantDate";
$tdataconference[".addFields"][] = "accomodation";
$tdataconference[".addFields"][] = "visa";

$tdataconference[".masterListFields"] = array();
$tdataconference[".masterListFields"][] = "cid";
$tdataconference[".masterListFields"][] = "gallery";
$tdataconference[".masterListFields"][] = "opt";
$tdataconference[".masterListFields"][] = "proceeding";
$tdataconference[".masterListFields"][] = "cnameCode";
$tdataconference[".masterListFields"][] = "cnameShort";
$tdataconference[".masterListFields"][] = "cname";
$tdataconference[".masterListFields"][] = "slogan";
$tdataconference[".masterListFields"][] = "cstatus";
$tdataconference[".masterListFields"][] = "sDate";
$tdataconference[".masterListFields"][] = "eDate";
$tdataconference[".masterListFields"][] = "cTime";
$tdataconference[".masterListFields"][] = "location";
$tdataconference[".masterListFields"][] = "address";
$tdataconference[".masterListFields"][] = "city";
$tdataconference[".masterListFields"][] = "country";
$tdataconference[".masterListFields"][] = "venueInfo";
$tdataconference[".masterListFields"][] = "venueMap";
$tdataconference[".masterListFields"][] = "venuePhoto";
$tdataconference[".masterListFields"][] = "about";
$tdataconference[".masterListFields"][] = "subTheme";
$tdataconference[".masterListFields"][] = "importantDate";
$tdataconference[".masterListFields"][] = "accomodation";
$tdataconference[".masterListFields"][] = "visa";

$tdataconference[".inlineAddFields"] = array();

$tdataconference[".editFields"] = array();
$tdataconference[".editFields"][] = "cnameCode";
$tdataconference[".editFields"][] = "cnameShort";
$tdataconference[".editFields"][] = "cname";
$tdataconference[".editFields"][] = "slogan";
$tdataconference[".editFields"][] = "gallery";
$tdataconference[".editFields"][] = "proceeding";
$tdataconference[".editFields"][] = "cstatus";
$tdataconference[".editFields"][] = "sDate";
$tdataconference[".editFields"][] = "eDate";
$tdataconference[".editFields"][] = "cTime";
$tdataconference[".editFields"][] = "location";
$tdataconference[".editFields"][] = "address";
$tdataconference[".editFields"][] = "city";
$tdataconference[".editFields"][] = "country";
$tdataconference[".editFields"][] = "venueInfo";
$tdataconference[".editFields"][] = "venueMap";
$tdataconference[".editFields"][] = "venuePhoto";
$tdataconference[".editFields"][] = "about";
$tdataconference[".editFields"][] = "subTheme";
$tdataconference[".editFields"][] = "importantDate";
$tdataconference[".editFields"][] = "accomodation";
$tdataconference[".editFields"][] = "visa";

$tdataconference[".inlineEditFields"] = array();

$tdataconference[".exportFields"] = array();

$tdataconference[".importFields"] = array();

$tdataconference[".printFields"] = array();

//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","cid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cid";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["cid"] = $fdata;
//	cname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cname";
	$fdata["GoodName"] = "cname";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","cname");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cname";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 335;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["cname"] = $fdata;
//	cnameShort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cnameShort";
	$fdata["GoodName"] = "cnameShort";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","cnameShort");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cnameShort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cnameShort";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["cnameShort"] = $fdata;
//	cnameCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cnameCode";
	$fdata["GoodName"] = "cnameCode";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","cnameCode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cnameCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cnameCode";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["cnameCode"] = $fdata;
//	sDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sDate";
	$fdata["GoodName"] = "sDate";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","sDate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "sDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 3;

	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["sDate"] = $fdata;
//	eDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eDate";
	$fdata["GoodName"] = "eDate";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","eDate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "eDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 3;

	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["eDate"] = $fdata;
//	cTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cTime";
	$fdata["GoodName"] = "cTime";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","cTime");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cTime";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["cTime"] = $fdata;
//	location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "location";
	$fdata["GoodName"] = "location";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","location");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "location";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 366;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["location"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","address");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 360;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["address"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","city");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 250;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["city"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","country");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 179;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["country"] = $fdata;
//	slogan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "slogan";
	$fdata["GoodName"] = "slogan";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","slogan");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "slogan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "slogan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 239;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["slogan"] = $fdata;
//	about
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "about";
	$fdata["GoodName"] = "about";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","about");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "about";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "about";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 300;
			$edata["nCols"] = 700;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["about"] = $fdata;
//	importantDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "importantDate";
	$fdata["GoodName"] = "importantDate";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","importantDate");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "importantDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "importantDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 130;
			$edata["nCols"] = 700;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["importantDate"] = $fdata;
//	subTheme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "subTheme";
	$fdata["GoodName"] = "subTheme";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","subTheme");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "subTheme";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subTheme";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 300;
			$edata["nCols"] = 700;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["subTheme"] = $fdata;
//	venueInfo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "venueInfo";
	$fdata["GoodName"] = "venueInfo";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","venueInfo");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "venueInfo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "venueInfo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 331;
			$edata["nCols"] = 700;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["venueInfo"] = $fdata;
//	venueMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "venueMap";
	$fdata["GoodName"] = "venueMap";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","venueMap");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "venueMap";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "venueMap";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 700;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["venueMap"] = $fdata;
//	venuePhoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "venuePhoto";
	$fdata["GoodName"] = "venuePhoto";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","venuePhoto");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "venuePhoto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "venuePhoto";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 5;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["venuePhoto"] = $fdata;
//	accomodation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "accomodation";
	$fdata["GoodName"] = "accomodation";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","accomodation");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "accomodation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "accomodation";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 746;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["accomodation"] = $fdata;
//	visa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "visa";
	$fdata["GoodName"] = "visa";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","visa");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "visa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visa";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 300;
			$edata["nCols"] = 700;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["visa"] = $fdata;
//	cstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cstatus";
	$fdata["GoodName"] = "cstatus";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","cstatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cstatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cstatus";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "fname";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fname";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["cstatus"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["opt"] = $fdata;
//	gallery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "gallery";
	$fdata["GoodName"] = "gallery";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","gallery");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "gallery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gallery";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 337;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["gallery"] = $fdata;
//	proceeding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "proceeding";
	$fdata["GoodName"] = "proceeding";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("conference","proceeding");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "proceeding";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proceeding";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 339;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconference["proceeding"] = $fdata;


$tables_data["conference"]=&$tdataconference;
$field_labels["conference"] = &$fieldLabelsconference;
$fieldToolTips["conference"] = &$fieldToolTipsconference;
$page_titles["conference"] = &$pageTitlesconference;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["conference"] = array();
//	conslider
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="conslider";
		$detailsParam["dOriginalTable"] = "conslider";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "conslider";
	$detailsParam["dCaptionTable"] = GetTableCaption("conslider");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["conference"][$dIndex] = $detailsParam;

	
		$detailsTablesData["conference"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["masterKeys"][]="cid";

				$detailsTablesData["conference"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["detailKeys"][]="cid";
//	congallery
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="congallery";
		$detailsParam["dOriginalTable"] = "congallery";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "congallery";
	$detailsParam["dCaptionTable"] = GetTableCaption("congallery");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["conference"][$dIndex] = $detailsParam;

	
		$detailsTablesData["conference"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["masterKeys"][]="cid";

				$detailsTablesData["conference"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["detailKeys"][]="cid";
//	confees
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="confees";
		$detailsParam["dOriginalTable"] = "confees";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "confees";
	$detailsParam["dCaptionTable"] = GetTableCaption("confees");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["conference"][$dIndex] = $detailsParam;

	
		$detailsTablesData["conference"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["masterKeys"][]="cid";

				$detailsTablesData["conference"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["detailKeys"][]="cid";
//	followup
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="followup";
		$detailsParam["dOriginalTable"] = "followup";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "followup";
	$detailsParam["dCaptionTable"] = GetTableCaption("followup");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
			$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["conference"][$dIndex] = $detailsParam;

	
		$detailsTablesData["conference"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["masterKeys"][]="cid";

				$detailsTablesData["conference"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["conference"][$dIndex]["detailKeys"][]="cid";

// tables which are master tables for current table (detail)
$masterTablesData["conference"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_conference()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cid,  cname,  cnameShort,  cnameCode,  sDate,  eDate,  cTime,  location,  address,  city,  country,  slogan,  about,  importantDate,  subTheme,  venueInfo,  venueMap,  venuePhoto,  accomodation,  visa,  cstatus,  cid AS opt,  gallery,  proceeding";
$proto0["m_strFrom"] = "FROM conference";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY cid DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto5["m_sql"] = "cid";
$proto5["m_srcTableName"] = "conference";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cname",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto7["m_sql"] = "cname";
$proto7["m_srcTableName"] = "conference";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cnameShort",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto9["m_sql"] = "cnameShort";
$proto9["m_srcTableName"] = "conference";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cnameCode",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto11["m_sql"] = "cnameCode";
$proto11["m_srcTableName"] = "conference";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sDate",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto13["m_sql"] = "sDate";
$proto13["m_srcTableName"] = "conference";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "eDate",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto15["m_sql"] = "eDate";
$proto15["m_srcTableName"] = "conference";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cTime",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto17["m_sql"] = "cTime";
$proto17["m_srcTableName"] = "conference";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "location",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto19["m_sql"] = "location";
$proto19["m_srcTableName"] = "conference";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto21["m_sql"] = "address";
$proto21["m_srcTableName"] = "conference";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto23["m_sql"] = "city";
$proto23["m_srcTableName"] = "conference";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto25["m_sql"] = "country";
$proto25["m_srcTableName"] = "conference";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "slogan",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto27["m_sql"] = "slogan";
$proto27["m_srcTableName"] = "conference";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "about",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto29["m_sql"] = "about";
$proto29["m_srcTableName"] = "conference";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "importantDate",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto31["m_sql"] = "importantDate";
$proto31["m_srcTableName"] = "conference";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "subTheme",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto33["m_sql"] = "subTheme";
$proto33["m_srcTableName"] = "conference";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "venueInfo",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto35["m_sql"] = "venueInfo";
$proto35["m_srcTableName"] = "conference";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "venueMap",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto37["m_sql"] = "venueMap";
$proto37["m_srcTableName"] = "conference";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "venuePhoto",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto39["m_sql"] = "venuePhoto";
$proto39["m_srcTableName"] = "conference";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "accomodation",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto41["m_sql"] = "accomodation";
$proto41["m_srcTableName"] = "conference";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "visa",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto43["m_sql"] = "visa";
$proto43["m_srcTableName"] = "conference";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "cstatus",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto45["m_sql"] = "cstatus";
$proto45["m_srcTableName"] = "conference";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto47["m_sql"] = "cid";
$proto47["m_srcTableName"] = "conference";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "gallery",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto49["m_sql"] = "gallery";
$proto49["m_srcTableName"] = "conference";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "proceeding",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto51["m_sql"] = "proceeding";
$proto51["m_srcTableName"] = "conference";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto53=array();
$proto53["m_link"] = "SQLL_MAIN";
			$proto54=array();
$proto54["m_strName"] = "conference";
$proto54["m_srcTableName"] = "conference";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "cid";
$proto54["m_columns"][] = "cname";
$proto54["m_columns"][] = "cnameShort";
$proto54["m_columns"][] = "cnameCode";
$proto54["m_columns"][] = "sDate";
$proto54["m_columns"][] = "eDate";
$proto54["m_columns"][] = "cTime";
$proto54["m_columns"][] = "location";
$proto54["m_columns"][] = "address";
$proto54["m_columns"][] = "city";
$proto54["m_columns"][] = "country";
$proto54["m_columns"][] = "slogan";
$proto54["m_columns"][] = "about";
$proto54["m_columns"][] = "importantDate";
$proto54["m_columns"][] = "subTheme";
$proto54["m_columns"][] = "venueInfo";
$proto54["m_columns"][] = "venueAttract";
$proto54["m_columns"][] = "venueMap";
$proto54["m_columns"][] = "venuePhoto";
$proto54["m_columns"][] = "accomodation";
$proto54["m_columns"][] = "visa";
$proto54["m_columns"][] = "cstatus";
$proto54["m_columns"][] = "gallery";
$proto54["m_columns"][] = "proceeding";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "conference";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "conference";
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "conference",
	"m_srcTableName" => "conference"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="conference";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conference = createSqlQuery_conference();



																								

$tdataconference[".sqlquery"] = $queryData_conference;

$tableEvents["conference"] = new eventsBase;
$tdataconference[".hasEvents"] = false;

?>