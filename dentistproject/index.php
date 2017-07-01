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
	
	 <? if (isset($_POST['login']))
	 { 	
	 	error_reporting(0);
		include("connected.php");
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($username) || empty($password)) 
		{
			
			echo "<center>Username / Password are required fields!<br/><br/>";
			echo "<a href='index.php'>Back</a></center>"; 
		} 
		else 
		{
			
			$sql="SELECT COUNT(*) AS total FROM patient WHERE email='$username' and password='$password' ";	
			$result=mysql_query($sql);
			$row = mysql_fetch_array($result);
			$count = $row['total'];
			if ($count==0) 
			{
				
				echo "<center>Invalid Username / Password!<br/><br/>";
				echo "<a href='index.php'>Back</a></center>"; 
			} 
			else 
			{
				# get user details and store in session and redirect to user home page.
				session_start();
				
				$data = mysql_fetch_array(mysql_query("SELECT id,name FROM patient WHERE email='$username' AND password='$password'"));
				$_SESSION["userid"] = $data[0];
				$_SESSION["name"] = $data[1];
				$_SESSION["logged"] = "YES";
				$pid= $data[0];
				echo "Welcome  "  .$_SESSION["name"]. "<br/><br/>"; 
				
				
				echo "<a href='profile.php?id=$pid'>My Profile</a><br/><br/>";
				
				echo "<a href=logout.php>Logout</a>";
 
			
			}	
		}
}
else
{
?>
	
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<table width="100%" border="1" style="border-style:dotted">
      <tr>
        <td colspan="2"><span class="style5">LogIn: </span></td>
      </tr>
      <tr>
        <td colspan="2"><strong>Please enter Username and Password: </strong></td>
      </tr>
      <tr>
        <td width="27%"><div align="left"><strong>Email:</strong></div></td>
        <td><input name="username" type="text" id="username" /></td>
      </tr>
      <tr>
        <td><div align="left"><strong>Password:</strong></div></td>
        <td><input name="password" type="password" id="password" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="login" type="submit" id="login" style="background-color:#6CA5C2" value="Login" /></td>
      </tr>
      <tr>
        <td colspan="2"><a href="fpass.php"><strong>Forget Password </strong></a></td>
      </tr>
    </table>
	</form>
<?
}
?> 
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>

  <div id="content">
    <h1>Treatments Offered </h1>
    
    <p>At Our Dental Clinic we provide the following treatments:</p>
    <table width="100%" height="300" border="0">
      <tr>
        <td><table width="500" border="0" align="center" cellpadding="1" cellspacing="3" bordercolor="#E0DFE3">
          <tbody>
            <tr>
              <td bgcolor="#FF9900"><span class="style6">Cosmetic dentistry (e.g. teeth whitening, crowning, etc)</span></td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">Periodontics (gum treatment)</td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">Endodontics (root canal therapy)</td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">Preventive treatments &ndash; fissure sealant, fluoride treatment</td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">General dental treatment</td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">Prosthetic&nbsp;treatment (dentures, or gigi palsu)</td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">Minor Oral surgery</td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">Restorative treatment</td>
            </tr>
            <tr>
              <td bgcolor="#FF9900" class="style6">Orthodontics (braces)</td>
            </tr>
          </tbody>
        </table></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p align="center">&nbsp;</p>
  </div>
  <div id="footer"> 
    <div align="center">Dental Online System - All Rights Reserved &copy; 2012 DOS SYSTEM <br/>
    </div>
  </div>
</div>
</body>
</html>
