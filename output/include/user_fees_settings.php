<?php
require_once(getabspath("classes/cipherer.php"));
$tdatauser_fees = array();
	$tdatauser_fees[".NumberOfChars"] = 80; 
	$tdatauser_fees[".ShortName"] = "user_fees";
	$tdatauser_fees[".OwnerID"] = "";
	$tdatauser_fees[".OriginalTable"] = "user_fees";

//	field labels
$fieldLabelsuser_fees = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_fees["English"] = array();
	$fieldToolTipsuser_fees["English"] = array();
	$fieldLabelsuser_fees["English"]["bid"] = "Bid";
	$fieldToolTipsuser_fees["English"]["bid"] = "";
	$fieldLabelsuser_fees["English"]["cid"] = "Cid";
	$fieldToolTipsuser_fees["English"]["cid"] = "";
	$fieldLabelsuser_fees["English"]["userID"] = "User ID";
	$fieldToolTipsuser_fees["English"]["userID"] = "";
	$fieldLabelsuser_fees["English"]["cfid"] = "Cfid";
	$fieldToolTipsuser_fees["English"]["cfid"] = "";
	if (count($fieldToolTipsuser_fees["English"]))
		$tdatauser_fees[".isUseToolTips"] = true;
}
	
	
	$tdatauser_fees[".NCSearch"] = true;



$tdatauser_fees[".shortTableName"] = "user_fees";
$tdatauser_fees[".nSecOptions"] = 0;
$tdatauser_fees[".recsPerRowList"] = 1;
$tdatauser_fees[".mainTableOwnerID"] = "";
$tdatauser_fees[".moveNext"] = 1;
$tdatauser_fees[".nType"] = 0;

$tdatauser_fees[".strOriginalTableName"] = "user_fees";




$tdatauser_fees[".showAddInPopup"] = false;

$tdatauser_fees[".showEditInPopup"] = false;

$tdatauser_fees[".showViewInPopup"] = false;

$tdatauser_fees[".fieldsForRegister"] = array();

$tdatauser_fees[".listAjax"] = false;

	$tdatauser_fees[".audit"] = false;

	$tdatauser_fees[".locking"] = false;

$tdatauser_fees[".listIcons"] = true;
$tdatauser_fees[".inlineEdit"] = true;




$tdatauser_fees[".showSimpleSearchOptions"] = false;

$tdatauser_fees[".showSearchPanel"] = true;

if (isMobile())
	$tdatauser_fees[".isUseAjaxSuggest"] = false;
else 
	$tdatauser_fees[".isUseAjaxSuggest"] = true;

$tdatauser_fees[".rowHighlite"] = true;

// button handlers file names

$tdatauser_fees[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_fees[".isUseTimeForSearch"] = false;




$tdatauser_fees[".allSearchFields"] = array();

$tdatauser_fees[".allSearchFields"][] = "cfid";

$tdatauser_fees[".googleLikeFields"][] = "bid";
$tdatauser_fees[".googleLikeFields"][] = "cid";
$tdatauser_fees[".googleLikeFields"][] = "userID";
$tdatauser_fees[".googleLikeFields"][] = "cfid";


$tdatauser_fees[".advSearchFields"][] = "cfid";

$tdatauser_fees[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatauser_fees[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_fees[".strOrderBy"] = $tstrOrderBy;

$tdatauser_fees[".orderindexes"] = array();

$tdatauser_fees[".sqlHead"] = "SELECT bid,   cid,   userID,   cfid";
$tdatauser_fees[".sqlFrom"] = "FROM user_fees";
$tdatauser_fees[".sqlWhereExpr"] = "";
$tdatauser_fees[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_fees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_fees[".arrGroupsPerPage"] = $arrGPP;

$tableKeysuser_fees = array();
$tableKeysuser_fees[] = "bid";
$tdatauser_fees[".Keys"] = $tableKeysuser_fees;

$tdatauser_fees[".listFields"] = array();
$tdatauser_fees[".listFields"][] = "cid";
$tdatauser_fees[".listFields"][] = "cfid";

$tdatauser_fees[".viewFields"] = array();
$tdatauser_fees[".viewFields"][] = "cfid";

$tdatauser_fees[".addFields"] = array();
$tdatauser_fees[".addFields"][] = "cfid";

$tdatauser_fees[".inlineAddFields"] = array();
$tdatauser_fees[".inlineAddFields"][] = "cfid";

$tdatauser_fees[".editFields"] = array();
$tdatauser_fees[".editFields"][] = "cfid";

$tdatauser_fees[".inlineEditFields"] = array();
$tdatauser_fees[".inlineEditFields"][] = "cid";
$tdatauser_fees[".inlineEditFields"][] = "cfid";

$tdatauser_fees[".exportFields"] = array();
$tdatauser_fees[".exportFields"][] = "cfid";

$tdatauser_fees[".printFields"] = array();
$tdatauser_fees[".printFields"][] = "cfid";

//	bid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "bid";
	$fdata["GoodName"] = "bid";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Bid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "bid"; 
		$fdata["FullName"] = "bid";
	
		
		
				
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
	
		
		
	$tdatauser_fees["bid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Cid"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
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
	
		
		
	$tdatauser_fees["cid"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "User ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "userID"; 
		$fdata["FullName"] = "userID";
	
		
		
				
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
	
		
		
	$tdatauser_fees["userID"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Cfid"; 
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
	
		$fdata["strField"] = "cfid"; 
		$fdata["FullName"] = "cfid";
	
		
		
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
	
		
		
	$tdatauser_fees["cfid"] = $fdata;

	
$tables_data["user_fees"]=&$tdatauser_fees;
$field_labels["user_fees"] = &$fieldLabelsuser_fees;
$fieldToolTips["user_fees"] = &$fieldToolTipsuser_fees;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user_fees"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user_fees"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_fees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bid,   cid,   userID,   cfid";
$proto0["m_strFrom"] = "FROM user_fees";
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
	"m_strName" => "bid",
	"m_strTable" => "user_fees"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "user_fees"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "user_fees"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "user_fees"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "user_fees";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "bid";
$proto14["m_columns"][] = "cid";
$proto14["m_columns"][] = "userID";
$proto14["m_columns"][] = "cfid";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user_fees = createSqlQuery_user_fees();
				$tdatauser_fees[".sqlquery"] = $queryData_user_fees;

$tableEvents["user_fees"] = new eventsBase;
$tdatauser_fees[".hasEvents"] = false;

$cipherer = new RunnerCipherer("user_fees");

?>