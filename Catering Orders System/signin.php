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
            <li><a  href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="promotion.php">Promotion </a></li>
            <li><a href="news.php">Latest News </a></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<?php if($_SESSION["logged"]=="") { ?>
			<li><a href="signup.php" title="">Sign Up</a></li>
			<li><a class="active" href="signin.php" title="">Sign In</a></li>
			
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
  
   
       
     <? 
	 if (isset($_POST['login']))
	 { 	
	 	error_reporting(0);
		include("connected.php");
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($username) || empty($password)) 
		{
			
			echo "<center>Username / Password are required fields!<br/><br/>";
			echo "<a href='signin.php'><img src='images/back.jpg' width='200'></a></center>";
		} 
		else 
		{
			
			$sql="SELECT COUNT(*) AS total FROM user WHERE email='$username' and password='$password' ";	
			$result=mysql_query($sql);
			$row = mysql_fetch_array($result);
			$count = $row['total'];
			if ($count==0) 
			{
				
				echo "<center>Invalid Username / Password!<br/><br/>";
				 
				echo "<a href='signin.php'><img src='images/back.jpg' width='200'></a></center>";
			} 
			else 
			{
				# get user details and store in session and redirect to user home page.
				session_start();
				
				$data = mysql_fetch_array(mysql_query("SELECT id,first_name FROM user WHERE email='$username' AND password='$password'"));
				$_SESSION["userid"] = $data[0];
				$_SESSION["name"]   = $data[1];
				$_SESSION["logged"] = "YES";
				$uid= $data[0];
				
				
				echo "Welcome  "  .$_SESSION["name"]. "<br/><br/>";
				$where = "profile.php?id=$uid"; 
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">";  
			
			
			}	
		}
}
else
{
?>     
          <div align="center">
          <form action="signin.php" method="post">
            <p align="left"><span class="p1 style6">Sign In: </span></p>
            <table width="50%" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="2">Please enter Username and Password:</td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="27%" height="35"><div align="left">Email:</div></td>
                <td><input name="username" type="text" id="username" size="30" /></td>
              </tr>
              <tr>
                <td><div align="left">Password:</div></td>
                <td><input name="password" type="password" id="password" size="30" /></td>
              </tr>
              <tr>
                <td height="23">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="35">&nbsp;</td>
                <td><input name="login" type="submit" id="login" class="button-1"  value="  Login  " /></td>
              </tr>
              <tr>
                <td colspan="2"><a href="fpass.php"></a></td>
              </tr>
            </table>
			</form>
    </div>
          
      <?
	  }
	  ?>  
     
       
     
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
