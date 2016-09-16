<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawebslider = array();
	$tdatawebslider[".truncateText"] = true;
	$tdatawebslider[".NumberOfChars"] = 80;
	$tdatawebslider[".ShortName"] = "webslider";
	$tdatawebslider[".OwnerID"] = "";
	$tdatawebslider[".OriginalTable"] = "webslider";

//	field labels
$fieldLabelswebslider = array();
$fieldToolTipswebslider = array();
$pageTitleswebslider = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswebslider["English"] = array();
	$fieldToolTipswebslider["English"] = array();
	$pageTitleswebslider["English"] = array();
	$fieldLabelswebslider["English"]["sid"] = "Sid";
	$fieldToolTipswebslider["English"]["sid"] = "";
	$fieldLabelswebslider["English"]["photo"] = "Photo";
	$fieldToolTipswebslider["English"]["photo"] = "";
	$fieldLabelswebslider["English"]["description"] = "Description";
	$fieldToolTipswebslider["English"]["description"] = "";
	$fieldLabelswebslider["English"]["headline"] = "Headline";
	$fieldToolTipswebslider["English"]["headline"] = "";
	$fieldLabelswebslider["English"]["sstatus"] = "Status";
	$fieldToolTipswebslider["English"]["sstatus"] = "";
	if (count($fieldToolTipswebslider["English"]))
		$tdatawebslider[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswebslider[""] = array();
	$fieldToolTipswebslider[""] = array();
	$pageTitleswebslider[""] = array();
	if (count($fieldToolTipswebslider[""]))
		$tdatawebslider[".isUseToolTips"] = true;
}


	$tdatawebslider[".NCSearch"] = true;



$tdatawebslider[".shortTableName"] = "webslider";
$tdatawebslider[".nSecOptions"] = 0;
$tdatawebslider[".recsPerRowList"] = 3;
$tdatawebslider[".recsPerRowPrint"] = 1;
$tdatawebslider[".mainTableOwnerID"] = "";
$tdatawebslider[".moveNext"] = 1;
$tdatawebslider[".entityType"] = 0;

$tdatawebslider[".strOriginalTableName"] = "webslider";




$tdatawebslider[".showAddInPopup"] = false;

$tdatawebslider[".showEditInPopup"] = false;

$tdatawebslider[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawebslider[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawebslider[".fieldsForRegister"] = array();

$tdatawebslider[".listAjax"] = false;

	$tdatawebslider[".audit"] = false;

	$tdatawebslider[".locking"] = false;



$tdatawebslider[".list"] = true;

$tdatawebslider[".inlineEdit"] = true;
$tdatawebslider[".inlineAdd"] = true;




$tdatawebslider[".delete"] = true;

$tdatawebslider[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatawebslider[".searchSaving"] = false;
//

$tdatawebslider[".showSearchPanel"] = true;
		$tdatawebslider[".flexibleSearch"] = true;

if (isMobile())
	$tdatawebslider[".isUseAjaxSuggest"] = false;
else
	$tdatawebslider[".isUseAjaxSuggest"] = true;

$tdatawebslider[".rowHighlite"] = true;


								
$tdatawebslider[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawebslider[".isUseTimeForSearch"] = false;





$tdatawebslider[".allSearchFields"] = array();
$tdatawebslider[".filterFields"] = array();
$tdatawebslider[".requiredSearchFields"] = array();

$tdatawebslider[".allSearchFields"][] = "headline";
	$tdatawebslider[".allSearchFields"][] = "sstatus";
	$tdatawebslider[".allSearchFields"][] = "description";
	$tdatawebslider[".allSearchFields"][] = "photo";
	

$tdatawebslider[".googleLikeFields"] = array();
$tdatawebslider[".googleLikeFields"][] = "sid";
$tdatawebslider[".googleLikeFields"][] = "photo";
$tdatawebslider[".googleLikeFields"][] = "description";
$tdatawebslider[".googleLikeFields"][] = "headline";
$tdatawebslider[".googleLikeFields"][] = "sstatus";


$tdatawebslider[".advSearchFields"] = array();
$tdatawebslider[".advSearchFields"][] = "headline";
$tdatawebslider[".advSearchFields"][] = "sstatus";
$tdatawebslider[".advSearchFields"][] = "description";
$tdatawebslider[".advSearchFields"][] = "photo";

$tdatawebslider[".tableType"] = "list";

$tdatawebslider[".printerPageOrientation"] = 0;
$tdatawebslider[".nPrinterPageScale"] = 100;

$tdatawebslider[".nPrinterSplitRecords"] = 40;

$tdatawebslider[".nPrinterPDFSplitRecords"] = 40;



$tdatawebslider[".geocodingEnabled"] = false;





$tdatawebslider[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdatawebslider[".pageSize"] = 20;

$tdatawebslider[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawebslider[".strOrderBy"] = $tstrOrderBy;

$tdatawebslider[".orderindexes"] = array();

$tdatawebslider[".sqlHead"] = "SELECT sid,  	photo,  	description,  	headline,  	sstatus";
$tdatawebslider[".sqlFrom"] = "FROM webslider";
$tdatawebslider[".sqlWhereExpr"] = "";
$tdatawebslider[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawebslider[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawebslider[".arrGroupsPerPage"] = $arrGPP;


$tableKeyswebslider = array();
$tableKeyswebslider[] = "sid";
$tdatawebslider[".Keys"] = $tableKeyswebslider;

$tdatawebslider[".listFields"] = array();
$tdatawebslider[".listFields"][] = "headline";
$tdatawebslider[".listFields"][] = "sstatus";
$tdatawebslider[".listFields"][] = "description";
$tdatawebslider[".listFields"][] = "photo";

$tdatawebslider[".hideMobileList"] = array();


$tdatawebslider[".viewFields"] = array();

$tdatawebslider[".addFields"] = array();

$tdatawebslider[".masterListFields"] = array();
$tdatawebslider[".masterListFields"][] = "sid";
$tdatawebslider[".masterListFields"][] = "headline";
$tdatawebslider[".masterListFields"][] = "sstatus";
$tdatawebslider[".masterListFields"][] = "description";
$tdatawebslider[".masterListFields"][] = "photo";

$tdatawebslider[".inlineAddFields"] = array();
$tdatawebslider[".inlineAddFields"][] = "headline";
$tdatawebslider[".inlineAddFields"][] = "sstatus";
$tdatawebslider[".inlineAddFields"][] = "description";
$tdatawebslider[".inlineAddFields"][] = "photo";

$tdatawebslider[".editFields"] = array();

$tdatawebslider[".inlineEditFields"] = array();
$tdatawebslider[".inlineEditFields"][] = "headline";
$tdatawebslider[".inlineEditFields"][] = "sstatus";
$tdatawebslider[".inlineEditFields"][] = "description";
$tdatawebslider[".inlineEditFields"][] = "photo";

$tdatawebslider[".exportFields"] = array();

$tdatawebslider[".importFields"] = array();
$tdatawebslider[".importFields"][] = "sid";
$tdatawebslider[".importFields"][] = "photo";
$tdatawebslider[".importFields"][] = "description";
$tdatawebslider[".importFields"][] = "headline";
$tdatawebslider[".importFields"][] = "sstatus";

$tdatawebslider[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "webslider";
	$fdata["Label"] = GetFieldLabel("webslider","sid");
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








	$tdatawebslider["sid"] = $fdata;
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "webslider";
	$fdata["Label"] = GetFieldLabel("webslider","photo");
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

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatawebslider["photo"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "webslider";
	$fdata["Label"] = GetFieldLabel("webslider","description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	
	
	
				$edata["nRows"] = 200;
			$edata["nCols"] = 500;

	
	
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




	$tdatawebslider["description"] = $fdata;
//	headline
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "headline";
	$fdata["GoodName"] = "headline";
	$fdata["ownerTable"] = "webslider";
	$fdata["Label"] = GetFieldLabel("webslider","headline");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 400;

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




	$tdatawebslider["headline"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "webslider";
	$fdata["Label"] = GetFieldLabel("webslider","sstatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sstatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sstatus";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "On";
	$edata["LookupValues"][] = "Off";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatawebslider["sstatus"] = $fdata;


$tables_data["webslider"]=&$tdatawebslider;
$field_labels["webslider"] = &$fieldLabelswebslider;
$fieldToolTips["webslider"] = &$fieldToolTipswebslider;
$page_titles["webslider"] = &$pageTitleswebslider;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["webslider"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["webslider"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_webslider()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  	photo,  	description,  	headline,  	sstatus";
$proto0["m_strFrom"] = "FROM webslider";
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
	"m_strTable" => "webslider",
	"m_srcTableName" => "webslider"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "webslider";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "photo",
	"m_strTable" => "webslider",
	"m_srcTableName" => "webslider"
));

$proto7["m_sql"] = "photo";
$proto7["m_srcTableName"] = "webslider";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "webslider",
	"m_srcTableName" => "webslider"
));

$proto9["m_sql"] = "description";
$proto9["m_srcTableName"] = "webslider";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "headline",
	"m_strTable" => "webslider",
	"m_srcTableName" => "webslider"
));

$proto11["m_sql"] = "headline";
$proto11["m_srcTableName"] = "webslider";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "webslider",
	"m_srcTableName" => "webslider"
));

$proto13["m_sql"] = "sstatus";
$proto13["m_srcTableName"] = "webslider";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "webslider";
$proto16["m_srcTableName"] = "webslider";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "sid";
$proto16["m_columns"][] = "photo";
$proto16["m_columns"][] = "description";
$proto16["m_columns"][] = "headline";
$proto16["m_columns"][] = "sstatus";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "webslider";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "webslider";
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
$proto0["m_srcTableName"]="webslider";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_webslider = createSqlQuery_webslider();



					

$tdatawebslider[".sqlquery"] = $queryData_webslider;

$tableEvents["webslider"] = new eventsBase;
$tdatawebslider[".hasEvents"] = false;

?>