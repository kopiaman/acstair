<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacompany = array();
	$tdatacompany[".truncateText"] = true;
	$tdatacompany[".NumberOfChars"] = 80;
	$tdatacompany[".ShortName"] = "company";
	$tdatacompany[".OwnerID"] = "";
	$tdatacompany[".OriginalTable"] = "company";

//	field labels
$fieldLabelscompany = array();
$fieldToolTipscompany = array();
$pageTitlescompany = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscompany["English"] = array();
	$fieldToolTipscompany["English"] = array();
	$pageTitlescompany["English"] = array();
	$fieldLabelscompany["English"]["coid"] = "Coid";
	$fieldToolTipscompany["English"]["coid"] = "";
	$fieldLabelscompany["English"]["cname"] = "Company Name";
	$fieldToolTipscompany["English"]["cname"] = "";
	$fieldLabelscompany["English"]["caddress"] = "Address";
	$fieldToolTipscompany["English"]["caddress"] = "";
	$fieldLabelscompany["English"]["ccity"] = "City";
	$fieldToolTipscompany["English"]["ccity"] = "";
	$fieldLabelscompany["English"]["cstate"] = "State";
	$fieldToolTipscompany["English"]["cstate"] = "";
	$fieldLabelscompany["English"]["ccountry"] = "Country";
	$fieldToolTipscompany["English"]["ccountry"] = "";
	$fieldLabelscompany["English"]["ctel"] = "Tel";
	$fieldToolTipscompany["English"]["ctel"] = "";
	$fieldLabelscompany["English"]["cfax"] = "Fax";
	$fieldToolTipscompany["English"]["cfax"] = "";
	$fieldLabelscompany["English"]["cemail"] = "Email Official";
	$fieldToolTipscompany["English"]["cemail"] = "";
	$fieldLabelscompany["English"]["creg"] = "Registeration No";
	$fieldToolTipscompany["English"]["creg"] = "";
	$fieldLabelscompany["English"]["reviewEmail"] = "Review Email";
	$fieldToolTipscompany["English"]["reviewEmail"] = "";
	$fieldLabelscompany["English"]["about"] = "About";
	$fieldToolTipscompany["English"]["about"] = "";
	if (count($fieldToolTipscompany["English"]))
		$tdatacompany[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscompany[""] = array();
	$fieldToolTipscompany[""] = array();
	$pageTitlescompany[""] = array();
	if (count($fieldToolTipscompany[""]))
		$tdatacompany[".isUseToolTips"] = true;
}


	$tdatacompany[".NCSearch"] = true;



$tdatacompany[".shortTableName"] = "company";
$tdatacompany[".nSecOptions"] = 0;
$tdatacompany[".recsPerRowList"] = 1;
$tdatacompany[".recsPerRowPrint"] = 1;
$tdatacompany[".mainTableOwnerID"] = "";
$tdatacompany[".moveNext"] = 1;
$tdatacompany[".entityType"] = 0;

$tdatacompany[".strOriginalTableName"] = "company";




$tdatacompany[".showAddInPopup"] = false;

$tdatacompany[".showEditInPopup"] = false;

$tdatacompany[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacompany[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacompany[".fieldsForRegister"] = array();

$tdatacompany[".listAjax"] = false;

	$tdatacompany[".audit"] = false;

	$tdatacompany[".locking"] = false;

$tdatacompany[".edit"] = true;
$tdatacompany[".afterEditAction"] = 1;
$tdatacompany[".closePopupAfterEdit"] = 1;
$tdatacompany[".afterEditActionDetTable"] = "";


$tdatacompany[".list"] = true;






$tdatacompany[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacompany[".searchSaving"] = false;
//

$tdatacompany[".showSearchPanel"] = true;
		$tdatacompany[".flexibleSearch"] = true;

if (isMobile())
	$tdatacompany[".isUseAjaxSuggest"] = false;
else
	$tdatacompany[".isUseAjaxSuggest"] = true;

$tdatacompany[".rowHighlite"] = true;


								
$tdatacompany[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacompany[".isUseTimeForSearch"] = false;





$tdatacompany[".allSearchFields"] = array();
$tdatacompany[".filterFields"] = array();
$tdatacompany[".requiredSearchFields"] = array();



$tdatacompany[".googleLikeFields"] = array();
$tdatacompany[".googleLikeFields"][] = "coid";
$tdatacompany[".googleLikeFields"][] = "cname";
$tdatacompany[".googleLikeFields"][] = "creg";
$tdatacompany[".googleLikeFields"][] = "caddress";
$tdatacompany[".googleLikeFields"][] = "ccity";
$tdatacompany[".googleLikeFields"][] = "cstate";
$tdatacompany[".googleLikeFields"][] = "ccountry";
$tdatacompany[".googleLikeFields"][] = "ctel";
$tdatacompany[".googleLikeFields"][] = "cfax";
$tdatacompany[".googleLikeFields"][] = "cemail";
$tdatacompany[".googleLikeFields"][] = "reviewEmail";
$tdatacompany[".googleLikeFields"][] = "about";



$tdatacompany[".tableType"] = "list";

$tdatacompany[".printerPageOrientation"] = 0;
$tdatacompany[".nPrinterPageScale"] = 100;

$tdatacompany[".nPrinterSplitRecords"] = 40;

$tdatacompany[".nPrinterPDFSplitRecords"] = 40;



$tdatacompany[".geocodingEnabled"] = false;





$tdatacompany[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdatacompany[".pageSize"] = 20;

$tdatacompany[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacompany[".strOrderBy"] = $tstrOrderBy;

$tdatacompany[".orderindexes"] = array();

$tdatacompany[".sqlHead"] = "SELECT coid,  	cname,  	creg,  	caddress,  	ccity,  	cstate,  	ccountry,  	ctel,  	cfax,  	cemail,  	reviewEmail,  	about";
$tdatacompany[".sqlFrom"] = "FROM company";
$tdatacompany[".sqlWhereExpr"] = "";
$tdatacompany[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacompany[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacompany[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscompany = array();
$tableKeyscompany[] = "coid";
$tdatacompany[".Keys"] = $tableKeyscompany;

$tdatacompany[".listFields"] = array();
$tdatacompany[".listFields"][] = "cname";
$tdatacompany[".listFields"][] = "ctel";
$tdatacompany[".listFields"][] = "cfax";
$tdatacompany[".listFields"][] = "cemail";
$tdatacompany[".listFields"][] = "reviewEmail";

$tdatacompany[".hideMobileList"] = array();


$tdatacompany[".viewFields"] = array();

$tdatacompany[".addFields"] = array();

$tdatacompany[".masterListFields"] = array();
$tdatacompany[".masterListFields"][] = "coid";
$tdatacompany[".masterListFields"][] = "creg";
$tdatacompany[".masterListFields"][] = "cname";
$tdatacompany[".masterListFields"][] = "caddress";
$tdatacompany[".masterListFields"][] = "ccity";
$tdatacompany[".masterListFields"][] = "cstate";
$tdatacompany[".masterListFields"][] = "ccountry";
$tdatacompany[".masterListFields"][] = "ctel";
$tdatacompany[".masterListFields"][] = "cfax";
$tdatacompany[".masterListFields"][] = "cemail";
$tdatacompany[".masterListFields"][] = "reviewEmail";
$tdatacompany[".masterListFields"][] = "about";

$tdatacompany[".inlineAddFields"] = array();

$tdatacompany[".editFields"] = array();
$tdatacompany[".editFields"][] = "creg";
$tdatacompany[".editFields"][] = "cname";
$tdatacompany[".editFields"][] = "caddress";
$tdatacompany[".editFields"][] = "ccity";
$tdatacompany[".editFields"][] = "cstate";
$tdatacompany[".editFields"][] = "ccountry";
$tdatacompany[".editFields"][] = "ctel";
$tdatacompany[".editFields"][] = "cfax";
$tdatacompany[".editFields"][] = "cemail";
$tdatacompany[".editFields"][] = "reviewEmail";
$tdatacompany[".editFields"][] = "about";

$tdatacompany[".inlineEditFields"] = array();

$tdatacompany[".exportFields"] = array();

$tdatacompany[".importFields"] = array();
$tdatacompany[".importFields"][] = "coid";
$tdatacompany[".importFields"][] = "cname";
$tdatacompany[".importFields"][] = "creg";
$tdatacompany[".importFields"][] = "caddress";
$tdatacompany[".importFields"][] = "ccity";
$tdatacompany[".importFields"][] = "cstate";
$tdatacompany[".importFields"][] = "ccountry";
$tdatacompany[".importFields"][] = "ctel";
$tdatacompany[".importFields"][] = "cfax";
$tdatacompany[".importFields"][] = "cemail";
$tdatacompany[".importFields"][] = "reviewEmail";
$tdatacompany[".importFields"][] = "about";

$tdatacompany[".printFields"] = array();

//	coid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "coid";
	$fdata["GoodName"] = "coid";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","coid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "coid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coid";

	
	
			
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








	$tdatacompany["coid"] = $fdata;
//	cname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cname";
	$fdata["GoodName"] = "cname";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","cname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cname";

	
	
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

		$edata["controlWidth"] = 255;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacompany["cname"] = $fdata;
//	creg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creg";
	$fdata["GoodName"] = "creg";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","creg");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "creg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creg";

	
	
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
		
		$edata["controlWidth"] = 255;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacompany["creg"] = $fdata;
//	caddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "caddress";
	$fdata["GoodName"] = "caddress";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","caddress");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "caddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caddress";

	
	
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
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 257;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacompany["caddress"] = $fdata;
//	ccity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ccity";
	$fdata["GoodName"] = "ccity";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","ccity");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "ccity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ccity";

	
	
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








	$tdatacompany["ccity"] = $fdata;
//	cstate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cstate";
	$fdata["GoodName"] = "cstate";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","cstate");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cstate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cstate";

	
	
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








	$tdatacompany["cstate"] = $fdata;
//	ccountry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ccountry";
	$fdata["GoodName"] = "ccountry";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","ccountry");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "ccountry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ccountry";

	
	
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








	$tdatacompany["ccountry"] = $fdata;
//	ctel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ctel";
	$fdata["GoodName"] = "ctel";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","ctel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "ctel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctel";

	
	
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

		$edata["controlWidth"] = 253;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacompany["ctel"] = $fdata;
//	cfax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cfax";
	$fdata["GoodName"] = "cfax";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","cfax");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cfax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cfax";

	
	
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

		$edata["controlWidth"] = 252;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacompany["cfax"] = $fdata;
//	cemail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cemail";
	$fdata["GoodName"] = "cemail";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","cemail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "cemail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cemail";

	
	
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

		$edata["controlWidth"] = 252;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacompany["cemail"] = $fdata;
//	reviewEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reviewEmail";
	$fdata["GoodName"] = "reviewEmail";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","reviewEmail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "reviewEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reviewEmail";

	
	
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








	$tdatacompany["reviewEmail"] = $fdata;
//	about
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "about";
	$fdata["GoodName"] = "about";
	$fdata["ownerTable"] = "company";
	$fdata["Label"] = GetFieldLabel("company","about");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	
	
	
	
		$fdata["strField"] = "about";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "about";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 313;
			$edata["nCols"] = 663;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacompany["about"] = $fdata;


$tables_data["company"]=&$tdatacompany;
$field_labels["company"] = &$fieldLabelscompany;
$fieldToolTips["company"] = &$fieldToolTipscompany;
$page_titles["company"] = &$pageTitlescompany;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["company"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["company"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_company()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "coid,  	cname,  	creg,  	caddress,  	ccity,  	cstate,  	ccountry,  	ctel,  	cfax,  	cemail,  	reviewEmail,  	about";
$proto0["m_strFrom"] = "FROM company";
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
	"m_strName" => "coid",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto5["m_sql"] = "coid";
$proto5["m_srcTableName"] = "company";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "cname",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto7["m_sql"] = "cname";
$proto7["m_srcTableName"] = "company";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "creg",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto9["m_sql"] = "creg";
$proto9["m_srcTableName"] = "company";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "caddress",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto11["m_sql"] = "caddress";
$proto11["m_srcTableName"] = "company";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ccity",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto13["m_sql"] = "ccity";
$proto13["m_srcTableName"] = "company";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cstate",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto15["m_sql"] = "cstate";
$proto15["m_srcTableName"] = "company";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ccountry",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto17["m_sql"] = "ccountry";
$proto17["m_srcTableName"] = "company";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ctel",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto19["m_sql"] = "ctel";
$proto19["m_srcTableName"] = "company";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cfax",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto21["m_sql"] = "cfax";
$proto21["m_srcTableName"] = "company";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cemail",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto23["m_sql"] = "cemail";
$proto23["m_srcTableName"] = "company";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "reviewEmail",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto25["m_sql"] = "reviewEmail";
$proto25["m_srcTableName"] = "company";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "about",
	"m_strTable" => "company",
	"m_srcTableName" => "company"
));

$proto27["m_sql"] = "about";
$proto27["m_srcTableName"] = "company";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "company";
$proto30["m_srcTableName"] = "company";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "coid";
$proto30["m_columns"][] = "cname";
$proto30["m_columns"][] = "creg";
$proto30["m_columns"][] = "caddress";
$proto30["m_columns"][] = "ccity";
$proto30["m_columns"][] = "cstate";
$proto30["m_columns"][] = "ccountry";
$proto30["m_columns"][] = "ctel";
$proto30["m_columns"][] = "cfax";
$proto30["m_columns"][] = "cemail";
$proto30["m_columns"][] = "reviewEmail";
$proto30["m_columns"][] = "about";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "company";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "company";
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
$proto0["m_srcTableName"]="company";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_company = createSqlQuery_company();



												

$tdatacompany[".sqlquery"] = $queryData_company;

$tableEvents["company"] = new eventsBase;
$tdatacompany[".hasEvents"] = false;

?>