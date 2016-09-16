<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafollowup_payment_FP = array();
	$tdatafollowup_payment_FP[".NumberOfChars"] = 80; 
	$tdatafollowup_payment_FP[".ShortName"] = "followup_payment_FP";
	$tdatafollowup_payment_FP[".OwnerID"] = "";
	$tdatafollowup_payment_FP[".OriginalTable"] = "participate";

//	field labels
$fieldLabelsfollowup_payment_FP = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollowup_payment_FP["English"] = array();
	$fieldToolTipsfollowup_payment_FP["English"] = array();
	$fieldLabelsfollowup_payment_FP["English"]["cid"] = "Conference ";
	$fieldToolTipsfollowup_payment_FP["English"]["cid"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["userID"] = "UserID";
	$fieldToolTipsfollowup_payment_FP["English"]["userID"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["cfid"] = "Fee";
	$fieldToolTipsfollowup_payment_FP["English"]["cfid"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["parID"] = "Par ID";
	$fieldToolTipsfollowup_payment_FP["English"]["parID"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["email"] = "Email";
	$fieldToolTipsfollowup_payment_FP["English"]["email"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["fullName"] = "Full Name";
	$fieldToolTipsfollowup_payment_FP["English"]["fullName"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["institution"] = "Institution";
	$fieldToolTipsfollowup_payment_FP["English"]["institution"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["country"] = "Country";
	$fieldToolTipsfollowup_payment_FP["English"]["country"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["confirm"] = "Confirm";
	$fieldToolTipsfollowup_payment_FP["English"]["confirm"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["note"] = "Note";
	$fieldToolTipsfollowup_payment_FP["English"]["note"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["paperCount"] = "Paper Count";
	$fieldToolTipsfollowup_payment_FP["English"]["paperCount"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["listenerRef"] = "Listener Ref";
	$fieldToolTipsfollowup_payment_FP["English"]["listenerRef"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["item"] = "Item";
	$fieldToolTipsfollowup_payment_FP["English"]["item"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsfollowup_payment_FP["English"]["paperRef"] = "";
	$fieldLabelsfollowup_payment_FP["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipsfollowup_payment_FP["English"]["paperStatus"] = "";
	if (count($fieldToolTipsfollowup_payment_FP["English"]))
		$tdatafollowup_payment_FP[".isUseToolTips"] = true;
}
	
	
	$tdatafollowup_payment_FP[".NCSearch"] = true;



$tdatafollowup_payment_FP[".shortTableName"] = "followup_payment_FP";
$tdatafollowup_payment_FP[".nSecOptions"] = 0;
$tdatafollowup_payment_FP[".recsPerRowList"] = 1;
$tdatafollowup_payment_FP[".mainTableOwnerID"] = "";
$tdatafollowup_payment_FP[".moveNext"] = 1;
$tdatafollowup_payment_FP[".nType"] = 1;

$tdatafollowup_payment_FP[".strOriginalTableName"] = "participate";




$tdatafollowup_payment_FP[".showAddInPopup"] = false;

$tdatafollowup_payment_FP[".showEditInPopup"] = false;

$tdatafollowup_payment_FP[".showViewInPopup"] = false;

$tdatafollowup_payment_FP[".fieldsForRegister"] = array();

$tdatafollowup_payment_FP[".listAjax"] = false;

	$tdatafollowup_payment_FP[".audit"] = false;

	$tdatafollowup_payment_FP[".locking"] = false;

$tdatafollowup_payment_FP[".listIcons"] = true;

$tdatafollowup_payment_FP[".exportTo"] = true;



$tdatafollowup_payment_FP[".showSimpleSearchOptions"] = false;

$tdatafollowup_payment_FP[".showSearchPanel"] = true;

if (isMobile())
	$tdatafollowup_payment_FP[".isUseAjaxSuggest"] = false;
else 
	$tdatafollowup_payment_FP[".isUseAjaxSuggest"] = true;

$tdatafollowup_payment_FP[".rowHighlite"] = true;

// button handlers file names

$tdatafollowup_payment_FP[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollowup_payment_FP[".isUseTimeForSearch"] = false;




$tdatafollowup_payment_FP[".allSearchFields"] = array();

$tdatafollowup_payment_FP[".allSearchFields"][] = "paperRef";
$tdatafollowup_payment_FP[".allSearchFields"][] = "item";
$tdatafollowup_payment_FP[".allSearchFields"][] = "listenerRef";
$tdatafollowup_payment_FP[".allSearchFields"][] = "paperCount";
$tdatafollowup_payment_FP[".allSearchFields"][] = "paperStatus";
$tdatafollowup_payment_FP[".allSearchFields"][] = "parID";
$tdatafollowup_payment_FP[".allSearchFields"][] = "userID";
$tdatafollowup_payment_FP[".allSearchFields"][] = "cid";
$tdatafollowup_payment_FP[".allSearchFields"][] = "cfid";
$tdatafollowup_payment_FP[".allSearchFields"][] = "fullName";
$tdatafollowup_payment_FP[".allSearchFields"][] = "email";
$tdatafollowup_payment_FP[".allSearchFields"][] = "institution";
$tdatafollowup_payment_FP[".allSearchFields"][] = "country";
$tdatafollowup_payment_FP[".allSearchFields"][] = "confirm";
$tdatafollowup_payment_FP[".allSearchFields"][] = "note";

$tdatafollowup_payment_FP[".googleLikeFields"][] = "parID";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "cid";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "userID";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "cfid";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "email";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "fullName";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "institution";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "country";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "confirm";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "note";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "paperCount";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "listenerRef";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "item";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "paperRef";
$tdatafollowup_payment_FP[".googleLikeFields"][] = "paperStatus";


$tdatafollowup_payment_FP[".advSearchFields"][] = "paperRef";
$tdatafollowup_payment_FP[".advSearchFields"][] = "item";
$tdatafollowup_payment_FP[".advSearchFields"][] = "listenerRef";
$tdatafollowup_payment_FP[".advSearchFields"][] = "paperStatus";
$tdatafollowup_payment_FP[".advSearchFields"][] = "cid";
$tdatafollowup_payment_FP[".advSearchFields"][] = "cfid";
$tdatafollowup_payment_FP[".advSearchFields"][] = "fullName";
$tdatafollowup_payment_FP[".advSearchFields"][] = "email";
$tdatafollowup_payment_FP[".advSearchFields"][] = "institution";
$tdatafollowup_payment_FP[".advSearchFields"][] = "country";
$tdatafollowup_payment_FP[".advSearchFields"][] = "confirm";
$tdatafollowup_payment_FP[".advSearchFields"][] = "note";

$tdatafollowup_payment_FP[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatafollowup_payment_FP[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY participate.parID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafollowup_payment_FP[".strOrderBy"] = $tstrOrderBy;

$tdatafollowup_payment_FP[".orderindexes"] = array();
$tdatafollowup_payment_FP[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "participate.parID");

$tdatafollowup_payment_FP[".sqlHead"] = "SELECT participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  paper.paperRef,  paper.paperStatus";
$tdatafollowup_payment_FP[".sqlFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  LEFT OUTER JOIN paper ON participate.userID = paper.userID";
$tdatafollowup_payment_FP[".sqlWhereExpr"] = "(confees.item LIKE '%Presenter%') AND (paper.paperStatus ='FP-REVIEW') AND (paper.paymentStatus ='Pending')";
$tdatafollowup_payment_FP[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollowup_payment_FP[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollowup_payment_FP[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfollowup_payment_FP = array();
$tableKeysfollowup_payment_FP[] = "parID";
$tdatafollowup_payment_FP[".Keys"] = $tableKeysfollowup_payment_FP;

$tdatafollowup_payment_FP[".listFields"] = array();
$tdatafollowup_payment_FP[".listFields"][] = "paperStatus";
$tdatafollowup_payment_FP[".listFields"][] = "paperRef";
$tdatafollowup_payment_FP[".listFields"][] = "cid";
$tdatafollowup_payment_FP[".listFields"][] = "cfid";
$tdatafollowup_payment_FP[".listFields"][] = "fullName";
$tdatafollowup_payment_FP[".listFields"][] = "email";
$tdatafollowup_payment_FP[".listFields"][] = "institution";
$tdatafollowup_payment_FP[".listFields"][] = "country";
$tdatafollowup_payment_FP[".listFields"][] = "paperCount";
$tdatafollowup_payment_FP[".listFields"][] = "confirm";
$tdatafollowup_payment_FP[".listFields"][] = "note";

$tdatafollowup_payment_FP[".viewFields"] = array();
$tdatafollowup_payment_FP[".viewFields"][] = "paperStatus";

$tdatafollowup_payment_FP[".addFields"] = array();

$tdatafollowup_payment_FP[".inlineAddFields"] = array();
$tdatafollowup_payment_FP[".inlineAddFields"][] = "paperStatus";

$tdatafollowup_payment_FP[".editFields"] = array();

$tdatafollowup_payment_FP[".inlineEditFields"] = array();
$tdatafollowup_payment_FP[".inlineEditFields"][] = "paperStatus";

$tdatafollowup_payment_FP[".exportFields"] = array();
$tdatafollowup_payment_FP[".exportFields"][] = "parID";
$tdatafollowup_payment_FP[".exportFields"][] = "paperRef";
$tdatafollowup_payment_FP[".exportFields"][] = "userID";
$tdatafollowup_payment_FP[".exportFields"][] = "item";
$tdatafollowup_payment_FP[".exportFields"][] = "listenerRef";
$tdatafollowup_payment_FP[".exportFields"][] = "paperCount";
$tdatafollowup_payment_FP[".exportFields"][] = "paperStatus";
$tdatafollowup_payment_FP[".exportFields"][] = "cid";
$tdatafollowup_payment_FP[".exportFields"][] = "cfid";
$tdatafollowup_payment_FP[".exportFields"][] = "fullName";
$tdatafollowup_payment_FP[".exportFields"][] = "email";
$tdatafollowup_payment_FP[".exportFields"][] = "institution";
$tdatafollowup_payment_FP[".exportFields"][] = "country";
$tdatafollowup_payment_FP[".exportFields"][] = "confirm";
$tdatafollowup_payment_FP[".exportFields"][] = "note";

$tdatafollowup_payment_FP[".printFields"] = array();
$tdatafollowup_payment_FP[".printFields"][] = "paperStatus";

//	parID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "parID";
	$fdata["GoodName"] = "parID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "Par ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "parID"; 
		$fdata["FullName"] = "participate.parID";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["parID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "Conference "; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cid"; 
		$fdata["FullName"] = "participate.cid";
	
		
		
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
				
		
			
	$edata["LinkField"] = "cid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cnameCode";
	
		
	$edata["LookupTable"] = "conference";
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
	
		
		
	$tdatafollowup_payment_FP["cid"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "UserID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "userID"; 
		$fdata["FullName"] = "participate.userID";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["userID"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "Fee"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "cfid"; 
		$fdata["FullName"] = "participate.cfid";
	
		
		
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
				
		
			
	$edata["LinkField"] = "cfid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "item";
	
		
	$edata["LookupTable"] = "confees";
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
	
		
		
	$tdatafollowup_payment_FP["cfid"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "email"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["email"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Full Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fullName"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Institution"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "institution"; 
		$fdata["FullName"] = "`user`.institution";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["institution"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = "Country"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "country"; 
		$fdata["FullName"] = "`user`.country";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["country"] = $fdata;
//	confirm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "confirm";
	$fdata["GoodName"] = "confirm";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "Confirm"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "confirm"; 
		$fdata["FullName"] = "participate.confirm";
	
		
		
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
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["confirm"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "Note"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "note"; 
		$fdata["FullName"] = "participate.note";
	
		
		
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
				$edata["LCType"] = 3;
			
		
			
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fname";
	
		
	$edata["LookupTable"] = "set_field";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "catID=12";
	
		
		
		
				
	
	
		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 1;
//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["note"] = $fdata;
//	paperCount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "paperCount";
	$fdata["GoodName"] = "paperCount";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "Paper Count"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paperCount"; 
		$fdata["FullName"] = "participate.paperCount";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["paperCount"] = $fdata;
//	listenerRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "listenerRef";
	$fdata["GoodName"] = "listenerRef";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = "Listener Ref"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "listenerRef"; 
		$fdata["FullName"] = "participate.listenerRef";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["listenerRef"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "confees";
	$fdata["Label"] = "Item"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "item"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["item"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Paper Ref"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paperRef"; 
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["paperRef"] = $fdata;
//	paperStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "paperStatus";
	$fdata["GoodName"] = "paperStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Paper Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "paperStatus"; 
		$fdata["FullName"] = "paper.paperStatus";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatafollowup_payment_FP["paperStatus"] = $fdata;

	
$tables_data["followup_payment_FP"]=&$tdatafollowup_payment_FP;
$field_labels["followup_payment_FP"] = &$fieldLabelsfollowup_payment_FP;
$fieldToolTips["followup_payment_FP"] = &$fieldToolTipsfollowup_payment_FP;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["followup_payment_FP"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["followup_payment_FP"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_followup_payment_FP()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  paper.paperRef,  paper.paperStatus";
$proto0["m_strFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  LEFT OUTER JOIN paper ON participate.userID = paper.userID";
$proto0["m_strWhere"] = "(confees.item LIKE '%Presenter%') AND (paper.paperStatus ='FP-REVIEW') AND (paper.paymentStatus ='Pending')";
$proto0["m_strOrderBy"] = "ORDER BY participate.parID DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(confees.item LIKE '%Presenter%') AND (paper.paperStatus ='FP-REVIEW') AND (paper.paymentStatus ='Pending')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(confees.item LIKE '%Presenter%') AND (paper.paperStatus ='FP-REVIEW') AND (paper.paymentStatus ='Pending')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "confees.item LIKE '%Presenter%'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "LIKE '%Presenter%'";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "paper.paperStatus ='FP-REVIEW'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "='FP-REVIEW'";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "paper.paymentStatus ='Pending'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "='Pending'";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "1";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = "0";
$proto9["m_inBrackets"] = "0";
$proto9["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto9);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "parID",
	"m_strTable" => "participate"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "participate"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "confirm",
	"m_strTable" => "participate"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "participate"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "paperCount",
	"m_strTable" => "participate"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "listenerRef",
	"m_strTable" => "participate"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "confees"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "participate";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "parID";
$proto42["m_columns"][] = "cid";
$proto42["m_columns"][] = "userID";
$proto42["m_columns"][] = "cfid";
$proto42["m_columns"][] = "confirm";
$proto42["m_columns"][] = "paperCount";
$proto42["m_columns"][] = "listenerRef";
$proto42["m_columns"][] = "note";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_alias"] = "";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = "0";
$proto43["m_inBrackets"] = "0";
$proto43["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "user";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "userID";
$proto46["m_columns"][] = "email";
$proto46["m_columns"][] = "password";
$proto46["m_columns"][] = "fullName";
$proto46["m_columns"][] = "gender";
$proto46["m_columns"][] = "address";
$proto46["m_columns"][] = "postal";
$proto46["m_columns"][] = "city";
$proto46["m_columns"][] = "state";
$proto46["m_columns"][] = "country";
$proto46["m_columns"][] = "tel";
$proto46["m_columns"][] = "fax";
$proto46["m_columns"][] = "institution";
$proto46["m_columns"][] = "faculty";
$proto46["m_columns"][] = "department";
$proto46["m_columns"][] = "research";
$proto46["m_columns"][] = "student";
$proto46["m_columns"][] = "role";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_alias"] = "";
$proto47=array();
$proto47["m_sql"] = "participate.userID = `user`.userID";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= `user`.userID";
$proto47["m_havingmode"] = "0";
$proto47["m_inBrackets"] = "0";
$proto47["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_INNERJOIN";
			$proto50=array();
$proto50["m_strName"] = "confees";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "cfid";
$proto50["m_columns"][] = "cid";
$proto50["m_columns"][] = "item";
$proto50["m_columns"][] = "priceNormal";
$proto50["m_columns"][] = "datelineNormal";
$proto50["m_columns"][] = "priceEarly";
$proto50["m_columns"][] = "datelineEarly";
$proto50["m_columns"][] = "local";
$proto50["m_columns"][] = "currency";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_alias"] = "";
$proto51=array();
$proto51["m_sql"] = "participate.cfid = confees.cfid";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= confees.cfid";
$proto51["m_havingmode"] = "0";
$proto51["m_inBrackets"] = "0";
$proto51["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_LEFTJOIN";
			$proto54=array();
$proto54["m_strName"] = "paper";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "paperID";
$proto54["m_columns"][] = "paperRef";
$proto54["m_columns"][] = "userID";
$proto54["m_columns"][] = "cid";
$proto54["m_columns"][] = "multiAuthor";
$proto54["m_columns"][] = "funded";
$proto54["m_columns"][] = "date_submit";
$proto54["m_columns"][] = "title";
$proto54["m_columns"][] = "abstract";
$proto54["m_columns"][] = "paperStatus";
$proto54["m_columns"][] = "fullPaper";
$proto54["m_columns"][] = "paymentStatus";
$proto54["m_columns"][] = "slotDate";
$proto54["m_columns"][] = "slotTime";
$proto54["m_columns"][] = "slotRoom";
$proto54["m_columns"][] = "slotTurn";
$proto54["m_columns"][] = "invite";
$proto54["m_columns"][] = "note";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_alias"] = "";
$proto55=array();
$proto55["m_sql"] = "participate.userID = paper.userID";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "participate"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= paper.userID";
$proto55["m_havingmode"] = "0";
$proto55["m_inBrackets"] = "0";
$proto55["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "parID",
	"m_strTable" => "participate"
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_followup_payment_FP = createSqlQuery_followup_payment_FP();
															$tdatafollowup_payment_FP[".sqlquery"] = $queryData_followup_payment_FP;

$tableEvents["followup_payment_FP"] = new eventsBase;
$tdatafollowup_payment_FP[".hasEvents"] = false;

$cipherer = new RunnerCipherer("followup_payment_FP");

?>