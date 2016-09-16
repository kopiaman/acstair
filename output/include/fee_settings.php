<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafee = array();
	$tdatafee[".NumberOfChars"] = 80; 
	$tdatafee[".ShortName"] = "fee";
	$tdatafee[".OwnerID"] = "";
	$tdatafee[".OriginalTable"] = "fee";

//	field labels
$fieldLabelsfee = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfee["English"] = array();
	$fieldToolTipsfee["English"] = array();
	$fieldLabelsfee["English"]["fid"] = "Fid";
	$fieldToolTipsfee["English"]["fid"] = "";
	$fieldLabelsfee["English"]["cid"] = "Cid";
	$fieldToolTipsfee["English"]["cid"] = "";
	$fieldLabelsfee["English"]["currency"] = "Currency";
	$fieldToolTipsfee["English"]["currency"] = "";
	$fieldLabelsfee["English"]["period"] = "Period";
	$fieldToolTipsfee["English"]["period"] = "";
	$fieldLabelsfee["English"]["fee"] = "Fee";
	$fieldToolTipsfee["English"]["fee"] = "";
	$fieldLabelsfee["English"]["quota"] = "Quota";
	$fieldToolTipsfee["English"]["quota"] = "";
	$fieldLabelsfee["English"]["cat"] = "Cat";
	$fieldToolTipsfee["English"]["cat"] = "";
	if (count($fieldToolTipsfee["English"]))
		$tdatafee[".isUseToolTips"] = true;
}
	
	
	$tdatafee[".NCSearch"] = true;



$tdatafee[".shortTableName"] = "fee";
$tdatafee[".nSecOptions"] = 0;
$tdatafee[".recsPerRowList"] = 1;
$tdatafee[".mainTableOwnerID"] = "";
$tdatafee[".moveNext"] = 1;
$tdatafee[".nType"] = 0;

$tdatafee[".strOriginalTableName"] = "fee";




$tdatafee[".showAddInPopup"] = false;

$tdatafee[".showEditInPopup"] = false;

$tdatafee[".showViewInPopup"] = false;

$tdatafee[".fieldsForRegister"] = array();
	
$tdatafee[".listAjax"] = false;

	$tdatafee[".audit"] = false;

	$tdatafee[".locking"] = false;

$tdatafee[".listIcons"] = true;
$tdatafee[".inlineEdit"] = true;
$tdatafee[".inlineAdd"] = true;



$tdatafee[".delete"] = true;

$tdatafee[".showSimpleSearchOptions"] = false;

$tdatafee[".showSearchPanel"] = true;

if (isMobile())
	$tdatafee[".isUseAjaxSuggest"] = false;
else 
	$tdatafee[".isUseAjaxSuggest"] = true;

$tdatafee[".rowHighlite"] = true;

// button handlers file names

$tdatafee[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafee[".isUseTimeForSearch"] = false;




$tdatafee[".allSearchFields"] = array();

$tdatafee[".allSearchFields"][] = "currency";
$tdatafee[".allSearchFields"][] = "period";
$tdatafee[".allSearchFields"][] = "fee";
$tdatafee[".allSearchFields"][] = "quota";
$tdatafee[".allSearchFields"][] = "cat";

$tdatafee[".googleLikeFields"][] = "fid";
$tdatafee[".googleLikeFields"][] = "cid";
$tdatafee[".googleLikeFields"][] = "currency";
$tdatafee[".googleLikeFields"][] = "period";
$tdatafee[".googleLikeFields"][] = "fee";
$tdatafee[".googleLikeFields"][] = "quota";
$tdatafee[".googleLikeFields"][] = "cat";


$tdatafee[".advSearchFields"][] = "currency";
$tdatafee[".advSearchFields"][] = "period";
$tdatafee[".advSearchFields"][] = "fee";
$tdatafee[".advSearchFields"][] = "quota";
$tdatafee[".advSearchFields"][] = "cat";

$tdatafee[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatafee[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafee[".strOrderBy"] = $tstrOrderBy;

$tdatafee[".orderindexes"] = array();

$tdatafee[".sqlHead"] = "SELECT fid,   cid,   currency,   period,   fee,   quota,   cat";
$tdatafee[".sqlFrom"] = "FROM fee";
$tdatafee[".sqlWhereExpr"] = "";
$tdatafee[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafee[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfee = array();
$tableKeysfee[] = "fid";
$tdatafee[".Keys"] = $tableKeysfee;

$tdatafee[".listFields"] = array();
$tdatafee[".listFields"][] = "currency";
$tdatafee[".listFields"][] = "period";
$tdatafee[".listFields"][] = "fee";
$tdatafee[".listFields"][] = "quota";
$tdatafee[".listFields"][] = "cat";

$tdatafee[".viewFields"] = array();

$tdatafee[".addFields"] = array();

$tdatafee[".inlineAddFields"] = array();
$tdatafee[".inlineAddFields"][] = "currency";
$tdatafee[".inlineAddFields"][] = "period";
$tdatafee[".inlineAddFields"][] = "fee";
$tdatafee[".inlineAddFields"][] = "quota";
$tdatafee[".inlineAddFields"][] = "cat";

$tdatafee[".editFields"] = array();

$tdatafee[".inlineEditFields"] = array();
$tdatafee[".inlineEditFields"][] = "currency";
$tdatafee[".inlineEditFields"][] = "period";
$tdatafee[".inlineEditFields"][] = "fee";
$tdatafee[".inlineEditFields"][] = "quota";
$tdatafee[".inlineEditFields"][] = "cat";

$tdatafee[".exportFields"] = array();

$tdatafee[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "fee";
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
	
		
		
	$tdatafee["fid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "fee";
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
	
		
		
	$tdatafee["cid"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "fee";
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
	
		
		
	$tdatafee["currency"] = $fdata;
//	period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "period";
	$fdata["GoodName"] = "period";
	$fdata["ownerTable"] = "fee";
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
	
		
		
	$tdatafee["period"] = $fdata;
//	fee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fee";
	$fdata["GoodName"] = "fee";
	$fdata["ownerTable"] = "fee";
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
	
		
		
	$tdatafee["fee"] = $fdata;
//	quota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "quota";
	$fdata["GoodName"] = "quota";
	$fdata["ownerTable"] = "fee";
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
	
		
		
	$tdatafee["quota"] = $fdata;
//	cat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat";
	$fdata["GoodName"] = "cat";
	$fdata["ownerTable"] = "fee";
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
	
		
		
	$tdatafee["cat"] = $fdata;

	
$tables_data["fee"]=&$tdatafee;
$field_labels["fee"] = &$fieldLabelsfee;
$fieldToolTips["fee"] = &$fieldToolTipsfee;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fee"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fee"] = array();

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
	$masterTablesData["fee"][$mIndex] = $masterParams;	
		$masterTablesData["fee"][$mIndex]["masterKeys"][]="cid";
		$masterTablesData["fee"][$mIndex]["detailKeys"][]="cid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fid,   cid,   currency,   period,   fee,   quota,   cat";
$proto0["m_strFrom"] = "FROM fee";
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
	"m_strTable" => "fee"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "fee"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "fee"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "period",
	"m_strTable" => "fee"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fee",
	"m_strTable" => "fee"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "quota",
	"m_strTable" => "fee"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cat",
	"m_strTable" => "fee"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "fee";
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
$queryData_fee = createSqlQuery_fee();
							$tdatafee[".sqlquery"] = $queryData_fee;

$tableEvents["fee"] = new eventsBase;
$tdatafee[".hasEvents"] = false;

$cipherer = new RunnerCipherer("fee");

?>