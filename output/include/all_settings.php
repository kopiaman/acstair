<?php
require_once(getabspath("classes/cipherer.php"));




$tdataall = array();
	$tdataall[".truncateText"] = true;
	$tdataall[".NumberOfChars"] = 80;
	$tdataall[".ShortName"] = "all";
	$tdataall[".OwnerID"] = "";
	$tdataall[".OriginalTable"] = "congallery";

//	field labels
$fieldLabelsall = array();
$fieldToolTipsall = array();
$pageTitlesall = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsall["English"] = array();
	$fieldToolTipsall["English"] = array();
	$pageTitlesall["English"] = array();
	$fieldLabelsall["English"]["cid"] = "Cid";
	$fieldToolTipsall["English"]["cid"] = "";
	$fieldLabelsall["English"]["id"] = "Id";
	$fieldToolTipsall["English"]["id"] = "";
	$fieldLabelsall["English"]["tx"] = "Tx";
	$fieldToolTipsall["English"]["tx"] = "";
	$fieldLabelsall["English"]["currency"] = "Currency";
	$fieldToolTipsall["English"]["currency"] = "";
	$fieldLabelsall["English"]["amount"] = "Amount";
	$fieldToolTipsall["English"]["amount"] = "";
	$fieldLabelsall["English"]["payStatus"] = "Pay Status";
	$fieldToolTipsall["English"]["payStatus"] = "";
	$fieldLabelsall["English"]["itemID"] = "Item ID";
	$fieldToolTipsall["English"]["itemID"] = "";
	$fieldLabelsall["English"]["payDate"] = "Pay Date";
	$fieldToolTipsall["English"]["payDate"] = "";
	$fieldLabelsall["English"]["mode"] = "Mode";
	$fieldToolTipsall["English"]["mode"] = "";
	$fieldLabelsall["English"]["userID"] = "User ID";
	$fieldToolTipsall["English"]["userID"] = "";
	$fieldLabelsall["English"]["receiptNo"] = "Receipt No";
	$fieldToolTipsall["English"]["receiptNo"] = "";
	$fieldLabelsall["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsall["English"]["paperRef"] = "";
	$fieldLabelsall["English"]["cnameShort"] = "Cname Short";
	$fieldToolTipsall["English"]["cnameShort"] = "";
	$fieldLabelsall["English"]["item"] = "Item";
	$fieldToolTipsall["English"]["item"] = "";
	$fieldLabelsall["English"]["fullName"] = "Full Name";
	$fieldToolTipsall["English"]["fullName"] = "";
	$fieldLabelsall["English"]["email"] = "Email";
	$fieldToolTipsall["English"]["email"] = "";
	if (count($fieldToolTipsall["English"]))
		$tdataall[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsall[""] = array();
	$fieldToolTipsall[""] = array();
	$pageTitlesall[""] = array();
	if (count($fieldToolTipsall[""]))
		$tdataall[".isUseToolTips"] = true;
}


	$tdataall[".NCSearch"] = true;



$tdataall[".shortTableName"] = "all";
$tdataall[".nSecOptions"] = 0;
$tdataall[".recsPerRowList"] = 3;
$tdataall[".recsPerRowPrint"] = 1;
$tdataall[".mainTableOwnerID"] = "";
$tdataall[".moveNext"] = 1;
$tdataall[".entityType"] = 1;

$tdataall[".strOriginalTableName"] = "congallery";




$tdataall[".showAddInPopup"] = false;

$tdataall[".showEditInPopup"] = false;

$tdataall[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataall[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataall[".fieldsForRegister"] = array();

$tdataall[".listAjax"] = false;

	$tdataall[".audit"] = false;

	$tdataall[".locking"] = false;



$tdataall[".list"] = true;

$tdataall[".inlineAdd"] = true;





$tdataall[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataall[".searchSaving"] = false;
//

$tdataall[".showSearchPanel"] = true;
		$tdataall[".flexibleSearch"] = true;

if (isMobile())
	$tdataall[".isUseAjaxSuggest"] = false;
else
	$tdataall[".isUseAjaxSuggest"] = true;

$tdataall[".rowHighlite"] = true;


								
$tdataall[".addPageEvents"] = false;

// use timepicker for search panel
$tdataall[".isUseTimeForSearch"] = false;





$tdataall[".allSearchFields"] = array();
$tdataall[".filterFields"] = array();
$tdataall[".requiredSearchFields"] = array();

$tdataall[".allSearchFields"][] = "id";
	$tdataall[".allSearchFields"][] = "tx";
	$tdataall[".allSearchFields"][] = "currency";
	$tdataall[".allSearchFields"][] = "amount";
	$tdataall[".allSearchFields"][] = "payStatus";
	$tdataall[".allSearchFields"][] = "itemID";
	$tdataall[".allSearchFields"][] = "payDate";
	$tdataall[".allSearchFields"][] = "mode";
	$tdataall[".allSearchFields"][] = "userID";
	$tdataall[".allSearchFields"][] = "cid";
	$tdataall[".allSearchFields"][] = "receiptNo";
	$tdataall[".allSearchFields"][] = "paperRef";
	$tdataall[".allSearchFields"][] = "cnameShort";
	$tdataall[".allSearchFields"][] = "item";
	$tdataall[".allSearchFields"][] = "fullName";
	$tdataall[".allSearchFields"][] = "email";
	

$tdataall[".googleLikeFields"] = array();
$tdataall[".googleLikeFields"][] = "id";
$tdataall[".googleLikeFields"][] = "tx";
$tdataall[".googleLikeFields"][] = "currency";
$tdataall[".googleLikeFields"][] = "amount";
$tdataall[".googleLikeFields"][] = "payStatus";
$tdataall[".googleLikeFields"][] = "itemID";
$tdataall[".googleLikeFields"][] = "payDate";
$tdataall[".googleLikeFields"][] = "mode";
$tdataall[".googleLikeFields"][] = "userID";
$tdataall[".googleLikeFields"][] = "cid";
$tdataall[".googleLikeFields"][] = "receiptNo";
$tdataall[".googleLikeFields"][] = "paperRef";
$tdataall[".googleLikeFields"][] = "cnameShort";
$tdataall[".googleLikeFields"][] = "item";
$tdataall[".googleLikeFields"][] = "fullName";
$tdataall[".googleLikeFields"][] = "email";


$tdataall[".advSearchFields"] = array();
$tdataall[".advSearchFields"][] = "id";
$tdataall[".advSearchFields"][] = "tx";
$tdataall[".advSearchFields"][] = "currency";
$tdataall[".advSearchFields"][] = "amount";
$tdataall[".advSearchFields"][] = "payStatus";
$tdataall[".advSearchFields"][] = "itemID";
$tdataall[".advSearchFields"][] = "payDate";
$tdataall[".advSearchFields"][] = "mode";
$tdataall[".advSearchFields"][] = "userID";
$tdataall[".advSearchFields"][] = "cid";
$tdataall[".advSearchFields"][] = "receiptNo";
$tdataall[".advSearchFields"][] = "paperRef";
$tdataall[".advSearchFields"][] = "cnameShort";
$tdataall[".advSearchFields"][] = "item";
$tdataall[".advSearchFields"][] = "fullName";
$tdataall[".advSearchFields"][] = "email";

$tdataall[".tableType"] = "list";

$tdataall[".printerPageOrientation"] = 0;
$tdataall[".nPrinterPageScale"] = 100;

$tdataall[".nPrinterSplitRecords"] = 40;

$tdataall[".nPrinterPDFSplitRecords"] = 40;



$tdataall[".geocodingEnabled"] = false;





$tdataall[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdataall[".pageSize"] = 20;

$tdataall[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataall[".strOrderBy"] = $tstrOrderBy;

$tdataall[".orderindexes"] = array();

$tdataall[".sqlHead"] = "SELECT payments.id,  payments.tx,  payments.currency,  payments.amount,  payments.payStatus,  payments.itemID,  payments.payDate,  payments.`mode`,  payments.userID,  payments.cid,  payments.receiptNo,  paper.paperRef,  conference.cnameShort,  confees.item,  `user`.fullName,  `user`.email";
$tdataall[".sqlFrom"] = "FROM payments  LEFT OUTER JOIN paper ON payments.itemID = paper.paperRef  INNER JOIN conference ON payments.cid = conference.cid  LEFT OUTER JOIN participate ON payments.userID = participate.userID  LEFT OUTER JOIN confees ON participate.cfid = confees.cfid  INNER JOIN `user` ON payments.userID = `user`.userID";
$tdataall[".sqlWhereExpr"] = "payments.id =35";
$tdataall[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataall[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataall[".arrGroupsPerPage"] = $arrGPP;


$tableKeysall = array();
$tdataall[".Keys"] = $tableKeysall;

$tdataall[".listFields"] = array();
$tdataall[".listFields"][] = "id";
$tdataall[".listFields"][] = "tx";
$tdataall[".listFields"][] = "currency";
$tdataall[".listFields"][] = "amount";
$tdataall[".listFields"][] = "payStatus";
$tdataall[".listFields"][] = "itemID";
$tdataall[".listFields"][] = "payDate";
$tdataall[".listFields"][] = "mode";
$tdataall[".listFields"][] = "userID";
$tdataall[".listFields"][] = "cid";
$tdataall[".listFields"][] = "receiptNo";
$tdataall[".listFields"][] = "paperRef";
$tdataall[".listFields"][] = "cnameShort";
$tdataall[".listFields"][] = "item";
$tdataall[".listFields"][] = "fullName";
$tdataall[".listFields"][] = "email";

$tdataall[".hideMobileList"] = array();


$tdataall[".viewFields"] = array();
$tdataall[".viewFields"][] = "id";
$tdataall[".viewFields"][] = "tx";
$tdataall[".viewFields"][] = "currency";
$tdataall[".viewFields"][] = "amount";
$tdataall[".viewFields"][] = "payStatus";
$tdataall[".viewFields"][] = "itemID";
$tdataall[".viewFields"][] = "payDate";
$tdataall[".viewFields"][] = "mode";
$tdataall[".viewFields"][] = "userID";
$tdataall[".viewFields"][] = "cid";
$tdataall[".viewFields"][] = "receiptNo";
$tdataall[".viewFields"][] = "paperRef";
$tdataall[".viewFields"][] = "cnameShort";
$tdataall[".viewFields"][] = "item";
$tdataall[".viewFields"][] = "fullName";
$tdataall[".viewFields"][] = "email";

$tdataall[".addFields"] = array();
$tdataall[".addFields"][] = "cid";

$tdataall[".masterListFields"] = array();
$tdataall[".masterListFields"][] = "id";
$tdataall[".masterListFields"][] = "tx";
$tdataall[".masterListFields"][] = "currency";
$tdataall[".masterListFields"][] = "amount";
$tdataall[".masterListFields"][] = "payStatus";
$tdataall[".masterListFields"][] = "itemID";
$tdataall[".masterListFields"][] = "payDate";
$tdataall[".masterListFields"][] = "mode";
$tdataall[".masterListFields"][] = "userID";
$tdataall[".masterListFields"][] = "cid";
$tdataall[".masterListFields"][] = "receiptNo";
$tdataall[".masterListFields"][] = "paperRef";
$tdataall[".masterListFields"][] = "cnameShort";
$tdataall[".masterListFields"][] = "item";
$tdataall[".masterListFields"][] = "fullName";
$tdataall[".masterListFields"][] = "email";

$tdataall[".inlineAddFields"] = array();
$tdataall[".inlineAddFields"][] = "id";
$tdataall[".inlineAddFields"][] = "tx";
$tdataall[".inlineAddFields"][] = "currency";
$tdataall[".inlineAddFields"][] = "amount";
$tdataall[".inlineAddFields"][] = "payStatus";
$tdataall[".inlineAddFields"][] = "itemID";
$tdataall[".inlineAddFields"][] = "payDate";
$tdataall[".inlineAddFields"][] = "mode";
$tdataall[".inlineAddFields"][] = "userID";
$tdataall[".inlineAddFields"][] = "cid";
$tdataall[".inlineAddFields"][] = "receiptNo";
$tdataall[".inlineAddFields"][] = "paperRef";
$tdataall[".inlineAddFields"][] = "cnameShort";
$tdataall[".inlineAddFields"][] = "item";
$tdataall[".inlineAddFields"][] = "fullName";
$tdataall[".inlineAddFields"][] = "email";

$tdataall[".editFields"] = array();
$tdataall[".editFields"][] = "cid";

$tdataall[".inlineEditFields"] = array();
$tdataall[".inlineEditFields"][] = "id";
$tdataall[".inlineEditFields"][] = "tx";
$tdataall[".inlineEditFields"][] = "currency";
$tdataall[".inlineEditFields"][] = "amount";
$tdataall[".inlineEditFields"][] = "payStatus";
$tdataall[".inlineEditFields"][] = "itemID";
$tdataall[".inlineEditFields"][] = "payDate";
$tdataall[".inlineEditFields"][] = "mode";
$tdataall[".inlineEditFields"][] = "userID";
$tdataall[".inlineEditFields"][] = "cid";
$tdataall[".inlineEditFields"][] = "receiptNo";
$tdataall[".inlineEditFields"][] = "paperRef";
$tdataall[".inlineEditFields"][] = "cnameShort";
$tdataall[".inlineEditFields"][] = "item";
$tdataall[".inlineEditFields"][] = "fullName";
$tdataall[".inlineEditFields"][] = "email";

$tdataall[".exportFields"] = array();
$tdataall[".exportFields"][] = "id";
$tdataall[".exportFields"][] = "tx";
$tdataall[".exportFields"][] = "currency";
$tdataall[".exportFields"][] = "amount";
$tdataall[".exportFields"][] = "payStatus";
$tdataall[".exportFields"][] = "itemID";
$tdataall[".exportFields"][] = "payDate";
$tdataall[".exportFields"][] = "mode";
$tdataall[".exportFields"][] = "userID";
$tdataall[".exportFields"][] = "cid";
$tdataall[".exportFields"][] = "receiptNo";
$tdataall[".exportFields"][] = "paperRef";
$tdataall[".exportFields"][] = "cnameShort";
$tdataall[".exportFields"][] = "item";
$tdataall[".exportFields"][] = "fullName";
$tdataall[".exportFields"][] = "email";

$tdataall[".importFields"] = array();
$tdataall[".importFields"][] = "id";
$tdataall[".importFields"][] = "tx";
$tdataall[".importFields"][] = "currency";
$tdataall[".importFields"][] = "amount";
$tdataall[".importFields"][] = "payStatus";
$tdataall[".importFields"][] = "itemID";
$tdataall[".importFields"][] = "payDate";
$tdataall[".importFields"][] = "mode";
$tdataall[".importFields"][] = "userID";
$tdataall[".importFields"][] = "cid";
$tdataall[".importFields"][] = "receiptNo";
$tdataall[".importFields"][] = "paperRef";
$tdataall[".importFields"][] = "cnameShort";
$tdataall[".importFields"][] = "item";
$tdataall[".importFields"][] = "fullName";
$tdataall[".importFields"][] = "email";

$tdataall[".printFields"] = array();
$tdataall[".printFields"][] = "id";
$tdataall[".printFields"][] = "tx";
$tdataall[".printFields"][] = "currency";
$tdataall[".printFields"][] = "amount";
$tdataall[".printFields"][] = "payStatus";
$tdataall[".printFields"][] = "itemID";
$tdataall[".printFields"][] = "payDate";
$tdataall[".printFields"][] = "mode";
$tdataall[".printFields"][] = "userID";
$tdataall[".printFields"][] = "cid";
$tdataall[".printFields"][] = "receiptNo";
$tdataall[".printFields"][] = "paperRef";
$tdataall[".printFields"][] = "cnameShort";
$tdataall[".printFields"][] = "item";
$tdataall[".printFields"][] = "fullName";
$tdataall[".printFields"][] = "email";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.id";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["id"] = $fdata;
//	tx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tx";
	$fdata["GoodName"] = "tx";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","tx");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataall["tx"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","currency");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["currency"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["amount"] = $fdata;
//	payStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "payStatus";
	$fdata["GoodName"] = "payStatus";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","payStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "payStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.payStatus";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["payStatus"] = $fdata;
//	itemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "itemID";
	$fdata["GoodName"] = "itemID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","itemID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["itemID"] = $fdata;
//	payDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "payDate";
	$fdata["GoodName"] = "payDate";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","payDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "payDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "payments.payDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdataall["payDate"] = $fdata;
//	mode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mode";
	$fdata["GoodName"] = "mode";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","mode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["mode"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","cid");
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["cid"] = $fdata;
//	receiptNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "receiptNo";
	$fdata["GoodName"] = "receiptNo";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = GetFieldLabel("all","receiptNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["receiptNo"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("all","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["paperRef"] = $fdata;
//	cnameShort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cnameShort";
	$fdata["GoodName"] = "cnameShort";
	$fdata["ownerTable"] = "conference";
	$fdata["Label"] = GetFieldLabel("all","cnameShort");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cnameShort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "conference.cnameShort";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["cnameShort"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = GetFieldLabel("all","item");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confees.item";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["item"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("all","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.fullName";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["fullName"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("all","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdataall["email"] = $fdata;


$tables_data["all"]=&$tdataall;
$field_labels["all"] = &$fieldLabelsall;
$fieldToolTips["all"] = &$fieldToolTipsall;
$page_titles["all"] = &$pageTitlesall;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "payments.id,  payments.tx,  payments.currency,  payments.amount,  payments.payStatus,  payments.itemID,  payments.payDate,  payments.`mode`,  payments.userID,  payments.cid,  payments.receiptNo,  paper.paperRef,  conference.cnameShort,  confees.item,  `user`.fullName,  `user`.email";
$proto0["m_strFrom"] = "FROM payments  LEFT OUTER JOIN paper ON payments.itemID = paper.paperRef  INNER JOIN conference ON payments.cid = conference.cid  LEFT OUTER JOIN participate ON payments.userID = participate.userID  LEFT OUTER JOIN confees ON participate.cfid = confees.cfid  INNER JOIN `user` ON payments.userID = `user`.userID";
$proto0["m_strWhere"] = "payments.id =35";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "payments.id =35";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=35";
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
	"m_srcTableName" => "all"
));

$proto5["m_sql"] = "payments.id";
$proto5["m_srcTableName"] = "all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tx",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto7["m_sql"] = "payments.tx";
$proto7["m_srcTableName"] = "all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto9["m_sql"] = "payments.currency";
$proto9["m_srcTableName"] = "all";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto11["m_sql"] = "payments.amount";
$proto11["m_srcTableName"] = "all";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "payStatus",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto13["m_sql"] = "payments.payStatus";
$proto13["m_srcTableName"] = "all";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "itemID",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto15["m_sql"] = "payments.itemID";
$proto15["m_srcTableName"] = "all";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "payDate",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto17["m_sql"] = "payments.payDate";
$proto17["m_srcTableName"] = "all";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "mode",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto19["m_sql"] = "payments.`mode`";
$proto19["m_srcTableName"] = "all";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto21["m_sql"] = "payments.userID";
$proto21["m_srcTableName"] = "all";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto23["m_sql"] = "payments.cid";
$proto23["m_srcTableName"] = "all";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "receiptNo",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto25["m_sql"] = "payments.receiptNo";
$proto25["m_srcTableName"] = "all";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "all"
));

$proto27["m_sql"] = "paper.paperRef";
$proto27["m_srcTableName"] = "all";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "cnameShort",
	"m_strTable" => "conference",
	"m_srcTableName" => "all"
));

$proto29["m_sql"] = "conference.cnameShort";
$proto29["m_srcTableName"] = "all";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees",
	"m_srcTableName" => "all"
));

$proto31["m_sql"] = "confees.item";
$proto31["m_srcTableName"] = "all";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "all"
));

$proto33["m_sql"] = "`user`.fullName";
$proto33["m_srcTableName"] = "all";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "all"
));

$proto35["m_sql"] = "`user`.email";
$proto35["m_srcTableName"] = "all";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "payments";
$proto38["m_srcTableName"] = "all";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "tx";
$proto38["m_columns"][] = "currency";
$proto38["m_columns"][] = "amount";
$proto38["m_columns"][] = "payStatus";
$proto38["m_columns"][] = "itemID";
$proto38["m_columns"][] = "payDate";
$proto38["m_columns"][] = "mode";
$proto38["m_columns"][] = "userID";
$proto38["m_columns"][] = "cid";
$proto38["m_columns"][] = "receiptNo";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "payments";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "all";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_LEFTJOIN";
			$proto42=array();
$proto42["m_strName"] = "paper";
$proto42["m_srcTableName"] = "all";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "paperID";
$proto42["m_columns"][] = "paperRef";
$proto42["m_columns"][] = "userID";
$proto42["m_columns"][] = "cid";
$proto42["m_columns"][] = "multiAuthor";
$proto42["m_columns"][] = "funded";
$proto42["m_columns"][] = "date_submit";
$proto42["m_columns"][] = "title";
$proto42["m_columns"][] = "abstract";
$proto42["m_columns"][] = "paperStatus";
$proto42["m_columns"][] = "fullPaper";
$proto42["m_columns"][] = "paymentStatus";
$proto42["m_columns"][] = "slotDate";
$proto42["m_columns"][] = "slotTime";
$proto42["m_columns"][] = "slotRoom";
$proto42["m_columns"][] = "slotTurn";
$proto42["m_columns"][] = "invite";
$proto42["m_columns"][] = "note";
$proto42["m_columns"][] = "ppt";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT OUTER JOIN paper ON payments.itemID = paper.paperRef";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "all";
$proto43=array();
$proto43["m_sql"] = "payments.itemID = paper.paperRef";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "itemID",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= paper.paperRef";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "conference";
$proto46["m_srcTableName"] = "all";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "cid";
$proto46["m_columns"][] = "cname";
$proto46["m_columns"][] = "cnameShort";
$proto46["m_columns"][] = "cnameCode";
$proto46["m_columns"][] = "sDate";
$proto46["m_columns"][] = "eDate";
$proto46["m_columns"][] = "cTime";
$proto46["m_columns"][] = "location";
$proto46["m_columns"][] = "address";
$proto46["m_columns"][] = "city";
$proto46["m_columns"][] = "country";
$proto46["m_columns"][] = "slogan";
$proto46["m_columns"][] = "about";
$proto46["m_columns"][] = "importantDate";
$proto46["m_columns"][] = "subTheme";
$proto46["m_columns"][] = "venueInfo";
$proto46["m_columns"][] = "venueAttract";
$proto46["m_columns"][] = "venueMap";
$proto46["m_columns"][] = "venuePhoto";
$proto46["m_columns"][] = "accomodation";
$proto46["m_columns"][] = "visa";
$proto46["m_columns"][] = "cstatus";
$proto46["m_columns"][] = "gallery";
$proto46["m_columns"][] = "proceeding";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN conference ON payments.cid = conference.cid";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "all";
$proto47=array();
$proto47["m_sql"] = "payments.cid = conference.cid";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= conference.cid";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_LEFTJOIN";
			$proto50=array();
$proto50["m_strName"] = "participate";
$proto50["m_srcTableName"] = "all";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "parID";
$proto50["m_columns"][] = "cid";
$proto50["m_columns"][] = "userID";
$proto50["m_columns"][] = "cfid";
$proto50["m_columns"][] = "confirm";
$proto50["m_columns"][] = "paperCount";
$proto50["m_columns"][] = "listenerRef";
$proto50["m_columns"][] = "note";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "LEFT OUTER JOIN participate ON payments.userID = participate.userID";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "all";
$proto51=array();
$proto51["m_sql"] = "payments.userID = participate.userID";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= participate.userID";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_LEFTJOIN";
			$proto54=array();
$proto54["m_strName"] = "confees";
$proto54["m_srcTableName"] = "all";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "cfid";
$proto54["m_columns"][] = "cid";
$proto54["m_columns"][] = "item";
$proto54["m_columns"][] = "priceNormal";
$proto54["m_columns"][] = "datelineNormal";
$proto54["m_columns"][] = "priceEarly";
$proto54["m_columns"][] = "datelineEarly";
$proto54["m_columns"][] = "local";
$proto54["m_columns"][] = "currency";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "LEFT OUTER JOIN confees ON participate.cfid = confees.cfid";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "all";
$proto55=array();
$proto55["m_sql"] = "participate.cfid = confees.cfid";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "all"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= confees.cfid";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
												$proto57=array();
$proto57["m_link"] = "SQLL_INNERJOIN";
			$proto58=array();
$proto58["m_strName"] = "user";
$proto58["m_srcTableName"] = "all";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "userID";
$proto58["m_columns"][] = "email";
$proto58["m_columns"][] = "password";
$proto58["m_columns"][] = "fullName";
$proto58["m_columns"][] = "gender";
$proto58["m_columns"][] = "address";
$proto58["m_columns"][] = "postal";
$proto58["m_columns"][] = "city";
$proto58["m_columns"][] = "state";
$proto58["m_columns"][] = "country";
$proto58["m_columns"][] = "tel";
$proto58["m_columns"][] = "fax";
$proto58["m_columns"][] = "institution";
$proto58["m_columns"][] = "faculty";
$proto58["m_columns"][] = "department";
$proto58["m_columns"][] = "research";
$proto58["m_columns"][] = "student";
$proto58["m_columns"][] = "role";
$proto58["m_columns"][] = "note";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "INNER JOIN `user` ON payments.userID = `user`.userID";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "all";
$proto59=array();
$proto59["m_sql"] = "payments.userID = `user`.userID";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments",
	"m_srcTableName" => "all"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= `user`.userID";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_all = createSqlQuery_all();



																

$tdataall[".sqlquery"] = $queryData_all;

$tableEvents["all"] = new eventsBase;
$tdataall[".hasEvents"] = false;

?>