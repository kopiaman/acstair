<?php
require_once(getabspath("classes/cipherer.php"));
$tdatauser_apply = array();
	$tdatauser_apply[".NumberOfChars"] = 80; 
	$tdatauser_apply[".ShortName"] = "user_apply";
	$tdatauser_apply[".OwnerID"] = "";
	$tdatauser_apply[".OriginalTable"] = "user_fees";

//	field labels
$fieldLabelsuser_apply = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_apply["English"] = array();
	$fieldToolTipsuser_apply["English"] = array();
	$fieldLabelsuser_apply["English"]["bid"] = "Bid";
	$fieldToolTipsuser_apply["English"]["bid"] = "";
	$fieldLabelsuser_apply["English"]["cid"] = "Conference To Join";
	$fieldToolTipsuser_apply["English"]["cid"] = "";
	$fieldLabelsuser_apply["English"]["userID"] = "User ID";
	$fieldToolTipsuser_apply["English"]["userID"] = "";
	$fieldLabelsuser_apply["English"]["amount"] = "Amount";
	$fieldToolTipsuser_apply["English"]["amount"] = "";
	$fieldLabelsuser_apply["English"]["currency"] = "Currency";
	$fieldToolTipsuser_apply["English"]["currency"] = "";
	$fieldLabelsuser_apply["English"]["billDate"] = "Bill Date";
	$fieldToolTipsuser_apply["English"]["billDate"] = "";
	$fieldLabelsuser_apply["English"]["billStatus"] = "Bill Status";
	$fieldToolTipsuser_apply["English"]["billStatus"] = "";
	$fieldLabelsuser_apply["English"]["billCat"] = "Category";
	$fieldToolTipsuser_apply["English"]["billCat"] = "";
	if (count($fieldToolTipsuser_apply["English"]))
		$tdatauser_apply[".isUseToolTips"] = true;
}
	
	
	$tdatauser_apply[".NCSearch"] = true;



$tdatauser_apply[".shortTableName"] = "user_apply";
$tdatauser_apply[".nSecOptions"] = 0;
$tdatauser_apply[".recsPerRowList"] = 1;
$tdatauser_apply[".mainTableOwnerID"] = "";
$tdatauser_apply[".moveNext"] = 1;
$tdatauser_apply[".nType"] = 1;

$tdatauser_apply[".strOriginalTableName"] = "user_fees";




$tdatauser_apply[".showAddInPopup"] = false;

$tdatauser_apply[".showEditInPopup"] = false;

$tdatauser_apply[".showViewInPopup"] = false;

$tdatauser_apply[".fieldsForRegister"] = array();

$tdatauser_apply[".listAjax"] = false;

	$tdatauser_apply[".audit"] = false;

	$tdatauser_apply[".locking"] = false;

$tdatauser_apply[".listIcons"] = true;
$tdatauser_apply[".inlineAdd"] = true;




$tdatauser_apply[".showSimpleSearchOptions"] = false;

$tdatauser_apply[".showSearchPanel"] = true;

if (isMobile())
	$tdatauser_apply[".isUseAjaxSuggest"] = false;
else 
	$tdatauser_apply[".isUseAjaxSuggest"] = true;

$tdatauser_apply[".rowHighlite"] = true;

// button handlers file names

$tdatauser_apply[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_apply[".isUseTimeForSearch"] = false;




$tdatauser_apply[".allSearchFields"] = array();


$tdatauser_apply[".googleLikeFields"][] = "bid";
$tdatauser_apply[".googleLikeFields"][] = "cid";
$tdatauser_apply[".googleLikeFields"][] = "userID";
$tdatauser_apply[".googleLikeFields"][] = "billCat";
$tdatauser_apply[".googleLikeFields"][] = "amount";
$tdatauser_apply[".googleLikeFields"][] = "currency";
$tdatauser_apply[".googleLikeFields"][] = "billDate";
$tdatauser_apply[".googleLikeFields"][] = "billStatus";



$tdatauser_apply[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatauser_apply[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_apply[".strOrderBy"] = $tstrOrderBy;

$tdatauser_apply[".orderindexes"] = array();

$tdatauser_apply[".sqlHead"] = "SELECT bid,  cid,  userID,  billCat,  amount,  currency,  billDate,  billStatus";
$tdatauser_apply[".sqlFrom"] = "FROM user_fees";
$tdatauser_apply[".sqlWhereExpr"] = "";
$tdatauser_apply[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_apply[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_apply[".arrGroupsPerPage"] = $arrGPP;

$tableKeysuser_apply = array();
$tableKeysuser_apply[] = "bid";
$tdatauser_apply[".Keys"] = $tableKeysuser_apply;

$tdatauser_apply[".listFields"] = array();
$tdatauser_apply[".listFields"][] = "cid";
$tdatauser_apply[".listFields"][] = "billCat";

$tdatauser_apply[".viewFields"] = array();

$tdatauser_apply[".addFields"] = array();

$tdatauser_apply[".inlineAddFields"] = array();
$tdatauser_apply[".inlineAddFields"][] = "cid";
$tdatauser_apply[".inlineAddFields"][] = "billCat";

$tdatauser_apply[".editFields"] = array();

$tdatauser_apply[".inlineEditFields"] = array();

$tdatauser_apply[".exportFields"] = array();

$tdatauser_apply[".printFields"] = array();

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
	
		
		
	$tdatauser_apply["bid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Conference To Join"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
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
	
		
		
	$tdatauser_apply["cid"] = $fdata;
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
	
		
		
	$tdatauser_apply["userID"] = $fdata;
//	billCat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "billCat";
	$fdata["GoodName"] = "billCat";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "billCat"; 
		$fdata["FullName"] = "billCat";
	
		
		
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
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatauser_apply["billCat"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Amount"; 
	$fdata["FieldType"] = 14;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "amount"; 
		$fdata["FullName"] = "amount";
	
		
		
				
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
	
		
		
	$tdatauser_apply["amount"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Currency"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "currency"; 
		$fdata["FullName"] = "currency";
	
		
		
				
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
	
		
		
	$tdatauser_apply["currency"] = $fdata;
//	billDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "billDate";
	$fdata["GoodName"] = "billDate";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Bill Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "billDate"; 
		$fdata["FullName"] = "billDate";
	
		
		
				
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
	
		
		
	$tdatauser_apply["billDate"] = $fdata;
//	billStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "billStatus";
	$fdata["GoodName"] = "billStatus";
	$fdata["ownerTable"] = "user_fees";
	$fdata["Label"] = "Bill Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "billStatus"; 
		$fdata["FullName"] = "billStatus";
	
		
		
				
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
	
		
		
	$tdatauser_apply["billStatus"] = $fdata;

	
$tables_data["user_apply"]=&$tdatauser_apply;
$field_labels["user_apply"] = &$fieldLabelsuser_apply;
$fieldToolTips["user_apply"] = &$fieldToolTipsuser_apply;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user_apply"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user_apply"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_apply()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bid,  cid,  userID,  billCat,  amount,  currency,  billDate,  billStatus";
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
	"m_strName" => "billCat",
	"m_strTable" => "user_fees"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "user_fees"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "user_fees"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "billDate",
	"m_strTable" => "user_fees"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "billStatus",
	"m_strTable" => "user_fees"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "user_fees";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "bid";
$proto22["m_columns"][] = "cid";
$proto22["m_columns"][] = "userID";
$proto22["m_columns"][] = "billCat";
$proto22["m_columns"][] = "amount";
$proto22["m_columns"][] = "currency";
$proto22["m_columns"][] = "billDate";
$proto22["m_columns"][] = "billStatus";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user_apply = createSqlQuery_user_apply();
								$tdatauser_apply[".sqlquery"] = $queryData_user_apply;

$tableEvents["user_apply"] = new eventsBase;
$tdatauser_apply[".hasEvents"] = false;

$cipherer = new RunnerCipherer("user_apply");

?>