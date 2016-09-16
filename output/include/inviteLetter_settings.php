<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainviteLetter = array();
	$tdatainviteLetter[".truncateText"] = true;
	$tdatainviteLetter[".NumberOfChars"] = 200;
	$tdatainviteLetter[".ShortName"] = "inviteLetter";
	$tdatainviteLetter[".OwnerID"] = "userID";
	$tdatainviteLetter[".OriginalTable"] = "paper";

//	field labels
$fieldLabelsinviteLetter = array();
$fieldToolTipsinviteLetter = array();
$pageTitlesinviteLetter = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinviteLetter["English"] = array();
	$fieldToolTipsinviteLetter["English"] = array();
	$pageTitlesinviteLetter["English"] = array();
	$fieldLabelsinviteLetter["English"]["paperID"] = "ID";
	$fieldToolTipsinviteLetter["English"]["paperID"] = "";
	$fieldLabelsinviteLetter["English"]["userID"] = "User ";
	$fieldToolTipsinviteLetter["English"]["userID"] = "";
	$fieldLabelsinviteLetter["English"]["funded"] = "Funded";
	$fieldToolTipsinviteLetter["English"]["funded"] = "";
	$fieldLabelsinviteLetter["English"]["abstract"] = "AB";
	$fieldToolTipsinviteLetter["English"]["abstract"] = "";
	$fieldLabelsinviteLetter["English"]["paperStatus"] = "Paper Status";
	$fieldToolTipsinviteLetter["English"]["paperStatus"] = "";
	$fieldLabelsinviteLetter["English"]["title"] = "Title";
	$fieldToolTipsinviteLetter["English"]["title"] = "";
	$fieldLabelsinviteLetter["English"]["cid"] = "Conference ";
	$fieldToolTipsinviteLetter["English"]["cid"] = "";
	$fieldLabelsinviteLetter["English"]["date_submit"] = "Date Submit";
	$fieldToolTipsinviteLetter["English"]["date_submit"] = "";
	$fieldLabelsinviteLetter["English"]["paymentStatus"] = "Payment Status";
	$fieldToolTipsinviteLetter["English"]["paymentStatus"] = "";
	$fieldLabelsinviteLetter["English"]["fullPaper"] = "FP";
	$fieldToolTipsinviteLetter["English"]["fullPaper"] = "";
	$fieldLabelsinviteLetter["English"]["fullName"] = "Full Name";
	$fieldToolTipsinviteLetter["English"]["fullName"] = "";
	$fieldLabelsinviteLetter["English"]["institution"] = "Institution";
	$fieldToolTipsinviteLetter["English"]["institution"] = "";
	$fieldLabelsinviteLetter["English"]["multiAuthor"] = "Multi Author";
	$fieldToolTipsinviteLetter["English"]["multiAuthor"] = "";
	$fieldLabelsinviteLetter["English"]["opt"] = "File";
	$fieldToolTipsinviteLetter["English"]["opt"] = "";
	$fieldLabelsinviteLetter["English"]["paperRef"] = "Paper Ref";
	$fieldToolTipsinviteLetter["English"]["paperRef"] = "";
	$fieldLabelsinviteLetter["English"]["invite"] = "Official Invite";
	$fieldToolTipsinviteLetter["English"]["invite"] = "";
	$fieldLabelsinviteLetter["English"]["print"] = "Print";
	$fieldToolTipsinviteLetter["English"]["print"] = "";
	if (count($fieldToolTipsinviteLetter["English"]))
		$tdatainviteLetter[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinviteLetter[""] = array();
	$fieldToolTipsinviteLetter[""] = array();
	$pageTitlesinviteLetter[""] = array();
	if (count($fieldToolTipsinviteLetter[""]))
		$tdatainviteLetter[".isUseToolTips"] = true;
}


	$tdatainviteLetter[".NCSearch"] = true;



$tdatainviteLetter[".shortTableName"] = "inviteLetter";
$tdatainviteLetter[".nSecOptions"] = 1;
$tdatainviteLetter[".recsPerRowList"] = 1;
$tdatainviteLetter[".recsPerRowPrint"] = 1;
$tdatainviteLetter[".mainTableOwnerID"] = "userID";
$tdatainviteLetter[".moveNext"] = 1;
$tdatainviteLetter[".entityType"] = 1;

$tdatainviteLetter[".strOriginalTableName"] = "paper";




$tdatainviteLetter[".showAddInPopup"] = false;

$tdatainviteLetter[".showEditInPopup"] = false;

$tdatainviteLetter[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainviteLetter[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainviteLetter[".fieldsForRegister"] = array();

$tdatainviteLetter[".listAjax"] = false;

	$tdatainviteLetter[".audit"] = false;

	$tdatainviteLetter[".locking"] = false;



$tdatainviteLetter[".list"] = true;

$tdatainviteLetter[".inlineEdit"] = true;
$tdatainviteLetter[".view"] = true;


$tdatainviteLetter[".exportTo"] = true;


$tdatainviteLetter[".delete"] = true;

$tdatainviteLetter[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainviteLetter[".searchSaving"] = false;
//

$tdatainviteLetter[".showSearchPanel"] = true;
		$tdatainviteLetter[".flexibleSearch"] = true;

if (isMobile())
	$tdatainviteLetter[".isUseAjaxSuggest"] = false;
else
	$tdatainviteLetter[".isUseAjaxSuggest"] = true;

$tdatainviteLetter[".rowHighlite"] = true;


								
$tdatainviteLetter[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainviteLetter[".isUseTimeForSearch"] = false;





$tdatainviteLetter[".allSearchFields"] = array();
$tdatainviteLetter[".filterFields"] = array();
$tdatainviteLetter[".requiredSearchFields"] = array();

$tdatainviteLetter[".allSearchFields"][] = "invite";
	$tdatainviteLetter[".allSearchFields"][] = "paperRef";
	$tdatainviteLetter[".allSearchFields"][] = "fullName";
	$tdatainviteLetter[".allSearchFields"][] = "funded";
	$tdatainviteLetter[".allSearchFields"][] = "title";
	$tdatainviteLetter[".allSearchFields"][] = "date_submit";
	$tdatainviteLetter[".allSearchFields"][] = "paperStatus";
	$tdatainviteLetter[".allSearchFields"][] = "paymentStatus";
	

$tdatainviteLetter[".googleLikeFields"] = array();
$tdatainviteLetter[".googleLikeFields"][] = "invite";
$tdatainviteLetter[".googleLikeFields"][] = "print";

$tdatainviteLetter[".panelSearchFields"] = array();
$tdatainviteLetter[".searchPanelOptions"] = array();
$tdatainviteLetter[".panelSearchFields"][] = "paperRef";
	$tdatainviteLetter[".panelSearchFields"][] = "fullName";
	$tdatainviteLetter[".panelSearchFields"][] = "institution";
	$tdatainviteLetter[".panelSearchFields"][] = "funded";
	$tdatainviteLetter[".panelSearchFields"][] = "title";
	$tdatainviteLetter[".panelSearchFields"][] = "date_submit";
	$tdatainviteLetter[".panelSearchFields"][] = "multiAuthor";
	$tdatainviteLetter[".panelSearchFields"][] = "paperStatus";
	$tdatainviteLetter[".panelSearchFields"][] = "paymentStatus";
	
$tdatainviteLetter[".advSearchFields"] = array();
$tdatainviteLetter[".advSearchFields"][] = "invite";
$tdatainviteLetter[".advSearchFields"][] = "paperRef";
$tdatainviteLetter[".advSearchFields"][] = "fullName";
$tdatainviteLetter[".advSearchFields"][] = "funded";
$tdatainviteLetter[".advSearchFields"][] = "title";
$tdatainviteLetter[".advSearchFields"][] = "date_submit";
$tdatainviteLetter[".advSearchFields"][] = "paperStatus";
$tdatainviteLetter[".advSearchFields"][] = "paymentStatus";

$tdatainviteLetter[".tableType"] = "list";

$tdatainviteLetter[".printerPageOrientation"] = 0;
$tdatainviteLetter[".nPrinterPageScale"] = 100;

$tdatainviteLetter[".nPrinterSplitRecords"] = 40;

$tdatainviteLetter[".nPrinterPDFSplitRecords"] = 40;



$tdatainviteLetter[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatainviteLetter[".pageSize"] = 20;

$tdatainviteLetter[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY paper.paperID DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainviteLetter[".strOrderBy"] = $tstrOrderBy;

$tdatainviteLetter[".orderindexes"] = array();
$tdatainviteLetter[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "paper.paperID");

$tdatainviteLetter[".sqlHead"] = "SELECT paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  paper.multiAuthor,  paper.paperID AS opt,  paper.paperRef,  paper.invite,  paper.invite AS `print`";
$tdatainviteLetter[".sqlFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
$tdatainviteLetter[".sqlWhereExpr"] = "";
$tdatainviteLetter[".sqlTail"] = "";



//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Institution_11',
					  'tabName'=>"Author 1",
					  'nType'=>'1',
					  'nOrder'=>5,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
$arrAddTabs[] = array('tabId'=>'Institution_21',
					  'tabName'=>"Author 2",
					  'nType'=>'1',
					  'nOrder'=>10,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdatainviteLetter[".arrAddTabs"] = $arrAddTabs;

//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Institution_11',
					   'tabName'=>"Author 1",
					   'nType'=>'1',
					   'nOrder'=>15,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
$arrViewTabs[] = array('tabId'=>'Institution_21',
					   'tabName'=>"Author 2",
					   'nType'=>'1',
					   'nOrder'=>17,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdatainviteLetter[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainviteLetter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainviteLetter[".arrGroupsPerPage"] = $arrGPP;


$tableKeysinviteLetter = array();
$tableKeysinviteLetter[] = "paperID";
$tdatainviteLetter[".Keys"] = $tableKeysinviteLetter;

$tdatainviteLetter[".listFields"] = array();
$tdatainviteLetter[".listFields"][] = "paperRef";
$tdatainviteLetter[".listFields"][] = "cid";
$tdatainviteLetter[".listFields"][] = "fullName";
$tdatainviteLetter[".listFields"][] = "title";
$tdatainviteLetter[".listFields"][] = "date_submit";
$tdatainviteLetter[".listFields"][] = "paperStatus";
$tdatainviteLetter[".listFields"][] = "paymentStatus";
$tdatainviteLetter[".listFields"][] = "abstract";
$tdatainviteLetter[".listFields"][] = "fullPaper";
$tdatainviteLetter[".listFields"][] = "invite";
$tdatainviteLetter[".listFields"][] = "print";

$tdatainviteLetter[".hideMobileList"] = array();


$tdatainviteLetter[".viewFields"] = array();
$tdatainviteLetter[".viewFields"][] = "invite";
$tdatainviteLetter[".viewFields"][] = "date_submit";
$tdatainviteLetter[".viewFields"][] = "fullPaper";
$tdatainviteLetter[".viewFields"][] = "paymentStatus";
$tdatainviteLetter[".viewFields"][] = "fullName";
$tdatainviteLetter[".viewFields"][] = "paperRef";
$tdatainviteLetter[".viewFields"][] = "cid";
$tdatainviteLetter[".viewFields"][] = "funded";
$tdatainviteLetter[".viewFields"][] = "paperStatus";
$tdatainviteLetter[".viewFields"][] = "title";
$tdatainviteLetter[".viewFields"][] = "abstract";

$tdatainviteLetter[".addFields"] = array();

$tdatainviteLetter[".masterListFields"] = array();
$tdatainviteLetter[".masterListFields"][] = "invite";
$tdatainviteLetter[".masterListFields"][] = "print";
$tdatainviteLetter[".masterListFields"][] = "userID";
$tdatainviteLetter[".masterListFields"][] = "paperRef";
$tdatainviteLetter[".masterListFields"][] = "paperID";
$tdatainviteLetter[".masterListFields"][] = "cid";
$tdatainviteLetter[".masterListFields"][] = "fullName";
$tdatainviteLetter[".masterListFields"][] = "institution";
$tdatainviteLetter[".masterListFields"][] = "funded";
$tdatainviteLetter[".masterListFields"][] = "title";
$tdatainviteLetter[".masterListFields"][] = "date_submit";
$tdatainviteLetter[".masterListFields"][] = "multiAuthor";
$tdatainviteLetter[".masterListFields"][] = "paperStatus";
$tdatainviteLetter[".masterListFields"][] = "paymentStatus";
$tdatainviteLetter[".masterListFields"][] = "abstract";
$tdatainviteLetter[".masterListFields"][] = "fullPaper";
$tdatainviteLetter[".masterListFields"][] = "opt";

$tdatainviteLetter[".inlineAddFields"] = array();

$tdatainviteLetter[".editFields"] = array();

$tdatainviteLetter[".inlineEditFields"] = array();
$tdatainviteLetter[".inlineEditFields"][] = "title";
$tdatainviteLetter[".inlineEditFields"][] = "paperStatus";
$tdatainviteLetter[".inlineEditFields"][] = "paymentStatus";
$tdatainviteLetter[".inlineEditFields"][] = "invite";

$tdatainviteLetter[".exportFields"] = array();
$tdatainviteLetter[".exportFields"][] = "invite";
$tdatainviteLetter[".exportFields"][] = "paperID";
$tdatainviteLetter[".exportFields"][] = "userID";
$tdatainviteLetter[".exportFields"][] = "paperRef";
$tdatainviteLetter[".exportFields"][] = "cid";
$tdatainviteLetter[".exportFields"][] = "fullName";
$tdatainviteLetter[".exportFields"][] = "funded";
$tdatainviteLetter[".exportFields"][] = "title";
$tdatainviteLetter[".exportFields"][] = "date_submit";
$tdatainviteLetter[".exportFields"][] = "paperStatus";
$tdatainviteLetter[".exportFields"][] = "paymentStatus";
$tdatainviteLetter[".exportFields"][] = "abstract";
$tdatainviteLetter[".exportFields"][] = "fullPaper";

$tdatainviteLetter[".importFields"] = array();
$tdatainviteLetter[".importFields"][] = "paperID";
$tdatainviteLetter[".importFields"][] = "userID";
$tdatainviteLetter[".importFields"][] = "cid";
$tdatainviteLetter[".importFields"][] = "funded";
$tdatainviteLetter[".importFields"][] = "date_submit";
$tdatainviteLetter[".importFields"][] = "title";
$tdatainviteLetter[".importFields"][] = "abstract";
$tdatainviteLetter[".importFields"][] = "paperStatus";
$tdatainviteLetter[".importFields"][] = "fullPaper";
$tdatainviteLetter[".importFields"][] = "paymentStatus";
$tdatainviteLetter[".importFields"][] = "fullName";
$tdatainviteLetter[".importFields"][] = "institution";
$tdatainviteLetter[".importFields"][] = "multiAuthor";
$tdatainviteLetter[".importFields"][] = "opt";
$tdatainviteLetter[".importFields"][] = "paperRef";
$tdatainviteLetter[".importFields"][] = "invite";
$tdatainviteLetter[".importFields"][] = "print";

$tdatainviteLetter[".printFields"] = array();

//	paperID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "paperID";
	$fdata["GoodName"] = "paperID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","paperID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperID";

	
	
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








	$tdatainviteLetter["paperID"] = $fdata;
//	userID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userID";
	$fdata["GoodName"] = "userID";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","userID");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.userID";

	
	
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








	$tdatainviteLetter["userID"] = $fdata;
//	cid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cid";
	$fdata["GoodName"] = "cid";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","cid");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.cid";

	
	
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








	$tdatainviteLetter["cid"] = $fdata;
//	funded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "funded";
	$fdata["GoodName"] = "funded";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","funded");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "funded";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.funded";

	
	
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




	$tdatainviteLetter["funded"] = $fdata;
//	date_submit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "date_submit";
	$fdata["GoodName"] = "date_submit";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","date_submit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_submit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.date_submit";

	
	
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




	$tdatainviteLetter["date_submit"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.title";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 550;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatainviteLetter["title"] = $fdata;
//	abstract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "abstract";
	$fdata["GoodName"] = "abstract";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","abstract");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "abstract";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.abstract";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 550;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatainviteLetter["abstract"] = $fdata;
//	paperStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "paperStatus";
	$fdata["GoodName"] = "paperStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","paperStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paperStatus";

		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "set_field";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fvalue";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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




	$tdatainviteLetter["paperStatus"] = $fdata;
//	fullPaper
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fullPaper";
	$fdata["GoodName"] = "fullPaper";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","fullPaper");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullPaper";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.fullPaper";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatainviteLetter["fullPaper"] = $fdata;
//	paymentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "paymentStatus";
	$fdata["GoodName"] = "paymentStatus";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","paymentStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "paymentStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paymentStatus";

	
	
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
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fvalue";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fvalue";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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




	$tdatainviteLetter["paymentStatus"] = $fdata;
//	fullName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fullName";
	$fdata["GoodName"] = "fullName";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("inviteLetter","fullName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatainviteLetter["fullName"] = $fdata;
//	institution
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "institution";
	$fdata["GoodName"] = "institution";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("inviteLetter","institution");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "institution";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`.institution";

	
	
			
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








	$tdatainviteLetter["institution"] = $fdata;
//	multiAuthor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "multiAuthor";
	$fdata["GoodName"] = "multiAuthor";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","multiAuthor");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "multiAuthor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.multiAuthor";

	
	
			
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








	$tdatainviteLetter["multiAuthor"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "paperID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.paperID";

	
	
			
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








	$tdatainviteLetter["opt"] = $fdata;
//	paperRef
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "paperRef";
	$fdata["GoodName"] = "paperRef";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","paperRef");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatainviteLetter["paperRef"] = $fdata;
//	invite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "invite";
	$fdata["GoodName"] = "invite";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","invite");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "invite";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.invite";

	
	
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




	$tdatainviteLetter["invite"] = $fdata;
//	print
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "print";
	$fdata["GoodName"] = "print";
	$fdata["ownerTable"] = "paper";
	$fdata["Label"] = GetFieldLabel("inviteLetter","print");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "invite";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paper.invite";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatainviteLetter["print"] = $fdata;


$tables_data["inviteLetter"]=&$tdatainviteLetter;
$field_labels["inviteLetter"] = &$fieldLabelsinviteLetter;
$fieldToolTips["inviteLetter"] = &$fieldToolTipsinviteLetter;
$page_titles["inviteLetter"] = &$pageTitlesinviteLetter;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inviteLetter"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inviteLetter"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inviteLetter()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paper.paperID,  paper.userID,  paper.cid,  paper.funded,  paper.date_submit,  paper.title,  paper.abstract,  paper.paperStatus,  paper.fullPaper,  paper.paymentStatus,  `user`.fullName,  `user`.institution,  paper.multiAuthor,  paper.paperID AS opt,  paper.paperRef,  paper.invite,  paper.invite AS `print`";
$proto0["m_strFrom"] = "FROM paper  INNER JOIN `user` ON paper.userID = `user`.userID";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY paper.paperID DESC";
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
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto5["m_sql"] = "paper.paperID";
$proto5["m_srcTableName"] = "inviteLetter";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto7["m_sql"] = "paper.userID";
$proto7["m_srcTableName"] = "inviteLetter";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "cid",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto9["m_sql"] = "paper.cid";
$proto9["m_srcTableName"] = "inviteLetter";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "funded",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto11["m_sql"] = "paper.funded";
$proto11["m_srcTableName"] = "inviteLetter";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "date_submit",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto13["m_sql"] = "paper.date_submit";
$proto13["m_srcTableName"] = "inviteLetter";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto15["m_sql"] = "paper.title";
$proto15["m_srcTableName"] = "inviteLetter";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "abstract",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto17["m_sql"] = "paper.abstract";
$proto17["m_srcTableName"] = "inviteLetter";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "paperStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto19["m_sql"] = "paper.paperStatus";
$proto19["m_srcTableName"] = "inviteLetter";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "fullPaper",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto21["m_sql"] = "paper.fullPaper";
$proto21["m_srcTableName"] = "inviteLetter";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "paymentStatus",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto23["m_sql"] = "paper.paymentStatus";
$proto23["m_srcTableName"] = "inviteLetter";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "fullName",
	"m_strTable" => "user",
	"m_srcTableName" => "inviteLetter"
));

$proto25["m_sql"] = "`user`.fullName";
$proto25["m_srcTableName"] = "inviteLetter";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "institution",
	"m_strTable" => "user",
	"m_srcTableName" => "inviteLetter"
));

$proto27["m_sql"] = "`user`.institution";
$proto27["m_srcTableName"] = "inviteLetter";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "multiAuthor",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto29["m_sql"] = "paper.multiAuthor";
$proto29["m_srcTableName"] = "inviteLetter";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto31["m_sql"] = "paper.paperID";
$proto31["m_srcTableName"] = "inviteLetter";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "paperRef",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto33["m_sql"] = "paper.paperRef";
$proto33["m_srcTableName"] = "inviteLetter";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "invite",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto35["m_sql"] = "paper.invite";
$proto35["m_srcTableName"] = "inviteLetter";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "invite",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto37["m_sql"] = "paper.invite";
$proto37["m_srcTableName"] = "inviteLetter";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "print";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "paper";
$proto40["m_srcTableName"] = "inviteLetter";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "paperID";
$proto40["m_columns"][] = "paperRef";
$proto40["m_columns"][] = "userID";
$proto40["m_columns"][] = "cid";
$proto40["m_columns"][] = "multiAuthor";
$proto40["m_columns"][] = "funded";
$proto40["m_columns"][] = "date_submit";
$proto40["m_columns"][] = "title";
$proto40["m_columns"][] = "abstract";
$proto40["m_columns"][] = "paperStatus";
$proto40["m_columns"][] = "fullPaper";
$proto40["m_columns"][] = "paymentStatus";
$proto40["m_columns"][] = "slotDate";
$proto40["m_columns"][] = "slotTime";
$proto40["m_columns"][] = "slotRoom";
$proto40["m_columns"][] = "slotTurn";
$proto40["m_columns"][] = "invite";
$proto40["m_columns"][] = "note";
$proto40["m_columns"][] = "ppt";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "paper";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "inviteLetter";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_INNERJOIN";
			$proto44=array();
$proto44["m_strName"] = "user";
$proto44["m_srcTableName"] = "inviteLetter";
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
$proto43["m_sql"] = "INNER JOIN `user` ON paper.userID = `user`.userID";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "inviteLetter";
$proto45=array();
$proto45["m_sql"] = "paper.userID = `user`.userID";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "userID",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= `user`.userID";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto47=array();
						$obj = new SQLField(array(
	"m_strName" => "paperID",
	"m_strTable" => "paper",
	"m_srcTableName" => "inviteLetter"
));

$proto47["m_column"]=$obj;
$proto47["m_bAsc"] = 0;
$proto47["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto47);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="inviteLetter";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inviteLetter = createSqlQuery_inviteLetter();



																	

$tdatainviteLetter[".sqlquery"] = $queryData_inviteLetter;

$tableEvents["inviteLetter"] = new eventsBase;
$tdatainviteLetter[".hasEvents"] = false;

?>