<?php
$strTableName="followup_payment_FP";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="participate";

$gstrOrderBy="ORDER BY participate.parID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("followup_payment_FP");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["followup_payment_FP"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>