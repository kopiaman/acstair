<?php 
class eventclass_followup_user  extends eventsBase
{ 
	function eventclass_followup_user()
	{
	// fill list of events
		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		global $conn;

if( ($values['note']!=$oldvalues['note']) &&  $values['note']=='R-JOIN'){

$sql_company= "SELECT `coid`, `cname`, `creg`, `caddress`, `ccity`, `cstate`, `ccountry`, `ctel`, 
`cfax`, `cemail` FROM `company` WHERE `coid`=1";
$query_company=db_query($sql_company,$conn);
$company=db_fetch_array($query_company);

$sql_conf= "SELECT r_join,r_abs,r_pay_abs,r_pay_fp,r_fp FROM followup ORDER BY cid DESC LIMIT 0,1 ";
$query_conf=db_query($sql_conf,$conn);
$conf=db_fetch_array($query_conf);

$to2=$values['email'];

$subject2 ="$company[cname]- Confirmation of Participation ";
$headers2 = "From: " . $company['cemail'] . "\r\n";
$headers2 .= "Content-type: text/html" ."\r\n";

include('emailHead.php');	

$contentEmail=$conf['r_join'];

$message2 =$letterhead.$contentEmail1_1.$contentEmail.$contentEmail2_1.$footerEmail;	
$mailto=mail($to2, $subject2, $message2, $headers2);

}
return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
