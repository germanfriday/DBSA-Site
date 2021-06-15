<?php require_once('Connections/DBSA.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_DBSA, $DBSA);
$query_rs_Mixers = "SELECT `date`, title, `description` FROM Mixers ORDER BY id ASC";
$rs_Mixers = mysql_query($query_rs_Mixers, $DBSA) or die(mysql_error());
$row_rs_Mixers = mysql_fetch_assoc($rs_Mixers);
$totalRows_rs_Mixers = mysql_num_rows($rs_Mixers);
 
$section  = "Support"; $subsection = "fourth_mondays"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Support :: Events :: DBSA Metro Detroit</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFF1;
}
-->
</style>
<link href="DBSA_Styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="Print_Styles.css" rel="stylesheet" type="text/css" media="print" />
</head>
<body onload="MM_preloadImages('images/conferences_f2.jpg')">
<div align="center">
  <table width="750" height="585" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="145" rowspan="3" valign="top" background="images/side_filler.jpg"><?php include ('includes/support_sidebar.php') ?></td>
      <td width="605" height="160" valign="top" background="images/page_filler.gif"><?php include ('includes/header.php') ?></td>
    </tr>
    <tr>
      <td width="605" height="395" valign="top" background="images/page_filler.gif"><table width="605" height="395" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="605" height="45" valign="top"><div align="left"><img src="images/fourth_title.jpg" width="605" height="45" /></div></td>
          </tr>
          <tr>
            <td width="605" height="350" valign="top"><table width="605" height="350" border="0" cellpadding="16" cellspacing="0" background="images/page_filler.gif">
                <tr>
                  <td width="605" height="350" valign="top"><div align="left">
                      <table width="100" height="142" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="left" valign="top" class="BodyText"><img src="images/fourth_mon.gif" width="85" height="132" align="left" /></td>
                        </tr>
                      </table>
                      <p class="BodyTextBold">The Monday Night Mixers have been post-poned indefinitely!  We are modifying our events to better serve the community.  We will be reducing our events to a quarterly calendar with the goals of better connecting individuals with one another.<br />
                        <br />
                        In July, we are planning a social event during July 28th.  This event will be fashioned after our very successful First Annual Anxiety Free Holiday Dinner!  Rosie O&rsquo;Grady&rsquo;s in Ferndale (on 9 mile) will be hosting us!  We will be supplying dinner and a wonderful evening of gathering and socializing.  Seats will be limited and we ask that you RSVP as soon as possible.<br />
                        <br />
                        Please contact Barb @ 586-604-5929 and leave your name, phone number and email address.  You will receive a return call confirming your seat.</p>
                      <p class="BodyText">&nbsp;</p></div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="605" height="20" background="images/page_filler.gif"><?php require ('includes/footer.php') ?></td>
    </tr>
    <tr>
      <td width="145" height="10"><img src="images/side_footer.jpg" width="145" height="10" /></td>
      <td width="605" height="10"><img src="images/page_footer.gif" width="605" height="10" /></td>
    </tr>
  </table>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-946070-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></body>
</html>
<?php
mysql_free_result($rs_Mixers);
?>
