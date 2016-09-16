<?php
$strTableName="inviteLetter";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="paper";

$gstrOrderBy="ORDER BY paper.paperID DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("inviteLetter");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["inviteLetter"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>