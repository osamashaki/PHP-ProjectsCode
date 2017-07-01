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
.style5 {	color: #F07100;
	font-size: 130%;
	font-weight: bold;
}
.style4 {font-size: medium;
	color: #036;
	font-weight:bold;
}
.style51 {color: #0022ff;
	font-weight: bold;
}
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
          <li class="active"><a href="signin.php">Sign in</a></li>
          <? } ?>
          <?php if($_SESSION["logged"]=="YES") { ?>
          <li class="active">
          
          <? if($role == 'Student') 
		  {
		  ?>
          		<a href="stupage.php?id=<? echo $uid; ?>"><span>My Account</span></a>
		  <? }
		  if($role == 'Lecturer') 
		  {
          ?>
          	<a href="lecpage.php?id=<? echo $uid; ?>"><span>My Account</span></a>';
		  <?
          }
		  if($role == 'Librarian') 
		  {
		  ?>
			    <a href="libpage.php?id=<? echo $uid; ?>"><span>My Account</span></a>';
		  <?
          }
		  ?>
          
          </li>
          <li><a href="logout.php">Logout</a></li>
          <? } ?>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
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
          <h3>Welcome To Online Library System</h3>
<div class="clr"></div>
          <div class="clr"></div>
        </div>
        
  		
        <table width="100%" height="135" border="0" align="center">
          <tr>
            <td width="182" align="left" valign="top"> <? include ("leclinks.php"); ?></td>
            <td width="688" valign="top">
            <table width="80%" border="1" align="center" cellpadding="3" cellspacing="2" style="border:#F60">
              <tr>
                <td colspan="4" align="center" class="style51">Book Loans</td>
                </tr>
              <tr>
                <td width="10%" class="style51"><div align="left">ISBN</div></td>
                <td width="27%" class="style51"><div align="left">Date loaned</div></td>
                <td width="27%" class="style51">Period</td>
                <td class="style51"><div align="left">Return date</div></td>
              </tr>
              <?
		include("connected.php");
	   	$query = "SELECT * FROM book_loan where user_id = '$uid'";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$isbn   		 = $rowApps1->isbn;
			$date_loaned  	 = $rowApps1->date_loaned;
			$period		     = $rowApps1->period;
			$return_date     = $rowApps1->return_date;
			
			
			
			
	 ?>
              <tr>
                <td><div align="left"><? echo $isbn;?></div></td>
                <td><div align="left"><? echo $date_loaned; ?></div></td>
                <td><div align="left"><? echo $period; ?></div></td>
                <td width="36%" align="left"><? echo $return_date; ?></td>
              </tr>
              <?
}


?>
            </table></td>
          </tr>
        </table>
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
