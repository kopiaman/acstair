<?php
$dalTablepaper = array();
$dalTablepaper["paperID"] = array("type"=>3,"varname"=>"paperID");
$dalTablepaper["paperRef"] = array("type"=>200,"varname"=>"paperRef");
$dalTablepaper["userID"] = array("type"=>3,"varname"=>"userID");
$dalTablepaper["cid"] = array("type"=>3,"varname"=>"cid");
$dalTablepaper["multiAuthor"] = array("type"=>200,"varname"=>"multiAuthor");
$dalTablepaper["funded"] = array("type"=>200,"varname"=>"funded");
$dalTablepaper["date_submit"] = array("type"=>200,"varname"=>"date_submit");
$dalTablepaper["title"] = array("type"=>200,"varname"=>"title");
$dalTablepaper["abstract"] = array("type"=>201,"varname"=>"abstract");
$dalTablepaper["paperStatus"] = array("type"=>200,"varname"=>"paperStatus");
$dalTablepaper["fullPaper"] = array("type"=>201,"varname"=>"fullPaper");
$dalTablepaper["paymentStatus"] = array("type"=>200,"varname"=>"paymentStatus");
$dalTablepaper["slotDate"] = array("type"=>3,"varname"=>"slotDate");
$dalTablepaper["slotTime"] = array("type"=>200,"varname"=>"slotTime");
$dalTablepaper["slotRoom"] = array("type"=>200,"varname"=>"slotRoom");
$dalTablepaper["slotTurn"] = array("type"=>3,"varname"=>"slotTurn");
$dalTablepaper["invite"] = array("type"=>200,"varname"=>"invite");
$dalTablepaper["note"] = array("type"=>200,"varname"=>"note");
$dalTablepaper["ppt"] = array("type"=>201,"varname"=>"ppt");
	$dalTablepaper["paperID"]["key"]=true;

$dal_info["Tables__paper"] = &$dalTablepaper;
?>