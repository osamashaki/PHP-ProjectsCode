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
.style51 {color: #FF6600;
	font-weight: bold;
}
.style511 {color: #0022ff;
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
          <li class="active"><a href="libpage.php?id=<? echo $uid ?>"><span>My Account</span></a></li>
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
          <h2>Welcome To Online Library System</h2>
<div class="clr"></div>
          <div class="clr"></div>
        </div>
        
  		
        <table width="109%" height="135" border="0" align="center">
          <tr>
            <td align="left"><blockquote>
              <table width="100%" height="135" border="0" align="center">
                <tr>
                  <td align="center"><? include ("liblinks.php"); ?></td>
                  <td width="666" rowspan="6" valign="top">
                  
                  <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table width="343" border="0" align="center" cellpadding="3" cellspacing="3">
                      <tr>
                        <td width="257">Enter name:
                          <input name="search1" type="text" id="search1" value="" /></td>
                        <td width="70"><input name="search" type="submit" id="search" value="Search" /></td>
                      </tr>
                  </table>
                  </form>
                  
                  <p>&nbsp;</p>
                  <table width="100%" border="2" align="center" cellpadding="3" cellspacing="3" style="border:#F60">
                    <tr>
                      <td colspan="6" align="center" class="style511">Book Loans</td>
                    </tr>
                    <tr>
                      <td width="6%" class="style511"><div align="left">ISBN</div></td>
                      <td width="23%" class="style511">User name</td>
                      <td width="21%" class="style511"><div align="left">Date loaned</div></td>
                      <td width="18%" class="style511">Period</td>
                      <td class="style511">Return date</td>
                      <td class="style511"><div align="left"></div></td>
                    </tr>
                    <?
		include("connected.php");
	   	$query = "SELECT * FROM book_loan";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id   		 = $rowApps1->id;
			$isbn   		 = $rowApps1->isbn;
			$user_id   		 = $rowApps1->user_id;
			$date_loaned  	 = $rowApps1->date_loaned;
			$period		     = $rowApps1->period;
			$return_date     = $rowApps1->return_date;
			
			
			$data = mysql_fetch_array(mysql_query("select name from user where id = '$user_id' "));
			$usernamee = $data[0];
	 ?>
                    <tr>
                      <td><div align="left"><? echo $isbn;?></div></td>
                      <td><? echo $usernamee; ?></td>
                      <td><div align="left"><? echo $date_loaned; ?></div></td>
                      <td><div align="left"><? echo $period; ?></div></td>
                      <td width="19%" align="left"><? echo $return_date; ?></td>
                      <td width="13%" align="left"><a href="libbookloan.php?retid= <? echo $id; ?>">Return</a></td>
                    </tr>
                    <?
}

$retid = $_GET['retid'];
if($retid != '')
{
		 
		 $update = "update book_loan set returned='yes' WHERE id='$retid'";
		 mysql_query($update);
		 echo "<center><h3 style='color:#000'>Book returned successfully. Thank you.</h3></center>";
		
		 	
	     $where = "libbookloan.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3;URL=$where\">";
}
?>
                  </table></td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td width="215" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                </tr>
              </table>
              <p>&nbsp;</p>
            </blockquote></td>
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
