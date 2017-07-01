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
</head>
<body id="page4">
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
			<li><a class="active" href="about.php">About Us</a></li>
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
        <h2>HalfMoon Restaurant Catering Service</h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="wrapper">
     
          <div class="p2">
            <h3 align="center" class="p1"><img src="images/about us.jpg" alt="dd" width="576" height="191"></h3>
            <h3 class="p1">About the restaurant :</h3>
            <div align="justify">
              At <strong>Our Restaurant &amp; Catering</strong>, we believe in good food served with a touch of originality and friendly service. We are extremely proud of the care, quality and consistency that go into the making of our food.
              
              We have customers that grew up dining at our Restaurant with their parents and later engaged us for Catering on their weddings and functions. We have Corporate clients that never fail to engage us for their annual events and functions. Essentially, most of our business referrals are from the word of mouth.
      
              All these embody our vision. Malaysians from all walks of life has one way or another enjoyed our food dining at our Restaurant or attending an event Catered by us.
             
          <br/><br/><br/>  
          </div>
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
<script type="text/javascript">Cufon.now();</script>
<div align=center></div>
</body>
</html>
