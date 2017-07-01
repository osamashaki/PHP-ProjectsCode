<?php
session_start();

if(!(isset($_SESSION['admin_logged_in'])))
{
    header('Location: index.php');
}
include("../connected.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	color: #0066FF;
	font-weight: bold;
}
.style2 {font-family: "Times New Roman", Times, serif}
.style3 {color: #666666}
-->
</style>
</head>

<body>
<table width="814" height="580" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="3" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">SITE ADMIN </div></td>
      </tr>
      <tr>
        <td width="32%" height="173" valign="middle">
		  <div align="center"><a  href="../index.php"></a><a href="members.php"><img src="images/Users.png" width="128" height="128" border="0" /></a><br/>
          <a href="../index.php"></a>          </div></td>
        <td width="33%" valign="middle">
		  <div align="center"><a href="uni_add.php"></a><a href="sports.php"></a><a href="booking.php"><img src="images/apptmnt.jpg" alt="app" width="128" height="128" border="0"></a><br/>
          <a class="button" href="uni_add.php"></a>          </div></td>
        <td width="35%" valign="middle">
         
          <div align="center"><a href="payments.php"><img src="images/pay.jpg" width="128" height="128" border="0"></a><br/>
          <a href="uni_list.php"></a>          </div></td>
      </tr>
      <tr>
        <td height="25" valign="middle" bgcolor="#FF9900"><div align="center"><a href="members.php">Members</a></div></td>
        <td width="33%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="sports.php"></a><a href="booking.php">Booking</a></div></td>
        <td width="35%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="payments.php">Payments</a></div></td>
      </tr>
      <tr>
        <td height="207" valign="middle">
          <div align="center"><a class="button" href="userlist.php"></a>          <a href="treatments.php"></a><a href="msgs.php"><img src="images/msg.jpg" width="130" height="130" border="0"></a></div></td>
        <td valign="middle" class="style2">
		  <div align="center"><a href="profits.php"></a><a href="logout.php"><img src="images/logout.png" alt="appreq" width="128" height="128" border="0"></a><br/>
          <a class="button" href="logout.php"></a>          </div></td>
        <td width="35%" valign="middle">
        <div align="center">
        <div align="center"><a href="logout.php"></a><br/>
          
          <a class="button" href="approve_comments.php"></a></div></td></tr>
      <tr>
        <td height="25" valign="middle" bgcolor="#FF9900"><div align="center"><a href="treatments.php"></a><a href="msgs.php">Messages</a></div></td>
        <td valign="middle" bgcolor="#FF9900" class="style2"><div align="center"><a href="profits.php"></a><a href="logout.php">Log out</a></div></td>
        <td width="35%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="logout.php"></a> </div></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>WIN &amp; WIN  Online Sport System</p>
          <p> All Rights Reserved &copy; 2012 WIN &amp; WIN </p>
        </div></td>
      </tr>
</table>
</body>
</html>
