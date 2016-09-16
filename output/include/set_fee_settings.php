<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_fee = array();
	$tdataset_fee[".truncateText"] = true;
	$tdataset_fee[".NumberOfChars"] = 80;
	$tdataset_fee[".ShortName"] = "set_fee";
	$tdataset_fee[".OwnerID"] = "";
	$tdataset_fee[".OriginalTable"] = "set_fee";

//	field labels
$fieldLabelsset_fee = array();
$fieldToolTipsset_fee = array();
$pageTitlesset_fee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsset_fee["English"] = array();
	$fieldToolTipsset_fee["English"] = array();
	$pageTitlesset_fee["English"] = array();
	$fieldLabelsset_fee["English"]["fid"] = "Fid";
	$fieldToolTipsset_fee["English"]["fid"] = "";
	$fieldLabelsset_fee["English"]["item"] = "Item";
	$fieldToolTipsset_fee["English"]["item"] = "";
	$fieldLabelsset_fee["English"]["priceNormal"] = "Price Normal";
	$fieldToolTipsset_fee["English"]["priceNormal"] = "";
	$fieldLabelsset_fee["English"]["priceEarly"] = "Price Early";
	$fieldToolTipsset_fee["English"]["priceEarly"] = "";
	$fieldLabelsset_fee["English"]["local"] = "Local";
	$fieldToolTipsset_fee["English"]["local"] = "";
	$fieldLabelsset_fee["English"]["currency"] = "Currency";
	$fieldToolTipsset_fee["English"]["currency"] = "";
	if (count($fieldToolTipsset_fee["English"]))
		$tdataset_fee[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_fee[""] = array();
	$fieldToolTipsset_fee[""] = array();
	$pageTitlesset_fee[""] = array();
	if (count($fieldToolTipsset_fee[""]))
		$tdataset_fee[".isUseToolTips"] = true;
}


	$tdataset_fee[".NCSearch"] = true;



$tdataset_fee[".shortTableName"] = "set_fee";
$tdataset_fee[".nSecOptions"] = 0;
$tdataset_fee[".recsPerRowList"] = 1;
$tdataset_fee[".recsPerRowPrint"] = 1;
$tdataset_fee[".mainTableOwnerID"] = "";
$tdataset_fee[".moveNext"] = 1;
$tdataset_fee[".entityType"] = 0;

$tdataset_fee[".strOriginalTableName"] = "set_fee";




$tdataset_fee[".showAddInPopup"] = false;

$tdataset_fee[".showEditInPopup"] = false;

$tdataset_fee[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_fee[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_fee[".fieldsForRegister"] = array();

$tdataset_fee[".listAjax"] = false;

	$tdataset_fee[".audit"] = false;

	$tdataset_fee[".locking"] = false;



$tdataset_fee[".list"] = true;

$tdataset_fee[".inlineEdit"] = true;
$tdataset_fee[".inlineAdd"] = true;




$tdataset_fee[".delete"] = true;

$tdataset_fee[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_fee[".searchSaving"] = false;
//

$tdataset_fee[".showSearchPanel"] = true;
		$tdataset_fee[".flexibleSearch"] = true;

if (isMobile())
	$tdataset_fee[".isUseAjaxSuggest"] = false;
else
	$tdataset_fee[".isUseAjaxSuggest"] = true;

$tdataset_fee[".rowHighlite"] = true;


								
$tdataset_fee[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_fee[".isUseTimeForSearch"] = false;





$tdataset_fee[".allSearchFields"] = array();
$tdataset_fee[".filterFields"] = array();
$tdataset_fee[".requiredSearchFields"] = array();

$tdataset_fee[".allSearchFields"][] = "item";
	$tdataset_fee[".allSearchFields"][] = "currency";
	$tdataset_fee[".allSearchFields"][] = "priceEarly";
	$tdataset_fee[".allSearchFields"][] = "priceNormal";
	$tdataset_fee[".allSearchFields"][] = "local";
	

$tdataset_fee[".googleLikeFields"] = array();
$tdataset_fee[".googleLikeFields"][] = "fid";
$tdataset_fee[".googleLikeFields"][] = "item";
$tdataset_fee[".googleLikeFields"][] = "priceNormal";
$tdataset_fee[".googleLikeFields"][] = "priceEarly";
$tdataset_fee[".googleLikeFields"][] = "local";
$tdataset_fee[".googleLikeFields"][] = "currency";


$tdataset_fee[".advSearchFields"] = array();
$tdataset_fee[".advSearchFields"][] = "item";
$tdataset_fee[".advSearchFields"][] = "currency";
$tdataset_fee[".advSearchFields"][] = "priceEarly";
$tdataset_fee[".advSearchFields"][] = "priceNormal";
$tdataset_fee[".advSearchFields"][] = "local";

$tdataset_fee[".tableType"] = "list";

$tdataset_fee[".printerPageOrientation"] = 0;
$tdataset_fee[".nPrinterPageScale"] = 100;

$tdataset_fee[".nPrinterSplitRecords"] = 40;

$tdataset_fee[".nPrinterPDFSplitRecords"] = 40;



$tdataset_fee[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataset_fee[".pageSize"] = 20;

$tdataset_fee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_fee[".strOrderBy"] = $tstrOrderBy;

$tdataset_fee[".orderindexes"] = array();

$tdataset_fee[".sqlHead"] = "SELECT fid,  	item,  	priceNormal,  	priceEarly,  	`local`,  	currency";
$tdataset_fee[".sqlFrom"] = "FROM set_fee";
$tdataset_fee[".sqlWhereExpr"] = "";
$tdataset_fee[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_fee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_fee[".arrGroupsPerPage"] = $arrGPP;


$tableKeysset_fee = array();
$tableKeysset_fee[] = "fid";
$tdataset_fee[".Keys"] = $tableKeysset_fee;

$tdataset_fee[".listFields"] = array();
$tdataset_fee[".listFields"][] = "item";
$tdataset_fee[".listFields"][] = "currency";
$tdataset_fee[".listFields"][] = "priceEarly";
$tdataset_fee[".listFields"][] = "priceNormal";
$tdataset_fee[".listFields"][] = "local";

$tdataset_fee[".hideMobileList"] = array();


$tdataset_fee[".viewFields"] = array();

$tdataset_fee[".addFields"] = array();

$tdataset_fee[".masterListFields"] = array();
$tdataset_fee[".masterListFields"][] = "fid";
$tdataset_fee[".masterListFields"][] = "item";
$tdataset_fee[".masterListFields"][] = "currency";
$tdataset_fee[".masterListFields"][] = "priceEarly";
$tdataset_fee[".masterListFields"][] = "priceNormal";
$tdataset_fee[".masterListFields"][] = "local";

$tdataset_fee[".inlineAddFields"] = array();
$tdataset_fee[".inlineAddFields"][] = "item";
$tdataset_fee[".inlineAddFields"][] = "currency";
$tdataset_fee[".inlineAddFields"][] = "priceEarly";
$tdataset_fee[".inlineAddFields"][] = "priceNormal";
$tdataset_fee[".inlineAddFields"][] = "local";

$tdataset_fee[".editFields"] = array();

$tdataset_fee[".inlineEditFields"] = array();
$tdataset_fee[".inlineEditFields"][] = "item";
$tdataset_fee[".inlineEditFields"][] = "currency";
$tdataset_fee[".inlineEditFields"][] = "priceEarly";
$tdataset_fee[".inlineEditFields"][] = "priceNormal";
$tdataset_fee[".inlineEditFields"][] = "local";

$tdataset_fee[".exportFields"] = array();

$tdataset_fee[".importFields"] = array();
$tdataset_fee[".importFields"][] = "fid";
$tdataset_fee[".importFields"][] = "item";
$tdataset_fee[".importFields"][] = "priceNormal";
$tdataset_fee[".importFields"][] = "priceEarly";
$tdataset_fee[".importFields"][] = "local";
$tdataset_fee[".importFields"][] = "currency";

$tdataset_fee[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "set_fee";
	$fdata["Label"] = GetFieldLabel("set_fee","fid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fid";

	
	
			
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








	$tdataset_fee["fid"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "set_fee";
	$fdata["Label"] = GetFieldLabel("set_fee","item");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataset_fee["item"] = $fdata;
//	priceNormal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "priceNormal";
	$fdata["GoodName"] = "priceNormal";
	$fdata["ownerTable"] = "set_fee";
	$fdata["Label"] = GetFieldLabel("set_fee","priceNormal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdataset_fee["priceNormal"] = $fdata;
//	priceEarly
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "priceEarly";
	$fdata["GoodName"] = "priceEarly";
	$fdata["ownerTable"] = "set_fee";
	$fdata["Label"] = GetFieldLabel("set_fee","priceEarly");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataset_fee["priceEarly"] = $fdata;
//	local
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "local";
	$fdata["GoodName"] = "local";
	$fdata["ownerTable"] = "set_fee";
	$fdata["Label"] = GetFieldLabel("set_fee","local");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "local";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`local`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataset_fee["local"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "set_fee";
	$fdata["Label"] = GetFieldLabel("set_fee","currency");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "USD";
	$edata["LookupValues"][] = "MYR";

	
	
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




	$tdataset_fee["currency"] = $fdata;


$tables_data["set_fee"]=&$tdataset_fee;
$field_labels["set_fee"] = &$fieldLabelsset_fee;
$fieldToolTips["set_fee"] = &$fieldToolTipsset_fee;
$page_titles["set_fee"] = &$pageTitlesset_fee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_fee"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["set_fee"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_fee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fid,  	item,  	priceNormal,  	priceEarly,  	`local`,  	currency";
$proto0["m_strFrom"] = "FROM set_fee";
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
	"m_strName" => "fid",
	"m_strTable" => "set_fee",
	"m_srcTableName" => "set_fee"
));

$proto5["m_sql"] = "fid";
$proto5["m_srcTableName"] = "set_fee";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "set_fee",
	"m_srcTableName" => "set_fee"
));

$proto7["m_sql"] = "item";
$proto7["m_srcTableName"] = "set_fee";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "priceNormal",
	"m_strTable" => "set_fee",
	"m_srcTableName" => "set_fee"
));

$proto9["m_sql"] = "priceNormal";
$proto9["m_srcTableName"] = "set_fee";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "priceEarly",
	"m_strTable" => "set_fee",
	"m_srcTableName" => "set_fee"
));

$proto11["m_sql"] = "priceEarly";
$proto11["m_srcTableName"] = "set_fee";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "local",
	"m_strTable" => "set_fee",
	"m_srcTableName" => "set_fee"
));

$proto13["m_sql"] = "`local`";
$proto13["m_srcTableName"] = "set_fee";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "set_fee",
	"m_srcTableName" => "set_fee"
));

$proto15["m_sql"] = "currency";
$proto15["m_srcTableName"] = "set_fee";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "set_fee";
$proto18["m_srcTableName"] = "set_fee";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "fid";
$proto18["m_columns"][] = "item";
$proto18["m_columns"][] = "priceNormal";
$proto18["m_columns"][] = "priceEarly";
$proto18["m_columns"][] = "local";
$proto18["m_columns"][] = "currency";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "set_fee";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "set_fee";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="set_fee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_fee = createSqlQuery_set_fee();



						

$tdataset_fee[".sqlquery"] = $queryData_set_fee;

$tableEvents["set_fee"] = new eventsBase;
$tdataset_fee[".hasEvents"] = false;

?>