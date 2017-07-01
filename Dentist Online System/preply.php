<?
session_start();
include("connected.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome..</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #F07166}
-->
</style>
<script type="text/javascript" src="stmenu.js"></script></head>
<body>
<div id="container">
  <div id="banner">
    <h1>&nbsp;</h1>
    <h1>&nbsp;</h1>
    <h1 class="style3">&nbsp;</h1>
  </div>
<table width="100%" border="0" align="center" bgcolor="#FCE4D1">
    <tr>
      <td width="20%"><div align="center" class="style8"><a href="index.php">HOME PAGE </a></div></td>
      <td width="20%"><div align="center"><a href="treatments.php">TREATMENTS</a><a href="treatments.php" class="style8"></a></div></td>
      <td width="20%"><div align="center"><a href="register.php">REGISTER</a></div></td>
      <td width="21%"><div align="center" class="style8"><a href="aboutus.php">ABOUT US</a></div></td>
      <td width="19%"><div align="center" class="style8"><a href="contactus.php">CONTACT US</a></div></td>
    </tr>
  </table>

  <div class="intro">
    <h2> We care </h2>
    <div class="scroll">
      <p><img src="img/ser-banner3.jpg" alt="star" /> Make Your Smile Beautiful. </p>
    </div>
  </div>
  <div class="separator"></div>
  <div class="intro2">
    <h2> about </h2>
    <div class="scroll">
      <p><img src="img/star.gif" alt="star" />  <em>Selamat Datang</em>&nbsp;to Our Dental Clinic website!</p>
    </div>
  </div>
  <div class="separator"></div>
  <div class="intro3">
    <h2> your smile </h2>
    <div class="scroll">
      <p><img src="img/rght.jpg" alt="star" />  </p>
    </div>
  </div>
  <div style="clear:both;"></div>
  <div id="sidebar">
    <h1> Links </h1>
    <p>
      <?
		echo "Welcome  "  .$_SESSION ["name"]. "<br/><br/>";
		$pid = $_GET["id"]; 
    ?>
    </p>
    <p><a href="profile.php?id=<? echo $pid; ?>"><strong>My Profile</strong></a></p>
    <p><a href="apptmnt.php?id=<? echo $pid; ?>"><strong>My Appointments</strong></a></p>
    <p><a href="trtment.php?id=<? echo $pid; ?>"><strong>My Treatments</strong></a></p>
    <p><a href="payment.php?id=<? echo $pid; ?>"><strong>My Payments</strong></a></p>
    <p><a href="pmsgs.php?id=<? echo $pid; ?>">My Messages</a> </p>
    <p><strong><a href="logout.php">Log out</a></strong></p>
    <p>&nbsp;</p>
  </div>
  <div id="content">
    <h1><strong>Reply</strong></h1>
    
    <p>
	      <?
		  include("connected.php");	
		  $mid = $_GET['mid'];
		  $pid = $_GET['pid'];
		  
		  
if(isset($_POST["send"])) 
{
		
		$reply = $_REQUEST["reply"];
		$sendDate = date('d-m-Y'); 
		
		
		
		if(empty($reply))
		{
			echo "<br/><center><h4 style='color:#FF0000'>Please enter your reply! Thank you.</h4></center>";
		}
		else
		{	
			$pid = $_SESSION["userid"]; 
			$query = "SELECT * FROM patient where id = '$pid' ";
			$result = mysql_query($query);
			while($rowApps1 = mysql_fetch_object($result))
			{
				$id    		 = $rowApps1->id;
				$name		 = $rowApps1->name;
				$mobile		 = $rowApps1->mobile;
				$email    	 = $rowApps1->email;
				
				
			}	
			
		    mysql_query("INSERT INTO message  VALUES ('','$name','$mobile','$email','$reply','$sendDate','$pid')");
			echo "<center><h4 style='color:#FF0000'>Thank you for cotacting us.</h4></center>";
			
			$where = "pmsgs.php?id=$pid"; 
            echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
		}
		
}
?>		

		  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table width="500" border="0" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>

              <tr>
                <td width="25%" class="form_label_right"><span class="required">*</span>Your Reply: </td>
                <td width="75%"><textarea name="reply" cols="40" rows="5" id="reply"><?php echo $comments;?></textarea></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><div align="center">
                  <input name="send" type="submit" id="send" value="Send" />
                </div></td>
              </tr>
            </table>
          </form>
	
	
	
	
	</p>
    <p>&nbsp;</p>
  </div>
  <div id="footer"> 
    <div align="center">
      <p>Dental Online System - All Rights Reserved &copy; 2015 DOS SYSTEM      </p>
    </div>
  </div>
</div>
</body>
</html>
