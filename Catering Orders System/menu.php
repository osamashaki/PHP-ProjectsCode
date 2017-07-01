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
<script src="js/jquery.equalheights.js" type="text/javascript"></script>
<script src="js/jquery.bxSlider.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#slider').bxSlider({
        pager: true,
        controls: false,
        moveSlideQty: 1,
        displaySlideQty: 3
    });
});
</script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<style type="text/css">
<!--
.style2 {
	color: #FF6600;
	font-weight: bold;
}
.style3 {color: #FF9900}
-->
</style>
</head>
<body id="page2">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.php">Catering<span>.com</span></a></h1>
        <nav>
          <ul class="menu">
            <li><a  href="index.php">Home</a></li>
            <li><a class="active" href="menu.php">Menu</a></li>
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
    <div class="wrapper">
      <article >
        <div class="indent-left">
          <div class="img-indent-bot">
            <h3 align="left" class="prev-indent-bot">Our Menu </h3>
            <td>
			<table width="200" border="1" align="right">
              <tr>
              <td> <input name="order" type="button" id="order" onClick="window.location.href='order.php'" value="Order Now" class="button-1" /> </td> 
              </tr>
            </table></td>
            <div class="wrapper img-indent-bot">
              <figure class="img-indent"></figure>
			  
			  
			  <h2 style="color:#333333">Lunch</h2>
			  <table width="1086" border="2" align="center" cellpadding="2" cellspacing="2">
               <?
			   		$dir = "admin/thumbs/";
					include("connected.php");
			    	$query = "SELECT * FROM menu where type='L' order by disporder asc";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->meal_id;
						$price    	     = $rowApps1->meal_price;
						$name			 = $rowApps1->meal_name;
						$description     = $rowApps1->meal_desc;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?> 
				<tr>
                  <td width="222" rowspan="2"><div align="center">
				   <? 
				  if($photo_path == "")
				  {
				  	echo "<img src='images/magnify.png' width =160 height=150>"; 
				  }
				  else
				  {
				  	echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =160 height=150>"; 
				  }
				?>
				  </div></td>
                  <td height="42" colspan="2" valign="top"><strong><span class="style2">Meal:</span> <? echo $name; ?> </strong></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span class="style2"><strong>Meal Description:</strong></span><strong> <span class="extra-wrap"><? echo $description ?> </span></strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="699"><div align="right"></div></td>
                  <td width="137"></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left" class="style2"><hr width="67%" color="#FF6600" /></div></td>
                </tr>
				 <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
				<?
				}
				?>
              </table>
			  <h2 style="color:#333333">Dinner</h2>
			  <table width="1086" border="2" align="center" cellpadding="2" cellspacing="2">
               <?
			   		$dir = "admin/thumbs/";
					include("connected.php");
			    	$query = "SELECT * FROM menu where type='D' order by disporder asc";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->meal_id;
						$price    	     = $rowApps1->meal_price;
						$name			 = $rowApps1->meal_name;
						$description     = $rowApps1->meal_desc;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?> 
				<tr>
                  <td width="222" rowspan="2"><div align="center">
				   <? 
				  if($photo_path == "")
				  {
				  	echo "<img src='images/magnify.png' width =160 height=150>"; 
				  }
				  else
				  {
				  	echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =160 height=150>"; 
				  }
				?>
				  </div></td>
                  <td height="42" colspan="2" valign="top"><strong><span class="style2">Meal:</span> <? echo $name; ?> </strong></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span class="style2"><strong>Meal Description:</strong></span><strong> <span class="extra-wrap"><? echo $description ?> </span></strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="699"><div align="right"></div></td>
                  <td width="137"></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left" class="style2"><hr width="67%" color="#FF6600" /></div></td>
                </tr>
				 <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
				<?
				}
				?>
              </table>
            </div>
          </div>
          <h3 class="p1">&nbsp;</h3>
        </div>
      </article><article class="col-2"></article>
      <!--==============================footer=================================-->
</div>
  </div>
</section>
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
