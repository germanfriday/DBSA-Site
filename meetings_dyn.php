<?php require_once('Connections/DBSA.php'); ?>
<?php
mysql_select_db($database_DBSA, $DBSA);
$query_rsCounties = "SELECT * FROM Counties";
$rsCounties = mysql_query($query_rsCounties, $DBSA) or die(mysql_error());
$row_rsCounties = mysql_fetch_assoc($rsCounties);
$totalRows_rsCounties = mysql_num_rows($rsCounties);

mysql_select_db($database_DBSA, $DBSA);
$query_rsCities = "SELECT City FROM Meetings";
$rsCities = mysql_query($query_rsCities, $DBSA) or die(mysql_error());
$row_rsCities = mysql_fetch_assoc($rsCities);
$totalRows_rsCities = mysql_num_rows($rsCities);
 
$section  = "Support"; $subsection = "Meetings"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Support :: Meetings :: DBSA Metro Detroit</title>
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

<body onload="MM_preloadImages('images/meetings_f2.jpg','images/events_f2.jpg','images/conferences_f2.jpg','images/home_f2.jpg','images/support_f2.jpg','images/education_f2.jpg','images/hope_f2.jpg','images/membership_f2.jpg','images/contact_f2.jpg')">
<div align="center">
  <table width="750" height="585" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="145" rowspan="3" valign="top" background="images/side_filler.jpg"><?php include ('includes/support_sidebar.php') ?></td>
      <td width="605" height="160" valign="top" background="images/page_filler.gif"><?php include ('includes/header.php') ?></td>
    </tr>
    <tr>
      <td width="605" height="395" valign="top" background="images/page_filler.gif"><table width="605" height="395" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="605" height="45" valign="top"><div align="left"><img src="images/meetings_title.jpg" width="605" height="45" /></div></td>
        </tr>
        <tr>
          <td width="605" height="350" valign="top"><table width="605" height="350" border="0" cellpadding="16" cellspacing="0" background="images/page_filler.gif">
              <tr>
                <td width="605" height="350" valign="top" class="SubHeads"><form name="MeetingSelector" id="MeetingSelector" method="post" action="meetings_action.php">
                  <table width="555" border="0" cellspacing="0" cellpadding="10">
                    <tr>
                      <td width="555" align="left"><span class="FieldName">Find a Meeting by County</span>                        <select name="County" class="FormElements" id="County">
                          <option selected="selected" value="">Choose a County</option>
                          <?php
do {  
?>
                          <option value="<?php echo $row_rsCounties['County']?>"><?php echo $row_rsCounties['County']?></option>
                          <?php
} while ($row_rsCounties = mysql_fetch_assoc($rsCounties));
  $rows = mysql_num_rows($rsCounties);
  if($rows > 0) {
      mysql_data_seek($rsCounties, 0);
	  $row_rsCounties = mysql_fetch_assoc($rsCounties);
  }
?>
                        </select> <input name="Submit" type="submit" class="FormElements" value="Go>" />
                        </td>
                    </tr>
                    <tr>
                      <td width="555" align="left">&nbsp;</td>
                    </tr>
                  </table>
                </form></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="605" height="20" background="images/page_filler.gif"><?php require ('includes/footer.php') ?></td>
    </tr>
    <tr>
      <td width="145" height="10"><img src="images/side_footer.jpg" width="145" height="10"></td>
      <td width="605" height="10"><img src="images/page_footer.gif" width="605" height="10"></td>
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
mysql_free_result($rsCounties);

mysql_free_result($rsCities);
?>
