<?php
require_once(getabspath("classes/cipherer.php"));




$tdataconfees = array();
	$tdataconfees[".truncateText"] = true;
	$tdataconfees[".NumberOfChars"] = 80;
	$tdataconfees[".ShortName"] = "confees";
	$tdataconfees[".OwnerID"] = "";
	$tdataconfees[".OriginalTable"] = "confees";

//	field labels
$fieldLabelsconfees = array();
$fieldToolTipsconfees = array();
$pageTitlesconfees = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconfees["English"] = array();
	$fieldToolTipsconfees["English"] = array();
	$pageTitlesconfees["English"] = array();
	$fieldLabelsconfees["English"]["cfid"] = "Cfid";
	$fieldToolTipsconfees["English"]["cfid"] = "";
	$fieldLabelsconfees["English"]["item"] = "Item";
	$fieldToolTipsconfees["English"]["item"] = "";
	$fieldLabelsconfees["English"]["priceNormal"] = "Price Normal";
	$fieldToolTipsconfees["English"]["priceNormal"] = "";
	$fieldLabelsconfees["English"]["priceEarly"] = "Price Early";
	$fieldToolTipsconfees["English"]["priceEarly"] = "";
	$fieldLabelsconfees["English"]["datelineEarly"] = "Dateline Early";
	$fieldToolTipsconfees["English"]["datelineEarly"] = "";
	$fieldLabelsconfees["English"]["local"] = "Local";
	$fieldToolTipsconfees["English"]["local"] = "";
	$fieldLabelsconfees["English"]["currency"] = "Currency";
	$fieldToolTipsconfees["English"]["currency"] = "";
	$fieldLabelsconfees["English"]["cid"] = "Cid";
	$fieldToolTipsconfees["English"]["cid"] = "";
	$fieldLabelsconfees["English"]["datelineNormal"] = "Dateline Normal";
	$fieldToolTipsconfees["English"]["datelineNormal"] = "";
	if (count($fieldToolTipsconfees["English"]))
		$tdataconfees[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsconfees[""] = array();
	$fieldToolTipsconfees[""] = array();
	$pageTitlesconfees[""] = array();
	if (count($fieldToolTipsconfees[""]))
		$tdataconfees[".isUseToolTips"] = true;
}


	$tdataconfees[".NCSearch"] = true;



$tdataconfees[".shortTableName"] = "confees";
$tdataconfees[".nSecOptions"] = 0;
$tdataconfees[".recsPerRowList"] = 1;
$tdataconfees[".recsPerRowPrint"] = 1;
$tdataconfees[".mainTableOwnerID"] = "";
$tdataconfees[".moveNext"] = 1;
$tdataconfees[".entityType"] = 0;

$tdataconfees[".strOriginalTableName"] = "confees";




$tdataconfees[".showAddInPopup"] = false;

$tdataconfees[".showEditInPopup"] = false;

$tdataconfees[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconfees[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconfees[".fieldsForRegister"] = array();

$tdataconfees[".listAjax"] = false;

	$tdataconfees[".audit"] = false;

	$tdataconfees[".locking"] = false;



$tdataconfees[".list"] = true;

$tdataconfees[".inlineEdit"] = true;
$tdataconfees[".inlineAdd"] = true;




$tdataconfees[".delete"] = true;

$tdataconfees[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataconfees[".searchSaving"] = false;
//

$tdataconfees[".showSearchPanel"] = true;
		$tdataconfees[".flexibleSearch"] = true;

if (isMobile())
	$tdataconfees[".isUseAjaxSuggest"] = false;
else
	$tdataconfees[".isUseAjaxSuggest"] = true;

$tdataconfees[".rowHighlite"] = true;


																																
$tdataconfees[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconfees[".isUseTimeForSearch"] = false;





$tdataconfees[".allSearchFields"] = array();
$tdataconfees[".filterFields"] = array();
$tdataconfees[".requiredSearchFields"] = array();



$tdataconfees[".googleLikeFields"] = array();
$tdataconfees[".googleLikeFields"][] = "cfid";
$tdataconfees[".googleLikeFields"][] = "cid";
$tdataconfees[".googleLikeFields"][] = "item";
$tdataconfees[".googleLikeFields"][] = "priceNormal";
$tdataconfees[".googleLikeFields"][] = "datelineNormal";
$tdataconfees[".googleLikeFields"][] = "priceEarly";
$tdataconfees[".googleLikeFields"][] = "datelineEarly";
$tdataconfees[".googleLikeFields"][] = "local";
$tdataconfees[".googleLikeFields"][] = "currency";



$tdataconfees[".tableType"] = "list";

$tdataconfees[".printerPageOrientation"] = 0;
$tdataconfees[".nPrinterPageScale"] = 100;

$tdataconfees[".nPrinterSplitRecords"] = 40;

$tdataconfees[".nPrinterPDFSplitRecords"] = 40;



$tdataconfees[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataconfees[".pageSize"] = 20;

$tdataconfees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconfees[".strOrderBy"] = $tstrOrderBy;

$tdataconfees[".orderindexes"] = array();

$tdataconfees[".sqlHead"] = "SELECT cfid,  	cid,  	item,  	priceNormal,  	datelineNormal,  	priceEarly,  	datelineEarly,  	`local`,  	currency";
$tdataconfees[".sqlFrom"] = "FROM confees";
$tdataconfees[".sqlWhereExpr"] = "";
$tdataconfees[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconfees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconfees[".arrGroupsPerPage"] = $arrGPP;


$tableKeysconfees = array();
$tableKeysconfees[] = "cfid";
$tdataconfees[".Keys"] = $tableKeysconfees;

$tdataconfees[".listFields"] = array();
$tdataconfees[".listFields"][] = "item";
$tdataconfees[".listFields"][] = "priceEarly";
$tdataconfees[".listFields"][] = "datelineEarly";
$tdataconfees[".listFields"][] = "priceNormal";
$tdataconfees[".listFields"][] = "datelineNormal";
$tdataconfees[".listFields"][] = "local";
$tdataconfees[".listFields"][] = "currency";

$tdataconfees[".hideMobileList"] = array();


$tdataconfees[".viewFields"] = array();

$tdataconfees[".addFields"] = array();

$tdataconfees[".masterListFields"] = array();
$tdataconfees[".masterListFields"][] = "cid";
$tdataconfees[".masterListFields"][] = "cfid";
$tdataconfees[".masterListFields"][] = "item";
$tdataconfees[".masterListFields"][] = "priceEarly";
$tdataconfees[".masterListFields"][] = "datelineEarly";
$tdataconfees[".masterListFields"][] = "priceNormal";
$tdataconfees[".masterListFields"][] = "datelineNormal";
$tdataconfees[".masterListFields"][] = "local";
$tdataconfees[".masterListFields"][] = "currency";

$tdataconfees[".inlineAddFields"] = array();
$tdataconfees[".inlineAddFields"][] = "item";
$tdataconfees[".inlineAddFields"][] = "priceEarly";
$tdataconfees[".inlineAddFields"][] = "datelineEarly";
$tdataconfees[".inlineAddFields"][] = "priceNormal";
$tdataconfees[".inlineAddFields"][] = "datelineNormal";
$tdataconfees[".inlineAddFields"][] = "local";
$tdataconfees[".inlineAddFields"][] = "currency";

$tdataconfees[".editFields"] = array();

$tdataconfees[".inlineEditFields"] = array();
$tdataconfees[".inlineEditFields"][] = "item";
$tdataconfees[".inlineEditFields"][] = "priceEarly";
$tdataconfees[".inlineEditFields"][] = "datelineEarly";
$tdataconfees[".inlineEditFields"][] = "priceNormal";
$tdataconfees[".inlineEditFields"][] = "datelineNormal";
$tdataconfees[".inlineEditFields"][] = "local";
$tdataconfees[".inlineEditFields"][] = "currency";

$tdataconfees[".exportFields"] = array();

$tdataconfees[".importFields"] = array();
$tdataconfees[".importFields"][] = "cfid";
$tdataconfees[".importFields"][] = "cid";
$tdataconfees[".importFields"][] = "item";
$tdataconfees[".importFields"][] = "priceNormal";
$tdataconfees[".importFields"][] = "datelineNormal";
$tdataconfees[".importFields"][] = "priceEarly";
$tdataconfees[".importFields"][] = "datelineEarly";
$tdataconfees[".importFields"][] = "local";
$tdataconfees[".importFields"][] = "currency";

$tdataconfees[".printFields"] = array();

//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","cfid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "cfid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfid";

	
	
			
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








	$tdataconfees["cfid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
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








	$tdataconfees["cid"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","item");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item";

	
	
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

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconfees["item"] = $fdata;
//	priceNormal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "priceNormal";
	$fdata["GoodName"] = "priceNormal";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","priceNormal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "priceNormal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priceNormal";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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
		
		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconfees["priceNormal"] = $fdata;
//	datelineNormal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "datelineNormal";
	$fdata["GoodName"] = "datelineNormal";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","datelineNormal");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "datelineNormal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datelineNormal";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconfees["datelineNormal"] = $fdata;
//	priceEarly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "priceEarly";
	$fdata["GoodName"] = "priceEarly";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","priceEarly");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "priceEarly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priceEarly";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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
		
		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconfees["priceEarly"] = $fdata;
//	datelineEarly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "datelineEarly";
	$fdata["GoodName"] = "datelineEarly";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","datelineEarly");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "datelineEarly";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datelineEarly";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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








	$tdataconfees["datelineEarly"] = $fdata;
//	local
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "local";
	$fdata["GoodName"] = "local";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","local");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "local";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`local`";

	
	
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

	
	
	
	
	
	
		$edata["controlWidth"] = 30;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconfees["local"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("confees","currency");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "currency";

	
	
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

		$edata["controlWidth"] = 35;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconfees["currency"] = $fdata;


$tables_data["confees"]=&$tdataconfees;
$field_labels["confees"] = &$fieldLabelsconfees;
$fieldToolTips["confees"] = &$fieldToolTipsconfees;
$page_titles["confees"] = &$pageTitlesconfees;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["confees"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["confees"] = array();


	
				$strOriginalDetailsTable="conference";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="conference";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "conference";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["confees"][0] = $masterParams;
				$masterTablesData["confees"][0]["masterKeys"] = array();
	$masterTablesData["confees"][0]["masterKeys"][]="cid";
				$masterTablesData["confees"][0]["detailKeys"] = array();
	$masterTablesData["confees"][0]["detailKeys"][]="cid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_confees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cfid,  	cid,  	item,  	priceNormal,  	datelineNormal,  	priceEarly,  	datelineEarly,  	`local`,  	currency";
$proto0["m_strFrom"] = "FROM confees";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strName" => "cfid",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto5["m_sql"] = "cfid";
$proto5["m_srcTableName"] = "confees";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto7["m_sql"] = "cid";
$proto7["m_srcTableName"] = "confees";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto9["m_sql"] = "item";
$proto9["m_srcTableName"] = "confees";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "priceNormal",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto11["m_sql"] = "priceNormal";
$proto11["m_srcTableName"] = "confees";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "datelineNormal",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto13["m_sql"] = "datelineNormal";
$proto13["m_srcTableName"] = "confees";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "priceEarly",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto15["m_sql"] = "priceEarly";
$proto15["m_srcTableName"] = "confees";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "datelineEarly",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto17["m_sql"] = "datelineEarly";
$proto17["m_srcTableName"] = "confees";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "local",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto19["m_sql"] = "`local`";
$proto19["m_srcTableName"] = "confees";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "confees",
	"m_srcTableName" => "confees"
));

$proto21["m_sql"] = "currency";
$proto21["m_srcTableName"] = "confees";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "confees";
$proto24["m_srcTableName"] = "confees";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "cfid";
$proto24["m_columns"][] = "cid";
$proto24["m_columns"][] = "item";
$proto24["m_columns"][] = "priceNormal";
$proto24["m_columns"][] = "datelineNormal";
$proto24["m_columns"][] = "priceEarly";
$proto24["m_columns"][] = "datelineEarly";
$proto24["m_columns"][] = "local";
$proto24["m_columns"][] = "currency";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "confees";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "confees";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="confees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_confees = createSqlQuery_confees();



									

$tdataconfees[".sqlquery"] = $queryData_confees;

$tableEvents["confees"] = new eventsBase;
$tdataconfees[".hasEvents"] = false;

?>