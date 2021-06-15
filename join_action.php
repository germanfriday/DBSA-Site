<?php $section  = "Membership"; $subsection = "Join"; ?>
<?php

$my_email = "dbsadetroit@yahoo.com";


$continue = "thank_you.php";


if ($_SERVER['REQUEST_METHOD'] != "POST"){exit;}

// This line prevents a blank form being sent

while(list($key,$value) = each($_POST)){if(!(empty($value))){$set=1;}$message = $message . "$key: $value\n\n";} if($set!==1){header("location: $_SERVER[HTTP_REFERER]");exit;}

$message = stripslashes($message);

$subject = "DBSA MEMBERSHIP FORM SUBMISSION";
$headers = "From: DBSA Membership Form" . $Email . "\n" . "Return-Path: " . $Email . "\n" . "Reply-To: " . $Email . "\n";

mail($my_email,$subject,$message,$headers);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Membership :: Join :: DBSA Metro Detroit</title>
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
  <table width="605" height="580" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="145" rowspan="3" valign="top" background="images/side_filler.jpg"><?php include('includes/membership_sidebar.php'); ?></td>
      <td width="605" valign="top"><?php include('includes/header.php'); ?></td>
    </tr>
    <tr>
      <td width="605" height="420" valign="top" background="images/page_filler.gif"><table width="605" height="420" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="605" height="45"><img src="images/join_title.jpg" width="605" height="45" /></td>
        </tr>
        <tr>
          <td width="605" height="350"><form name="form1" id="form1" method="post" action="">
            <table width="605" height="300" border="0" cellpadding="8" cellspacing="0" background="images/page_filler.gif">
              <tr>
                <td width="150" align="right"><div align="right" class="FieldName"> Name </div>
                    <div align="right" class="FieldName"></div></td>
                <td colspan="3" align="left" class="BodyTextBold"><div align="left"><?php echo $_POST['Firstname']; ?>&nbsp;<?php echo $_POST['Lastname']; ?></div></td>
              </tr>
              <tr>
                <td height="25" align="right"><div align="right" class="FieldName">eMail </div></td>
                <td height="25" colspan="3" align="left" class="BodyTextBold"><div align="left"><?php echo $_POST['Email']; ?></div></td>
              </tr>
              <tr>
                <td width="150" height="25" align="right"><div align="right" class="FieldName">Daytime
                    Phone </div></td>
                <td height="25" colspan="3" align="left" class="BodyTextBold"><div align="left"><?php echo $_POST['Daytimephone']; ?></div></td>
              </tr>
              <tr>
                <td width="150" height="25" align="right"><div align="right" class="FieldName">Evening
                    Phone </div></td>
                <td height="25" colspan="3" align="left" class="BodyTextBold"><div align="left"><?php echo $_POST['Eveningphone']; ?></div></td>
              </tr>
              <tr>
                <td width="150" height="25" align="right" class="FieldName"><div align="right">Address</div></td>
                <td height="25" colspan="3" align="left"><span class="BodyTextBold"><?php echo $_POST['Address']; ?></span></td>
              </tr>
              <tr>
                <td width="150" height="25" align="right" class="FieldName"><div align="right">City</div></td>
                <td width="128" height="25" align="left"><div align="left"><span class="BodyTextBold"><?php echo $_POST['City']; ?></span></div></td>
                <td width="31" align="left" class="FieldName"><div align="left">State</div></td>
                <td width="314" align="left"><div align="left"><span class="BodyTextBold"><?php echo $_POST['State']; ?></span></div></td>
              </tr>
              <tr>
                <td width="150" height="25" align="right" class="FieldName"><div align="right">Zip</div></td>
                <td height="25" colspan="3" align="left"><div align="left"><span class="BodyTextBold"><?php echo $_POST['Zip']; ?></span></div></td>
              </tr>
              <tr>
                <td height="25" align="right"><div align="right" class="FieldName">Professional<br />
                  Agency</div></td>
                <td height="25" colspan="3" align="left"><div align="left"><span class="BodyTextBold"><?php echo $_POST['Agency']; ?></span></div></td>
                </tr>
              <tr valign="top">
                <td width="150" height="25" align="right"><div align="right" class="FieldName">Type</div></td>
                <td align="left" valign="top"><span class="BodyTextBold"><?php echo $_POST['Newmembership']; ?></span><span class="BodyTextBold"><?php echo $_POST['Renewal']; ?></span><span class="BodyTextBold"><?php echo $_POST['Changeofaddress']; ?></span></td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="top" class="FieldName"><table border="0" cellspacing="0" cellpadding="8">
                    <tr>
                      <td width="24" align="right" valign="top"><p class="FieldName">Membership </p></td>
                      <td align="left" valign="top"><p><span class="BodyTextBold"><?php echo $_POST['Individualmembership']; ?></span><span class="BodyTextBold"><?php echo $_POST['Familymembership']; ?></span><span class="BodyTextBold"><?php echo $_POST['Professionalmembership']; ?></span><span class="BodyTextBold"><?php echo $_POST['Institutionalmembership']; ?></span></p>                        </td>
                    </tr>
                    <tr>
                      <td align="right" valign="top">Anthology</td>
                      <td align="left" valign="top"><span class="BodyTextBold"><?php echo $_POST['anthology']; ?></span></td>
                    </tr>
                    <tr>
                      <td align="right" valign="top" class="FieldName">Donation</td>
                      <td align="left" valign="top"><span class="BodyTextBold">$<?php echo $_POST['Donation']; ?></span></td>
                    </tr>
                    <tr>
                      <td align="right" valign="top" class="FieldName">Commants</td>
                      <td align="left" valign="top"><span class="BodyTextBold"><?php echo $_POST['Comments']; ?></span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td colspan="4" valign="top"><div align="right"></div>
                    <table width="550" border="0" cellspacing="0" cellpadding="8">
                      <tr>
                        <td align="left"><p class="BodyText">Click the Print Button below to print a copy of this page and mail to:<br />
                            <span class="BodyTextBold">DBSA Metro Detroit</span><br />
                            <span class="BodyTextBold">P.O. Box 371 Clawson, MI 48017-0371</span> </p>                          </td>
                      </tr>
                      <tr>
                        <td align="left"><div align="left"><a href="javascript: history.go(-1)"><img src="images/back.jpg" width="78" height="23" border="0" /></a>&nbsp;&nbsp;
                          <a href="javascript:void(window.print())"><img src="images/print.jpg" width="78" height="23" border="0" /></a> </div></td>
                      </tr>
                  </table></td>
              </tr>
            </table>
          </form></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="605" height="10" background="images/page_filler.gif"><?php include('includes/footer.php'); ?></td>
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
