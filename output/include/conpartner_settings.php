<?php
require_once(getabspath("classes/cipherer.php"));




$tdataconpartner = array();
	$tdataconpartner[".truncateText"] = true;
	$tdataconpartner[".NumberOfChars"] = 80;
	$tdataconpartner[".ShortName"] = "conpartner";
	$tdataconpartner[".OwnerID"] = "";
	$tdataconpartner[".OriginalTable"] = "conpartner";

//	field labels
$fieldLabelsconpartner = array();
$fieldToolTipsconpartner = array();
$pageTitlesconpartner = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconpartner["English"] = array();
	$fieldToolTipsconpartner["English"] = array();
	$pageTitlesconpartner["English"] = array();
	$fieldLabelsconpartner["English"]["partid"] = "Partid";
	$fieldToolTipsconpartner["English"]["partid"] = "";
	$fieldLabelsconpartner["English"]["cid"] = "Cid";
	$fieldToolTipsconpartner["English"]["cid"] = "";
	$fieldLabelsconpartner["English"]["photo"] = "Photo";
	$fieldToolTipsconpartner["English"]["photo"] = "";
	$fieldLabelsconpartner["English"]["names"] = "Name";
	$fieldToolTipsconpartner["English"]["names"] = "";
	if (count($fieldToolTipsconpartner["English"]))
		$tdataconpartner[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsconpartner[""] = array();
	$fieldToolTipsconpartner[""] = array();
	$pageTitlesconpartner[""] = array();
	if (count($fieldToolTipsconpartner[""]))
		$tdataconpartner[".isUseToolTips"] = true;
}


	$tdataconpartner[".NCSearch"] = true;



$tdataconpartner[".shortTableName"] = "conpartner";
$tdataconpartner[".nSecOptions"] = 0;
$tdataconpartner[".recsPerRowList"] = 1;
$tdataconpartner[".recsPerRowPrint"] = 1;
$tdataconpartner[".mainTableOwnerID"] = "";
$tdataconpartner[".moveNext"] = 1;
$tdataconpartner[".entityType"] = 0;

$tdataconpartner[".strOriginalTableName"] = "conpartner";




$tdataconpartner[".showAddInPopup"] = false;

$tdataconpartner[".showEditInPopup"] = false;

$tdataconpartner[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconpartner[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconpartner[".fieldsForRegister"] = array();

$tdataconpartner[".listAjax"] = false;

	$tdataconpartner[".audit"] = false;

	$tdataconpartner[".locking"] = false;



$tdataconpartner[".list"] = true;

$tdataconpartner[".inlineEdit"] = true;
$tdataconpartner[".inlineAdd"] = true;




$tdataconpartner[".delete"] = true;

$tdataconpartner[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataconpartner[".searchSaving"] = false;
//

$tdataconpartner[".showSearchPanel"] = true;
		$tdataconpartner[".flexibleSearch"] = true;

if (isMobile())
	$tdataconpartner[".isUseAjaxSuggest"] = false;
else
	$tdataconpartner[".isUseAjaxSuggest"] = true;

$tdataconpartner[".rowHighlite"] = true;


								
$tdataconpartner[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconpartner[".isUseTimeForSearch"] = false;





$tdataconpartner[".allSearchFields"] = array();
$tdataconpartner[".filterFields"] = array();
$tdataconpartner[".requiredSearchFields"] = array();

$tdataconpartner[".allSearchFields"][] = "photo";
	$tdataconpartner[".allSearchFields"][] = "names";
	

$tdataconpartner[".googleLikeFields"] = array();
$tdataconpartner[".googleLikeFields"][] = "partid";
$tdataconpartner[".googleLikeFields"][] = "cid";
$tdataconpartner[".googleLikeFields"][] = "photo";
$tdataconpartner[".googleLikeFields"][] = "names";


$tdataconpartner[".advSearchFields"] = array();
$tdataconpartner[".advSearchFields"][] = "photo";
$tdataconpartner[".advSearchFields"][] = "names";

$tdataconpartner[".tableType"] = "list";

$tdataconpartner[".printerPageOrientation"] = 0;
$tdataconpartner[".nPrinterPageScale"] = 100;

$tdataconpartner[".nPrinterSplitRecords"] = 40;

$tdataconpartner[".nPrinterPDFSplitRecords"] = 40;



$tdataconpartner[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataconpartner[".pageSize"] = 20;

$tdataconpartner[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconpartner[".strOrderBy"] = $tstrOrderBy;

$tdataconpartner[".orderindexes"] = array();

$tdataconpartner[".sqlHead"] = "SELECT partid,  	cid,  	photo,  	`names`";
$tdataconpartner[".sqlFrom"] = "FROM conpartner";
$tdataconpartner[".sqlWhereExpr"] = "";
$tdataconpartner[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconpartner[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconpartner[".arrGroupsPerPage"] = $arrGPP;


$tableKeysconpartner = array();
$tableKeysconpartner[] = "partid";
$tdataconpartner[".Keys"] = $tableKeysconpartner;

$tdataconpartner[".listFields"] = array();
$tdataconpartner[".listFields"][] = "photo";
$tdataconpartner[".listFields"][] = "names";

$tdataconpartner[".hideMobileList"] = array();


$tdataconpartner[".viewFields"] = array();

$tdataconpartner[".addFields"] = array();

$tdataconpartner[".masterListFields"] = array();
$tdataconpartner[".masterListFields"][] = "partid";
$tdataconpartner[".masterListFields"][] = "cid";
$tdataconpartner[".masterListFields"][] = "photo";
$tdataconpartner[".masterListFields"][] = "names";

$tdataconpartner[".inlineAddFields"] = array();
$tdataconpartner[".inlineAddFields"][] = "photo";
$tdataconpartner[".inlineAddFields"][] = "names";

$tdataconpartner[".editFields"] = array();

$tdataconpartner[".inlineEditFields"] = array();
$tdataconpartner[".inlineEditFields"][] = "photo";
$tdataconpartner[".inlineEditFields"][] = "names";

$tdataconpartner[".exportFields"] = array();

$tdataconpartner[".importFields"] = array();
$tdataconpartner[".importFields"][] = "partid";
$tdataconpartner[".importFields"][] = "cid";
$tdataconpartner[".importFields"][] = "photo";
$tdataconpartner[".importFields"][] = "names";

$tdataconpartner[".printFields"] = array();

//	partid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "partid";
	$fdata["GoodName"] = "partid";
	$fdata["ownerTable"] = "conpartner";
	$fdata["Label"] = GetFieldLabel("conpartner","partid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "partid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "partid";

	
	
			
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








	$tdataconpartner["partid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "conpartner";
	$fdata["Label"] = GetFieldLabel("conpartner","cid");
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








	$tdataconpartner["cid"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "conpartner";
	$fdata["Label"] = GetFieldLabel("conpartner","photo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "photo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "photo";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataconpartner["photo"] = $fdata;
//	names
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "names";
	$fdata["GoodName"] = "names";
	$fdata["ownerTable"] = "conpartner";
	$fdata["Label"] = GetFieldLabel("conpartner","names");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "names";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`names`";

	
	
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

		$edata["controlWidth"] = 200;

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




	$tdataconpartner["names"] = $fdata;


$tables_data["conpartner"]=&$tdataconpartner;
$field_labels["conpartner"] = &$fieldLabelsconpartner;
$fieldToolTips["conpartner"] = &$fieldToolTipsconpartner;
$page_titles["conpartner"] = &$pageTitlesconpartner;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["conpartner"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["conpartner"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_conpartner()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "partid,  	cid,  	photo,  	`names`";
$proto0["m_strFrom"] = "FROM conpartner";
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
	"m_strName" => "partid",
	"m_strTable" => "conpartner",
	"m_srcTableName" => "conpartner"
));

$proto5["m_sql"] = "partid";
$proto5["m_srcTableName"] = "conpartner";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "conpartner",
	"m_srcTableName" => "conpartner"
));

$proto7["m_sql"] = "cid";
$proto7["m_srcTableName"] = "conpartner";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "conpartner",
	"m_srcTableName" => "conpartner"
));

$proto9["m_sql"] = "photo";
$proto9["m_srcTableName"] = "conpartner";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "names",
	"m_strTable" => "conpartner",
	"m_srcTableName" => "conpartner"
));

$proto11["m_sql"] = "`names`";
$proto11["m_srcTableName"] = "conpartner";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "conpartner";
$proto14["m_srcTableName"] = "conpartner";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "partid";
$proto14["m_columns"][] = "cid";
$proto14["m_columns"][] = "photo";
$proto14["m_columns"][] = "names";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "conpartner";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "conpartner";
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
$proto0["m_srcTableName"]="conpartner";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conpartner = createSqlQuery_conpartner();



				

$tdataconpartner[".sqlquery"] = $queryData_conpartner;

$tableEvents["conpartner"] = new eventsBase;
$tdataconpartner[".hasEvents"] = false;

?>