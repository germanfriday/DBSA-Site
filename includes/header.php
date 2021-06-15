<?php
switch ($section)
{
	case "Home";
		$home_f2 = "_f2";
		$header_image = "home_header.jpg";
		break;
		
	case "Support";
		$support_f2 = "_f2";
		$header_image = "support_header.jpg";
		break;
		
case "Education";
		$education_f2 = "_f2";
		$header_image = "education_header.jpg";
		break;
		
case "Hope";
		$hope_f2 = "_f2";
		$header_image = "hope_header.jpg";
		break;
		
case "Membership";
		$membership_f2 = "_f2";
		$header_image = "membership_header.jpg";
		break;

case "Contact";
		$contact_f2 = "_f2";
		$header_image = "contact_header.jpg";
		break;
		
case "Admin";
		$header_image = "admin_header.jpg";
		break;

}
?>

</head>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_1021144942_0) return;
  window.mm_menu_1021144942_0 = new Menu("root",75,17,"Arial, Helvetica, sans-serif",11,"#3FB3E5","#6E75AB","#EDF9F9","#EDF9F9","center","middle",2,0,750,-5,7,true,false,false,0,true,true);
  mm_menu_1021144942_0.addMenuItem("Meetings","location='meetings.php'");
  mm_menu_1021144942_0.addMenuItem("Events","location='events.php'");
    mm_menu_1021144942_0.addMenuItem("4th Mondays","location='fourth_mondays.php'");
   mm_menu_1021144942_0.fontWeight="bold";
   mm_menu_1021144942_0.hideOnMouseOut=true;
   mm_menu_1021144942_0.bgColor='#555555';
   mm_menu_1021144942_0.menuBorder=1;
   mm_menu_1021144942_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1021144942_0.menuBorderBgColor='#777777';

  window.mm_menu_1022194211_0 = new Menu("root",105,17,"Arial, Helvetica, sans-serif",11,"#3FB3E5","#6E75AB","#EDF9F9","#EDF9F9","center","middle",2,0,750,-5,7,true,false,false,0,true,true);
  mm_menu_1022194211_0.addMenuItem("Bipolar&nbsp;Disorder","location='bipolar.php'");
  mm_menu_1022194211_0.addMenuItem("Unipolar&nbsp;Disorder","location='unipolar.php'");
  mm_menu_1022194211_0.addMenuItem("Cyclothymia","location='cyclothymia.php'");
  mm_menu_1022194211_0.addMenuItem("Dysthymia","location='dysthymia.php'");
  mm_menu_1022194211_0.addMenuItem("Useful&nbsp;Links","location='links.php'");
   mm_menu_1022194211_0.fontWeight="bold";
   mm_menu_1022194211_0.hideOnMouseOut=true;
   mm_menu_1022194211_0.bgColor='#555555';
   mm_menu_1022194211_0.menuBorder=1;
   mm_menu_1022194211_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1022194211_0.menuBorderBgColor='#777777';

  window.mm_menu_1022194314_0 = new Menu("root",115,17,"Arial, Helvetica, sans-serif",11,"#3FB3E5","#6E75AB","#EDF9F9","#EDF9F9","center","middle",2,0,750,-5,7,true,false,false,0,true,true);
  mm_menu_1022194314_0.addMenuItem("Living&nbsp;with&nbsp;Bipolar","location='living_with.php'");
  mm_menu_1022194314_0.addMenuItem("Inspiration","location='inspiration.php'");
   mm_menu_1022194314_0.fontWeight="bold";
   mm_menu_1022194314_0.hideOnMouseOut=true;
   mm_menu_1022194314_0.bgColor='#555555';
   mm_menu_1022194314_0.menuBorder=1;
   mm_menu_1022194314_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1022194314_0.menuBorderBgColor='#777777';

  window.mm_menu_1022194445_0 = new Menu("root",100,17,"Arial, Helvetica, sans-serif",11,"#3FB3E5","#6E75AB","#EDF9F9","#EDF9F9","center","middle",2,0,750,-5,7,true,false,false,0,true,true);
  mm_menu_1022194445_0.addMenuItem("Benefits","location='benefits.php'");
  mm_menu_1022194445_0.addMenuItem("Join&nbsp;DBSA&nbsp;Metro&nbsp;Detroit","location='join_dbsa.php'");
   mm_menu_1022194445_0.fontWeight="bold";
   mm_menu_1022194445_0.hideOnMouseOut=true;
   mm_menu_1022194445_0.bgColor='#555555';
   mm_menu_1022194445_0.menuBorder=1;
   mm_menu_1022194445_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1022194445_0.menuBorderBgColor='#777777';

mm_menu_1022194445_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="includes/mm_menu.js"></script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style><body onLoad="MM_preloadImages('images/home_f2.jpg','images/support_f2.jpg','images/education_f2.jpg','images/hope_f2.jpg','images/membership_f2.jpg','images/contact_f2.jpg')">
<script language="JavaScript1.2">mmLoadMenus();</script>
<table width="605" height="160" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="605" height="110"><img src="images/<? echo $header_image?>" name="header" width="605" height="110" id="header" /></td>
  </tr>
  <tr>
    <td width="605" height="30"><table width="605" height="30" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="109" height="30"><a href="index.php" onMouseOver="MM_swapImage('home','','images/home_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/home<? echo $home_f2 ?>.jpg" name="home" width="109" height="30" border="0" id="home" /></a></td>
          <td width="87" height="30"><a href="support.php" onMouseOver="MM_swapImage('support','','images/support_f2.jpg',1);MM_showMenu(window.mm_menu_1021144942_0,-75,30,null,'support')" onMouseOut="MM_swapImgRestore();MM_startTimeout();"><img src= "images/support<? echo $support_f2 ?>.jpg" name="support" width="87" height="30" border="0" id="support" /></a></td>
          <td width="101" height="30"><a href="education.php" onMouseOver="MM_swapImage('education','','images/education_f2.jpg',1);MM_showMenu(window.mm_menu_1022194211_0,-125,30,null,'education')" onMouseOut="MM_swapImgRestore();MM_startTimeout();"><img src="images/education<? echo $education_f2 ?>.jpg" name="education" width="101" height="30" border="0" id="education" /></a></td>
          <td width="71" height="30"><a href="hope.php" onMouseOver="MM_swapImage('hope','','images/hope_f2.jpg',1);MM_showMenu(window.mm_menu_1022194314_0,-75,30,null,'hope')" onMouseOut="MM_swapImgRestore();MM_startTimeout();"><img src="images/hope<? echo $hope_f2 ?>.jpg" name="hope" width="71" height="30" border="0" id="hope" /></a></td>
          <td width="115" height="30"><a href="membership.php" onMouseOver="MM_swapImage('membership','','images/membership_f2.jpg',1);MM_showMenu(window.mm_menu_1022194445_0,-85,30,null,'membership')" onMouseOut="MM_swapImgRestore();MM_startTimeout();"><img src="images/membership<? echo $membership_f2 ?>.jpg" name="membership" width="115" height="30" border="0" id="membership" /></a></td>
          <td width="122" height="30"><a href="contact.php" onMouseOver="MM_swapImage('contact','','images/contact_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/contact<? echo $contact_f2 ?>.jpg" name="contact" width="122" height="30" border="0" id="contact" /></a></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="20" background="images/page_filler.gif"></td>
  </tr>
</table>
