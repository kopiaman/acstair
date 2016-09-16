<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafollowup_abstract = array();
	$tdatafollowup_abstract[".truncateText"] = true;
	$tdatafollowup_abstract[".NumberOfChars"] = 80;
	$tdatafollowup_abstract[".ShortName"] = "followup_abstract";
	$tdatafollowup_abstract[".OwnerID"] = "";
	$tdatafollowup_abstract[".OriginalTable"] = "participate";

//	field labels
$fieldLabelsfollowup_abstract = array();
$fieldToolTipsfollowup_abstract = array();
$pageTitlesfollowup_abstract = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollowup_abstract["English"] = array();
	$fieldToolTipsfollowup_abstract["English"] = array();
	$pageTitlesfollowup_abstract["English"] = array();
	$fieldLabelsfollowup_abstract["English"]["cid"] = "Conference ";
	$fieldToolTipsfollowup_abstract["English"]["cid"] = "";
	$fieldLabelsfollowup_abstract["English"]["userID"] = "UserID";
	$fieldToolTipsfollowup_abstract["English"]["userID"] = "";
	$fieldLabelsfollowup_abstract["English"]["cfid"] = "Fee";
	$fieldToolTipsfollowup_abstract["English"]["cfid"] = "";
	$fieldLabelsfollowup_abstract["English"]["parID"] = "Par ID";
	$fieldToolTipsfollowup_abstract["English"]["parID"] = "";
	$fieldLabelsfollowup_abstract["English"]["email"] = "Email";
	$fieldToolTipsfollowup_abstract["English"]["email"] = "";
	$fieldLabelsfollowup_abstract["English"]["fullName"] = "Full Name";
	$fieldToolTipsfollowup_abstract["English"]["fullName"] = "";
	$fieldLabelsfollowup_abstract["English"]["institution"] = "Institution";
	$fieldToolTipsfollowup_abstract["English"]["institution"] = "";
	$fieldLabelsfollowup_abstract["English"]["country"] = "Country";
	$fieldToolTipsfollowup_abstract["English"]["country"] = "";
	$fieldLabelsfollowup_abstract["English"]["confirm"] = "Confirm";
	$fieldToolTipsfollowup_abstract["English"]["confirm"] = "";
	$fieldLabelsfollowup_abstract["English"]["note"] = "Note";
	$fieldToolTipsfollowup_abstract["English"]["note"] = "";
	$fieldLabelsfollowup_abstract["English"]["paperCount"] = "Paper Count";
	$fieldToolTipsfollowup_abstract["English"]["paperCount"] = "";
	$fieldLabelsfollowup_abstract["English"]["listenerRef"] = "Listener Ref";
	$fieldToolTipsfollowup_abstract["English"]["listenerRef"] = "";
	$fieldLabelsfollowup_abstract["English"]["item"] = "Item";
	$fieldToolTipsfollowup_abstract["English"]["item"] = "";
	$fieldLabelsfollowup_abstract["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsfollowup_abstract["English"]["paperRef"] = "";
	if (count($fieldToolTipsfollowup_abstract["English"]))
		$tdatafollowup_abstract[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfollowup_abstract[""] = array();
	$fieldToolTipsfollowup_abstract[""] = array();
	$pageTitlesfollowup_abstract[""] = array();
	if (count($fieldToolTipsfollowup_abstract[""]))
		$tdatafollowup_abstract[".isUseToolTips"] = true;
}


	$tdatafollowup_abstract[".NCSearch"] = true;



$tdatafollowup_abstract[".shortTableName"] = "followup_abstract";
$tdatafollowup_abstract[".nSecOptions"] = 0;
$tdatafollowup_abstract[".recsPerRowList"] = 1;
$tdatafollowup_abstract[".recsPerRowPrint"] = 1;
$tdatafollowup_abstract[".mainTableOwnerID"] = "";
$tdatafollowup_abstract[".moveNext"] = 1;
$tdatafollowup_abstract[".entityType"] = 1;

$tdatafollowup_abstract[".strOriginalTableName"] = "participate";




$tdatafollowup_abstract[".showAddInPopup"] = false;

$tdatafollowup_abstract[".showEditInPopup"] = false;

$tdatafollowup_abstract[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafollowup_abstract[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafollowup_abstract[".fieldsForRegister"] = array();

$tdatafollowup_abstract[".listAjax"] = false;

	$tdatafollowup_abstract[".audit"] = false;

	$tdatafollowup_abstract[".locking"] = false;



$tdatafollowup_abstract[".list"] = true;

$tdatafollowup_abstract[".inlineEdit"] = true;


$tdatafollowup_abstract[".exportTo"] = true;



$tdatafollowup_abstract[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafollowup_abstract[".searchSaving"] = false;
//

$tdatafollowup_abstract[".showSearchPanel"] = true;
		$tdatafollowup_abstract[".flexibleSearch"] = true;

if (isMobile())
	$tdatafollowup_abstract[".isUseAjaxSuggest"] = false;
else
	$tdatafollowup_abstract[".isUseAjaxSuggest"] = true;

$tdatafollowup_abstract[".rowHighlite"] = true;


								
$tdatafollowup_abstract[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollowup_abstract[".isUseTimeForSearch"] = false;





$tdatafollowup_abstract[".allSearchFields"] = array();
$tdatafollowup_abstract[".filterFields"] = array();
$tdatafollowup_abstract[".requiredSearchFields"] = array();

$tdatafollowup_abstract[".allSearchFields"][] = "listenerRef";
	$tdatafollowup_abstract[".allSearchFields"][] = "item";
	$tdatafollowup_abstract[".allSearchFields"][] = "parID";
	$tdatafollowup_abstract[".allSearchFields"][] = "userID";
	$tdatafollowup_abstract[".allSearchFields"][] = "cid";
	$tdatafollowup_abstract[".allSearchFields"][] = "cfid";
	$tdatafollowup_abstract[".allSearchFields"][] = "fullName";
	$tdatafollowup_abstract[".allSearchFields"][] = "email";
	$tdatafollowup_abstract[".allSearchFields"][] = "institution";
	$tdatafollowup_abstract[".allSearchFields"][] = "country";
	$tdatafollowup_abstract[".allSearchFields"][] = "note";
	

$tdatafollowup_abstract[".googleLikeFields"] = array();
$tdatafollowup_abstract[".googleLikeFields"][] = "parID";
$tdatafollowup_abstract[".googleLikeFields"][] = "cid";
$tdatafollowup_abstract[".googleLikeFields"][] = "userID";
$tdatafollowup_abstract[".googleLikeFields"][] = "cfid";
$tdatafollowup_abstract[".googleLikeFields"][] = "email";
$tdatafollowup_abstract[".googleLikeFields"][] = "fullName";
$tdatafollowup_abstract[".googleLikeFields"][] = "institution";
$tdatafollowup_abstract[".googleLikeFields"][] = "country";
$tdatafollowup_abstract[".googleLikeFields"][] = "confirm";
$tdatafollowup_abstract[".googleLikeFields"][] = "note";
$tdatafollowup_abstract[".googleLikeFields"][] = "paperCount";
$tdatafollowup_abstract[".googleLikeFields"][] = "listenerRef";
$tdatafollowup_abstract[".googleLikeFields"][] = "item";
$tdatafollowup_abstract[".googleLikeFields"][] = "paperRef";


$tdatafollowup_abstract[".advSearchFields"] = array();
$tdatafollowup_abstract[".advSearchFields"][] = "listenerRef";
$tdatafollowup_abstract[".advSearchFields"][] = "item";
$tdatafollowup_abstract[".advSearchFields"][] = "parID";
$tdatafollowup_abstract[".advSearchFields"][] = "userID";
$tdatafollowup_abstract[".advSearchFields"][] = "cid";
$tdatafollowup_abstract[".advSearchFields"][] = "cfid";
$tdatafollowup_abstract[".advSearchFields"][] = "fullName";
$tdatafollowup_abstract[".advSearchFields"][] = "email";
$tdatafollowup_abstract[".advSearchFields"][] = "institution";
$tdatafollowup_abstract[".advSearchFields"][] = "country";
$tdatafollowup_abstract[".advSearchFields"][] = "note";

$tdatafollowup_abstract[".tableType"] = "list";

$tdatafollowup_abstract[".printerPageOrientation"] = 0;
$tdatafollowup_abstract[".nPrinterPageScale"] = 100;

$tdatafollowup_abstract[".nPrinterSplitRecords"] = 40;

$tdatafollowup_abstract[".nPrinterPDFSplitRecords"] = 40;



$tdatafollowup_abstract[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatafollowup_abstract[".pageSize"] = 20;

$tdatafollowup_abstract[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY participate.parID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafollowup_abstract[".strOrderBy"] = $tstrOrderBy;

$tdatafollowup_abstract[".orderindexes"] = array();
$tdatafollowup_abstract[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "participate.parID");

$tdatafollowup_abstract[".sqlHead"] = "SELECT participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  paper.paperRef";
$tdatafollowup_abstract[".sqlFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  LEFT OUTER JOIN paper ON participate.userID = paper.userID";
$tdatafollowup_abstract[".sqlWhereExpr"] = "(confees.item LIKE '%Presenter%') AND (paper.paperRef IS NULL)";
$tdatafollowup_abstract[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollowup_abstract[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollowup_abstract[".arrGroupsPerPage"] = $arrGPP;


$tableKeysfollowup_abstract = array();
$tableKeysfollowup_abstract[] = "parID";
$tdatafollowup_abstract[".Keys"] = $tableKeysfollowup_abstract;

$tdatafollowup_abstract[".listFields"] = array();
$tdatafollowup_abstract[".listFields"][] = "cid";
$tdatafollowup_abstract[".listFields"][] = "cfid";
$tdatafollowup_abstract[".listFields"][] = "fullName";
$tdatafollowup_abstract[".listFields"][] = "email";
$tdatafollowup_abstract[".listFields"][] = "institution";
$tdatafollowup_abstract[".listFields"][] = "country";
$tdatafollowup_abstract[".listFields"][] = "note";

$tdatafollowup_abstract[".hideMobileList"] = array();


$tdatafollowup_abstract[".viewFields"] = array();

$tdatafollowup_abstract[".addFields"] = array();

$tdatafollowup_abstract[".masterListFields"] = array();
$tdatafollowup_abstract[".masterListFields"][] = "parID";
$tdatafollowup_abstract[".masterListFields"][] = "item";
$tdatafollowup_abstract[".masterListFields"][] = "userID";
$tdatafollowup_abstract[".masterListFields"][] = "listenerRef";
$tdatafollowup_abstract[".masterListFields"][] = "paperCount";
$tdatafollowup_abstract[".masterListFields"][] = "paperRef";
$tdatafollowup_abstract[".masterListFields"][] = "cid";
$tdatafollowup_abstract[".masterListFields"][] = "cfid";
$tdatafollowup_abstract[".masterListFields"][] = "fullName";
$tdatafollowup_abstract[".masterListFields"][] = "email";
$tdatafollowup_abstract[".masterListFields"][] = "institution";
$tdatafollowup_abstract[".masterListFields"][] = "country";
$tdatafollowup_abstract[".masterListFields"][] = "confirm";
$tdatafollowup_abstract[".masterListFields"][] = "note";

$tdatafollowup_abstract[".inlineAddFields"] = array();

$tdatafollowup_abstract[".editFields"] = array();

$tdatafollowup_abstract[".inlineEditFields"] = array();
$tdatafollowup_abstract[".inlineEditFields"][] = "note";

$tdatafollowup_abstract[".exportFields"] = array();
$tdatafollowup_abstract[".exportFields"][] = "parID";
$tdatafollowup_abstract[".exportFields"][] = "listenerRef";
$tdatafollowup_abstract[".exportFields"][] = "userID";
$tdatafollowup_abstract[".exportFields"][] = "item";
$tdatafollowup_abstract[".exportFields"][] = "cid";
$tdatafollowup_abstract[".exportFields"][] = "cfid";
$tdatafollowup_abstract[".exportFields"][] = "fullName";
$tdatafollowup_abstract[".exportFields"][] = "email";
$tdatafollowup_abstract[".exportFields"][] = "institution";
$tdatafollowup_abstract[".exportFields"][] = "country";
$tdatafollowup_abstract[".exportFields"][] = "note";

$tdatafollowup_abstract[".importFields"] = array();
$tdatafollowup_abstract[".importFields"][] = "parID";
$tdatafollowup_abstract[".importFields"][] = "cid";
$tdatafollowup_abstract[".importFields"][] = "userID";
$tdatafollowup_abstract[".importFields"][] = "cfid";
$tdatafollowup_abstract[".importFields"][] = "email";
$tdatafollowup_abstract[".importFields"][] = "fullName";
$tdatafollowup_abstract[".importFields"][] = "institution";
$tdatafollowup_abstract[".importFields"][] = "country";
$tdatafollowup_abstract[".importFields"][] = "confirm";
$tdatafollowup_abstract[".importFields"][] = "note";
$tdatafollowup_abstract[".importFields"][] = "paperCount";
$tdatafollowup_abstract[".importFields"][] = "listenerRef";
$tdatafollowup_abstract[".importFields"][] = "item";
$tdatafollowup_abstract[".importFields"][] = "paperRef";

$tdatafollowup_abstract[".printFields"] = array();

//	parID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "parID";
	$fdata["GoodName"] = "parID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","parID");
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




	$tdatafollowup_abstract["parID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","cid");
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




	$tdatafollowup_abstract["cid"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
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




	$tdatafollowup_abstract["userID"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","cfid");
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




	$tdatafollowup_abstract["cfid"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_abstract","email");
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




	$tdatafollowup_abstract["email"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_abstract","fullName");
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




	$tdatafollowup_abstract["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_abstract","institution");
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




	$tdatafollowup_abstract["institution"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_abstract","country");
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




	$tdatafollowup_abstract["country"] = $fdata;
//	confirm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "confirm";
	$fdata["GoodName"] = "confirm";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","confirm");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "confirm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.confirm";

	
	
			
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








	$tdatafollowup_abstract["confirm"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.note";

	
	
				$fdata["FieldPermissions"] = true;

			
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




	$tdatafollowup_abstract["note"] = $fdata;
//	paperCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "paperCount";
	$fdata["GoodName"] = "paperCount";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","paperCount");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperCount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.paperCount";

	
	
			
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








	$tdatafollowup_abstract["paperCount"] = $fdata;
//	listenerRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "listenerRef";
	$fdata["GoodName"] = "listenerRef";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_abstract","listenerRef");
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




	$tdatafollowup_abstract["listenerRef"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("followup_abstract","item");
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




	$tdatafollowup_abstract["item"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("followup_abstract","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperRef";

	
	
			
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








	$tdatafollowup_abstract["paperRef"] = $fdata;


$tables_data["followup_abstract"]=&$tdatafollowup_abstract;
$field_labels["followup_abstract"] = &$fieldLabelsfollowup_abstract;
$fieldToolTips["followup_abstract"] = &$fieldToolTipsfollowup_abstract;
$page_titles["followup_abstract"] = &$pageTitlesfollowup_abstract;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["followup_abstract"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["followup_abstract"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_followup_abstract()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  paper.paperRef";
$proto0["m_strFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  LEFT OUTER JOIN paper ON participate.userID = paper.userID";
$proto0["m_strWhere"] = "(confees.item LIKE '%Presenter%') AND (paper.paperRef IS NULL)";
$proto0["m_strOrderBy"] = "ORDER BY participate.parID DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(confees.item LIKE '%Presenter%') AND (paper.paperRef IS NULL)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(confees.item LIKE '%Presenter%') AND (paper.paperRef IS NULL)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "confees.item LIKE '%Presenter%'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "followup_abstract"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "LIKE '%Presenter%'";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "paper.paperRef IS NULL";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_abstract"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "IS NULL";
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
	"m_strName" => "parID",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto9["m_sql"] = "participate.parID";
$proto9["m_srcTableName"] = "followup_abstract";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto11["m_sql"] = "participate.cid";
$proto11["m_srcTableName"] = "followup_abstract";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto13["m_sql"] = "participate.userID";
$proto13["m_srcTableName"] = "followup_abstract";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto15["m_sql"] = "participate.cfid";
$proto15["m_srcTableName"] = "followup_abstract";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_abstract"
));

$proto17["m_sql"] = "`user`.email";
$proto17["m_srcTableName"] = "followup_abstract";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_abstract"
));

$proto19["m_sql"] = "`user`.fullName";
$proto19["m_srcTableName"] = "followup_abstract";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_abstract"
));

$proto21["m_sql"] = "`user`.institution";
$proto21["m_srcTableName"] = "followup_abstract";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_abstract"
));

$proto23["m_sql"] = "`user`.country";
$proto23["m_srcTableName"] = "followup_abstract";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "confirm",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto25["m_sql"] = "participate.confirm";
$proto25["m_srcTableName"] = "followup_abstract";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto27["m_sql"] = "participate.note";
$proto27["m_srcTableName"] = "followup_abstract";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "paperCount",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto29["m_sql"] = "participate.paperCount";
$proto29["m_srcTableName"] = "followup_abstract";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "listenerRef",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto31["m_sql"] = "participate.listenerRef";
$proto31["m_srcTableName"] = "followup_abstract";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "followup_abstract"
));

$proto33["m_sql"] = "confees.item";
$proto33["m_srcTableName"] = "followup_abstract";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "followup_abstract"
));

$proto35["m_sql"] = "paper.paperRef";
$proto35["m_srcTableName"] = "followup_abstract";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "participate";
$proto38["m_srcTableName"] = "followup_abstract";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "parID";
$proto38["m_columns"][] = "cid";
$proto38["m_columns"][] = "userID";
$proto38["m_columns"][] = "cfid";
$proto38["m_columns"][] = "confirm";
$proto38["m_columns"][] = "paperCount";
$proto38["m_columns"][] = "listenerRef";
$proto38["m_columns"][] = "note";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "participate";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "followup_abstract";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "user";
$proto42["m_srcTableName"] = "followup_abstract";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "userID";
$proto42["m_columns"][] = "email";
$proto42["m_columns"][] = "password";
$proto42["m_columns"][] = "fullName";
$proto42["m_columns"][] = "gender";
$proto42["m_columns"][] = "address";
$proto42["m_columns"][] = "postal";
$proto42["m_columns"][] = "city";
$proto42["m_columns"][] = "state";
$proto42["m_columns"][] = "country";
$proto42["m_columns"][] = "tel";
$proto42["m_columns"][] = "fax";
$proto42["m_columns"][] = "institution";
$proto42["m_columns"][] = "faculty";
$proto42["m_columns"][] = "department";
$proto42["m_columns"][] = "research";
$proto42["m_columns"][] = "student";
$proto42["m_columns"][] = "role";
$proto42["m_columns"][] = "note";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "INNER JOIN `user` ON participate.userID = `user`.userID";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "followup_abstract";
$proto43=array();
$proto43["m_sql"] = "participate.userID = `user`.userID";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= `user`.userID";
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
$proto46["m_strName"] = "confees";
$proto46["m_srcTableName"] = "followup_abstract";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "cfid";
$proto46["m_columns"][] = "cid";
$proto46["m_columns"][] = "item";
$proto46["m_columns"][] = "priceNormal";
$proto46["m_columns"][] = "datelineNormal";
$proto46["m_columns"][] = "priceEarly";
$proto46["m_columns"][] = "datelineEarly";
$proto46["m_columns"][] = "local";
$proto46["m_columns"][] = "currency";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN confees ON participate.cfid = confees.cfid";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "followup_abstract";
$proto47=array();
$proto47["m_sql"] = "participate.cfid = confees.cfid";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= confees.cfid";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_LEFTJOIN";
			$proto50=array();
$proto50["m_strName"] = "paper";
$proto50["m_srcTableName"] = "followup_abstract";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "paperID";
$proto50["m_columns"][] = "paperRef";
$proto50["m_columns"][] = "userID";
$proto50["m_columns"][] = "cid";
$proto50["m_columns"][] = "multiAuthor";
$proto50["m_columns"][] = "funded";
$proto50["m_columns"][] = "date_submit";
$proto50["m_columns"][] = "title";
$proto50["m_columns"][] = "abstract";
$proto50["m_columns"][] = "paperStatus";
$proto50["m_columns"][] = "fullPaper";
$proto50["m_columns"][] = "paymentStatus";
$proto50["m_columns"][] = "slotDate";
$proto50["m_columns"][] = "slotTime";
$proto50["m_columns"][] = "slotRoom";
$proto50["m_columns"][] = "slotTurn";
$proto50["m_columns"][] = "invite";
$proto50["m_columns"][] = "note";
$proto50["m_columns"][] = "ppt";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "LEFT OUTER JOIN paper ON participate.userID = paper.userID";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "followup_abstract";
$proto51=array();
$proto51["m_sql"] = "participate.userID = paper.userID";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= paper.userID";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "parID",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_abstract"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 0;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="followup_abstract";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_followup_abstract = createSqlQuery_followup_abstract();



														

$tdatafollowup_abstract[".sqlquery"] = $queryData_followup_abstract;

$tableEvents["followup_abstract"] = new eventsBase;
$tdatafollowup_abstract[".hasEvents"] = false;

?>