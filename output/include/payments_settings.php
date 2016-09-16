<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapayments = array();
	$tdatapayments[".truncateText"] = true;
	$tdatapayments[".NumberOfChars"] = 80;
	$tdatapayments[".ShortName"] = "payments";
	$tdatapayments[".OwnerID"] = "";
	$tdatapayments[".OriginalTable"] = "payments";

//	field labels
$fieldLabelspayments = array();
$fieldToolTipspayments = array();
$pageTitlespayments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspayments["English"] = array();
	$fieldToolTipspayments["English"] = array();
	$pageTitlespayments["English"] = array();
	$fieldLabelspayments["English"]["id"] = "Id";
	$fieldToolTipspayments["English"]["id"] = "";
	$fieldLabelspayments["English"]["tx"] = "Transaction ID";
	$fieldToolTipspayments["English"]["tx"] = "";
	$fieldLabelspayments["English"]["currency"] = "Currency";
	$fieldToolTipspayments["English"]["currency"] = "";
	$fieldLabelspayments["English"]["amount"] = "Amount";
	$fieldToolTipspayments["English"]["amount"] = "";
	$fieldLabelspayments["English"]["payStatus"] = "Status";
	$fieldToolTipspayments["English"]["payStatus"] = "";
	$fieldLabelspayments["English"]["itemID"] = "Item ID";
	$fieldToolTipspayments["English"]["itemID"] = "";
	$fieldLabelspayments["English"]["payDate"] = "Pay Date";
	$fieldToolTipspayments["English"]["payDate"] = "";
	$fieldLabelspayments["English"]["mode"] = "Mode";
	$fieldToolTipspayments["English"]["mode"] = "";
	$fieldLabelspayments["English"]["userID"] = "Client";
	$fieldToolTipspayments["English"]["userID"] = "";
	$fieldLabelspayments["English"]["cid"] = "Conference";
	$fieldToolTipspayments["English"]["cid"] = "";
	$fieldLabelspayments["English"]["opt"] = "Cetak";
	$fieldToolTipspayments["English"]["opt"] = "";
	$fieldLabelspayments["English"]["receiptNo"] = "Receipt No";
	$fieldToolTipspayments["English"]["receiptNo"] = "";
	$fieldLabelspayments["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipspayments["English"]["paperRef"] = "";
	$fieldLabelspayments["English"]["cname"] = "Cname";
	$fieldToolTipspayments["English"]["cname"] = "";
	$fieldLabelspayments["English"]["cnameShort"] = "Cname Short";
	$fieldToolTipspayments["English"]["cnameShort"] = "";
	$fieldLabelspayments["English"]["cfid"] = "Cfid";
	$fieldToolTipspayments["English"]["cfid"] = "";
	$fieldLabelspayments["English"]["item"] = "Item";
	$fieldToolTipspayments["English"]["item"] = "";
	$fieldLabelspayments["English"]["fullName"] = "Full Name";
	$fieldToolTipspayments["English"]["fullName"] = "";
	$fieldLabelspayments["English"]["email"] = "Email";
	$fieldToolTipspayments["English"]["email"] = "";
	if (count($fieldToolTipspayments["English"]))
		$tdatapayments[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspayments[""] = array();
	$fieldToolTipspayments[""] = array();
	$pageTitlespayments[""] = array();
	if (count($fieldToolTipspayments[""]))
		$tdatapayments[".isUseToolTips"] = true;
}


	$tdatapayments[".NCSearch"] = true;



$tdatapayments[".shortTableName"] = "payments";
$tdatapayments[".nSecOptions"] = 0;
$tdatapayments[".recsPerRowList"] = 1;
$tdatapayments[".recsPerRowPrint"] = 1;
$tdatapayments[".mainTableOwnerID"] = "";
$tdatapayments[".moveNext"] = 1;
$tdatapayments[".entityType"] = 0;

$tdatapayments[".strOriginalTableName"] = "payments";




$tdatapayments[".showAddInPopup"] = false;

$tdatapayments[".showEditInPopup"] = false;

$tdatapayments[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapayments[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapayments[".fieldsForRegister"] = array();

$tdatapayments[".listAjax"] = false;

	$tdatapayments[".audit"] = false;

	$tdatapayments[".locking"] = false;



$tdatapayments[".list"] = true;

$tdatapayments[".inlineEdit"] = true;
$tdatapayments[".inlineAdd"] = true;


$tdatapayments[".exportTo"] = true;


$tdatapayments[".delete"] = true;

$tdatapayments[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapayments[".searchSaving"] = false;
//

$tdatapayments[".showSearchPanel"] = true;
		$tdatapayments[".flexibleSearch"] = true;

if (isMobile())
	$tdatapayments[".isUseAjaxSuggest"] = false;
else
	$tdatapayments[".isUseAjaxSuggest"] = true;

$tdatapayments[".rowHighlite"] = true;


								
$tdatapayments[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapayments[".isUseTimeForSearch"] = false;





$tdatapayments[".allSearchFields"] = array();
$tdatapayments[".filterFields"] = array();
$tdatapayments[".requiredSearchFields"] = array();

$tdatapayments[".allSearchFields"][] = "cid";
	$tdatapayments[".allSearchFields"][] = "userID";
	$tdatapayments[".allSearchFields"][] = "itemID";
	$tdatapayments[".allSearchFields"][] = "currency";
	$tdatapayments[".allSearchFields"][] = "amount";
	$tdatapayments[".allSearchFields"][] = "mode";
	$tdatapayments[".allSearchFields"][] = "payDate";
	$tdatapayments[".allSearchFields"][] = "tx";
	$tdatapayments[".allSearchFields"][] = "receiptNo";
	$tdatapayments[".allSearchFields"][] = "payStatus";
	

$tdatapayments[".googleLikeFields"] = array();
$tdatapayments[".googleLikeFields"][] = "tx";
$tdatapayments[".googleLikeFields"][] = "currency";
$tdatapayments[".googleLikeFields"][] = "amount";
$tdatapayments[".googleLikeFields"][] = "itemID";
$tdatapayments[".googleLikeFields"][] = "payDate";
$tdatapayments[".googleLikeFields"][] = "mode";
$tdatapayments[".googleLikeFields"][] = "userID";
$tdatapayments[".googleLikeFields"][] = "cid";
$tdatapayments[".googleLikeFields"][] = "receiptNo";
$tdatapayments[".googleLikeFields"][] = "paperRef";
$tdatapayments[".googleLikeFields"][] = "cname";
$tdatapayments[".googleLikeFields"][] = "cnameShort";
$tdatapayments[".googleLikeFields"][] = "cfid";
$tdatapayments[".googleLikeFields"][] = "item";
$tdatapayments[".googleLikeFields"][] = "fullName";
$tdatapayments[".googleLikeFields"][] = "email";

$tdatapayments[".panelSearchFields"] = array();
$tdatapayments[".searchPanelOptions"] = array();
$tdatapayments[".panelSearchFields"][] = "cid";
	$tdatapayments[".panelSearchFields"][] = "userID";
	$tdatapayments[".panelSearchFields"][] = "itemID";
	$tdatapayments[".panelSearchFields"][] = "currency";
	$tdatapayments[".panelSearchFields"][] = "amount";
	$tdatapayments[".panelSearchFields"][] = "mode";
	$tdatapayments[".panelSearchFields"][] = "payDate";
	$tdatapayments[".panelSearchFields"][] = "tx";
	$tdatapayments[".panelSearchFields"][] = "receiptNo";
	
$tdatapayments[".advSearchFields"] = array();
$tdatapayments[".advSearchFields"][] = "cid";
$tdatapayments[".advSearchFields"][] = "userID";
$tdatapayments[".advSearchFields"][] = "itemID";
$tdatapayments[".advSearchFields"][] = "currency";
$tdatapayments[".advSearchFields"][] = "amount";
$tdatapayments[".advSearchFields"][] = "mode";
$tdatapayments[".advSearchFields"][] = "payDate";
$tdatapayments[".advSearchFields"][] = "tx";
$tdatapayments[".advSearchFields"][] = "receiptNo";
$tdatapayments[".advSearchFields"][] = "payStatus";

$tdatapayments[".tableType"] = "list";

$tdatapayments[".printerPageOrientation"] = 0;
$tdatapayments[".nPrinterPageScale"] = 100;

$tdatapayments[".nPrinterSplitRecords"] = 40;

$tdatapayments[".nPrinterPDFSplitRecords"] = 40;



$tdatapayments[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapayments[".pageSize"] = 20;

$tdatapayments[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY payments.id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapayments[".strOrderBy"] = $tstrOrderBy;

$tdatapayments[".orderindexes"] = array();
$tdatapayments[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "payments.id");

$tdatapayments[".sqlHead"] = "SELECT payments.id,  payments.tx,  payments.currency,  payments.amount,  payments.payStatus,  payments.itemID,  payments.payDate,  payments.`mode`,  payments.userID,  payments.cid,  payments.id AS opt,  payments.receiptNo,  paper.paperRef,  conference.cname,  conference.cnameShort,  participate.cfid,  confees.item,  `user`.fullName,  `user`.email";
$tdatapayments[".sqlFrom"] = "FROM payments  LEFT OUTER JOIN paper ON payments.itemID = paper.paperRef  INNER JOIN conference ON payments.cid = conference.cid  LEFT OUTER JOIN participate ON payments.userID = participate.userID  LEFT OUTER JOIN confees ON participate.cfid = confees.cfid  INNER JOIN `user` ON payments.userID = `user`.userID";
$tdatapayments[".sqlWhereExpr"] = "";
$tdatapayments[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapayments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapayments[".arrGroupsPerPage"] = $arrGPP;


$tableKeyspayments = array();
$tableKeyspayments[] = "id";
$tdatapayments[".Keys"] = $tableKeyspayments;

$tdatapayments[".listFields"] = array();
$tdatapayments[".listFields"][] = "cid";
$tdatapayments[".listFields"][] = "userID";
$tdatapayments[".listFields"][] = "itemID";
$tdatapayments[".listFields"][] = "currency";
$tdatapayments[".listFields"][] = "amount";
$tdatapayments[".listFields"][] = "mode";
$tdatapayments[".listFields"][] = "payDate";
$tdatapayments[".listFields"][] = "tx";
$tdatapayments[".listFields"][] = "receiptNo";
$tdatapayments[".listFields"][] = "payStatus";
$tdatapayments[".listFields"][] = "opt";

$tdatapayments[".hideMobileList"] = array();


$tdatapayments[".viewFields"] = array();

$tdatapayments[".addFields"] = array();

$tdatapayments[".masterListFields"] = array();
$tdatapayments[".masterListFields"][] = "id";
$tdatapayments[".masterListFields"][] = "fullName";
$tdatapayments[".masterListFields"][] = "item";
$tdatapayments[".masterListFields"][] = "cfid";
$tdatapayments[".masterListFields"][] = "cnameShort";
$tdatapayments[".masterListFields"][] = "cname";
$tdatapayments[".masterListFields"][] = "paperRef";
$tdatapayments[".masterListFields"][] = "email";
$tdatapayments[".masterListFields"][] = "cid";
$tdatapayments[".masterListFields"][] = "userID";
$tdatapayments[".masterListFields"][] = "itemID";
$tdatapayments[".masterListFields"][] = "currency";
$tdatapayments[".masterListFields"][] = "amount";
$tdatapayments[".masterListFields"][] = "mode";
$tdatapayments[".masterListFields"][] = "payDate";
$tdatapayments[".masterListFields"][] = "tx";
$tdatapayments[".masterListFields"][] = "receiptNo";
$tdatapayments[".masterListFields"][] = "payStatus";
$tdatapayments[".masterListFields"][] = "opt";

$tdatapayments[".inlineAddFields"] = array();
$tdatapayments[".inlineAddFields"][] = "cid";
$tdatapayments[".inlineAddFields"][] = "userID";
$tdatapayments[".inlineAddFields"][] = "itemID";
$tdatapayments[".inlineAddFields"][] = "currency";
$tdatapayments[".inlineAddFields"][] = "amount";
$tdatapayments[".inlineAddFields"][] = "mode";
$tdatapayments[".inlineAddFields"][] = "payDate";
$tdatapayments[".inlineAddFields"][] = "tx";
$tdatapayments[".inlineAddFields"][] = "receiptNo";
$tdatapayments[".inlineAddFields"][] = "payStatus";

$tdatapayments[".editFields"] = array();

$tdatapayments[".inlineEditFields"] = array();
$tdatapayments[".inlineEditFields"][] = "cid";
$tdatapayments[".inlineEditFields"][] = "userID";
$tdatapayments[".inlineEditFields"][] = "itemID";
$tdatapayments[".inlineEditFields"][] = "currency";
$tdatapayments[".inlineEditFields"][] = "amount";
$tdatapayments[".inlineEditFields"][] = "mode";
$tdatapayments[".inlineEditFields"][] = "payDate";
$tdatapayments[".inlineEditFields"][] = "tx";
$tdatapayments[".inlineEditFields"][] = "receiptNo";
$tdatapayments[".inlineEditFields"][] = "payStatus";

$tdatapayments[".exportFields"] = array();
$tdatapayments[".exportFields"][] = "cid";
$tdatapayments[".exportFields"][] = "userID";
$tdatapayments[".exportFields"][] = "itemID";
$tdatapayments[".exportFields"][] = "currency";
$tdatapayments[".exportFields"][] = "amount";
$tdatapayments[".exportFields"][] = "mode";
$tdatapayments[".exportFields"][] = "payDate";
$tdatapayments[".exportFields"][] = "tx";
$tdatapayments[".exportFields"][] = "receiptNo";
$tdatapayments[".exportFields"][] = "payStatus";
$tdatapayments[".exportFields"][] = "paperRef";
$tdatapayments[".exportFields"][] = "email";

$tdatapayments[".importFields"] = array();
$tdatapayments[".importFields"][] = "id";
$tdatapayments[".importFields"][] = "tx";
$tdatapayments[".importFields"][] = "currency";
$tdatapayments[".importFields"][] = "amount";
$tdatapayments[".importFields"][] = "payStatus";
$tdatapayments[".importFields"][] = "itemID";
$tdatapayments[".importFields"][] = "payDate";
$tdatapayments[".importFields"][] = "mode";
$tdatapayments[".importFields"][] = "userID";
$tdatapayments[".importFields"][] = "cid";
$tdatapayments[".importFields"][] = "opt";
$tdatapayments[".importFields"][] = "receiptNo";
$tdatapayments[".importFields"][] = "paperRef";
$tdatapayments[".importFields"][] = "cname";
$tdatapayments[".importFields"][] = "cnameShort";
$tdatapayments[".importFields"][] = "cfid";
$tdatapayments[".importFields"][] = "item";
$tdatapayments[".importFields"][] = "fullName";
$tdatapayments[".importFields"][] = "email";

$tdatapayments[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.id";

	
	
			
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








	$tdatapayments["id"] = $fdata;
//	tx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tx";
	$fdata["GoodName"] = "tx";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","tx");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tx";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.tx";

	
	
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




	$tdatapayments["tx"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","currency");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.currency";

	
	
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




	$tdatapayments["currency"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.amount";

	
	
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




	$tdatapayments["amount"] = $fdata;
//	payStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "payStatus";
	$fdata["GoodName"] = "payStatus";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","payStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "payStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.payStatus";

	
	
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




	$tdatapayments["payStatus"] = $fdata;
//	itemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "itemID";
	$fdata["GoodName"] = "itemID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","itemID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "itemID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.itemID";

	
	
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




	$tdatapayments["itemID"] = $fdata;
//	payDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "payDate";
	$fdata["GoodName"] = "payDate";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","payDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "payDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.payDate";

	
	
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




	$tdatapayments["payDate"] = $fdata;
//	mode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mode";
	$fdata["GoodName"] = "mode";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","mode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.`mode`";

	
	
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




	$tdatapayments["mode"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.userID";

	
	
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




	$tdatapayments["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.cid";

	
	
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




	$tdatapayments["cid"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.id";

	
	
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








	$tdatapayments["opt"] = $fdata;
//	receiptNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "receiptNo";
	$fdata["GoodName"] = "receiptNo";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("payments","receiptNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "receiptNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.receiptNo";

	
	
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




	$tdatapayments["receiptNo"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("payments","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paperRef";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperRef";

	
	
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
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayments["paperRef"] = $fdata;
//	cname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cname";
	$fdata["GoodName"] = "cname";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("payments","cname");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "cname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conference.cname";

	
	
			
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayments["cname"] = $fdata;
//	cnameShort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cnameShort";
	$fdata["GoodName"] = "cnameShort";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("payments","cnameShort");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "cnameShort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conference.cnameShort";

	
	
			
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayments["cnameShort"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("payments","cfid");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "cfid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participate.cfid";

	
	
			
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








	$tdatapayments["cfid"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("payments","item");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confees.item";

	
	
			
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayments["item"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("payments","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "fullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.fullName";

	
	
			
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayments["fullName"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("payments","email");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.email";

	
	
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
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapayments["email"] = $fdata;


$tables_data["payments"]=&$tdatapayments;
$field_labels["payments"] = &$fieldLabelspayments;
$fieldToolTips["payments"] = &$fieldToolTipspayments;
$page_titles["payments"] = &$pageTitlespayments;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["payments"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["payments"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_payments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "payments.id,  payments.tx,  payments.currency,  payments.amount,  payments.payStatus,  payments.itemID,  payments.payDate,  payments.`mode`,  payments.userID,  payments.cid,  payments.id AS opt,  payments.receiptNo,  paper.paperRef,  conference.cname,  conference.cnameShort,  participate.cfid,  confees.item,  `user`.fullName,  `user`.email";
$proto0["m_strFrom"] = "FROM payments  LEFT OUTER JOIN paper ON payments.itemID = paper.paperRef  INNER JOIN conference ON payments.cid = conference.cid  LEFT OUTER JOIN participate ON payments.userID = participate.userID  LEFT OUTER JOIN confees ON participate.cfid = confees.cfid  INNER JOIN `user` ON payments.userID = `user`.userID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY payments.id DESC";
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
	"m_srcTableName" => "payments"
));

$proto5["m_sql"] = "payments.id";
$proto5["m_srcTableName"] = "payments";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tx",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto7["m_sql"] = "payments.tx";
$proto7["m_srcTableName"] = "payments";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto9["m_sql"] = "payments.currency";
$proto9["m_srcTableName"] = "payments";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto11["m_sql"] = "payments.amount";
$proto11["m_srcTableName"] = "payments";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "payStatus",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto13["m_sql"] = "payments.payStatus";
$proto13["m_srcTableName"] = "payments";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "itemID",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto15["m_sql"] = "payments.itemID";
$proto15["m_srcTableName"] = "payments";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "payDate",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto17["m_sql"] = "payments.payDate";
$proto17["m_srcTableName"] = "payments";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "mode",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto19["m_sql"] = "payments.`mode`";
$proto19["m_srcTableName"] = "payments";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto21["m_sql"] = "payments.userID";
$proto21["m_srcTableName"] = "payments";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto23["m_sql"] = "payments.cid";
$proto23["m_srcTableName"] = "payments";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto25["m_sql"] = "payments.id";
$proto25["m_srcTableName"] = "payments";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "receiptNo",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto27["m_sql"] = "payments.receiptNo";
$proto27["m_srcTableName"] = "payments";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "payments"
));

$proto29["m_sql"] = "paper.paperRef";
$proto29["m_srcTableName"] = "payments";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "cname",
	"m_strTable" => "conference",
	"m_srcTableName" => "payments"
));

$proto31["m_sql"] = "conference.cname";
$proto31["m_srcTableName"] = "payments";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "cnameShort",
	"m_strTable" => "conference",
	"m_srcTableName" => "payments"
));

$proto33["m_sql"] = "conference.cnameShort";
$proto33["m_srcTableName"] = "payments";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "payments"
));

$proto35["m_sql"] = "participate.cfid";
$proto35["m_srcTableName"] = "payments";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "payments"
));

$proto37["m_sql"] = "confees.item";
$proto37["m_srcTableName"] = "payments";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "payments"
));

$proto39["m_sql"] = "`user`.fullName";
$proto39["m_srcTableName"] = "payments";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "payments"
));

$proto41["m_sql"] = "`user`.email";
$proto41["m_srcTableName"] = "payments";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "payments";
$proto44["m_srcTableName"] = "payments";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "id";
$proto44["m_columns"][] = "tx";
$proto44["m_columns"][] = "currency";
$proto44["m_columns"][] = "amount";
$proto44["m_columns"][] = "payStatus";
$proto44["m_columns"][] = "itemID";
$proto44["m_columns"][] = "payDate";
$proto44["m_columns"][] = "mode";
$proto44["m_columns"][] = "userID";
$proto44["m_columns"][] = "cid";
$proto44["m_columns"][] = "receiptNo";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "payments";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "payments";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto47=array();
$proto47["m_link"] = "SQLL_LEFTJOIN";
			$proto48=array();
$proto48["m_strName"] = "paper";
$proto48["m_srcTableName"] = "payments";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "paperID";
$proto48["m_columns"][] = "paperRef";
$proto48["m_columns"][] = "userID";
$proto48["m_columns"][] = "cid";
$proto48["m_columns"][] = "multiAuthor";
$proto48["m_columns"][] = "funded";
$proto48["m_columns"][] = "date_submit";
$proto48["m_columns"][] = "title";
$proto48["m_columns"][] = "abstract";
$proto48["m_columns"][] = "paperStatus";
$proto48["m_columns"][] = "fullPaper";
$proto48["m_columns"][] = "paymentStatus";
$proto48["m_columns"][] = "slotDate";
$proto48["m_columns"][] = "slotTime";
$proto48["m_columns"][] = "slotRoom";
$proto48["m_columns"][] = "slotTurn";
$proto48["m_columns"][] = "invite";
$proto48["m_columns"][] = "note";
$proto48["m_columns"][] = "ppt";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "LEFT OUTER JOIN paper ON payments.itemID = paper.paperRef";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "payments";
$proto49=array();
$proto49["m_sql"] = "payments.itemID = paper.paperRef";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "itemID",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= paper.paperRef";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_INNERJOIN";
			$proto52=array();
$proto52["m_strName"] = "conference";
$proto52["m_srcTableName"] = "payments";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "cid";
$proto52["m_columns"][] = "cname";
$proto52["m_columns"][] = "cnameShort";
$proto52["m_columns"][] = "cnameCode";
$proto52["m_columns"][] = "sDate";
$proto52["m_columns"][] = "eDate";
$proto52["m_columns"][] = "cTime";
$proto52["m_columns"][] = "location";
$proto52["m_columns"][] = "address";
$proto52["m_columns"][] = "city";
$proto52["m_columns"][] = "country";
$proto52["m_columns"][] = "slogan";
$proto52["m_columns"][] = "about";
$proto52["m_columns"][] = "importantDate";
$proto52["m_columns"][] = "subTheme";
$proto52["m_columns"][] = "venueInfo";
$proto52["m_columns"][] = "venueAttract";
$proto52["m_columns"][] = "venueMap";
$proto52["m_columns"][] = "venuePhoto";
$proto52["m_columns"][] = "accomodation";
$proto52["m_columns"][] = "visa";
$proto52["m_columns"][] = "cstatus";
$proto52["m_columns"][] = "gallery";
$proto52["m_columns"][] = "proceeding";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "INNER JOIN conference ON payments.cid = conference.cid";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "payments";
$proto53=array();
$proto53["m_sql"] = "payments.cid = conference.cid";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= conference.cid";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_LEFTJOIN";
			$proto56=array();
$proto56["m_strName"] = "participate";
$proto56["m_srcTableName"] = "payments";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "parID";
$proto56["m_columns"][] = "cid";
$proto56["m_columns"][] = "userID";
$proto56["m_columns"][] = "cfid";
$proto56["m_columns"][] = "confirm";
$proto56["m_columns"][] = "paperCount";
$proto56["m_columns"][] = "listenerRef";
$proto56["m_columns"][] = "note";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "LEFT OUTER JOIN participate ON payments.userID = participate.userID";
$proto55["m_alias"] = "";
$proto55["m_srcTableName"] = "payments";
$proto57=array();
$proto57["m_sql"] = "payments.userID = participate.userID";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "= participate.userID";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
												$proto59=array();
$proto59["m_link"] = "SQLL_LEFTJOIN";
			$proto60=array();
$proto60["m_strName"] = "confees";
$proto60["m_srcTableName"] = "payments";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "cfid";
$proto60["m_columns"][] = "cid";
$proto60["m_columns"][] = "item";
$proto60["m_columns"][] = "priceNormal";
$proto60["m_columns"][] = "datelineNormal";
$proto60["m_columns"][] = "priceEarly";
$proto60["m_columns"][] = "datelineEarly";
$proto60["m_columns"][] = "local";
$proto60["m_columns"][] = "currency";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "LEFT OUTER JOIN confees ON participate.cfid = confees.cfid";
$proto59["m_alias"] = "";
$proto59["m_srcTableName"] = "payments";
$proto61=array();
$proto61["m_sql"] = "participate.cfid = confees.cfid";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "payments"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= confees.cfid";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
												$proto63=array();
$proto63["m_link"] = "SQLL_INNERJOIN";
			$proto64=array();
$proto64["m_strName"] = "user";
$proto64["m_srcTableName"] = "payments";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "userID";
$proto64["m_columns"][] = "email";
$proto64["m_columns"][] = "password";
$proto64["m_columns"][] = "fullName";
$proto64["m_columns"][] = "gender";
$proto64["m_columns"][] = "address";
$proto64["m_columns"][] = "postal";
$proto64["m_columns"][] = "city";
$proto64["m_columns"][] = "state";
$proto64["m_columns"][] = "country";
$proto64["m_columns"][] = "tel";
$proto64["m_columns"][] = "fax";
$proto64["m_columns"][] = "institution";
$proto64["m_columns"][] = "faculty";
$proto64["m_columns"][] = "department";
$proto64["m_columns"][] = "research";
$proto64["m_columns"][] = "student";
$proto64["m_columns"][] = "role";
$proto64["m_columns"][] = "note";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "INNER JOIN `user` ON payments.userID = `user`.userID";
$proto63["m_alias"] = "";
$proto63["m_srcTableName"] = "payments";
$proto65=array();
$proto65["m_sql"] = "payments.userID = `user`.userID";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "= `user`.userID";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "payments",
	"m_srcTableName" => "payments"
));

$proto67["m_column"]=$obj;
$proto67["m_bAsc"] = 0;
$proto67["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto67);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="payments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_payments = createSqlQuery_payments();



																			

$tdatapayments[".sqlquery"] = $queryData_payments;

include_once(getabspath("include/payments_events.php"));
$tableEvents["payments"] = new eventclass_payments;
$tdatapayments[".hasEvents"] = true;

?>