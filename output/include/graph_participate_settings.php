<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagraph_participate = array();
	$tdatagraph_participate[".ShortName"] = "graph_participate";
	$tdatagraph_participate[".OwnerID"] = "";
	$tdatagraph_participate[".OriginalTable"] = "participate";

//	field labels
$fieldLabelsgraph_participate = array();
$fieldToolTipsgraph_participate = array();
$pageTitlesgraph_participate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgraph_participate["English"] = array();
	$fieldToolTipsgraph_participate["English"] = array();
	$pageTitlesgraph_participate["English"] = array();
	$fieldLabelsgraph_participate["English"]["country"] = "Country";
	$fieldToolTipsgraph_participate["English"]["country"] = "";
	$fieldLabelsgraph_participate["English"]["participate"] = "Participate";
	$fieldToolTipsgraph_participate["English"]["participate"] = "";
	$fieldLabelsgraph_participate["English"]["cid"] = "Conference";
	$fieldToolTipsgraph_participate["English"]["cid"] = "";
	if (count($fieldToolTipsgraph_participate["English"]))
		$tdatagraph_participate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgraph_participate[""] = array();
	$fieldToolTipsgraph_participate[""] = array();
	$pageTitlesgraph_participate[""] = array();
	if (count($fieldToolTipsgraph_participate[""]))
		$tdatagraph_participate[".isUseToolTips"] = true;
}


	$tdatagraph_participate[".NCSearch"] = true;

	$tdatagraph_participate[".ChartRefreshTime"] = 0;


$tdatagraph_participate[".shortTableName"] = "graph_participate";
$tdatagraph_participate[".nSecOptions"] = 0;
$tdatagraph_participate[".recsPerRowList"] = 1;
$tdatagraph_participate[".recsPerRowPrint"] = 1;
$tdatagraph_participate[".mainTableOwnerID"] = "";
$tdatagraph_participate[".moveNext"] = 1;
$tdatagraph_participate[".entityType"] = 3;

$tdatagraph_participate[".strOriginalTableName"] = "participate";




$tdatagraph_participate[".showAddInPopup"] = false;

$tdatagraph_participate[".showEditInPopup"] = false;

$tdatagraph_participate[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagraph_participate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagraph_participate[".fieldsForRegister"] = array();

$tdatagraph_participate[".listAjax"] = false;

	$tdatagraph_participate[".audit"] = false;

	$tdatagraph_participate[".locking"] = false;


$tdatagraph_participate[".add"] = true;
$tdatagraph_participate[".afterAddAction"] = 1;
$tdatagraph_participate[".closePopupAfterAdd"] = 1;
$tdatagraph_participate[".afterAddActionDetTable"] = "";

$tdatagraph_participate[".list"] = true;

$tdatagraph_participate[".inlineAdd"] = true;





$tdatagraph_participate[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagraph_participate[".searchSaving"] = false;
//

$tdatagraph_participate[".showSearchPanel"] = true;
		$tdatagraph_participate[".flexibleSearch"] = true;

if (isMobile())
	$tdatagraph_participate[".isUseAjaxSuggest"] = false;
else
	$tdatagraph_participate[".isUseAjaxSuggest"] = true;



								
$tdatagraph_participate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagraph_participate[".isUseTimeForSearch"] = false;





$tdatagraph_participate[".allSearchFields"] = array();
$tdatagraph_participate[".filterFields"] = array();
$tdatagraph_participate[".requiredSearchFields"] = array();

$tdatagraph_participate[".allSearchFields"][] = "cid";
	

$tdatagraph_participate[".googleLikeFields"] = array();
$tdatagraph_participate[".googleLikeFields"][] = "country";
$tdatagraph_participate[".googleLikeFields"][] = "participate";
$tdatagraph_participate[".googleLikeFields"][] = "cid";


$tdatagraph_participate[".advSearchFields"] = array();
$tdatagraph_participate[".advSearchFields"][] = "cid";

$tdatagraph_participate[".tableType"] = "chart";

$tdatagraph_participate[".printerPageOrientation"] = 0;
$tdatagraph_participate[".nPrinterPageScale"] = 100;

$tdatagraph_participate[".nPrinterSplitRecords"] = 40;

$tdatagraph_participate[".nPrinterPDFSplitRecords"] = 40;



$tdatagraph_participate[".geocodingEnabled"] = false;



// chart settings
$tdatagraph_participate[".chartType"] = "2DPie";
// end of chart settings







// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagraph_participate[".strOrderBy"] = $tstrOrderBy;

$tdatagraph_participate[".orderindexes"] = array();

$tdatagraph_participate[".sqlHead"] = "SELECT `user`.country,  COUNT(participate.userID) AS participate,  participate.cid";
$tdatagraph_participate[".sqlFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID";
$tdatagraph_participate[".sqlWhereExpr"] = "";
$tdatagraph_participate[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagraph_participate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagraph_participate[".arrGroupsPerPage"] = $arrGPP;


$tableKeysgraph_participate = array();
$tdatagraph_participate[".Keys"] = $tableKeysgraph_participate;

$tdatagraph_participate[".listFields"] = array();
$tdatagraph_participate[".listFields"][] = "country";
$tdatagraph_participate[".listFields"][] = "participate";
$tdatagraph_participate[".listFields"][] = "cid";

$tdatagraph_participate[".hideMobileList"] = array();


$tdatagraph_participate[".viewFields"] = array();
$tdatagraph_participate[".viewFields"][] = "country";
$tdatagraph_participate[".viewFields"][] = "participate";
$tdatagraph_participate[".viewFields"][] = "cid";

$tdatagraph_participate[".addFields"] = array();
$tdatagraph_participate[".addFields"][] = "cid";

$tdatagraph_participate[".masterListFields"] = array();
$tdatagraph_participate[".masterListFields"][] = "country";
$tdatagraph_participate[".masterListFields"][] = "participate";
$tdatagraph_participate[".masterListFields"][] = "cid";

$tdatagraph_participate[".inlineAddFields"] = array();
$tdatagraph_participate[".inlineAddFields"][] = "country";
$tdatagraph_participate[".inlineAddFields"][] = "participate";
$tdatagraph_participate[".inlineAddFields"][] = "cid";

$tdatagraph_participate[".editFields"] = array();
$tdatagraph_participate[".editFields"][] = "cid";

$tdatagraph_participate[".inlineEditFields"] = array();
$tdatagraph_participate[".inlineEditFields"][] = "country";
$tdatagraph_participate[".inlineEditFields"][] = "participate";
$tdatagraph_participate[".inlineEditFields"][] = "cid";

$tdatagraph_participate[".exportFields"] = array();
$tdatagraph_participate[".exportFields"][] = "country";
$tdatagraph_participate[".exportFields"][] = "participate";
$tdatagraph_participate[".exportFields"][] = "cid";

$tdatagraph_participate[".importFields"] = array();
$tdatagraph_participate[".importFields"][] = "country";
$tdatagraph_participate[".importFields"][] = "participate";
$tdatagraph_participate[".importFields"][] = "cid";

$tdatagraph_participate[".printFields"] = array();
$tdatagraph_participate[".printFields"][] = "country";
$tdatagraph_participate[".printFields"][] = "participate";
$tdatagraph_participate[".printFields"][] = "cid";

//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("graph_participate","country");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.country";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatagraph_participate["country"] = $fdata;
//	participate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "participate";
	$fdata["GoodName"] = "participate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("graph_participate","participate");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "participate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(participate.userID)";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatagraph_participate["participate"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("graph_participate","cid");
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

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.cid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatagraph_participate["cid"] = $fdata;

	$tdatagraph_participate[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">graph_participate</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatagraph_participate[".chartXml"] .= '<attr value="0">
			<attr value="name">participate</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatagraph_participate[".chartXml"] .= '</attr>';
	$tdatagraph_participate[".chartXml"] .= '<attr value="1">
		<attr value="name">country</attr>
	</attr>';
	$tdatagraph_participate[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatagraph_participate[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdatagraph_participate[".chartXml"] .= '<attr value="head">'.xmlencode("No of Participant ").'</attr>
<attr value="foot">'.xmlencode("Country").'</attr>
<attr value="y_axis_label">'.xmlencode("cid").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">300</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatagraph_participate[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagraph_participate[".chartXml"] .= '<attr value="0">
		<attr value="name">country</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_participate","country")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagraph_participate[".chartXml"] .= '<attr value="1">
		<attr value="name">participate</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_participate","participate")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagraph_participate[".chartXml"] .= '<attr value="2">
		<attr value="name">cid</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_participate","cid")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagraph_participate[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">graph_participate</attr>
<attr value="short_table_name">graph_participate</attr>
</attr>

</chart>';

$tables_data["graph_participate"]=&$tdatagraph_participate;
$field_labels["graph_participate"] = &$fieldLabelsgraph_participate;
$fieldToolTips["graph_participate"] = &$fieldToolTipsgraph_participate;
$page_titles["graph_participate"] = &$pageTitlesgraph_participate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["graph_participate"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["graph_participate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_graph_participate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user`.country,  COUNT(participate.userID) AS participate,  participate.cid";
$proto0["m_strFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID";
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
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "graph_participate"
));

$proto5["m_sql"] = "`user`.country";
$proto5["m_srcTableName"] = "graph_participate";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_COUNT";
$proto8["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "graph_participate"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "COUNT(participate.userID)";
$proto7["m_srcTableName"] = "graph_participate";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "participate";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate",
	"m_srcTableName" => "graph_participate"
));

$proto10["m_sql"] = "participate.cid";
$proto10["m_srcTableName"] = "graph_participate";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "participate";
$proto13["m_srcTableName"] = "graph_participate";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "parID";
$proto13["m_columns"][] = "cid";
$proto13["m_columns"][] = "userID";
$proto13["m_columns"][] = "cfid";
$proto13["m_columns"][] = "confirm";
$proto13["m_columns"][] = "paperCount";
$proto13["m_columns"][] = "listenerRef";
$proto13["m_columns"][] = "note";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "participate";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "graph_participate";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "user";
$proto17["m_srcTableName"] = "graph_participate";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "userID";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "password";
$proto17["m_columns"][] = "fullName";
$proto17["m_columns"][] = "gender";
$proto17["m_columns"][] = "address";
$proto17["m_columns"][] = "postal";
$proto17["m_columns"][] = "city";
$proto17["m_columns"][] = "state";
$proto17["m_columns"][] = "country";
$proto17["m_columns"][] = "tel";
$proto17["m_columns"][] = "fax";
$proto17["m_columns"][] = "institution";
$proto17["m_columns"][] = "faculty";
$proto17["m_columns"][] = "department";
$proto17["m_columns"][] = "research";
$proto17["m_columns"][] = "student";
$proto17["m_columns"][] = "role";
$proto17["m_columns"][] = "note";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN `user` ON participate.userID = `user`.userID";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "graph_participate";
$proto18=array();
$proto18["m_sql"] = "participate.userID = `user`.userID";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate",
	"m_srcTableName" => "graph_participate"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= `user`.userID";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "graph_participate"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate",
	"m_srcTableName" => "graph_participate"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="graph_participate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_graph_participate = createSqlQuery_graph_participate();



			

$tdatagraph_participate[".sqlquery"] = $queryData_graph_participate;

$tableEvents["graph_participate"] = new eventsBase;
$tdatagraph_participate[".hasEvents"] = false;

?>