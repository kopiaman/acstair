<?php
require_once(getabspath("classes/cipherer.php"));
$tdataconfee = array();
	$tdataconfee[".NumberOfChars"] = 80; 
	$tdataconfee[".ShortName"] = "confee";
	$tdataconfee[".OwnerID"] = "";
	$tdataconfee[".OriginalTable"] = "confee";

//	field labels
$fieldLabelsconfee = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconfee["English"] = array();
	$fieldToolTipsconfee["English"] = array();
	$fieldLabelsconfee["English"]["fid"] = "Fid";
	$fieldToolTipsconfee["English"]["fid"] = "";
	$fieldLabelsconfee["English"]["cid"] = "Cid";
	$fieldToolTipsconfee["English"]["cid"] = "";
	$fieldLabelsconfee["English"]["currency"] = "Currency";
	$fieldToolTipsconfee["English"]["currency"] = "";
	$fieldLabelsconfee["English"]["period"] = "Period";
	$fieldToolTipsconfee["English"]["period"] = "";
	$fieldLabelsconfee["English"]["fee"] = "Fee";
	$fieldToolTipsconfee["English"]["fee"] = "";
	$fieldLabelsconfee["English"]["quota"] = "Quota";
	$fieldToolTipsconfee["English"]["quota"] = "";
	$fieldLabelsconfee["English"]["cat"] = "Cat";
	$fieldToolTipsconfee["English"]["cat"] = "";
	if (count($fieldToolTipsconfee["English"]))
		$tdataconfee[".isUseToolTips"] = true;
}
	
	
	$tdataconfee[".NCSearch"] = true;



$tdataconfee[".shortTableName"] = "confee";
$tdataconfee[".nSecOptions"] = 0;
$tdataconfee[".recsPerRowList"] = 1;
$tdataconfee[".mainTableOwnerID"] = "";
$tdataconfee[".moveNext"] = 1;
$tdataconfee[".nType"] = 0;

$tdataconfee[".strOriginalTableName"] = "confee";




$tdataconfee[".showAddInPopup"] = false;

$tdataconfee[".showEditInPopup"] = false;

$tdataconfee[".showViewInPopup"] = false;

$tdataconfee[".fieldsForRegister"] = array();

$tdataconfee[".listAjax"] = false;

	$tdataconfee[".audit"] = false;

	$tdataconfee[".locking"] = false;

$tdataconfee[".listIcons"] = true;
$tdataconfee[".inlineEdit"] = true;
$tdataconfee[".inlineAdd"] = true;



$tdataconfee[".delete"] = true;

$tdataconfee[".showSimpleSearchOptions"] = false;

$tdataconfee[".showSearchPanel"] = true;

if (isMobile())
	$tdataconfee[".isUseAjaxSuggest"] = false;
else 
	$tdataconfee[".isUseAjaxSuggest"] = true;

$tdataconfee[".rowHighlite"] = true;

// button handlers file names

$tdataconfee[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconfee[".isUseTimeForSearch"] = false;




$tdataconfee[".allSearchFields"] = array();

$tdataconfee[".allSearchFields"][] = "currency";
$tdataconfee[".allSearchFields"][] = "period";
$tdataconfee[".allSearchFields"][] = "fee";
$tdataconfee[".allSearchFields"][] = "quota";
$tdataconfee[".allSearchFields"][] = "cat";

$tdataconfee[".googleLikeFields"][] = "fid";
$tdataconfee[".googleLikeFields"][] = "cid";
$tdataconfee[".googleLikeFields"][] = "currency";
$tdataconfee[".googleLikeFields"][] = "period";
$tdataconfee[".googleLikeFields"][] = "fee";
$tdataconfee[".googleLikeFields"][] = "quota";
$tdataconfee[".googleLikeFields"][] = "cat";


$tdataconfee[".advSearchFields"][] = "currency";
$tdataconfee[".advSearchFields"][] = "period";
$tdataconfee[".advSearchFields"][] = "fee";
$tdataconfee[".advSearchFields"][] = "quota";
$tdataconfee[".advSearchFields"][] = "cat";

$tdataconfee[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataconfee[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconfee[".strOrderBy"] = $tstrOrderBy;

$tdataconfee[".orderindexes"] = array();

$tdataconfee[".sqlHead"] = "SELECT fid,   cid,   currency,   period,   fee,   quota,   cat";
$tdataconfee[".sqlFrom"] = "FROM confee";
$tdataconfee[".sqlWhereExpr"] = "";
$tdataconfee[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconfee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconfee[".arrGroupsPerPage"] = $arrGPP;

$tableKeysconfee = array();
$tableKeysconfee[] = "fid";
$tdataconfee[".Keys"] = $tableKeysconfee;

$tdataconfee[".listFields"] = array();
$tdataconfee[".listFields"][] = "currency";
$tdataconfee[".listFields"][] = "period";
$tdataconfee[".listFields"][] = "fee";
$tdataconfee[".listFields"][] = "quota";
$tdataconfee[".listFields"][] = "cat";

$tdataconfee[".viewFields"] = array();

$tdataconfee[".addFields"] = array();

$tdataconfee[".inlineAddFields"] = array();
$tdataconfee[".inlineAddFields"][] = "currency";
$tdataconfee[".inlineAddFields"][] = "period";
$tdataconfee[".inlineAddFields"][] = "fee";
$tdataconfee[".inlineAddFields"][] = "quota";
$tdataconfee[".inlineAddFields"][] = "cat";

$tdataconfee[".editFields"] = array();

$tdataconfee[".inlineEditFields"] = array();
$tdataconfee[".inlineEditFields"][] = "currency";
$tdataconfee[".inlineEditFields"][] = "period";
$tdataconfee[".inlineEditFields"][] = "fee";
$tdataconfee[".inlineEditFields"][] = "quota";
$tdataconfee[".inlineEditFields"][] = "cat";

$tdataconfee[".exportFields"] = array();

$tdataconfee[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "confee";
	$fdata["Label"] = "Fid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "fid"; 
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
	
		
		
	$tdataconfee["fid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "confee";
	$fdata["Label"] = "Cid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "cid"; 
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
	
		
		
	$tdataconfee["cid"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "confee";
	$fdata["Label"] = "Currency"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "currency"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataconfee["currency"] = $fdata;
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "confee";
	$fdata["Label"] = "Period"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "period"; 
		$fdata["FullName"] = "period";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataconfee["period"] = $fdata;
//	fee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fee";
	$fdata["GoodName"] = "fee";
	$fdata["ownerTable"] = "confee";
	$fdata["Label"] = "Fee"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fee"; 
		$fdata["FullName"] = "fee";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataconfee["fee"] = $fdata;
//	quota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "quota";
	$fdata["GoodName"] = "quota";
	$fdata["ownerTable"] = "confee";
	$fdata["Label"] = "Quota"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "quota"; 
		$fdata["FullName"] = "quota";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataconfee["quota"] = $fdata;
//	cat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat";
	$fdata["GoodName"] = "cat";
	$fdata["ownerTable"] = "confee";
	$fdata["Label"] = "Cat"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "cat"; 
		$fdata["FullName"] = "cat";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataconfee["cat"] = $fdata;

	
$tables_data["confee"]=&$tdataconfee;
$field_labels["confee"] = &$fieldLabelsconfee;
$fieldToolTips["confee"] = &$fieldToolTipsconfee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["confee"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["confee"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="conference";
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
	$masterTablesData["confee"][$mIndex] = $masterParams;	
		$masterTablesData["confee"][$mIndex]["masterKeys"][]="cid";
		$masterTablesData["confee"][$mIndex]["detailKeys"][]="cid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_confee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fid,   cid,   currency,   period,   fee,   quota,   cat";
$proto0["m_strFrom"] = "FROM confee";
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
	"m_strName" => "fid",
	"m_strTable" => "confee"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "confee"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "confee"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "period",
	"m_strTable" => "confee"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fee",
	"m_strTable" => "confee"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "quota",
	"m_strTable" => "confee"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cat",
	"m_strTable" => "confee"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "confee";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "fid";
$proto20["m_columns"][] = "cid";
$proto20["m_columns"][] = "currency";
$proto20["m_columns"][] = "period";
$proto20["m_columns"][] = "fee";
$proto20["m_columns"][] = "quota";
$proto20["m_columns"][] = "cat";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_confee = createSqlQuery_confee();
							$tdataconfee[".sqlquery"] = $queryData_confee;

$tableEvents["confee"] = new eventsBase;
$tdataconfee[".hasEvents"] = false;

$cipherer = new RunnerCipherer("confee");

?>