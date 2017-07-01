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
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="js/hover-image.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.bxSlider.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#slider-2').bxSlider({
        pager: true,
        controls: false,
        moveSlideQty: 1,
        displaySlideQty: 4
    });
    $("a[data-gal^='prettyPhoto']").prettyPhoto({
        theme: 'facebook'
    });
});
</script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<style type="text/css">
<!--
.style2 {	color: #FF6600;
	font-weight: bold;
}
.style3 {color: #FF9900}
-->
</style>
</head>
<body id="page3">
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
            <li><a class="active" href="promotion.php?id=<? echo $id ?>">Promotion </a></li>
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
        <h2>Ordering Restaurant Catering Online</h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container">
      <h3 class="prev-indent-bot">Promotions:</h3>
	  <?
	  $press = $_GET["press"]; echo $press;
	  if(isset($_GET['press']))
	  {
		  if(!(isset($_SESSION['logged'])))
			{
				header('Location: signin.php');
			}
			else 
			{	
				$price = $_GET["price"];
				//$where = "orderpromotion.php?id=$id&price=$price";
				//echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">"; 
			}
	  }
	  ?>
     <form action="promotion.php" method="post">
	 <table width="1086" border="2" align="center" cellpadding="2" cellspacing="2">
        <?
			   		$dir = "admin/thumbs/";
					include("connected.php");
			    	$query = "SELECT * FROM promotion";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->id;
						$title    	     = $rowApps1->title;
						$description	 = $rowApps1->description;
						$price		     = $rowApps1->price;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?>
        <tr>
          <td width="222" rowspan="4"><div align="center"><? echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =200 height=200>"; ?></div></td>
          <td height="42" colspan="2" valign="top"><strong><span class="style2">Title:</span> <? echo $title; ?> </strong></td>
        </tr>
        <tr>
          <td colspan="2" valign="top"><span class="style2"><strong> Description:</strong></span><strong> <span class="extra-wrap"><? echo $description ?> </span></strong></td>
        </tr>
        <tr>
          <td valign="middle" ><strong><span class="style2">Only For: </span><? echo RM.$price ?></strong></td>
          <td></td>
        </tr>
        <tr>
          <td width="699" valign="middle"><div align="center">
		  <input name="order" type="button" id="order" onClick="window.location.href='orderpromotion.php?price=<? echo  $price; ?>&press=1'" value="Order Now" class="button-1" /> 
         
          </div></td>
          <td width="137"></td>
        </tr>
		 <tr>
		 <td>&nbsp;</td>
		 </tr>
       
        <tr>
		
          <td colspan="3"><div align="left" class="style2">
            <hr width="67%" color="#FF6600" />
          </div></td>
        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
        <?
				}
				?>
      </table>
	  </form>
	  
      <p class="prev-indent-bot">&nbsp;</p>
      <div id="slider-2">
        <div>
          <div class="p4">
            
			
			
          </div>
        </div>
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
</body>
</html>
