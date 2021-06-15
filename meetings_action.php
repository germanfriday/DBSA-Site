<?php require_once('Connections/DBSA.php'); ?>
<?php
$colname_rsMeetings = "1";
if (isset($_POST['County'])) {
  $colname_rsMeetings = (get_magic_quotes_gpc()) ? $_POST['County'] : addslashes($_POST['County']);
}
mysql_select_db($database_DBSA, $DBSA);
$query_rsMeetings = sprintf("SELECT * FROM Meetings WHERE County = '%s' ORDER BY City ASC", $colname_rsMeetings);
$rsMeetings = mysql_query($query_rsMeetings, $DBSA) or die(mysql_error());
$row_rsMeetings = mysql_fetch_assoc($rsMeetings);
$totalRows_rsMeetings = mysql_num_rows($rsMeetings);

mysql_select_db($database_DBSA, $DBSA);
$query_rsCounties = "SELECT * FROM Counties ORDER BY County ASC";
$rsCounties = mysql_query($query_rsCounties, $DBSA) or die(mysql_error());
$row_rsCounties = mysql_fetch_assoc($rsCounties);
$totalRows_rsCounties = mysql_num_rows($rsCounties);
 
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
                <td width="605" height="350" valign="top"><div align="center">
                  <form name="Countiy Select" id="Countiy Select" method="post" action="meetings_action.php">
                    <div align="left"><span class="FieldName">Choose another County</span><span class="SubHeads">                          <select name="County" size="1" class="FormElements" id="County">
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
                          </select>
                          <input name="Submit" type="submit" class="FormElements" value="Go>" />
                          <br />
                          <a href="meetings.php" class="LinkText">&lt; Back to All Meetings </a> </span> </div>
                  </form>
                  <table width="560" border="0" cellpadding="0" cellspacing="0" bordercolor="#CDECF3" class="TableStrokeStyle">
                      <tr>
                        <td width="560" bgcolor="#DEF3F6" class="SubHeads"><div align="center">
                          <table width="560" cellpadding="3" cellspacing="0">
                            <tr>
                              <td width="560" class="SubHeads"> <div align="left"><?php echo $row_rsMeetings['County']; ?> County </div></td>
                            </tr>
                          </table>
                          </div></td>
                      </tr>
                      <tr>
                        <td width="560" bgcolor="#F7FDFD"><div align="center">
                          <?php do { ?>
                          <table width="560" border="0" cellpadding="5" cellspacing="0">
                            <tr valign="top">
                              <td width="100" class="MeetingText"><div align="left"><?php echo $row_rsMeetings['City']; ?></div></td>
                              <td width="120" class="MeetingText"><div align="left"><?php echo $row_rsMeetings['Day']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsMeetings['Time']; ?><span class="InterestText"><br />
                                      </span></span><br />
                              </div></td>
                              <td width="220" class="MeetingText"><div align="left"><span class="MeetingTimeText"><span class="InterestText"> </span></span><?php echo $row_rsMeetings['Location']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsMeetings['Address']; ?><span class="InterestText"><br />
                                      </span></span><span class="MeetingTimeText"><span class="InterestText"><?php echo $row_rsMeetings['Specialinterest']; ?></span></span><br />
                              </div></td>
                              <td width="125" class="MeetingText"><div align="left"><?php echo $row_rsMeetings['Primarycontact']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsMeetings['Primaryphone']; ?><br />
                                      </span><?php echo $row_rsMeetings['Secondarycontact']; ?><span class="MeetingTimeText"><br />
                                      <?php echo $row_rsMeetings['Secondaryphone']; ?><br />
                                      </span></div></td>
                            </tr>
                          </table>
                          <?php } while ($row_rsMeetings = mysql_fetch_assoc($rsMeetings)); ?>
                        </div></td>
                      </tr>
                  </table>
                  </div></td>
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
mysql_free_result($rsMeetings);

mysql_free_result($rsCounties);
?>
