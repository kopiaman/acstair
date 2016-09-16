<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafollowup = array();
	$tdatafollowup[".truncateText"] = true;
	$tdatafollowup[".NumberOfChars"] = 80;
	$tdatafollowup[".ShortName"] = "followup";
	$tdatafollowup[".OwnerID"] = "";
	$tdatafollowup[".OriginalTable"] = "followup";

//	field labels
$fieldLabelsfollowup = array();
$fieldToolTipsfollowup = array();
$pageTitlesfollowup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollowup["English"] = array();
	$fieldToolTipsfollowup["English"] = array();
	$pageTitlesfollowup["English"] = array();
	$fieldLabelsfollowup["English"]["fid"] = "Fid";
	$fieldToolTipsfollowup["English"]["fid"] = "";
	$fieldLabelsfollowup["English"]["cid"] = "Conference";
	$fieldToolTipsfollowup["English"]["cid"] = "";
	$fieldLabelsfollowup["English"]["r_join"] = "Ask to Join";
	$fieldToolTipsfollowup["English"]["r_join"] = "";
	$fieldLabelsfollowup["English"]["r_abs"] = "Request Abs";
	$fieldToolTipsfollowup["English"]["r_abs"] = "";
	$fieldLabelsfollowup["English"]["r_pay_abs"] = "Request Pay Abstract";
	$fieldToolTipsfollowup["English"]["r_pay_abs"] = "";
	$fieldLabelsfollowup["English"]["r_pay_fp"] = "Request Pay (FP)";
	$fieldToolTipsfollowup["English"]["r_pay_fp"] = "";
	$fieldLabelsfollowup["English"]["r_fp"] = "Request Full Paper";
	$fieldToolTipsfollowup["English"]["r_fp"] = "";
	if (count($fieldToolTipsfollowup["English"]))
		$tdatafollowup[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfollowup[""] = array();
	$fieldToolTipsfollowup[""] = array();
	$pageTitlesfollowup[""] = array();
	if (count($fieldToolTipsfollowup[""]))
		$tdatafollowup[".isUseToolTips"] = true;
}


	$tdatafollowup[".NCSearch"] = true;



$tdatafollowup[".shortTableName"] = "followup";
$tdatafollowup[".nSecOptions"] = 0;
$tdatafollowup[".recsPerRowList"] = 1;
$tdatafollowup[".recsPerRowPrint"] = 1;
$tdatafollowup[".mainTableOwnerID"] = "";
$tdatafollowup[".moveNext"] = 1;
$tdatafollowup[".entityType"] = 0;

$tdatafollowup[".strOriginalTableName"] = "followup";




$tdatafollowup[".showAddInPopup"] = false;

$tdatafollowup[".showEditInPopup"] = false;

$tdatafollowup[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafollowup[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafollowup[".fieldsForRegister"] = array();

$tdatafollowup[".listAjax"] = false;

	$tdatafollowup[".audit"] = false;

	$tdatafollowup[".locking"] = false;



$tdatafollowup[".list"] = true;

$tdatafollowup[".inlineEdit"] = true;
$tdatafollowup[".inlineAdd"] = true;




$tdatafollowup[".delete"] = true;

$tdatafollowup[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafollowup[".searchSaving"] = false;
//

$tdatafollowup[".showSearchPanel"] = true;
		$tdatafollowup[".flexibleSearch"] = true;

if (isMobile())
	$tdatafollowup[".isUseAjaxSuggest"] = false;
else
	$tdatafollowup[".isUseAjaxSuggest"] = true;

$tdatafollowup[".rowHighlite"] = true;


																																
$tdatafollowup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollowup[".isUseTimeForSearch"] = false;





$tdatafollowup[".allSearchFields"] = array();
$tdatafollowup[".filterFields"] = array();
$tdatafollowup[".requiredSearchFields"] = array();



$tdatafollowup[".googleLikeFields"] = array();
$tdatafollowup[".googleLikeFields"][] = "fid";
$tdatafollowup[".googleLikeFields"][] = "cid";
$tdatafollowup[".googleLikeFields"][] = "r_join";
$tdatafollowup[".googleLikeFields"][] = "r_abs";
$tdatafollowup[".googleLikeFields"][] = "r_pay_abs";
$tdatafollowup[".googleLikeFields"][] = "r_pay_fp";
$tdatafollowup[".googleLikeFields"][] = "r_fp";



$tdatafollowup[".tableType"] = "list";

$tdatafollowup[".printerPageOrientation"] = 0;
$tdatafollowup[".nPrinterPageScale"] = 100;

$tdatafollowup[".nPrinterSplitRecords"] = 40;

$tdatafollowup[".nPrinterPDFSplitRecords"] = 40;



$tdatafollowup[".geocodingEnabled"] = false;





$tdatafollowup[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdatafollowup[".pageSize"] = 20;

$tdatafollowup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafollowup[".strOrderBy"] = $tstrOrderBy;

$tdatafollowup[".orderindexes"] = array();

$tdatafollowup[".sqlHead"] = "SELECT fid,  	cid,  	r_join,  	r_abs,  	r_pay_abs,  	r_pay_fp,  	r_fp";
$tdatafollowup[".sqlFrom"] = "FROM followup";
$tdatafollowup[".sqlWhereExpr"] = "";
$tdatafollowup[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollowup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollowup[".arrGroupsPerPage"] = $arrGPP;


$tableKeysfollowup = array();
$tableKeysfollowup[] = "fid";
$tdatafollowup[".Keys"] = $tableKeysfollowup;

$tdatafollowup[".listFields"] = array();
$tdatafollowup[".listFields"][] = "r_join";
$tdatafollowup[".listFields"][] = "r_abs";
$tdatafollowup[".listFields"][] = "r_pay_abs";
$tdatafollowup[".listFields"][] = "r_pay_fp";
$tdatafollowup[".listFields"][] = "r_fp";

$tdatafollowup[".hideMobileList"] = array();


$tdatafollowup[".viewFields"] = array();

$tdatafollowup[".addFields"] = array();

$tdatafollowup[".masterListFields"] = array();
$tdatafollowup[".masterListFields"][] = "fid";
$tdatafollowup[".masterListFields"][] = "cid";
$tdatafollowup[".masterListFields"][] = "r_join";
$tdatafollowup[".masterListFields"][] = "r_abs";
$tdatafollowup[".masterListFields"][] = "r_pay_abs";
$tdatafollowup[".masterListFields"][] = "r_pay_fp";
$tdatafollowup[".masterListFields"][] = "r_fp";

$tdatafollowup[".inlineAddFields"] = array();
$tdatafollowup[".inlineAddFields"][] = "r_join";
$tdatafollowup[".inlineAddFields"][] = "r_abs";
$tdatafollowup[".inlineAddFields"][] = "r_pay_abs";
$tdatafollowup[".inlineAddFields"][] = "r_pay_fp";
$tdatafollowup[".inlineAddFields"][] = "r_fp";

$tdatafollowup[".editFields"] = array();

$tdatafollowup[".inlineEditFields"] = array();
$tdatafollowup[".inlineEditFields"][] = "r_join";
$tdatafollowup[".inlineEditFields"][] = "r_abs";
$tdatafollowup[".inlineEditFields"][] = "r_pay_abs";
$tdatafollowup[".inlineEditFields"][] = "r_pay_fp";
$tdatafollowup[".inlineEditFields"][] = "r_fp";

$tdatafollowup[".exportFields"] = array();

$tdatafollowup[".importFields"] = array();
$tdatafollowup[".importFields"][] = "fid";
$tdatafollowup[".importFields"][] = "cid";
$tdatafollowup[".importFields"][] = "r_join";
$tdatafollowup[".importFields"][] = "r_abs";
$tdatafollowup[".importFields"][] = "r_pay_abs";
$tdatafollowup[".importFields"][] = "r_pay_fp";
$tdatafollowup[".importFields"][] = "r_fp";

$tdatafollowup[".printFields"] = array();

//	fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fid";
	$fdata["GoodName"] = "fid";
	$fdata["ownerTable"] = "followup";
	$fdata["Label"] = GetFieldLabel("followup","fid");
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








	$tdatafollowup["fid"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "followup";
	$fdata["Label"] = GetFieldLabel("followup","cid");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "conference";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "cid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cnameShort";

	
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








	$tdatafollowup["cid"] = $fdata;
//	r_join
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "r_join";
	$fdata["GoodName"] = "r_join";
	$fdata["ownerTable"] = "followup";
	$fdata["Label"] = GetFieldLabel("followup","r_join");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "r_join";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r_join";

	
	
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








	$tdatafollowup["r_join"] = $fdata;
//	r_abs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "r_abs";
	$fdata["GoodName"] = "r_abs";
	$fdata["ownerTable"] = "followup";
	$fdata["Label"] = GetFieldLabel("followup","r_abs");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "r_abs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r_abs";

	
	
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








	$tdatafollowup["r_abs"] = $fdata;
//	r_pay_abs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "r_pay_abs";
	$fdata["GoodName"] = "r_pay_abs";
	$fdata["ownerTable"] = "followup";
	$fdata["Label"] = GetFieldLabel("followup","r_pay_abs");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "r_pay_abs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r_pay_abs";

	
	
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








	$tdatafollowup["r_pay_abs"] = $fdata;
//	r_pay_fp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "r_pay_fp";
	$fdata["GoodName"] = "r_pay_fp";
	$fdata["ownerTable"] = "followup";
	$fdata["Label"] = GetFieldLabel("followup","r_pay_fp");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "r_pay_fp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r_pay_fp";

	
	
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








	$tdatafollowup["r_pay_fp"] = $fdata;
//	r_fp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "r_fp";
	$fdata["GoodName"] = "r_fp";
	$fdata["ownerTable"] = "followup";
	$fdata["Label"] = GetFieldLabel("followup","r_fp");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
	
	
	
		$fdata["strField"] = "r_fp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r_fp";

	
	
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








	$tdatafollowup["r_fp"] = $fdata;


$tables_data["followup"]=&$tdatafollowup;
$field_labels["followup"] = &$fieldLabelsfollowup;
$fieldToolTips["followup"] = &$fieldToolTipsfollowup;
$page_titles["followup"] = &$pageTitlesfollowup;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["followup"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["followup"] = array();


	
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
					$masterTablesData["followup"][0] = $masterParams;
				$masterTablesData["followup"][0]["masterKeys"] = array();
	$masterTablesData["followup"][0]["masterKeys"][]="cid";
				$masterTablesData["followup"][0]["detailKeys"] = array();
	$masterTablesData["followup"][0]["detailKeys"][]="cid";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_followup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fid,  	cid,  	r_join,  	r_abs,  	r_pay_abs,  	r_pay_fp,  	r_fp";
$proto0["m_strFrom"] = "FROM followup";
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
	"m_strTable" => "followup",
	"m_srcTableName" => "followup"
));

$proto5["m_sql"] = "fid";
$proto5["m_srcTableName"] = "followup";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "followup",
	"m_srcTableName" => "followup"
));

$proto7["m_sql"] = "cid";
$proto7["m_srcTableName"] = "followup";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "r_join",
	"m_strTable" => "followup",
	"m_srcTableName" => "followup"
));

$proto9["m_sql"] = "r_join";
$proto9["m_srcTableName"] = "followup";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "r_abs",
	"m_strTable" => "followup",
	"m_srcTableName" => "followup"
));

$proto11["m_sql"] = "r_abs";
$proto11["m_srcTableName"] = "followup";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "r_pay_abs",
	"m_strTable" => "followup",
	"m_srcTableName" => "followup"
));

$proto13["m_sql"] = "r_pay_abs";
$proto13["m_srcTableName"] = "followup";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "r_pay_fp",
	"m_strTable" => "followup",
	"m_srcTableName" => "followup"
));

$proto15["m_sql"] = "r_pay_fp";
$proto15["m_srcTableName"] = "followup";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "r_fp",
	"m_strTable" => "followup",
	"m_srcTableName" => "followup"
));

$proto17["m_sql"] = "r_fp";
$proto17["m_srcTableName"] = "followup";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "followup";
$proto20["m_srcTableName"] = "followup";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "fid";
$proto20["m_columns"][] = "cid";
$proto20["m_columns"][] = "r_join";
$proto20["m_columns"][] = "r_abs";
$proto20["m_columns"][] = "r_pay_abs";
$proto20["m_columns"][] = "r_pay_fp";
$proto20["m_columns"][] = "r_fp";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "followup";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "followup";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="followup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_followup = createSqlQuery_followup();



							

$tdatafollowup[".sqlquery"] = $queryData_followup;

$tableEvents["followup"] = new eventsBase;
$tdatafollowup[".hasEvents"] = false;

?>