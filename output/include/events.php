<?php 
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;


//	onscreen events


	
	
		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		global $conn;

$username=$_SESSION['UserID'];
$sql_user= "SELECT fullName,institution,address,city,state,country FROM user WHERE email='$username'";
$query_user=db_query($sql_user,$conn);
$user=db_fetch_array($query_user);

$_SESSION['fullName']=$user['fullName'];




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events

} 
?>
