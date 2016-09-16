<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapaper = array();
	$tdatapaper[".truncateText"] = true;
	$tdatapaper[".NumberOfChars"] = 200;
	$tdatapaper[".ShortName"] = "paper";
	$tdatapaper[".OwnerID"] = "userID";
	$tdatapaper[".OriginalTable"] = "paper";

//	field labels
$fieldLabelspaper = array();
$fieldToolTipspaper = array();
$pageTitlespaper = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspaper["English"] = array();
	$fieldToolTipspaper["English"] = array();
	$pageTitlespaper["English"] = array();
	$fieldLabelspaper["English"]["paperID"] = "ID";
	$fieldToolTipspaper["English"]["paperID"] = "";
	$fieldLabelspaper["English"]["userID"] = "User ";
	$fieldToolTipspaper["English"]["userID"] = "";
	$fieldLabelspaper["English"]["funded"] = "Funded";
	$fieldToolTipspaper["English"]["funded"] = "";
	$fieldLabelspaper["English"]["abstract"] = "AB";
	$fieldToolTipspaper["English"]["abstract"] = "";
	$fieldLabelspaper["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipspaper["English"]["paperStatus"] = "";
	$fieldLabelspaper["English"]["title"] = "Title";
	$fieldToolTipspaper["English"]["title"] = "";
	$fieldLabelspaper["English"]["cid"] = "Conference ";
	$fieldToolTipspaper["English"]["cid"] = "";
	$fieldLabelspaper["English"]["date_submit"] = "Date Submit";
	$fieldToolTipspaper["English"]["date_submit"] = "";
	$fieldLabelspaper["English"]["paymentStatus"] = "Payment Status";
	$fieldToolTipspaper["English"]["paymentStatus"] = "";
	$fieldLabelspaper["English"]["fullPaper"] = "FP";
	$fieldToolTipspaper["English"]["fullPaper"] = "";
	$fieldLabelspaper["English"]["fullName"] = "Full Name";
	$fieldToolTipspaper["English"]["fullName"] = "";
	$fieldLabelspaper["English"]["institution"] = "Institution";
	$fieldToolTipspaper["English"]["institution"] = "";
	$fieldLabelspaper["English"]["cfid"] = "Type";
	$fieldToolTipspaper["English"]["cfid"] = "";
	$fieldLabelspaper["English"]["multiAuthor"] = "Multi Author";
	$fieldToolTipspaper["English"]["multiAuthor"] = "";
	$fieldLabelspaper["English"]["opt"] = "File";
	$fieldToolTipspaper["English"]["opt"] = "";
	$fieldLabelspaper["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipspaper["English"]["paperRef"] = "";
	$fieldLabelspaper["English"]["invite"] = "Official Invite";
	$fieldToolTipspaper["English"]["invite"] = "";
	$fieldLabelspaper["English"]["PPT"] = "PPT";
	$fieldToolTipspaper["English"]["PPT"] = "";
	if (count($fieldToolTipspaper["English"]))
		$tdatapaper[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspaper[""] = array();
	$fieldToolTipspaper[""] = array();
	$pageTitlespaper[""] = array();
	if (count($fieldToolTipspaper[""]))
		$tdatapaper[".isUseToolTips"] = true;
}


	$tdatapaper[".NCSearch"] = true;



$tdatapaper[".shortTableName"] = "paper";
$tdatapaper[".nSecOptions"] = 1;
$tdatapaper[".recsPerRowList"] = 1;
$tdatapaper[".recsPerRowPrint"] = 1;
$tdatapaper[".mainTableOwnerID"] = "userID";
$tdatapaper[".moveNext"] = 1;
$tdatapaper[".entityType"] = 0;

$tdatapaper[".strOriginalTableName"] = "paper";




$tdatapaper[".showAddInPopup"] = false;

$tdatapaper[".showEditInPopup"] = false;

$tdatapaper[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaper[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaper[".fieldsForRegister"] = array();

$tdatapaper[".listAjax"] = false;

	$tdatapaper[".audit"] = false;

	$tdatapaper[".locking"] = false;


$tdatapaper[".add"] = true;
$tdatapaper[".afterAddAction"] = 1;
$tdatapaper[".closePopupAfterAdd"] = 1;
$tdatapaper[".afterAddActionDetTable"] = "";

$tdatapaper[".list"] = true;

$tdatapaper[".inlineEdit"] = true;
$tdatapaper[".view"] = true;


$tdatapaper[".exportTo"] = true;


$tdatapaper[".delete"] = true;

$tdatapaper[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapaper[".searchSaving"] = false;
//

$tdatapaper[".showSearchPanel"] = true;
		$tdatapaper[".flexibleSearch"] = true;

if (isMobile())
	$tdatapaper[".isUseAjaxSuggest"] = false;
else
	$tdatapaper[".isUseAjaxSuggest"] = true;

$tdatapaper[".rowHighlite"] = true;


								
$tdatapaper[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaper[".isUseTimeForSearch"] = false;





$tdatapaper[".allSearchFields"] = array();
$tdatapaper[".filterFields"] = array();
$tdatapaper[".requiredSearchFields"] = array();

$tdatapaper[".allSearchFields"][] = "paperRef";
	$tdatapaper[".allSearchFields"][] = "fullName";
	$tdatapaper[".allSearchFields"][] = "institution";
	$tdatapaper[".allSearchFields"][] = "funded";
	$tdatapaper[".allSearchFields"][] = "title";
	$tdatapaper[".allSearchFields"][] = "cfid";
	$tdatapaper[".allSearchFields"][] = "date_submit";
	$tdatapaper[".allSearchFields"][] = "paperStatus";
	$tdatapaper[".allSearchFields"][] = "paymentStatus";
	$tdatapaper[".allSearchFields"][] = "multiAuthor";
	

$tdatapaper[".googleLikeFields"] = array();
$tdatapaper[".googleLikeFields"][] = "invite";
$tdatapaper[".googleLikeFields"][] = "PPT";

$tdatapaper[".panelSearchFields"] = array();
$tdatapaper[".searchPanelOptions"] = array();
$tdatapaper[".panelSearchFields"][] = "paperRef";
	$tdatapaper[".panelSearchFields"][] = "fullName";
	$tdatapaper[".panelSearchFields"][] = "institution";
	$tdatapaper[".panelSearchFields"][] = "funded";
	$tdatapaper[".panelSearchFields"][] = "title";
	$tdatapaper[".panelSearchFields"][] = "cfid";
	$tdatapaper[".panelSearchFields"][] = "date_submit";
	$tdatapaper[".panelSearchFields"][] = "paperStatus";
	$tdatapaper[".panelSearchFields"][] = "paymentStatus";
	$tdatapaper[".panelSearchFields"][] = "multiAuthor";
	
$tdatapaper[".advSearchFields"] = array();
$tdatapaper[".advSearchFields"][] = "paperRef";
$tdatapaper[".advSearchFields"][] = "fullName";
$tdatapaper[".advSearchFields"][] = "institution";
$tdatapaper[".advSearchFields"][] = "funded";
$tdatapaper[".advSearchFields"][] = "title";
$tdatapaper[".advSearchFields"][] = "cfid";
$tdatapaper[".advSearchFields"][] = "date_submit";
$tdatapaper[".advSearchFields"][] = "paperStatus";
$tdatapaper[".advSearchFields"][] = "paymentStatus";
$tdatapaper[".advSearchFields"][] = "multiAuthor";

$tdatapaper[".tableType"] = "list";

$tdatapaper[".printerPageOrientation"] = 0;
$tdatapaper[".nPrinterPageScale"] = 100;

$tdatapaper[".nPrinterSplitRecords"] = 40;

$tdatapaper[".nPrinterPDFSplitRecords"] = 40;



$tdatapaper[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapaper[".pageSize"] = 20;

$tdatapaper[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY paper.paperID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaper[".strOrderBy"] = $tstrOrderBy;

$tdatapaper[".orderindexes"] = array();
$tdatapaper[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "paper.paperID");

$tdatapaper[".sqlHead"] = "SELECT paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  participate.cfid,  paper.multiAuthor,  paper.paperID AS opt,  paper.paperRef,  paper.invite,  paper.ppt AS PPT";
$tdatapaper[".sqlFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID  INNER JOIN participate ON paper.userID = participate.userID";
$tdatapaper[".sqlWhereExpr"] = "";
$tdatapaper[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaper[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaper[".arrGroupsPerPage"] = $arrGPP;


$tableKeyspaper = array();
$tableKeyspaper[] = "paperID";
$tdatapaper[".Keys"] = $tableKeyspaper;

$tdatapaper[".listFields"] = array();
$tdatapaper[".listFields"][] = "paperRef";
$tdatapaper[".listFields"][] = "cid";
$tdatapaper[".listFields"][] = "fullName";
$tdatapaper[".listFields"][] = "institution";
$tdatapaper[".listFields"][] = "title";
$tdatapaper[".listFields"][] = "cfid";
$tdatapaper[".listFields"][] = "date_submit";
$tdatapaper[".listFields"][] = "paperStatus";
$tdatapaper[".listFields"][] = "paymentStatus";
$tdatapaper[".listFields"][] = "abstract";
$tdatapaper[".listFields"][] = "fullPaper";
$tdatapaper[".listFields"][] = "PPT";

$tdatapaper[".hideMobileList"] = array();


$tdatapaper[".viewFields"] = array();
$tdatapaper[".viewFields"][] = "paperRef";
$tdatapaper[".viewFields"][] = "cid";
$tdatapaper[".viewFields"][] = "fullName";
$tdatapaper[".viewFields"][] = "institution";
$tdatapaper[".viewFields"][] = "funded";
$tdatapaper[".viewFields"][] = "title";
$tdatapaper[".viewFields"][] = "cfid";
$tdatapaper[".viewFields"][] = "date_submit";
$tdatapaper[".viewFields"][] = "paperStatus";
$tdatapaper[".viewFields"][] = "paymentStatus";
$tdatapaper[".viewFields"][] = "multiAuthor";
$tdatapaper[".viewFields"][] = "abstract";
$tdatapaper[".viewFields"][] = "fullPaper";
$tdatapaper[".viewFields"][] = "PPT";

$tdatapaper[".addFields"] = array();
$tdatapaper[".addFields"][] = "userID";
$tdatapaper[".addFields"][] = "paperRef";
$tdatapaper[".addFields"][] = "cid";
$tdatapaper[".addFields"][] = "funded";
$tdatapaper[".addFields"][] = "title";
$tdatapaper[".addFields"][] = "date_submit";
$tdatapaper[".addFields"][] = "paperStatus";
$tdatapaper[".addFields"][] = "paymentStatus";
$tdatapaper[".addFields"][] = "multiAuthor";
$tdatapaper[".addFields"][] = "abstract";
$tdatapaper[".addFields"][] = "fullPaper";
$tdatapaper[".addFields"][] = "PPT";

$tdatapaper[".masterListFields"] = array();
$tdatapaper[".masterListFields"][] = "PPT";
$tdatapaper[".masterListFields"][] = "userID";
$tdatapaper[".masterListFields"][] = "paperRef";
$tdatapaper[".masterListFields"][] = "paperID";
$tdatapaper[".masterListFields"][] = "cid";
$tdatapaper[".masterListFields"][] = "fullName";
$tdatapaper[".masterListFields"][] = "institution";
$tdatapaper[".masterListFields"][] = "funded";
$tdatapaper[".masterListFields"][] = "title";
$tdatapaper[".masterListFields"][] = "cfid";
$tdatapaper[".masterListFields"][] = "date_submit";
$tdatapaper[".masterListFields"][] = "paperStatus";
$tdatapaper[".masterListFields"][] = "multiAuthor";
$tdatapaper[".masterListFields"][] = "paymentStatus";
$tdatapaper[".masterListFields"][] = "abstract";
$tdatapaper[".masterListFields"][] = "fullPaper";
$tdatapaper[".masterListFields"][] = "invite";
$tdatapaper[".masterListFields"][] = "opt";

$tdatapaper[".inlineAddFields"] = array();

$tdatapaper[".editFields"] = array();

$tdatapaper[".inlineEditFields"] = array();
$tdatapaper[".inlineEditFields"][] = "paperRef";
$tdatapaper[".inlineEditFields"][] = "title";
$tdatapaper[".inlineEditFields"][] = "date_submit";
$tdatapaper[".inlineEditFields"][] = "paperStatus";
$tdatapaper[".inlineEditFields"][] = "paymentStatus";
$tdatapaper[".inlineEditFields"][] = "abstract";
$tdatapaper[".inlineEditFields"][] = "fullPaper";
$tdatapaper[".inlineEditFields"][] = "PPT";

$tdatapaper[".exportFields"] = array();
$tdatapaper[".exportFields"][] = "userID";
$tdatapaper[".exportFields"][] = "paperRef";
$tdatapaper[".exportFields"][] = "cid";
$tdatapaper[".exportFields"][] = "fullName";
$tdatapaper[".exportFields"][] = "institution";
$tdatapaper[".exportFields"][] = "funded";
$tdatapaper[".exportFields"][] = "title";
$tdatapaper[".exportFields"][] = "cfid";
$tdatapaper[".exportFields"][] = "date_submit";
$tdatapaper[".exportFields"][] = "paperStatus";
$tdatapaper[".exportFields"][] = "paymentStatus";
$tdatapaper[".exportFields"][] = "multiAuthor";
$tdatapaper[".exportFields"][] = "abstract";
$tdatapaper[".exportFields"][] = "fullPaper";

$tdatapaper[".importFields"] = array();
$tdatapaper[".importFields"][] = "paperID";
$tdatapaper[".importFields"][] = "userID";
$tdatapaper[".importFields"][] = "cid";
$tdatapaper[".importFields"][] = "funded";
$tdatapaper[".importFields"][] = "date_submit";
$tdatapaper[".importFields"][] = "title";
$tdatapaper[".importFields"][] = "abstract";
$tdatapaper[".importFields"][] = "paperStatus";
$tdatapaper[".importFields"][] = "fullPaper";
$tdatapaper[".importFields"][] = "paymentStatus";
$tdatapaper[".importFields"][] = "fullName";
$tdatapaper[".importFields"][] = "institution";
$tdatapaper[".importFields"][] = "cfid";
$tdatapaper[".importFields"][] = "multiAuthor";
$tdatapaper[".importFields"][] = "opt";
$tdatapaper[".importFields"][] = "paperRef";
$tdatapaper[".importFields"][] = "invite";
$tdatapaper[".importFields"][] = "PPT";

$tdatapaper[".printFields"] = array();

//	paperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "paperID";
	$fdata["GoodName"] = "paperID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","paperID");
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








	$tdatapaper["paperID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	
	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;
	
	
		
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








	$tdatapaper["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
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








	$tdatapaper["cid"] = $fdata;
//	funded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "funded";
	$fdata["GoodName"] = "funded";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","funded");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
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




	$tdatapaper["funded"] = $fdata;
//	date_submit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_submit";
	$fdata["GoodName"] = "date_submit";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","date_submit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

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




	$tdatapaper["date_submit"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

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
			$edata["nCols"] = 484;

	
	
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




	$tdatapaper["title"] = $fdata;
//	abstract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "abstract";
	$fdata["GoodName"] = "abstract";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","abstract");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "abstract";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.abstract";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "../webcon/abstract/";

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
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapaper["abstract"] = $fdata;
//	paperStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "paperStatus";
	$fdata["GoodName"] = "paperStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","paperStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

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




	$tdatapaper["paperStatus"] = $fdata;
//	fullPaper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fullPaper";
	$fdata["GoodName"] = "fullPaper";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","fullPaper");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullPaper";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.fullPaper";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "../webcon/abstract/";

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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapaper["fullPaper"] = $fdata;
//	paymentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "paymentStatus";
	$fdata["GoodName"] = "paymentStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","paymentStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatapaper["paymentStatus"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("paper","fullName");
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
		
		$edata["controlWidth"] = 491;

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




	$tdatapaper["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("paper","institution");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

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
		
		$edata["controlWidth"] = 488;

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




	$tdatapaper["institution"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("paper","cfid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

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




	$tdatapaper["cfid"] = $fdata;
//	multiAuthor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "multiAuthor";
	$fdata["GoodName"] = "multiAuthor";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","multiAuthor");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "multiAuthor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.multiAuthor";

	
	
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




	$tdatapaper["multiAuthor"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","opt");
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








	$tdatapaper["opt"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

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




	$tdatapaper["paperRef"] = $fdata;
//	invite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "invite";
	$fdata["GoodName"] = "invite";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","invite");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "invite";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.invite";

	
	
			
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








	$tdatapaper["invite"] = $fdata;
//	PPT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PPT";
	$fdata["GoodName"] = "PPT";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("paper","PPT");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "ppt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.ppt";

		$fdata["DeleteAssociatedFile"] = true;

	
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

	
	



	
	
	
	
							$edata["acceptFileTypes"] = "ppt";
						$edata["acceptFileTypes"] .= "|pptx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 3;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapaper["PPT"] = $fdata;


$tables_data["paper"]=&$tdatapaper;
$field_labels["paper"] = &$fieldLabelspaper;
$fieldToolTips["paper"] = &$fieldToolTipspaper;
$page_titles["paper"] = &$pageTitlespaper;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paper"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paper"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_paper()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  participate.cfid,  paper.multiAuthor,  paper.paperID AS opt,  paper.paperRef,  paper.invite,  paper.ppt AS PPT";
$proto0["m_strFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID  INNER JOIN participate ON paper.userID = participate.userID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY paper.paperID DESC";
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
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto5["m_sql"] = "paper.paperID";
$proto5["m_srcTableName"] = "paper";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto7["m_sql"] = "paper.userID";
$proto7["m_srcTableName"] = "paper";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto9["m_sql"] = "paper.cid";
$proto9["m_srcTableName"] = "paper";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "funded",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto11["m_sql"] = "paper.funded";
$proto11["m_srcTableName"] = "paper";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date_submit",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto13["m_sql"] = "paper.date_submit";
$proto13["m_srcTableName"] = "paper";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto15["m_sql"] = "paper.title";
$proto15["m_srcTableName"] = "paper";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "abstract",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto17["m_sql"] = "paper.abstract";
$proto17["m_srcTableName"] = "paper";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto19["m_sql"] = "paper.paperStatus";
$proto19["m_srcTableName"] = "paper";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "fullPaper",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto21["m_sql"] = "paper.fullPaper";
$proto21["m_srcTableName"] = "paper";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto23["m_sql"] = "paper.paymentStatus";
$proto23["m_srcTableName"] = "paper";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "paper"
));

$proto25["m_sql"] = "`user`.fullName";
$proto25["m_srcTableName"] = "paper";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "paper"
));

$proto27["m_sql"] = "`user`.institution";
$proto27["m_srcTableName"] = "paper";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "paper"
));

$proto29["m_sql"] = "participate.cfid";
$proto29["m_srcTableName"] = "paper";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "multiAuthor",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto31["m_sql"] = "paper.multiAuthor";
$proto31["m_srcTableName"] = "paper";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto33["m_sql"] = "paper.paperID";
$proto33["m_srcTableName"] = "paper";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto35["m_sql"] = "paper.paperRef";
$proto35["m_srcTableName"] = "paper";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "invite",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto37["m_sql"] = "paper.invite";
$proto37["m_srcTableName"] = "paper";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "ppt",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto39["m_sql"] = "paper.ppt";
$proto39["m_srcTableName"] = "paper";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "PPT";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "paper";
$proto42["m_srcTableName"] = "paper";
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
$proto41["m_srcTableName"] = "paper";
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
$proto46["m_srcTableName"] = "paper";
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
$proto45["m_srcTableName"] = "paper";
$proto47=array();
$proto47["m_sql"] = "paper.userID = `user`.userID";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
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
												$proto49=array();
$proto49["m_link"] = "SQLL_INNERJOIN";
			$proto50=array();
$proto50["m_strName"] = "participate";
$proto50["m_srcTableName"] = "paper";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "parID";
$proto50["m_columns"][] = "cid";
$proto50["m_columns"][] = "userID";
$proto50["m_columns"][] = "cfid";
$proto50["m_columns"][] = "confirm";
$proto50["m_columns"][] = "paperCount";
$proto50["m_columns"][] = "listenerRef";
$proto50["m_columns"][] = "note";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "INNER JOIN participate ON paper.userID = participate.userID";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "paper";
$proto51=array();
$proto51["m_sql"] = "paper.userID = participate.userID";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= participate.userID";
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
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "paper"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 0;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="paper";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paper = createSqlQuery_paper();



																		

$tdatapaper[".sqlquery"] = $queryData_paper;

include_once(getabspath("include/paper_events.php"));
$tableEvents["paper"] = new eventclass_paper;
$tdatapaper[".hasEvents"] = true;

?>