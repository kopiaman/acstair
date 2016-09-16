<?php

$hostname_main = $host;
$database_main = $sys_dbname;
$username_main = $user;
$password_main = $pwd;
$main = mysql_connect($hostname_main, $username_main, $password_main) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_main) or die(mysql_error());

function namelogo() {
  $sqllogo = "select logo,campus_name from campus_setting";
  $resultlogo = mysql_query($sqllogo) or die(mysql_error());
  while($rowlogo = mysql_fetch_array($resultlogo)) {
    $info['logo']       =  $rowlogo['logo'];
    $info['campusname'] = $rowlogo['campus_name'];
  }
  return($info);
}


/**
 * The \b in the pattern indicates a word boundary, so only the distinct
 * word "Pass" is matched, and not a word partial like "passing"
 * \i is case insensitive
 *
 */
function grepPass($str) {
  if (preg_match("/\bpass\b/i", $str) || preg_match("/\bgood\b/i", $str) || preg_match("/\bexcellent\b/i", $str)) {
    return TRUE;
  }
  else {
    return FALSE;
  }
}


function common_slip_header($break,$preview,$generate,$main_header,$top_right_txt1,$top_right_txt2) {
  $info = namelogo();

  $header =  "<table width=\"100%\" border=0>";
  if ($break == 1) {
    if ($preview == 1 && $generate == 0) {
    $header .= "<tr><td colspan=3>----------------------------------------------------------------------------------------------------------- page break -----------------------------------------------------------------------------------------------------------</td></tr>";
    }
  }

  if ($generate == 1) {
    $header .= "<tr><td>&nbsp;</td></tr>";
    $header .= "<tr><td>&nbsp;</td></tr>";
    $header .= "<tr><td>&nbsp;</td></tr>";
    $header .= "<tr><td>&nbsp;</td></tr>";
  }

  $header .= "
    <tr>
      <td width=\"50%\" rowspan=2><img src=\"images/".$info['logo']."\"></td>
      <td width=\"35%\">&nbsp;</td>
      <td width=\"15%\" valign=\"bottom\" align=left><b>$top_right_txt1</b></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width=\"10%\" valign=\"top\" align=left><b>$top_right_txt2</b></td>
    </tr>
  </table>

  <div align=center>
    <h2><font color=blue>MALAYSIAN AVIATION<br>TRAINING ACADEMY SDN. BHD. (691963-D)</font></h2>
  </div>

  <div align=center class=\"page-header\">
    <br>
    <h1>$main_header</h1>
  </div>";

  return $header;
}

//cth  12 Dec 2014
function dates($date){
$dateNormal=date("d M Y", strtotime($date));	
return $dateNormal;
};

function day($date){
$dateNormal=date("d", strtotime($date));	
return $dateNormal;
};
?>
