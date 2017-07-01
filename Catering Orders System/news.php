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
.style2 {color: #FF6600;
	font-weight: bold;
}
-->
</style>
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
           <li><a  href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="promotion.php">Promotion </a></li>
            <li><a class="active" href="news.php">Latest News </a></li>
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
        <h2>HalfMoon Restaurant Catering Service</h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="wrapper">
      <article class="col-1">
        <div class="indent-left">
          <div class="p2">
            <h3 class="p1">Latest News:</h3>
          
              <table width="1086" border="2" align="center" cellpadding="2" cellspacing="2">
                <?
			   		$dir = "admin/thumbs/";
					include("connected.php");
			    	$query = "SELECT * FROM news";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->id;
						$title    	     = $rowApps1->title;
						$newstext		 = $rowApps1->newstext;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?>
                <tr>
                  <td width="222" rowspan="2"><div align="center"><? echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =160 height=150>"; ?></div></td>
                  <td height="42" colspan="2" valign="top"><strong><span class="style2">Title:</span> <? echo $title; ?> </strong></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span class="style2"><strong> Description:</strong></span><strong> <span class="extra-wrap"><? echo $newstext; ?> </span></strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="699"><div align="right"></div></td>
                  <td width="137"></td>
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
             
          </div>
        </div>
      </article>
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
