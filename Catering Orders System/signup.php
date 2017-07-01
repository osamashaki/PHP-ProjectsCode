<? 

session_start();
$id=$_SESSION["userid"];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HalfMoon Restaurant Catering Service</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<style type="text/css">
<!--
.style7 {color: #FF0000}
.style8 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>
<body id="page5">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.php">HalfMoon</a></h1>
        <nav>
          <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="promotion.php">Promotion </a></li>
            <li><a href="news.php">Latest News </a></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<?php if($_SESSION["logged"]=="") { ?>
			<li><a class="active" href="signup.php" title="">Sign Up</a></li>
			<li><a href="signin.php" title="">Sign In</a></li>
			
			<?php } ?>
			<?php if($_SESSION["logged"]=="YES") { ?>
			<li><a href="uprofile.php?id=<? echo $id ?>" title="">My Profile</a></li>
			<li><a href="logout.php" title="">Logout</a></li>
			<?php } ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="row-bot">
    <div class="row-bot-bg">
      <div class="main">
        <h2>HalfMoon Restaurant Catering Service</h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container">
     
	  <center>
	  <?php

if(isset($_POST["submit"])) 
{
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$mobile = $_POST["mobile"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$gender = $_POST["gender"];
		$address = $_POST["address"];
	

		include("connected.php");
		if(empty($name) || empty($lastname) || empty($mobile) || empty($email) || empty($password) || empty($repassword ))
		{
			
				 echo "<h4 style='color:#FF0000'>Please fill in all the required fields!<br/>Invalid email address</h4>";
			
		} 	
		elseif(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) 
		{ 
		
			echo "<h4 style='color:#FF0000'>Invalid email address</h4>";
		} 
		else
		{
					#check for password match
					if($password!=$repassword) 
					{
						
						echo "<h4 style='color:#FF0000'>Passowrd does not matches with Confirm Password!</h4>";
					} 
					else
					{
						#first check for email duplication
						$data = mysql_fetch_array(mysql_query("SELECT COUNT(*) AS total FROM user WHERE email='$email'"));
						if($data[0]>0) {
						
						echo "<h4 style='color:#FF0000'>Duplicated Email Address!</h4>";	
					} 
						
					else
					{
						# all ok, insert in db
						include("connected.php");
						$registerDate = date('d-m-Y'); 
						mysql_query("INSERT INTO user VALUES('','$name','$lastname','$mobile','$password','$email','$gender','$address')");
						echo "<h4 style='color:#FF0000'>Your registration has been successfull. Please proceed with login. Thanks</h4>";
						$where = "signin.php"; 
						echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"4;URL=$where\">"; 
						
					}
				}				
	}
}
?>
      <form action="signup.php" method="post"/>
        <p align="left" class="style8">Please Sign Up here: </p>
        <table width="516" height="418" border="0" align="center" cellpadding="3" cellspacing="3">
          <tr>
            <td height="30" colspan="2" class="page_heading"><span class="style7">*</span> Please fill all required fields </td>
          </tr>
          <tr>
            <td class="form_label_right"><span class="style7">*</span> First Name: </td>
            <td><input name="name" type="text" id="name" size="40" /></td>
          </tr>
          
          <tr>
            <td width="27%" class="form_label_right"><span class="style7">*</span> Last Name: </td>
            <td width="73%"><input name="lastname" type="text" id="lastname" size="40" /></td>
          </tr>
          <tr>
            <td class="form_label_right"><span class="style7">*</span> Mobile:</td>
            <td><input name="mobile" type="text" id="mobile" size="40" /></td>
          </tr>
          <tr>
            <td class="form_label_right"><span class="style7">*</span> Your E-mail: </td>
            <td><input name="email" type="text" id="email" size="40" /></td>
          </tr>
          <tr>
            <td class="form_label_right"><span class="style7">*</span> Password: </td>
            <td><input name="password" type="password" id="password" size="20" /></td>
          </tr>
          <tr>
            <td class="form_label_right"><span class="style7">*</span> Confirm Password: </td>
            <td><input name="repassword" type="password" id="repassword" size="20" /></td>
          </tr>
          <tr>
            <td class="form_label_right"> Gender: </td>
            <td><table width="34%" border="0" cellspacing="1" cellpadding="1">
                <tr>
                  <td width="22%"><input name="gender" type="radio" value="Male" /></td>
                  <td width="78%" class="form_label_left">Male</td>
                </tr>
                <tr>
                  <td><input name="gender" type="radio" value="Female"/></td>
                  <td class="form_label_left">Female</td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td>Address:</td>
            <td><textarea name="address" cols="40" id="address"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="submit" type="submit" id="submit" value="Register" class="button-1"  />
                <input name="cancel" type="reset" id="cancel" value="Reset" class="button-1"  /></td>
          </tr>
        </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
	  </center>
      <blockquote>
        <blockquote>
          <blockquote>
            <blockquote>
              <p>
                <center>
                </center>
              </p>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
      </div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="aligncenter"> 
      <div align="center">
        <p><span>Copyright &copy; 2015 Ordering Restaurant Catering Online </span></p>
        <p><span>All Rights Reserved</span></p>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">Cufon.now();</script>
<div align=center></div>
</body>
</html>
