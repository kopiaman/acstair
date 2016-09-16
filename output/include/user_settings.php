<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser = array();
	$tdatauser[".truncateText"] = true;
	$tdatauser[".NumberOfChars"] = 80;
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
$fieldToolTipsuser = array();
$pageTitlesuser = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser["English"] = array();
	$fieldToolTipsuser["English"] = array();
	$pageTitlesuser["English"] = array();
	$fieldLabelsuser["English"]["userID"] = "User ID";
	$fieldToolTipsuser["English"]["userID"] = "";
	$fieldLabelsuser["English"]["password"] = "Password";
	$fieldToolTipsuser["English"]["password"] = "";
	$fieldLabelsuser["English"]["gender"] = "Gender";
	$fieldToolTipsuser["English"]["gender"] = "";
	$fieldLabelsuser["English"]["address"] = "Address";
	$fieldToolTipsuser["English"]["address"] = "";
	$fieldLabelsuser["English"]["country"] = "Country";
	$fieldToolTipsuser["English"]["country"] = "";
	$fieldLabelsuser["English"]["tel"] = "Tel";
	$fieldToolTipsuser["English"]["tel"] = "";
	$fieldLabelsuser["English"]["fax"] = "Fax";
	$fieldToolTipsuser["English"]["fax"] = "";
	$fieldLabelsuser["English"]["email"] = "Email";
	$fieldToolTipsuser["English"]["email"] = "";
	$fieldLabelsuser["English"]["institution"] = "Institution";
	$fieldToolTipsuser["English"]["institution"] = "";
	$fieldLabelsuser["English"]["fullName"] = "Full Name";
	$fieldToolTipsuser["English"]["fullName"] = "";
	$fieldLabelsuser["English"]["faculty"] = "Faculty";
	$fieldToolTipsuser["English"]["faculty"] = "";
	$fieldLabelsuser["English"]["department"] = "Department";
	$fieldToolTipsuser["English"]["department"] = "";
	$fieldLabelsuser["English"]["research"] = "Research";
	$fieldToolTipsuser["English"]["research"] = "";
	$fieldLabelsuser["English"]["postal"] = "Postal";
	$fieldToolTipsuser["English"]["postal"] = "";
	$fieldLabelsuser["English"]["city"] = "City";
	$fieldToolTipsuser["English"]["city"] = "";
	$fieldLabelsuser["English"]["state"] = "State";
	$fieldToolTipsuser["English"]["state"] = "";
	$fieldLabelsuser["English"]["role"] = "Role";
	$fieldToolTipsuser["English"]["role"] = "";
	$fieldLabelsuser["English"]["student"] = "Student";
	$fieldToolTipsuser["English"]["student"] = "";
	$fieldLabelsuser["English"]["note"] = "Note";
	$fieldToolTipsuser["English"]["note"] = "";
	if (count($fieldToolTipsuser["English"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser[""] = array();
	$fieldToolTipsuser[""] = array();
	$pageTitlesuser[""] = array();
	if (count($fieldToolTipsuser[""]))
		$tdatauser[".isUseToolTips"] = true;
}


	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 0;
$tdatauser[".recsPerRowList"] = 1;
$tdatauser[".recsPerRowPrint"] = 1;
$tdatauser[".mainTableOwnerID"] = "";
$tdatauser[".moveNext"] = 1;
$tdatauser[".entityType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";




$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser[".fieldsForRegister"] = array();

$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = false;

$tdatauser[".edit"] = true;
$tdatauser[".afterEditAction"] = 1;
$tdatauser[".closePopupAfterEdit"] = 1;
$tdatauser[".afterEditActionDetTable"] = "";

$tdatauser[".add"] = true;
$tdatauser[".afterAddAction"] = 1;
$tdatauser[".closePopupAfterAdd"] = 1;
$tdatauser[".afterAddActionDetTable"] = "";

$tdatauser[".list"] = true;

$tdatauser[".view"] = true;


$tdatauser[".exportTo"] = true;


$tdatauser[".delete"] = true;

$tdatauser[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser[".searchSaving"] = false;
//

$tdatauser[".showSearchPanel"] = true;
		$tdatauser[".flexibleSearch"] = true;

if (isMobile())
	$tdatauser[".isUseAjaxSuggest"] = false;
else
	$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;


								
$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;





$tdatauser[".allSearchFields"] = array();
$tdatauser[".filterFields"] = array();
$tdatauser[".requiredSearchFields"] = array();

$tdatauser[".allSearchFields"][] = "password";
	$tdatauser[".allSearchFields"][] = "userID";
	$tdatauser[".allSearchFields"][] = "fullName";
	$tdatauser[".allSearchFields"][] = "email";
	$tdatauser[".allSearchFields"][] = "state";
	$tdatauser[".allSearchFields"][] = "gender";
	$tdatauser[".allSearchFields"][] = "country";
	$tdatauser[".allSearchFields"][] = "address";
	$tdatauser[".allSearchFields"][] = "tel";
	$tdatauser[".allSearchFields"][] = "institution";
	$tdatauser[".allSearchFields"][] = "city";
	$tdatauser[".allSearchFields"][] = "student";
	$tdatauser[".allSearchFields"][] = "postal";
	$tdatauser[".allSearchFields"][] = "role";
	$tdatauser[".allSearchFields"][] = "note";
	$tdatauser[".allSearchFields"][] = "fax";
	$tdatauser[".allSearchFields"][] = "faculty";
	$tdatauser[".allSearchFields"][] = "department";
	$tdatauser[".allSearchFields"][] = "research";
	

$tdatauser[".googleLikeFields"] = array();
$tdatauser[".googleLikeFields"][] = "fullName";
$tdatauser[".googleLikeFields"][] = "note";

$tdatauser[".panelSearchFields"] = array();
$tdatauser[".searchPanelOptions"] = array();
$tdatauser[".panelSearchFields"][] = "fullName";
	$tdatauser[".panelSearchFields"][] = "email";
	$tdatauser[".panelSearchFields"][] = "country";
	$tdatauser[".panelSearchFields"][] = "institution";
	$tdatauser[".panelSearchFields"][] = "student";
	
$tdatauser[".advSearchFields"] = array();
$tdatauser[".advSearchFields"][] = "password";
$tdatauser[".advSearchFields"][] = "userID";
$tdatauser[".advSearchFields"][] = "fullName";
$tdatauser[".advSearchFields"][] = "email";
$tdatauser[".advSearchFields"][] = "state";
$tdatauser[".advSearchFields"][] = "gender";
$tdatauser[".advSearchFields"][] = "country";
$tdatauser[".advSearchFields"][] = "address";
$tdatauser[".advSearchFields"][] = "tel";
$tdatauser[".advSearchFields"][] = "institution";
$tdatauser[".advSearchFields"][] = "city";
$tdatauser[".advSearchFields"][] = "postal";
$tdatauser[".advSearchFields"][] = "student";
$tdatauser[".advSearchFields"][] = "role";
$tdatauser[".advSearchFields"][] = "fax";
$tdatauser[".advSearchFields"][] = "faculty";
$tdatauser[".advSearchFields"][] = "department";
$tdatauser[".advSearchFields"][] = "research";

$tdatauser[".tableType"] = "list";

$tdatauser[".printerPageOrientation"] = 0;
$tdatauser[".nPrinterPageScale"] = 100;

$tdatauser[".nPrinterSplitRecords"] = 40;

$tdatauser[".nPrinterPDFSplitRecords"] = 40;



$tdatauser[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatauser[".pageSize"] = 20;

$tdatauser[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT userID,  	email,  	password,  	fullName,  	gender,  	address,  	postal,  	city,  	`state`,  	country,  	tel,  	fax,  	institution,  	faculty,  	department,  	research,  	student,  	`role`,  	note";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "address";
	$tabFields[] = "city";
	$tabFields[] = "postal";
	$tabFields[] = "state";
	$tabFields[] = "country";
	$tabFields[] = "tel";
	$tabFields[] = "fax";
$arrEditTabs[] = array('tabId'=>'Contact_Info1',
					   'tabName'=>"Contact Info",
					   'nType'=>'1',
					   'nOrder'=>4,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "institution";
	$tabFields[] = "faculty";
	$tabFields[] = "department";
	$tabFields[] = "research";
	$tabFields[] = "student";
$arrEditTabs[] = array('tabId'=>'Institution_Info1',
					   'tabName'=>"Institution Info",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatauser[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "address";
	$tabFields[] = "city";
	$tabFields[] = "postal";
	$tabFields[] = "state";
	$tabFields[] = "country";
	$tabFields[] = "tel";
	$tabFields[] = "fax";
$arrAddTabs[] = array('tabId'=>'Contact_Info1',
					  'tabName'=>"Contact Info",
					  'nType'=>'1',
					  'nOrder'=>4,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "institution";
	$tabFields[] = "faculty";
	$tabFields[] = "department";
	$tabFields[] = "research";
	$tabFields[] = "student";
$arrAddTabs[] = array('tabId'=>'Institution_Info1',
					  'tabName'=>"Institution Info",
					  'nType'=>'1',
					  'nOrder'=>12,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatauser[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "address";
	$tabFields[] = "city";
	$tabFields[] = "postal";
	$tabFields[] = "state";
	$tabFields[] = "country";
	$tabFields[] = "tel";
	$tabFields[] = "fax";
$arrViewTabs[] = array('tabId'=>'Contact_Info1',
					   'tabName'=>"Contact Info",
					   'nType'=>'1',
					   'nOrder'=>4,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "institution";
	$tabFields[] = "faculty";
	$tabFields[] = "department";
	$tabFields[] = "research";
	$tabFields[] = "student";
$arrViewTabs[] = array('tabId'=>'Institution_Info1',
					   'tabName'=>"Institution Info",
					   'nType'=>'1',
					   'nOrder'=>12,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatauser[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;


$tableKeysuser = array();
$tableKeysuser[] = "userID";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();
$tdatauser[".listFields"][] = "fullName";
$tdatauser[".listFields"][] = "email";
$tdatauser[".listFields"][] = "state";
$tdatauser[".listFields"][] = "country";
$tdatauser[".listFields"][] = "tel";
$tdatauser[".listFields"][] = "institution";
$tdatauser[".listFields"][] = "student";
$tdatauser[".listFields"][] = "role";

$tdatauser[".hideMobileList"] = array();


$tdatauser[".viewFields"] = array();
$tdatauser[".viewFields"][] = "fullName";
$tdatauser[".viewFields"][] = "email";
$tdatauser[".viewFields"][] = "gender";
$tdatauser[".viewFields"][] = "address";
$tdatauser[".viewFields"][] = "city";
$tdatauser[".viewFields"][] = "postal";
$tdatauser[".viewFields"][] = "state";
$tdatauser[".viewFields"][] = "country";
$tdatauser[".viewFields"][] = "tel";
$tdatauser[".viewFields"][] = "fax";
$tdatauser[".viewFields"][] = "institution";
$tdatauser[".viewFields"][] = "faculty";
$tdatauser[".viewFields"][] = "department";
$tdatauser[".viewFields"][] = "research";
$tdatauser[".viewFields"][] = "student";
$tdatauser[".viewFields"][] = "role";

$tdatauser[".addFields"] = array();
$tdatauser[".addFields"][] = "fullName";
$tdatauser[".addFields"][] = "email";
$tdatauser[".addFields"][] = "gender";
$tdatauser[".addFields"][] = "address";
$tdatauser[".addFields"][] = "city";
$tdatauser[".addFields"][] = "postal";
$tdatauser[".addFields"][] = "state";
$tdatauser[".addFields"][] = "country";
$tdatauser[".addFields"][] = "tel";
$tdatauser[".addFields"][] = "fax";
$tdatauser[".addFields"][] = "institution";
$tdatauser[".addFields"][] = "faculty";
$tdatauser[".addFields"][] = "department";
$tdatauser[".addFields"][] = "research";
$tdatauser[".addFields"][] = "student";
$tdatauser[".addFields"][] = "role";

$tdatauser[".masterListFields"] = array();
$tdatauser[".masterListFields"][] = "password";
$tdatauser[".masterListFields"][] = "userID";
$tdatauser[".masterListFields"][] = "fullName";
$tdatauser[".masterListFields"][] = "email";
$tdatauser[".masterListFields"][] = "state";
$tdatauser[".masterListFields"][] = "gender";
$tdatauser[".masterListFields"][] = "country";
$tdatauser[".masterListFields"][] = "address";
$tdatauser[".masterListFields"][] = "tel";
$tdatauser[".masterListFields"][] = "institution";
$tdatauser[".masterListFields"][] = "city";
$tdatauser[".masterListFields"][] = "student";
$tdatauser[".masterListFields"][] = "postal";
$tdatauser[".masterListFields"][] = "role";
$tdatauser[".masterListFields"][] = "note";
$tdatauser[".masterListFields"][] = "fax";
$tdatauser[".masterListFields"][] = "faculty";
$tdatauser[".masterListFields"][] = "department";
$tdatauser[".masterListFields"][] = "research";

$tdatauser[".inlineAddFields"] = array();

$tdatauser[".editFields"] = array();
$tdatauser[".editFields"][] = "fullName";
$tdatauser[".editFields"][] = "email";
$tdatauser[".editFields"][] = "gender";
$tdatauser[".editFields"][] = "address";
$tdatauser[".editFields"][] = "city";
$tdatauser[".editFields"][] = "postal";
$tdatauser[".editFields"][] = "state";
$tdatauser[".editFields"][] = "country";
$tdatauser[".editFields"][] = "tel";
$tdatauser[".editFields"][] = "fax";
$tdatauser[".editFields"][] = "institution";
$tdatauser[".editFields"][] = "faculty";
$tdatauser[".editFields"][] = "department";
$tdatauser[".editFields"][] = "research";
$tdatauser[".editFields"][] = "student";
$tdatauser[".editFields"][] = "role";

$tdatauser[".inlineEditFields"] = array();

$tdatauser[".exportFields"] = array();
$tdatauser[".exportFields"][] = "fullName";
$tdatauser[".exportFields"][] = "email";
$tdatauser[".exportFields"][] = "country";
$tdatauser[".exportFields"][] = "institution";

$tdatauser[".importFields"] = array();
$tdatauser[".importFields"][] = "userID";
$tdatauser[".importFields"][] = "email";
$tdatauser[".importFields"][] = "password";
$tdatauser[".importFields"][] = "fullName";
$tdatauser[".importFields"][] = "gender";
$tdatauser[".importFields"][] = "address";
$tdatauser[".importFields"][] = "postal";
$tdatauser[".importFields"][] = "city";
$tdatauser[".importFields"][] = "state";
$tdatauser[".importFields"][] = "country";
$tdatauser[".importFields"][] = "tel";
$tdatauser[".importFields"][] = "fax";
$tdatauser[".importFields"][] = "institution";
$tdatauser[".importFields"][] = "faculty";
$tdatauser[".importFields"][] = "department";
$tdatauser[".importFields"][] = "research";
$tdatauser[".importFields"][] = "student";
$tdatauser[".importFields"][] = "role";
$tdatauser[".importFields"][] = "note";

$tdatauser[".printFields"] = array();

//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","userID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatauser["userID"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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




	$tdatauser["email"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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




	$tdatauser["password"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullName";

	
	
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




	$tdatauser["fullName"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";

	
	
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
	
		$edata["HorizontalLookup"] = true;

	
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




	$tdatauser["gender"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","address");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";

	
	
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




	$tdatauser["address"] = $fdata;
//	postal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "postal";
	$fdata["GoodName"] = "postal";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","postal");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "postal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postal";

	
	
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




	$tdatauser["postal"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","city");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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




	$tdatauser["city"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","state");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "state";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`state`";

	
	
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




	$tdatauser["state"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","country");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";

	
	
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




	$tdatauser["country"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel";

	
	
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




	$tdatauser["tel"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","fax");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fax";

	
	
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




	$tdatauser["fax"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","institution");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "institution";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "institution";

	
	
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




	$tdatauser["institution"] = $fdata;
//	faculty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "faculty";
	$fdata["GoodName"] = "faculty";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","faculty");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "faculty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "faculty";

	
	
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




	$tdatauser["faculty"] = $fdata;
//	department
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "department";
	$fdata["GoodName"] = "department";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","department");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "department";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "department";

	
	
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




	$tdatauser["department"] = $fdata;
//	research
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "research";
	$fdata["GoodName"] = "research";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","research");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "research";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "research";

	
	
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




	$tdatauser["research"] = $fdata;
//	student
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "student";
	$fdata["GoodName"] = "student";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","student");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "student";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student";

	
	
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
	
		$edata["HorizontalLookup"] = true;

	
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




	$tdatauser["student"] = $fdata;
//	role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "role";
	$fdata["GoodName"] = "role";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","role");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "role";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`role`";

	
	
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
	
		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "admin";
	$edata["LookupValues"][] = "reviewer";
	$edata["LookupValues"][] = "guest";
	$edata["LookupValues"][] = "none";

	
	
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




	$tdatauser["role"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","note");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "note";

	
	
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




	$tdatauser["note"] = $fdata;


$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;
$page_titles["user"] = &$pageTitlesuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "userID,  	email,  	password,  	fullName,  	gender,  	address,  	postal,  	city,  	`state`,  	country,  	tel,  	fax,  	institution,  	faculty,  	department,  	research,  	student,  	`role`,  	note";
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
	"m_strName" => "userID",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto5["m_sql"] = "userID";
$proto5["m_srcTableName"] = "user";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto7["m_sql"] = "email";
$proto7["m_srcTableName"] = "user";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto9["m_sql"] = "password";
$proto9["m_srcTableName"] = "user";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto11["m_sql"] = "fullName";
$proto11["m_srcTableName"] = "user";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto13["m_sql"] = "gender";
$proto13["m_srcTableName"] = "user";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto15["m_sql"] = "address";
$proto15["m_srcTableName"] = "user";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "postal",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto17["m_sql"] = "postal";
$proto17["m_srcTableName"] = "user";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto19["m_sql"] = "city";
$proto19["m_srcTableName"] = "user";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto21["m_sql"] = "`state`";
$proto21["m_srcTableName"] = "user";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto23["m_sql"] = "country";
$proto23["m_srcTableName"] = "user";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto25["m_sql"] = "tel";
$proto25["m_srcTableName"] = "user";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto27["m_sql"] = "fax";
$proto27["m_srcTableName"] = "user";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto29["m_sql"] = "institution";
$proto29["m_srcTableName"] = "user";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "faculty",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto31["m_sql"] = "faculty";
$proto31["m_srcTableName"] = "user";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "department",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto33["m_sql"] = "department";
$proto33["m_srcTableName"] = "user";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "research",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto35["m_sql"] = "research";
$proto35["m_srcTableName"] = "user";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "student",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto37["m_sql"] = "student";
$proto37["m_srcTableName"] = "user";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "role",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto39["m_sql"] = "`role`";
$proto39["m_srcTableName"] = "user";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "user",
	"m_srcTableName" => "user"
));

$proto41["m_sql"] = "note";
$proto41["m_srcTableName"] = "user";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "user";
$proto44["m_srcTableName"] = "user";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "userID";
$proto44["m_columns"][] = "email";
$proto44["m_columns"][] = "password";
$proto44["m_columns"][] = "fullName";
$proto44["m_columns"][] = "gender";
$proto44["m_columns"][] = "address";
$proto44["m_columns"][] = "postal";
$proto44["m_columns"][] = "city";
$proto44["m_columns"][] = "state";
$proto44["m_columns"][] = "country";
$proto44["m_columns"][] = "tel";
$proto44["m_columns"][] = "fax";
$proto44["m_columns"][] = "institution";
$proto44["m_columns"][] = "faculty";
$proto44["m_columns"][] = "department";
$proto44["m_columns"][] = "research";
$proto44["m_columns"][] = "student";
$proto44["m_columns"][] = "role";
$proto44["m_columns"][] = "note";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "`user`";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "user";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user = createSqlQuery_user();



																			

$tdatauser[".sqlquery"] = $queryData_user;

$tableEvents["user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

?>