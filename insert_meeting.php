<?php require_once('Connections/DBSA.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO Meetings (County, City, `Day`, `Time`, Location, Address, Contactname, Contactphone, Specialinterest) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['County'], "text"),
                       GetSQLValueString($_POST['City'], "text"),
                       GetSQLValueString($_POST['Day'], "text"),
                       GetSQLValueString($_POST['Time'], "text"),
                       GetSQLValueString($_POST['Location'], "text"),
                       GetSQLValueString($_POST['Address'], "text"),
                       GetSQLValueString($_POST['Contactname'], "text"),
                       GetSQLValueString($_POST['Contactphone'], "text"),
                       GetSQLValueString($_POST['Specialinterest'], "text"));

  mysql_select_db($database_Meetings, $Meetings);
  $Result1 = mysql_query($insertSQL, $Meetings) or die(mysql_error());

  $insertGoTo = "meetings.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "InsertRecord")) {
  $insertSQL = sprintf("INSERT INTO Meetings (County, City, `Day`, `Time`, Specialinterest, Location, Address, Primarycontact, Primaryphone, Secondarycontact, Secondaryphone) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['County'], "text"),
                       GetSQLValueString($_POST['City'], "text"),
                       GetSQLValueString($_POST['Day'], "text"),
                       GetSQLValueString($_POST['Time'], "text"),
                       GetSQLValueString($_POST['Specialinterest'], "text"),
                       GetSQLValueString($_POST['Location'], "text"),
                       GetSQLValueString($_POST['Address'], "text"),
                       GetSQLValueString($_POST['Primarycontact'], "text"),
                       GetSQLValueString($_POST['Primaryphone'], "text"),
                       GetSQLValueString($_POST['Secondarycontact'], "text"),
                       GetSQLValueString($_POST['Secondaryphone'], "text"));

  mysql_select_db($database_DBSA, $DBSA);
  $Result1 = mysql_query($insertSQL, $DBSA) or die(mysql_error());

  $insertGoTo = "meetings.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_DBSA, $DBSA);
$query_rsMeetings = "SELECT * FROM Meetings";
$rsMeetings = mysql_query($query_rsMeetings, $DBSA) or die(mysql_error());
$row_rsMeetings = mysql_fetch_assoc($rsMeetings);
$totalRows_rsMeetings = mysql_num_rows($rsMeetings);
 
$section  = "Contact; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DBSA Admin :: Add Meeting</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFF1;
}
-->
</style>
<link href="DBSA_Styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="Print_Styles.css" rel="stylesheet" type="text/css" media="print" />

<style type="text/css">
<!--
.style1 {font-size: 13px; color: #90A4C9; font-family: Arial, Helvetica, sans-serif;}
-->
</style>
</head>

<body onload="MM_preloadImages('images/home_f2.jpg','images/support_f2.jpg','images/education_f2.jpg','images/hope_f2.jpg','images/membership_f2.jpg','images/contact_f2.jpg','images/meetings_f2.jpg','images/events_f2.jpg','images/conferences_f2.jpg')">
<div align="center">
  <table width="750" height="620" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="145" height="545" rowspan="3" valign="top" background="images/side_filler.jpg"><?php include('includes/contact_sidebar.php'); ?></td>
      <td width="605" valign="top"><?php include('includes/header.php'); ?></td>
    </tr>
    <tr>
      <td width="605" height="430" valign="top" background="images/page_filler.gif"><table width="605" height="430" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="605" height="45"><img src="images/insert_title.jpg" width="605" height="45" /></td>
        </tr>
        <tr>
          <td width="605" height="385"><table width="605" height="385" border="0" cellpadding="16" cellspacing="0" background="images/page_filler.gif">
            <tr>
              <td width="605" height="385" valign="top"><form action="<?php echo $editFormAction; ?>" method="post" name="InsertRecord" id="InsertRecord">
                  <table align="left" cellpadding="10" cellspacing="0">
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">County:</td>
                      <td><input type="text" name="County" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">City:</td>
                      <td><input type="text" name="City" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Day:</td>
                      <td><input type="text" name="Day" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Time:</td>
                      <td><input type="text" name="Time" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Special Interest:</td>
                      <td><input type="text" name="Specialinterest" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" valign="top" nowrap class="FieldName">Location:</td>
                      <td><textarea name="Location" cols="35" rows="5"></textarea>
                      </td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Address:</td>
                      <td><input type="text" name="Address" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Primary Contact:</td>
                      <td><input type="text" name="Primarycontact" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Primary Phone:</td>
                      <td><input type="text" name="Primaryphone" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Secondary Contact:</td>
                      <td><input type="text" name="Secondarycontact" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td align="right" nowrap class="FieldName">Secondary Phone:</td>
                      <td><input type="text" name="Secondaryphone" value="" size="35"></td>
                    </tr>
                    <tr valign="baseline">
                      <td nowrap align="right">&nbsp;</td>
                      <td><input type="submit" value="Insert record"></td>
                    </tr>
                  </table>
                  <input type="hidden" name="MM_insert" value="form1">
                </form>
                <p>&nbsp;</p></td></tr>
          </table></td>
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
<?php
mysql_free_result($rsMeetings);
?>
