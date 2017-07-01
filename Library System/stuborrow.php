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
	color: #FF0000;
}
</style>
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">

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
            <td width="216" align="left" valign="top"> <? include ("stulinks.php"); ?></td>
            <td width="674" valign="top">
              <div align="left">
             <?php
			 	
				$isbn = $_GET["isbn"]; //echo $isbn;
			 	$uid = $_SESSION["userid"];
                if(isset($_POST['submit']))
                {
                    $isbn = $_GET["isbn"]; //echo $isbn;
					// this is an error variable to hold any error entered by user
                      $errors = "";
                  if (empty($_POST["timestamp"]))
                    $errors .= "Please provide a date. <br/>";
                  if (empty($_POST["period"]))
                    $errors .= "Please provide a period. <br/>";
                  
				  if ($errors == "") {
					include("connected.php");
                    
					$bdate = $_POST["timestamp"]; 
                    $period = $_POST['period'];
                   
					$now = date("m/d/Y");  
					
					
					$borrowdate = strtotime($bdate);
					
					 
					
					if($period == "One Week")
					{
						$returndate = date('m/d/Y', strtotime($now . ' + 7 day')); 
						 
					}
					if($period == "Two Weeks")
					{
						$returndate = date('m/d/Y', strtotime($now . ' + 14 day'));	
						
					}
					if($period == "Three Weeks")
					{
						$returndate = date('m/d/Y', strtotime($now . ' + 21 day'));	
						
					}
					if($period == "One Month")
					{
						$returndate = date('m/d/Y', strtotime($now . ' + 30 day'));	
						
					}
					if($period == "Two Months")
					{
						$returndate = date('m/d/Y', strtotime($now . ' + 60 day'));	
						
					}
					if($period == "Three Months")
					{
						$returndate = date('m/d/Y', strtotime($now . ' + 90 day'));	
						
					}
					

                    $query = "INSERT INTO book_loan  VALUES ('','$isbn','$uid','$bdate','$period','$returndate','no') ";
					
					mysql_query($query);
				
                       echo "<center><strong>Borrowing Successfully done.<strong></center></br></br>";
                       $where = "stubookloan.php?id=$uid"; 
					   echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3;URL=$where\">"; 
                     
                        
                    
                  } else {
                     echo '<p style="color:#F00"><strong>'. $errors."Please try again.<br/><br/>";
                  }
                }

          ?>
          </div>
            <form action="stuborrow.php?isbn=<? echo $isbn; ?>" method="post" name="form1" id="form1">  
            <table width="80%" border="1" align="center" cellpadding="2" cellspacing="3" style="border:dotted">
              <tr>
                <td width="18%">Borrow a book:</td>
                <td width="22%">&nbsp;</td>
                <td width="60%">&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Choose date:</td>
                <td><input name="timestamp" type="text" size="9" />
                <script language="JavaScript">
				new tcal ({
				// form name
				'formname': 'form1',
				// input name
				'controlname': 'timestamp'
			    });

	</script>  
                </td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Borrow duration:</td>
                <td><select name="period">
                <option value="One Week">One Week</option>
                <option value="Two Weeks">Two Weeks</option>
                <option value="Three Weeks">Three Weeks</option>
                <option value="One Month">One Month</option>
                <option value="Two Months">Two Months</option>
                <option value="Three Months">Three Months</option>
                </select>
                </td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Submit"/></td>
                </tr>
            </table>
            </form>
            </td>
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
