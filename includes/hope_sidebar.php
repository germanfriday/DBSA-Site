<?php
switch ($subsection)
{
	case "Living_with";
		$living_with_f2 = "_f2";
		break;
		
	case "Inspiration";
		$inspiration_f2 = "_f2";
		break;
		
case "Forum";
		$forum_f2 = "_f2";
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
<body onLoad="MM_preloadImages('images/inspiration_f2.jpg','images/living_with_f2.jpg')">
<table width="145" height="550" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="145" height="110"><a href="index.php"><img src="images/logo.jpg" width="145" height="110" border="0"></a></td>
  </tr>
  <tr>
    <td width="145" height="52"> <a href="living_with.php" onMouseOver="MM_swapImage('Image1','','images/living_with_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/living_with<? echo $living_with_f2 ?>.jpg" name="Image1" width="145" height="52" border="0" id="Image1"></a></td>
  </tr>
  <tr>
    <td width="145" height="41"><a href="inspiration.php" onMouseOver="MM_swapImage('Image2','','images/inspiration_f2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/inspiration<? echo $inspiration_f2 ?>.jpg" name="Image2" width="145" height="41" border="0" id="Image2"></a></td>
  </tr>
  <tr>
    <td width="145" valign="top" background="images/side_filler.jpg"><img src="images/side_bottom.jpg" width="145" height="306"></td>
  </tr>
</table>
