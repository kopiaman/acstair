<?php
require_once(getabspath("classes/cipherer.php"));
$tdataparticipate_payment = array();
	$tdataparticipate_payment[".NumberOfChars"] = 80; 
	$tdataparticipate_payment[".ShortName"] = "participate_payment";
	$tdataparticipate_payment[".OwnerID"] = "";
	$tdataparticipate_payment[".OriginalTable"] = "payments";

//	field labels
$fieldLabelsparticipate_payment = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparticipate_payment["English"] = array();
	$fieldToolTipsparticipate_payment["English"] = array();
	$fieldLabelsparticipate_payment["English"]["id"] = "Id";
	$fieldToolTipsparticipate_payment["English"]["id"] = "";
	$fieldLabelsparticipate_payment["English"]["tx"] = "Transaction Ref";
	$fieldToolTipsparticipate_payment["English"]["tx"] = "";
	$fieldLabelsparticipate_payment["English"]["currency"] = "Currency";
	$fieldToolTipsparticipate_payment["English"]["currency"] = "";
	$fieldLabelsparticipate_payment["English"]["amount"] = "Amount";
	$fieldToolTipsparticipate_payment["English"]["amount"] = "";
	$fieldLabelsparticipate_payment["English"]["payStatus"] = "Pay Status";
	$fieldToolTipsparticipate_payment["English"]["payStatus"] = "";
	$fieldLabelsparticipate_payment["English"]["itemID"] = "Item ID";
	$fieldToolTipsparticipate_payment["English"]["itemID"] = "";
	$fieldLabelsparticipate_payment["English"]["payDate"] = "Pay Date";
	$fieldToolTipsparticipate_payment["English"]["payDate"] = "";
	$fieldLabelsparticipate_payment["English"]["mode"] = "Mode";
	$fieldToolTipsparticipate_payment["English"]["mode"] = "";
	$fieldLabelsparticipate_payment["English"]["userID"] = "Client Name";
	$fieldToolTipsparticipate_payment["English"]["userID"] = "";
	$fieldLabelsparticipate_payment["English"]["cid"] = "Cid";
	$fieldToolTipsparticipate_payment["English"]["cid"] = "";
	if (count($fieldToolTipsparticipate_payment["English"]))
		$tdataparticipate_payment[".isUseToolTips"] = true;
}
	
	
	$tdataparticipate_payment[".NCSearch"] = true;



$tdataparticipate_payment[".shortTableName"] = "participate_payment";
$tdataparticipate_payment[".nSecOptions"] = 0;
$tdataparticipate_payment[".recsPerRowList"] = 1;
$tdataparticipate_payment[".mainTableOwnerID"] = "";
$tdataparticipate_payment[".moveNext"] = 1;
$tdataparticipate_payment[".nType"] = 1;

$tdataparticipate_payment[".strOriginalTableName"] = "payments";




$tdataparticipate_payment[".showAddInPopup"] = false;

$tdataparticipate_payment[".showEditInPopup"] = false;

$tdataparticipate_payment[".showViewInPopup"] = false;

$tdataparticipate_payment[".fieldsForRegister"] = array();

$tdataparticipate_payment[".listAjax"] = false;

	$tdataparticipate_payment[".audit"] = false;

	$tdataparticipate_payment[".locking"] = false;

$tdataparticipate_payment[".listIcons"] = true;
$tdataparticipate_payment[".inlineEdit"] = true;
$tdataparticipate_payment[".inlineAdd"] = true;




$tdataparticipate_payment[".showSimpleSearchOptions"] = false;

$tdataparticipate_payment[".showSearchPanel"] = true;

if (isMobile())
	$tdataparticipate_payment[".isUseAjaxSuggest"] = false;
else 
	$tdataparticipate_payment[".isUseAjaxSuggest"] = true;

$tdataparticipate_payment[".rowHighlite"] = true;

// button handlers file names

$tdataparticipate_payment[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparticipate_payment[".isUseTimeForSearch"] = false;




$tdataparticipate_payment[".allSearchFields"] = array();

$tdataparticipate_payment[".allSearchFields"][] = "itemID";
$tdataparticipate_payment[".allSearchFields"][] = "currency";
$tdataparticipate_payment[".allSearchFields"][] = "amount";
$tdataparticipate_payment[".allSearchFields"][] = "mode";
$tdataparticipate_payment[".allSearchFields"][] = "tx";
$tdataparticipate_payment[".allSearchFields"][] = "payDate";

$tdataparticipate_payment[".googleLikeFields"][] = "id";
$tdataparticipate_payment[".googleLikeFields"][] = "tx";
$tdataparticipate_payment[".googleLikeFields"][] = "currency";
$tdataparticipate_payment[".googleLikeFields"][] = "amount";
$tdataparticipate_payment[".googleLikeFields"][] = "payStatus";
$tdataparticipate_payment[".googleLikeFields"][] = "itemID";
$tdataparticipate_payment[".googleLikeFields"][] = "payDate";
$tdataparticipate_payment[".googleLikeFields"][] = "mode";
$tdataparticipate_payment[".googleLikeFields"][] = "userID";
$tdataparticipate_payment[".googleLikeFields"][] = "cid";


$tdataparticipate_payment[".advSearchFields"][] = "itemID";
$tdataparticipate_payment[".advSearchFields"][] = "currency";
$tdataparticipate_payment[".advSearchFields"][] = "amount";
$tdataparticipate_payment[".advSearchFields"][] = "mode";
$tdataparticipate_payment[".advSearchFields"][] = "tx";
$tdataparticipate_payment[".advSearchFields"][] = "payDate";

$tdataparticipate_payment[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataparticipate_payment[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataparticipate_payment[".strOrderBy"] = $tstrOrderBy;

$tdataparticipate_payment[".orderindexes"] = array();

$tdataparticipate_payment[".sqlHead"] = "SELECT id,  tx,  currency,  amount,  payStatus,  itemID,  payDate,  `mode`,  userID,  cid";
$tdataparticipate_payment[".sqlFrom"] = "FROM payments";
$tdataparticipate_payment[".sqlWhereExpr"] = "";
$tdataparticipate_payment[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparticipate_payment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparticipate_payment[".arrGroupsPerPage"] = $arrGPP;

$tableKeysparticipate_payment = array();
$tableKeysparticipate_payment[] = "id";
$tdataparticipate_payment[".Keys"] = $tableKeysparticipate_payment;

$tdataparticipate_payment[".listFields"] = array();
$tdataparticipate_payment[".listFields"][] = "itemID";
$tdataparticipate_payment[".listFields"][] = "currency";
$tdataparticipate_payment[".listFields"][] = "amount";
$tdataparticipate_payment[".listFields"][] = "mode";
$tdataparticipate_payment[".listFields"][] = "tx";
$tdataparticipate_payment[".listFields"][] = "payDate";

$tdataparticipate_payment[".viewFields"] = array();

$tdataparticipate_payment[".addFields"] = array();

$tdataparticipate_payment[".inlineAddFields"] = array();
$tdataparticipate_payment[".inlineAddFields"][] = "itemID";
$tdataparticipate_payment[".inlineAddFields"][] = "currency";
$tdataparticipate_payment[".inlineAddFields"][] = "amount";
$tdataparticipate_payment[".inlineAddFields"][] = "mode";
$tdataparticipate_payment[".inlineAddFields"][] = "tx";
$tdataparticipate_payment[".inlineAddFields"][] = "payDate";

$tdataparticipate_payment[".editFields"] = array();

$tdataparticipate_payment[".inlineEditFields"] = array();
$tdataparticipate_payment[".inlineEditFields"][] = "itemID";
$tdataparticipate_payment[".inlineEditFields"][] = "currency";
$tdataparticipate_payment[".inlineEditFields"][] = "amount";
$tdataparticipate_payment[".inlineEditFields"][] = "mode";
$tdataparticipate_payment[".inlineEditFields"][] = "tx";
$tdataparticipate_payment[".inlineEditFields"][] = "payDate";

$tdataparticipate_payment[".exportFields"] = array();

$tdataparticipate_payment[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
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
	
		
		
	$tdataparticipate_payment["id"] = $fdata;
//	tx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tx";
	$fdata["GoodName"] = "tx";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Transaction Ref"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "tx"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=35";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["tx"] = $fdata;
//	currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "currency";
	$fdata["GoodName"] = "currency";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Currency"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "currency"; 
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
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		
			
	$edata["LinkField"] = "fname";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "fname";
	
		
	$edata["LookupTable"] = "set_field";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "catID=2";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["currency"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Amount"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "amount"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:45px;";
	$edata["controlWidth"] = 45;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["amount"] = $fdata;
//	payStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "payStatus";
	$fdata["GoodName"] = "payStatus";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Pay Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "payStatus"; 
		$fdata["FullName"] = "payStatus";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["payStatus"] = $fdata;
//	itemID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "itemID";
	$fdata["GoodName"] = "itemID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Item ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "itemID"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";
	
		$edata["inputStyle"] = " width:70px;";
	$edata["controlWidth"] = 70;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["itemID"] = $fdata;
//	payDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "payDate";
	$fdata["GoodName"] = "payDate";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Pay Date"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "payDate"; 
		$fdata["FullName"] = "payDate";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["payDate"] = $fdata;
//	mode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mode";
	$fdata["GoodName"] = "mode";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Mode"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "mode"; 
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
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Online";
	$edata["LookupValues"][] = "Offline";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["mode"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Client Name"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "userID"; 
		$fdata["FullName"] = "userID";
	
		
		
				
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
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 2;
			
		
			
	$edata["LinkField"] = "userID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "fullName";
	
		
	$edata["LookupTable"] = "participate";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataparticipate_payment["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "payments";
	$fdata["Label"] = "Cid"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "cid"; 
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
	
		
		
	$tdataparticipate_payment["cid"] = $fdata;

	
$tables_data["participate_payment"]=&$tdataparticipate_payment;
$field_labels["participate_payment"] = &$fieldLabelsparticipate_payment;
$fieldToolTips["participate_payment"] = &$fieldToolTipsparticipate_payment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["participate_payment"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["participate_payment"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="participate";
	$masterParams["mDataSourceTable"]="participate";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "participate";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["participate_payment"][$mIndex] = $masterParams;	
		$masterTablesData["participate_payment"][$mIndex]["masterKeys"][]="userID";
		$masterTablesData["participate_payment"][$mIndex]["masterKeys"][]="cid";
		$masterTablesData["participate_payment"][$mIndex]["detailKeys"][]="userID";
		$masterTablesData["participate_payment"][$mIndex]["detailKeys"][]="cid";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_participate_payment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  tx,  currency,  amount,  payStatus,  itemID,  payDate,  `mode`,  userID,  cid";
$proto0["m_strFrom"] = "FROM payments";
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
	"m_strName" => "id",
	"m_strTable" => "payments"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tx",
	"m_strTable" => "payments"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "currency",
	"m_strTable" => "payments"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "payments"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "payStatus",
	"m_strTable" => "payments"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "itemID",
	"m_strTable" => "payments"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "payDate",
	"m_strTable" => "payments"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "mode",
	"m_strTable" => "payments"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "payments"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "payments"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "payments";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "tx";
$proto26["m_columns"][] = "currency";
$proto26["m_columns"][] = "amount";
$proto26["m_columns"][] = "payStatus";
$proto26["m_columns"][] = "itemID";
$proto26["m_columns"][] = "payDate";
$proto26["m_columns"][] = "mode";
$proto26["m_columns"][] = "userID";
$proto26["m_columns"][] = "cid";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_participate_payment = createSqlQuery_participate_payment();
										$tdataparticipate_payment[".sqlquery"] = $queryData_participate_payment;

$tableEvents["participate_payment"] = new eventsBase;
$tdataparticipate_payment[".hasEvents"] = false;

$cipherer = new RunnerCipherer("participate_payment");

?>