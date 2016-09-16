<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapaper_author_abstract = array();
	$tdatapaper_author_abstract[".NumberOfChars"] = 50; 
	$tdatapaper_author_abstract[".ShortName"] = "paper_author_abstract";
	$tdatapaper_author_abstract[".OwnerID"] = "userID";
	$tdatapaper_author_abstract[".OriginalTable"] = "paper";

//	field labels
$fieldLabelspaper_author_abstract = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspaper_author_abstract["English"] = array();
	$fieldToolTipspaper_author_abstract["English"] = array();
	$fieldLabelspaper_author_abstract["English"]["paperID"] = "Paper ";
	$fieldToolTipspaper_author_abstract["English"]["paperID"] = "";
	$fieldLabelspaper_author_abstract["English"]["userID"] = "User ";
	$fieldToolTipspaper_author_abstract["English"]["userID"] = "";
	$fieldLabelspaper_author_abstract["English"]["author1"] = "Name";
	$fieldToolTipspaper_author_abstract["English"]["author1"] = "";
	$fieldLabelspaper_author_abstract["English"]["institution1"] = "Institution";
	$fieldToolTipspaper_author_abstract["English"]["institution1"] = "";
	$fieldLabelspaper_author_abstract["English"]["address1"] = "Address";
	$fieldToolTipspaper_author_abstract["English"]["address1"] = "";
	$fieldLabelspaper_author_abstract["English"]["country1"] = "Country";
	$fieldToolTipspaper_author_abstract["English"]["country1"] = "";
	$fieldLabelspaper_author_abstract["English"]["author2"] = "Name";
	$fieldToolTipspaper_author_abstract["English"]["author2"] = "";
	$fieldLabelspaper_author_abstract["English"]["institution2"] = "Institution";
	$fieldToolTipspaper_author_abstract["English"]["institution2"] = "";
	$fieldLabelspaper_author_abstract["English"]["address2"] = "Address";
	$fieldToolTipspaper_author_abstract["English"]["address2"] = "";
	$fieldLabelspaper_author_abstract["English"]["country2"] = "Country";
	$fieldToolTipspaper_author_abstract["English"]["country2"] = "";
	$fieldLabelspaper_author_abstract["English"]["funded"] = "Funded";
	$fieldToolTipspaper_author_abstract["English"]["funded"] = "";
	$fieldLabelspaper_author_abstract["English"]["abstract"] = "Abstract";
	$fieldToolTipspaper_author_abstract["English"]["abstract"] = "";
	$fieldLabelspaper_author_abstract["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipspaper_author_abstract["English"]["paperStatus"] = "";
	$fieldLabelspaper_author_abstract["English"]["title"] = "Title";
	$fieldToolTipspaper_author_abstract["English"]["title"] = "";
	$fieldLabelspaper_author_abstract["English"]["cid"] = "Conference ";
	$fieldToolTipspaper_author_abstract["English"]["cid"] = "";
	$fieldLabelspaper_author_abstract["English"]["date_submit"] = "Date Submit";
	$fieldToolTipspaper_author_abstract["English"]["date_submit"] = "";
	$fieldLabelspaper_author_abstract["English"]["paymentStatus"] = "Payment Status";
	$fieldToolTipspaper_author_abstract["English"]["paymentStatus"] = "";
	$fieldLabelspaper_author_abstract["English"]["fullPaper"] = "Full Paper";
	$fieldToolTipspaper_author_abstract["English"]["fullPaper"] = "";
	if (count($fieldToolTipspaper_author_abstract["English"]))
		$tdatapaper_author_abstract[".isUseToolTips"] = true;
}
	
	
	$tdatapaper_author_abstract[".NCSearch"] = true;



$tdatapaper_author_abstract[".shortTableName"] = "paper_author_abstract";
$tdatapaper_author_abstract[".nSecOptions"] = 1;
$tdatapaper_author_abstract[".recsPerRowList"] = 1;
$tdatapaper_author_abstract[".mainTableOwnerID"] = "userID";
$tdatapaper_author_abstract[".moveNext"] = 1;
$tdatapaper_author_abstract[".nType"] = 1;

$tdatapaper_author_abstract[".strOriginalTableName"] = "paper";




$tdatapaper_author_abstract[".showAddInPopup"] = false;

$tdatapaper_author_abstract[".showEditInPopup"] = false;

$tdatapaper_author_abstract[".showViewInPopup"] = false;

$tdatapaper_author_abstract[".fieldsForRegister"] = array();

$tdatapaper_author_abstract[".listAjax"] = false;

	$tdatapaper_author_abstract[".audit"] = false;

	$tdatapaper_author_abstract[".locking"] = false;

$tdatapaper_author_abstract[".listIcons"] = true;
$tdatapaper_author_abstract[".edit"] = true;
$tdatapaper_author_abstract[".view"] = true;




$tdatapaper_author_abstract[".showSimpleSearchOptions"] = false;

$tdatapaper_author_abstract[".showSearchPanel"] = true;

if (isMobile())
	$tdatapaper_author_abstract[".isUseAjaxSuggest"] = false;
else 
	$tdatapaper_author_abstract[".isUseAjaxSuggest"] = true;

$tdatapaper_author_abstract[".rowHighlite"] = true;

// button handlers file names

$tdatapaper_author_abstract[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaper_author_abstract[".isUseTimeForSearch"] = false;




$tdatapaper_author_abstract[".allSearchFields"] = array();

$tdatapaper_author_abstract[".allSearchFields"][] = "fullPaper";

$tdatapaper_author_abstract[".googleLikeFields"][] = "paperID";
$tdatapaper_author_abstract[".googleLikeFields"][] = "userID";
$tdatapaper_author_abstract[".googleLikeFields"][] = "cid";
$tdatapaper_author_abstract[".googleLikeFields"][] = "author1";
$tdatapaper_author_abstract[".googleLikeFields"][] = "institution1";
$tdatapaper_author_abstract[".googleLikeFields"][] = "address1";
$tdatapaper_author_abstract[".googleLikeFields"][] = "country1";
$tdatapaper_author_abstract[".googleLikeFields"][] = "author2";
$tdatapaper_author_abstract[".googleLikeFields"][] = "institution2";
$tdatapaper_author_abstract[".googleLikeFields"][] = "address2";
$tdatapaper_author_abstract[".googleLikeFields"][] = "country2";
$tdatapaper_author_abstract[".googleLikeFields"][] = "funded";
$tdatapaper_author_abstract[".googleLikeFields"][] = "date_submit";
$tdatapaper_author_abstract[".googleLikeFields"][] = "title";
$tdatapaper_author_abstract[".googleLikeFields"][] = "abstract";
$tdatapaper_author_abstract[".googleLikeFields"][] = "paperStatus";
$tdatapaper_author_abstract[".googleLikeFields"][] = "fullPaper";
$tdatapaper_author_abstract[".googleLikeFields"][] = "paymentStatus";


$tdatapaper_author_abstract[".advSearchFields"][] = "fullPaper";

$tdatapaper_author_abstract[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapaper_author_abstract[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaper_author_abstract[".strOrderBy"] = $tstrOrderBy;

$tdatapaper_author_abstract[".orderindexes"] = array();

$tdatapaper_author_abstract[".sqlHead"] = "SELECT paperID,   userID,   cid,   author1,   institution1,   address1,   country1,   author2,   institution2,   address2,   country2,   funded,   date_submit,   title,   abstract,   paperStatus,   fullPaper,   paymentStatus";
$tdatapaper_author_abstract[".sqlFrom"] = "FROM paper";
$tdatapaper_author_abstract[".sqlWhereExpr"] = "";
$tdatapaper_author_abstract[".sqlTail"] = "";

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
$tdatapaper_author_abstract[".arrEditTabs"] = $arrEditTabs;

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
					  'nOrder'=>8,
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
					  'nOrder'=>13,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatapaper_author_abstract[".arrAddTabs"] = $arrAddTabs;

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
$tdatapaper_author_abstract[".arrViewTabs"] = $arrViewTabs;

//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaper_author_abstract[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaper_author_abstract[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspaper_author_abstract = array();
$tableKeyspaper_author_abstract[] = "paperID";
$tdatapaper_author_abstract[".Keys"] = $tableKeyspaper_author_abstract;

$tdatapaper_author_abstract[".listFields"] = array();
$tdatapaper_author_abstract[".listFields"][] = "fullPaper";
$tdatapaper_author_abstract[".listFields"][] = "date_submit";
$tdatapaper_author_abstract[".listFields"][] = "cid";
$tdatapaper_author_abstract[".listFields"][] = "title";
$tdatapaper_author_abstract[".listFields"][] = "paperStatus";

$tdatapaper_author_abstract[".viewFields"] = array();
$tdatapaper_author_abstract[".viewFields"][] = "date_submit";
$tdatapaper_author_abstract[".viewFields"][] = "fullPaper";
$tdatapaper_author_abstract[".viewFields"][] = "paperStatus";
$tdatapaper_author_abstract[".viewFields"][] = "funded";
$tdatapaper_author_abstract[".viewFields"][] = "title";
$tdatapaper_author_abstract[".viewFields"][] = "abstract";
$tdatapaper_author_abstract[".viewFields"][] = "address1";
$tdatapaper_author_abstract[".viewFields"][] = "country1";
$tdatapaper_author_abstract[".viewFields"][] = "author2";
$tdatapaper_author_abstract[".viewFields"][] = "institution2";
$tdatapaper_author_abstract[".viewFields"][] = "address2";
$tdatapaper_author_abstract[".viewFields"][] = "country2";

$tdatapaper_author_abstract[".addFields"] = array();
$tdatapaper_author_abstract[".addFields"][] = "fullPaper";
$tdatapaper_author_abstract[".addFields"][] = "userID";
$tdatapaper_author_abstract[".addFields"][] = "date_submit";
$tdatapaper_author_abstract[".addFields"][] = "cid";
$tdatapaper_author_abstract[".addFields"][] = "paperStatus";
$tdatapaper_author_abstract[".addFields"][] = "funded";
$tdatapaper_author_abstract[".addFields"][] = "title";
$tdatapaper_author_abstract[".addFields"][] = "abstract";
$tdatapaper_author_abstract[".addFields"][] = "author1";
$tdatapaper_author_abstract[".addFields"][] = "institution1";
$tdatapaper_author_abstract[".addFields"][] = "address1";
$tdatapaper_author_abstract[".addFields"][] = "country1";
$tdatapaper_author_abstract[".addFields"][] = "author2";
$tdatapaper_author_abstract[".addFields"][] = "institution2";
$tdatapaper_author_abstract[".addFields"][] = "address2";
$tdatapaper_author_abstract[".addFields"][] = "country2";

$tdatapaper_author_abstract[".inlineAddFields"] = array();

$tdatapaper_author_abstract[".editFields"] = array();
$tdatapaper_author_abstract[".editFields"][] = "fullPaper";
$tdatapaper_author_abstract[".editFields"][] = "funded";
$tdatapaper_author_abstract[".editFields"][] = "title";
$tdatapaper_author_abstract[".editFields"][] = "abstract";
$tdatapaper_author_abstract[".editFields"][] = "author1";
$tdatapaper_author_abstract[".editFields"][] = "institution1";
$tdatapaper_author_abstract[".editFields"][] = "address1";
$tdatapaper_author_abstract[".editFields"][] = "country1";
$tdatapaper_author_abstract[".editFields"][] = "author2";
$tdatapaper_author_abstract[".editFields"][] = "institution2";
$tdatapaper_author_abstract[".editFields"][] = "address2";
$tdatapaper_author_abstract[".editFields"][] = "country2";

$tdatapaper_author_abstract[".inlineEditFields"] = array();

$tdatapaper_author_abstract[".exportFields"] = array();

$tdatapaper_author_abstract[".printFields"] = array();

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
	
		
		
	$tdatapaper_author_abstract["paperID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "User "; 
	$fdata["FieldType"] = 3;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
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
	
		
		
	$tdatapaper_author_abstract["userID"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["cid"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["author1"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["institution1"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["address1"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["country1"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["author2"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["institution2"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["address2"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["country2"] = $fdata;
//	funded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
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
	
		
		
	$tdatapaper_author_abstract["funded"] = $fdata;
//	date_submit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "date_submit";
	$fdata["GoodName"] = "date_submit";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Date Submit"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "date_submit"; 
		$fdata["FullName"] = "date_submit";
	
		
		
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
	
		
		
	$tdatapaper_author_abstract["date_submit"] = $fdata;
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
			
		$edata["inputStyle"] = " width:449px;";
	$edata["controlWidth"] = 449;
	
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author_abstract["title"] = $fdata;
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 250;
			$edata["nCols"] = 450;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author_abstract["abstract"] = $fdata;
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
	
		
		
	$tdatapaper_author_abstract["paperStatus"] = $fdata;
//	fullPaper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "fullPaper";
	$fdata["GoodName"] = "fullPaper";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Full Paper"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fullPaper"; 
		$fdata["FullName"] = "fullPaper";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatapaper_author_abstract["fullPaper"] = $fdata;
//	paymentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "paymentStatus";
	$fdata["GoodName"] = "paymentStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = "Payment Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "paymentStatus"; 
		$fdata["FullName"] = "paymentStatus";
	
		
		
				
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
	
		
		
	$tdatapaper_author_abstract["paymentStatus"] = $fdata;

	
$tables_data["paper_author_abstract"]=&$tdatapaper_author_abstract;
$field_labels["paper_author_abstract"] = &$fieldLabelspaper_author_abstract;
$fieldToolTips["paper_author_abstract"] = &$fieldToolTipspaper_author_abstract;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paper_author_abstract"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["paper_author_abstract"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_paper_author_abstract()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paperID,   userID,   cid,   author1,   institution1,   address1,   country1,   author2,   institution2,   address2,   country2,   funded,   date_submit,   title,   abstract,   paperStatus,   fullPaper,   paymentStatus";
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
	"m_strName" => "funded",
	"m_strTable" => "paper"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "date_submit",
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
	"m_strName" => "fullPaper",
	"m_strTable" => "paper"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
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
$proto42["m_strName"] = "paper";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "paperID";
$proto42["m_columns"][] = "userID";
$proto42["m_columns"][] = "cid";
$proto42["m_columns"][] = "author1";
$proto42["m_columns"][] = "institution1";
$proto42["m_columns"][] = "address1";
$proto42["m_columns"][] = "country1";
$proto42["m_columns"][] = "author2";
$proto42["m_columns"][] = "institution2";
$proto42["m_columns"][] = "address2";
$proto42["m_columns"][] = "country2";
$proto42["m_columns"][] = "funded";
$proto42["m_columns"][] = "date_submit";
$proto42["m_columns"][] = "title";
$proto42["m_columns"][] = "abstract";
$proto42["m_columns"][] = "paperStatus";
$proto42["m_columns"][] = "fullPaper";
$proto42["m_columns"][] = "paymentStatus";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paper_author_abstract = createSqlQuery_paper_author_abstract();
																		$tdatapaper_author_abstract[".sqlquery"] = $queryData_paper_author_abstract;

$tableEvents["paper_author_abstract"] = new eventsBase;
$tdatapaper_author_abstract[".hasEvents"] = false;

$cipherer = new RunnerCipherer("paper_author_abstract");

?>