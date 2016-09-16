<?php
$dalTablepaper_reply = array();
$dalTablepaper_reply["replyID"] = array("type"=>3,"varname"=>"replyID");
$dalTablepaper_reply["paperID"] = array("type"=>3,"varname"=>"paperID");
$dalTablepaper_reply["formalLetter"] = array("type"=>200,"varname"=>"formalLetter");
$dalTablepaper_reply["earlyBird"] = array("type"=>200,"varname"=>"earlyBird");
$dalTablepaper_reply["paymentMode"] = array("type"=>200,"varname"=>"paymentMode");
$dalTablepaper_reply["datePayment"] = array("type"=>200,"varname"=>"datePayment");
$dalTablepaper_reply["dateSubmit"] = array("type"=>200,"varname"=>"dateSubmit");
$dalTablepaper_reply["dateImportant"] = array("type"=>201,"varname"=>"dateImportant");
	$dalTablepaper_reply["replyID"]["key"]=true;
$dal_info["paper_reply"]=&$dalTablepaper_reply;

?>