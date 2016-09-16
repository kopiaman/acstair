<?php
$dalTablepayments = array();
$dalTablepayments["id"] = array("type"=>3,"varname"=>"id");
$dalTablepayments["tx"] = array("type"=>200,"varname"=>"tx");
$dalTablepayments["currency"] = array("type"=>200,"varname"=>"currency");
$dalTablepayments["amount"] = array("type"=>14,"varname"=>"amount");
$dalTablepayments["payStatus"] = array("type"=>200,"varname"=>"payStatus");
$dalTablepayments["itemID"] = array("type"=>200,"varname"=>"itemID");
$dalTablepayments["payDate"] = array("type"=>135,"varname"=>"payDate");
$dalTablepayments["mode"] = array("type"=>200,"varname"=>"mode");
$dalTablepayments["userID"] = array("type"=>3,"varname"=>"userID");
$dalTablepayments["cid"] = array("type"=>3,"varname"=>"cid");
$dalTablepayments["receiptNo"] = array("type"=>200,"varname"=>"receiptNo");
	$dalTablepayments["id"]["key"]=true;

$dal_info["Tables__payments"] = &$dalTablepayments;
?>