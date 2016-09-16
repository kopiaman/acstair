<?php
require_once(getabspath("classes/cipherer.php"));
$tdatawebsite = array();
	$tdatawebsite[".NumberOfChars"] = 80; 
	$tdatawebsite[".ShortName"] = "website";
	$tdatawebsite[".OwnerID"] = "";
	$tdatawebsite[".OriginalTable"] = "website";

//	field labels
$fieldLabelswebsite = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebsite["English"] = array();
	$fieldToolTipswebsite["English"] = array();
	$fieldLabelswebsite["English"]["wid"] = "Wid";
	$fieldToolTipswebsite["English"]["wid"] = "";
	$fieldLabelswebsite["English"]["cid"] = "Cid";
	$fieldToolTipswebsite["English"]["cid"] = "";
	$fieldLabelswebsite["English"]["slider"] = "Slider";
	$fieldToolTipswebsite["English"]["slider"] = "";
	if (count($fieldToolTipswebsite["English"]))
		$tdatawebsite[".isUseToolTips"] = true;
}
	
	
	$tdatawebsite[".NCSearch"] = true;



$tdatawebsite[".shortTableName"] = "website";
$tdatawebsite[".nSecOptions"] = 0;
$tdatawebsite[".recsPerRowList"] = 1;
$tdatawebsite[".mainTableOwnerID"] = "";
$tdatawebsite[".moveNext"] = 1;
$tdatawebsite[".nType"] = 0;

$tdatawebsite[".strOriginalTableName"] = "website";




$tdatawebsite[".showAddInPopup"] = false;

$tdatawebsite[".showEditInPopup"] = false;

$tdatawebsite[".showViewInPopup"] = false;

$tdatawebsite[".fieldsForRegister"] = array();

$tdatawebsite[".listAjax"] = false;

	$tdatawebsite[".audit"] = false;

	$tdatawebsite[".locking"] = false;

$tdatawebsite[".listIcons"] = true;
$tdatawebsite[".edit"] = true;
$tdatawebsite[".inlineEdit"] = true;
$tdatawebsite[".inlineAdd"] = true;
$tdatawebsite[".view"] = true;

$tdatawebsite[".exportTo"] = true;

$tdatawebsite[".printFriendly"] = true;

$tdatawebsite[".delete"] = true;

$tdatawebsite[".showSimpleSearchOptions"] = false;

$tdatawebsite[".showSearchPanel"] = true;

if (isMobile())
	$tdatawebsite[".isUseAjaxSuggest"] = false;
else 
	$tdatawebsite[".isUseAjaxSuggest"] = true;

$tdatawebsite[".rowHighlite"] = true;

// button handlers file names

$tdatawebsite[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebsite[".isUseTimeForSearch"] = false;




$tdatawebsite[".allSearchFields"] = array();

$tdatawebsite[".allSearchFields"][] = "wid";
$tdatawebsite[".allSearchFields"][] = "cid";
$tdatawebsite[".allSearchFields"][] = "slider";

$tdatawebsite[".googleLikeFields"][] = "wid";
$tdatawebsite[".googleLikeFields"][] = "cid";
$tdatawebsite[".googleLikeFields"][] = "slider";


$tdatawebsite[".advSearchFields"][] = "wid";
$tdatawebsite[".advSearchFields"][] = "cid";
$tdatawebsite[".advSearchFields"][] = "slider";

$tdatawebsite[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatawebsite[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawebsite[".strOrderBy"] = $tstrOrderBy;

$tdatawebsite[".orderindexes"] = array();

$tdatawebsite[".sqlHead"] = "SELECT wid,   cid,   slider";
$tdatawebsite[".sqlFrom"] = "FROM website";
$tdatawebsite[".sqlWhereExpr"] = "";
$tdatawebsite[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebsite[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebsite[".arrGroupsPerPage"] = $arrGPP;

$tableKeyswebsite = array();
$tableKeyswebsite[] = "wid";
$tdatawebsite[".Keys"] = $tableKeyswebsite;

$tdatawebsite[".listFields"] = array();
$tdatawebsite[".listFields"][] = "wid";
$tdatawebsite[".listFields"][] = "cid";
$tdatawebsite[".listFields"][] = "slider";

$tdatawebsite[".viewFields"] = array();
$tdatawebsite[".viewFields"][] = "wid";
$tdatawebsite[".viewFields"][] = "cid";
$tdatawebsite[".viewFields"][] = "slider";

$tdatawebsite[".addFields"] = array();
$tdatawebsite[".addFields"][] = "cid";
$tdatawebsite[".addFields"][] = "slider";

$tdatawebsite[".inlineAddFields"] = array();
$tdatawebsite[".inlineAddFields"][] = "cid";
$tdatawebsite[".inlineAddFields"][] = "slider";

$tdatawebsite[".editFields"] = array();
$tdatawebsite[".editFields"][] = "cid";
$tdatawebsite[".editFields"][] = "slider";

$tdatawebsite[".inlineEditFields"] = array();
$tdatawebsite[".inlineEditFields"][] = "cid";
$tdatawebsite[".inlineEditFields"][] = "slider";

$tdatawebsite[".exportFields"] = array();
$tdatawebsite[".exportFields"][] = "wid";
$tdatawebsite[".exportFields"][] = "cid";
$tdatawebsite[".exportFields"][] = "slider";

$tdatawebsite[".printFields"] = array();
$tdatawebsite[".printFields"][] = "wid";
$tdatawebsite[".printFields"][] = "cid";
$tdatawebsite[".printFields"][] = "slider";

//	wid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "wid";
	$fdata["GoodName"] = "wid";
	$fdata["ownerTable"] = "website";
	$fdata["Label"] = "Wid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "wid"; 
		$fdata["FullName"] = "wid";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatawebsite["wid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "website";
	$fdata["Label"] = "Cid"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cid"; 
		$fdata["FullName"] = "cid";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatawebsite["cid"] = $fdata;
//	slider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "slider";
	$fdata["GoodName"] = "slider";
	$fdata["ownerTable"] = "website";
	$fdata["Label"] = "Slider"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "slider"; 
		$fdata["FullName"] = "slider";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatawebsite["slider"] = $fdata;

	
$tables_data["website"]=&$tdatawebsite;
$field_labels["website"] = &$fieldLabelswebsite;
$fieldToolTips["website"] = &$fieldToolTipswebsite;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["website"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["website"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_website()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "wid,   cid,   slider";
$proto0["m_strFrom"] = "FROM website";
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
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
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
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "wid",
	"m_strTable" => "website"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "website"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "slider",
	"m_strTable" => "website"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "website";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "wid";
$proto12["m_columns"][] = "cid";
$proto12["m_columns"][] = "slider";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_website = createSqlQuery_website();
			$tdatawebsite[".sqlquery"] = $queryData_website;

$tableEvents["website"] = new eventsBase;
$tdatawebsite[".hasEvents"] = false;

$cipherer = new RunnerCipherer("website");

?>