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
.style4 {	color: #FF6600;
	font-weight: bold;
}
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
    <table width="70%" align="center" cellspacing="2">
    <tr><td align="left"> <a href="profile.php?id=<? echo $pid; ?>"><strong>My Profile</strong></a></td> </tr>
    <tr><td align="left"><a href="apptmnt.php?id=<? echo $pid; ?>"><strong>My Appointments</strong></a></td> </tr>
    <tr><td align="left"><a href="trtment.php?id=<? echo $pid; ?>"><strong>My Treatments</strong></a></td> </tr>
    <tr><td align="left"><a href="payment.php?id=<? echo $pid; ?>"><strong>My Payments</strong></a></td> </tr>
    <tr><td align="left"><a href="pmsgs.php?id=<? echo $pid; ?>"><strong>My Messages</strong></a></td> </tr>
    <tr><td align="left"><a href="logout.php">Log out</a></td> </tr>
    </table>
  </div>
  <div id="content">
    <h1><strong>My Appointments</strong></h1>
    <?		  
if(isset($_POST["send"])) 
{
		$pid = $_SESSION["userid"]; 
		$msg = $_POST["msg"];
		$sendDate = date('d-m-Y'); 
		
		$data = mysql_fetch_array(mysql_query(" select name,mobile,email from patient where id = '$pid'  "));					
	 		$name2 = $data[0];  
			$mobile2 = $data[1];
			$email2 = $data[2];
		
		if(empty($msg))
		{
			echo "<br/><center><h4 style='color:#FF0000'>Please enter your message! Thank you.</h4></center>";
		}
		else
		{
		    mysql_query("INSERT INTO message  VALUES ('','$name2','$mobile2','$email2','$msg','$sendDate','$pid')");
			echo "<center><h4 style='color:#FF0000'>Thank you for contacting us. We will contact you soon.</h4></center>";
			
			echo $pid;
			$where = "pmsgs.php?id=$pid"; 
            echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
		}
		
}
?>		

	<form action="sendmsg.php" method="post">
    <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
      <tr>
        <td height="33" colspan="7" class="page_heading"><div align="left" class="style4">Send New Message : </div></td>
      </tr>
      <tr>
        <td width="30%" class="style4">&nbsp;</td>
        <td width="55%" class="style4">&nbsp;</td>
        
        <td width="15%" class="style4"><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="left" class="style4">Message:</div></td>
        <td><div align="left">
          <textarea name="msg" cols="30" rows="5" id="msg"></textarea>
        </div></td>
        
        <td><div align="center"></div></td>
      </tr>
   
      <tr>
        <td colspan="7"><div align="center"></div></td>
      </tr>
      <tr>
        <td colspan="7"><div align="center"><input name="send" type="submit" id="send" value=" Send "  /></div></td>
      </tr>
    </table>
	</form>
    <p>&nbsp;</p>
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
