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
.style1 {color: #FFFFFF}
.style4 {color: #FFFFFF; font-weight: bold; }
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
    <h1><strong>add payment </strong></h1>
	<div align="center">
<?
	
	if(isset($_POST['pay'])) 
	{
		
		$pid = $_SESSION["userid"] ; 
		$amount = $_POST["amount"];
		$com = $_POST["com"];
		$name = $_POST["name"];
		$num = $_POST["num"];

		if(empty($amount)|| empty($name) || empty($num) )
		{
			echo "<h4 style='color:#FF0000'>Please Enter Amount and Credit card details!</h4>";
			
		}
		else
		{	
			$pid = $_SESSION["userid"];
			$date_ = date('m/d/Y'); 
			mysql_query("INSERT INTO payments VALUES ('','$date_','$amount','$com','','$pid')");
			echo "<h4 style='color:#FF0000'>Your payment has been added successfully, Thank you.</h4>";
			$where = "addpay.php?id=$id"; 
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"4;URL=$where\">"; 
				
		}
	}
?>
</div>
<form action="addpay.php?id=<? echo $pid ?>" method="post">

    <table width="100%" border="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
    <table width="80%" border="0" align="center" cellpadding="2" cellspacing="3" bgcolor="#6DA5C3">
      <tr>
        <td class="style1"><strong>Amount:</strong></td>
        <td class="style1"><input name="amount" type="text" id="amount" size="20" />
          RM</td>
        <td class="style1">&nbsp;</td>
      </tr>
      <tr>
        <td class="style4">Comment:</td>
        <td class="style1"><textarea name="com" cols="20" rows="3" id="com"></textarea></td>
        <td class="style1">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" class="style1"><h4><strong>Credit card details:</strong></h4></td>
      </tr>
      <tr>
        <td width="32%" class="style4">Card number:</td>
        <td width="37%"><input name="num" type="text" id="num" size="20" />
          &nbsp;</td>
        <td width="31%">&nbsp;</td>
      </tr>
      <tr>
        <td height="23" class="style4">Cardholder name printed on card</td>
        <td colspan="2"><input name="name" type="text" id="name" size="20" /></td>
      </tr>
      <tr>
        <td height="23" class="style4">Expiry date</td>
        <td colspan="2"><select name="mnth" style="width:123">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            &nbsp;
          </select>
            <select name="yeer" style="width:123">
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
          </select></td>
      </tr>
      <tr>
        <td height="23" class="style4">Security code (CVC):</td>
        <td colspan="2" class="style1"><input name="num2" type="text" id="num2" size="7" maxlength="3" /></td>
      </tr>
      <tr>
        <td height="23" class="style1">&nbsp;</td>
        <td colspan="2" class="style1">&nbsp;</td>
      </tr>
      <tr>
        <td height="23" class="style1">&nbsp;</td>
        <td colspan="2" class="style1">Press the Pay button to continue.</td>
      </tr>
      <tr>
        <td height="23" class="style1">&nbsp;</td>
        <td colspan="2"><input name="pay" type="submit" id="pay" value=" Pay " />
          &nbsp;&nbsp;
          <input name="cancel" type="button" id="cancel" onclick="javascript:window.close();" value="Cancle" /></td>
      </tr>
    </table>
   </form>
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  </div>
  <div id="footer"> 
    <div align="center">
      <p>Dental Online System - All Rights Reserved &copy; 2012 DOS SYSTEM      </p>
    </div>
  </div>
</div>
</body>
</html>
