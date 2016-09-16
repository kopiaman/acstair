<?php
require_once(getabspath("classes/cipherer.php"));




$tdataslot = array();
	$tdataslot[".truncateText"] = true;
	$tdataslot[".NumberOfChars"] = 200;
	$tdataslot[".ShortName"] = "slot";
	$tdataslot[".OwnerID"] = "userID";
	$tdataslot[".OriginalTable"] = "paper";

//	field labels
$fieldLabelsslot = array();
$fieldToolTipsslot = array();
$pageTitlesslot = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsslot["English"] = array();
	$fieldToolTipsslot["English"] = array();
	$pageTitlesslot["English"] = array();
	$fieldLabelsslot["English"]["paperID"] = "ID";
	$fieldToolTipsslot["English"]["paperID"] = "";
	$fieldLabelsslot["English"]["userID"] = "Presenter";
	$fieldToolTipsslot["English"]["userID"] = "";
	$fieldLabelsslot["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipsslot["English"]["paperStatus"] = "";
	$fieldLabelsslot["English"]["title"] = "Title";
	$fieldToolTipsslot["English"]["title"] = "";
	$fieldLabelsslot["English"]["cid"] = "Conference ";
	$fieldToolTipsslot["English"]["cid"] = "";
	$fieldLabelsslot["English"]["paymentStatus"] = "Payment Status";
	$fieldToolTipsslot["English"]["paymentStatus"] = "";
	$fieldLabelsslot["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsslot["English"]["paperRef"] = "";
	$fieldLabelsslot["English"]["slotDate"] = "Day";
	$fieldToolTipsslot["English"]["slotDate"] = "";
	$fieldLabelsslot["English"]["slotTime"] = "Time";
	$fieldToolTipsslot["English"]["slotTime"] = "";
	$fieldLabelsslot["English"]["slotRoom"] = "Room";
	$fieldToolTipsslot["English"]["slotRoom"] = "";
	$fieldLabelsslot["English"]["slotTurn"] = "Turn";
	$fieldToolTipsslot["English"]["slotTurn"] = "";
	$fieldLabelsslot["English"]["opt"] = "Option";
	$fieldToolTipsslot["English"]["opt"] = "";
	if (count($fieldToolTipsslot["English"]))
		$tdataslot[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsslot[""] = array();
	$fieldToolTipsslot[""] = array();
	$pageTitlesslot[""] = array();
	if (count($fieldToolTipsslot[""]))
		$tdataslot[".isUseToolTips"] = true;
}


	$tdataslot[".NCSearch"] = true;



$tdataslot[".shortTableName"] = "slot";
$tdataslot[".nSecOptions"] = 1;
$tdataslot[".recsPerRowList"] = 1;
$tdataslot[".recsPerRowPrint"] = 1;
$tdataslot[".mainTableOwnerID"] = "userID";
$tdataslot[".moveNext"] = 1;
$tdataslot[".entityType"] = 1;

$tdataslot[".strOriginalTableName"] = "paper";




$tdataslot[".showAddInPopup"] = false;

$tdataslot[".showEditInPopup"] = false;

$tdataslot[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataslot[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataslot[".fieldsForRegister"] = array();

$tdataslot[".listAjax"] = false;

	$tdataslot[".audit"] = false;

	$tdataslot[".locking"] = false;



$tdataslot[".list"] = true;

$tdataslot[".inlineEdit"] = true;





$tdataslot[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataslot[".searchSaving"] = false;
//

$tdataslot[".showSearchPanel"] = true;
		$tdataslot[".flexibleSearch"] = true;

if (isMobile())
	$tdataslot[".isUseAjaxSuggest"] = false;
else
	$tdataslot[".isUseAjaxSuggest"] = true;

$tdataslot[".rowHighlite"] = true;


								
$tdataslot[".addPageEvents"] = false;

// use timepicker for search panel
$tdataslot[".isUseTimeForSearch"] = false;





$tdataslot[".allSearchFields"] = array();
$tdataslot[".filterFields"] = array();
$tdataslot[".requiredSearchFields"] = array();

$tdataslot[".allSearchFields"][] = "userID";
	$tdataslot[".allSearchFields"][] = "paperRef";
	$tdataslot[".allSearchFields"][] = "cid";
	$tdataslot[".allSearchFields"][] = "title";
	$tdataslot[".allSearchFields"][] = "slotDate";
	$tdataslot[".allSearchFields"][] = "slotRoom";
	$tdataslot[".allSearchFields"][] = "slotTime";
	$tdataslot[".allSearchFields"][] = "slotTurn";
	

$tdataslot[".googleLikeFields"] = array();
$tdataslot[".googleLikeFields"][] = "slotDate";
$tdataslot[".googleLikeFields"][] = "slotTime";
$tdataslot[".googleLikeFields"][] = "slotRoom";
$tdataslot[".googleLikeFields"][] = "slotTurn";
$tdataslot[".googleLikeFields"][] = "opt";

$tdataslot[".panelSearchFields"] = array();
$tdataslot[".searchPanelOptions"] = array();
$tdataslot[".panelSearchFields"][] = "paperRef";
	$tdataslot[".panelSearchFields"][] = "title";
	$tdataslot[".panelSearchFields"][] = "paperStatus";
	$tdataslot[".panelSearchFields"][] = "paymentStatus";
	
$tdataslot[".advSearchFields"] = array();
$tdataslot[".advSearchFields"][] = "userID";
$tdataslot[".advSearchFields"][] = "paperRef";
$tdataslot[".advSearchFields"][] = "cid";
$tdataslot[".advSearchFields"][] = "title";
$tdataslot[".advSearchFields"][] = "slotDate";
$tdataslot[".advSearchFields"][] = "slotRoom";
$tdataslot[".advSearchFields"][] = "slotTime";
$tdataslot[".advSearchFields"][] = "slotTurn";

$tdataslot[".tableType"] = "list";

$tdataslot[".printerPageOrientation"] = 0;
$tdataslot[".nPrinterPageScale"] = 100;

$tdataslot[".nPrinterSplitRecords"] = 40;

$tdataslot[".nPrinterPDFSplitRecords"] = 40;



$tdataslot[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataslot[".pageSize"] = 20;

$tdataslot[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY paperID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataslot[".strOrderBy"] = $tstrOrderBy;

$tdataslot[".orderindexes"] = array();
$tdataslot[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "paperID");

$tdataslot[".sqlHead"] = "SELECT paperID,  userID,  cid,  title,  paperStatus,  paymentStatus,  paperRef,  slotDate,  slotTime,  slotRoom,  slotTurn,  paperID AS opt";
$tdataslot[".sqlFrom"] = "FROM paper";
$tdataslot[".sqlWhereExpr"] = "(paperStatus LIKE 'FP-OK') AND (paymentStatus LIKE 'Paid')";
$tdataslot[".sqlTail"] = "";



//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Institution_11',
					  'tabName'=>"Author 1",
					  'nType'=>'1',
					  'nOrder'=>5,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Institution_21',
					  'tabName'=>"Author 2",
					  'nType'=>'1',
					  'nOrder'=>10,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataslot[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Institution_11',
					   'tabName'=>"Author 1",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Institution_21',
					   'tabName'=>"Author 2",
					   'nType'=>'1',
					   'nOrder'=>10,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataslot[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataslot[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataslot[".arrGroupsPerPage"] = $arrGPP;


$tableKeysslot = array();
$tableKeysslot[] = "paperID";
$tdataslot[".Keys"] = $tableKeysslot;

$tdataslot[".listFields"] = array();
$tdataslot[".listFields"][] = "userID";
$tdataslot[".listFields"][] = "paperRef";
$tdataslot[".listFields"][] = "cid";
$tdataslot[".listFields"][] = "title";
$tdataslot[".listFields"][] = "slotDate";
$tdataslot[".listFields"][] = "slotRoom";
$tdataslot[".listFields"][] = "slotTime";
$tdataslot[".listFields"][] = "slotTurn";
$tdataslot[".listFields"][] = "opt";

$tdataslot[".hideMobileList"] = array();


$tdataslot[".viewFields"] = array();

$tdataslot[".addFields"] = array();

$tdataslot[".masterListFields"] = array();
$tdataslot[".masterListFields"][] = "opt";
$tdataslot[".masterListFields"][] = "userID";
$tdataslot[".masterListFields"][] = "paperID";
$tdataslot[".masterListFields"][] = "paperRef";
$tdataslot[".masterListFields"][] = "cid";
$tdataslot[".masterListFields"][] = "title";
$tdataslot[".masterListFields"][] = "slotDate";
$tdataslot[".masterListFields"][] = "slotRoom";
$tdataslot[".masterListFields"][] = "slotTime";
$tdataslot[".masterListFields"][] = "slotTurn";
$tdataslot[".masterListFields"][] = "paperStatus";
$tdataslot[".masterListFields"][] = "paymentStatus";

$tdataslot[".inlineAddFields"] = array();

$tdataslot[".editFields"] = array();

$tdataslot[".inlineEditFields"] = array();
$tdataslot[".inlineEditFields"][] = "slotDate";
$tdataslot[".inlineEditFields"][] = "slotRoom";
$tdataslot[".inlineEditFields"][] = "slotTime";
$tdataslot[".inlineEditFields"][] = "slotTurn";

$tdataslot[".exportFields"] = array();

$tdataslot[".importFields"] = array();
$tdataslot[".importFields"][] = "paperID";
$tdataslot[".importFields"][] = "userID";
$tdataslot[".importFields"][] = "cid";
$tdataslot[".importFields"][] = "title";
$tdataslot[".importFields"][] = "paperStatus";
$tdataslot[".importFields"][] = "paymentStatus";
$tdataslot[".importFields"][] = "paperRef";
$tdataslot[".importFields"][] = "slotDate";
$tdataslot[".importFields"][] = "slotTime";
$tdataslot[".importFields"][] = "slotRoom";
$tdataslot[".importFields"][] = "slotTurn";
$tdataslot[".importFields"][] = "opt";

$tdataslot[".printFields"] = array();

//	paperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "paperID";
	$fdata["GoodName"] = "paperID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","paperID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paperID";

	
	
			
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








	$tdataslot["paperID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userID";

	
	
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "userID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullName";

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cid";

	
	
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
	$edata["LookupTable"] = "conference";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "cid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cnameShort";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["cid"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["title"] = $fdata;
//	paperStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paperStatus";
	$fdata["GoodName"] = "paperStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","paperStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paperStatus";

	
	
			
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
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fvalue";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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








	$tdataslot["paperStatus"] = $fdata;
//	paymentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "paymentStatus";
	$fdata["GoodName"] = "paymentStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","paymentStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paymentStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paymentStatus";

	
	
			
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
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fvalue";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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








	$tdataslot["paymentStatus"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "paperRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paperRef";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["paperRef"] = $fdata;
//	slotDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "slotDate";
	$fdata["GoodName"] = "slotDate";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","slotDate");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "slotDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "slotDate";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["slotDate"] = $fdata;
//	slotTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "slotTime";
	$fdata["GoodName"] = "slotTime";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","slotTime");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "slotTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "slotTime";

	
	
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
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fname";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "fname";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["slotTime"] = $fdata;
//	slotRoom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "slotRoom";
	$fdata["GoodName"] = "slotRoom";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","slotRoom");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "slotRoom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "slotRoom";

	
	
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
		
		$edata["controlWidth"] = 65;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["slotRoom"] = $fdata;
//	slotTurn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "slotTurn";
	$fdata["GoodName"] = "slotTurn";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","slotTurn");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "slotTurn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "slotTurn";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataslot["slotTurn"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("slot","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paperID";

	
	
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








	$tdataslot["opt"] = $fdata;


$tables_data["slot"]=&$tdataslot;
$field_labels["slot"] = &$fieldLabelsslot;
$fieldToolTips["slot"] = &$fieldToolTipsslot;
$page_titles["slot"] = &$pageTitlesslot;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["slot"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["slot"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_slot()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paperID,  userID,  cid,  title,  paperStatus,  paymentStatus,  paperRef,  slotDate,  slotTime,  slotRoom,  slotTurn,  paperID AS opt";
$proto0["m_strFrom"] = "FROM paper";
$proto0["m_strWhere"] = "(paperStatus LIKE 'FP-OK') AND (paymentStatus LIKE 'Paid')";
$proto0["m_strOrderBy"] = "ORDER BY paperID DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(paperStatus LIKE 'FP-OK') AND (paymentStatus LIKE 'Paid')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(paperStatus LIKE 'FP-OK') AND (paymentStatus LIKE 'Paid')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "paperStatus LIKE 'FP-OK'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "LIKE 'FP-OK'";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "paymentStatus LIKE 'Paid'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "LIKE 'Paid'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto9["m_sql"] = "paperID";
$proto9["m_srcTableName"] = "slot";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto11["m_sql"] = "userID";
$proto11["m_srcTableName"] = "slot";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto13["m_sql"] = "cid";
$proto13["m_srcTableName"] = "slot";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto15["m_sql"] = "title";
$proto15["m_srcTableName"] = "slot";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto17["m_sql"] = "paperStatus";
$proto17["m_srcTableName"] = "slot";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto19["m_sql"] = "paymentStatus";
$proto19["m_srcTableName"] = "slot";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto21["m_sql"] = "paperRef";
$proto21["m_srcTableName"] = "slot";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "slotDate",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto23["m_sql"] = "slotDate";
$proto23["m_srcTableName"] = "slot";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "slotTime",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto25["m_sql"] = "slotTime";
$proto25["m_srcTableName"] = "slot";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "slotRoom",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto27["m_sql"] = "slotRoom";
$proto27["m_srcTableName"] = "slot";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "slotTurn",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto29["m_sql"] = "slotTurn";
$proto29["m_srcTableName"] = "slot";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto31["m_sql"] = "paperID";
$proto31["m_srcTableName"] = "slot";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "paper";
$proto34["m_srcTableName"] = "slot";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "paperID";
$proto34["m_columns"][] = "paperRef";
$proto34["m_columns"][] = "userID";
$proto34["m_columns"][] = "cid";
$proto34["m_columns"][] = "multiAuthor";
$proto34["m_columns"][] = "funded";
$proto34["m_columns"][] = "date_submit";
$proto34["m_columns"][] = "title";
$proto34["m_columns"][] = "abstract";
$proto34["m_columns"][] = "paperStatus";
$proto34["m_columns"][] = "fullPaper";
$proto34["m_columns"][] = "paymentStatus";
$proto34["m_columns"][] = "slotDate";
$proto34["m_columns"][] = "slotTime";
$proto34["m_columns"][] = "slotRoom";
$proto34["m_columns"][] = "slotTurn";
$proto34["m_columns"][] = "invite";
$proto34["m_columns"][] = "note";
$proto34["m_columns"][] = "ppt";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "paper";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "slot";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "slot"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="slot";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_slot = createSqlQuery_slot();



												

$tdataslot[".sqlquery"] = $queryData_slot;

$tableEvents["slot"] = new eventsBase;
$tdataslot[".hasEvents"] = false;

?>