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
 
$section  = "Home"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="google-site-verification" content="ZM_7Kj-FYTSe9cRNaB5Ix7-Q_k2V9q_QGFNFgZxlJFw" />
<title>Depression and Bipolar Support Alliance - Metro Detroit</title>
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
<body onload="MM_preloadImages('images/home_f2.jpg','images/support_f2.jpg','images/education_f2.jpg','images/hope_f2.jpg','images/membership_f2.jpg','images/contact_f2.jpg')">
<div align="center">
  <table width="750" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="145" height="642" rowspan="3" valign="top" background="images/side_filler.jpg"><?php include ('includes/home_sidebar.php') ?></td>
      <td width="605" height="160" valign="top" background="images/page_filler.gif"><?php include ('includes/header.php') ?></td>
    </tr>
    <tr>
      <td width="605" height="430" valign="top" background="images/page_filler.gif"><table width="605" height="430" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="605" height="70" valign="top"><img src="images/home_title.jpg" width="605" height="70" /></td>
          </tr>
          <tr>
            <td width="605" align="center" valign="top"><table width="605" border="0" cellpadding="16" cellspacing="0" background="images/page_filler.gif">
                <tr>
                  <td width="605" height="180" valign="top"><div align="left">
                      <table width="210" border="0" align="right" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" rowspan="3">&nbsp;</td>
                          <td width="200" height="30"><img src="images/latest_top.jpg" width="200" height="30" /></td>
                        </tr>
                        <tr>
                          <td background="images/latest_spacer.jpg"><table width="200" border="0" cellspacing="0" cellpadding="5">
                              
                              <tr class="BodyTextBold">
                                <td align="right" valign="top" class="newsTextCell"><img src="images/arrow.gif" width="6" height="10" /></td>
                                <td class="newsTextCell"><a class="BodyTextBold" href="fourth_mondays.php">New Event Information</a></td>
                              </tr>
                              <tr>
                                <td width="20" align="right" valign="top" class="newsTextCell"><img src="images/arrow.gif" alt="" width="6" height="10" /></td>
                                <td class="newsTextCell">Stay up-to-date with <a href="http://www.dbsalliance.org/site/PageServer?pagename=media_eupdate" target="_blank" class="newsTextPink">DBSA National eUpdates</a></td>
                              </tr>
                              <tr>
                                <td align="right" valign="top" class="newsTextCell"><img src="images/arrow.gif" alt="" width="6" height="10" /></td>
                                <td class="newsTextCell"><a href="http://www.facebook.com/dbsametrodetroit" target="_blank"><img src="images/Find_us_on_facebook_badge.gif" width="144" height="44" border="0" /></a></td>
                              </tr>
                              <tr>
                                <td align="right" valign="top" class="newsTextCell"><img src="images/arrow.gif" alt="" width="6" height="10" /></td>
                                <td valign="middle" class="newsTextCell"><a href="http://www.youtube.com/user/DBSAMetroDetroit/videos" target="_blank"><img src="images/youtube-logo.png" width="75" height="27" border="0" align="middle" /></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://twitter.com/DBSAMetroDet" target="_blank"><img src="images/twitter-logo.jpg" border="0" align="middle" /></a></td>
                              </tr>
                              <tr>
                                <td align="right" valign="top" class="newsTextCell"><img src="images/arrow.gif" width="6" height="10" /></td>
                                <td class="newsTextCell">Donate to DBSA with PayPal <br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="10565762">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</td>
                              </tr>
                              
                              
                              
                          </table></td>
                        </tr>
                        <tr>
                          <td width="200" height="10"><img src="images/latest_bottom.jpg" width="200" height="10" /></td>
                        </tr>
                      </table>
                      <p class="BodyText">The Depression and Bipolar Support Alliance Metropolitan Detroit (DBSA) is a self-help group for those diagnosed with Bipolar Disorder or Depression (Unipolar Disorder).</p>
                    </div>
                    <p align="left" class="BodyText">Family, friends and a variety of professionals are also included and are an important part of our organization. DBSA Metro Detroit is run by the members. We offer hope, support, and education. We are an affiliate of the <a href="http://www.dbsalliance.org" target="_blank" class="LinkText">Depression and Bipolar Support Alliance</a> which has 275 chapters.                    </p>
                    <p align="left" class="BodyText"><span class="SubHeads">Check back often!<br />
                      </span>Please visit us again to find out about our <a href="fourth_mondays.php" class="LinkText">monthly speakers</a> and topics, updates to our <a href="meetings.php" class="LinkText">support group meeting list</a>, and more.</p></td>
                </tr>
                <tr>
                  <td align="left" valign="top"><p class="BodyTextBold">The Monday Night Mixers have been post-poned indefinitely!  We are modifying our events to better serve the community.  We will be reducing our events to a quarterly calendar with the goals of better connecting individuals with one another.<br />
                      <br />
                      In July, we are planning a social event during July 28th.  This event will be fashioned after our very successful First Annual Anxiety Free Holiday Dinner!  Rosie O&rsquo;Grady&rsquo;s in Ferndale (on 9 mile) will be hosting us!  We will be supplying dinner and a wonderful evening of gathering and socializing.  Seats will be limited and we ask that you RSVP as soon as possible.<br />
                      <br />
                      Please contact Barb @ 586-604-5929 and leave your name, phone number and email address.  You will receive a return call confirming your seat.</p>
                  <p>&nbsp;</p></td>
                </tr>
              </table>              <!--<a href='http://sharega.com/view/42679092.html' title='View Google Analytics statistic for www.dbsa-metrodetroit.org'><img src='http://c.sharega.com/42679092/visits.gif' alt='Last day site visits' border='0'/></a>--></td>
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
  <!--<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><a target="_top" href="http://v.extreme-dm.com/?login=mddadet"> <img name=im src="http://v1.extreme-dm.com/i.gif" height=38
		border=0 width=41 alt=""></a>
    <script language="javascript">
		an=navigator.appName;d=document;function
		pr(){d.write("<img src=\"http://v0.extreme-dm.com",
		"/0.gif?tag=mddadet&j=y&srw="+srw+"&srb="+srb+"&",
		"rs="+r+"&l="+escape(d.referrer)+"\" height=1 ",
		"width=1>");}srb="na";srw="na";//
		</script>
    <script language="javascript1.2">
		s=screen;srw=s.width;an!="Netscape"?
		srb=s.colorDepth:srb=s.pixelDepth;//
		</script>
    <script language="javascript">
		r=41;d.images?r=d.im.width:z=0;pr();//
		</script>
    <noscript>
    <img height=1 width=1 alt="" 
		src="http://v0.extreme-dm.com/0.gif?tag=mddadet&j=n">
    </noscript>
    <br />
  </p>-->
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
