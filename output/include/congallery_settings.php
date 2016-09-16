<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacongallery = array();
	$tdatacongallery[".truncateText"] = true;
	$tdatacongallery[".NumberOfChars"] = 80;
	$tdatacongallery[".ShortName"] = "congallery";
	$tdatacongallery[".OwnerID"] = "";
	$tdatacongallery[".OriginalTable"] = "congallery";

//	field labels
$fieldLabelscongallery = array();
$fieldToolTipscongallery = array();
$pageTitlescongallery = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscongallery["English"] = array();
	$fieldToolTipscongallery["English"] = array();
	$pageTitlescongallery["English"] = array();
	$fieldLabelscongallery["English"]["pid"] = "Pid";
	$fieldToolTipscongallery["English"]["pid"] = "";
	$fieldLabelscongallery["English"]["cid"] = "Cid";
	$fieldToolTipscongallery["English"]["cid"] = "";
	$fieldLabelscongallery["English"]["photo"] = "Photo";
	$fieldToolTipscongallery["English"]["photo"] = "";
	$fieldLabelscongallery["English"]["description"] = "Description";
	$fieldToolTipscongallery["English"]["description"] = "";
	$fieldLabelscongallery["English"]["cat"] = "Category";
	$fieldToolTipscongallery["English"]["cat"] = "";
	if (count($fieldToolTipscongallery["English"]))
		$tdatacongallery[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscongallery[""] = array();
	$fieldToolTipscongallery[""] = array();
	$pageTitlescongallery[""] = array();
	if (count($fieldToolTipscongallery[""]))
		$tdatacongallery[".isUseToolTips"] = true;
}


	$tdatacongallery[".NCSearch"] = true;



$tdatacongallery[".shortTableName"] = "congallery";
$tdatacongallery[".nSecOptions"] = 0;
$tdatacongallery[".recsPerRowList"] = 3;
$tdatacongallery[".recsPerRowPrint"] = 1;
$tdatacongallery[".mainTableOwnerID"] = "";
$tdatacongallery[".moveNext"] = 1;
$tdatacongallery[".entityType"] = 0;

$tdatacongallery[".strOriginalTableName"] = "congallery";




$tdatacongallery[".showAddInPopup"] = false;

$tdatacongallery[".showEditInPopup"] = false;

$tdatacongallery[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacongallery[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacongallery[".fieldsForRegister"] = array();

$tdatacongallery[".listAjax"] = false;

	$tdatacongallery[".audit"] = false;

	$tdatacongallery[".locking"] = false;



$tdatacongallery[".list"] = true;

$tdatacongallery[".inlineEdit"] = true;
$tdatacongallery[".inlineAdd"] = true;




$tdatacongallery[".delete"] = true;

$tdatacongallery[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacongallery[".searchSaving"] = false;
//

$tdatacongallery[".showSearchPanel"] = true;
		$tdatacongallery[".flexibleSearch"] = true;

if (isMobile())
	$tdatacongallery[".isUseAjaxSuggest"] = false;
else
	$tdatacongallery[".isUseAjaxSuggest"] = true;

$tdatacongallery[".rowHighlite"] = true;


																																
$tdatacongallery[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacongallery[".isUseTimeForSearch"] = false;





$tdatacongallery[".allSearchFields"] = array();
$tdatacongallery[".filterFields"] = array();
$tdatacongallery[".requiredSearchFields"] = array();



$tdatacongallery[".googleLikeFields"] = array();
$tdatacongallery[".googleLikeFields"][] = "pid";
$tdatacongallery[".googleLikeFields"][] = "cid";
$tdatacongallery[".googleLikeFields"][] = "photo";
$tdatacongallery[".googleLikeFields"][] = "description";
$tdatacongallery[".googleLikeFields"][] = "cat";



$tdatacongallery[".tableType"] = "list";

$tdatacongallery[".printerPageOrientation"] = 0;
$tdatacongallery[".nPrinterPageScale"] = 100;

$tdatacongallery[".nPrinterSplitRecords"] = 40;

$tdatacongallery[".nPrinterPDFSplitRecords"] = 40;



$tdatacongallery[".geocodingEnabled"] = false;





$tdatacongallery[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdatacongallery[".pageSize"] = 20;

$tdatacongallery[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacongallery[".strOrderBy"] = $tstrOrderBy;

$tdatacongallery[".orderindexes"] = array();

$tdatacongallery[".sqlHead"] = "SELECT pid,  	cid,  	photo,  	description,  	cat";
$tdatacongallery[".sqlFrom"] = "FROM congallery";
$tdatacongallery[".sqlWhereExpr"] = "";
$tdatacongallery[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacongallery[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacongallery[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscongallery = array();
$tableKeyscongallery[] = "pid";
$tdatacongallery[".Keys"] = $tableKeyscongallery;

$tdatacongallery[".listFields"] = array();
$tdatacongallery[".listFields"][] = "photo";
$tdatacongallery[".listFields"][] = "description";
$tdatacongallery[".listFields"][] = "cat";

$tdatacongallery[".hideMobileList"] = array();


$tdatacongallery[".viewFields"] = array();

$tdatacongallery[".addFields"] = array();

$tdatacongallery[".masterListFields"] = array();
$tdatacongallery[".masterListFields"][] = "cid";
$tdatacongallery[".masterListFields"][] = "pid";
$tdatacongallery[".masterListFields"][] = "photo";
$tdatacongallery[".masterListFields"][] = "description";
$tdatacongallery[".masterListFields"][] = "cat";

$tdatacongallery[".inlineAddFields"] = array();
$tdatacongallery[".inlineAddFields"][] = "photo";
$tdatacongallery[".inlineAddFields"][] = "description";
$tdatacongallery[".inlineAddFields"][] = "cat";

$tdatacongallery[".editFields"] = array();

$tdatacongallery[".inlineEditFields"] = array();
$tdatacongallery[".inlineEditFields"][] = "photo";
$tdatacongallery[".inlineEditFields"][] = "description";
$tdatacongallery[".inlineEditFields"][] = "cat";

$tdatacongallery[".exportFields"] = array();

$tdatacongallery[".importFields"] = array();
$tdatacongallery[".importFields"][] = "pid";
$tdatacongallery[".importFields"][] = "cid";
$tdatacongallery[".importFields"][] = "photo";
$tdatacongallery[".importFields"][] = "description";
$tdatacongallery[".importFields"][] = "cat";

$tdatacongallery[".printFields"] = array();

//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "congallery";
	$fdata["Label"] = GetFieldLabel("congallery","pid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "pid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pid";

	
	
			
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








	$tdatacongallery["pid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "congallery";
	$fdata["Label"] = GetFieldLabel("congallery","cid");
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








	$tdatacongallery["cid"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "congallery";
	$fdata["Label"] = GetFieldLabel("congallery","photo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 200;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacongallery["photo"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "congallery";
	$fdata["Label"] = GetFieldLabel("congallery","description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacongallery["description"] = $fdata;
//	cat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat";
	$fdata["GoodName"] = "cat";
	$fdata["ownerTable"] = "congallery";
	$fdata["Label"] = GetFieldLabel("congallery","cat");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "cat";

		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fname";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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








	$tdatacongallery["cat"] = $fdata;


$tables_data["congallery"]=&$tdatacongallery;
$field_labels["congallery"] = &$fieldLabelscongallery;
$fieldToolTips["congallery"] = &$fieldToolTipscongallery;
$page_titles["congallery"] = &$pageTitlescongallery;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["congallery"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["congallery"] = array();


	
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
					$masterTablesData["congallery"][0] = $masterParams;
				$masterTablesData["congallery"][0]["masterKeys"] = array();
	$masterTablesData["congallery"][0]["masterKeys"][]="cid";
				$masterTablesData["congallery"][0]["detailKeys"] = array();
	$masterTablesData["congallery"][0]["detailKeys"][]="cid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_congallery()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pid,  	cid,  	photo,  	description,  	cat";
$proto0["m_strFrom"] = "FROM congallery";
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
	"m_strName" => "pid",
	"m_strTable" => "congallery",
	"m_srcTableName" => "congallery"
));

$proto5["m_sql"] = "pid";
$proto5["m_srcTableName"] = "congallery";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "congallery",
	"m_srcTableName" => "congallery"
));

$proto7["m_sql"] = "cid";
$proto7["m_srcTableName"] = "congallery";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "congallery",
	"m_srcTableName" => "congallery"
));

$proto9["m_sql"] = "photo";
$proto9["m_srcTableName"] = "congallery";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "congallery",
	"m_srcTableName" => "congallery"
));

$proto11["m_sql"] = "description";
$proto11["m_srcTableName"] = "congallery";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cat",
	"m_strTable" => "congallery",
	"m_srcTableName" => "congallery"
));

$proto13["m_sql"] = "cat";
$proto13["m_srcTableName"] = "congallery";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "congallery";
$proto16["m_srcTableName"] = "congallery";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "pid";
$proto16["m_columns"][] = "cid";
$proto16["m_columns"][] = "photo";
$proto16["m_columns"][] = "description";
$proto16["m_columns"][] = "cat";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "congallery";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "congallery";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="congallery";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_congallery = createSqlQuery_congallery();



					

$tdatacongallery[".sqlquery"] = $queryData_congallery;

$tableEvents["congallery"] = new eventsBase;
$tdatacongallery[".hasEvents"] = false;

?>