<?php 
class eventclass_user_register  extends eventsBase
{ 
	function eventclass_user_register()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		global $conn;

$email=$values['email'];

		$sql_mem = "SELECT COUNT(email) AS sameEmail FROM `user` WHERE `email` LIKE '$email'";
		$q_mem =db_query($sql_mem,$conn);
		$row_qmem=db_fetch_array($q_mem);
		
$sameEmail=$row_qmem['sameEmail'];

if ($sameEmail==0){  
$message="Your registeration is succesful. You can login now";
$values['password']=md5($values['password']);
return true;

}else if(($sameEmail==1)){
$message="Your email already registered. Please try login again or reset password";
return false;

};

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		/*
global $conn;
$newpassword=md5($values['password']);
$userID=$keys['userID'];
$sql_up= "UPDATE user SET password ='$newpassword' WHERE userID='$userID'";
$query_up=db_exec($sql_up,$conn);
*/
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
