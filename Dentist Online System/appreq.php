<?
date_default_timezone_set("Asia/Kuala_Lumpur"); 
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
.style7 {color: #FF0000}
.style10 {color: #556C9A}
-->
</style>
<script type="text/javascript" src="stmenu.js"></script>
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">

</head>
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
    <p><a href="pmsgs.php?id=<? echo $pid; ?>"><strong>My Messages</strong></a></p>
    <p><strong><a href="logout.php">Log out</a></strong></p>
    <p>&nbsp;</p>
  </div>
  <div id="content">
    <h1><strong>Request an  Appointment</strong></h1>
	<center>
	<?
	if(isset($_POST["submit"])) 
	{
		$pid = $_SESSION["userid"] ; 
		$appdate = $_POST["timestamp"];
		$apptime = $_POST["apptime"];
		$treatments = $_POST["treatments"];
		$com = $_POST["comment"];
		
		$now = date('m/d/Y'); 
	    $adate = strtotime( $appdate );
		$myDate = date( 'm/d/Y', $adate ); 
		
		$atime = strtotime( $apptime );
		$mytime = date( 'H:i', $atime ); 
		
		$timenow = date('H:i');   
		
		if($myDate < $now )
		{
			echo "<h4 style='color:#FF0000'>Invalid date</h4>";
		}
		else if($myDate == $now  && $mytime < $timenow)
		{
			echo "<h4 style='color:#FF0000'>Invalid Time</h4>";
		}
		
		else if(empty($appdate) || empty($apptime) )
		{
			echo "<h4 style='color:#FF0000'>Please select data and time!</h4>";
		}
		
		else
		{	$pid = $_SESSION["userid"] ; 
			mysql_query("INSERT INTO appreq VALUES ('','$appdate','$apptime','$treatments','$pid','Waiting for acceptance..','$com')");
			echo "<h4 style='color:#FF0000'>Your appointment has been sent successfull. Thank you.</h4>";
			
			$where = "apptmnt.php?id=$pid"; 
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"4;URL=$where\">"; 
		
		}
	}	
	?>
	</center>
    <form action="appreq.php" method="post" name="form1">
    <table width="500" border="0" cellpadding="0" cellspacing="2">
      
     
      <tr>
        <td class="form_label_right">&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="22%" class="form_label_right">Date:</td>
        <td width="15%">Time:</td>
        <td width="36%">Treatments:</td>
        <td width="27%">Comment</td>
      </tr>
	 
      <tr>
        <td>
		 <input name="timestamp" type="text" size="9" />
            <script language="JavaScript">
			new tcal ({
				// form name
				'formname': 'form1',
				// input name
				'controlname': 'timestamp'
			});

			</script>		</td>
        <td><select name="apptime" style="width:123">
         <option value=""></option>
          <option value="9:00">9:00</option>
          <option value="9:30">9:30</option>
          <option value="10:00">10:00</option>
          <option value="10:30">10:30</option>
          <option value="11:00">11:00</option>
          <option value="11:30">11:30</option>
          <option value="12:00">12:00</option>
          <option value="12:30">12:30</option>
          <option value="13:00">13:00</option>
          <option value="13:30">13:30</option>
          <option value="14:00">14:00</option>
          <option value="14:30">14:30</option>
          <option value="15:00">15:00</option>
          <option value="15:30">15:30</option>
          <option value="16:00">16:00</option>
          <option value="16:30">16:30</option>
          <option value="17:00">17:00</option>
       
         
        </select></td>
        <td colspan="2"><select name="treatments" id="treatments" style="width:103">
          <option value=""></option>
          <option value="Curing a teeth: 150RM">Curing a teeth: 150RM</option>
		  <option value="Teeth whitening:300RM">Teeth whitening:300RM</option>
        </select>
          <input name="comment" type="text" id="comment" size="15" /></td>
      </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><p>&nbsp;
          </p>
          <p>&nbsp;</p></td>
        <td colspan="2"><input name="submit" type="submit" id="submit" value="Send Request" /></td>
      </tr>
      <tr>
        <td colspan="4"><p>&nbsp;</p>
        <p align="center"><a href="#"></a></p></td>
      </tr>
    </table>
	</form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="footer"> 
    <div align="center">
      <p>Dental Online System - All Rights Reserved &copy; 2012 DOS SYSTEM      </p>
      </div>
  </div>
</div>
</body>
</html>
