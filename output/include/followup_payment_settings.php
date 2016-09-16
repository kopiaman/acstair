<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafollowup_payment = array();
	$tdatafollowup_payment[".truncateText"] = true;
	$tdatafollowup_payment[".NumberOfChars"] = 200;
	$tdatafollowup_payment[".ShortName"] = "followup_payment";
	$tdatafollowup_payment[".OwnerID"] = "userID";
	$tdatafollowup_payment[".OriginalTable"] = "paper";

//	field labels
$fieldLabelsfollowup_payment = array();
$fieldToolTipsfollowup_payment = array();
$pageTitlesfollowup_payment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollowup_payment["English"] = array();
	$fieldToolTipsfollowup_payment["English"] = array();
	$pageTitlesfollowup_payment["English"] = array();
	$fieldLabelsfollowup_payment["English"]["paperID"] = "ID";
	$fieldToolTipsfollowup_payment["English"]["paperID"] = "";
	$fieldLabelsfollowup_payment["English"]["userID"] = "User ";
	$fieldToolTipsfollowup_payment["English"]["userID"] = "";
	$fieldLabelsfollowup_payment["English"]["funded"] = "Funded";
	$fieldToolTipsfollowup_payment["English"]["funded"] = "";
	$fieldLabelsfollowup_payment["English"]["abstract"] = "AB";
	$fieldToolTipsfollowup_payment["English"]["abstract"] = "";
	$fieldLabelsfollowup_payment["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipsfollowup_payment["English"]["paperStatus"] = "";
	$fieldLabelsfollowup_payment["English"]["title"] = "Title";
	$fieldToolTipsfollowup_payment["English"]["title"] = "";
	$fieldLabelsfollowup_payment["English"]["cid"] = "Conference ";
	$fieldToolTipsfollowup_payment["English"]["cid"] = "";
	$fieldLabelsfollowup_payment["English"]["date_submit"] = "Date Submit";
	$fieldToolTipsfollowup_payment["English"]["date_submit"] = "";
	$fieldLabelsfollowup_payment["English"]["paymentStatus"] = "Payment Status";
	$fieldToolTipsfollowup_payment["English"]["paymentStatus"] = "";
	$fieldLabelsfollowup_payment["English"]["fullPaper"] = "FP";
	$fieldToolTipsfollowup_payment["English"]["fullPaper"] = "";
	$fieldLabelsfollowup_payment["English"]["fullName"] = "Full Name";
	$fieldToolTipsfollowup_payment["English"]["fullName"] = "";
	$fieldLabelsfollowup_payment["English"]["institution"] = "Institution";
	$fieldToolTipsfollowup_payment["English"]["institution"] = "";
	$fieldLabelsfollowup_payment["English"]["multiAuthor"] = "Multi Author";
	$fieldToolTipsfollowup_payment["English"]["multiAuthor"] = "";
	$fieldLabelsfollowup_payment["English"]["opt"] = "File";
	$fieldToolTipsfollowup_payment["English"]["opt"] = "";
	$fieldLabelsfollowup_payment["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsfollowup_payment["English"]["paperRef"] = "";
	$fieldLabelsfollowup_payment["English"]["followup"] = "Follow Up";
	$fieldToolTipsfollowup_payment["English"]["followup"] = "";
	$fieldLabelsfollowup_payment["English"]["email"] = "Email";
	$fieldToolTipsfollowup_payment["English"]["email"] = "";
	$fieldLabelsfollowup_payment["English"]["note"] = "Note";
	$fieldToolTipsfollowup_payment["English"]["note"] = "";
	if (count($fieldToolTipsfollowup_payment["English"]))
		$tdatafollowup_payment[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfollowup_payment[""] = array();
	$fieldToolTipsfollowup_payment[""] = array();
	$pageTitlesfollowup_payment[""] = array();
	if (count($fieldToolTipsfollowup_payment[""]))
		$tdatafollowup_payment[".isUseToolTips"] = true;
}


	$tdatafollowup_payment[".NCSearch"] = true;



$tdatafollowup_payment[".shortTableName"] = "followup_payment";
$tdatafollowup_payment[".nSecOptions"] = 1;
$tdatafollowup_payment[".recsPerRowList"] = 1;
$tdatafollowup_payment[".recsPerRowPrint"] = 1;
$tdatafollowup_payment[".mainTableOwnerID"] = "userID";
$tdatafollowup_payment[".moveNext"] = 1;
$tdatafollowup_payment[".entityType"] = 1;

$tdatafollowup_payment[".strOriginalTableName"] = "paper";




$tdatafollowup_payment[".showAddInPopup"] = false;

$tdatafollowup_payment[".showEditInPopup"] = false;

$tdatafollowup_payment[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafollowup_payment[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafollowup_payment[".fieldsForRegister"] = array();

$tdatafollowup_payment[".listAjax"] = false;

	$tdatafollowup_payment[".audit"] = false;

	$tdatafollowup_payment[".locking"] = false;



$tdatafollowup_payment[".list"] = true;

$tdatafollowup_payment[".inlineEdit"] = true;
$tdatafollowup_payment[".view"] = true;


$tdatafollowup_payment[".exportTo"] = true;


$tdatafollowup_payment[".delete"] = true;

$tdatafollowup_payment[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafollowup_payment[".searchSaving"] = false;
//

$tdatafollowup_payment[".showSearchPanel"] = true;
		$tdatafollowup_payment[".flexibleSearch"] = true;

if (isMobile())
	$tdatafollowup_payment[".isUseAjaxSuggest"] = false;
else
	$tdatafollowup_payment[".isUseAjaxSuggest"] = true;

$tdatafollowup_payment[".rowHighlite"] = true;


								
$tdatafollowup_payment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollowup_payment[".isUseTimeForSearch"] = false;





$tdatafollowup_payment[".allSearchFields"] = array();
$tdatafollowup_payment[".filterFields"] = array();
$tdatafollowup_payment[".requiredSearchFields"] = array();

$tdatafollowup_payment[".allSearchFields"][] = "paperRef";
	$tdatafollowup_payment[".allSearchFields"][] = "fullName";
	$tdatafollowup_payment[".allSearchFields"][] = "title";
	$tdatafollowup_payment[".allSearchFields"][] = "funded";
	$tdatafollowup_payment[".allSearchFields"][] = "date_submit";
	$tdatafollowup_payment[".allSearchFields"][] = "paperStatus";
	$tdatafollowup_payment[".allSearchFields"][] = "paymentStatus";
	$tdatafollowup_payment[".allSearchFields"][] = "note";
	

$tdatafollowup_payment[".googleLikeFields"] = array();
$tdatafollowup_payment[".googleLikeFields"][] = "followup";
$tdatafollowup_payment[".googleLikeFields"][] = "email";
$tdatafollowup_payment[".googleLikeFields"][] = "note";

$tdatafollowup_payment[".panelSearchFields"] = array();
$tdatafollowup_payment[".searchPanelOptions"] = array();
$tdatafollowup_payment[".panelSearchFields"][] = "paperRef";
	$tdatafollowup_payment[".panelSearchFields"][] = "fullName";
	$tdatafollowup_payment[".panelSearchFields"][] = "institution";
	$tdatafollowup_payment[".panelSearchFields"][] = "title";
	$tdatafollowup_payment[".panelSearchFields"][] = "funded";
	$tdatafollowup_payment[".panelSearchFields"][] = "date_submit";
	$tdatafollowup_payment[".panelSearchFields"][] = "paperStatus";
	$tdatafollowup_payment[".panelSearchFields"][] = "paymentStatus";
	$tdatafollowup_payment[".panelSearchFields"][] = "multiAuthor";
	
$tdatafollowup_payment[".advSearchFields"] = array();
$tdatafollowup_payment[".advSearchFields"][] = "paperRef";
$tdatafollowup_payment[".advSearchFields"][] = "fullName";
$tdatafollowup_payment[".advSearchFields"][] = "title";
$tdatafollowup_payment[".advSearchFields"][] = "funded";
$tdatafollowup_payment[".advSearchFields"][] = "date_submit";
$tdatafollowup_payment[".advSearchFields"][] = "paperStatus";
$tdatafollowup_payment[".advSearchFields"][] = "paymentStatus";
$tdatafollowup_payment[".advSearchFields"][] = "note";

$tdatafollowup_payment[".tableType"] = "list";

$tdatafollowup_payment[".printerPageOrientation"] = 0;
$tdatafollowup_payment[".nPrinterPageScale"] = 100;

$tdatafollowup_payment[".nPrinterSplitRecords"] = 40;

$tdatafollowup_payment[".nPrinterPDFSplitRecords"] = 40;



$tdatafollowup_payment[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatafollowup_payment[".pageSize"] = 20;

$tdatafollowup_payment[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY paper.paperID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafollowup_payment[".strOrderBy"] = $tstrOrderBy;

$tdatafollowup_payment[".orderindexes"] = array();
$tdatafollowup_payment[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "paper.paperID");

$tdatafollowup_payment[".sqlHead"] = "SELECT paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  paper.multiAuthor,  paper.paperID AS opt,  paper.paperRef,  paper.paperID AS followup,  `user`.email,  paper.note";
$tdatafollowup_payment[".sqlFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
$tdatafollowup_payment[".sqlWhereExpr"] = "paper.paymentStatus !='Paid'";
$tdatafollowup_payment[".sqlTail"] = "";



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
$tdatafollowup_payment[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Institution_11',
					   'tabName'=>"Author 1",
					   'nType'=>'1',
					   'nOrder'=>15,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Institution_21',
					   'tabName'=>"Author 2",
					   'nType'=>'1',
					   'nOrder'=>17,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatafollowup_payment[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollowup_payment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollowup_payment[".arrGroupsPerPage"] = $arrGPP;


$tableKeysfollowup_payment = array();
$tableKeysfollowup_payment[] = "paperID";
$tdatafollowup_payment[".Keys"] = $tableKeysfollowup_payment;

$tdatafollowup_payment[".listFields"] = array();
$tdatafollowup_payment[".listFields"][] = "paperRef";
$tdatafollowup_payment[".listFields"][] = "cid";
$tdatafollowup_payment[".listFields"][] = "fullName";
$tdatafollowup_payment[".listFields"][] = "email";
$tdatafollowup_payment[".listFields"][] = "title";
$tdatafollowup_payment[".listFields"][] = "date_submit";
$tdatafollowup_payment[".listFields"][] = "paperStatus";
$tdatafollowup_payment[".listFields"][] = "paymentStatus";
$tdatafollowup_payment[".listFields"][] = "abstract";
$tdatafollowup_payment[".listFields"][] = "fullPaper";
$tdatafollowup_payment[".listFields"][] = "note";

$tdatafollowup_payment[".hideMobileList"] = array();


$tdatafollowup_payment[".viewFields"] = array();
$tdatafollowup_payment[".viewFields"][] = "note";
$tdatafollowup_payment[".viewFields"][] = "date_submit";
$tdatafollowup_payment[".viewFields"][] = "fullPaper";
$tdatafollowup_payment[".viewFields"][] = "paymentStatus";
$tdatafollowup_payment[".viewFields"][] = "fullName";
$tdatafollowup_payment[".viewFields"][] = "paperRef";
$tdatafollowup_payment[".viewFields"][] = "cid";
$tdatafollowup_payment[".viewFields"][] = "funded";
$tdatafollowup_payment[".viewFields"][] = "paperStatus";
$tdatafollowup_payment[".viewFields"][] = "title";
$tdatafollowup_payment[".viewFields"][] = "abstract";

$tdatafollowup_payment[".addFields"] = array();

$tdatafollowup_payment[".masterListFields"] = array();
$tdatafollowup_payment[".masterListFields"][] = "userID";
$tdatafollowup_payment[".masterListFields"][] = "paperRef";
$tdatafollowup_payment[".masterListFields"][] = "paperID";
$tdatafollowup_payment[".masterListFields"][] = "cid";
$tdatafollowup_payment[".masterListFields"][] = "fullName";
$tdatafollowup_payment[".masterListFields"][] = "email";
$tdatafollowup_payment[".masterListFields"][] = "institution";
$tdatafollowup_payment[".masterListFields"][] = "funded";
$tdatafollowup_payment[".masterListFields"][] = "title";
$tdatafollowup_payment[".masterListFields"][] = "date_submit";
$tdatafollowup_payment[".masterListFields"][] = "paperStatus";
$tdatafollowup_payment[".masterListFields"][] = "paymentStatus";
$tdatafollowup_payment[".masterListFields"][] = "abstract";
$tdatafollowup_payment[".masterListFields"][] = "multiAuthor";
$tdatafollowup_payment[".masterListFields"][] = "followup";
$tdatafollowup_payment[".masterListFields"][] = "fullPaper";
$tdatafollowup_payment[".masterListFields"][] = "note";
$tdatafollowup_payment[".masterListFields"][] = "opt";

$tdatafollowup_payment[".inlineAddFields"] = array();

$tdatafollowup_payment[".editFields"] = array();

$tdatafollowup_payment[".inlineEditFields"] = array();
$tdatafollowup_payment[".inlineEditFields"][] = "note";

$tdatafollowup_payment[".exportFields"] = array();
$tdatafollowup_payment[".exportFields"][] = "userID";
$tdatafollowup_payment[".exportFields"][] = "paperRef";
$tdatafollowup_payment[".exportFields"][] = "paperID";
$tdatafollowup_payment[".exportFields"][] = "cid";
$tdatafollowup_payment[".exportFields"][] = "fullName";
$tdatafollowup_payment[".exportFields"][] = "email";
$tdatafollowup_payment[".exportFields"][] = "title";
$tdatafollowup_payment[".exportFields"][] = "funded";
$tdatafollowup_payment[".exportFields"][] = "date_submit";
$tdatafollowup_payment[".exportFields"][] = "paperStatus";
$tdatafollowup_payment[".exportFields"][] = "paymentStatus";
$tdatafollowup_payment[".exportFields"][] = "abstract";
$tdatafollowup_payment[".exportFields"][] = "fullPaper";
$tdatafollowup_payment[".exportFields"][] = "note";

$tdatafollowup_payment[".importFields"] = array();
$tdatafollowup_payment[".importFields"][] = "paperID";
$tdatafollowup_payment[".importFields"][] = "userID";
$tdatafollowup_payment[".importFields"][] = "cid";
$tdatafollowup_payment[".importFields"][] = "funded";
$tdatafollowup_payment[".importFields"][] = "date_submit";
$tdatafollowup_payment[".importFields"][] = "title";
$tdatafollowup_payment[".importFields"][] = "abstract";
$tdatafollowup_payment[".importFields"][] = "paperStatus";
$tdatafollowup_payment[".importFields"][] = "fullPaper";
$tdatafollowup_payment[".importFields"][] = "paymentStatus";
$tdatafollowup_payment[".importFields"][] = "fullName";
$tdatafollowup_payment[".importFields"][] = "institution";
$tdatafollowup_payment[".importFields"][] = "multiAuthor";
$tdatafollowup_payment[".importFields"][] = "opt";
$tdatafollowup_payment[".importFields"][] = "paperRef";
$tdatafollowup_payment[".importFields"][] = "followup";
$tdatafollowup_payment[".importFields"][] = "email";
$tdatafollowup_payment[".importFields"][] = "note";

$tdatafollowup_payment[".printFields"] = array();

//	paperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "paperID";
	$fdata["GoodName"] = "paperID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","paperID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperID";

	
	
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








	$tdatafollowup_payment["paperID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.userID";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafollowup_payment["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.cid";

	
	
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








	$tdatafollowup_payment["cid"] = $fdata;
//	funded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "funded";
	$fdata["GoodName"] = "funded";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","funded");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "funded";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.funded";

	
	
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
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
	
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




	$tdatafollowup_payment["funded"] = $fdata;
//	date_submit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_submit";
	$fdata["GoodName"] = "date_submit";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","date_submit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_submit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.date_submit";

	
	
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




	$tdatafollowup_payment["date_submit"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.title";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 550;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatafollowup_payment["title"] = $fdata;
//	abstract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "abstract";
	$fdata["GoodName"] = "abstract";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","abstract");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "abstract";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.abstract";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 550;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafollowup_payment["abstract"] = $fdata;
//	paperStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "paperStatus";
	$fdata["GoodName"] = "paperStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","paperStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paperStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperStatus";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatafollowup_payment["paperStatus"] = $fdata;
//	fullPaper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fullPaper";
	$fdata["GoodName"] = "fullPaper";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","fullPaper");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullPaper";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.fullPaper";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafollowup_payment["fullPaper"] = $fdata;
//	paymentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "paymentStatus";
	$fdata["GoodName"] = "paymentStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","paymentStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paymentStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paymentStatus";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatafollowup_payment["paymentStatus"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_payment","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.fullName";

	
	
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




	$tdatafollowup_payment["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_payment","institution");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "institution";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.institution";

	
	
			
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








	$tdatafollowup_payment["institution"] = $fdata;
//	multiAuthor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "multiAuthor";
	$fdata["GoodName"] = "multiAuthor";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","multiAuthor");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "multiAuthor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.multiAuthor";

	
	
			
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
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
	
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








	$tdatafollowup_payment["multiAuthor"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperID";

	
	
			
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafollowup_payment["opt"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paperRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperRef";

	
	
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




	$tdatafollowup_payment["paperRef"] = $fdata;
//	followup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "followup";
	$fdata["GoodName"] = "followup";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","followup");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperID";

	
	
			
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








	$tdatafollowup_payment["followup"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_payment","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.email";

	
	
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








	$tdatafollowup_payment["email"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_payment","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.note";

	
	
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
		$edata["LCType"] = 3;
	
	
		
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fname";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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




	$tdatafollowup_payment["note"] = $fdata;


$tables_data["followup_payment"]=&$tdatafollowup_payment;
$field_labels["followup_payment"] = &$fieldLabelsfollowup_payment;
$fieldToolTips["followup_payment"] = &$fieldToolTipsfollowup_payment;
$page_titles["followup_payment"] = &$pageTitlesfollowup_payment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["followup_payment"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["followup_payment"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_followup_payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  paper.multiAuthor,  paper.paperID AS opt,  paper.paperRef,  paper.paperID AS followup,  `user`.email,  paper.note";
$proto0["m_strFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
$proto0["m_strWhere"] = "paper.paymentStatus !='Paid'";
$proto0["m_strOrderBy"] = "ORDER BY paper.paperID DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "paper.paymentStatus !='Paid'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!='Paid'";
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
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto5["m_sql"] = "paper.paperID";
$proto5["m_srcTableName"] = "followup_payment";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto7["m_sql"] = "paper.userID";
$proto7["m_srcTableName"] = "followup_payment";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto9["m_sql"] = "paper.cid";
$proto9["m_srcTableName"] = "followup_payment";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "funded",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto11["m_sql"] = "paper.funded";
$proto11["m_srcTableName"] = "followup_payment";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date_submit",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto13["m_sql"] = "paper.date_submit";
$proto13["m_srcTableName"] = "followup_payment";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto15["m_sql"] = "paper.title";
$proto15["m_srcTableName"] = "followup_payment";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "abstract",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto17["m_sql"] = "paper.abstract";
$proto17["m_srcTableName"] = "followup_payment";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto19["m_sql"] = "paper.paperStatus";
$proto19["m_srcTableName"] = "followup_payment";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "fullPaper",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto21["m_sql"] = "paper.fullPaper";
$proto21["m_srcTableName"] = "followup_payment";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto23["m_sql"] = "paper.paymentStatus";
$proto23["m_srcTableName"] = "followup_payment";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_payment"
));

$proto25["m_sql"] = "`user`.fullName";
$proto25["m_srcTableName"] = "followup_payment";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_payment"
));

$proto27["m_sql"] = "`user`.institution";
$proto27["m_srcTableName"] = "followup_payment";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "multiAuthor",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto29["m_sql"] = "paper.multiAuthor";
$proto29["m_srcTableName"] = "followup_payment";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto31["m_sql"] = "paper.paperID";
$proto31["m_srcTableName"] = "followup_payment";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto33["m_sql"] = "paper.paperRef";
$proto33["m_srcTableName"] = "followup_payment";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto35["m_sql"] = "paper.paperID";
$proto35["m_srcTableName"] = "followup_payment";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "followup";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_payment"
));

$proto37["m_sql"] = "`user`.email";
$proto37["m_srcTableName"] = "followup_payment";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto39["m_sql"] = "paper.note";
$proto39["m_srcTableName"] = "followup_payment";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "paper";
$proto42["m_srcTableName"] = "followup_payment";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "paperID";
$proto42["m_columns"][] = "paperRef";
$proto42["m_columns"][] = "userID";
$proto42["m_columns"][] = "cid";
$proto42["m_columns"][] = "multiAuthor";
$proto42["m_columns"][] = "funded";
$proto42["m_columns"][] = "date_submit";
$proto42["m_columns"][] = "title";
$proto42["m_columns"][] = "abstract";
$proto42["m_columns"][] = "paperStatus";
$proto42["m_columns"][] = "fullPaper";
$proto42["m_columns"][] = "paymentStatus";
$proto42["m_columns"][] = "slotDate";
$proto42["m_columns"][] = "slotTime";
$proto42["m_columns"][] = "slotRoom";
$proto42["m_columns"][] = "slotTurn";
$proto42["m_columns"][] = "invite";
$proto42["m_columns"][] = "note";
$proto42["m_columns"][] = "ppt";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "paper";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "followup_payment";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "user";
$proto46["m_srcTableName"] = "followup_payment";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "userID";
$proto46["m_columns"][] = "email";
$proto46["m_columns"][] = "password";
$proto46["m_columns"][] = "fullName";
$proto46["m_columns"][] = "gender";
$proto46["m_columns"][] = "address";
$proto46["m_columns"][] = "postal";
$proto46["m_columns"][] = "city";
$proto46["m_columns"][] = "state";
$proto46["m_columns"][] = "country";
$proto46["m_columns"][] = "tel";
$proto46["m_columns"][] = "fax";
$proto46["m_columns"][] = "institution";
$proto46["m_columns"][] = "faculty";
$proto46["m_columns"][] = "department";
$proto46["m_columns"][] = "research";
$proto46["m_columns"][] = "student";
$proto46["m_columns"][] = "role";
$proto46["m_columns"][] = "note";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN `user` ON paper.userID = `user`.userID";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "followup_payment";
$proto47=array();
$proto47["m_sql"] = "paper.userID = `user`.userID";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= `user`.userID";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_payment"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 0;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="followup_payment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_followup_payment = createSqlQuery_followup_payment();



																		

$tdatafollowup_payment[".sqlquery"] = $queryData_followup_payment;

$tableEvents["followup_payment"] = new eventsBase;
$tdatafollowup_payment[".hasEvents"] = false;

?>