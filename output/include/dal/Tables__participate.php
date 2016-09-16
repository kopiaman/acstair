<?php
$dalTableparticipate = array();
$dalTableparticipate["parID"] = array("type"=>3,"varname"=>"parID");
$dalTableparticipate["cid"] = array("type"=>3,"varname"=>"cid");
$dalTableparticipate["userID"] = array("type"=>3,"varname"=>"userID");
$dalTableparticipate["cfid"] = array("type"=>3,"varname"=>"cfid");
$dalTableparticipate["confirm"] = array("type"=>200,"varname"=>"confirm");
$dalTableparticipate["paperCount"] = array("type"=>3,"varname"=>"paperCount");
$dalTableparticipate["listenerRef"] = array("type"=>200,"varname"=>"listenerRef");
$dalTableparticipate["note"] = array("type"=>200,"varname"=>"note");
	$dalTableparticipate["parID"]["key"]=true;

$dal_info["Tables__participate"] = &$dalTableparticipate;
?>