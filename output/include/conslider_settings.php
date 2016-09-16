<?php
require_once(getabspath("classes/cipherer.php"));




$tdataconslider = array();
	$tdataconslider[".truncateText"] = true;
	$tdataconslider[".NumberOfChars"] = 80;
	$tdataconslider[".ShortName"] = "conslider";
	$tdataconslider[".OwnerID"] = "";
	$tdataconslider[".OriginalTable"] = "conslider";

//	field labels
$fieldLabelsconslider = array();
$fieldToolTipsconslider = array();
$pageTitlesconslider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconslider["English"] = array();
	$fieldToolTipsconslider["English"] = array();
	$pageTitlesconslider["English"] = array();
	$fieldLabelsconslider["English"]["sid"] = "Sid";
	$fieldToolTipsconslider["English"]["sid"] = "";
	$fieldLabelsconslider["English"]["cid"] = "Cid";
	$fieldToolTipsconslider["English"]["cid"] = "";
	$fieldLabelsconslider["English"]["photo"] = "Photo";
	$fieldToolTipsconslider["English"]["photo"] = "";
	$fieldLabelsconslider["English"]["description"] = "Description";
	$fieldToolTipsconslider["English"]["description"] = "";
	$fieldLabelsconslider["English"]["headline"] = "Headline";
	$fieldToolTipsconslider["English"]["headline"] = "";
	if (count($fieldToolTipsconslider["English"]))
		$tdataconslider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsconslider[""] = array();
	$fieldToolTipsconslider[""] = array();
	$pageTitlesconslider[""] = array();
	if (count($fieldToolTipsconslider[""]))
		$tdataconslider[".isUseToolTips"] = true;
}


	$tdataconslider[".NCSearch"] = true;



$tdataconslider[".shortTableName"] = "conslider";
$tdataconslider[".nSecOptions"] = 0;
$tdataconslider[".recsPerRowList"] = 1;
$tdataconslider[".recsPerRowPrint"] = 1;
$tdataconslider[".mainTableOwnerID"] = "";
$tdataconslider[".moveNext"] = 1;
$tdataconslider[".entityType"] = 0;

$tdataconslider[".strOriginalTableName"] = "conslider";




$tdataconslider[".showAddInPopup"] = false;

$tdataconslider[".showEditInPopup"] = false;

$tdataconslider[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataconslider[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataconslider[".fieldsForRegister"] = array();

$tdataconslider[".listAjax"] = false;

	$tdataconslider[".audit"] = false;

	$tdataconslider[".locking"] = false;



$tdataconslider[".list"] = true;

$tdataconslider[".inlineEdit"] = true;
$tdataconslider[".inlineAdd"] = true;




$tdataconslider[".delete"] = true;

$tdataconslider[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataconslider[".searchSaving"] = false;
//

$tdataconslider[".showSearchPanel"] = true;
		$tdataconslider[".flexibleSearch"] = true;

if (isMobile())
	$tdataconslider[".isUseAjaxSuggest"] = false;
else
	$tdataconslider[".isUseAjaxSuggest"] = true;

$tdataconslider[".rowHighlite"] = true;


																																
$tdataconslider[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconslider[".isUseTimeForSearch"] = false;





$tdataconslider[".allSearchFields"] = array();
$tdataconslider[".filterFields"] = array();
$tdataconslider[".requiredSearchFields"] = array();



$tdataconslider[".googleLikeFields"] = array();
$tdataconslider[".googleLikeFields"][] = "sid";
$tdataconslider[".googleLikeFields"][] = "cid";
$tdataconslider[".googleLikeFields"][] = "photo";
$tdataconslider[".googleLikeFields"][] = "description";
$tdataconslider[".googleLikeFields"][] = "headline";



$tdataconslider[".tableType"] = "list";

$tdataconslider[".printerPageOrientation"] = 0;
$tdataconslider[".nPrinterPageScale"] = 100;

$tdataconslider[".nPrinterSplitRecords"] = 40;

$tdataconslider[".nPrinterPDFSplitRecords"] = 40;



$tdataconslider[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataconslider[".pageSize"] = 20;

$tdataconslider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataconslider[".strOrderBy"] = $tstrOrderBy;

$tdataconslider[".orderindexes"] = array();

$tdataconslider[".sqlHead"] = "SELECT sid,  	cid,  	photo,  	description,  	headline";
$tdataconslider[".sqlFrom"] = "FROM conslider";
$tdataconslider[".sqlWhereExpr"] = "";
$tdataconslider[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconslider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconslider[".arrGroupsPerPage"] = $arrGPP;


$tableKeysconslider = array();
$tableKeysconslider[] = "sid";
$tdataconslider[".Keys"] = $tableKeysconslider;

$tdataconslider[".listFields"] = array();
$tdataconslider[".listFields"][] = "photo";
$tdataconslider[".listFields"][] = "headline";
$tdataconslider[".listFields"][] = "description";

$tdataconslider[".hideMobileList"] = array();


$tdataconslider[".viewFields"] = array();

$tdataconslider[".addFields"] = array();

$tdataconslider[".masterListFields"] = array();
$tdataconslider[".masterListFields"][] = "cid";
$tdataconslider[".masterListFields"][] = "sid";
$tdataconslider[".masterListFields"][] = "photo";
$tdataconslider[".masterListFields"][] = "headline";
$tdataconslider[".masterListFields"][] = "description";

$tdataconslider[".inlineAddFields"] = array();
$tdataconslider[".inlineAddFields"][] = "photo";
$tdataconslider[".inlineAddFields"][] = "headline";
$tdataconslider[".inlineAddFields"][] = "description";

$tdataconslider[".editFields"] = array();

$tdataconslider[".inlineEditFields"] = array();
$tdataconslider[".inlineEditFields"][] = "photo";
$tdataconslider[".inlineEditFields"][] = "headline";
$tdataconslider[".inlineEditFields"][] = "description";

$tdataconslider[".exportFields"] = array();

$tdataconslider[".importFields"] = array();
$tdataconslider[".importFields"][] = "sid";
$tdataconslider[".importFields"][] = "cid";
$tdataconslider[".importFields"][] = "photo";
$tdataconslider[".importFields"][] = "description";
$tdataconslider[".importFields"][] = "headline";

$tdataconslider[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "conslider";
	$fdata["Label"] = GetFieldLabel("conslider","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sid";

	
	
			
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








	$tdataconslider["sid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "conslider";
	$fdata["Label"] = GetFieldLabel("conslider","cid");
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








	$tdataconslider["cid"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "conslider";
	$fdata["Label"] = GetFieldLabel("conslider","photo");
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
				$edata["NewSize"] = 1200;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataconslider["photo"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "conslider";
	$fdata["Label"] = GetFieldLabel("conslider","description");
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








	$tdataconslider["description"] = $fdata;
//	headline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "headline";
	$fdata["GoodName"] = "headline";
	$fdata["ownerTable"] = "conslider";
	$fdata["Label"] = GetFieldLabel("conslider","headline");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "headline";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "headline";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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








	$tdataconslider["headline"] = $fdata;


$tables_data["conslider"]=&$tdataconslider;
$field_labels["conslider"] = &$fieldLabelsconslider;
$fieldToolTips["conslider"] = &$fieldToolTipsconslider;
$page_titles["conslider"] = &$pageTitlesconslider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["conslider"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["conslider"] = array();


	
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
					$masterTablesData["conslider"][0] = $masterParams;
				$masterTablesData["conslider"][0]["masterKeys"] = array();
	$masterTablesData["conslider"][0]["masterKeys"][]="cid";
				$masterTablesData["conslider"][0]["detailKeys"] = array();
	$masterTablesData["conslider"][0]["detailKeys"][]="cid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_conslider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  	cid,  	photo,  	description,  	headline";
$proto0["m_strFrom"] = "FROM conslider";
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
	"m_strName" => "sid",
	"m_strTable" => "conslider",
	"m_srcTableName" => "conslider"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "conslider";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "conslider",
	"m_srcTableName" => "conslider"
));

$proto7["m_sql"] = "cid";
$proto7["m_srcTableName"] = "conslider";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "conslider",
	"m_srcTableName" => "conslider"
));

$proto9["m_sql"] = "photo";
$proto9["m_srcTableName"] = "conslider";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "conslider",
	"m_srcTableName" => "conslider"
));

$proto11["m_sql"] = "description";
$proto11["m_srcTableName"] = "conslider";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "headline",
	"m_strTable" => "conslider",
	"m_srcTableName" => "conslider"
));

$proto13["m_sql"] = "headline";
$proto13["m_srcTableName"] = "conslider";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "conslider";
$proto16["m_srcTableName"] = "conslider";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "sid";
$proto16["m_columns"][] = "cid";
$proto16["m_columns"][] = "photo";
$proto16["m_columns"][] = "description";
$proto16["m_columns"][] = "headline";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "conslider";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "conslider";
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
$proto0["m_srcTableName"]="conslider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_conslider = createSqlQuery_conslider();



					

$tdataconslider[".sqlquery"] = $queryData_conslider;

$tableEvents["conslider"] = new eventsBase;
$tdataconslider[".hasEvents"] = false;

?>