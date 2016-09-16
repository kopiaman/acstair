<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafollowup_user = array();
	$tdatafollowup_user[".truncateText"] = true;
	$tdatafollowup_user[".NumberOfChars"] = 80;
	$tdatafollowup_user[".ShortName"] = "followup_user";
	$tdatafollowup_user[".OwnerID"] = "";
	$tdatafollowup_user[".OriginalTable"] = "user";

//	field labels
$fieldLabelsfollowup_user = array();
$fieldToolTipsfollowup_user = array();
$pageTitlesfollowup_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollowup_user["English"] = array();
	$fieldToolTipsfollowup_user["English"] = array();
	$pageTitlesfollowup_user["English"] = array();
	$fieldLabelsfollowup_user["English"]["userID"] = "User ID";
	$fieldToolTipsfollowup_user["English"]["userID"] = "";
	$fieldLabelsfollowup_user["English"]["gender"] = "Gender";
	$fieldToolTipsfollowup_user["English"]["gender"] = "";
	$fieldLabelsfollowup_user["English"]["country"] = "Country";
	$fieldToolTipsfollowup_user["English"]["country"] = "";
	$fieldLabelsfollowup_user["English"]["email"] = "Email";
	$fieldToolTipsfollowup_user["English"]["email"] = "";
	$fieldLabelsfollowup_user["English"]["institution"] = "Institution";
	$fieldToolTipsfollowup_user["English"]["institution"] = "";
	$fieldLabelsfollowup_user["English"]["fullName"] = "Full Name";
	$fieldToolTipsfollowup_user["English"]["fullName"] = "";
	$fieldLabelsfollowup_user["English"]["faculty"] = "Faculty";
	$fieldToolTipsfollowup_user["English"]["faculty"] = "";
	$fieldLabelsfollowup_user["English"]["department"] = "Department";
	$fieldToolTipsfollowup_user["English"]["department"] = "";
	$fieldLabelsfollowup_user["English"]["student"] = "Student";
	$fieldToolTipsfollowup_user["English"]["student"] = "";
	$fieldLabelsfollowup_user["English"]["cfid"] = "Confer";
	$fieldToolTipsfollowup_user["English"]["cfid"] = "";
	$fieldLabelsfollowup_user["English"]["note"] = "Note";
	$fieldToolTipsfollowup_user["English"]["note"] = "";
	if (count($fieldToolTipsfollowup_user["English"]))
		$tdatafollowup_user[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfollowup_user[""] = array();
	$fieldToolTipsfollowup_user[""] = array();
	$pageTitlesfollowup_user[""] = array();
	if (count($fieldToolTipsfollowup_user[""]))
		$tdatafollowup_user[".isUseToolTips"] = true;
}


	$tdatafollowup_user[".NCSearch"] = true;



$tdatafollowup_user[".shortTableName"] = "followup_user";
$tdatafollowup_user[".nSecOptions"] = 0;
$tdatafollowup_user[".recsPerRowList"] = 1;
$tdatafollowup_user[".recsPerRowPrint"] = 1;
$tdatafollowup_user[".mainTableOwnerID"] = "";
$tdatafollowup_user[".moveNext"] = 1;
$tdatafollowup_user[".entityType"] = 1;

$tdatafollowup_user[".strOriginalTableName"] = "user";




$tdatafollowup_user[".showAddInPopup"] = false;

$tdatafollowup_user[".showEditInPopup"] = false;

$tdatafollowup_user[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafollowup_user[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafollowup_user[".fieldsForRegister"] = array();

$tdatafollowup_user[".listAjax"] = false;

	$tdatafollowup_user[".audit"] = false;

	$tdatafollowup_user[".locking"] = false;



$tdatafollowup_user[".list"] = true;

$tdatafollowup_user[".inlineEdit"] = true;





$tdatafollowup_user[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafollowup_user[".searchSaving"] = false;
//

$tdatafollowup_user[".showSearchPanel"] = true;
		$tdatafollowup_user[".flexibleSearch"] = true;

if (isMobile())
	$tdatafollowup_user[".isUseAjaxSuggest"] = false;
else
	$tdatafollowup_user[".isUseAjaxSuggest"] = true;

$tdatafollowup_user[".rowHighlite"] = true;


								
$tdatafollowup_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollowup_user[".isUseTimeForSearch"] = false;





$tdatafollowup_user[".allSearchFields"] = array();
$tdatafollowup_user[".filterFields"] = array();
$tdatafollowup_user[".requiredSearchFields"] = array();

$tdatafollowup_user[".allSearchFields"][] = "fullName";
	$tdatafollowup_user[".allSearchFields"][] = "email";
	$tdatafollowup_user[".allSearchFields"][] = "gender";
	$tdatafollowup_user[".allSearchFields"][] = "country";
	$tdatafollowup_user[".allSearchFields"][] = "institution";
	$tdatafollowup_user[".allSearchFields"][] = "faculty";
	$tdatafollowup_user[".allSearchFields"][] = "student";
	$tdatafollowup_user[".allSearchFields"][] = "note";
	

$tdatafollowup_user[".googleLikeFields"] = array();
$tdatafollowup_user[".googleLikeFields"][] = "fullName";
$tdatafollowup_user[".googleLikeFields"][] = "cfid";
$tdatafollowup_user[".googleLikeFields"][] = "note";

$tdatafollowup_user[".panelSearchFields"] = array();
$tdatafollowup_user[".searchPanelOptions"] = array();
$tdatafollowup_user[".panelSearchFields"][] = "fullName";
	$tdatafollowup_user[".panelSearchFields"][] = "email";
	$tdatafollowup_user[".panelSearchFields"][] = "country";
	$tdatafollowup_user[".panelSearchFields"][] = "institution";
	$tdatafollowup_user[".panelSearchFields"][] = "student";
	
$tdatafollowup_user[".advSearchFields"] = array();
$tdatafollowup_user[".advSearchFields"][] = "fullName";
$tdatafollowup_user[".advSearchFields"][] = "email";
$tdatafollowup_user[".advSearchFields"][] = "gender";
$tdatafollowup_user[".advSearchFields"][] = "country";
$tdatafollowup_user[".advSearchFields"][] = "institution";
$tdatafollowup_user[".advSearchFields"][] = "faculty";
$tdatafollowup_user[".advSearchFields"][] = "student";
$tdatafollowup_user[".advSearchFields"][] = "note";

$tdatafollowup_user[".tableType"] = "list";

$tdatafollowup_user[".printerPageOrientation"] = 0;
$tdatafollowup_user[".nPrinterPageScale"] = 100;

$tdatafollowup_user[".nPrinterSplitRecords"] = 40;

$tdatafollowup_user[".nPrinterPDFSplitRecords"] = 40;



$tdatafollowup_user[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatafollowup_user[".pageSize"] = 20;

$tdatafollowup_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafollowup_user[".strOrderBy"] = $tstrOrderBy;

$tdatafollowup_user[".orderindexes"] = array();

$tdatafollowup_user[".sqlHead"] = "SELECT `user`.userID,  `user`.email,  `user`.fullName,  `user`.gender,  `user`.country,  `user`.institution,  `user`.faculty,  `user`.department,  `user`.student,  participate.cfid,  `user`.note";
$tdatafollowup_user[".sqlFrom"] = "FROM `user`  LEFT OUTER JOIN participate ON `user`.userID = participate.userID";
$tdatafollowup_user[".sqlWhereExpr"] = "participate.cfid IS NULL";
$tdatafollowup_user[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Contact_Info1',
					   'tabName'=>"Contact Info",
					   'nType'=>'1',
					   'nOrder'=>4,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrEditTabs[] = array('tabId'=>'Institution_Info1',
					   'tabName'=>"Institution Info",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatafollowup_user[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Contact_Info1',
					  'tabName'=>"Contact Info",
					  'nType'=>'1',
					  'nOrder'=>4,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Institution_Info1',
					  'tabName'=>"Institution Info",
					  'nType'=>'1',
					  'nOrder'=>12,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatafollowup_user[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Contact_Info1',
					   'tabName'=>"Contact Info",
					   'nType'=>'1',
					   'nOrder'=>4,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Institution_Info1',
					   'tabName'=>"Institution Info",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatafollowup_user[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollowup_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollowup_user[".arrGroupsPerPage"] = $arrGPP;


$tableKeysfollowup_user = array();
$tableKeysfollowup_user[] = "userID";
$tdatafollowup_user[".Keys"] = $tableKeysfollowup_user;

$tdatafollowup_user[".listFields"] = array();
$tdatafollowup_user[".listFields"][] = "fullName";
$tdatafollowup_user[".listFields"][] = "email";
$tdatafollowup_user[".listFields"][] = "gender";
$tdatafollowup_user[".listFields"][] = "country";
$tdatafollowup_user[".listFields"][] = "institution";
$tdatafollowup_user[".listFields"][] = "faculty";
$tdatafollowup_user[".listFields"][] = "student";
$tdatafollowup_user[".listFields"][] = "note";

$tdatafollowup_user[".hideMobileList"] = array();


$tdatafollowup_user[".viewFields"] = array();

$tdatafollowup_user[".addFields"] = array();

$tdatafollowup_user[".masterListFields"] = array();
$tdatafollowup_user[".masterListFields"][] = "userID";
$tdatafollowup_user[".masterListFields"][] = "fullName";
$tdatafollowup_user[".masterListFields"][] = "cfid";
$tdatafollowup_user[".masterListFields"][] = "email";
$tdatafollowup_user[".masterListFields"][] = "gender";
$tdatafollowup_user[".masterListFields"][] = "country";
$tdatafollowup_user[".masterListFields"][] = "institution";
$tdatafollowup_user[".masterListFields"][] = "faculty";
$tdatafollowup_user[".masterListFields"][] = "student";
$tdatafollowup_user[".masterListFields"][] = "note";
$tdatafollowup_user[".masterListFields"][] = "department";

$tdatafollowup_user[".inlineAddFields"] = array();

$tdatafollowup_user[".editFields"] = array();

$tdatafollowup_user[".inlineEditFields"] = array();
$tdatafollowup_user[".inlineEditFields"][] = "fullName";
$tdatafollowup_user[".inlineEditFields"][] = "email";
$tdatafollowup_user[".inlineEditFields"][] = "gender";
$tdatafollowup_user[".inlineEditFields"][] = "country";
$tdatafollowup_user[".inlineEditFields"][] = "institution";
$tdatafollowup_user[".inlineEditFields"][] = "faculty";
$tdatafollowup_user[".inlineEditFields"][] = "student";
$tdatafollowup_user[".inlineEditFields"][] = "note";

$tdatafollowup_user[".exportFields"] = array();

$tdatafollowup_user[".importFields"] = array();
$tdatafollowup_user[".importFields"][] = "userID";
$tdatafollowup_user[".importFields"][] = "email";
$tdatafollowup_user[".importFields"][] = "fullName";
$tdatafollowup_user[".importFields"][] = "gender";
$tdatafollowup_user[".importFields"][] = "country";
$tdatafollowup_user[".importFields"][] = "institution";
$tdatafollowup_user[".importFields"][] = "faculty";
$tdatafollowup_user[".importFields"][] = "department";
$tdatafollowup_user[".importFields"][] = "student";
$tdatafollowup_user[".importFields"][] = "cfid";
$tdatafollowup_user[".importFields"][] = "note";

$tdatafollowup_user[".printFields"] = array();

//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","userID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.userID";

	
	
			
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








	$tdatafollowup_user["userID"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatafollowup_user["email"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafollowup_user["fullName"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.gender";

	
	
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
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

	
	
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




	$tdatafollowup_user["gender"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","country");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 60;

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




	$tdatafollowup_user["country"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","institution");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "institution";

		$fdata["isSQLExpression"] = true;
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




	$tdatafollowup_user["institution"] = $fdata;
//	faculty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "faculty";
	$fdata["GoodName"] = "faculty";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","faculty");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "faculty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.faculty";

	
	
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




	$tdatafollowup_user["faculty"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","department");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.department";

	
	
			
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








	$tdatafollowup_user["department"] = $fdata;
//	student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "student";
	$fdata["GoodName"] = "student";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","student");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "student";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.student";

	
	
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
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	
	
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




	$tdatafollowup_user["student"] = $fdata;
//	cfid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cfid";
	$fdata["GoodName"] = "cfid";
	$fdata["ownerTable"] = "participate";
	$fdata["Label"] = GetFieldLabel("followup_user","cfid");
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








	$tdatafollowup_user["cfid"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("followup_user","note");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.note";

	
	
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
		$edata["LCType"] = 3;
	
	
		
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fname";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
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




	$tdatafollowup_user["note"] = $fdata;


$tables_data["followup_user"]=&$tdatafollowup_user;
$field_labels["followup_user"] = &$fieldLabelsfollowup_user;
$fieldToolTips["followup_user"] = &$fieldToolTipsfollowup_user;
$page_titles["followup_user"] = &$pageTitlesfollowup_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["followup_user"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["followup_user"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_followup_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user`.userID,  `user`.email,  `user`.fullName,  `user`.gender,  `user`.country,  `user`.institution,  `user`.faculty,  `user`.department,  `user`.student,  participate.cfid,  `user`.note";
$proto0["m_strFrom"] = "FROM `user`  LEFT OUTER JOIN participate ON `user`.userID = participate.userID";
$proto0["m_strWhere"] = "participate.cfid IS NULL";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "participate.cfid IS NULL";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_user"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "IS NULL";
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
	"m_strName" => "userID",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto5["m_sql"] = "`user`.userID";
$proto5["m_srcTableName"] = "followup_user";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto7["m_sql"] = "`user`.email";
$proto7["m_srcTableName"] = "followup_user";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto9["m_sql"] = "`user`.fullName";
$proto9["m_srcTableName"] = "followup_user";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto11["m_sql"] = "`user`.gender";
$proto11["m_srcTableName"] = "followup_user";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto13["m_sql"] = "`user`.country";
$proto13["m_srcTableName"] = "followup_user";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto15["m_sql"] = "`user`.institution";
$proto15["m_srcTableName"] = "followup_user";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "faculty",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto17["m_sql"] = "`user`.faculty";
$proto17["m_srcTableName"] = "followup_user";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto19["m_sql"] = "`user`.department";
$proto19["m_srcTableName"] = "followup_user";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "student",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto21["m_sql"] = "`user`.student";
$proto21["m_srcTableName"] = "followup_user";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cfid",
	"m_strTable" => "participate",
	"m_srcTableName" => "followup_user"
));

$proto23["m_sql"] = "participate.cfid";
$proto23["m_srcTableName"] = "followup_user";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto25["m_sql"] = "`user`.note";
$proto25["m_srcTableName"] = "followup_user";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "user";
$proto28["m_srcTableName"] = "followup_user";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "userID";
$proto28["m_columns"][] = "email";
$proto28["m_columns"][] = "password";
$proto28["m_columns"][] = "fullName";
$proto28["m_columns"][] = "gender";
$proto28["m_columns"][] = "address";
$proto28["m_columns"][] = "postal";
$proto28["m_columns"][] = "city";
$proto28["m_columns"][] = "state";
$proto28["m_columns"][] = "country";
$proto28["m_columns"][] = "tel";
$proto28["m_columns"][] = "fax";
$proto28["m_columns"][] = "institution";
$proto28["m_columns"][] = "faculty";
$proto28["m_columns"][] = "department";
$proto28["m_columns"][] = "research";
$proto28["m_columns"][] = "student";
$proto28["m_columns"][] = "role";
$proto28["m_columns"][] = "note";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "`user`";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "followup_user";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_LEFTJOIN";
			$proto32=array();
$proto32["m_strName"] = "participate";
$proto32["m_srcTableName"] = "followup_user";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "parID";
$proto32["m_columns"][] = "cid";
$proto32["m_columns"][] = "userID";
$proto32["m_columns"][] = "cfid";
$proto32["m_columns"][] = "confirm";
$proto32["m_columns"][] = "paperCount";
$proto32["m_columns"][] = "listenerRef";
$proto32["m_columns"][] = "note";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN participate ON `user`.userID = participate.userID";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "followup_user";
$proto33=array();
$proto33["m_sql"] = "`user`.userID = participate.userID";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "user",
	"m_srcTableName" => "followup_user"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= participate.userID";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="followup_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_followup_user = createSqlQuery_followup_user();



											

$tdatafollowup_user[".sqlquery"] = $queryData_followup_user;

include_once(getabspath("include/followup_user_events.php"));
$tableEvents["followup_user"] = new eventclass_followup_user;
$tdatafollowup_user[".hasEvents"] = true;

?>