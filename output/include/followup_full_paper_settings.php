<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafollowup_full_paper = array();
	$tdatafollowup_full_paper[".truncateText"] = true;
	$tdatafollowup_full_paper[".NumberOfChars"] = 200;
	$tdatafollowup_full_paper[".ShortName"] = "followup_full_paper";
	$tdatafollowup_full_paper[".OwnerID"] = "userID";
	$tdatafollowup_full_paper[".OriginalTable"] = "paper";

//	field labels
$fieldLabelsfollowup_full_paper = array();
$fieldToolTipsfollowup_full_paper = array();
$pageTitlesfollowup_full_paper = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollowup_full_paper["English"] = array();
	$fieldToolTipsfollowup_full_paper["English"] = array();
	$pageTitlesfollowup_full_paper["English"] = array();
	$fieldLabelsfollowup_full_paper["English"]["paperID"] = "ID";
	$fieldToolTipsfollowup_full_paper["English"]["paperID"] = "";
	$fieldLabelsfollowup_full_paper["English"]["userID"] = "User ";
	$fieldToolTipsfollowup_full_paper["English"]["userID"] = "";
	$fieldLabelsfollowup_full_paper["English"]["funded"] = "Funded";
	$fieldToolTipsfollowup_full_paper["English"]["funded"] = "";
	$fieldLabelsfollowup_full_paper["English"]["abstract"] = "AB";
	$fieldToolTipsfollowup_full_paper["English"]["abstract"] = "";
	$fieldLabelsfollowup_full_paper["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipsfollowup_full_paper["English"]["paperStatus"] = "";
	$fieldLabelsfollowup_full_paper["English"]["title"] = "Title";
	$fieldToolTipsfollowup_full_paper["English"]["title"] = "";
	$fieldLabelsfollowup_full_paper["English"]["cid"] = "Conference ";
	$fieldToolTipsfollowup_full_paper["English"]["cid"] = "";
	$fieldLabelsfollowup_full_paper["English"]["date_submit"] = "Date Submit";
	$fieldToolTipsfollowup_full_paper["English"]["date_submit"] = "";
	$fieldLabelsfollowup_full_paper["English"]["paymentStatus"] = "Payment Status";
	$fieldToolTipsfollowup_full_paper["English"]["paymentStatus"] = "";
	$fieldLabelsfollowup_full_paper["English"]["fullPaper"] = "FP";
	$fieldToolTipsfollowup_full_paper["English"]["fullPaper"] = "";
	$fieldLabelsfollowup_full_paper["English"]["fullName"] = "Full Name";
	$fieldToolTipsfollowup_full_paper["English"]["fullName"] = "";
	$fieldLabelsfollowup_full_paper["English"]["institution"] = "Institution";
	$fieldToolTipsfollowup_full_paper["English"]["institution"] = "";
	$fieldLabelsfollowup_full_paper["English"]["multiAuthor"] = "Multi Author";
	$fieldToolTipsfollowup_full_paper["English"]["multiAuthor"] = "";
	$fieldLabelsfollowup_full_paper["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsfollowup_full_paper["English"]["paperRef"] = "";
	$fieldLabelsfollowup_full_paper["English"]["email"] = "Email";
	$fieldToolTipsfollowup_full_paper["English"]["email"] = "";
	$fieldLabelsfollowup_full_paper["English"]["note"] = "Note";
	$fieldToolTipsfollowup_full_paper["English"]["note"] = "";
	if (count($fieldToolTipsfollowup_full_paper["English"]))
		$tdatafollowup_full_paper[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfollowup_full_paper[""] = array();
	$fieldToolTipsfollowup_full_paper[""] = array();
	$pageTitlesfollowup_full_paper[""] = array();
	if (count($fieldToolTipsfollowup_full_paper[""]))
		$tdatafollowup_full_paper[".isUseToolTips"] = true;
}


	$tdatafollowup_full_paper[".NCSearch"] = true;



$tdatafollowup_full_paper[".shortTableName"] = "followup_full_paper";
$tdatafollowup_full_paper[".nSecOptions"] = 1;
$tdatafollowup_full_paper[".recsPerRowList"] = 1;
$tdatafollowup_full_paper[".recsPerRowPrint"] = 1;
$tdatafollowup_full_paper[".mainTableOwnerID"] = "userID";
$tdatafollowup_full_paper[".moveNext"] = 1;
$tdatafollowup_full_paper[".entityType"] = 1;

$tdatafollowup_full_paper[".strOriginalTableName"] = "paper";




$tdatafollowup_full_paper[".showAddInPopup"] = false;

$tdatafollowup_full_paper[".showEditInPopup"] = false;

$tdatafollowup_full_paper[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafollowup_full_paper[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafollowup_full_paper[".fieldsForRegister"] = array();

$tdatafollowup_full_paper[".listAjax"] = false;

	$tdatafollowup_full_paper[".audit"] = false;

	$tdatafollowup_full_paper[".locking"] = false;



$tdatafollowup_full_paper[".list"] = true;

$tdatafollowup_full_paper[".inlineEdit"] = true;





$tdatafollowup_full_paper[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafollowup_full_paper[".searchSaving"] = false;
//

$tdatafollowup_full_paper[".showSearchPanel"] = true;
		$tdatafollowup_full_paper[".flexibleSearch"] = true;

if (isMobile())
	$tdatafollowup_full_paper[".isUseAjaxSuggest"] = false;
else
	$tdatafollowup_full_paper[".isUseAjaxSuggest"] = true;

$tdatafollowup_full_paper[".rowHighlite"] = true;


								
$tdatafollowup_full_paper[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollowup_full_paper[".isUseTimeForSearch"] = false;





$tdatafollowup_full_paper[".allSearchFields"] = array();
$tdatafollowup_full_paper[".filterFields"] = array();
$tdatafollowup_full_paper[".requiredSearchFields"] = array();

$tdatafollowup_full_paper[".allSearchFields"][] = "paperRef";
	$tdatafollowup_full_paper[".allSearchFields"][] = "fullName";
	$tdatafollowup_full_paper[".allSearchFields"][] = "title";
	$tdatafollowup_full_paper[".allSearchFields"][] = "funded";
	$tdatafollowup_full_paper[".allSearchFields"][] = "date_submit";
	$tdatafollowup_full_paper[".allSearchFields"][] = "paperStatus";
	$tdatafollowup_full_paper[".allSearchFields"][] = "paymentStatus";
	$tdatafollowup_full_paper[".allSearchFields"][] = "note";
	

$tdatafollowup_full_paper[".googleLikeFields"] = array();
$tdatafollowup_full_paper[".googleLikeFields"][] = "email";
$tdatafollowup_full_paper[".googleLikeFields"][] = "note";

$tdatafollowup_full_paper[".panelSearchFields"] = array();
$tdatafollowup_full_paper[".searchPanelOptions"] = array();
$tdatafollowup_full_paper[".panelSearchFields"][] = "paperRef";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "fullName";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "institution";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "title";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "funded";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "date_submit";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "paperStatus";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "paymentStatus";
	$tdatafollowup_full_paper[".panelSearchFields"][] = "multiAuthor";
	
$tdatafollowup_full_paper[".advSearchFields"] = array();
$tdatafollowup_full_paper[".advSearchFields"][] = "paperRef";
$tdatafollowup_full_paper[".advSearchFields"][] = "fullName";
$tdatafollowup_full_paper[".advSearchFields"][] = "title";
$tdatafollowup_full_paper[".advSearchFields"][] = "funded";
$tdatafollowup_full_paper[".advSearchFields"][] = "date_submit";
$tdatafollowup_full_paper[".advSearchFields"][] = "paperStatus";
$tdatafollowup_full_paper[".advSearchFields"][] = "paymentStatus";
$tdatafollowup_full_paper[".advSearchFields"][] = "note";

$tdatafollowup_full_paper[".tableType"] = "list";

$tdatafollowup_full_paper[".printerPageOrientation"] = 0;
$tdatafollowup_full_paper[".nPrinterPageScale"] = 100;

$tdatafollowup_full_paper[".nPrinterSplitRecords"] = 40;

$tdatafollowup_full_paper[".nPrinterPDFSplitRecords"] = 40;



$tdatafollowup_full_paper[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatafollowup_full_paper[".pageSize"] = 20;

$tdatafollowup_full_paper[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY paper.paperID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafollowup_full_paper[".strOrderBy"] = $tstrOrderBy;

$tdatafollowup_full_paper[".orderindexes"] = array();
$tdatafollowup_full_paper[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "paper.paperID");

$tdatafollowup_full_paper[".sqlHead"] = "SELECT paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  paper.multiAuthor,  paper.paperRef,  `user`.email,  paper.note";
$tdatafollowup_full_paper[".sqlFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
$tdatafollowup_full_paper[".sqlWhereExpr"] = "paper.paperStatus ='AB-OK' AND paper.paymentStatus ='Paid'";
$tdatafollowup_full_paper[".sqlTail"] = "";



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
$tdatafollowup_full_paper[".arrAddTabs"] = $arrAddTabs;

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
$tdatafollowup_full_paper[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollowup_full_paper[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollowup_full_paper[".arrGroupsPerPage"] = $arrGPP;


$tableKeysfollowup_full_paper = array();
$tableKeysfollowup_full_paper[] = "paperID";
$tdatafollowup_full_paper[".Keys"] = $tableKeysfollowup_full_paper;

$tdatafollowup_full_paper[".listFields"] = array();
$tdatafollowup_full_paper[".listFields"][] = "paperRef";
$tdatafollowup_full_paper[".listFields"][] = "cid";
$tdatafollowup_full_paper[".listFields"][] = "fullName";
$tdatafollowup_full_paper[".listFields"][] = "email";
$tdatafollowup_full_paper[".listFields"][] = "title";
$tdatafollowup_full_paper[".listFields"][] = "date_submit";
$tdatafollowup_full_paper[".listFields"][] = "paperStatus";
$tdatafollowup_full_paper[".listFields"][] = "paymentStatus";
$tdatafollowup_full_paper[".listFields"][] = "abstract";
$tdatafollowup_full_paper[".listFields"][] = "fullPaper";
$tdatafollowup_full_paper[".listFields"][] = "note";

$tdatafollowup_full_paper[".hideMobileList"] = array();


$tdatafollowup_full_paper[".viewFields"] = array();

$tdatafollowup_full_paper[".addFields"] = array();

$tdatafollowup_full_paper[".masterListFields"] = array();
$tdatafollowup_full_paper[".masterListFields"][] = "userID";
$tdatafollowup_full_paper[".masterListFields"][] = "paperRef";
$tdatafollowup_full_paper[".masterListFields"][] = "paperID";
$tdatafollowup_full_paper[".masterListFields"][] = "cid";
$tdatafollowup_full_paper[".masterListFields"][] = "fullName";
$tdatafollowup_full_paper[".masterListFields"][] = "institution";
$tdatafollowup_full_paper[".masterListFields"][] = "email";
$tdatafollowup_full_paper[".masterListFields"][] = "title";
$tdatafollowup_full_paper[".masterListFields"][] = "funded";
$tdatafollowup_full_paper[".masterListFields"][] = "date_submit";
$tdatafollowup_full_paper[".masterListFields"][] = "paperStatus";
$tdatafollowup_full_paper[".masterListFields"][] = "paymentStatus";
$tdatafollowup_full_paper[".masterListFields"][] = "multiAuthor";
$tdatafollowup_full_paper[".masterListFields"][] = "abstract";
$tdatafollowup_full_paper[".masterListFields"][] = "fullPaper";
$tdatafollowup_full_paper[".masterListFields"][] = "note";

$tdatafollowup_full_paper[".inlineAddFields"] = array();

$tdatafollowup_full_paper[".editFields"] = array();

$tdatafollowup_full_paper[".inlineEditFields"] = array();
$tdatafollowup_full_paper[".inlineEditFields"][] = "note";

$tdatafollowup_full_paper[".exportFields"] = array();

$tdatafollowup_full_paper[".importFields"] = array();
$tdatafollowup_full_paper[".importFields"][] = "paperID";
$tdatafollowup_full_paper[".importFields"][] = "userID";
$tdatafollowup_full_paper[".importFields"][] = "cid";
$tdatafollowup_full_paper[".importFields"][] = "funded";
$tdatafollowup_full_paper[".importFields"][] = "date_submit";
$tdatafollowup_full_paper[".importFields"][] = "title";
$tdatafollowup_full_paper[".importFields"][] = "abstract";
$tdatafollowup_full_paper[".importFields"][] = "paperStatus";
$tdatafollowup_full_paper[".importFields"][] = "fullPaper";
$tdatafollowup_full_paper[".importFields"][] = "paymentStatus";
$tdatafollowup_full_paper[".importFields"][] = "fullName";
$tdatafollowup_full_paper[".importFields"][] = "institution";
$tdatafollowup_full_paper[".importFields"][] = "multiAuthor";
$tdatafollowup_full_paper[".importFields"][] = "paperRef";
$tdatafollowup_full_paper[".importFields"][] = "email";
$tdatafollowup_full_paper[".importFields"][] = "note";

$tdatafollowup_full_paper[".printFields"] = array();

//	paperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "paperID";
	$fdata["GoodName"] = "paperID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","paperID");
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








	$tdatafollowup_full_paper["paperID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.userID";

	
	
			
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








	$tdatafollowup_full_paper["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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








	$tdatafollowup_full_paper["cid"] = $fdata;
//	funded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "funded";
	$fdata["GoodName"] = "funded";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","funded");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["funded"] = $fdata;
//	date_submit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_submit";
	$fdata["GoodName"] = "date_submit";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","date_submit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["date_submit"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["title"] = $fdata;
//	abstract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "abstract";
	$fdata["GoodName"] = "abstract";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","abstract");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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








	$tdatafollowup_full_paper["abstract"] = $fdata;
//	paperStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "paperStatus";
	$fdata["GoodName"] = "paperStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","paperStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["paperStatus"] = $fdata;
//	fullPaper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fullPaper";
	$fdata["GoodName"] = "fullPaper";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","fullPaper");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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








	$tdatafollowup_full_paper["fullPaper"] = $fdata;
//	paymentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "paymentStatus";
	$fdata["GoodName"] = "paymentStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","paymentStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["paymentStatus"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","institution");
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








	$tdatafollowup_full_paper["institution"] = $fdata;
//	multiAuthor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "multiAuthor";
	$fdata["GoodName"] = "multiAuthor";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","multiAuthor");
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








	$tdatafollowup_full_paper["multiAuthor"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["paperRef"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
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








	$tdatafollowup_full_paper["email"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_full_paper","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_full_paper["note"] = $fdata;


$tables_data["followup_full_paper"]=&$tdatafollowup_full_paper;
$field_labels["followup_full_paper"] = &$fieldLabelsfollowup_full_paper;
$fieldToolTips["followup_full_paper"] = &$fieldToolTipsfollowup_full_paper;
$page_titles["followup_full_paper"] = &$pageTitlesfollowup_full_paper;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["followup_full_paper"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["followup_full_paper"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_followup_full_paper()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  paper.multiAuthor,  paper.paperRef,  `user`.email,  paper.note";
$proto0["m_strFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
$proto0["m_strWhere"] = "paper.paperStatus ='AB-OK' AND paper.paymentStatus ='Paid'";
$proto0["m_strOrderBy"] = "ORDER BY paper.paperID";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "paper.paperStatus ='AB-OK' AND paper.paymentStatus ='Paid'";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "paper.paperStatus ='AB-OK' AND paper.paymentStatus ='Paid'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "paper.paperStatus ='AB-OK'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "='AB-OK'";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "paper.paymentStatus ='Paid'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "='Paid'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
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
	"m_srcTableName" => "followup_full_paper"
));

$proto9["m_sql"] = "paper.paperID";
$proto9["m_srcTableName"] = "followup_full_paper";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto11["m_sql"] = "paper.userID";
$proto11["m_srcTableName"] = "followup_full_paper";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto13["m_sql"] = "paper.cid";
$proto13["m_srcTableName"] = "followup_full_paper";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "funded",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto15["m_sql"] = "paper.funded";
$proto15["m_srcTableName"] = "followup_full_paper";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "date_submit",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto17["m_sql"] = "paper.date_submit";
$proto17["m_srcTableName"] = "followup_full_paper";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto19["m_sql"] = "paper.title";
$proto19["m_srcTableName"] = "followup_full_paper";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "abstract",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto21["m_sql"] = "paper.abstract";
$proto21["m_srcTableName"] = "followup_full_paper";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto23["m_sql"] = "paper.paperStatus";
$proto23["m_srcTableName"] = "followup_full_paper";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "fullPaper",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto25["m_sql"] = "paper.fullPaper";
$proto25["m_srcTableName"] = "followup_full_paper";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto27["m_sql"] = "paper.paymentStatus";
$proto27["m_srcTableName"] = "followup_full_paper";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_full_paper"
));

$proto29["m_sql"] = "`user`.fullName";
$proto29["m_srcTableName"] = "followup_full_paper";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_full_paper"
));

$proto31["m_sql"] = "`user`.institution";
$proto31["m_srcTableName"] = "followup_full_paper";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "multiAuthor",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto33["m_sql"] = "paper.multiAuthor";
$proto33["m_srcTableName"] = "followup_full_paper";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto35["m_sql"] = "paper.paperRef";
$proto35["m_srcTableName"] = "followup_full_paper";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_full_paper"
));

$proto37["m_sql"] = "`user`.email";
$proto37["m_srcTableName"] = "followup_full_paper";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
));

$proto39["m_sql"] = "paper.note";
$proto39["m_srcTableName"] = "followup_full_paper";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "paper";
$proto42["m_srcTableName"] = "followup_full_paper";
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
$proto41["m_srcTableName"] = "followup_full_paper";
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
$proto46["m_srcTableName"] = "followup_full_paper";
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
$proto45["m_srcTableName"] = "followup_full_paper";
$proto47=array();
$proto47["m_sql"] = "paper.userID = `user`.userID";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_full_paper"
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
	"m_srcTableName" => "followup_full_paper"
));

$proto49["m_column"]=$obj;
$proto49["m_bAsc"] = 1;
$proto49["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto49);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="followup_full_paper";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_followup_full_paper = createSqlQuery_followup_full_paper();



																

$tdatafollowup_full_paper[".sqlquery"] = $queryData_followup_full_paper;

$tableEvents["followup_full_paper"] = new eventsBase;
$tdatafollowup_full_paper[".hasEvents"] = false;

?>