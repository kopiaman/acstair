<?php 
class eventclass_testmail  extends eventsBase
{ 
	function eventclass_testmail()
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




;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
