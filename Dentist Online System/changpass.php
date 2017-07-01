<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome..</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #F07166}
.style5 {
	color: #F07100;
	font-size: 130%;
	font-weight: bold;
}
.style6 {color: #FFFFFF}
.style7 {color: #556C9A}
-->
</style>
 </head>
<body>
<div id="container">
  <div id="banner">
    <h1>&nbsp;</h1>
    <h1>&nbsp;</h1>
    <h1 class="style3">&nbsp;</h1>
  </div>
<table width="100%" border="0" align="center" bgcolor="#FCE4D1">
  <tr>
    <td width="20%"><div align="center" class="style7"><a href="index.php">HOME PAGE </a></div></td>
	  <td width="20%"><div align="center"><a href="treatments.php">TREATMENTS</a><a href="treatments.php" class="style7"></a></div></td>
	    <td width="20%"><div align="center"><a href="register.php">REGISTER</a></div></td>
		  <td width="21%"><div align="center" class="style7"><a href="aboutus.php">ABOUT US</a></div></td>
		    <td width="19%"><div align="center" class="style7"><a href="contactus.php">CONTACT US</a></div></td>
  </tr>
</table>
<div class="intro">
    <h2> We care </h2>
    <div class="scroll">
      <p><img src="img/ser-banner3.jpg" alt="star" /> Make Your Smile Beautiful. </p>
    </div>
  </div>
  <div class="separator"></div>
  <div class="intro2">
    <h2> about </h2>
    <div class="scroll">
      <p><img src="img/star.gif" alt="star" />  <em>Selamat Datang</em>&nbsp;to Our Dental Clinic website!</p>
    </div>
  </div>
  <div class="separator"></div>
  <div class="intro3">
    <h2> your smile </h2>
    <div class="scroll">
      <p><img src="img/rght.jpg" alt="star" />  </p>
    </div>
  </div>
  <div style="clear:both;"></div>
  <div id="sidebar">
    <h1> Links </h1>
    <ul>
      <li><a href="index.php">HOME PAGE </a></li>
      <li><a href="treatments.php">TREATMENTS</a></li>
      <li><a href="register.php">REGISTER</a></li>
      <li><a href="aboutus.php">ABOUT</a> US</li>
      <li><a href="contactus.php">CONTACT US</a></li>
    </ul>
    </p>
    <hr color="#FF9900"/>
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>

  <div id="content">
    <h1>forgot password </h1>
     <p>
       <?  
	$id = $_GET['id']; 
	
if(isset($_POST['submit'])) {

	$id = $_GET['id']; echo $id;	
	include("connected.php");
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	if(empty($password) || empty($repassword ))
	{
		
		echo "<center><span style='color:#FF0000'>Please fill in the required fields correctly!</span></center>";
	}
	elseif($password!=$repassword)
		{
			
			echo "<center><span style='color:#FF0000'>Passowrd does not match!</span></center>";
		}
	else 
	{
				$id =  $_SESSION["patid"]; echo $id;			
				$sql = "update patient set password = '$password' where id = '$id' ";
				mysql_query($sql);
				echo "<center>Your password has been updated successfully</center>";	
				$where = "index.php"; 
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3;URL=$where\">"; 
				
				
			}
				
	}
	
if(isset($_POST['cancel'])) 
{
	$where = "fpass.php"; 
	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">"; 		
}
?>
     </p>
     <p>&nbsp;</p>
     <form id="form1" name="form1" method="post" action="changpass.php">
       <table width="409" border="0" cellspacing="2">
        <tr>
          <td width="127"><span class="required">*</span> Password :</td>
          <td width="266"><input name="password" type="password" id="password" size="20" /></td>
        </tr>
        <tr>
          <td><span class="required">*</span>Confirm Password : </td>
          <td><input name="repassword" type="password" id="repassword" size="20" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="submit" type="submit" id="submit" value="submit" />
              <input name="cancel" type="submit" id="cancel" value="Cancel" /></td>
        </tr>
      </table>
    </form>
  </div>
  <div id="footer"> 
    <div align="center">Dental Online System - All Rights Reserved &copy; 2015 DOS SYSTEM <br/>
    </div>
  </div>
</div>
</body>
</html>
