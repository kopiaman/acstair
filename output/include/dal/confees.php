<?php
$dalTableconfees = array();
$dalTableconfees["cfid"] = array("type"=>3,"varname"=>"cfid");
$dalTableconfees["cid"] = array("type"=>3,"varname"=>"cid");
$dalTableconfees["item"] = array("type"=>200,"varname"=>"item");
$dalTableconfees["priceNormal"] = array("type"=>14,"varname"=>"priceNormal");
$dalTableconfees["datelineNormal"] = array("type"=>7,"varname"=>"datelineNormal");
$dalTableconfees["priceEarly"] = array("type"=>14,"varname"=>"priceEarly");
$dalTableconfees["datelineEarly"] = array("type"=>7,"varname"=>"datelineEarly");
$dalTableconfees["local"] = array("type"=>200,"varname"=>"local");
$dalTableconfees["currency"] = array("type"=>200,"varname"=>"currency");
	$dalTableconfees["cfid"]["key"]=true;
$dal_info["confees"]=&$dalTableconfees;

?>