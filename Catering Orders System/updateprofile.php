<? 

session_start();
$id=$_SESSION["userid"];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ordering Restaurant Catering Online</title>
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
.style6 {
	font-size: 18px;
	font-weight: bold;
}
.style7 {color: #FF0000}
-->
</style>
</head>
<body id="page6">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.php">Catering<span>.com</span></a></h1>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="promotion.php">Promotion </a></li>
            <li><a href="news.php">Latest News </a></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<?php if($_SESSION["logged"]=="") { ?>
			<li><a href="signup.php" title="">Sign Up</a></li>
			<li><a href="signin.php" title="">Sign In</a></li>
			
			<?php } ?>
			<?php if($_SESSION["logged"]=="YES") { ?>
			<li><a href="profile.php?id=<? echo $id ?>" title="">My Profile</a></li>
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
        <h2>Ordering Restaurant Catering Online<span></span></h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div align="center">
	<?
		include("connected.php");
		$uid = $_GET["id"];
		$data = mysql_fetch_array(mysql_query("SELECT first_name,last_name,phone_no,password,email,gender, address FROM user WHERE id = '$uid' "));
		$fname = $data[0];
		$lname = $data[1];
		$mobile = $data[2];
		$password = $data[3];
		$email = $data[4];
		$gender = $data[5];
		$address = $data[6];
	
	if(isset($_POST['update']))
	{
		
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$address = $_POST["address"];
		
	
		
		if($password != $repassword)
		{	
			echo "<center><h3>Password and Confirm password do not match!</h3>";
			echo "<a href='javascript:history.back();'>Back</a></center>";
		}
		else
		{
				
			$uid = $_SESSION["userid"];
			$sqlUpdate = "UPDATE user SET first_name='$fname',last_name='$lname',gender='$gender',phone_no='$mobile',email='$email', password='$password', address='$address' WHERE id='$uid'";		
				mysql_query($sqlUpdate); 
				echo "<center><h3>Account updated successfully.</h3></center>";
				$where = "updateprofile.php?id=$id"; 
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">"; 
				
		}
	}
	?>
          <form action="updateprofile.php" method="post">
            <p align="left"><span class="p1 style6">My Profile: </span> </p>
            <table width="1096" height="432" border="1" cellpadding="2" cellspacing="2">
              <tr>
                <td width="245" height="39"><table width="200" border="1" cellpadding="7" cellspacing="7">
                  <tr>
                    <td><a href="profile.php?id=<? echo $id;?>">My Profile</a></td>
                  </tr>
                  <tr>
                    <td><a href="order.php?id=<? echo $id;?>">Order</a></td>
                  </tr>
                  <tr>
                    <td><a href="myorders.php?id=<? echo $id;?>">My Orders</a></td>
                  </tr>
                  <tr>
                    <td><a href="logout.php">Logout</a></td>
                  </tr>
                </table>
                  <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
                <td width="835" rowspan="5" valign="top"><table width="662" height="330" border="0" align="center" cellpadding="3" cellspacing="3">
                  <tr>
                    <td class="form_label_right"><span class="style7">*</span> First Name: </td>
                    <td><input name="fname" type="text" id="fname" value="<? echo $fname;?>" size="40" /></td>
                  </tr>
                  
                  <tr>
                    <td width="25%" class="form_label_right"><span class="style7">*</span> Last Name: </td>
                    <td width="75%"><input name="lname" type="text" id="lname" value="<? echo $lname;?>" size="40" /></td>
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
                    <td><input name="password" type="password" id="password" size="20" value="<? echo $password;?>"/></td>
                  </tr>
                  <tr>
                    <td class="form_label_right"><span class="style7">*</span> Confirm Password: </td>
                    <td><input name="repassword" type="password" id="repassword" size="20" value="<? echo $password;?>"  /></td>
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
                    <td>Address:</td>
                    <td><input name="address" type="text" id="address" size="40" value="<? echo $address;?>"/></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="update" type="submit" id="update" value="Update Profile" /></td>
                  </tr>
                                </table></td>
              </tr>
              <tr>
                <td height="35">&nbsp;</td>
              </tr>
              <tr>
                <td height="32">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><a href="logout.php"></a></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p align="left">&nbsp;</p>
            <p align="left">&nbsp;</p>
            <p align="left">&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </form>
    </div>
          
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="aligncenter">
      <p align="center"><span>Copyright &copy; 2015 Ordering Restaurant Catering Online </span></p>
      <p align="center"><span>All Rights Reserved</span></p>
    </div>
  </div>
</footer>
</body>
</html>
