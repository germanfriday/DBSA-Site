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

$colname_rsMeeting = "-1";
if (isset($_POST['County'])) {
  $colname_rsMeeting = (get_magic_quotes_gpc()) ? $_POST['County'] : addslashes($_POST['County']);
}
mysql_select_db($database_DBSA, $DBSA);
$query_rsMeeting = sprintf("SELECT County, City, `Day`, `Time`, Specialinterest, Location, Address, Primarycontact, Primaryphone, Secondarycontact, Secondaryphone FROM Meetings WHERE County = '%s'", $colname_rsMeeting);
$rsMeeting = mysql_query($query_rsMeeting, $DBSA) or die(mysql_error());
$row_rsMeeting = mysql_fetch_assoc($rsMeeting);
$totalRows_rsMeeting = mysql_num_rows($rsMeeting);

mysql_select_db($database_DBSA, $DBSA);
$query_rsWayne = "SELECT * FROM Meetings WHERE County = 'Wayne' ORDER BY City ASC";
$rsWayne = mysql_query($query_rsWayne, $DBSA) or die(mysql_error());
$row_rsWayne = mysql_fetch_assoc($rsWayne);
$totalRows_rsWayne = mysql_num_rows($rsWayne);

mysql_select_db($database_DBSA, $DBSA);
$query_rsWashtenaw = "SELECT * FROM Meetings WHERE County = 'Washtenaw' ORDER BY City ASC";
$rsWashtenaw = mysql_query($query_rsWashtenaw, $DBSA) or die(mysql_error());
$row_rsWashtenaw = mysql_fetch_assoc($rsWashtenaw);
$totalRows_rsWashtenaw = mysql_num_rows($rsWashtenaw);

mysql_select_db($database_DBSA, $DBSA);
$query_rsOakland = "SELECT * FROM Meetings WHERE County = 'Oakland' ORDER BY City ASC";
$rsOakland = mysql_query($query_rsOakland, $DBSA) or die(mysql_error());
$row_rsOakland = mysql_fetch_assoc($rsOakland);
$totalRows_rsOakland = mysql_num_rows($rsOakland);

mysql_select_db($database_DBSA, $DBSA);
$query_rsMonroe = "SELECT * FROM Meetings WHERE County = 'Monroe' ORDER BY City ASC";
$rsMonroe = mysql_query($query_rsMonroe, $DBSA) or die(mysql_error());
$row_rsMonroe = mysql_fetch_assoc($rsMonroe);
$totalRows_rsMonroe = mysql_num_rows($rsMonroe);

mysql_select_db($database_DBSA, $DBSA);
$query_rsMacomb = "SELECT * FROM Meetings WHERE County = 'Macomb' ORDER BY City ASC";
$rsMacomb = mysql_query($query_rsMacomb, $DBSA) or die(mysql_error());
$row_rsMacomb = mysql_fetch_assoc($rsMacomb);
$totalRows_rsMacomb = mysql_num_rows($rsMacomb);

mysql_select_db($database_DBSA, $DBSA);
$query_rsBoard_Meetings = "SELECT * FROM Meetings WHERE County = 'Board_Meetings' ORDER BY City ASC";
$rsBoard_Meetings = mysql_query($query_rsBoard_Meetings, $DBSA) or die(mysql_error());
$row_rsBoard_Meetings = mysql_fetch_assoc($rsBoard_Meetings);
$totalRows_rsBoard_Meetings = mysql_num_rows($rsBoard_Meetings);

mysql_select_db($database_DBSA, $DBSA);
$query_rsSt_Clair = "SELECT * FROM Meetings WHERE County = 'St_Clair' ORDER BY City ASC";
$rsSt_Clair = mysql_query($query_rsSt_Clair, $DBSA) or die(mysql_error());
$row_rsSt_Clair = mysql_fetch_assoc($rsSt_Clair);
$totalRows_rsSt_Clair = mysql_num_rows($rsSt_Clair);

mysql_select_db($database_DBSA, $DBSA);
$query_rs_LastUpdated = "SELECT * FROM Updated";
$rs_LastUpdated = mysql_query($query_rs_LastUpdated, $DBSA) or die(mysql_error());
$row_rs_LastUpdated = mysql_fetch_assoc($rs_LastUpdated);
$totalRows_rs_LastUpdated = mysql_num_rows($rs_LastUpdated);

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

<body onload="MM_preloadImages('images/home_f2.jpg','images/support_f2.jpg','images/education_f2.jpg','images/hope_f2.jpg','images/membership_f2.jpg','images/contact_f2.jpg','images/meetings_f2.jpg','images/events_f2.jpg','images/conferences_f2.jpg','images/fourth_mondays_f2.jpg')">
<div align="center">
  <table width="750" height="585" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="145" rowspan="3" valign="top" background="images/side_filler.jpg"><a name="top" id="top"></a>
        <?php include ('includes/support_sidebar.php') ?></td><td width="605" height="160" valign="top" background="images/page_filler.gif"><?php include ('includes/header.php') ?></td>
    </tr>
    <tr>
      <td width="605" height="395" valign="top" background="images/page_filler.gif"><table width="605" height="395" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="605" height="45" valign="top"><div align="left"><img src="images/meetings_title.jpg" width="605" height="45" /></div></td>
        </tr>
        <tr>
          <td width="605" height="350" valign="top"><table width="605" height="700" border="0" cellpadding="16" cellspacing="0" background="images/page_filler.gif">
              <tr>
                <td width="605" height="350" valign="top"><div align="center">
                  <table width="560" border="0" cellspacing="0" cellpadding="0">
                    <tr class="SubHeads">
                      <td colspan="5"><form name="MeetingSelector" id="MeetingSelector" method="post" action="meetings_action.php">
                        <table width="560" border="0" cellspacing="0" cellpadding="5">
                          <tr>
                            <td align="left" class="BodyTextBold"><span class="newsText">Support Group Listings Last Updated: <?php echo $row_rs_LastUpdated['Last_Updated']; ?></span></td>
                          </tr>
                          <tr>
                            <td width="560" align="left"><span class="FieldName">Find Support Group Meetings by County</span>
                                <select name="County" class="FormElements" id="County">
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
                                <input name="Submit" type="submit" class="FormElements" value="Go>" />                            </td>
                          </tr>
                          
                          <tr>
                            <td align="left" class="newsText"><span class="BodyTextBold">Board meetings are open meetings.</span></td>
                          </tr>
                        </table>
                      </form></td>
                    </tr>
                  </table>
                  <table width="560" border="0" cellpadding="0" cellspacing="0" bordercolor="#CDECF3" class="TableStrokeStyle">
                  
                  <tr>
                  <td width="560" align="left" bgcolor="#DEF3F6" class="SubHeads"><div align="center">
                          <table width="560" align="center" cellpadding="3" cellspacing="0">
                            <tr>
                              <td width="470" align="left" class="SubHeads"> <a name="macomb" id="macomb"></a>Board Meetings</td>
                              <td width="90" class="SubHeads"><a href="#top"><img src="images/top.jpg" width="78" height="23" border="0" /></a></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                      <tr>
                        <td width="560" align="left" bgcolor="#F7FDFD"><div align="center">
                          <?php do { ?>
                          <table width="565" border="0" cellpadding="3" cellspacing="0">
                              <tr align="left" valign="top">
                                <td width="100" class="MeetingText"><?php echo $row_rsBoard_Meetings['City']; ?></td>
                                <td width="120" class="MeetingText"><div align="left"><?php echo $row_rsBoard_Meetings['Day']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsBoard_Meetings['Time']; ?></span></div></td>
                                <td width="220" class="MeetingText"><div align="left"><?php echo $row_rsBoard_Meetings['Location']; ?><br />
                                    <span class="MeetingTimeText"><?php echo $row_rsBoard_Meetings['Address']; ?><br />
                                    </span><span class="MeetingTimeText"><span class="InterestText"><?php echo $row_rsBoard_Meetings['Specialinterest']; ?></span><br />
                                  </span></div></td>
                                <td width="125" class="MeetingText"><div align="left"><?php echo $row_rsBoard_Meetings['Primarycontact']; ?><br />
                                  <span class="MeetingTimeText"><?php echo $row_rsBoard_Meetings['Primaryphone']; ?><br />
                                  </span><?php echo $row_rsBoard_Meetings['Secondarycontact']; ?><span class="MeetingTimeText"><br />
                                  <?php echo $row_rsBoard_Meetings['Secondaryphone']; ?><br />
                                  </span></div></td>
                              </tr>
                                </table>
                          <?php } while ($row_rsBoard_Meetings = mysql_fetch_assoc($rsBoard_Meetings)); ?>
                        </div></td>
                        </tr>
                        
                        
                        
                      <tr>
                        
                        
                        
                        
                        
                        
                        
                        <td width="560" align="left" bgcolor="#DEF3F6" class="SubHeads"><div align="center">
                          <table width="560" align="center" cellpadding="3" cellspacing="0">
                            <tr>
                              <td width="470" align="left" class="SubHeads"> <a name="macomb" id="macomb"></a><?php echo $row_rsMacomb['County']; ?> County </td>
                              <td width="90" class="SubHeads"><a href="#top"><img src="images/top.jpg" width="78" height="23" border="0" /></a></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                      <tr>
                        <td width="560" align="left" bgcolor="#F7FDFD"><div align="center">
                          <?php do { ?>
                          <table width="565" border="0" cellpadding="3" cellspacing="0">
                              <tr align="left" valign="top">
                                <td width="100" class="MeetingText"><?php echo $row_rsMacomb['City']; ?></td>
                                <td width="120" class="MeetingText"><div align="left"><?php echo $row_rsMacomb['Day']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsMacomb['Time']; ?></span></div></td>
                                <td width="220" class="MeetingText"><div align="left"><?php echo $row_rsMacomb['Location']; ?><br />
                                    <span class="MeetingTimeText"><?php echo $row_rsMacomb['Address']; ?><br />
                                    </span><span class="MeetingTimeText"><span class="InterestText"><?php echo $row_rsMacomb['Specialinterest']; ?></span><br />
                                  </span></div></td>
                                <td width="125" class="MeetingText"><div align="left"><?php echo $row_rsMacomb['Primarycontact']; ?><br />
                                  <span class="MeetingTimeText"><?php echo $row_rsMacomb['Primaryphone']; ?><br />
                                  </span><?php echo $row_rsMacomb['Secondarycontact']; ?><span class="MeetingTimeText"><br />
                                  <?php echo $row_rsMacomb['Secondaryphone']; ?><br />
                                  </span></div></td>
                              </tr>
                                </table>
                          <?php } while ($row_rsMacomb = mysql_fetch_assoc($rsMacomb)); ?>
                        </div></td>
                        
                        
                        
                        
                      </tr>
                      
                      
                      <tr>
                        <td width="560" align="left" bgcolor="#DEF3F6" class="SubHeads"><div align="center">
                          <table width="555" cellpadding="3" cellspacing="0">
                              <tr>
                                <td width="470" align="left" class="SubHeads"> <a name="oakland" id="oakland"></a><?php echo $row_rsOakland['County']; ?> County </td>
                                <td width="90" class="SubHeads"><a href="#top"><img src="images/top.jpg" width="78" height="23" border="0" /></a></td>
                              </tr>
                              </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td width="560" align="left" bgcolor="#F7FDFD"><?php do { ?>
                            <table width="565" border="0" cellpadding="3" cellspacing="0">
                              <tr align="left" valign="top">
                                <td width="100" class="MeetingText"><?php echo $row_rsOakland['City']; ?></td>
                                <td width="120" class="MeetingText"><div align="left"><?php echo $row_rsOakland['Day']; ?><br />
                                        <span class="MeetingTimeText"><?php echo $row_rsOakland['Time']; ?></span></div></td>
                                <td width="220" class="MeetingText"><div align="left"><?php echo $row_rsOakland['Location']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsOakland['Address']; ?><br />
                                      </span><span class="MeetingTimeText"><span class="InterestText"><?php echo $row_rsOakland['Specialinterest']; ?></span><br />
                                    </span></div></td>
                                <td width="125" class="MeetingText"><div align="left"><?php echo $row_rsOakland['Primarycontact']; ?><br />
                                        <span class="MeetingTimeText"><?php echo $row_rsOakland['Primaryphone']; ?><br />
                                      </span><?php echo $row_rsOakland['Secondarycontact']; ?><span class="MeetingTimeText"><br />
                                        <?php echo $row_rsOakland['Secondaryphone']; ?><br />
                                    </span></div></td>
                              </tr>
                            </table>
                            <?php } while ($row_rsOakland = mysql_fetch_assoc($rsOakland)); ?>
                            <div align="center"></div></td></tr>
                      <tr>
                        <td align="left" bgcolor="#DEF3F6" class="SubHeads"><div align="center">
                          <table width="560" cellpadding="3" cellspacing="0">
                            <tr>
                              <td width="470" align="left" class="SubHeads"><a name="St_Clair" id="St_Clair"></a> St. Clair County </td>
                              <td width="90" class="SubHeads"><a href="#top"><img src="images/top.jpg" alt="" width="78" height="23" border="0" /></a></td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td align="left" bgcolor="#F7FDFD"><div align="center">
                          <?php do { ?>
                            <table width="560" border="0" cellpadding="2" cellspacing="0">
                              <tr align="left" valign="top">
                                <td width="100" class="MeetingText"><?php echo $row_rsSt_Clair['City']; ?></td>
                                <td width="120" class="MeetingText"><div align="left"><?php echo $row_rsSt_Clair['Day']; ?><br />
                                  <span class="MeetingTimeText"><?php echo $row_rsSt_Clair['Time']; ?></span></div></td>
                                <td width="220" class="MeetingText"><div align="left"><?php echo $row_rsSt_Clair['Location']; ?><br />
                                  <span class="MeetingTimeText"><?php echo $row_rsSt_Clair['Address']; ?><span class="InterestText"><?php echo $row_rsSt_Clair['Specialinterest']; ?></span><br />
                                    </span></div></td>
                                <td width="125" class="MeetingText"><div align="left"><?php echo $row_rsSt_Clair['Primarycontact']; ?><br />
                                  <span class="MeetingTimeText"><?php echo $row_rsSt_Clair['Primaryphone']; ?></span></div>
                                  <?php echo $row_rsSt_Clair['Secondarycontact']; ?><br />
                                  <span class="MeetingTimeText"><?php echo $row_rsSt_Clair['Secondaryphone']; ?></span></td>
                                </tr>
                              </table>
                            <?php } while ($row_rsSt_Clair = mysql_fetch_assoc($rsSt_Clair)); ?>
                          </div></td>
                      </tr>
                      <tr>
                        <td width="560" align="left" bgcolor="#DEF3F6" class="SubHeads"><div align="center">
                          <table width="555" cellpadding="3" cellspacing="0">
                            <tr>
                              <td width="470" align="left" class="SubHeads"> <a name="washtenaw" id="washtenaw"></a><?php echo $row_rsWashtenaw['County']; ?> County</td>
                              <td width="90" class="SubHeads"><a href="#top"><img src="images/top.jpg" width="78" height="23" border="0" /></a></td>
                              </tr>
                            </table>
                          </div></td>
                      </tr>
                      <tr>
                        <td width="560" align="left" bgcolor="#F7FDFD"><?php do { ?>
                          <table width="565" border="0" cellpadding="3" cellspacing="0">
                            <tr align="left" valign="top">
                              <td width="100" class="MeetingText"><?php echo $row_rsWashtenaw['City']; ?></td>
                              <td width="120" class="MeetingText"><div align="left"><?php echo $row_rsWashtenaw['Day']; ?><br />
                                <span class="MeetingTimeText"><?php echo $row_rsWashtenaw['Time']; ?></span></div></td>
                              <td width="220" class="MeetingText"><div align="left"><?php echo $row_rsWashtenaw['Location']; ?><br />
                                    <span class="MeetingTimeText"><?php echo $row_rsWashtenaw['Address']; ?><br />
                                    </span><span class="MeetingTimeText"><span class="InterestText"><?php echo $row_rsWashtenaw['Specialinterest']; ?></span><br />
                                  </span></div></td>
                              <td width="125" class="MeetingText"><div align="left"><?php echo $row_rsWashtenaw['Primarycontact']; ?><br />
                                    <span class="MeetingTimeText"><?php echo $row_rsWashtenaw['Primaryphone']; ?><br />
                                    </span><?php echo $row_rsWashtenaw['Secondarycontact']; ?><span class="MeetingTimeText"><br />
                                    <?php echo $row_rsWashtenaw['Secondaryphone']; ?><br />
                                  </span></div></td>
                            </tr>
                              </table>
                          <?php } while ($row_rsWashtenaw = mysql_fetch_assoc($rsWashtenaw)); ?>
                          <div align="center"></div></td>
                      </tr>
                      <tr>
                        <td width="560" align="left" bgcolor="#DEF3F6" class="SubHeads"><div align="center">
                          <table width="555" cellpadding="3" cellspacing="0">
                              <tr>
                                <td width="470" align="left" class="SubHeads"> <a name="wayne" id="wayne"></a><?php echo $row_rsWayne['County']; ?> County </td>
                                <td width="90" class="SubHeads"><a href="#top"><img src="images/top.jpg" width="78" height="23" border="0" /></a></td>
                              </tr>
                              </table>
                        </div></td>
                      </tr>
                      <tr>
                        <td width="560" align="left" bgcolor="#F7FDFD"><div align="center">
                          <?php do { ?>
                          <table width="565" border="0" cellpadding="3" cellspacing="0">
                            <tr align="left" valign="top">
                              <td width="100" class="MeetingText"><?php echo $row_rsWayne['City']; ?></td>
                              <td width="120" class="MeetingText"><div align="left"><?php echo $row_rsWayne['Day']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsWayne['Time']; ?></span></div></td>
                              <td width="220" class="MeetingText"><div align="left"><?php echo $row_rsWayne['Location']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsWayne['Address']; ?><br />
                                      </span><span class="MeetingTimeText"><span class="InterestText"><?php echo $row_rsWayne['Specialinterest']; ?></span><br />
                                  </span></div></td>
                              <td width="125" class="MeetingText"><div align="left"><?php echo $row_rsWayne['Primarycontact']; ?><br />
                                      <span class="MeetingTimeText"><?php echo $row_rsWayne['Primaryphone']; ?><br />
                                      </span><?php echo $row_rsWayne['Secondarycontact']; ?><span class="MeetingTimeText"><br />
                                      <?php echo $row_rsWayne['Secondaryphone']; ?><br />
                                  </span></div></td>
                            </tr>
                          </table>
                          <?php } while ($row_rsWayne = mysql_fetch_assoc($rsWayne)); ?>
                        </div></td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
              <tr>
                <td valign="top"><span class="newsTextBold">Support Group Listings Last Updated: <?php echo $row_rs_LastUpdated['Last_Updated']; ?></span></td>
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

mysql_free_result($rsMeeting);

mysql_free_result($rsWayne);

mysql_free_result($rsWashtenaw);

mysql_free_result($rsOakland);

mysql_free_result($rsMonroe);

mysql_free_result($rsMacomb);

mysql_free_result($rsSt_Clair);

mysql_free_result($rs_LastUpdated);
?>
