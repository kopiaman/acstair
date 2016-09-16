<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INVITATION LETTER </title>
<?php require_once('include/dbcommon.php');
require_once('x_config.php');
?>

<link href="x_style.css" rel="stylesheet" type="text/css" />
<p>
<?php 

$paperID =$_GET['paperID'];

//select campus  settingk;/

$paper_sql ="
SELECT
paper.paperID,
paper.userID,
paper.cid,
paper.funded,
paper.date_submit,
paper.title,
paper.abstract,
paper.paperStatus,
paper.fullPaper,
paper.paymentStatus,
`user`.fullName,
`user`.institution,
paper.multiAuthor,
paper.paperID AS opt,
paper.paperRef,
paper.invite,
conference.cname,
conference.cnameShort,
conference.eDate,
conference.sDate,
conference.location,
conference.country,
conference.city,
conference.cnameCode
FROM paper
INNER JOIN `user` ON paper.userID = `user`.userID
INNER JOIN conference ON paper.cid = conference.cid
WHERE paper.paperID=$paperID;";
$paper_query = mysql_query($paper_sql);
$paper=mysql_fetch_array($paper_query);

//require_once('x_student_info_query.php');
?>
</p>
<table width="98%" border="0" align="center" class="table_cover">
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
          <p><strong>Date:  <?php echo dates(now()) ?></strong></p>
          <hr />
<h2><strong>OFFICIAL LETTER OF ACCEPTANCE</strong>          </h2>
          <p><?php echo $paper['cname']; ?> is pleased  to inform you that your paper has been accepted by  the Secretariat to be presented at the conference which will be held from <?php echo day($paper['sDate'])?>-<?php echo dates($paper['eDate'])?> at <?php echo $paper['location'] ?>,<?php echo $paper['city'] ?>, <?php echo $paper['country'] ?>.<br />
            <br />
          The details  are as follows:</p>
          <table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="143">                Name </td>
              <td width="45" align="center"><p>:</p></td>
              <td width="812"><p><?php echo $paper['fullName'] ?></p></td>
            </tr>
            <tr>
              <td width="143"><p>Institution</p></td>
              <td width="45" align="center"><p>:</p></td>
              <td width="812"><p><?php echo $paper['institution'] ?></p></td>
            </tr>
            <tr>
              <td width="143"><p>Paper Ref No</p></td>
              <td width="45" align="center"><p>:</p></td>
              <td width="812"><p><?php echo $paper['paperRef'] ?></p></td>
            </tr>
            <tr>
              <td width="143"><p>Paper Title</p></td>
              <td width="45" align="center"><p>:</p></td>
              <td width="812"><p><?php echo $paper['title'] ?></p></td>
            </tr>
          </table>
          <p>Congratulations and welcome to our conference. <br />
            <br />
            Sincerely,<br />
            <img width="318" height="87" src="x_inviteLetter_clip_image002.jpg" /> <br />
          Lokman Wahid</p>
          <p>Chairman<br />
          <?php echo $paper['cnameShort'] ?>
            <br />
          </p>
          <br clear="all" />
        </div>
        <div class="clear"></div>
   
      </div>
   </td>
  </tr>
</table>

<p>&nbsp;</p>
