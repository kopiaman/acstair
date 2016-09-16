<?php
require_once(getabspath("classes/cipherer.php"));




$tdataset_field = array();
	$tdataset_field[".truncateText"] = true;
	$tdataset_field[".NumberOfChars"] = 80;
	$tdataset_field[".ShortName"] = "set_field";
	$tdataset_field[".OwnerID"] = "";
	$tdataset_field[".OriginalTable"] = "set_field";

//	field labels
$fieldLabelsset_field = array();
$fieldToolTipsset_field = array();
$pageTitlesset_field = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsset_field["English"] = array();
	$fieldToolTipsset_field["English"] = array();
	$pageTitlesset_field["English"] = array();
	$fieldLabelsset_field["English"]["fid"] = "Fid";
	$fieldToolTipsset_field["English"]["fid"] = "";
	$fieldLabelsset_field["English"]["catID"] = "Cat ID";
	$fieldToolTipsset_field["English"]["catID"] = "";
	$fieldLabelsset_field["English"]["fname"] = "Field Name";
	$fieldToolTipsset_field["English"]["fname"] = "";
	$fieldLabelsset_field["English"]["fvalue"] = "Field Value";
	$fieldToolTipsset_field["English"]["fvalue"] = "";
	if (count($fieldToolTipsset_field["English"]))
		$tdataset_field[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsset_field[""] = array();
	$fieldToolTipsset_field[""] = array();
	$pageTitlesset_field[""] = array();
	if (count($fieldToolTipsset_field[""]))
		$tdataset_field[".isUseToolTips"] = true;
}


	$tdataset_field[".NCSearch"] = true;



$tdataset_field[".shortTableName"] = "set_field";
$tdataset_field[".nSecOptions"] = 0;
$tdataset_field[".recsPerRowList"] = 1;
$tdataset_field[".recsPerRowPrint"] = 1;
$tdataset_field[".mainTableOwnerID"] = "";
$tdataset_field[".moveNext"] = 1;
$tdataset_field[".entityType"] = 0;

$tdataset_field[".strOriginalTableName"] = "set_field";




$tdataset_field[".showAddInPopup"] = false;

$tdataset_field[".showEditInPopup"] = false;

$tdataset_field[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataset_field[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataset_field[".fieldsForRegister"] = array();

$tdataset_field[".listAjax"] = false;

	$tdataset_field[".audit"] = false;

	$tdataset_field[".locking"] = false;



$tdataset_field[".list"] = true;

$tdataset_field[".inlineEdit"] = true;
$tdataset_field[".inlineAdd"] = true;




$tdataset_field[".delete"] = true;

$tdataset_field[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataset_field[".searchSaving"] = false;
//

$tdataset_field[".showSearchPanel"] = true;
		$tdataset_field[".flexibleSearch"] = true;

if (isMobile())
	$tdataset_field[".isUseAjaxSuggest"] = false;
else
	$tdataset_field[".isUseAjaxSuggest"] = true;

$tdataset_field[".rowHighlite"] = true;


																																
$tdataset_field[".addPageEvents"] = false;

// use timepicker for search panel
$tdataset_field[".isUseTimeForSearch"] = false;





$tdataset_field[".allSearchFields"] = array();
$tdataset_field[".filterFields"] = array();
$tdataset_field[".requiredSearchFields"] = array();

$tdataset_field[".allSearchFields"][] = "fname";
	$tdataset_field[".allSearchFields"][] = "fvalue";
	

$tdataset_field[".googleLikeFields"] = array();
$tdataset_field[".googleLikeFields"][] = "fid";
$tdataset_field[".googleLikeFields"][] = "catID";
$tdataset_field[".googleLikeFields"][] = "fname";
$tdataset_field[".googleLikeFields"][] = "fvalue";


$tdataset_field[".advSearchFields"] = array();
$tdataset_field[".advSearchFields"][] = "fname";
$tdataset_field[".advSearchFields"][] = "fvalue";

$tdataset_field[".tableType"] = "list";

$tdataset_field[".printerPageOrientation"] = 0;
$tdataset_field[".nPrinterPageScale"] = 100;

$tdataset_field[".nPrinterSplitRecords"] = 40;

$tdataset_field[".nPrinterPDFSplitRecords"] = 40;



$tdataset_field[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataset_field[".pageSize"] = 20;

$tdataset_field[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataset_field[".strOrderBy"] = $tstrOrderBy;

$tdataset_field[".orderindexes"] = array();

$tdataset_field[".sqlHead"] = "SELECT fid,  	catID,  	fname,  	fvalue";
$tdataset_field[".sqlFrom"] = "FROM set_field";
$tdataset_field[".sqlWhereExpr"] = "";
$tdataset_field[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataset_field[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataset_field[".arrGroupsPerPage"] = $arrGPP;


$tableKeysset_field = array();
$tableKeysset_field[] = "fid";
$tdataset_field[".Keys"] = $tableKeysset_field;

$tdataset_field[".listFields"] = array();
$tdataset_field[".listFields"][] = "fname";
$tdataset_field[".listFields"][] = "fvalue";

$tdataset_field[".hideMobileList"] = array();


$tdataset_field[".viewFields"] = array();

$tdataset_field[".addFields"] = array();

$tdataset_field[".masterListFields"] = array();
$tdataset_field[".masterListFields"][] = "fid";
$tdataset_field[".masterListFields"][] = "catID";
$tdataset_field[".masterListFields"][] = "fname";
$tdataset_field[".masterListFields"][] = "fvalue";

$tdataset_field[".inlineAddFields"] = array();
$tdataset_field[".inlineAddFields"][] = "fname";
$tdataset_field[".inlineAddFields"][] = "fvalue";

$tdataset_field[".editFields"] = array();

$tdataset_field[".inlineEditFields"] = array();
$tdataset_field[".inlineEditFields"][] = "fname";
$tdataset_field[".inlineEditFields"][] = "fvalue";

$tdataset_field[".exportFields"] = array();

$tdataset_field[".importFields"] = array();
$tdataset_field[".importFields"][] = "fid";
$tdataset_field[".importFields"][] = "catID";
$tdataset_field[".importFields"][] = "fname";
$tdataset_field[".importFields"][] = "fvalue";

$tdataset_field[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_field","fid");
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








	$tdataset_field["fid"] = $fdata;
//	catID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "catID";
	$fdata["GoodName"] = "catID";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_field","catID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "catID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catID";

	
	
			
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








	$tdataset_field["catID"] = $fdata;
//	fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fname";
	$fdata["GoodName"] = "fname";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_field","fname");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "fname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fname";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 300;
			$edata["nCols"] = 700;

	
	
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




	$tdataset_field["fname"] = $fdata;
//	fvalue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fvalue";
	$fdata["GoodName"] = "fvalue";
	$fdata["ownerTable"] = "set_field";
	$fdata["Label"] = GetFieldLabel("set_field","fvalue");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "fvalue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fvalue";

	
	
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




	$tdataset_field["fvalue"] = $fdata;


$tables_data["set_field"]=&$tdataset_field;
$field_labels["set_field"] = &$fieldLabelsset_field;
$fieldToolTips["set_field"] = &$fieldToolTipsset_field;
$page_titles["set_field"] = &$pageTitlesset_field;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["set_field"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["set_field"] = array();


	
				$strOriginalDetailsTable="set_cat";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="set_cat";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "set_cat";
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
					$masterTablesData["set_field"][0] = $masterParams;
				$masterTablesData["set_field"][0]["masterKeys"] = array();
	$masterTablesData["set_field"][0]["masterKeys"][]="catID";
				$masterTablesData["set_field"][0]["detailKeys"] = array();
	$masterTablesData["set_field"][0]["detailKeys"][]="catID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_set_field()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fid,  	catID,  	fname,  	fvalue";
$proto0["m_strFrom"] = "FROM set_field";
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
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_field"
));

$proto5["m_sql"] = "fid";
$proto5["m_srcTableName"] = "set_field";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "catID",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_field"
));

$proto7["m_sql"] = "catID";
$proto7["m_srcTableName"] = "set_field";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fname",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_field"
));

$proto9["m_sql"] = "fname";
$proto9["m_srcTableName"] = "set_field";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fvalue",
	"m_strTable" => "set_field",
	"m_srcTableName" => "set_field"
));

$proto11["m_sql"] = "fvalue";
$proto11["m_srcTableName"] = "set_field";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "set_field";
$proto14["m_srcTableName"] = "set_field";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "fid";
$proto14["m_columns"][] = "catID";
$proto14["m_columns"][] = "fname";
$proto14["m_columns"][] = "fvalue";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "set_field";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "set_field";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="set_field";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_set_field = createSqlQuery_set_field();



				

$tdataset_field[".sqlquery"] = $queryData_set_field;

$tableEvents["set_field"] = new eventsBase;
$tdataset_field[".hasEvents"] = false;

?>