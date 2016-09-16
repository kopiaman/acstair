<?php
$strTableName="followup_payment_fullPaper";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="paper";

$gstrOrderBy="ORDER BY paper.paperID";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("followup_payment_fullPaper");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["followup_payment_fullPaper"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>