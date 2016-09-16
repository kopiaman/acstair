<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapaper_author = array();
	$tdatapaper_author[".NumberOfChars"] = 50; 
	$tdatapaper_author[".ShortName"] = "paper_author";
	$tdatapaper_author[".OwnerID"] = "userID";
	$tdatapaper_author[".OriginalTable"] = "paper";

//	field labels
$fieldLabelspaper_author = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspaper_author["English"] = array();
	$fieldToolTipspaper_author["English"] = array();
	$fieldLabelspaper_author["English"]["paperID"] = "Paper ";
	$fieldToolTipspaper_author["English"]["paperID"] = "";
	$fieldLabelspaper_author["English"]["userID"] = "User ";
	$fieldToolTipspaper_author["English"]["userID"] = "";
	$fieldLabelspaper_author["English"]["author1"] = "Name";
	$fieldToolTipspaper_author["English"]["author1"] = "";
	$fieldLabelspaper_author["English"]["institution1"] = "Institution";
	$fieldToolTipspaper_author["English"]["institution1"] = "";
	$fieldLabelspaper_author["English"]["address1"] = "Address";
	$fieldToolTipspaper_author["English"]["address1"] = "";
	$fieldLabelspaper_author["English"]["country1"] = "Country";
	$fieldToolTipspaper_author["English"]["country1"] = "";
	$fieldLabelspaper_author["English"]["author2"] = "Name";
	$fieldToolTipspaper_author["English"]["author2"] = "";
	$fieldLabelspaper_author["English"]["institution2"] = "Institution";
	$fieldToolTipspaper_author["English"]["institution2"] = "";
	$fieldLabelspaper_author["English"]["address2"] = "Address";
	$fieldToolTipspaper_author["English"]["address2"] = "";
	$fieldLabelspaper_author["English"]["country2"] = "Country";
	$fieldToolTipspaper_author["English"]["country2"] = "";
	$fieldLabelspaper_author["English"]["note"] = "Note";
	$fieldToolTipspaper_author["English"]["note"] = "";
	$fieldLabelspaper_author["English"]["funded"] = "Funded";
	$fieldToolTipspaper_author["English"]["funded"] = "";
	$fieldLabelspaper_author["English"]["abstract"] = "Abstract";
	$fieldToolTipspaper_author["English"]["abstract"] = "";
	$fieldLabelspaper_author["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipspaper_author["English"]["paperStatus"] = "";
	$fieldLabelspaper_author["English"]["attachment"] = "Upload Full Paper";
	$fieldToolTipspaper_author["English"]["attachment"] = "";
	$fieldLabelspaper_author["English"]["title"] = "Title";
	$fieldToolTipspaper_author["English"]["title"] = "";
	$fieldLabelspaper_author["English"]["cid"] = "Conference ";
	$fieldToolTipspaper_author["English"]["cid"] = "";
	if (count($fieldToolTipspaper_author["English"]))
		$tdatapaper_author[".isUseToolTips"] = true;
}
	
	
	$tdatapaper_author[".NCSearch"] = true;



$tdatapaper_author[".shortTableName"] = "paper_author";
$tdatapaper_author[".nSecOptions"] = 1;
$tdatapaper_author[".recsPerRowList"] = 1;
$tdatapaper_author[".mainTableOwnerID"] = "userID";
$tdatapaper_author[".moveNext"] = 1;
$tdatapaper_author[".nType"] = 1;

$tdatapaper_author[".strOriginalTableName"] = "paper";




$tdatapaper_author[".showAddInPopup"] = false;

$tdatapaper_author[".showEditInPopup"] = false;

$tdatapaper_author[".showViewInPopup"] = false;

$tdatapaper_author[".fieldsForRegister"] = array();

$tdatapaper_author[".listAjax"] = false;

	$tdatapaper_author[".audit"] = false;

	$tdatapaper_author[".locking"] = false;

$tdatapaper_author[".listIcons"] = true;
$tdatapaper_author[".edit"] = true;
$tdatapaper_author[".view"] = true;




$tdatapaper_author[".showSimpleSearchOptions"] = false;

$tdatapaper_author[".showSearchPanel"] = true;

if (isMobile())
	$tdatapaper_author[".isUseAjaxSuggest"] = false;
else 
	$tdatapaper_author[".isUseAjaxSuggest"] = true;

$tdatapaper_author[".rowHighlite"] = true;

// button handlers file names

$tdatapaper_author[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaper_author[".isUseTimeForSearch"] = false;




$tdatapaper_author[".allSearchFields"] = array();


$tdatapaper_author[".googleLikeFields"][] = "paperID";
$tdatapaper_author[".googleLikeFields"][] = "userID";
$tdatapaper_author[".googleLikeFields"][] = "cid";
$tdatapaper_author[".googleLikeFields"][] = "author1";
$tdatapaper_author[".googleLikeFields"][] = "institution1";
$tdatapaper_author[".googleLikeFields"][] = "address1";
$tdatapaper_author[".googleLikeFields"][] = "country1";
$tdatapaper_author[".googleLikeFields"][] = "author2";
$tdatapaper_author[".googleLikeFields"][] = "institution2";
$tdatapaper_author[".googleLikeFields"][] = "address2";
$tdatapaper_author[".googleLikeFields"][] = "country2";
$tdatapaper_author[".googleLikeFields"][] = "note";
$tdatapaper_author[".googleLikeFields"][] = "funded";
$tdatapaper_author[".googleLikeFields"][] = "title";
$tdatapaper_author[".googleLikeFields"][] = "abstract";
$tdatapaper_author[".googleLikeFields"][] = "paperStatus";
$tdatapaper_author[".googleLikeFields"][] = "attachment";



$tdatapaper_author[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapaper_author[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaper_author[".strOrderBy"] = $tstrOrderBy;

$tdatapaper_author[".orderindexes"] = array();

$tdatapaper_author[".sqlHead"] = "SELECT paperID,  userID,  cid,  author1,  institution1,  address1,  country1,  author2,  institution2,  address2,  country2,  note,  funded,  title,  abstract,  paperStatus,  attachment";
$tdatapaper_author[".sqlFrom"] = "FROM paper";
$tdatapaper_author[".sqlWhereExpr"] = "";
$tdatapaper_author[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	$tabFields[] = "author1";
	$tabFields[] = "institution1";
	$tabFields[] = "address1";
	$tabFields[] = "country1";
$arrEditTabs[] = array('tabId'=>'Institution_11',
					   'tabName'=>"Author 1",
					   'nType'=>'1',
					   'nOrder'=>4,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "author2";
	$tabFields[] = "institution2";
	$tabFields[] = "address2";
	$tabFields[] = "country2";
$arrEditTabs[] = array('tabId'=>'Institution_21',
					   'tabName'=>"Author 2",
					   'nType'=>'1',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatapaper_author[".arrEditTabs"] = $arrEditTabs;

//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	$tabFields[] = "author1";
	$tabFields[] = "institution1";
	$tabFields[] = "address1";
	$tabFields[] = "country1";
$arrAddTabs[] = array('tabId'=>'Institution_11',
					  'tabName'=>"Author 1",
					  'nType'=>'1',
					  'nOrder'=>5,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "author2";
	$tabFields[] = "institution2";
	$tabFields[] = "address2";
	$tabFields[] = "country2";
$arrAddTabs[] = array('tabId'=>'Institution_21',
					  'tabName'=>"Author 2",
					  'nType'=>'1',
					  'nOrder'=>10,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatapaper_author[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	$tabFields[] = "author1";
	$tabFields[] = "institution1";
	$tabFields[] = "address1";
	$tabFields[] = "country1";
$arrViewTabs[] = array('tabId'=>'Institution_11',
					   'tabName'=>"Author 1",
					   'nType'=>'1',
					   'nOrder'=>5,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	$tabFields[] = "author2";
	$tabFields[] = "institution2";
	$tabFields[] = "address2";
	$tabFields[] = "country2";
$arrViewTabs[] = array('tabId'=>'Institution_21',
					   'tabName'=>"Author 2",
					   'nType'=>'1',
					   'nOrder'=>10,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatapaper_author[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaper_author[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaper_author[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspaper_author = array();
$tableKeyspaper_author[] = "paperID";
$tdatapaper_author[".Keys"] = $tableKeyspaper_author;

$tdatapaper_author[".listFields"] = array();
$tdatapaper_author[".listFields"][] = "cid";
$tdatapaper_author[".listFields"][] = "title";
$tdatapaper_author[".listFields"][] = "paperStatus";

$tdatapaper_author[".viewFields"] = array();
$tdatapaper_author[".viewFields"][] = "funded";
$tdatapaper_author[".viewFields"][] = "paperStatus";
$tdatapaper_author[".viewFields"][] = "title";
$tdatapaper_author[".viewFields"][] = "abstract";
$tdatapaper_author[".viewFields"][] = "address1";
$tdatapaper_author[".viewFields"][] = "country1";
$tdatapaper_author[".viewFields"][] = "author2";
$tdatapaper_author[".viewFields"][] = "institution2";
$tdatapaper_author[".viewFields"][] = "address2";
$tdatapaper_author[".viewFields"][] = "country2";
$tdatapaper_author[".viewFields"][] = "attachment";

$tdatapaper_author[".addFields"] = array();
$tdatapaper_author[".addFields"][] = "cid";
$tdatapaper_author[".addFields"][] = "funded";
$tdatapaper_author[".addFields"][] = "paperStatus";
$tdatapaper_author[".addFields"][] = "title";
$tdatapaper_author[".addFields"][] = "abstract";
$tdatapaper_author[".addFields"][] = "author1";
$tdatapaper_author[".addFields"][] = "institution1";
$tdatapaper_author[".addFields"][] = "address1";
$tdatapaper_author[".addFields"][] = "country1";
$tdatapaper_author[".addFields"][] = "author2";
$tdatapaper_author[".addFields"][] = "institution2";
$tdatapaper_author[".addFields"][] = "address2";
$tdatapaper_author[".addFields"][] = "country2";
$tdatapaper_author[".addFields"][] = "attachment";

$tdatapaper_author[".inlineAddFields"] = array();

$tdatapaper_author[".editFields"] = array();
$tdatapaper_author[".editFields"][] = "funded";
$tdatapaper_author[".editFields"][] = "title";
$tdatapaper_author[".editFields"][] = "abstract";
$tdatapaper_author[".editFields"][] = "author1";
$tdatapaper_author[".editFields"][] = "institution1";
$tdatapaper_author[".editFields"][] = "address1";
$tdatapaper_author[".editFields"][] = "country1";
$tdatapaper_author[".editFields"][] = "author2";
$tdatapaper_author[".editFields"][] = "institution2";
$tdatapaper_author[".editFields"][] = "address2";
$tdatapaper_author[".editFields"][] = "country2";
$tdatapaper_author[".editFields"][] = "attachment";

$tdatapaper_author[".inlineEditFields"] = array();

$tdatapaper_author[".exportFields"] = array();

$tdatapaper_author[".printFields"] = array();

//	paperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "paperID";
	$fdata["GoodName"] = "paperID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Paper "; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
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
	
		
		
	$tdatapaper_author["paperID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "User "; 
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
	
		
		
	$tdatapaper_author["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Conference "; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "cid"; 
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
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "cid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cnameShort";
	
		
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
	
		
		
	$tdatapaper_author["cid"] = $fdata;
//	author1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "author1";
	$fdata["GoodName"] = "author1";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "author1"; 
		$fdata["FullName"] = "author1";
	
		
		
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
	
		$edata["inputStyle"] = " width:300px;";
	$edata["controlWidth"] = 300;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["author1"] = $fdata;
//	institution1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "institution1";
	$fdata["GoodName"] = "institution1";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Institution"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "institution1"; 
		$fdata["FullName"] = "institution1";
	
		
		
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
	
		$edata["inputStyle"] = " width:303px;";
	$edata["controlWidth"] = 303;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["institution1"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Address"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "address1"; 
		$fdata["FullName"] = "address1";
	
		
		
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
	
		$edata["inputStyle"] = " width:302px;";
	$edata["controlWidth"] = 302;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["address1"] = $fdata;
//	country1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "country1";
	$fdata["GoodName"] = "country1";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Country"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "country1"; 
		$fdata["FullName"] = "country1";
	
		
		
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
	
		
		
	$tdatapaper_author["country1"] = $fdata;
//	author2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "author2";
	$fdata["GoodName"] = "author2";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "author2"; 
		$fdata["FullName"] = "author2";
	
		
		
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
	
		$edata["inputStyle"] = " width:300px;";
	$edata["controlWidth"] = 300;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["author2"] = $fdata;
//	institution2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "institution2";
	$fdata["GoodName"] = "institution2";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Institution"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "institution2"; 
		$fdata["FullName"] = "institution2";
	
		
		
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
	
		$edata["inputStyle"] = " width:306px;";
	$edata["controlWidth"] = 306;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["institution2"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Address"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "address2"; 
		$fdata["FullName"] = "address2";
	
		
		
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
	
		$edata["inputStyle"] = " width:307px;";
	$edata["controlWidth"] = 307;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["address2"] = $fdata;
//	country2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "country2";
	$fdata["GoodName"] = "country2";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Country"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "country2"; 
		$fdata["FullName"] = "country2";
	
		
		
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
	
		
		
	$tdatapaper_author["country2"] = $fdata;
//	note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "note";
	$fdata["GoodName"] = "note";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Note"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "note"; 
		$fdata["FullName"] = "note";
	
		
		
				
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
			$edata["nCols"] = 398;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["note"] = $fdata;
//	funded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "funded";
	$fdata["GoodName"] = "funded";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Funded"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "funded"; 
		$fdata["FullName"] = "funded";
	
		
		
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
			
		$edata["HorizontalLookup"] = true;
	
		
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
	
		
		
	$tdatapaper_author["funded"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "title"; 
		$fdata["FullName"] = "title";
	
		
		
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
			
		$edata["inputStyle"] = " width:550px;";
	$edata["controlWidth"] = 550;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["title"] = $fdata;
//	abstract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "abstract";
	$fdata["GoodName"] = "abstract";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Abstract"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "abstract"; 
		$fdata["FullName"] = "abstract";
	
		
		
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
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 250;
			$edata["nCols"] = 550;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["abstract"] = $fdata;
//	paperStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "paperStatus";
	$fdata["GoodName"] = "paperStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Paper Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "paperStatus"; 
		$fdata["FullName"] = "paperStatus";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["paperStatus"] = $fdata;
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Upload Full Paper"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "attachment"; 
		$fdata["FullName"] = "attachment";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
				
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
							$edata["acceptFileTypes"] = "doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|pdf";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author["attachment"] = $fdata;

	
$tables_data["paper_author"]=&$tdatapaper_author;
$field_labels["paper_author"] = &$fieldLabelspaper_author;
$fieldToolTips["paper_author"] = &$fieldToolTipspaper_author;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paper_author"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["paper_author"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_paper_author()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paperID,  userID,  cid,  author1,  institution1,  address1,  country1,  author2,  institution2,  address2,  country2,  note,  funded,  title,  abstract,  paperStatus,  attachment";
$proto0["m_strFrom"] = "FROM paper";
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
	"m_strName" => "paperID",
	"m_strTable" => "paper"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "author1",
	"m_strTable" => "paper"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "institution1",
	"m_strTable" => "paper"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "paper"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "country1",
	"m_strTable" => "paper"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "author2",
	"m_strTable" => "paper"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "institution2",
	"m_strTable" => "paper"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "paper"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "country2",
	"m_strTable" => "paper"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "note",
	"m_strTable" => "paper"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "funded",
	"m_strTable" => "paper"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "paper"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "abstract",
	"m_strTable" => "paper"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "paper"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "paper";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "paperID";
$proto40["m_columns"][] = "userID";
$proto40["m_columns"][] = "cid";
$proto40["m_columns"][] = "author1";
$proto40["m_columns"][] = "institution1";
$proto40["m_columns"][] = "address1";
$proto40["m_columns"][] = "country1";
$proto40["m_columns"][] = "author2";
$proto40["m_columns"][] = "institution2";
$proto40["m_columns"][] = "address2";
$proto40["m_columns"][] = "country2";
$proto40["m_columns"][] = "note";
$proto40["m_columns"][] = "funded";
$proto40["m_columns"][] = "title";
$proto40["m_columns"][] = "abstract";
$proto40["m_columns"][] = "paperStatus";
$proto40["m_columns"][] = "attachment";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_alias"] = "";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = "0";
$proto41["m_inBrackets"] = "0";
$proto41["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paper_author = createSqlQuery_paper_author();
																	$tdatapaper_author[".sqlquery"] = $queryData_paper_author;

$tableEvents["paper_author"] = new eventsBase;
$tdatapaper_author[".hasEvents"] = false;

$cipherer = new RunnerCipherer("paper_author");

?>