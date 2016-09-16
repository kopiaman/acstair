<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafollowup_fullpaper = array();
	$tdatafollowup_fullpaper[".NumberOfChars"] = 80; 
	$tdatafollowup_fullpaper[".ShortName"] = "followup_fullpaper";
	$tdatafollowup_fullpaper[".OwnerID"] = "";
	$tdatafollowup_fullpaper[".OriginalTable"] = "participate";

//	field labels
$fieldLabelsfollowup_fullpaper = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollowup_fullpaper["English"] = array();
	$fieldToolTipsfollowup_fullpaper["English"] = array();
	$fieldLabelsfollowup_fullpaper["English"]["cid"] = "Conference ";
	$fieldToolTipsfollowup_fullpaper["English"]["cid"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["userID"] = "UserID";
	$fieldToolTipsfollowup_fullpaper["English"]["userID"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["cfid"] = "Fee";
	$fieldToolTipsfollowup_fullpaper["English"]["cfid"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["parID"] = "Par ID";
	$fieldToolTipsfollowup_fullpaper["English"]["parID"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["email"] = "Email";
	$fieldToolTipsfollowup_fullpaper["English"]["email"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["fullName"] = "Full Name";
	$fieldToolTipsfollowup_fullpaper["English"]["fullName"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["institution"] = "Institution";
	$fieldToolTipsfollowup_fullpaper["English"]["institution"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["country"] = "Country";
	$fieldToolTipsfollowup_fullpaper["English"]["country"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["confirm"] = "Confirm";
	$fieldToolTipsfollowup_fullpaper["English"]["confirm"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["note"] = "Note";
	$fieldToolTipsfollowup_fullpaper["English"]["note"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["paperCount"] = "Paper Count";
	$fieldToolTipsfollowup_fullpaper["English"]["paperCount"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["listenerRef"] = "Listener Ref";
	$fieldToolTipsfollowup_fullpaper["English"]["listenerRef"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["item"] = "Item";
	$fieldToolTipsfollowup_fullpaper["English"]["item"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsfollowup_fullpaper["English"]["paperRef"] = "";
	$fieldLabelsfollowup_fullpaper["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipsfollowup_fullpaper["English"]["paperStatus"] = "";
	if (count($fieldToolTipsfollowup_fullpaper["English"]))
		$tdatafollowup_fullpaper[".isUseToolTips"] = true;
}
	
	
	$tdatafollowup_fullpaper[".NCSearch"] = true;



$tdatafollowup_fullpaper[".shortTableName"] = "followup_fullpaper";
$tdatafollowup_fullpaper[".nSecOptions"] = 0;
$tdatafollowup_fullpaper[".recsPerRowList"] = 1;
$tdatafollowup_fullpaper[".mainTableOwnerID"] = "";
$tdatafollowup_fullpaper[".moveNext"] = 1;
$tdatafollowup_fullpaper[".nType"] = 1;

$tdatafollowup_fullpaper[".strOriginalTableName"] = "participate";




$tdatafollowup_fullpaper[".showAddInPopup"] = false;

$tdatafollowup_fullpaper[".showEditInPopup"] = false;

$tdatafollowup_fullpaper[".showViewInPopup"] = false;

$tdatafollowup_fullpaper[".fieldsForRegister"] = array();

$tdatafollowup_fullpaper[".listAjax"] = false;

	$tdatafollowup_fullpaper[".audit"] = false;

	$tdatafollowup_fullpaper[".locking"] = false;

$tdatafollowup_fullpaper[".listIcons"] = true;

$tdatafollowup_fullpaper[".exportTo"] = true;



$tdatafollowup_fullpaper[".showSimpleSearchOptions"] = false;

$tdatafollowup_fullpaper[".showSearchPanel"] = true;

if (isMobile())
	$tdatafollowup_fullpaper[".isUseAjaxSuggest"] = false;
else 
	$tdatafollowup_fullpaper[".isUseAjaxSuggest"] = true;

$tdatafollowup_fullpaper[".rowHighlite"] = true;

// button handlers file names

$tdatafollowup_fullpaper[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollowup_fullpaper[".isUseTimeForSearch"] = false;




$tdatafollowup_fullpaper[".allSearchFields"] = array();

$tdatafollowup_fullpaper[".allSearchFields"][] = "paperRef";
$tdatafollowup_fullpaper[".allSearchFields"][] = "item";
$tdatafollowup_fullpaper[".allSearchFields"][] = "listenerRef";
$tdatafollowup_fullpaper[".allSearchFields"][] = "paperCount";
$tdatafollowup_fullpaper[".allSearchFields"][] = "paperStatus";
$tdatafollowup_fullpaper[".allSearchFields"][] = "parID";
$tdatafollowup_fullpaper[".allSearchFields"][] = "userID";
$tdatafollowup_fullpaper[".allSearchFields"][] = "cid";
$tdatafollowup_fullpaper[".allSearchFields"][] = "cfid";
$tdatafollowup_fullpaper[".allSearchFields"][] = "fullName";
$tdatafollowup_fullpaper[".allSearchFields"][] = "email";
$tdatafollowup_fullpaper[".allSearchFields"][] = "institution";
$tdatafollowup_fullpaper[".allSearchFields"][] = "country";
$tdatafollowup_fullpaper[".allSearchFields"][] = "confirm";
$tdatafollowup_fullpaper[".allSearchFields"][] = "note";

$tdatafollowup_fullpaper[".googleLikeFields"][] = "parID";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "cid";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "userID";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "cfid";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "email";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "fullName";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "institution";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "country";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "confirm";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "note";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "paperCount";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "listenerRef";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "item";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "paperRef";
$tdatafollowup_fullpaper[".googleLikeFields"][] = "paperStatus";


$tdatafollowup_fullpaper[".advSearchFields"][] = "paperRef";
$tdatafollowup_fullpaper[".advSearchFields"][] = "item";
$tdatafollowup_fullpaper[".advSearchFields"][] = "listenerRef";
$tdatafollowup_fullpaper[".advSearchFields"][] = "paperStatus";
$tdatafollowup_fullpaper[".advSearchFields"][] = "cid";
$tdatafollowup_fullpaper[".advSearchFields"][] = "cfid";
$tdatafollowup_fullpaper[".advSearchFields"][] = "fullName";
$tdatafollowup_fullpaper[".advSearchFields"][] = "email";
$tdatafollowup_fullpaper[".advSearchFields"][] = "institution";
$tdatafollowup_fullpaper[".advSearchFields"][] = "country";
$tdatafollowup_fullpaper[".advSearchFields"][] = "confirm";
$tdatafollowup_fullpaper[".advSearchFields"][] = "note";

$tdatafollowup_fullpaper[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatafollowup_fullpaper[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY participate.parID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafollowup_fullpaper[".strOrderBy"] = $tstrOrderBy;

$tdatafollowup_fullpaper[".orderindexes"] = array();
$tdatafollowup_fullpaper[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "participate.parID");

$tdatafollowup_fullpaper[".sqlHead"] = "SELECT participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  paper.paperRef,  paper.paperStatus";
$tdatafollowup_fullpaper[".sqlFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  LEFT OUTER JOIN paper ON participate.userID = paper.userID";
$tdatafollowup_fullpaper[".sqlWhereExpr"] = "(confees.item LIKE '%Presenter%') AND paper.paperStatus='AB-OK' AND paper.paymentStatus='Paid'";
$tdatafollowup_fullpaper[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollowup_fullpaper[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollowup_fullpaper[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfollowup_fullpaper = array();
$tableKeysfollowup_fullpaper[] = "parID";
$tdatafollowup_fullpaper[".Keys"] = $tableKeysfollowup_fullpaper;

$tdatafollowup_fullpaper[".listFields"] = array();
$tdatafollowup_fullpaper[".listFields"][] = "paperStatus";
$tdatafollowup_fullpaper[".listFields"][] = "paperRef";
$tdatafollowup_fullpaper[".listFields"][] = "cid";
$tdatafollowup_fullpaper[".listFields"][] = "cfid";
$tdatafollowup_fullpaper[".listFields"][] = "fullName";
$tdatafollowup_fullpaper[".listFields"][] = "email";
$tdatafollowup_fullpaper[".listFields"][] = "institution";
$tdatafollowup_fullpaper[".listFields"][] = "country";
$tdatafollowup_fullpaper[".listFields"][] = "paperCount";
$tdatafollowup_fullpaper[".listFields"][] = "confirm";
$tdatafollowup_fullpaper[".listFields"][] = "note";

$tdatafollowup_fullpaper[".viewFields"] = array();
$tdatafollowup_fullpaper[".viewFields"][] = "paperStatus";

$tdatafollowup_fullpaper[".addFields"] = array();

$tdatafollowup_fullpaper[".inlineAddFields"] = array();
$tdatafollowup_fullpaper[".inlineAddFields"][] = "paperStatus";

$tdatafollowup_fullpaper[".editFields"] = array();

$tdatafollowup_fullpaper[".inlineEditFields"] = array();
$tdatafollowup_fullpaper[".inlineEditFields"][] = "paperStatus";

$tdatafollowup_fullpaper[".exportFields"] = array();
$tdatafollowup_fullpaper[".exportFields"][] = "parID";
$tdatafollowup_fullpaper[".exportFields"][] = "paperRef";
$tdatafollowup_fullpaper[".exportFields"][] = "userID";
$tdatafollowup_fullpaper[".exportFields"][] = "item";
$tdatafollowup_fullpaper[".exportFields"][] = "listenerRef";
$tdatafollowup_fullpaper[".exportFields"][] = "paperCount";
$tdatafollowup_fullpaper[".exportFields"][] = "paperStatus";
$tdatafollowup_fullpaper[".exportFields"][] = "cid";
$tdatafollowup_fullpaper[".exportFields"][] = "cfid";
$tdatafollowup_fullpaper[".exportFields"][] = "fullName";
$tdatafollowup_fullpaper[".exportFields"][] = "email";
$tdatafollowup_fullpaper[".exportFields"][] = "institution";
$tdatafollowup_fullpaper[".exportFields"][] = "country";
$tdatafollowup_fullpaper[".exportFields"][] = "confirm";
$tdatafollowup_fullpaper[".exportFields"][] = "note";

$tdatafollowup_fullpaper[".printFields"] = array();
$tdatafollowup_fullpaper[".printFields"][] = "paperStatus";

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
	
		
		
	$tdatafollowup_fullpaper["parID"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["cid"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["userID"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["cfid"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["email"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["fullName"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["institution"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["country"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["confirm"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["note"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["paperCount"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["listenerRef"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["item"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["paperRef"] = $fdata;
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
	
		
		
	$tdatafollowup_fullpaper["paperStatus"] = $fdata;

	
$tables_data["followup_fullpaper"]=&$tdatafollowup_fullpaper;
$field_labels["followup_fullpaper"] = &$fieldLabelsfollowup_fullpaper;
$fieldToolTips["followup_fullpaper"] = &$fieldToolTipsfollowup_fullpaper;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["followup_fullpaper"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["followup_fullpaper"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_followup_fullpaper()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participate.parID,  participate.cid,  participate.userID,  participate.cfid,  `user`.email,  `user`.fullName,  `user`.institution,  `user`.country,  participate.confirm,  participate.note,  participate.paperCount,  participate.listenerRef,  confees.item,  paper.paperRef,  paper.paperStatus";
$proto0["m_strFrom"] = "FROM participate  INNER JOIN `user` ON participate.userID = `user`.userID  INNER JOIN confees ON participate.cfid = confees.cfid  LEFT OUTER JOIN paper ON participate.userID = paper.userID";
$proto0["m_strWhere"] = "(confees.item LIKE '%Presenter%') AND paper.paperStatus='AB-OK' AND paper.paymentStatus='Paid'";
$proto0["m_strOrderBy"] = "ORDER BY participate.parID DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(confees.item LIKE '%Presenter%') AND paper.paperStatus='AB-OK' AND paper.paymentStatus='Paid'";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(confees.item LIKE '%Presenter%') AND paper.paperStatus='AB-OK' AND paper.paymentStatus='Paid'"
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
$proto5["m_sql"] = "paper.paperStatus='AB-OK'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "='AB-OK'";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "0";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "paper.paymentStatus='Paid'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "='Paid'";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "0";
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
$proto46["m_columns"][] = "note";
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
$queryData_followup_fullpaper = createSqlQuery_followup_fullpaper();
															$tdatafollowup_fullpaper[".sqlquery"] = $queryData_followup_fullpaper;

$tableEvents["followup_fullpaper"] = new eventsBase;
$tdatafollowup_fullpaper[".hasEvents"] = false;

$cipherer = new RunnerCipherer("followup_fullpaper");

?>