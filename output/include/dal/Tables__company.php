<?php
$dalTablecompany = array();
$dalTablecompany["coid"] = array("type"=>3,"varname"=>"coid");
$dalTablecompany["cname"] = array("type"=>200,"varname"=>"cname");
$dalTablecompany["creg"] = array("type"=>200,"varname"=>"creg");
$dalTablecompany["caddress"] = array("type"=>200,"varname"=>"caddress");
$dalTablecompany["ccity"] = array("type"=>200,"varname"=>"ccity");
$dalTablecompany["cstate"] = array("type"=>200,"varname"=>"cstate");
$dalTablecompany["ccountry"] = array("type"=>200,"varname"=>"ccountry");
$dalTablecompany["ctel"] = array("type"=>200,"varname"=>"ctel");
$dalTablecompany["cfax"] = array("type"=>200,"varname"=>"cfax");
$dalTablecompany["cemail"] = array("type"=>200,"varname"=>"cemail");
$dalTablecompany["reviewEmail"] = array("type"=>200,"varname"=>"reviewEmail");
$dalTablecompany["about"] = array("type"=>201,"varname"=>"about");
	$dalTablecompany["coid"]["key"]=true;

$dal_info["Tables__company"] = &$dalTablecompany;
?>