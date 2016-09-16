<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalistener = array();
	$tdatalistener[".truncateText"] = true;
	$tdatalistener[".NumberOfChars"] = 80;
	$tdatalistener[".ShortName"] = "listener";
	$tdatalistener[".OwnerID"] = "";
	$tdatalistener[".OriginalTable"] = "participate";

//	field labels
$fieldLabelslistener = array();
$fieldToolTipslistener = array();
$pageTitleslistener = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslistener["English"] = array();
	$fieldToolTipslistener["English"] = array();
	$pageTitleslistener["English"] = array();
	$fieldLabelslistener["English"]["cid"] = "Conference ";
	$fieldToolTipslistener["English"]["cid"] = "";
	$fieldLabelslistener["English"]["userID"] = "UserID";
	$fieldToolTipslistener["English"]["userID"] = "";
	$fieldLabelslistener["English"]["cfid"] = "Fee";
	$fieldToolTipslistener["English"]["cfid"] = "";
	$fieldLabelslistener["English"]["parID"] = "Par ID";
	$fieldToolTipslistener["English"]["parID"] = "";
	$fieldLabelslistener["English"]["email"] = "Email";
	$fieldToolTipslistener["English"]["email"] = "";
	$fieldLabelslistener["English"]["fullName"] = "Full Name";
	$fieldToolTipslistener["English"]["fullName"] = "";
	$fieldLabelslistener["English"]["institution"] = "Institution";
	$fieldToolTipslistener["English"]["institution"] = "";
	$fieldLabelslistener["English"]["country"] = "Country";
	$fieldToolTipslistener["English"]["country"] = "";
	$fieldLabelslistener["English"]["confirm"] = "Confirm";
	$fieldToolTipslistener["English"]["confirm"] = "";
	$fieldLabelslistener["English"]["note"] = "Note";
	$fieldToolTipslistener["English"]["note"] = "";
	$fieldLabelslistener["English"]["paperCount"] = "Paper Count";
	$fieldToolTipslistener["English"]["paperCount"] = "";
	$fieldLabelslistener["English"]["listenerRef"] = "Listener Ref";
	$fieldToolTipslistener["English"]["listenerRef"] = "";
	$fieldLabelslistener["English"]["item"] = "Item";
	$fieldToolTipslistener["English"]["item"] = "";
	if (count($fieldToolTipslistener["English"]))
		$tdatalistener[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslistener[""] = array();
	$fieldToolTipslistener[""] = array();
	$pageTitleslistener[""] = array();
	if (count($fieldToolTipslistener[""]))
		$tdatalistener[".isUseToolTips"] = true;
}


	$tdatalistener[".NCSearch"] = true;



$tdatalistener[".shortTableName"] = "listener";
$tdatalistener[".nSecOptions"] = 0;
$tdatalistener[".recsPerRowList"] = 1;
$tdatalistener[".recsPerRowPrint"] = 1;
$tdatalistener[".mainTableOwnerID"] = "";
$tdatalistener[".moveNext"] = 1;
$tdatalistener[".entityType"] = 1;

$tdatalistener[".strOriginalTableName"] = "participate";




$tdatalistener[".showAddInPopup"] = false;

$tdatalistener[".showEditInPopup"] = false;

$tdatalistener[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalistener[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalistener[".fieldsForRegister"] = array();

$tdatalistener[".listAjax"] = false;

	$tdatalistener[".audit"] = false;

	$tdatalistener[".locking"] = false;



$tdatalistener[".list"] = true;

$tdatalistener[".inlineEdit"] = true;


$tdatalistener[".exportTo"] = true;


$tdatalistener[".delete"] = true;

$tdatalistener[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalistener[".searchSaving"] = false;
//

$tdatalistener[".showSearchPanel"] = true;
		$tdatalistener[".flexibleSearch"] = true;

if (isMobile())
	$tdatalistener[".isUseAjaxSuggest"] = false;
else
	$tdatalistener[".isUseAjaxSuggest"] = true;

$tdatalistener[".rowHighlite"] = true;


								
$tdatalistener[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalistener[".isUseTimeForSearch"] = false;





$tdatalistener[".allSearchFields"] = array();
$tdatalistener[".filterFields"] = array();
$tdatalistener[".requiredSearchFields"] = array();

$tdatalistener[".allSearchFields"][] = "listenerRef";
	$tdatalistener[".allSearchFields"][] = "cid";
	$tdatalistener[".allSearchFields"][] = "cfid";
	$tdatalistener[".allSearchFields"][] = "fullName";
	$tdatalistener[".allSearchFields"][] = "email";
	$tdatalistener[".allSearchFields"][] = "institution";
	$tdatalistener[".allSearchFields"][] = "country";
	$tdatalistener[".allSearchFields"][] = "confirm";
	$tdatalistener[".allSearchFields"][] = "note";
	

$tdatalistener[".googleLikeFields"] = array();
$tdatalistener[".googleLikeFields"][] = "parID";
$tdatalistener[".googleLikeFields"][] = "cid";
$tdatalistener[".googleLikeFields"][] = "userID";
$tdatalistener[".googleLikeFields"][] = "cfid";
$tdatalistener[".googleLikeFields"][] = "email";
$tdatalistener[".googleLikeFields"][] = "fullName";
$tdatalistener[".googleLikeFields"][] = "institution";
$tdatalistener[".googleLikeFields"][] = "country";
$tdatalistener[".googleLikeFields"][] = "confirm";
$tdatalistener[".googleLikeFields"][] = "note";
$tdatalistener[".googleLikeFields"][] = "paperCount";
$tdatalistener[".googleLikeFields"][] = "listenerRef";
$tdatalistener[".googleLikeFields"][] = "item";


$tdatalistener[".advSearchFields"] = array();
$tdatalistener[".advSearchFields"][] = "listenerRef";
$tdatalistener[".advSearchFields"][] = "cid";
$tdatalistener[".advSearchFields"][] = "cfid";
$tdatalistener[".advSearchFields"][] = "fullName";
$tdatalistener[".advSearchFields"][] = "email";
$tdatalistener[".advSearchFields"][] = "institution";
$tdatalistener[".advSearchFields"][] = "country";
$tdatalistener[".advSearchFields"][] = "confirm";
$tdatalistener[".advSearchFields"][] = "note";

$tdatalistener[".tableType"] = "list";

$tdatalistener[".printerPageOrientation"] = 0;
$tdatalistener[".nPrinterPageScale"] = 100;

$tdatalistener[".nPrinterSplitRecords"] = 40;

$tdatalistener[".nPrinterPDFSplitRecords"] = 40;



$tdatalistener[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatalistener[".pageSize"] = 20;

$tdatalistener[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY participate.parID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalistener[".strOrderBy"] = $tstrOrderBy;

$tdatalistener[".orderindexes"] = array();
$tdatalistener[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "participate.parID");

$tdatalistener[".sqlHead"] = "SELECT participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item";
$tdatalistener[".sqlFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid";
$tdatalistener[".sqlWhereExpr"] = "confees.item LIKE '%Listener%'";
$tdatalistener[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalistener[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalistener[".arrGroupsPerPage"] = $arrGPP;


$tableKeyslistener = array();
$tableKeyslistener[] = "parID";
$tdatalistener[".Keys"] = $tableKeyslistener;

$tdatalistener[".listFields"] = array();
$tdatalistener[".listFields"][] = "listenerRef";
$tdatalistener[".listFields"][] = "cid";
$tdatalistener[".listFields"][] = "cfid";
$tdatalistener[".listFields"][] = "fullName";
$tdatalistener[".listFields"][] = "email";
$tdatalistener[".listFields"][] = "institution";
$tdatalistener[".listFields"][] = "country";
$tdatalistener[".listFields"][] = "confirm";
$tdatalistener[".listFields"][] = "note";

$tdatalistener[".hideMobileList"] = array();


$tdatalistener[".viewFields"] = array();

$tdatalistener[".addFields"] = array();

$tdatalistener[".masterListFields"] = array();
$tdatalistener[".masterListFields"][] = "parID";
$tdatalistener[".masterListFields"][] = "listenerRef";
$tdatalistener[".masterListFields"][] = "userID";
$tdatalistener[".masterListFields"][] = "paperCount";
$tdatalistener[".masterListFields"][] = "item";
$tdatalistener[".masterListFields"][] = "cid";
$tdatalistener[".masterListFields"][] = "cfid";
$tdatalistener[".masterListFields"][] = "fullName";
$tdatalistener[".masterListFields"][] = "email";
$tdatalistener[".masterListFields"][] = "institution";
$tdatalistener[".masterListFields"][] = "country";
$tdatalistener[".masterListFields"][] = "confirm";
$tdatalistener[".masterListFields"][] = "note";

$tdatalistener[".inlineAddFields"] = array();

$tdatalistener[".editFields"] = array();

$tdatalistener[".inlineEditFields"] = array();
$tdatalistener[".inlineEditFields"][] = "confirm";
$tdatalistener[".inlineEditFields"][] = "note";

$tdatalistener[".exportFields"] = array();
$tdatalistener[".exportFields"][] = "parID";
$tdatalistener[".exportFields"][] = "listenerRef";
$tdatalistener[".exportFields"][] = "userID";
$tdatalistener[".exportFields"][] = "paperCount";
$tdatalistener[".exportFields"][] = "item";
$tdatalistener[".exportFields"][] = "cid";
$tdatalistener[".exportFields"][] = "cfid";
$tdatalistener[".exportFields"][] = "fullName";
$tdatalistener[".exportFields"][] = "email";
$tdatalistener[".exportFields"][] = "institution";
$tdatalistener[".exportFields"][] = "country";
$tdatalistener[".exportFields"][] = "confirm";
$tdatalistener[".exportFields"][] = "note";

$tdatalistener[".importFields"] = array();
$tdatalistener[".importFields"][] = "parID";
$tdatalistener[".importFields"][] = "cid";
$tdatalistener[".importFields"][] = "userID";
$tdatalistener[".importFields"][] = "cfid";
$tdatalistener[".importFields"][] = "email";
$tdatalistener[".importFields"][] = "fullName";
$tdatalistener[".importFields"][] = "institution";
$tdatalistener[".importFields"][] = "country";
$tdatalistener[".importFields"][] = "confirm";
$tdatalistener[".importFields"][] = "note";
$tdatalistener[".importFields"][] = "paperCount";
$tdatalistener[".importFields"][] = "listenerRef";
$tdatalistener[".importFields"][] = "item";

$tdatalistener[".printFields"] = array();

//	parID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "parID";
	$fdata["GoodName"] = "parID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","parID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
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








	$tdatalistener["parID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatalistener["cid"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
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








	$tdatalistener["userID"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","cfid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatalistener["cfid"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("listener","email");
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




	$tdatalistener["email"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("listener","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatalistener["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("listener","institution");
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




	$tdatalistener["institution"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("listener","country");
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




	$tdatalistener["country"] = $fdata;
//	confirm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "confirm";
	$fdata["GoodName"] = "confirm";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","confirm");
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




	$tdatalistener["confirm"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","note");
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




	$tdatalistener["note"] = $fdata;
//	paperCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "paperCount";
	$fdata["GoodName"] = "paperCount";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","paperCount");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
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








	$tdatalistener["paperCount"] = $fdata;
//	listenerRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "listenerRef";
	$fdata["GoodName"] = "listenerRef";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("listener","listenerRef");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatalistener["listenerRef"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("listener","item");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
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








	$tdatalistener["item"] = $fdata;


$tables_data["listener"]=&$tdatalistener;
$field_labels["listener"] = &$fieldLabelslistener;
$fieldToolTips["listener"] = &$fieldToolTipslistener;
$page_titles["listener"] = &$pageTitleslistener;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["listener"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["listener"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_listener()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item";
$proto0["m_strFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid";
$proto0["m_strWhere"] = "confees.item LIKE '%Listener%'";
$proto0["m_strOrderBy"] = "ORDER BY participate.parID DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "confees.item LIKE '%Listener%'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "listener"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "LIKE '%Listener%'";
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
	"m_srcTableName" => "listener"
));

$proto5["m_sql"] = "participate.parID";
$proto5["m_srcTableName"] = "listener";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
));

$proto7["m_sql"] = "participate.cid";
$proto7["m_srcTableName"] = "listener";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
));

$proto9["m_sql"] = "participate.userID";
$proto9["m_srcTableName"] = "listener";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
));

$proto11["m_sql"] = "participate.cfid";
$proto11["m_srcTableName"] = "listener";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "listener"
));

$proto13["m_sql"] = "`user`.email";
$proto13["m_srcTableName"] = "listener";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "listener"
));

$proto15["m_sql"] = "`user`.fullName";
$proto15["m_srcTableName"] = "listener";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "listener"
));

$proto17["m_sql"] = "`user`.institution";
$proto17["m_srcTableName"] = "listener";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "listener"
));

$proto19["m_sql"] = "`user`.country";
$proto19["m_srcTableName"] = "listener";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "confirm",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
));

$proto21["m_sql"] = "participate.confirm";
$proto21["m_srcTableName"] = "listener";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
));

$proto23["m_sql"] = "participate.note";
$proto23["m_srcTableName"] = "listener";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "paperCount",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
));

$proto25["m_sql"] = "participate.paperCount";
$proto25["m_srcTableName"] = "listener";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "listenerRef",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
));

$proto27["m_sql"] = "participate.listenerRef";
$proto27["m_srcTableName"] = "listener";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "listener"
));

$proto29["m_sql"] = "confees.item";
$proto29["m_srcTableName"] = "listener";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "participate";
$proto32["m_srcTableName"] = "listener";
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
$proto31["m_srcTableName"] = "listener";
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
$proto36["m_srcTableName"] = "listener";
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
$proto35["m_srcTableName"] = "listener";
$proto37=array();
$proto37["m_sql"] = "participate.userID = `user`.userID";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
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
$proto40["m_srcTableName"] = "listener";
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
$proto39["m_srcTableName"] = "listener";
$proto41=array();
$proto41["m_sql"] = "participate.cfid = confees.cfid";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "listener"
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
	"m_srcTableName" => "listener"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="listener";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_listener = createSqlQuery_listener();



													

$tdatalistener[".sqlquery"] = $queryData_listener;

$tableEvents["listener"] = new eventsBase;
$tdatalistener[".hasEvents"] = false;

?>