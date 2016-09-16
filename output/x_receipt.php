<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RECEIPT </title>
<?php require_once('include/dbcommon.php');
require_once('x_config.php');
?>

<link href="x_style.css" rel="stylesheet" type="text/css" />
<p>
<?php 

$receiptID =$_GET['receiptID'];

//select campus  settingk;/

$receipt_sql ="
SELECT
payments.id,
payments.tx,
payments.currency,
payments.amount,
payments.payStatus,
payments.itemID,
payments.payDate,
payments.`mode`,
payments.userID,
payments.cid,
payments.receiptNo,
paper.paperRef,
conference.cnameShort,
confees.item,
`user`.fullName,
`user`.email
FROM payments
LEFT OUTER JOIN paper ON payments.itemID = paper.paperRef
INNER JOIN conference ON payments.cid = conference.cid
LEFT OUTER JOIN participate ON payments.userID = participate.userID
LEFT OUTER JOIN confees ON participate.cfid = confees.cfid
INNER JOIN `user` ON payments.userID = `user`.userID
WHERE payments.id=$receiptID ";
$receipt_query = mysql_query($receipt_sql);
$receipt=mysql_fetch_array($receipt_query);


?>
</p>
<table width="98%" height="684" border="1" align="center" class="table_cover">
  <tr>
    <td align="left" valign="top" scope="col">
      <table width="780" border="0" align="center" class="left">
        <tr>
          <th width="24%" height="202" scope="row"><img src="images/logoBig1.png" width="200" height="200"/></th>
          <td width="5%"><br />          </td>
          <td width="71%" valign="middle"><p><strong>Academia Consortium of Science, Technology,  Arts, Innovation and Research (ACSTAIR)</strong><br />
          </p>
            <table width="90%" border="0">
              <tr>
                <td width="14%">TEL </td>
                <td width="34%">: +603-503 31754</td>
                <td width="17%">FAX </td>
                <td width="35%">:+603 503 31755</td>
              </tr>
              <tr>
                <td>EMAIL  </td>
                <td>: info@acstair.com</td>
                <td>WEBSITE</td>
                <td>:  www.acstair.com</td>
              </tr>
            </table>
          <p>&nbsp;</p></td></tr>
      </table>
      
      <div class="div_all">
        <div class="divcenter">
      
          <table width="100%" border="0" cellpadding="5">
            <tr>
              <td width="72%"><strong>Date: <?php echo dates(now()) ?></strong></td>
              <th align="right">Receipt No:<strong> <?php echo $receipt['receiptNo'] ?></strong></th>
            </tr>
          </table>
          <hr />
<h2><strong>OFFICIAL RECEIPT</strong>          </h2>
          <p>Thank you for your payment.<br />
          </p>
          <table width="90%" border="1" align="center" cellpadding="10" cellspacing="0">
            <tr>
              <td width="146">                Name </td>
              <th width="6" align="left">:</th>
              <td width="593"><?php echo $receipt['fullName'] ?></td>
            </tr>
            <tr>
              <td width="146">Item</td>
              <th width="6" align="left">:</th>
              <td width="593"><?php echo $receipt['cnameShort']  ?>-<?php echo $receipt['item']  ?> </td>
            </tr>
            <tr>
              <td>Amount Paid</td>
              <th align="left">:</th>
              <td><?php echo $receipt['currency'] ?> <?php echo $receipt['amount'] ?></td>
            </tr>
            <tr>
              <td>Method of Payment</td>
              <th align="left">:</th>
              <td><?php echo $receipt['mode'] ?></td>
            </tr>
            <tr>
              <td>Transaction Date</td>
              <th align="left">:</th>
              <td><?php echo dates($receipt['payDate']) ?></td>
            </tr>
            <tr>
              <td>Transaction ID</td>
              <th align="left">:</th>
              <td><?php echo $receipt['tx'] ?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          Note: This is computer generated document. No signature is needed.<br clear="all" />
        </div>
        <div class="clear"></div>
   
      </div>
   </td>
  </tr>
</table>

<p>&nbsp;</p>
