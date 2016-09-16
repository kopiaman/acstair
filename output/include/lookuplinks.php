<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["set_field"]["user.note"]["edit"] = array("table" => "user", "field" => "note", "page" => "edit");
	$lookupTableLinks["user"]["paper.userID"]["edit"] = array("table" => "paper", "field" => "userID", "page" => "edit");
	$lookupTableLinks["conference"]["paper.cid"]["edit"] = array("table" => "paper", "field" => "cid", "page" => "edit");
	$lookupTableLinks["set_field"]["paper.paperStatus"]["edit"] = array("table" => "paper", "field" => "paperStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["paper.paymentStatus"]["edit"] = array("table" => "paper", "field" => "paymentStatus", "page" => "edit");
	$lookupTableLinks["confees"]["paper.cfid"]["edit"] = array("table" => "paper", "field" => "cfid", "page" => "edit");
	$lookupTableLinks["set_field"]["conference.cstatus"]["edit"] = array("table" => "conference", "field" => "cstatus", "page" => "edit");
	$lookupTableLinks["set_field"]["congallery.cat"]["edit"] = array("table" => "congallery", "field" => "cat", "page" => "edit");
	$lookupTableLinks["conference"]["participate.cid"]["edit"] = array("table" => "participate", "field" => "cid", "page" => "edit");
	$lookupTableLinks["user"]["participate.userID"]["edit"] = array("table" => "participate", "field" => "userID", "page" => "edit");
	$lookupTableLinks["confees"]["participate.cfid"]["edit"] = array("table" => "participate", "field" => "cfid", "page" => "edit");
	$lookupTableLinks["set_field"]["payments.currency"]["edit"] = array("table" => "payments", "field" => "currency", "page" => "edit");
	$lookupTableLinks["user"]["payments.userID"]["edit"] = array("table" => "payments", "field" => "userID", "page" => "edit");
	$lookupTableLinks["conference"]["payments.cid"]["edit"] = array("table" => "payments", "field" => "cid", "page" => "edit");
	$lookupTableLinks["conference"]["listener.cid"]["edit"] = array("table" => "listener", "field" => "cid", "page" => "edit");
	$lookupTableLinks["confees"]["listener.cfid"]["edit"] = array("table" => "listener", "field" => "cfid", "page" => "edit");
	$lookupTableLinks["conference"]["certificate.cid"]["edit"] = array("table" => "certificate", "field" => "cid", "page" => "edit");
	$lookupTableLinks["confees"]["certificate.cfid"]["edit"] = array("table" => "certificate", "field" => "cfid", "page" => "edit");
	$lookupTableLinks["user"]["slot.userID"]["edit"] = array("table" => "slot", "field" => "userID", "page" => "edit");
	$lookupTableLinks["conference"]["slot.cid"]["edit"] = array("table" => "slot", "field" => "cid", "page" => "edit");
	$lookupTableLinks["set_field"]["slot.paperStatus"]["edit"] = array("table" => "slot", "field" => "paperStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["slot.paymentStatus"]["edit"] = array("table" => "slot", "field" => "paymentStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["slot.slotTime"]["edit"] = array("table" => "slot", "field" => "slotTime", "page" => "edit");
	$lookupTableLinks["set_field"]["testmail.currency"]["edit"] = array("table" => "testmail", "field" => "currency", "page" => "edit");
	$lookupTableLinks["user"]["testmail.userID"]["edit"] = array("table" => "testmail", "field" => "userID", "page" => "edit");
	$lookupTableLinks["conference"]["testmail.cid"]["edit"] = array("table" => "testmail", "field" => "cid", "page" => "edit");
	$lookupTableLinks["conference"]["inviteLetter.cid"]["edit"] = array("table" => "inviteLetter", "field" => "cid", "page" => "edit");
	$lookupTableLinks["set_field"]["inviteLetter.paperStatus"]["edit"] = array("table" => "inviteLetter", "field" => "paperStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["inviteLetter.paymentStatus"]["edit"] = array("table" => "inviteLetter", "field" => "paymentStatus", "page" => "edit");
	$lookupTableLinks["conference"]["followup_payment.cid"]["edit"] = array("table" => "followup_payment", "field" => "cid", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_payment.paperStatus"]["edit"] = array("table" => "followup_payment", "field" => "paperStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_payment.paymentStatus"]["edit"] = array("table" => "followup_payment", "field" => "paymentStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_payment.note"]["edit"] = array("table" => "followup_payment", "field" => "note", "page" => "edit");
	$lookupTableLinks["conference"]["followup_abstract.cid"]["edit"] = array("table" => "followup_abstract", "field" => "cid", "page" => "edit");
	$lookupTableLinks["confees"]["followup_abstract.cfid"]["edit"] = array("table" => "followup_abstract", "field" => "cfid", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_abstract.note"]["edit"] = array("table" => "followup_abstract", "field" => "note", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_user.note"]["edit"] = array("table" => "followup_user", "field" => "note", "page" => "edit");
	$lookupTableLinks["conference"]["followup_payment_fullPaper.cid"]["edit"] = array("table" => "followup_payment_fullPaper", "field" => "cid", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_payment_fullPaper.paperStatus"]["edit"] = array("table" => "followup_payment_fullPaper", "field" => "paperStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_payment_fullPaper.paymentStatus"]["edit"] = array("table" => "followup_payment_fullPaper", "field" => "paymentStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_payment_fullPaper.note"]["edit"] = array("table" => "followup_payment_fullPaper", "field" => "note", "page" => "edit");
	$lookupTableLinks["conference"]["followup_full_paper.cid"]["edit"] = array("table" => "followup_full_paper", "field" => "cid", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_full_paper.paperStatus"]["edit"] = array("table" => "followup_full_paper", "field" => "paperStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_full_paper.paymentStatus"]["edit"] = array("table" => "followup_full_paper", "field" => "paymentStatus", "page" => "edit");
	$lookupTableLinks["set_field"]["followup_full_paper.note"]["edit"] = array("table" => "followup_full_paper", "field" => "note", "page" => "edit");
	$lookupTableLinks["conference"]["graph_presenter.cid"]["search"] = array("table" => "graph_presenter", "field" => "cid", "page" => "search");
	$lookupTableLinks["conference"]["followup.cid"]["edit"] = array("table" => "followup", "field" => "cid", "page" => "edit");
	$lookupTableLinks["conference"]["graph_participate.cid"]["search"] = array("table" => "graph_participate", "field" => "cid", "page" => "search");
}

?>