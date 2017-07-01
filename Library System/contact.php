<? 
session_start();
$uid=$_SESSION["userid"];
$role= $_SESSION["role"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Library System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style type="text/css">
.style7 {color: #FF0000}
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span>Home Page</span></a></li>
           <?php if($_SESSION["logged"]=="") { ?>
          <li><a href="signup.php"><span>Sign up</span></a></li>
          <li><a href="signin.php">Sign in</a></li>
          <? } ?>
          <?php if($_SESSION["logged"]=="YES") { ?>
          <li class="active">
           <? if($role == 'Student') 
		  {
          		echo '<a href="stupage.php?id='.$uid.'"><span>My Account</span></a>';
		  }
		  if($role == 'Lecturer') 
		  {
          		echo '<a href="lecpage.php?id='.$uid.'"><span>My Account</span></a>';
		  }
		  if ($role == 'Librarian') 
		  {
			    echo '<a href="libpage.php?id='.$uid.'"><span>My Account</span></a>';
		  }
		  ?>
          </li>
          <li><a href="logout.php">Logout</a></li>
          <? } ?>
          <li><a href="about.php">About Us</a></li>
          <li class="active"><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html"><span> Library </span>System</a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span> Welcome To Online Library System.</span></a> <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" />Welcome To Online Library System....</a> <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" />Welcome To Online Library System...</a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Contact us</h2>
          <p class="infopost">&nbsp;</p>
          <div class="clr"></div>
          <div class="clr"></div>
        </div>
        <table width="469" height="135" border="0" align="center">
          <tr>
            <td><p>&nbsp;</p></td>
            <td>
            <?
		 include("connected.php");
		if(isset($_POST["send"])) 
		{
		//$uid  = $_SESSION["userid"]; 
		$name = $_POST["name"];
		$mobile = $_POST["mobile"]; 
		$email = $_POST["email"];
		$message = $_POST["message"];
		$sendDate = date('d-m-Y'); 
		
		if(empty($name) || empty($email) || empty($message) )
		{
			echo  "<center><h3>Please enter your Name, Email and Message! Thank you.</h3></center>";

		}
		else
		{
		    mysql_query("INSERT INTO message  VALUES ('','$name','$mobile','$email','$message','$sendDate')");
			echo "<center><h4 style='color:#FF0000'>Thank you for contacting us. We will contact you soon.</h4></center>";
			
			echo $pid;
			$where = "index.php"; 
            echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"4;URL=$where\">";
		}
		
} 
		 
		?>
        <form action="contact.php" method="post">
            <table width="854" border="0" align="center" cellpadding="2" cellspacing="3" bordercolor="#595758">
              <tr>
                <td width="42%" rowspan="5" class="form_label_right"><div align="center">
                  <iframe width="325" height="250" frameborder="0" scrolling="No" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuala+Lumpur+Federal+Territory+of+Kuala+Lumpur+Malaysia&amp;aq=0&amp;oq=kuala&amp;sll=37.0625,-95.677068&amp;sspn=46.543597,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Kuala+Lumpur,+Federal+Territory+of+Kuala+Lumpur,+Malaysia&amp;t=m&amp;z=12&amp;ll=3.139003,101.686855&amp;output=embed"></iframe>
                  </div></td>
                <td width="13%" class="form_label_right"><span class="style7">*</span> Your Name: </td>
                <td width="45%"><input name="name" type="text" id="name" size="40" /></td>
              </tr>
              <tr>
                <td class="form_label_right">&nbsp; Your Mobile: </td>
                <td><input name="mobile" type="text" id="mobile" size="40" /></td>
              </tr>
              <tr>
                <td class="form_label_right"><span class="style7">*</span> Your E-mail: </td>
                <td><input name="email" type="text" id="email" size="40" /></td>
              </tr>
              <tr>
                <td height="153" rowspan="2" valign="top" class="form_label_right"><span class="style7">*</span> Your Message: </td>
                <td valign="top"><textarea name="message" cols="40" rows="4" id="message"></textarea></td>
              </tr>
              <tr>
                <td valign="top"><p>
                  <input name="send" type="submit" id="send" value="  Send  " style="background-color:#FF9900" />
                </p></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
            </table>
            </form>
            </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <p class="pages">&nbsp;</p>
      </div>
      <div class="sidebar">
        
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star">&nbsp;</h2>
</div>
        <div class="gadget">
          <h2 class="star">&nbsp;</h2>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright Online Library.</p>
      <p class="rf">Design by Mashaan.</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center>All Rights reserved</div></body>
</html>
