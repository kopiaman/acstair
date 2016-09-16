<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatestmail = array();
	$tdatatestmail[".truncateText"] = true;
	$tdatatestmail[".NumberOfChars"] = 80;
	$tdatatestmail[".ShortName"] = "testmail";
	$tdatatestmail[".OwnerID"] = "";
	$tdatatestmail[".OriginalTable"] = "payments";

//	field labels
$fieldLabelstestmail = array();
$fieldToolTipstestmail = array();
$pageTitlestestmail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstestmail["English"] = array();
	$fieldToolTipstestmail["English"] = array();
	$pageTitlestestmail["English"] = array();
	$fieldLabelstestmail["English"]["id"] = "Id";
	$fieldToolTipstestmail["English"]["id"] = "";
	$fieldLabelstestmail["English"]["tx"] = "Transaction ID";
	$fieldToolTipstestmail["English"]["tx"] = "";
	$fieldLabelstestmail["English"]["currency"] = "Currency";
	$fieldToolTipstestmail["English"]["currency"] = "";
	$fieldLabelstestmail["English"]["amount"] = "Amount";
	$fieldToolTipstestmail["English"]["amount"] = "";
	$fieldLabelstestmail["English"]["payStatus"] = "Status";
	$fieldToolTipstestmail["English"]["payStatus"] = "";
	$fieldLabelstestmail["English"]["itemID"] = "Item ID";
	$fieldToolTipstestmail["English"]["itemID"] = "";
	$fieldLabelstestmail["English"]["payDate"] = "Pay Date";
	$fieldToolTipstestmail["English"]["payDate"] = "";
	$fieldLabelstestmail["English"]["mode"] = "Mode";
	$fieldToolTipstestmail["English"]["mode"] = "";
	$fieldLabelstestmail["English"]["userID"] = "Client";
	$fieldToolTipstestmail["English"]["userID"] = "";
	$fieldLabelstestmail["English"]["cid"] = "Conference";
	$fieldToolTipstestmail["English"]["cid"] = "";
	$fieldLabelstestmail["English"]["opt"] = "Option";
	$fieldToolTipstestmail["English"]["opt"] = "";
	$fieldLabelstestmail["English"]["receiptNo"] = "Receipt No";
	$fieldToolTipstestmail["English"]["receiptNo"] = "";
	if (count($fieldToolTipstestmail["English"]))
		$tdatatestmail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstestmail[""] = array();
	$fieldToolTipstestmail[""] = array();
	$pageTitlestestmail[""] = array();
	if (count($fieldToolTipstestmail[""]))
		$tdatatestmail[".isUseToolTips"] = true;
}


	$tdatatestmail[".NCSearch"] = true;



$tdatatestmail[".shortTableName"] = "testmail";
$tdatatestmail[".nSecOptions"] = 0;
$tdatatestmail[".recsPerRowList"] = 1;
$tdatatestmail[".recsPerRowPrint"] = 1;
$tdatatestmail[".mainTableOwnerID"] = "";
$tdatatestmail[".moveNext"] = 1;
$tdatatestmail[".entityType"] = 1;

$tdatatestmail[".strOriginalTableName"] = "payments";




$tdatatestmail[".showAddInPopup"] = false;

$tdatatestmail[".showEditInPopup"] = false;

$tdatatestmail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatestmail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatestmail[".fieldsForRegister"] = array();

$tdatatestmail[".listAjax"] = false;

	$tdatatestmail[".audit"] = false;

	$tdatatestmail[".locking"] = false;



$tdatatestmail[".list"] = true;






$tdatatestmail[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatestmail[".searchSaving"] = false;
//

$tdatatestmail[".showSearchPanel"] = true;
		$tdatatestmail[".flexibleSearch"] = true;

if (isMobile())
	$tdatatestmail[".isUseAjaxSuggest"] = false;
else
	$tdatatestmail[".isUseAjaxSuggest"] = true;

$tdatatestmail[".rowHighlite"] = true;


								
$tdatatestmail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatestmail[".isUseTimeForSearch"] = false;





$tdatatestmail[".allSearchFields"] = array();
$tdatatestmail[".filterFields"] = array();
$tdatatestmail[".requiredSearchFields"] = array();

$tdatatestmail[".allSearchFields"][] = "cid";
	$tdatatestmail[".allSearchFields"][] = "userID";
	$tdatatestmail[".allSearchFields"][] = "itemID";
	$tdatatestmail[".allSearchFields"][] = "currency";
	$tdatatestmail[".allSearchFields"][] = "amount";
	$tdatatestmail[".allSearchFields"][] = "mode";
	$tdatatestmail[".allSearchFields"][] = "payDate";
	$tdatatestmail[".allSearchFields"][] = "tx";
	$tdatatestmail[".allSearchFields"][] = "receiptNo";
	$tdatatestmail[".allSearchFields"][] = "payStatus";
	

$tdatatestmail[".googleLikeFields"] = array();
$tdatatestmail[".googleLikeFields"][] = "tx";
$tdatatestmail[".googleLikeFields"][] = "currency";
$tdatatestmail[".googleLikeFields"][] = "amount";
$tdatatestmail[".googleLikeFields"][] = "itemID";
$tdatatestmail[".googleLikeFields"][] = "payDate";
$tdatatestmail[".googleLikeFields"][] = "mode";
$tdatatestmail[".googleLikeFields"][] = "userID";
$tdatatestmail[".googleLikeFields"][] = "cid";
$tdatatestmail[".googleLikeFields"][] = "receiptNo";

$tdatatestmail[".panelSearchFields"] = array();
$tdatatestmail[".searchPanelOptions"] = array();
$tdatatestmail[".panelSearchFields"][] = "cid";
	$tdatatestmail[".panelSearchFields"][] = "userID";
	$tdatatestmail[".panelSearchFields"][] = "itemID";
	$tdatatestmail[".panelSearchFields"][] = "currency";
	$tdatatestmail[".panelSearchFields"][] = "amount";
	$tdatatestmail[".panelSearchFields"][] = "mode";
	$tdatatestmail[".panelSearchFields"][] = "payDate";
	$tdatatestmail[".panelSearchFields"][] = "tx";
	$tdatatestmail[".panelSearchFields"][] = "receiptNo";
	
$tdatatestmail[".advSearchFields"] = array();
$tdatatestmail[".advSearchFields"][] = "cid";
$tdatatestmail[".advSearchFields"][] = "userID";
$tdatatestmail[".advSearchFields"][] = "itemID";
$tdatatestmail[".advSearchFields"][] = "currency";
$tdatatestmail[".advSearchFields"][] = "amount";
$tdatatestmail[".advSearchFields"][] = "mode";
$tdatatestmail[".advSearchFields"][] = "payDate";
$tdatatestmail[".advSearchFields"][] = "tx";
$tdatatestmail[".advSearchFields"][] = "receiptNo";
$tdatatestmail[".advSearchFields"][] = "payStatus";

$tdatatestmail[".tableType"] = "list";

$tdatatestmail[".printerPageOrientation"] = 0;
$tdatatestmail[".nPrinterPageScale"] = 100;

$tdatatestmail[".nPrinterSplitRecords"] = 40;

$tdatatestmail[".nPrinterPDFSplitRecords"] = 40;



$tdatatestmail[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatatestmail[".pageSize"] = 20;

$tdatatestmail[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatestmail[".strOrderBy"] = $tstrOrderBy;

$tdatatestmail[".orderindexes"] = array();
$tdatatestmail[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdatatestmail[".sqlHead"] = "SELECT id,  tx,  currency,  amount,  payStatus,  itemID,  payDate,  `mode`,  userID,  cid,  id AS opt,  receiptNo";
$tdatatestmail[".sqlFrom"] = "FROM payments";
$tdatatestmail[".sqlWhereExpr"] = "";
$tdatatestmail[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatestmail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatestmail[".arrGroupsPerPage"] = $arrGPP;


$tableKeystestmail = array();
$tableKeystestmail[] = "id";
$tdatatestmail[".Keys"] = $tableKeystestmail;

$tdatatestmail[".listFields"] = array();
$tdatatestmail[".listFields"][] = "cid";
$tdatatestmail[".listFields"][] = "userID";
$tdatatestmail[".listFields"][] = "itemID";
$tdatatestmail[".listFields"][] = "currency";
$tdatatestmail[".listFields"][] = "amount";
$tdatatestmail[".listFields"][] = "mode";
$tdatatestmail[".listFields"][] = "payDate";
$tdatatestmail[".listFields"][] = "tx";
$tdatatestmail[".listFields"][] = "receiptNo";
$tdatatestmail[".listFields"][] = "payStatus";
$tdatatestmail[".listFields"][] = "opt";

$tdatatestmail[".hideMobileList"] = array();


$tdatatestmail[".viewFields"] = array();

$tdatatestmail[".addFields"] = array();

$tdatatestmail[".masterListFields"] = array();
$tdatatestmail[".masterListFields"][] = "id";
$tdatatestmail[".masterListFields"][] = "cid";
$tdatatestmail[".masterListFields"][] = "userID";
$tdatatestmail[".masterListFields"][] = "itemID";
$tdatatestmail[".masterListFields"][] = "currency";
$tdatatestmail[".masterListFields"][] = "amount";
$tdatatestmail[".masterListFields"][] = "mode";
$tdatatestmail[".masterListFields"][] = "payDate";
$tdatatestmail[".masterListFields"][] = "tx";
$tdatatestmail[".masterListFields"][] = "receiptNo";
$tdatatestmail[".masterListFields"][] = "payStatus";
$tdatatestmail[".masterListFields"][] = "opt";

$tdatatestmail[".inlineAddFields"] = array();

$tdatatestmail[".editFields"] = array();

$tdatatestmail[".inlineEditFields"] = array();

$tdatatestmail[".exportFields"] = array();

$tdatatestmail[".importFields"] = array();
$tdatatestmail[".importFields"][] = "id";
$tdatatestmail[".importFields"][] = "tx";
$tdatatestmail[".importFields"][] = "currency";
$tdatatestmail[".importFields"][] = "amount";
$tdatatestmail[".importFields"][] = "payStatus";
$tdatatestmail[".importFields"][] = "itemID";
$tdatatestmail[".importFields"][] = "payDate";
$tdatatestmail[".importFields"][] = "mode";
$tdatatestmail[".importFields"][] = "userID";
$tdatatestmail[".importFields"][] = "cid";
$tdatatestmail[".importFields"][] = "opt";
$tdatatestmail[".importFields"][] = "receiptNo";

$tdatatestmail[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
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








	$tdatatestmail["id"] = $fdata;
//	tx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tx";
	$fdata["GoodName"] = "tx";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","tx");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tx";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tx";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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




	$tdatatestmail["tx"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","currency");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "currency";

	
	
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
		$edata["LCType"] = 4;
	
	
		
	$edata["LinkField"] = "fname";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "fname";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdatatestmail["currency"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "amount";

	
	
				$fdata["FieldPermissions"] = true;

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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 45;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatatestmail["amount"] = $fdata;
//	payStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "payStatus";
	$fdata["GoodName"] = "payStatus";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","payStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "payStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payStatus";

	
	
				$fdata["FieldPermissions"] = true;

			
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
		$edata["LCType"] = 3;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Completed";
	$edata["LookupValues"][] = "Receipt";
	$edata["LookupValues"][] = "Invitation";

		$edata["Multiselect"] = true;

	
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




	$tdatatestmail["payStatus"] = $fdata;
//	itemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "itemID";
	$fdata["GoodName"] = "itemID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","itemID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "itemID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "itemID";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 80;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatatestmail["itemID"] = $fdata;
//	payDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "payDate";
	$fdata["GoodName"] = "payDate";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","payDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "payDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatatestmail["payDate"] = $fdata;
//	mode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mode";
	$fdata["GoodName"] = "mode";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","mode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "mode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mode`";

	
	
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
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Online";
	$edata["LookupValues"][] = "Offline";

	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatatestmail["mode"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userID";

	
	
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
	$edata["LookupTable"] = "user";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;
	
	
		
	$edata["LinkField"] = "userID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 60;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatatestmail["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
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


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatatestmail["cid"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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








	$tdatatestmail["opt"] = $fdata;
//	receiptNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "receiptNo";
	$fdata["GoodName"] = "receiptNo";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("testmail","receiptNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "receiptNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "receiptNo";

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatatestmail["receiptNo"] = $fdata;


$tables_data["testmail"]=&$tdatatestmail;
$field_labels["testmail"] = &$fieldLabelstestmail;
$fieldToolTips["testmail"] = &$fieldToolTipstestmail;
$page_titles["testmail"] = &$pageTitlestestmail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["testmail"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["testmail"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_testmail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  tx,  currency,  amount,  payStatus,  itemID,  payDate,  `mode`,  userID,  cid,  id AS opt,  receiptNo";
$proto0["m_strFrom"] = "FROM payments";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strName" => "id",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "testmail";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tx",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto7["m_sql"] = "tx";
$proto7["m_srcTableName"] = "testmail";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto9["m_sql"] = "currency";
$proto9["m_srcTableName"] = "testmail";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto11["m_sql"] = "amount";
$proto11["m_srcTableName"] = "testmail";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "payStatus",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto13["m_sql"] = "payStatus";
$proto13["m_srcTableName"] = "testmail";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "itemID",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto15["m_sql"] = "itemID";
$proto15["m_srcTableName"] = "testmail";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "payDate",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto17["m_sql"] = "payDate";
$proto17["m_srcTableName"] = "testmail";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "mode",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto19["m_sql"] = "`mode`";
$proto19["m_srcTableName"] = "testmail";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto21["m_sql"] = "userID";
$proto21["m_srcTableName"] = "testmail";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto23["m_sql"] = "cid";
$proto23["m_srcTableName"] = "testmail";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto25["m_sql"] = "id";
$proto25["m_srcTableName"] = "testmail";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "receiptNo",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto27["m_sql"] = "receiptNo";
$proto27["m_srcTableName"] = "testmail";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "payments";
$proto30["m_srcTableName"] = "testmail";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "tx";
$proto30["m_columns"][] = "currency";
$proto30["m_columns"][] = "amount";
$proto30["m_columns"][] = "payStatus";
$proto30["m_columns"][] = "itemID";
$proto30["m_columns"][] = "payDate";
$proto30["m_columns"][] = "mode";
$proto30["m_columns"][] = "userID";
$proto30["m_columns"][] = "cid";
$proto30["m_columns"][] = "receiptNo";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "payments";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "testmail";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "payments",
	"m_srcTableName" => "testmail"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="testmail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_testmail = createSqlQuery_testmail();



												

$tdatatestmail[".sqlquery"] = $queryData_testmail;

include_once(getabspath("include/testmail_events.php"));
$tableEvents["testmail"] = new eventclass_testmail;
$tdatatestmail[".hasEvents"] = true;

?>