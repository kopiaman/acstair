<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapaper_reply = array();
	$tdatapaper_reply[".NumberOfChars"] = 80; 
	$tdatapaper_reply[".ShortName"] = "paper_reply";
	$tdatapaper_reply[".OwnerID"] = "";
	$tdatapaper_reply[".OriginalTable"] = "paper_reply";

//	field labels
$fieldLabelspaper_reply = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspaper_reply["English"] = array();
	$fieldToolTipspaper_reply["English"] = array();
	$fieldLabelspaper_reply["English"]["replyID"] = "Reply ";
	$fieldToolTipspaper_reply["English"]["replyID"] = "";
	$fieldLabelspaper_reply["English"]["paperID"] = "Paper ";
	$fieldToolTipspaper_reply["English"]["paperID"] = "";
	$fieldLabelspaper_reply["English"]["formalLetter"] = "Formal Letter";
	$fieldToolTipspaper_reply["English"]["formalLetter"] = "";
	$fieldLabelspaper_reply["English"]["earlyBird"] = "Early Bird";
	$fieldToolTipspaper_reply["English"]["earlyBird"] = "";
	$fieldLabelspaper_reply["English"]["paymentMode"] = "Payment Mode";
	$fieldToolTipspaper_reply["English"]["paymentMode"] = "";
	$fieldLabelspaper_reply["English"]["datePayment"] = "Date Payment";
	$fieldToolTipspaper_reply["English"]["datePayment"] = "";
	$fieldLabelspaper_reply["English"]["dateSubmit"] = "Date Submit";
	$fieldToolTipspaper_reply["English"]["dateSubmit"] = "";
	$fieldLabelspaper_reply["English"]["dateImportant"] = "Date Important";
	$fieldToolTipspaper_reply["English"]["dateImportant"] = "";
	if (count($fieldToolTipspaper_reply["English"]))
		$tdatapaper_reply[".isUseToolTips"] = true;
}
	
	
	$tdatapaper_reply[".NCSearch"] = true;



$tdatapaper_reply[".shortTableName"] = "paper_reply";
$tdatapaper_reply[".nSecOptions"] = 0;
$tdatapaper_reply[".recsPerRowList"] = 1;
$tdatapaper_reply[".mainTableOwnerID"] = "";
$tdatapaper_reply[".moveNext"] = 1;
$tdatapaper_reply[".nType"] = 0;

$tdatapaper_reply[".strOriginalTableName"] = "paper_reply";




$tdatapaper_reply[".showAddInPopup"] = false;

$tdatapaper_reply[".showEditInPopup"] = false;

$tdatapaper_reply[".showViewInPopup"] = false;

$tdatapaper_reply[".fieldsForRegister"] = array();

$tdatapaper_reply[".listAjax"] = false;

	$tdatapaper_reply[".audit"] = false;

	$tdatapaper_reply[".locking"] = false;

$tdatapaper_reply[".listIcons"] = true;
$tdatapaper_reply[".inlineEdit"] = true;
$tdatapaper_reply[".inlineAdd"] = true;



$tdatapaper_reply[".delete"] = true;

$tdatapaper_reply[".showSimpleSearchOptions"] = false;

$tdatapaper_reply[".showSearchPanel"] = true;

if (isMobile())
	$tdatapaper_reply[".isUseAjaxSuggest"] = false;
else 
	$tdatapaper_reply[".isUseAjaxSuggest"] = true;

$tdatapaper_reply[".rowHighlite"] = true;

// button handlers file names

$tdatapaper_reply[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaper_reply[".isUseTimeForSearch"] = false;




$tdatapaper_reply[".allSearchFields"] = array();

$tdatapaper_reply[".allSearchFields"][] = "formalLetter";
$tdatapaper_reply[".allSearchFields"][] = "earlyBird";
$tdatapaper_reply[".allSearchFields"][] = "paymentMode";
$tdatapaper_reply[".allSearchFields"][] = "datePayment";
$tdatapaper_reply[".allSearchFields"][] = "dateSubmit";
$tdatapaper_reply[".allSearchFields"][] = "dateImportant";

$tdatapaper_reply[".googleLikeFields"][] = "replyID";
$tdatapaper_reply[".googleLikeFields"][] = "paperID";
$tdatapaper_reply[".googleLikeFields"][] = "formalLetter";
$tdatapaper_reply[".googleLikeFields"][] = "earlyBird";
$tdatapaper_reply[".googleLikeFields"][] = "paymentMode";
$tdatapaper_reply[".googleLikeFields"][] = "datePayment";
$tdatapaper_reply[".googleLikeFields"][] = "dateSubmit";
$tdatapaper_reply[".googleLikeFields"][] = "dateImportant";


$tdatapaper_reply[".advSearchFields"][] = "formalLetter";
$tdatapaper_reply[".advSearchFields"][] = "earlyBird";
$tdatapaper_reply[".advSearchFields"][] = "paymentMode";
$tdatapaper_reply[".advSearchFields"][] = "datePayment";
$tdatapaper_reply[".advSearchFields"][] = "dateSubmit";
$tdatapaper_reply[".advSearchFields"][] = "dateImportant";

$tdatapaper_reply[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapaper_reply[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaper_reply[".strOrderBy"] = $tstrOrderBy;

$tdatapaper_reply[".orderindexes"] = array();

$tdatapaper_reply[".sqlHead"] = "SELECT replyID,   paperID,   formalLetter,   earlyBird,   paymentMode,   datePayment,   dateSubmit,   dateImportant";
$tdatapaper_reply[".sqlFrom"] = "FROM paper_reply";
$tdatapaper_reply[".sqlWhereExpr"] = "";
$tdatapaper_reply[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaper_reply[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaper_reply[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspaper_reply = array();
$tableKeyspaper_reply[] = "replyID";
$tdatapaper_reply[".Keys"] = $tableKeyspaper_reply;

$tdatapaper_reply[".listFields"] = array();
$tdatapaper_reply[".listFields"][] = "formalLetter";
$tdatapaper_reply[".listFields"][] = "earlyBird";
$tdatapaper_reply[".listFields"][] = "paymentMode";
$tdatapaper_reply[".listFields"][] = "datePayment";
$tdatapaper_reply[".listFields"][] = "dateSubmit";
$tdatapaper_reply[".listFields"][] = "dateImportant";

$tdatapaper_reply[".viewFields"] = array();

$tdatapaper_reply[".addFields"] = array();

$tdatapaper_reply[".inlineAddFields"] = array();
$tdatapaper_reply[".inlineAddFields"][] = "formalLetter";
$tdatapaper_reply[".inlineAddFields"][] = "earlyBird";
$tdatapaper_reply[".inlineAddFields"][] = "paymentMode";
$tdatapaper_reply[".inlineAddFields"][] = "datePayment";
$tdatapaper_reply[".inlineAddFields"][] = "dateSubmit";
$tdatapaper_reply[".inlineAddFields"][] = "dateImportant";

$tdatapaper_reply[".editFields"] = array();

$tdatapaper_reply[".inlineEditFields"] = array();
$tdatapaper_reply[".inlineEditFields"][] = "formalLetter";
$tdatapaper_reply[".inlineEditFields"][] = "earlyBird";
$tdatapaper_reply[".inlineEditFields"][] = "paymentMode";
$tdatapaper_reply[".inlineEditFields"][] = "datePayment";
$tdatapaper_reply[".inlineEditFields"][] = "dateSubmit";
$tdatapaper_reply[".inlineEditFields"][] = "dateImportant";

$tdatapaper_reply[".exportFields"] = array();

$tdatapaper_reply[".printFields"] = array();

//	replyID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "replyID";
	$fdata["GoodName"] = "replyID";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Reply "; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "replyID"; 
		$fdata["FullName"] = "replyID";
	
		
		
				
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
	
		
		
	$tdatapaper_reply["replyID"] = $fdata;
//	paperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paperID";
	$fdata["GoodName"] = "paperID";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Paper "; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "paperID"; 
		$fdata["FullName"] = "paperID";
	
		
		
				
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
	
		
		
	$tdatapaper_reply["paperID"] = $fdata;
//	formalLetter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "formalLetter";
	$fdata["GoodName"] = "formalLetter";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Formal Letter"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "formalLetter"; 
		$fdata["FullName"] = "formalLetter";
	
		
		
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
	
		
		
	$tdatapaper_reply["formalLetter"] = $fdata;
//	earlyBird
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "earlyBird";
	$fdata["GoodName"] = "earlyBird";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Early Bird"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "earlyBird"; 
		$fdata["FullName"] = "earlyBird";
	
		
		
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
	
		
		
	$tdatapaper_reply["earlyBird"] = $fdata;
//	paymentMode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paymentMode";
	$fdata["GoodName"] = "paymentMode";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Payment Mode"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "paymentMode"; 
		$fdata["FullName"] = "paymentMode";
	
		
		
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
	
		
		
	$tdatapaper_reply["paymentMode"] = $fdata;
//	datePayment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "datePayment";
	$fdata["GoodName"] = "datePayment";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Date Payment"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "datePayment"; 
		$fdata["FullName"] = "datePayment";
	
		
		
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
	
		
		
	$tdatapaper_reply["datePayment"] = $fdata;
//	dateSubmit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dateSubmit";
	$fdata["GoodName"] = "dateSubmit";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Date Submit"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "dateSubmit"; 
		$fdata["FullName"] = "dateSubmit";
	
		
		
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
	
		
		
	$tdatapaper_reply["dateSubmit"] = $fdata;
//	dateImportant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dateImportant";
	$fdata["GoodName"] = "dateImportant";
	$fdata["ownerTable"] = "paper_reply";
	$fdata["Label"] = "Date Important"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "dateImportant"; 
		$fdata["FullName"] = "dateImportant";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_reply["dateImportant"] = $fdata;

	
$tables_data["paper_reply"]=&$tdatapaper_reply;
$field_labels["paper_reply"] = &$fieldLabelspaper_reply;
$fieldToolTips["paper_reply"] = &$fieldToolTipspaper_reply;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paper_reply"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["paper_reply"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="paper";
	$masterParams["mDataSourceTable"]="paper";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paper";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["paper_reply"][$mIndex] = $masterParams;	
		$masterTablesData["paper_reply"][$mIndex]["masterKeys"][]="paperID";
		$masterTablesData["paper_reply"][$mIndex]["detailKeys"][]="paperID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_paper_reply()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "replyID,   paperID,   formalLetter,   earlyBird,   paymentMode,   datePayment,   dateSubmit,   dateImportant";
$proto0["m_strFrom"] = "FROM paper_reply";
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
	"m_strName" => "replyID",
	"m_strTable" => "paper_reply"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper_reply"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "formalLetter",
	"m_strTable" => "paper_reply"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "earlyBird",
	"m_strTable" => "paper_reply"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "paymentMode",
	"m_strTable" => "paper_reply"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "datePayment",
	"m_strTable" => "paper_reply"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "dateSubmit",
	"m_strTable" => "paper_reply"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "dateImportant",
	"m_strTable" => "paper_reply"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "paper_reply";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "replyID";
$proto22["m_columns"][] = "paperID";
$proto22["m_columns"][] = "formalLetter";
$proto22["m_columns"][] = "earlyBird";
$proto22["m_columns"][] = "paymentMode";
$proto22["m_columns"][] = "datePayment";
$proto22["m_columns"][] = "dateSubmit";
$proto22["m_columns"][] = "dateImportant";
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
$queryData_paper_reply = createSqlQuery_paper_reply();
								$tdatapaper_reply[".sqlquery"] = $queryData_paper_reply;

$tableEvents["paper_reply"] = new eventsBase;
$tdatapaper_reply[".hasEvents"] = false;

$cipherer = new RunnerCipherer("paper_reply");

?>