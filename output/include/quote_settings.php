<?php
require_once(getabspath("classes/cipherer.php"));




$tdataquote = array();
	$tdataquote[".truncateText"] = true;
	$tdataquote[".NumberOfChars"] = 80;
	$tdataquote[".ShortName"] = "quote";
	$tdataquote[".OwnerID"] = "";
	$tdataquote[".OriginalTable"] = "quote";

//	field labels
$fieldLabelsquote = array();
$fieldToolTipsquote = array();
$pageTitlesquote = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsquote["English"] = array();
	$fieldToolTipsquote["English"] = array();
	$pageTitlesquote["English"] = array();
	$fieldLabelsquote["English"]["qid"] = "Qid";
	$fieldToolTipsquote["English"]["qid"] = "";
	$fieldLabelsquote["English"]["person"] = "Person";
	$fieldToolTipsquote["English"]["person"] = "";
	$fieldLabelsquote["English"]["quote"] = "Quote";
	$fieldToolTipsquote["English"]["quote"] = "";
	if (count($fieldToolTipsquote["English"]))
		$tdataquote[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsquote[""] = array();
	$fieldToolTipsquote[""] = array();
	$pageTitlesquote[""] = array();
	if (count($fieldToolTipsquote[""]))
		$tdataquote[".isUseToolTips"] = true;
}


	$tdataquote[".NCSearch"] = true;



$tdataquote[".shortTableName"] = "quote";
$tdataquote[".nSecOptions"] = 0;
$tdataquote[".recsPerRowList"] = 1;
$tdataquote[".recsPerRowPrint"] = 1;
$tdataquote[".mainTableOwnerID"] = "";
$tdataquote[".moveNext"] = 1;
$tdataquote[".entityType"] = 0;

$tdataquote[".strOriginalTableName"] = "quote";




$tdataquote[".showAddInPopup"] = false;

$tdataquote[".showEditInPopup"] = false;

$tdataquote[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataquote[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataquote[".fieldsForRegister"] = array();

$tdataquote[".listAjax"] = false;

	$tdataquote[".audit"] = false;

	$tdataquote[".locking"] = false;



$tdataquote[".list"] = true;

$tdataquote[".inlineEdit"] = true;
$tdataquote[".inlineAdd"] = true;




$tdataquote[".delete"] = true;

$tdataquote[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataquote[".searchSaving"] = false;
//

$tdataquote[".showSearchPanel"] = true;
		$tdataquote[".flexibleSearch"] = true;

if (isMobile())
	$tdataquote[".isUseAjaxSuggest"] = false;
else
	$tdataquote[".isUseAjaxSuggest"] = true;

$tdataquote[".rowHighlite"] = true;


								
$tdataquote[".addPageEvents"] = false;

// use timepicker for search panel
$tdataquote[".isUseTimeForSearch"] = false;





$tdataquote[".allSearchFields"] = array();
$tdataquote[".filterFields"] = array();
$tdataquote[".requiredSearchFields"] = array();

$tdataquote[".allSearchFields"][] = "person";
	$tdataquote[".allSearchFields"][] = "quote";
	

$tdataquote[".googleLikeFields"] = array();
$tdataquote[".googleLikeFields"][] = "qid";
$tdataquote[".googleLikeFields"][] = "person";
$tdataquote[".googleLikeFields"][] = "quote";


$tdataquote[".advSearchFields"] = array();
$tdataquote[".advSearchFields"][] = "person";
$tdataquote[".advSearchFields"][] = "quote";

$tdataquote[".tableType"] = "list";

$tdataquote[".printerPageOrientation"] = 0;
$tdataquote[".nPrinterPageScale"] = 100;

$tdataquote[".nPrinterSplitRecords"] = 40;

$tdataquote[".nPrinterPDFSplitRecords"] = 40;



$tdataquote[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataquote[".pageSize"] = 20;

$tdataquote[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataquote[".strOrderBy"] = $tstrOrderBy;

$tdataquote[".orderindexes"] = array();

$tdataquote[".sqlHead"] = "SELECT qid,  	person,  	quote";
$tdataquote[".sqlFrom"] = "FROM quote";
$tdataquote[".sqlWhereExpr"] = "";
$tdataquote[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataquote[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataquote[".arrGroupsPerPage"] = $arrGPP;


$tableKeysquote = array();
$tableKeysquote[] = "qid";
$tdataquote[".Keys"] = $tableKeysquote;

$tdataquote[".listFields"] = array();
$tdataquote[".listFields"][] = "person";
$tdataquote[".listFields"][] = "quote";

$tdataquote[".hideMobileList"] = array();


$tdataquote[".viewFields"] = array();

$tdataquote[".addFields"] = array();

$tdataquote[".masterListFields"] = array();
$tdataquote[".masterListFields"][] = "qid";
$tdataquote[".masterListFields"][] = "person";
$tdataquote[".masterListFields"][] = "quote";

$tdataquote[".inlineAddFields"] = array();
$tdataquote[".inlineAddFields"][] = "person";
$tdataquote[".inlineAddFields"][] = "quote";

$tdataquote[".editFields"] = array();

$tdataquote[".inlineEditFields"] = array();
$tdataquote[".inlineEditFields"][] = "person";
$tdataquote[".inlineEditFields"][] = "quote";

$tdataquote[".exportFields"] = array();

$tdataquote[".importFields"] = array();
$tdataquote[".importFields"][] = "qid";
$tdataquote[".importFields"][] = "person";
$tdataquote[".importFields"][] = "quote";

$tdataquote[".printFields"] = array();

//	qid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "qid";
	$fdata["GoodName"] = "qid";
	$fdata["ownerTable"] = "quote";
	$fdata["Label"] = GetFieldLabel("quote","qid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "qid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qid";

	
	
			
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








	$tdataquote["qid"] = $fdata;
//	person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "person";
	$fdata["GoodName"] = "person";
	$fdata["ownerTable"] = "quote";
	$fdata["Label"] = GetFieldLabel("quote","person");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "person";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person";

	
	
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

		$edata["controlWidth"] = 150;

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




	$tdataquote["person"] = $fdata;
//	quote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "quote";
	$fdata["GoodName"] = "quote";
	$fdata["ownerTable"] = "quote";
	$fdata["Label"] = GetFieldLabel("quote","quote");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "quote";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quote";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 150;
			$edata["nCols"] = 400;

	
	
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




	$tdataquote["quote"] = $fdata;


$tables_data["quote"]=&$tdataquote;
$field_labels["quote"] = &$fieldLabelsquote;
$fieldToolTips["quote"] = &$fieldToolTipsquote;
$page_titles["quote"] = &$pageTitlesquote;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["quote"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["quote"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_quote()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "qid,  	person,  	quote";
$proto0["m_strFrom"] = "FROM quote";
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
	"m_strName" => "qid",
	"m_strTable" => "quote",
	"m_srcTableName" => "quote"
));

$proto5["m_sql"] = "qid";
$proto5["m_srcTableName"] = "quote";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "person",
	"m_strTable" => "quote",
	"m_srcTableName" => "quote"
));

$proto7["m_sql"] = "person";
$proto7["m_srcTableName"] = "quote";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "quote",
	"m_strTable" => "quote",
	"m_srcTableName" => "quote"
));

$proto9["m_sql"] = "quote";
$proto9["m_srcTableName"] = "quote";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "quote";
$proto12["m_srcTableName"] = "quote";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "qid";
$proto12["m_columns"][] = "person";
$proto12["m_columns"][] = "quote";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "quote";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "quote";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="quote";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_quote = createSqlQuery_quote();



			

$tdataquote[".sqlquery"] = $queryData_quote;

$tableEvents["quote"] = new eventsBase;
$tdataquote[".hasEvents"] = false;

?>