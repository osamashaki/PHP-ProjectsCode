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
            <li><a href="index.php">Home</a></li>
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
			<li><a class="active" href="profile.php?id=<? echo $id ?>" title="">My Profile</a></li>
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
          <form action="signin.php" method="post">
            <p align="left">&nbsp;</p>
            <p align="left">&nbsp;</p>
            <table width="760" height="326" border="1">
              <tr>
                <td width="166"><div align="center"><a href="updateprofile.php?id=<? echo $id;?> "><img src="images/user.png" alt="prof" width="99" height="104" border="0"></a></div></td>
                <td width="176"><div align="center"><a href="order.php?id=<? echo $id;?> "><img src="images/orders.png" alt="order" width="137" height="146" border="0"></a></div></td>
                <td width="187"><div align="center"><a href="myorders.php?id=<? echo $id;?>"><img src="images/myorders.png" alt="ord" width="152" height="133" border="0"></a></div></td>
                <td width="203"><div align="center"><a href="logout.php"><img src="images/logout.png" alt="log" width="168" height="168" border="0"></a></div></td>
              </tr>
              <tr>
                <td><div align="center"><a href="updateprofile.php?id=<? echo $id;?> ">My Profile</a></div></td>
                <td><div align="center"><a href="order.php?id=<? echo $id;?>">Order</a></div></td>
                <td><div align="center"><a href="myorders.php?id=<? echo $id;?>">My Orders </a></div></td>
                <td><div align="center"><a href="logout.php">Logout</a></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p align="left"><a href="order.php"></a> </p>
            <p align="left"><a href="logout.php"></a></p>
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
