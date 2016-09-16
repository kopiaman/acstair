<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagraph_user = array();
	$tdatagraph_user[".ShortName"] = "graph_user";
	$tdatagraph_user[".OwnerID"] = "";
	$tdatagraph_user[".OriginalTable"] = "user";

//	field labels
$fieldLabelsgraph_user = array();
$fieldToolTipsgraph_user = array();
$pageTitlesgraph_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgraph_user["English"] = array();
	$fieldToolTipsgraph_user["English"] = array();
	$pageTitlesgraph_user["English"] = array();
	$fieldLabelsgraph_user["English"]["country"] = "Country";
	$fieldToolTipsgraph_user["English"]["country"] = "";
	$fieldLabelsgraph_user["English"]["user"] = "User";
	$fieldToolTipsgraph_user["English"]["user"] = "";
	if (count($fieldToolTipsgraph_user["English"]))
		$tdatagraph_user[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgraph_user[""] = array();
	$fieldToolTipsgraph_user[""] = array();
	$pageTitlesgraph_user[""] = array();
	if (count($fieldToolTipsgraph_user[""]))
		$tdatagraph_user[".isUseToolTips"] = true;
}


	$tdatagraph_user[".NCSearch"] = true;

	$tdatagraph_user[".ChartRefreshTime"] = 0;


$tdatagraph_user[".shortTableName"] = "graph_user";
$tdatagraph_user[".nSecOptions"] = 0;
$tdatagraph_user[".recsPerRowList"] = 1;
$tdatagraph_user[".recsPerRowPrint"] = 1;
$tdatagraph_user[".mainTableOwnerID"] = "";
$tdatagraph_user[".moveNext"] = 1;
$tdatagraph_user[".entityType"] = 3;

$tdatagraph_user[".strOriginalTableName"] = "user";




$tdatagraph_user[".showAddInPopup"] = false;

$tdatagraph_user[".showEditInPopup"] = false;

$tdatagraph_user[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagraph_user[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagraph_user[".fieldsForRegister"] = array();

$tdatagraph_user[".listAjax"] = false;

	$tdatagraph_user[".audit"] = false;

	$tdatagraph_user[".locking"] = false;


$tdatagraph_user[".add"] = true;
$tdatagraph_user[".afterAddAction"] = 1;
$tdatagraph_user[".closePopupAfterAdd"] = 1;
$tdatagraph_user[".afterAddActionDetTable"] = "";

$tdatagraph_user[".list"] = true;

$tdatagraph_user[".inlineAdd"] = true;





$tdatagraph_user[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatagraph_user[".searchSaving"] = false;
//

$tdatagraph_user[".showSearchPanel"] = true;
		$tdatagraph_user[".flexibleSearch"] = true;

if (isMobile())
	$tdatagraph_user[".isUseAjaxSuggest"] = false;
else
	$tdatagraph_user[".isUseAjaxSuggest"] = true;



								
$tdatagraph_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagraph_user[".isUseTimeForSearch"] = false;





$tdatagraph_user[".allSearchFields"] = array();
$tdatagraph_user[".filterFields"] = array();
$tdatagraph_user[".requiredSearchFields"] = array();



$tdatagraph_user[".googleLikeFields"] = array();
$tdatagraph_user[".googleLikeFields"][] = "country";
$tdatagraph_user[".googleLikeFields"][] = "user";



$tdatagraph_user[".tableType"] = "chart";

$tdatagraph_user[".printerPageOrientation"] = 0;
$tdatagraph_user[".nPrinterPageScale"] = 100;

$tdatagraph_user[".nPrinterSplitRecords"] = 40;

$tdatagraph_user[".nPrinterPDFSplitRecords"] = 40;



$tdatagraph_user[".geocodingEnabled"] = false;



// chart settings
$tdatagraph_user[".chartType"] = "2DPie";
// end of chart settings







// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagraph_user[".strOrderBy"] = $tstrOrderBy;

$tdatagraph_user[".orderindexes"] = array();

$tdatagraph_user[".sqlHead"] = "SELECT country,  COUNT(userID) AS `user`";
$tdatagraph_user[".sqlFrom"] = "FROM `user`";
$tdatagraph_user[".sqlWhereExpr"] = "";
$tdatagraph_user[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagraph_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagraph_user[".arrGroupsPerPage"] = $arrGPP;


$tableKeysgraph_user = array();
$tdatagraph_user[".Keys"] = $tableKeysgraph_user;

$tdatagraph_user[".listFields"] = array();
$tdatagraph_user[".listFields"][] = "country";
$tdatagraph_user[".listFields"][] = "user";

$tdatagraph_user[".hideMobileList"] = array();


$tdatagraph_user[".viewFields"] = array();
$tdatagraph_user[".viewFields"][] = "country";
$tdatagraph_user[".viewFields"][] = "user";

$tdatagraph_user[".addFields"] = array();
$tdatagraph_user[".addFields"][] = "country";

$tdatagraph_user[".masterListFields"] = array();
$tdatagraph_user[".masterListFields"][] = "country";
$tdatagraph_user[".masterListFields"][] = "user";

$tdatagraph_user[".inlineAddFields"] = array();
$tdatagraph_user[".inlineAddFields"][] = "country";
$tdatagraph_user[".inlineAddFields"][] = "user";

$tdatagraph_user[".editFields"] = array();
$tdatagraph_user[".editFields"][] = "country";

$tdatagraph_user[".inlineEditFields"] = array();
$tdatagraph_user[".inlineEditFields"][] = "country";
$tdatagraph_user[".inlineEditFields"][] = "user";

$tdatagraph_user[".exportFields"] = array();
$tdatagraph_user[".exportFields"][] = "country";
$tdatagraph_user[".exportFields"][] = "user";

$tdatagraph_user[".importFields"] = array();
$tdatagraph_user[".importFields"][] = "country";
$tdatagraph_user[".importFields"][] = "user";

$tdatagraph_user[".printFields"] = array();
$tdatagraph_user[".printFields"][] = "country";
$tdatagraph_user[".printFields"][] = "user";

//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("graph_user","country");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";

	
	
			
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatagraph_user["country"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("graph_user","user");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(userID)";

	
	
			
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








	$tdatagraph_user["user"] = $fdata;

	$tdatagraph_user[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">graph_user</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatagraph_user[".chartXml"] .= '<attr value="0">
			<attr value="name">user</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatagraph_user[".chartXml"] .= '</attr>';
	$tdatagraph_user[".chartXml"] .= '<attr value="1">
		<attr value="name">country</attr>
	</attr>';
	$tdatagraph_user[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatagraph_user[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdatagraph_user[".chartXml"] .= '<attr value="head">'.xmlencode("No of User").'</attr>
<attr value="foot">'.xmlencode("Country").'</attr>
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
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">300</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatagraph_user[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatagraph_user[".chartXml"] .= '<attr value="0">
		<attr value="name">country</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_user","country")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatagraph_user[".chartXml"] .= '<attr value="1">
		<attr value="name">user</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("graph_user","user")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatagraph_user[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">graph_user</attr>
<attr value="short_table_name">graph_user</attr>
</attr>

</chart>';

$tables_data["graph_user"]=&$tdatagraph_user;
$field_labels["graph_user"] = &$fieldLabelsgraph_user;
$fieldToolTips["graph_user"] = &$fieldToolTipsgraph_user;
$page_titles["graph_user"] = &$pageTitlesgraph_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["graph_user"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["graph_user"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_graph_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "country,  COUNT(userID) AS `user`";
$proto0["m_strFrom"] = "FROM `user`";
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
	"m_srcTableName" => "graph_user"
));

$proto5["m_sql"] = "country";
$proto5["m_srcTableName"] = "graph_user";
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
	"m_strTable" => "user",
	"m_srcTableName" => "graph_user"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "COUNT(userID)";
$proto7["m_srcTableName"] = "graph_user";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "user";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "user";
$proto11["m_srcTableName"] = "graph_user";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "userID";
$proto11["m_columns"][] = "email";
$proto11["m_columns"][] = "password";
$proto11["m_columns"][] = "fullName";
$proto11["m_columns"][] = "gender";
$proto11["m_columns"][] = "address";
$proto11["m_columns"][] = "postal";
$proto11["m_columns"][] = "city";
$proto11["m_columns"][] = "state";
$proto11["m_columns"][] = "country";
$proto11["m_columns"][] = "tel";
$proto11["m_columns"][] = "fax";
$proto11["m_columns"][] = "institution";
$proto11["m_columns"][] = "faculty";
$proto11["m_columns"][] = "department";
$proto11["m_columns"][] = "research";
$proto11["m_columns"][] = "student";
$proto11["m_columns"][] = "role";
$proto11["m_columns"][] = "note";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`user`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "graph_user";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "graph_user"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="graph_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_graph_user = createSqlQuery_graph_user();



		

$tdatagraph_user[".sqlquery"] = $queryData_graph_user;

$tableEvents["graph_user"] = new eventsBase;
$tdatagraph_user[".hasEvents"] = false;

?>