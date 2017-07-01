<? 

session_start();
$id=$_SESSION["userid"];
if(!(isset($_SESSION['logged'])))
{
    header('Location: signin.php');
}
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
.style4 {	color: #FF6600;
	font-weight: bold;
}
.style5 {color: #f2f2f2}
-->
</style>
</head>
<body id="page4">
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
      <article class="col-1">
        <div class="indent-left">
          <div class="p2">
            <h3 class="p1">Customer reviews:</h3>
            <p class="p1">
			<?
			if(!(isset($_SESSION['logged'])))
			{
					$where = "signin.php";
					echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">";
			}
			else 
			{
				if(isset($_POST['submit']))
				{
					$comment = $_POST["comment"];
					if($comment == "")
					{
						echo "<cener><font color='red'><b>Please enter your comment</b></font><cener>";
					}
					else
					{
							include("connected.php");
							$date_ = date('d-m-Y'); 
							mysql_query("INSERT INTO review VALUES('','$comment','$date_','$id')");
							echo "<h4 style='color:#FF0000'>Your review has been added successfully. Thank you.</h4>";
							$where = "review.php"; 
							echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">"; 
							
					}
				} 
				
	  		}
			?>
			<form action="review.php" method="post">
			  <blockquote>
			    <blockquote>
			      <table width="81%" border="0" cellpadding="3">
                    <tr>
                      <td width="70%">Enter your comment here:</td>
                      <td width="40%" rowspan="3"><span class="style5">mmmmmm</span></td>
                      <td width="30%" rowspan="3"><div align="center"><img src="images/tt.jpg" alt="t" width="400" height="267"></div></td>
                    </tr>
                    <tr>
                      <td><textarea name="comment" cols="50" rows="6"></textarea></td>
                    </tr>
                    <tr>
                      <td><input name="submit" type="submit" value="  Send  " class="button-1" /></td>
                    </tr>
                  </table>
		        </blockquote>
			  </blockquote>
			</form>
			
			    <table width="85%" border="1" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC">
                <?
				  		include("connected.php");
						$query = "SELECT * FROM review";
						$result = mysql_query($query);
						while($rowApps1 = mysql_fetch_object($result))
						{
							$id    		 	 = $rowApps1->id;
							$comment    	 = $rowApps1->comment;
							$date_    	     = $rowApps1->date_;
							$uid             = $rowApps1->uid;			
			
				
	 			?> 
                  <tr>
                    <td width="7%">&nbsp;</td>
                    <td width="34%"><div align="left" class="style4">By </div></td>
                    <td width="59%"><div align="left">
					<?
						$data = mysql_fetch_array(mysql_query("select first_name from user where id = '$uid'")); 
						$name = $data[0];
						echo $name;?>
					
					
					</div></td>
                  </tr>
                
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left"><span class="style4">Review:</span></div></td>
                    <td><div align="left"><? echo $comment;?></div></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align="left" class="style4">Date:</div></td>
                    <td><div align="left"><? echo $date_;?></div></td>
                  </tr>
				  <tr>
                    <td>&nbsp;</td>
					</tr>
                  <?   
}
$mid = $_GET['id'];
if($mid != '')
{
		 $del = "DELETE FROM review WHERE id='$mid'";
		 mysql_query($del);
	     $where = "reviews.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
                  <tr>
                    <td colspan="7">&nbsp;</td>
                  </tr>
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
