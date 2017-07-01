<?
session_start();
$uid = $_SESSION["userid"] ;
include("connected.php");
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
.style7 {color: #FF0000}
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
            <td height="23" colspan="3" bgcolor="#0F0F0F"><marquee behavior="alternate"><div align="center">WELCOME TO WIN &amp; WIN SPORTS CENTER </div></marquee></td>
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
                <td><? if ($_SESSION["logged"] == "YES") echo '<a href="profile.php?id='. $_SESSION["userid"].'" class="style2">My Profile</a>' ; else echo '<a href="register.php" class="style2">Register</a>'; ?></td>
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
                <td height="27"><div align="center"><img src="images/link.png" alt="l" width="30" height="30"  /></div></td>
                <td><? if ($_SESSION["logged"] == "YES") echo '<a href="logout.php" class="style2">Log out</a>' ; else echo '<a href="login.php" class="style2">Log In </a>'; ?></td>
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
                  <td><p>&nbsp;</p>
				  <?
						$mid = $_GET["id"]; 
						$data = mysql_fetch_array(mysql_query("SELECT name,gender,mobile,email, password FROM member WHERE id = '$mid' "));
						$name = $data[0];
						$gender = $data[1];
						$mobile = $data[2];
						$email = $data[3];
						$password = $data[4];
												
				        
			if(isset($_POST['update']))
			{
		
					$name = $_POST["name"];
					$gender = $_POST['gender'];
					$mobile = $_POST['mobile'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$repassword = $_POST['repassword'];
				
				if($password != $repassword)
				{	
					echo "<center><h3>Password and Confirm password do not match!</h3>";
					echo "<a href='javascript:history.back();'>Back</a></center>";
				}
				else
				{
						
						//$sqlUpdate = "UPDATE patient SET name='$name', password='$password' WHERE id='$pid'";	
						$sqlUpdate = "UPDATE member SET name='$name',gender='$gender',mobile='$mobile',email='$email',password='$password' WHERE id='$mid'";		
						mysql_query($sqlUpdate); 
						echo "<center><h3>Account updated successfully.</h3></center>";
						$where = "profile.php?id=$mid"; 
						echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">"; 
						//echo "<a href='profile.php?id=$pid'>My Profile</a><br/><br/>";
				}
			}
			else
			{
			?>             
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $mid;?>" method="post"> 
				    <table width="500" border="0" cellpadding="3" cellspacing="4">
                      <tr>
                        <td height="30" colspan="2"><h1>My Profile:</h1></td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="25%" class="form_label_right"><span class="style7">*</span> Your Name: </td>
                        <td width="75%"><input name="name" type="text" id="name" value="<? echo $name;?>" size="40" /></td>
                      </tr>
                      <tr>
                        <td class="form_label_right">Gender: </td>
                        <td><table width="34%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                              <td width="22%"><input name="gender" type="radio" value="Male" checked="checked" /></td>
                              <td width="78%" class="form_label_left">Male</td>
                            </tr>
                            <tr>
                              <td><input name="gender" type="radio" value="Female"/></td>
                              <td class="form_label_left">Female</td>
                            </tr>
                        </table></td>
                      </tr>

                      <tr>
                        <td class="form_label_right"><span class="style7">*</span> Mobile:</td>
                        <td><input name="mobile" type="text" id="mobile" size="40" value="<? echo $mobile;?>"/></td>
                      </tr>
                      <tr>
                        <td class="form_label_right"><span class="style7">*</span> Your E-mail: </td>
                        <td><input name="email" type="text" id="email" size="40" value="<? echo $email;?>"/></td>
                      </tr>
                      <tr>
                        <td class="form_label_right"><span class="style7">*</span> Password: </td>
                        <td><input name="password" type="password" id="password" size="20" value="<? echo $password;?>" /></td>
                      </tr>
                      <tr>
                        <td class="form_label_right"><span class="style7">*</span> Confirm Password: </td>
                        <td><input name="repassword" type="password" id="repassword" size="20" value="<? echo $password;?>" /></td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input name="update" type="submit" id="update" value="Update Profile" /></td>
                      </tr>
                    </table>    
					</form>
				<?
				}
				?>
				<br/><p align="center"><hr align="left" width="80%" size="1" color="#1F1F1F"/></p></td>
                </tr>
                <tr>
                  <td><p align="center">&nbsp;</p>
                    <p align="center">W</p>
                    <p align="center">I</p>
                  <p align="center">N</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&amp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">W</p>
                  <p align="center">I</p>
                  <p align="center">N</p>
                  <p align="center">&nbsp;</p></td>
                  <td><table width="79%" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC">
                    <tr>
                      <td height="33" colspan="6" class="page_heading"><div align="left" class="style4">My messages: </div></td>
                    </tr>
                    <tr>
                      <td width="24%" class="style4"><div align="left">ID</div></td>
                      <td width="29%" class="style4"><div align="left">Date</div></td>
                      <td width="23%" class="style4"><div align="left">Message</div></td>
                      <td width="24%" class="style4">&nbsp;</td>
                    </tr>
                    <?
					include("connected.php");
	   	$query = "SELECT * FROM msgs where uid = '$uid' ";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 = $rowApps1->id;
			$da    	     = $rowApps1->date_;
			$msg		 = $rowApps1->msg;
			
								
	 ?>
                    <tr>
                      <td><div align="left"><? echo $id;?></div></td>
                      <td><div align="left"><? echo $da;?></div></td>
                      <td><div align="left"><? echo $msg;?></div></td>
                      <td><div align="center"> <? echo '<a href="profile.php?mid='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></div></td>
                    </tr>
                    <?
}
$mid = $_GET['mid'];
if($mid != '')
{
		 $del = "DELETE FROM msgs WHERE id='$mid'";
		 mysql_query($del);
	     $where = "profile.php?id=$uid"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";
}
?>
                    <tr>
                      <td colspan="6"><p>&nbsp;</p>
                        <p align="center"><a href="#"></a></p></td>
                    </tr>
                  </table></td>
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
                <td valign="middle"><br/></td>
              </tr>
              <tr>
                <td><div align="center">
                  <p>Copyright &copy;. All rights reserved 2015. WIN &amp; WIN</p>
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
