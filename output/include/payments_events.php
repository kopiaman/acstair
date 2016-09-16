<?php 
class eventclass_payments  extends eventsBase
{ 
	function eventclass_payments()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		
if ($data['mode'])
$record["MyButton"]=true;


;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		/*
$month=date('m');
$year=date('Y');
$yearPart=substr($year,2,2);

$id=$keys['id'];
$payID=sprintf("%05s",$id);

$tx='R'.$yearPart.$month.$payID;
global $conn;

$sql_up= "UPDATE payments SET tx ='$tx' WHERE id='$id'";
$query_up=db_exec($sql_up,$conn);

*/
global $conn;
$cid=$values['cid'];
$userID=$values['userID'];
$sql_up= "UPDATE participate SET confirm ='Yes' WHERE userID='$userID' AND cid='$cid'";
$query_up=db_exec($sql_up,$conn);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		

global $conn;
$cid=$values['cid'];
$userID=$values['userID'];
$sql_up= "UPDATE participate SET confirm ='Yes' WHERE userID='$userID' AND cid='$cid'";
$query_up=db_exec($sql_up,$conn);

$itemID=$values['itemID'];

$payStatus=$values['payStatus'];

if($payStatus!=$oldvalues['payStatus']){

  if($payStatus='Completed'){

$sql_company= "SELECT `coid`, `cname`, `creg`, `caddress`, `ccity`, `cstate`, `ccountry`, `ctel`, `cfax`, `cemail` FROM `company` WHERE `coid`=1";
$query_company=db_query($sql_company,$conn);
$company=db_fetch_array($query_company);

$footer="<p> $company[cname]</p><p> $company[caddress],$company[ccity],$company[cstate],$company[ccountry]</p>
Fax: $company[cfax] Tel: $company[ctel]</p><br><br>";

$sDate=date('d', strtotime($row[sDate]));
$eDate=date('d M Y', strtotime($row[eDate])) ;


     //send official inviation letter
			$to2=$values['email'];
			$subject2 ="Thank you for your payment- $values[cnameShort] - Ref [$itemID]";
			$headers2 = "From: " . $company['cemail'] . "\r\n";
			$headers2 .= "Content-type: text/html" ."\r\n";

//content table 
include('emailHead.php');	
	
$contentEmail1='<table width="90%"  border="0" align="center" cellpadding="50" cellspacing="0"  style="font-size:14px">
        <tr><td bgcolor="#E4E4E4" scope="col">';
$contentEmail2=' </td></tr></table>';

$contentEmail='
<h2 style="color:#036">Thank You </h2>
<hr style="color: #666; height: 1px; background: #666; border: none ; margin-bottom:10px;" />
<p> Dear '.$values['fullName'].', </p>
Thank you for your payment!

The details are as follows:-<br/><br/>
<b>Fee							:</b> '.$values['currency'].$values['amount'].'<br/><br/>
<b>Item/Type				:</b> '.$values['item'].'<br/><br/>
<b>Conference			:</b> '.$values['cname'].'<br/><br/>
<b>Date of Payment	:</b> '.$values['payDate'].'<br/><br/>
<b>Mode of Payment	:</b> '.$values['mode'].'<br/><br/>
<b>Receipt No			:</b> '.$values['receiptNo'].' <br/><br/>

 
We look forward to your participation and hope you will enjoy the sessions. <br/><br/>	
     
Should you have questions, please do not hesitate to contact us via email.  <br/>'
;

$message2 =$letterhead.$contentEmail1.$contentEmail.$contentEmail2.$footerEmail;		
$mailto=mail($to2, $subject2, $message2, $headers2);
};

};
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
