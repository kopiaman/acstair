<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagraph_presenter = array();
	$tdatagraph_presenter[".ShortName"] = "graph_presenter";
	$tdatagraph_presenter[".OwnerID"] = "";
	$tdatagraph_presenter[".OriginalTable"] = "paper";

//	field labels
$fieldLabelsgraph_presenter = array();
$fieldToolTipsgraph_presenter = array();
$pageTitlesgraph_presenter = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgraph_presenter["English"] = array();
	$fieldToolTipsgraph_presenter["English"] = array();
	$pageTitlesgraph_presenter["English"] = array();
	$fieldLabelsgraph_presenter["English"]["presenter"] = "Presenter";
	$fieldToolTipsgraph_presenter["English"]["presenter"] = "";
	$fieldLabelsgraph_presenter["English"]["country"] = "Country";
	$fieldToolTipsgraph_presenter["English"]["country"] = "";
	$fieldLabelsgraph_presenter["English"]["cid"] = "Conference";
	$fieldToolTipsgraph_presenter["English"]["cid"] = "";
	if (count($fieldToolTipsgraph_presenter["English"]))
		$tdatagraph_presenter[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgraph_presenter[""] = array();
	$fieldToolTipsgraph_presenter[""] = array();
	$pageTitlesgraph_presenter[""] = array();
	if (count($fieldToolTipsgraph_presenter[""]))
		$tdatagraph_presenter[".isUseToolTips"] = true;
}


	$tdatagraph_presenter[".NCSearch"] = true;

	$tdatagraph_presenter[".ChartRefreshTime"] = 0;


$tdatagraph_presenter[".shortTableName"] = "graph_presenter";
$tdatagraph_presenter[".nSecOptions"] = 0;
$tdatagraph_presenter[".recsPerRowList"] = 1;
$tdatagraph_presenter[".recsPerRowPrint"] = 1;
$tdatagraph_presenter[".mainTableOwnerID"] = "";
$tdatagraph_presenter[".moveNext"] = 1;
$tdatagraph_presenter[".entityType"] = 3;

$tdatagraph_presenter[".strOriginalTableName"] = "paper";




$tdatagraph_presenter[".showAddInPopup"] = false;

$tdatagraph_presenter[".showEditInPopup"] = false;

$tdatagraph_presenter[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagraph_presenter[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagraph_presenter[".fieldsForRegister"] = array();

$tdatagraph_presenter[".listAjax"] = false;

	$tdatagraph_presenter[".audit"] = false;

	$tdatagraph_presenter[".locking"] = false;


$tdatagraph_presenter[".add"] = true;
$tdatagraph_presenter[".afterAddAction"] = 1;
$tdatagraph_presenter[".closePopupAfterAdd"] = 1;
$tdatagraph_presenter[".afterAddActionDetTable"] = "";

$tdatagraph_presenter[".list"] = true;

$tdatagraph_presenter[".inlineAdd"] = true;





$tdatagraph_presenter[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagraph_presenter[".searchSaving"] = false;
//

$tdatagraph_presenter[".showSearchPanel"] = true;
		$tdatagraph_presenter[".flexibleSearch"] = true;

if (isMobile())
	$tdatagraph_presenter[".isUseAjaxSuggest"] = false;
else
	$tdatagraph_presenter[".isUseAjaxSuggest"] = true;



								
$tdatagraph_presenter[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagraph_presenter[".isUseTimeForSearch"] = false;





$tdatagraph_presenter[".allSearchFields"] = array();
$tdatagraph_presenter[".filterFields"] = array();
$tdatagraph_presenter[".requiredSearchFields"] = array();

$tdatagraph_presenter[".allSearchFields"][] = "cid";
	

$tdatagraph_presenter[".googleLikeFields"] = array();
$tdatagraph_presenter[".googleLikeFields"][] = "cid";

$tdatagraph_presenter[".panelSearchFields"] = array();
$tdatagraph_presenter[".searchPanelOptions"] = array();
$tdatagraph_presenter[".panelSearchFields"][] = "cid";
	
$tdatagraph_presenter[".advSearchFields"] = array();
$tdatagraph_presenter[".advSearchFields"][] = "cid";

$tdatagraph_presenter[".tableType"] = "chart";

$tdatagraph_presenter[".printerPageOrientation"] = 0;
$tdatagraph_presenter[".nPrinterPageScale"] = 100;

$tdatagraph_presenter[".nPrinterSplitRecords"] = 40;

$tdatagraph_presenter[".nPrinterPDFSplitRecords"] = 40;



$tdatagraph_presenter[".geocodingEnabled"] = false;



// chart settings
$tdatagraph_presenter[".chartType"] = "2DPie";
// end of chart settings







// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagraph_presenter[".strOrderBy"] = $tstrOrderBy;

$tdatagraph_presenter[".orderindexes"] = array();

$tdatagraph_presenter[".sqlHead"] = "SELECT COUNT(paper.userID) AS presenter,  `user`.country,  paper.cid";
$tdatagraph_presenter[".sqlFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
$tdatagraph_presenter[".sqlWhereExpr"] = "";
$tdatagraph_presenter[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagraph_presenter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagraph_presenter[".arrGroupsPerPage"] = $arrGPP;


$tableKeysgraph_presenter = array();
$tdatagraph_presenter[".Keys"] = $tableKeysgraph_presenter;

$tdatagraph_presenter[".listFields"] = array();
$tdatagraph_presenter[".listFields"][] = "presenter";
$tdatagraph_presenter[".listFields"][] = "country";
$tdatagraph_presenter[".listFields"][] = "cid";

$tdatagraph_presenter[".hideMobileList"] = array();


$tdatagraph_presenter[".viewFields"] = array();
$tdatagraph_presenter[".viewFields"][] = "presenter";
$tdatagraph_presenter[".viewFields"][] = "country";
$tdatagraph_presenter[".viewFields"][] = "cid";

$tdatagraph_presenter[".addFields"] = array();
$tdatagraph_presenter[".addFields"][] = "cid";

$tdatagraph_presenter[".masterListFields"] = array();
$tdatagraph_presenter[".masterListFields"][] = "presenter";
$tdatagraph_presenter[".masterListFields"][] = "country";
$tdatagraph_presenter[".masterListFields"][] = "cid";

$tdatagraph_presenter[".inlineAddFields"] = array();
$tdatagraph_presenter[".inlineAddFields"][] = "presenter";
$tdatagraph_presenter[".inlineAddFields"][] = "country";
$tdatagraph_presenter[".inlineAddFields"][] = "cid";

$tdatagraph_presenter[".editFields"] = array();
$tdatagraph_presenter[".editFields"][] = "cid";

$tdatagraph_presenter[".inlineEditFields"] = array();
$tdatagraph_presenter[".inlineEditFields"][] = "presenter";
$tdatagraph_presenter[".inlineEditFields"][] = "country";
$tdatagraph_presenter[".inlineEditFields"][] = "cid";

$tdatagraph_presenter[".exportFields"] = array();
$tdatagraph_presenter[".exportFields"][] = "presenter";
$tdatagraph_presenter[".exportFields"][] = "country";
$tdatagraph_presenter[".exportFields"][] = "cid";

$tdatagraph_presenter[".importFields"] = array();
$tdatagraph_presenter[".importFields"][] = "presenter";
$tdatagraph_presenter[".importFields"][] = "country";
$tdatagraph_presenter[".importFields"][] = "cid";

$tdatagraph_presenter[".printFields"] = array();
$tdatagraph_presenter[".printFields"][] = "presenter";
$tdatagraph_presenter[".printFields"][] = "country";
$tdatagraph_presenter[".printFields"][] = "cid";

//	presenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "presenter";
	$fdata["GoodName"] = "presenter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("graph_presenter","presenter");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "presenter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(paper.userID)";

	
	
			
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








	$tdatagraph_presenter["presenter"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("graph_presenter","country");
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








	$tdatagraph_presenter["country"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("graph_presenter","cid");
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
	$fdata["FullName"] = "paper.cid";

	
	
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




	$tdatagraph_presenter["cid"] = $fdata;

	$tdatagraph_presenter[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">graph_presenter</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatagraph_presenter[".chartXml"] .= '<attr value="0">
			<attr value="name">presenter</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatagraph_presenter[".chartXml"] .= '</attr>';
	$tdatagraph_presenter[".chartXml"] .= '<attr value="1">
		<attr value="name">country</attr>
	</attr>';
	$tdatagraph_presenter[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatagraph_presenter[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdatagraph_presenter[".chartXml"] .= '<attr value="head">'.xmlencode("Chart Title").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("userID").'</attr>

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
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">300</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatagraph_presenter[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagraph_presenter[".chartXml"] .= '<attr value="0">
		<attr value="name">presenter</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_presenter","presenter")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagraph_presenter[".chartXml"] .= '<attr value="1">
		<attr value="name">country</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_presenter","country")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagraph_presenter[".chartXml"] .= '<attr value="2">
		<attr value="name">cid</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_presenter","cid")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagraph_presenter[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">graph_presenter</attr>
<attr value="short_table_name">graph_presenter</attr>
</attr>

</chart>';

$tables_data["graph_presenter"]=&$tdatagraph_presenter;
$field_labels["graph_presenter"] = &$fieldLabelsgraph_presenter;
$fieldToolTips["graph_presenter"] = &$fieldToolTipsgraph_presenter;
$page_titles["graph_presenter"] = &$pageTitlesgraph_presenter;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["graph_presenter"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["graph_presenter"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_graph_presenter()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(paper.userID) AS presenter,  `user`.country,  paper.cid";
$proto0["m_strFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
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
			$proto6=array();
$proto6["m_functiontype"] = "SQLF_COUNT";
$proto6["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "graph_presenter"
));

$proto6["m_arguments"][]=$obj;
$proto6["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto6);

$proto5["m_sql"] = "COUNT(paper.userID)";
$proto5["m_srcTableName"] = "graph_presenter";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "presenter";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "graph_presenter"
));

$proto8["m_sql"] = "`user`.country";
$proto8["m_srcTableName"] = "graph_presenter";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper",
	"m_srcTableName" => "graph_presenter"
));

$proto10["m_sql"] = "paper.cid";
$proto10["m_srcTableName"] = "graph_presenter";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "paper";
$proto13["m_srcTableName"] = "graph_presenter";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "paperID";
$proto13["m_columns"][] = "paperRef";
$proto13["m_columns"][] = "userID";
$proto13["m_columns"][] = "cid";
$proto13["m_columns"][] = "multiAuthor";
$proto13["m_columns"][] = "funded";
$proto13["m_columns"][] = "date_submit";
$proto13["m_columns"][] = "title";
$proto13["m_columns"][] = "abstract";
$proto13["m_columns"][] = "paperStatus";
$proto13["m_columns"][] = "fullPaper";
$proto13["m_columns"][] = "paymentStatus";
$proto13["m_columns"][] = "slotDate";
$proto13["m_columns"][] = "slotTime";
$proto13["m_columns"][] = "slotRoom";
$proto13["m_columns"][] = "slotTurn";
$proto13["m_columns"][] = "invite";
$proto13["m_columns"][] = "note";
$proto13["m_columns"][] = "ppt";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "paper";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "graph_presenter";
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
$proto17["m_srcTableName"] = "graph_presenter";
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
$proto16["m_sql"] = "INNER JOIN `user` ON paper.userID = `user`.userID";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "graph_presenter";
$proto18=array();
$proto18["m_sql"] = "paper.userID = `user`.userID";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "graph_presenter"
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
	"m_srcTableName" => "graph_presenter"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper",
	"m_srcTableName" => "graph_presenter"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="graph_presenter";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_graph_presenter = createSqlQuery_graph_presenter();



			

$tdatagraph_presenter[".sqlquery"] = $queryData_graph_presenter;

$tableEvents["graph_presenter"] = new eventsBase;
$tdatagraph_presenter[".hasEvents"] = false;

?>