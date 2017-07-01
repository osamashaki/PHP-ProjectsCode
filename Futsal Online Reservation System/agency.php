<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Win &amp; Win</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="style.css" />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
<style type="text/css">
<!--
.style2 {
	font-size: 14px;
	font-family: "Times New Roman", Times, serif;
}
a:link {
	color: #FF7838;
}
a:hover {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
.style3 {font-size: 16px}
.style4 {color: #FF6600;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0">
<tr><td>
	<div id="top">
		<div id="menu">
			<ul>
				<li><a href="index.php" class="but1" id="active"><img src="images/spacer.gif" alt="" width="56" height="13" /></a></li>
				<li><a href="register.php" class="but2"><img src="images/spacer.gif" alt="" width="100" height="13" /></a></li>
				<li><a href="login.php" class="but3"><img src="images/spacer.gif" alt="" width="74" height="13" /></a></li>
				<li><a href="aboutus.php" class="but4"><img src="images/spacer.gif" alt="" width="100" height="13" /></a></li>
				<li><a href="contactus.php" class="but7"><img src="images/spacer.gif" alt="" width="84" height="13" /></a></li>
			</ul>																																																																																															
		</div>
	</div>
	<div id="header" class="home">
	   
	  </div>
	<div id="wrapper" class="style1">
	  <table width="100%" height="501" border="0" cellpadding="2" cellspacing="2" bgcolor="#0F0F0F">
          <tr>
            <td height="23" colspan="3" bgcolor="#0F0F0F"><marquee behavior="alternate">
            <div align="center" class="style3"> Book your court now with our Online Reservation Sports Centre </div>
            </marquee></td>
          </tr>
          <tr>
            <td colspan="3"><hr color="#1F1F1F" /></td>
          </tr>
          <tr>
            <td width="219"><table width="128%" height="225" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td width="28%" height="27"><div align="center"><img src="images/link.png" width="30" height="30"  /></div></td>
                <td width="72%"><a href="index.php" class="style2">Home</a></td>
              </tr>
              <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
              <tr>
                <td height="31"><div align="center"><img src="images/link.png" alt="l" width="30" height="30"  /></div></td>
                <td>
				<? if ($_SESSION["logged"] == "YES") echo '<a href="profile.php?id='. $_SESSION["userid"].'" class="style2">My Profile</a>' ; else echo '<a href="register.php" class="style2">Register</a>'; ?>
				</td>
              </tr>
			  <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
              <tr>
                <td height="27"><div align="center"><img src="images/link.png" alt="left" width="30" height="30"  /></div></td>
                <td><a href="aboutus.php" class="style2">About us </a></td>
              </tr>
			  <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
              <tr>
                <td height="27"><div align="center"><img src="images/link.png" alt="left" width="30" height="30"  /></div></td>
                <td><a href="contactus.php" class="style2">Contact us </a></td>
              </tr>
			  <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
				<tr>
                <td height="27"><div align="center"><img src="images/link.png" alt="left" width="30" height="30"  /></div></td>
                <td><a href="contactus.php" class="style2">Registered Agencies </a></td>
              </tr>
			  <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
              <tr>
                <td height="27"><div align="center"><img src="images/link.png" alt="l" width="30" height="30"  /></div></td>
                <td><? if ($_SESSION["logged"] == "YES") echo '<a href="logout.php" class="style2">Log out</a>' ; else echo '<a href="login.php" class="style2">Log In </a>'; ?></td>
              </tr>
              <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
               <tr>
                <td height="27"><div align="center"><img src="images/link.png" alt="l" width="30" height="30"  /></div></td>
                <td><? if ($_SESSION["comlogged"] == "YES") echo '<a href="logout.php" class="style2">Log out</a>' ; else echo '<a href="comlogin.php" class="style2">Agency Log In </a>'; ?></td>
              </tr>
			  <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
              <tr>
                <td  colspan="2" align="justify"><script src="http://www.clocklink.com/embed.js"></script><script type="text/javascript" language="JavaScript">obj=new Object;obj.clockfile="1004-white.swf";obj.TimeZone="GMT0800";obj.width=150;obj.height=150;obj.wmode="transparent";showClock(obj);</script>                </tr>
				 <tr>
                <td height="1" colspan="2" valign="top"><hr align="left" width="70%" size="1" color="#1F1F1F"/></td>
                </tr>
            </table></td>
            <td width="-4" rowspan="2" background="images/bg.jpg"></td>
            <td width="634" rowspan="2" valign="top"><table width="100%" height="284" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#000000">
                <tr>
                  <td width="7%" height="192"><p align="center">&nbsp;</p>
                    <p align="center">&nbsp;</p>
                    <p align="center">W</p>
                    <p align="center">E</p>
                  <p align="center">L</p>
                  <p align="center">C</p>
                  <p align="center">O</p>
                  <p align="center">M</p>
                  <p align="center">E</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">T</p>
                  <p align="center">O</p>
                  <p align="center">&nbsp;</p>
                  <p>&nbsp;</p></td>
                  <td colspan="2"><p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <table width="79%" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC">
                      <tr>
                        <td height="33" colspan="7" class="page_heading"><div align="left" class="style4">Agency List: </div></td>
                      </tr>
                      <tr>
                        <td width="23%" class="style4"><div align="left">ID</div></td>
                        <td width="38%" class="style4"><div align="left">Name</div></td>
                        <td width="20%" class="style4">Mobile</td>
                        <td width="19%" class="style4">Email</td>
                        <td width="19%" class="style4"><div align="left">City</div></td>
                      </tr>
                      <?
					include("connected.php");
	   	$query = "SELECT * FROM company ";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$name    	     = $rowApps1->comname;
			$contact		 = $rowApps1->contact;
			$email			 = $rowApps1->email;
			$city			 = $rowApps1->city;
			
			
			
								
	 ?>
                      <tr>
                        <td><div align="left"><? echo $id;?></div></td>
                        <td><div align="left"><? echo $name;?></div></td>
                        <td><? echo $contact;?></td>
                       <td><? echo $email;?></td>
					    <td><? echo $city;?></td>
                      </tr>
                      <?
}
$mid = $_GET['pid'];
if($mid != '')
{
		 $del = "DELETE FROM playground WHERE id='$mid'";
		 mysql_query($del);
	     $where = "company.php?id=$cid"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";
}
?>
                      <tr>
                        <td colspan="7"><p>&nbsp;</p>
                            <p align="center"><a href="#"></a></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td width="50%">&nbsp;</td>
                </tr>
                <tr>
                  <td><p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p></td>
                  <td width="43%">
                    <p>&nbsp;</p></td>
                  <td><p>&nbsp;</p></td>
                </tr>
                
                
              </table>              
            <p>&nbsp;</p>
            <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td><div align="center">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div></td>
          </tr>
          <tr>
            <td colspan="3">
        
            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#0F0F0F">
              <tr>
                <td><h2 style="background-color:#000000; height:5px; color:#FFFFFF; border-top:4px solid #1f1f1f; text-align:center; padding-top:4px; font-style:normal;font-size:12px;">&nbsp;</h2> </td>
              </tr>
              <tr>
                <td valign="middle"><br/>
                  <p align="center">&nbsp;</p>
                  </td>
              </tr>
              <tr>
                <td><div align="center">
                  <p>Copyright &copy;. All rights reserved 2015. WIN &amp; WIN</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                </div></td>
              </tr>
            </table>            </td>
          </tr>
        </table>
	   
	</div>
	</td>
</tr>
</table>
</body>
</html>
