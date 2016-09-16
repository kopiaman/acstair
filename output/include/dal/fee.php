<?php
$dalTablefee = array();
$dalTablefee["fid"] = array("type"=>3,"varname"=>"fid");
$dalTablefee["cid"] = array("type"=>3,"varname"=>"cid");
$dalTablefee["currency"] = array("type"=>200,"varname"=>"currency");
$dalTablefee["period"] = array("type"=>200,"varname"=>"period");
$dalTablefee["fee"] = array("type"=>200,"varname"=>"fee");
$dalTablefee["quota"] = array("type"=>200,"varname"=>"quota");
$dalTablefee["cat"] = array("type"=>200,"varname"=>"cat");
	$dalTablefee["fid"]["key"]=true;
$dal_info["fee"]=&$dalTablefee;

?>