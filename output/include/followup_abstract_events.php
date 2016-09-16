<?php 
class eventclass_followup_abstract  extends eventsBase
{ 
	function eventclass_followup_abstract()
	{
	// fill list of events
		$this->events["AfterEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		global $conn;

if( ($values['note']!=$oldvalues['note']) &&  $values['note']=='R-ABS'){

$to2=$values['email'];
			$to2=$row['email'];
			$subject2 ="Cuba";
			$headers2 = "From: info@acstair.com  \r\n";
			$headers2 .= "Content-type: text/html" ."\r\n";



		$message2 ="<html><body>";
		
			$message2 .="
			<h1>TESTS Invitation Letter </h1> <br/>
			<p style='font-size:14px; width:600px; border:solid 1px; padding:50px; line-height:30px;'> 
			Dear $row[fullName], <br/>
			
      
			Should you have questions, please do not hesitate to contact us via email.  <br/>

			<br/><br/>
			 	
			Sincerly, <br/>
			ACSTAIR's Conference Commitee<br/>
						
			<br/> 
			</p>";
			
			
			$message2 .= "</body></html>";
			$mailto=mail($to2, $subject2, $message2, $headers2);

}
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
