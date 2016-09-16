<?php 
class eventclass_paper  extends eventsBase
{ 
	function eventclass_paper()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
global $conn;
$paperID=$keys['paperID'];

$sql_paper= " SELECT paper.paperID,paper.userID,
paper.cid,paper.funded,paper.date_submit,paper.title,
paper.abstract,paper.paperStatus,paper.fullPaper,paper.paymentStatus,
`user`.fullName ,`user`.email AS cmail,
conference.cnameShort,conference.cname,
conference.sDate,conference.eDate,
conference.cTime,conference.location,
conference.address,conference.city,conference.country,
conference.slogan
FROM paper
INNER JOIN `user` ON paper.userID = `user`.userID
INNER JOIN conference ON paper.cid = conference.cid
WHERE paper.paperID=$paperID";
$query_paper=db_query($sql_paper,$conn);
$paper=db_fetch_array($query_paper);

$paperStatus=$values['paperStatus'];
$sDate=date('d', strtotime($paper[sDate]));
$eDate=date('d M Y', strtotime($paper[eDate])) ;

$sql_company= "SELECT `coid`, `cname`, `creg`, `caddress`, `ccity`, `cstate`, `ccountry`, `ctel`, `cfax`, `cemail` FROM `company` WHERE `coid`=1";
$query_company=db_query($sql_company,$conn);
$company=db_fetch_array($query_company);



//send to client

$refNo=$values['paperRef'];
$to2=$paper['cmail'];
$subject2 ="$paper[cnameShort]- Paper Submission Status - Ref[ $refNo ]";
$headers2 = "From: " . $company['cemail'] . "\r\n";
$headers2 .= "Content-type: text/html" ."\r\n";

//content table 
include('emailHead.php');	
	
$contentEmail1='  <table width="90%"  border="0" align="center" cellpadding="50" cellspacing="0"  style="font-size:14px">
        <tr><td bgcolor="#E4E4E4" scope="col">';
$contentEmail2=' </td></tr></table>';

if($paperStatus!=$oldvalues['paperStatus']){

			if($paperStatus=='AB-OK'){

			$contentEmail='
			<h2 style="color:#036">'.$paper['cnameShort'].'- Paper Submission Status </h2>
			<hr style="color: #666; height: 1px; background: #666; border: none ; margin-bottom:10px;" />
			<p> Good Day  '.$paper['fullName'].', </p>
			<p> Thank you for your abstract submission titled '.$paper['title'].' <br/><br/>
			<p> Good news, your paper abstract is ACCEPTED.<br/><br/>
			<p> You may proceed to full paper submission and make payment at website. <br/><br/>
			Please stay updated by visiting our website. </p>';

			$message2 =$letterhead.$contentEmail1.$contentEmail.$contentEmail2.$footerEmail;		
			$mailto=mail($to2, $subject2, $message2, $headers2);

			}else if($paperStatus=='AB-NG' && $oldvalues['paperStatus']!=$value['paperStatus']){

			$contentEmail='
			<h2 style="color:#036">'.$paper['cnameShort'].'- Paper Submission Status </h2>
			<hr style="color: #666; height: 1px; background: #666; border: none ; margin-bottom:10px;" />
			<p> Good Day  '.$paper['fullName'].', </p>
			<p> Thank you for your abstract submission titled '.$paper['title'].' <br/><br/>
			<p> We regret to inform you the panel has rejected your abstract<br/><br/>
			<p> Kindly login again at '.$paper['cnameShort'].' website for fresh submission.<br/><br/>
			Please stay updated by visiting our website. </p>';

			$message2 =$letterhead.$contentEmail1.$contentEmail.$contentEmail2.$footerEmail;	
			$mailto=mail($to2, $subject2, $message2, $headers2);


			}else if($paperStatus=='FP-OK' && $oldvalues['paperStatus']!=$value['paperStatus']){

			$contentEmail='
			<h2 style="color:#036">'.$paper['cnameShort'].'- Paper Submission Status </h2>
			<hr style="color: #666; height: 1px; background: #666; border: none ; margin-bottom:10px;" />
			<p> Good Day  '.$paper['fullName'].', </p>
			<p> We thank you for your full paper submission titled  '.$paper['title'].' <br/>
			<p> Congratulation, your paper has been ACCEPTED. <br/>
			We will dispatch you an official invitation letter soon. <br/><br/>
			For payment info and processes, please check the website. <br/><br/>
			Please stay updated by visiting our website. </p>';

			$message2 =$letterhead.$contentEmail1.$contentEmail.$contentEmail2.$footerEmail;	
			$mailto=mail($to2, $subject2, $message2, $headers2);


			}else if($paperStatus=='FP-NG' && $oldvalues['paperStatus']!=$value['paperStatus']){

			$contentEmail='
			<h2 style="color:#036">'.$paper['cnameShort'].'- Paper Submission Status </h2>
			<hr style="color: #666; height: 1px; background: #666; border: none ; margin-bottom:10px;" />
			<p> Good Day  '.$paper['fullName'].', </p>
			<p> We thank you for your full paper submission titled  '.$paper['title'].'. <br/><br/>
			<p> We regret to inform you that the review panel has rejected your paper. <br/><br/>
			Please make the necessary amendment and resend to our email. <br/><br/>
			Please stay updated by visiting our website. </p>';

			$message2 =$letterhead.$contentEmail1.$contentEmail.$contentEmail2.$footerEmail;	
			$mailto=mail($to2, $subject2, $message2, $headers2);

			};

};
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
