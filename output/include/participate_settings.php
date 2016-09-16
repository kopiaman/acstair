<?php
require_once(getabspath("classes/cipherer.php"));




$tdataparticipate = array();
	$tdataparticipate[".truncateText"] = true;
	$tdataparticipate[".NumberOfChars"] = 80;
	$tdataparticipate[".ShortName"] = "participate";
	$tdataparticipate[".OwnerID"] = "";
	$tdataparticipate[".OriginalTable"] = "participate";

//	field labels
$fieldLabelsparticipate = array();
$fieldToolTipsparticipate = array();
$pageTitlesparticipate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparticipate["English"] = array();
	$fieldToolTipsparticipate["English"] = array();
	$pageTitlesparticipate["English"] = array();
	$fieldLabelsparticipate["English"]["cid"] = "Conference ";
	$fieldToolTipsparticipate["English"]["cid"] = "";
	$fieldLabelsparticipate["English"]["userID"] = "FullName";
	$fieldToolTipsparticipate["English"]["userID"] = "";
	$fieldLabelsparticipate["English"]["cfid"] = "Fee";
	$fieldToolTipsparticipate["English"]["cfid"] = "";
	$fieldLabelsparticipate["English"]["parID"] = "Par ID";
	$fieldToolTipsparticipate["English"]["parID"] = "";
	$fieldLabelsparticipate["English"]["email"] = "Email";
	$fieldToolTipsparticipate["English"]["email"] = "";
	$fieldLabelsparticipate["English"]["fullName"] = "Full Name";
	$fieldToolTipsparticipate["English"]["fullName"] = "";
	$fieldLabelsparticipate["English"]["institution"] = "Institution";
	$fieldToolTipsparticipate["English"]["institution"] = "";
	$fieldLabelsparticipate["English"]["country"] = "Country";
	$fieldToolTipsparticipate["English"]["country"] = "";
	$fieldLabelsparticipate["English"]["confirm"] = "Confirm";
	$fieldToolTipsparticipate["English"]["confirm"] = "";
	$fieldLabelsparticipate["English"]["note"] = "Note";
	$fieldToolTipsparticipate["English"]["note"] = "";
	$fieldLabelsparticipate["English"]["paperCount"] = "Paper Count";
	$fieldToolTipsparticipate["English"]["paperCount"] = "";
	$fieldLabelsparticipate["English"]["listenerRef"] = "Listener Ref";
	$fieldToolTipsparticipate["English"]["listenerRef"] = "";
	$fieldLabelsparticipate["English"]["item"] = "Item";
	$fieldToolTipsparticipate["English"]["item"] = "";
	if (count($fieldToolTipsparticipate["English"]))
		$tdataparticipate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsparticipate[""] = array();
	$fieldToolTipsparticipate[""] = array();
	$pageTitlesparticipate[""] = array();
	if (count($fieldToolTipsparticipate[""]))
		$tdataparticipate[".isUseToolTips"] = true;
}


	$tdataparticipate[".NCSearch"] = true;



$tdataparticipate[".shortTableName"] = "participate";
$tdataparticipate[".nSecOptions"] = 0;
$tdataparticipate[".recsPerRowList"] = 1;
$tdataparticipate[".recsPerRowPrint"] = 1;
$tdataparticipate[".mainTableOwnerID"] = "";
$tdataparticipate[".moveNext"] = 1;
$tdataparticipate[".entityType"] = 0;

$tdataparticipate[".strOriginalTableName"] = "participate";




$tdataparticipate[".showAddInPopup"] = false;

$tdataparticipate[".showEditInPopup"] = false;

$tdataparticipate[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataparticipate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataparticipate[".fieldsForRegister"] = array();

$tdataparticipate[".listAjax"] = false;

	$tdataparticipate[".audit"] = false;

	$tdataparticipate[".locking"] = false;



$tdataparticipate[".list"] = true;

$tdataparticipate[".inlineEdit"] = true;
$tdataparticipate[".inlineAdd"] = true;


$tdataparticipate[".exportTo"] = true;


$tdataparticipate[".delete"] = true;

$tdataparticipate[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataparticipate[".searchSaving"] = false;
//

$tdataparticipate[".showSearchPanel"] = true;
		$tdataparticipate[".flexibleSearch"] = true;

if (isMobile())
	$tdataparticipate[".isUseAjaxSuggest"] = false;
else
	$tdataparticipate[".isUseAjaxSuggest"] = true;

$tdataparticipate[".rowHighlite"] = true;


								
$tdataparticipate[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparticipate[".isUseTimeForSearch"] = false;





$tdataparticipate[".allSearchFields"] = array();
$tdataparticipate[".filterFields"] = array();
$tdataparticipate[".requiredSearchFields"] = array();

$tdataparticipate[".allSearchFields"][] = "parID";
	$tdataparticipate[".allSearchFields"][] = "listenerRef";
	$tdataparticipate[".allSearchFields"][] = "item";
	$tdataparticipate[".allSearchFields"][] = "cid";
	$tdataparticipate[".allSearchFields"][] = "cfid";
	$tdataparticipate[".allSearchFields"][] = "userID";
	$tdataparticipate[".allSearchFields"][] = "email";
	$tdataparticipate[".allSearchFields"][] = "institution";
	$tdataparticipate[".allSearchFields"][] = "country";
	$tdataparticipate[".allSearchFields"][] = "paperCount";
	$tdataparticipate[".allSearchFields"][] = "confirm";
	$tdataparticipate[".allSearchFields"][] = "note";
	

$tdataparticipate[".googleLikeFields"] = array();
$tdataparticipate[".googleLikeFields"][] = "parID";
$tdataparticipate[".googleLikeFields"][] = "cid";
$tdataparticipate[".googleLikeFields"][] = "userID";
$tdataparticipate[".googleLikeFields"][] = "cfid";
$tdataparticipate[".googleLikeFields"][] = "email";
$tdataparticipate[".googleLikeFields"][] = "fullName";
$tdataparticipate[".googleLikeFields"][] = "institution";
$tdataparticipate[".googleLikeFields"][] = "country";
$tdataparticipate[".googleLikeFields"][] = "confirm";
$tdataparticipate[".googleLikeFields"][] = "note";
$tdataparticipate[".googleLikeFields"][] = "paperCount";
$tdataparticipate[".googleLikeFields"][] = "listenerRef";
$tdataparticipate[".googleLikeFields"][] = "item";


$tdataparticipate[".advSearchFields"] = array();
$tdataparticipate[".advSearchFields"][] = "parID";
$tdataparticipate[".advSearchFields"][] = "listenerRef";
$tdataparticipate[".advSearchFields"][] = "item";
$tdataparticipate[".advSearchFields"][] = "cid";
$tdataparticipate[".advSearchFields"][] = "cfid";
$tdataparticipate[".advSearchFields"][] = "userID";
$tdataparticipate[".advSearchFields"][] = "email";
$tdataparticipate[".advSearchFields"][] = "institution";
$tdataparticipate[".advSearchFields"][] = "country";
$tdataparticipate[".advSearchFields"][] = "paperCount";
$tdataparticipate[".advSearchFields"][] = "confirm";
$tdataparticipate[".advSearchFields"][] = "note";

$tdataparticipate[".tableType"] = "list";

$tdataparticipate[".printerPageOrientation"] = 0;
$tdataparticipate[".nPrinterPageScale"] = 100;

$tdataparticipate[".nPrinterSplitRecords"] = 40;

$tdataparticipate[".nPrinterPDFSplitRecords"] = 40;



$tdataparticipate[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataparticipate[".pageSize"] = 20;

$tdataparticipate[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY participate.parID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataparticipate[".strOrderBy"] = $tstrOrderBy;

$tdataparticipate[".orderindexes"] = array();
$tdataparticipate[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "participate.parID");

$tdataparticipate[".sqlHead"] = "SELECT participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item";
$tdataparticipate[".sqlFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid";
$tdataparticipate[".sqlWhereExpr"] = "confees.item LIKE '%Presenter%'";
$tdataparticipate[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparticipate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparticipate[".arrGroupsPerPage"] = $arrGPP;


$tableKeysparticipate = array();
$tableKeysparticipate[] = "parID";
$tdataparticipate[".Keys"] = $tableKeysparticipate;

$tdataparticipate[".listFields"] = array();
$tdataparticipate[".listFields"][] = "cid";
$tdataparticipate[".listFields"][] = "cfid";
$tdataparticipate[".listFields"][] = "userID";
$tdataparticipate[".listFields"][] = "email";
$tdataparticipate[".listFields"][] = "institution";
$tdataparticipate[".listFields"][] = "country";
$tdataparticipate[".listFields"][] = "paperCount";
$tdataparticipate[".listFields"][] = "confirm";
$tdataparticipate[".listFields"][] = "note";

$tdataparticipate[".hideMobileList"] = array();


$tdataparticipate[".viewFields"] = array();

$tdataparticipate[".addFields"] = array();

$tdataparticipate[".masterListFields"] = array();
$tdataparticipate[".masterListFields"][] = "parID";
$tdataparticipate[".masterListFields"][] = "listenerRef";
$tdataparticipate[".masterListFields"][] = "item";
$tdataparticipate[".masterListFields"][] = "cid";
$tdataparticipate[".masterListFields"][] = "cfid";
$tdataparticipate[".masterListFields"][] = "userID";
$tdataparticipate[".masterListFields"][] = "fullName";
$tdataparticipate[".masterListFields"][] = "email";
$tdataparticipate[".masterListFields"][] = "institution";
$tdataparticipate[".masterListFields"][] = "country";
$tdataparticipate[".masterListFields"][] = "paperCount";
$tdataparticipate[".masterListFields"][] = "confirm";
$tdataparticipate[".masterListFields"][] = "note";

$tdataparticipate[".inlineAddFields"] = array();
$tdataparticipate[".inlineAddFields"][] = "cid";
$tdataparticipate[".inlineAddFields"][] = "cfid";
$tdataparticipate[".inlineAddFields"][] = "userID";

$tdataparticipate[".editFields"] = array();

$tdataparticipate[".inlineEditFields"] = array();
$tdataparticipate[".inlineEditFields"][] = "cid";
$tdataparticipate[".inlineEditFields"][] = "cfid";
$tdataparticipate[".inlineEditFields"][] = "userID";
$tdataparticipate[".inlineEditFields"][] = "paperCount";
$tdataparticipate[".inlineEditFields"][] = "confirm";
$tdataparticipate[".inlineEditFields"][] = "note";

$tdataparticipate[".exportFields"] = array();
$tdataparticipate[".exportFields"][] = "parID";
$tdataparticipate[".exportFields"][] = "listenerRef";
$tdataparticipate[".exportFields"][] = "item";
$tdataparticipate[".exportFields"][] = "cid";
$tdataparticipate[".exportFields"][] = "cfid";
$tdataparticipate[".exportFields"][] = "userID";
$tdataparticipate[".exportFields"][] = "email";
$tdataparticipate[".exportFields"][] = "institution";
$tdataparticipate[".exportFields"][] = "country";
$tdataparticipate[".exportFields"][] = "paperCount";
$tdataparticipate[".exportFields"][] = "confirm";
$tdataparticipate[".exportFields"][] = "note";

$tdataparticipate[".importFields"] = array();
$tdataparticipate[".importFields"][] = "parID";
$tdataparticipate[".importFields"][] = "cid";
$tdataparticipate[".importFields"][] = "userID";
$tdataparticipate[".importFields"][] = "cfid";
$tdataparticipate[".importFields"][] = "email";
$tdataparticipate[".importFields"][] = "fullName";
$tdataparticipate[".importFields"][] = "institution";
$tdataparticipate[".importFields"][] = "country";
$tdataparticipate[".importFields"][] = "confirm";
$tdataparticipate[".importFields"][] = "note";
$tdataparticipate[".importFields"][] = "paperCount";
$tdataparticipate[".importFields"][] = "listenerRef";
$tdataparticipate[".importFields"][] = "item";

$tdataparticipate[".printFields"] = array();

//	parID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "parID";
	$fdata["GoodName"] = "parID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","parID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.parID";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataparticipate["parID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.cid";

	
	
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
	$edata["DisplayField"] = "cnameCode";

	
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




	$tdataparticipate["cid"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.userID";

	
	
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




	$tdataparticipate["userID"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","cfid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cfid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.cfid";

	
	
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
	$edata["LookupTable"] = "confees";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "cfid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "item";

	
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




	$tdataparticipate["cfid"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("participate","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataparticipate["email"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("participate","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "fullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.fullName";

	
	
			
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








	$tdataparticipate["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("participate","institution");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "institution";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.institution";

	
	
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




	$tdataparticipate["institution"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("participate","country");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.country";

	
	
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




	$tdataparticipate["country"] = $fdata;
//	confirm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "confirm";
	$fdata["GoodName"] = "confirm";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","confirm");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "confirm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.confirm";

	
	
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




	$tdataparticipate["confirm"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.note";

	
	
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




	$tdataparticipate["note"] = $fdata;
//	paperCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "paperCount";
	$fdata["GoodName"] = "paperCount";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","paperCount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paperCount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.paperCount";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataparticipate["paperCount"] = $fdata;
//	listenerRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "listenerRef";
	$fdata["GoodName"] = "listenerRef";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("participate","listenerRef");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "listenerRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.listenerRef";

	
	
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




	$tdataparticipate["listenerRef"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("participate","item");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confees.item";

	
	
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




	$tdataparticipate["item"] = $fdata;


$tables_data["participate"]=&$tdataparticipate;
$field_labels["participate"] = &$fieldLabelsparticipate;
$fieldToolTips["participate"] = &$fieldToolTipsparticipate;
$page_titles["participate"] = &$pageTitlesparticipate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["participate"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["participate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_participate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item";
$proto0["m_strFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid";
$proto0["m_strWhere"] = "confees.item LIKE '%Presenter%'";
$proto0["m_strOrderBy"] = "ORDER BY participate.parID DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "confees.item LIKE '%Presenter%'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "participate"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "LIKE '%Presenter%'";
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
	"m_strName" => "parID",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto5["m_sql"] = "participate.parID";
$proto5["m_srcTableName"] = "participate";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto7["m_sql"] = "participate.cid";
$proto7["m_srcTableName"] = "participate";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto9["m_sql"] = "participate.userID";
$proto9["m_srcTableName"] = "participate";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto11["m_sql"] = "participate.cfid";
$proto11["m_srcTableName"] = "participate";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "participate"
));

$proto13["m_sql"] = "`user`.email";
$proto13["m_srcTableName"] = "participate";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "participate"
));

$proto15["m_sql"] = "`user`.fullName";
$proto15["m_srcTableName"] = "participate";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "participate"
));

$proto17["m_sql"] = "`user`.institution";
$proto17["m_srcTableName"] = "participate";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "participate"
));

$proto19["m_sql"] = "`user`.country";
$proto19["m_srcTableName"] = "participate";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "confirm",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto21["m_sql"] = "participate.confirm";
$proto21["m_srcTableName"] = "participate";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto23["m_sql"] = "participate.note";
$proto23["m_srcTableName"] = "participate";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "paperCount",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto25["m_sql"] = "participate.paperCount";
$proto25["m_srcTableName"] = "participate";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "listenerRef",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto27["m_sql"] = "participate.listenerRef";
$proto27["m_srcTableName"] = "participate";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "participate"
));

$proto29["m_sql"] = "confees.item";
$proto29["m_srcTableName"] = "participate";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "participate";
$proto32["m_srcTableName"] = "participate";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "parID";
$proto32["m_columns"][] = "cid";
$proto32["m_columns"][] = "userID";
$proto32["m_columns"][] = "cfid";
$proto32["m_columns"][] = "confirm";
$proto32["m_columns"][] = "paperCount";
$proto32["m_columns"][] = "listenerRef";
$proto32["m_columns"][] = "note";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "participate";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "participate";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_INNERJOIN";
			$proto36=array();
$proto36["m_strName"] = "user";
$proto36["m_srcTableName"] = "participate";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "userID";
$proto36["m_columns"][] = "email";
$proto36["m_columns"][] = "password";
$proto36["m_columns"][] = "fullName";
$proto36["m_columns"][] = "gender";
$proto36["m_columns"][] = "address";
$proto36["m_columns"][] = "postal";
$proto36["m_columns"][] = "city";
$proto36["m_columns"][] = "state";
$proto36["m_columns"][] = "country";
$proto36["m_columns"][] = "tel";
$proto36["m_columns"][] = "fax";
$proto36["m_columns"][] = "institution";
$proto36["m_columns"][] = "faculty";
$proto36["m_columns"][] = "department";
$proto36["m_columns"][] = "research";
$proto36["m_columns"][] = "student";
$proto36["m_columns"][] = "role";
$proto36["m_columns"][] = "note";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "INNER JOIN `user` ON participate.userID = `user`.userID";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "participate";
$proto37=array();
$proto37["m_sql"] = "participate.userID = `user`.userID";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= `user`.userID";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_INNERJOIN";
			$proto40=array();
$proto40["m_strName"] = "confees";
$proto40["m_srcTableName"] = "participate";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "cfid";
$proto40["m_columns"][] = "cid";
$proto40["m_columns"][] = "item";
$proto40["m_columns"][] = "priceNormal";
$proto40["m_columns"][] = "datelineNormal";
$proto40["m_columns"][] = "priceEarly";
$proto40["m_columns"][] = "datelineEarly";
$proto40["m_columns"][] = "local";
$proto40["m_columns"][] = "currency";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "INNER JOIN confees ON participate.cfid = confees.cfid";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "participate";
$proto41=array();
$proto41["m_sql"] = "participate.cfid = confees.cfid";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= confees.cfid";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "parID",
	"m_strTable" => "participate",
	"m_srcTableName" => "participate"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="participate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_participate = createSqlQuery_participate();



													

$tdataparticipate[".sqlquery"] = $queryData_participate;

$tableEvents["participate"] = new eventsBase;
$tdataparticipate[".hasEvents"] = false;

?>