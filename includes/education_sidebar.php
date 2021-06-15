<?php
switch ($subsection)
{
	case "Bipolar";
		$bipolar_f2 = "_f2";
		break;
		
	case "Unipolar";
		$unipolar_f2 = "_f2";
		break;
		
		case "Cyclothymia";
		$cyclothymia_f2 = "_f2";
		break;
		
		case "Dysthymia";
		$dysthymia_f2 = "_f2";
		break;
		
case "Links";
		$links_f2 = "_f2";
		break;
}
?>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
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
<body onLoad="MM_preloadImages('images/bipolar_disorder_f2.jpg','images/unipolar_disorder_f2.jpg','images/useful_links_f2.jpg')">
<table width="145" height="550" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="145" height="110"><a href="index.php"><img src="images/logo.jpg" width="145" height="110" border="0"></a></td>
  </tr>
  <tr>
    <td width="145" height="52"> <a href="bipolar.php" onMouseOver="MM_swapImage('Image1','','images/bipolar_disorder_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/bipolar_disorder<? echo $bipolar_f2 ?>.jpg" name="Image1" width="145" height="52" border="0" id="Image1"></a></td>
  </tr>
  <tr>
    <td width="145" height="41"><a href="unipolar.php" onMouseOver="MM_swapImage('Image2','','images/unipolar_disorder_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/unipolar_disorder<? echo $unipolar_f2 ?>.jpg" name="Image2" width="145" height="41" border="0" id="Image2"></a></td>
  </tr>
  <tr>
    <td width="145" height="41"><a href="links.php" onMouseOver="MM_swapImage('Image3','','images/useful_links_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/useful_links<? echo $links_f2 ?>.jpg" name="Image3" width="145" height="41" border="0" id="Image3"></a></td>
  </tr>
  
  <tr>
    <td width="145" height="41"><a href="cyclothymia.php" onMouseOver="MM_swapImage('Image4','','images/cyclothymia_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/cyclothymia<? echo $cyclothymia_f2 ?>.jpg" name="Image4" width="145" height="41" border="0" id="Image2"></a></td>
  </tr>
  
  <tr>
    <td width="145" height="41"><a href="dysthymia.php" onMouseOver="MM_swapImage('Image5','','images/dysthymia_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/dysthymia<? echo $dysthymia_f2 ?>.jpg" name="Image5" width="145" height="41" border="0" id="Image2"></a></td>
  </tr>
  
  
  
  <tr>
    <td width="145" height="306"><img src="images/side_bottom.jpg" width="145" height="306"></td>
  </tr>
</table>
