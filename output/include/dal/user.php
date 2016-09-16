<?php
$dalTableuser = array();
$dalTableuser["userID"] = array("type"=>3,"varname"=>"userID");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password");
$dalTableuser["fullName"] = array("type"=>200,"varname"=>"fullName");
$dalTableuser["gender"] = array("type"=>200,"varname"=>"gender");
$dalTableuser["address"] = array("type"=>200,"varname"=>"address");
$dalTableuser["postal"] = array("type"=>200,"varname"=>"postal");
$dalTableuser["city"] = array("type"=>200,"varname"=>"city");
$dalTableuser["state"] = array("type"=>200,"varname"=>"state");
$dalTableuser["country"] = array("type"=>200,"varname"=>"country");
$dalTableuser["tel"] = array("type"=>200,"varname"=>"tel");
$dalTableuser["fax"] = array("type"=>200,"varname"=>"fax");
$dalTableuser["institution"] = array("type"=>200,"varname"=>"institution");
$dalTableuser["faculty"] = array("type"=>200,"varname"=>"faculty");
$dalTableuser["department"] = array("type"=>200,"varname"=>"department");
$dalTableuser["research"] = array("type"=>200,"varname"=>"research");
$dalTableuser["student"] = array("type"=>200,"varname"=>"student");
$dalTableuser["role"] = array("type"=>200,"varname"=>"role");
$dalTableuser["note"] = array("type"=>200,"varname"=>"note");
	$dalTableuser["userID"]["key"]=true;
$dal_info["user"]=&$dalTableuser;

?>