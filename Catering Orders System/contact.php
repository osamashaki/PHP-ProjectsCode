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
-->
</style>
</head>
<body id="page6">
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
            <li><a href="news.php">Latest News </a></li>
            <li><a class="active" href="contact.php" title="">Contact Us</a></li>
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
          <h3 class="p1">Our Contacts</h3>
          <figure class="indent-bot">
            <iframe width="325" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuala+Lumpur+Federal+Territory+of+Kuala+Lumpur+Malaysia&amp;aq=0&amp;oq=kuala&amp;sll=37.0625,-95.677068&amp;sspn=46.543597,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Kuala+Lumpur,+Federal+Territory+of+Kuala+Lumpur,+Malaysia&amp;t=m&amp;z=12&amp;ll=3.139003,101.686855&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Kuala+Lumpur+Federal+Territory+of+Kuala+Lumpur+Malaysia&amp;aq=0&amp;oq=kuala&amp;sll=37.0625,-95.677068&amp;sspn=46.543597,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Kuala+Lumpur,+Federal+Territory+of+Kuala+Lumpur,+Malaysia&amp;t=m&amp;z=12&amp;ll=3.139003,101.686855" style="color:#0000FF;text-align:left">View Larger Map</a></small>
          </figure>
          <dl>
          </dl>
          <p>Kuala Lumpur, Malaysia </p>
          <dl>
            <dd>&nbsp;</dd>
            <dd><span>Telephone:</span> +60173107162</dd>
            <dd>&nbsp;</dd>
            <dd><span>Email:</span><a class="color-2" href="#"> abdo-123456@hotmail.com</a></dd>
          </dl>
        </div>
      </article>
      <article class="col-2">
        <h3 class="p1">Contact Form</h3>
		<?
		 include("connected.php");
		if(isset($_POST["send"])) 
		{
		$uid  = $_SESSION["userid"]; 
		$name = $_POST["name"];
		
		$email = $_POST["email"];
		$message = $_POST["message"];
		$sendDate = date('d-m-Y'); 
		
		if(empty($name) || empty($email) || empty($message) )
		{
			echo  "<center><h4><font color='red'> Please enter your Name, Email and Message! Thank you.</font></h4></center>";

		}
		else
		{
		    mysql_query("INSERT INTO feedback  VALUES ('','$name','$email','$message','$sendDate')");
			echo "<center><h4 style='color:#FF0000'>Thank you for contacting us. We will contact you soon.</h4></center>";
			
		
			$where = "index.php"; 
            echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
		}
		
} 
		 
		?>
        <form id="contact-form" action="contact.php" method="post">
          <fieldset>
            <table width="854" border="0" align="center" cellpadding="2" cellspacing="3" bordercolor="#595758">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td width="13%" class="form_label_right"><span class="style7">*</span> Your Name: </td>
                <td width="45%"><input name="name" type="text" id="name" size="40" /></td>
              </tr>

              <tr>
                <td class="form_label_right"><span class="style7">*</span> Your E-mail: </td>
                <td><input name="email" type="text" id="email" size="40" /></td>
              </tr>
              <tr>
                <td height="153" rowspan="2" valign="top" class="form_label_right"><span class="style7">*</span> Your Message: </td>
                <td valign="top"><textarea name="message" cols="40" rows="4" id="message"><?php echo $comments;?></textarea></td>
              </tr>
              <tr>
                <td valign="top"><p>&nbsp; </p>
                    <p>
                      <input name="send" type="submit" id="send" value="Send" style="background-color:#FF9900" />
                  </p></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <label></label>
            <div class="wrapper"><div class="extra-wrap"></div>
          </div>
          </fieldset>
        </form>
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

</body>
</html>
