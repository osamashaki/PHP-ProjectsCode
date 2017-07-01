<? 
error_reporting(0);
session_start();
$id=$_SESSION["userid"];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurant Catering Service</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="js/tms-0.3.js" type="text/javascript"></script>
<script src="js/tms_presets.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.equalheights.js" type="text/javascript"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->

</head>
<body id="page1">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.php">HalfMoon</a></h1>
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
        <h2>HalfMoon Restaurant Catering Service<span></span></h2>
        <div class="slider-wrapper">
          <div class="slider">
            <ul class="items">
              <li> <img src="images/slider-img1.jpg" alt="" /> </li>
              <li> <img src="images/slider-img2.jpg" alt="" /> </li>
              <li> <img src="images/slider-img3.jpg" alt="" /> </li>
			 
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
<div class="wrapper img-indent-bot">
      <article class="col-1"> 
	  <a href="review.php">
	  
	  <img src="images/reviewlink.jpg" alt="" width="290" height="149" border="0" class="img-border">
	  
	  </a> </article>
      <article class="col-1"><a href="menu.php"><img src="images/Untitled.png" alt="image" width="311" height="171" border="0"></a></article>
  <article class="col-2"><a href="order.php"><img src="images/images.jpg" alt="image" width="310" height="170" border="0"></a> </article>
  </div>
    <div class="wrapper">
     
     <div class="p2">
            <h3 class="p1">About the restaurant:</h3>
            <div align="justify">
              At <strong>Our Restaurant &amp; Catering</strong>, we believe in good food served with a touch of originality and friendly service. We are extremely proud of the care, quality and consistency that go into the making of our food.
              
              We have customers that grew up dining at our Restaurant with their parents and later engaged us for Catering on their weddings and functions. We have Corporate clients that never fail to engage us for their annual events and functions. Essentially, most of our business referrals are from the word of mouth.
      
              All these embody our vision. Malaysians from all walks of life has one way or another enjoyed our food dining at our Restaurant or attending an event Catered by us.
             
          <br/> 
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
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'slideDown',
        slideshow: 1000,
        banners: false,
        pauseOnHover: true,
        pagination: true,
        pagNums: false
    });
});
</script>
<div align=center></div>
</body>
</html>
