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
        <?
			$id = $_GET["id"]; //echo $isbn;
			$uid = $_SESSION["userid"];
                if(isset($_POST['submit']))
                {
                    $id = $_GET["id"]; //echo $isbn;
					// this is an error variable to hold any error entered by user
                      $errors = "";
                  if (empty($_POST['retdate']))
                    $errors .= "Please provide a date. <br/>";
                 
                  
				  if ($errors == "") {
                    $rdate = $_POST['retdate']; 
                                  
					 
					
					include("connected.php");
				    

                    $query = "update book_loan set return_date = '$rdate' where id='$id' ";
					
					mysql_query($query);
				
                       echo "<center><strong>Book returned Successfully.<strong></center></br></br>";
                       $where = "libbookloan.php"; 
					   echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">"; 
                     
                        
                    
                  } else {
                     echo '<p style="color:#F00"><strong>'. $errors."Please try again.<br/><br/>";
                  }
                }

          ?>
		
	
		<form action="returnbook.php?id=<? echo $id; ?>" method="post"/>  		
        <table width="109%" height="135" border="0" align="center">
          <tr>
            <td align="left"><blockquote>
              <table width="100%" height="135" border="0" align="center">
                <tr>
                  <td align="center"><? include ("liblinks.php"); ?></td>
                  <td width="680" rowspan="6" valign="top">
                  
                  <table width="80%" border="1" align="center" cellpadding="3" cellspacing="2" style="border:#F60; border:dotted">
                    <tr>
                      <td width="18%" align="center" class="style511">&nbsp;</td>
                      <td width="82%" align="center" class="style511">Return Book</td>
                    </tr>
                    <tr>
                      <td class="style511">Return date:</td>
                      <td class="style511"><div align="left">
                        <input name="retdate" type="text" id="retdate" size="15" />
                      </div></td>
                      </tr>
                    <tr>
                      <td class="style511">&nbsp;</td>
                      <td class="style511"><input type="submit" name="submit" value="Submit"/></td>
                    </tr>
                  

                  </table>
                  </form>
                  </td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td width="201" align="left">&nbsp;</td>
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
