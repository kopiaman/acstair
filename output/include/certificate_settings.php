<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacertificate = array();
	$tdatacertificate[".truncateText"] = true;
	$tdatacertificate[".NumberOfChars"] = 80;
	$tdatacertificate[".ShortName"] = "certificate";
	$tdatacertificate[".OwnerID"] = "";
	$tdatacertificate[".OriginalTable"] = "participate";

//	field labels
$fieldLabelscertificate = array();
$fieldToolTipscertificate = array();
$pageTitlescertificate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscertificate["English"] = array();
	$fieldToolTipscertificate["English"] = array();
	$pageTitlescertificate["English"] = array();
	$fieldLabelscertificate["English"]["cid"] = "Conference ";
	$fieldToolTipscertificate["English"]["cid"] = "";
	$fieldLabelscertificate["English"]["userID"] = "UserID";
	$fieldToolTipscertificate["English"]["userID"] = "";
	$fieldLabelscertificate["English"]["cfid"] = "Fee";
	$fieldToolTipscertificate["English"]["cfid"] = "";
	$fieldLabelscertificate["English"]["parID"] = "Par ID";
	$fieldToolTipscertificate["English"]["parID"] = "";
	$fieldLabelscertificate["English"]["email"] = "Email";
	$fieldToolTipscertificate["English"]["email"] = "";
	$fieldLabelscertificate["English"]["fullName"] = "Full Name";
	$fieldToolTipscertificate["English"]["fullName"] = "";
	$fieldLabelscertificate["English"]["institution"] = "Institution";
	$fieldToolTipscertificate["English"]["institution"] = "";
	$fieldLabelscertificate["English"]["country"] = "Country";
	$fieldToolTipscertificate["English"]["country"] = "";
	$fieldLabelscertificate["English"]["confirm"] = "Confirm";
	$fieldToolTipscertificate["English"]["confirm"] = "";
	$fieldLabelscertificate["English"]["note"] = "Note";
	$fieldToolTipscertificate["English"]["note"] = "";
	$fieldLabelscertificate["English"]["paperCount"] = "Paper Count";
	$fieldToolTipscertificate["English"]["paperCount"] = "";
	$fieldLabelscertificate["English"]["listenerRef"] = "Listener Ref";
	$fieldToolTipscertificate["English"]["listenerRef"] = "";
	$fieldLabelscertificate["English"]["item"] = "Item";
	$fieldToolTipscertificate["English"]["item"] = "";
	$fieldLabelscertificate["English"]["opt"] = "Opt";
	$fieldToolTipscertificate["English"]["opt"] = "";
	$fieldLabelscertificate["English"]["cnameCode"] = "Cname Code";
	$fieldToolTipscertificate["English"]["cnameCode"] = "";
	if (count($fieldToolTipscertificate["English"]))
		$tdatacertificate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscertificate[""] = array();
	$fieldToolTipscertificate[""] = array();
	$pageTitlescertificate[""] = array();
	if (count($fieldToolTipscertificate[""]))
		$tdatacertificate[".isUseToolTips"] = true;
}


	$tdatacertificate[".NCSearch"] = true;



$tdatacertificate[".shortTableName"] = "certificate";
$tdatacertificate[".nSecOptions"] = 0;
$tdatacertificate[".recsPerRowList"] = 1;
$tdatacertificate[".recsPerRowPrint"] = 1;
$tdatacertificate[".mainTableOwnerID"] = "";
$tdatacertificate[".moveNext"] = 1;
$tdatacertificate[".entityType"] = 1;

$tdatacertificate[".strOriginalTableName"] = "participate";




$tdatacertificate[".showAddInPopup"] = false;

$tdatacertificate[".showEditInPopup"] = false;

$tdatacertificate[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacertificate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacertificate[".fieldsForRegister"] = array();

$tdatacertificate[".listAjax"] = false;

	$tdatacertificate[".audit"] = false;

	$tdatacertificate[".locking"] = false;



$tdatacertificate[".list"] = true;






$tdatacertificate[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacertificate[".searchSaving"] = false;
//

$tdatacertificate[".showSearchPanel"] = true;
		$tdatacertificate[".flexibleSearch"] = true;

if (isMobile())
	$tdatacertificate[".isUseAjaxSuggest"] = false;
else
	$tdatacertificate[".isUseAjaxSuggest"] = true;

$tdatacertificate[".rowHighlite"] = true;


								
$tdatacertificate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacertificate[".isUseTimeForSearch"] = false;





$tdatacertificate[".allSearchFields"] = array();
$tdatacertificate[".filterFields"] = array();
$tdatacertificate[".requiredSearchFields"] = array();

$tdatacertificate[".allSearchFields"][] = "paperCount";
	$tdatacertificate[".allSearchFields"][] = "listenerRef";
	$tdatacertificate[".allSearchFields"][] = "parID";
	$tdatacertificate[".allSearchFields"][] = "userID";
	$tdatacertificate[".allSearchFields"][] = "cid";
	$tdatacertificate[".allSearchFields"][] = "cfid";
	$tdatacertificate[".allSearchFields"][] = "fullName";
	$tdatacertificate[".allSearchFields"][] = "email";
	$tdatacertificate[".allSearchFields"][] = "institution";
	$tdatacertificate[".allSearchFields"][] = "country";
	$tdatacertificate[".allSearchFields"][] = "note";
	

$tdatacertificate[".googleLikeFields"] = array();
$tdatacertificate[".googleLikeFields"][] = "parID";
$tdatacertificate[".googleLikeFields"][] = "cid";
$tdatacertificate[".googleLikeFields"][] = "userID";
$tdatacertificate[".googleLikeFields"][] = "cfid";
$tdatacertificate[".googleLikeFields"][] = "email";
$tdatacertificate[".googleLikeFields"][] = "fullName";
$tdatacertificate[".googleLikeFields"][] = "institution";
$tdatacertificate[".googleLikeFields"][] = "country";
$tdatacertificate[".googleLikeFields"][] = "confirm";
$tdatacertificate[".googleLikeFields"][] = "note";
$tdatacertificate[".googleLikeFields"][] = "paperCount";
$tdatacertificate[".googleLikeFields"][] = "listenerRef";
$tdatacertificate[".googleLikeFields"][] = "item";
$tdatacertificate[".googleLikeFields"][] = "opt";
$tdatacertificate[".googleLikeFields"][] = "cnameCode";


$tdatacertificate[".advSearchFields"] = array();
$tdatacertificate[".advSearchFields"][] = "paperCount";
$tdatacertificate[".advSearchFields"][] = "listenerRef";
$tdatacertificate[".advSearchFields"][] = "parID";
$tdatacertificate[".advSearchFields"][] = "userID";
$tdatacertificate[".advSearchFields"][] = "cid";
$tdatacertificate[".advSearchFields"][] = "cfid";
$tdatacertificate[".advSearchFields"][] = "fullName";
$tdatacertificate[".advSearchFields"][] = "email";
$tdatacertificate[".advSearchFields"][] = "institution";
$tdatacertificate[".advSearchFields"][] = "country";
$tdatacertificate[".advSearchFields"][] = "note";

$tdatacertificate[".tableType"] = "list";

$tdatacertificate[".printerPageOrientation"] = 0;
$tdatacertificate[".nPrinterPageScale"] = 100;

$tdatacertificate[".nPrinterSplitRecords"] = 40;

$tdatacertificate[".nPrinterPDFSplitRecords"] = 40;



$tdatacertificate[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatacertificate[".pageSize"] = 20;

$tdatacertificate[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY participate.parID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacertificate[".strOrderBy"] = $tstrOrderBy;

$tdatacertificate[".orderindexes"] = array();
$tdatacertificate[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "participate.parID");

$tdatacertificate[".sqlHead"] = "SELECT participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  participate.parID AS opt,  conference.cnameCode";
$tdatacertificate[".sqlFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  INNER JOIN conference ON participate.cid = conference.cid";
$tdatacertificate[".sqlWhereExpr"] = "participate.confirm ='Yes'";
$tdatacertificate[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacertificate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacertificate[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscertificate = array();
$tableKeyscertificate[] = "parID";
$tdatacertificate[".Keys"] = $tableKeyscertificate;

$tdatacertificate[".listFields"] = array();
$tdatacertificate[".listFields"][] = "cid";
$tdatacertificate[".listFields"][] = "cfid";
$tdatacertificate[".listFields"][] = "fullName";
$tdatacertificate[".listFields"][] = "email";
$tdatacertificate[".listFields"][] = "institution";
$tdatacertificate[".listFields"][] = "country";
$tdatacertificate[".listFields"][] = "paperCount";
$tdatacertificate[".listFields"][] = "note";
$tdatacertificate[".listFields"][] = "opt";

$tdatacertificate[".hideMobileList"] = array();


$tdatacertificate[".viewFields"] = array();

$tdatacertificate[".addFields"] = array();

$tdatacertificate[".masterListFields"] = array();
$tdatacertificate[".masterListFields"][] = "parID";
$tdatacertificate[".masterListFields"][] = "opt";
$tdatacertificate[".masterListFields"][] = "userID";
$tdatacertificate[".masterListFields"][] = "item";
$tdatacertificate[".masterListFields"][] = "listenerRef";
$tdatacertificate[".masterListFields"][] = "paperCount";
$tdatacertificate[".masterListFields"][] = "cnameCode";
$tdatacertificate[".masterListFields"][] = "cid";
$tdatacertificate[".masterListFields"][] = "cfid";
$tdatacertificate[".masterListFields"][] = "fullName";
$tdatacertificate[".masterListFields"][] = "email";
$tdatacertificate[".masterListFields"][] = "institution";
$tdatacertificate[".masterListFields"][] = "country";
$tdatacertificate[".masterListFields"][] = "confirm";
$tdatacertificate[".masterListFields"][] = "note";

$tdatacertificate[".inlineAddFields"] = array();

$tdatacertificate[".editFields"] = array();

$tdatacertificate[".inlineEditFields"] = array();

$tdatacertificate[".exportFields"] = array();

$tdatacertificate[".importFields"] = array();
$tdatacertificate[".importFields"][] = "parID";
$tdatacertificate[".importFields"][] = "cid";
$tdatacertificate[".importFields"][] = "userID";
$tdatacertificate[".importFields"][] = "cfid";
$tdatacertificate[".importFields"][] = "email";
$tdatacertificate[".importFields"][] = "fullName";
$tdatacertificate[".importFields"][] = "institution";
$tdatacertificate[".importFields"][] = "country";
$tdatacertificate[".importFields"][] = "confirm";
$tdatacertificate[".importFields"][] = "note";
$tdatacertificate[".importFields"][] = "paperCount";
$tdatacertificate[".importFields"][] = "listenerRef";
$tdatacertificate[".importFields"][] = "item";
$tdatacertificate[".importFields"][] = "opt";
$tdatacertificate[".importFields"][] = "cnameCode";

$tdatacertificate[".printFields"] = array();

//	parID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "parID";
	$fdata["GoodName"] = "parID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","parID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["parID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["cid"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["userID"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","cfid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["cfid"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("certificate","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["email"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("certificate","fullName");
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




	$tdatacertificate["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("certificate","institution");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["institution"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("certificate","country");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["country"] = $fdata;
//	confirm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "confirm";
	$fdata["GoodName"] = "confirm";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","confirm");
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








	$tdatacertificate["confirm"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["note"] = $fdata;
//	paperCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "paperCount";
	$fdata["GoodName"] = "paperCount";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","paperCount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["paperCount"] = $fdata;
//	listenerRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "listenerRef";
	$fdata["GoodName"] = "listenerRef";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","listenerRef");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatacertificate["listenerRef"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("certificate","item");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confees.item";

	
	
			
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








	$tdatacertificate["item"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("certificate","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "parID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.parID";

	
	
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








	$tdatacertificate["opt"] = $fdata;
//	cnameCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cnameCode";
	$fdata["GoodName"] = "cnameCode";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("certificate","cnameCode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "cnameCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conference.cnameCode";

	
	
			
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








	$tdatacertificate["cnameCode"] = $fdata;


$tables_data["certificate"]=&$tdatacertificate;
$field_labels["certificate"] = &$fieldLabelscertificate;
$fieldToolTips["certificate"] = &$fieldToolTipscertificate;
$page_titles["certificate"] = &$pageTitlescertificate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["certificate"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["certificate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_certificate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  participate.parID AS opt,  conference.cnameCode";
$proto0["m_strFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  INNER JOIN conference ON participate.cid = conference.cid";
$proto0["m_strWhere"] = "participate.confirm ='Yes'";
$proto0["m_strOrderBy"] = "ORDER BY participate.parID DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "participate.confirm ='Yes'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "confirm",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='Yes'";
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
	"m_srcTableName" => "certificate"
));

$proto5["m_sql"] = "participate.parID";
$proto5["m_srcTableName"] = "certificate";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto7["m_sql"] = "participate.cid";
$proto7["m_srcTableName"] = "certificate";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto9["m_sql"] = "participate.userID";
$proto9["m_srcTableName"] = "certificate";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto11["m_sql"] = "participate.cfid";
$proto11["m_srcTableName"] = "certificate";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "certificate"
));

$proto13["m_sql"] = "`user`.email";
$proto13["m_srcTableName"] = "certificate";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "certificate"
));

$proto15["m_sql"] = "`user`.fullName";
$proto15["m_srcTableName"] = "certificate";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "certificate"
));

$proto17["m_sql"] = "`user`.institution";
$proto17["m_srcTableName"] = "certificate";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "certificate"
));

$proto19["m_sql"] = "`user`.country";
$proto19["m_srcTableName"] = "certificate";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "confirm",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto21["m_sql"] = "participate.confirm";
$proto21["m_srcTableName"] = "certificate";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto23["m_sql"] = "participate.note";
$proto23["m_srcTableName"] = "certificate";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "paperCount",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto25["m_sql"] = "participate.paperCount";
$proto25["m_srcTableName"] = "certificate";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "listenerRef",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto27["m_sql"] = "participate.listenerRef";
$proto27["m_srcTableName"] = "certificate";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "certificate"
));

$proto29["m_sql"] = "confees.item";
$proto29["m_srcTableName"] = "certificate";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "parID",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto31["m_sql"] = "participate.parID";
$proto31["m_srcTableName"] = "certificate";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "cnameCode",
	"m_strTable" => "conference",
	"m_srcTableName" => "certificate"
));

$proto33["m_sql"] = "conference.cnameCode";
$proto33["m_srcTableName"] = "certificate";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "participate";
$proto36["m_srcTableName"] = "certificate";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "parID";
$proto36["m_columns"][] = "cid";
$proto36["m_columns"][] = "userID";
$proto36["m_columns"][] = "cfid";
$proto36["m_columns"][] = "confirm";
$proto36["m_columns"][] = "paperCount";
$proto36["m_columns"][] = "listenerRef";
$proto36["m_columns"][] = "note";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "participate";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "certificate";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
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
$proto40["m_strName"] = "user";
$proto40["m_srcTableName"] = "certificate";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "userID";
$proto40["m_columns"][] = "email";
$proto40["m_columns"][] = "password";
$proto40["m_columns"][] = "fullName";
$proto40["m_columns"][] = "gender";
$proto40["m_columns"][] = "address";
$proto40["m_columns"][] = "postal";
$proto40["m_columns"][] = "city";
$proto40["m_columns"][] = "state";
$proto40["m_columns"][] = "country";
$proto40["m_columns"][] = "tel";
$proto40["m_columns"][] = "fax";
$proto40["m_columns"][] = "institution";
$proto40["m_columns"][] = "faculty";
$proto40["m_columns"][] = "department";
$proto40["m_columns"][] = "research";
$proto40["m_columns"][] = "student";
$proto40["m_columns"][] = "role";
$proto40["m_columns"][] = "note";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "INNER JOIN `user` ON participate.userID = `user`.userID";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "certificate";
$proto41=array();
$proto41["m_sql"] = "participate.userID = `user`.userID";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `user`.userID";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_INNERJOIN";
			$proto44=array();
$proto44["m_strName"] = "confees";
$proto44["m_srcTableName"] = "certificate";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "cfid";
$proto44["m_columns"][] = "cid";
$proto44["m_columns"][] = "item";
$proto44["m_columns"][] = "priceNormal";
$proto44["m_columns"][] = "datelineNormal";
$proto44["m_columns"][] = "priceEarly";
$proto44["m_columns"][] = "datelineEarly";
$proto44["m_columns"][] = "local";
$proto44["m_columns"][] = "currency";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "INNER JOIN confees ON participate.cfid = confees.cfid";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "certificate";
$proto45=array();
$proto45["m_sql"] = "participate.cfid = confees.cfid";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= confees.cfid";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto47=array();
$proto47["m_link"] = "SQLL_INNERJOIN";
			$proto48=array();
$proto48["m_strName"] = "conference";
$proto48["m_srcTableName"] = "certificate";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "cid";
$proto48["m_columns"][] = "cname";
$proto48["m_columns"][] = "cnameShort";
$proto48["m_columns"][] = "cnameCode";
$proto48["m_columns"][] = "sDate";
$proto48["m_columns"][] = "eDate";
$proto48["m_columns"][] = "cTime";
$proto48["m_columns"][] = "location";
$proto48["m_columns"][] = "address";
$proto48["m_columns"][] = "city";
$proto48["m_columns"][] = "country";
$proto48["m_columns"][] = "slogan";
$proto48["m_columns"][] = "about";
$proto48["m_columns"][] = "importantDate";
$proto48["m_columns"][] = "subTheme";
$proto48["m_columns"][] = "venueInfo";
$proto48["m_columns"][] = "venueAttract";
$proto48["m_columns"][] = "venueMap";
$proto48["m_columns"][] = "venuePhoto";
$proto48["m_columns"][] = "accomodation";
$proto48["m_columns"][] = "visa";
$proto48["m_columns"][] = "cstatus";
$proto48["m_columns"][] = "gallery";
$proto48["m_columns"][] = "proceeding";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "INNER JOIN conference ON participate.cid = conference.cid";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "certificate";
$proto49=array();
$proto49["m_sql"] = "participate.cid = conference.cid";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= conference.cid";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "parID",
	"m_strTable" => "participate",
	"m_srcTableName" => "certificate"
));

$proto51["m_column"]=$obj;
$proto51["m_bAsc"] = 0;
$proto51["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto51);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="certificate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_certificate = createSqlQuery_certificate();



															

$tdatacertificate[".sqlquery"] = $queryData_certificate;

$tableEvents["certificate"] = new eventsBase;
$tdatacertificate[".hasEvents"] = false;

?>