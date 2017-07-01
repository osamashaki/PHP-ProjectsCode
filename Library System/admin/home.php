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
.style4 {color: #666666; font-size: 12px; }
-->
</style>
</head>

<body>
<table width="814" height="580" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="3" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">
          <p>SYSTEM ADMIN</p>
          </div>
          <table width="100%" border="1">
            <tr>
              <td width="15%" bgcolor="#FFFFFF"><div align="center"><a href="cars.php">Cars</a></div></td>
              <td width="18%" bgcolor="#FFFFFF"><div align="center"><a href="orders.php">Rental Orders</a></div></td>
              <td width="19%" bgcolor="#FFFFFF"><div align="center"><a href="availablecars.php">Available Cars </a></div></td>
              <td width="17%" bgcolor="#FFFFFF"><div align="center"><a href="members.php">Members </a></div></td>
              <td width="16%" bgcolor="#FFFFFF"><div align="center"><a href="msgs.php">Messages</a></div></td>
              <td width="15%" bgcolor="#FFFFFF"><div align="center"><a href="logout.php">Logout</a></div></td>
            </tr>
          </table>        </td>
      </tr>
      <tr>
        <td width="32%" valign="middle"><div align="center">
          <p>&nbsp;</p>
          <p><a href="cars.php"><img src="images/proton-20years.jpg" alt="p" width="250" height="125"></a></p>
          </div></td>
        <td width="32%" height="173" valign="middle">
		  <div align="center">
		    <p><a  href="../index.php"></a><a href="menu.php"></a><a href="carscount.php"></a><a href="availablecars.php"><img src="images/proton-uk.jpg" alt="p" width="250" height="143" border="0"></a><br/>
            <a href="../index.php"></a> </p>
	      </div></td>
        <td width="33%" valign="middle">
		  <div align="center"><a href="uni_add.php"></a><a href="promo.php"></a><a href="orders.php"><img src="images/capetown_carhire-s.jpg" alt="c" width="155" height="128" border="0"></a><br/>
          <a class="button" href="uni_add.php"></a>          </div></td>
      </tr>
      <tr>
        <td valign="middle" bgcolor="#FF9900"><div align="center"><a href="cars.php">Cars</a></div></td>
        <td height="25" valign="middle" bgcolor="#FF9900"><div align="center"><a href="carscount.php"></a><a href="availablecars.php">Available Cars </a></div></td>
        <td width="33%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="orders.php">Rental Orders</a></div></td>
      </tr>
      <tr>
        <td valign="middle"><div align="center"><a href="availablecars.php"></a><a href="members.php"><img src="images/Users.png" width="167" height="144" border="0"></a></div></td>
        <td height="207" valign="middle">
          <div align="center"><a class="button" href="userlist.php"></a>          <a href="orders.php"></a><a href="msgs.php"><img src="images/msg.jpg" width="142" height="133" border="0"></a></div></td>
        <td valign="middle" class="style2">
		  <div align="center"><br/>
          <a class="button" href="logout.php"></a>          </div></td>
        </tr>
      <tr>
        <td valign="middle" bgcolor="#FF9900"><div align="center"><a href="members.php">Members </a></div></td>
        <td height="25" valign="middle" bgcolor="#FF9900"><div align="center"><a href="msgs.php">Messages</a></div></td>
        <td valign="middle" bgcolor="#FF9900" class="style2"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
         Car Rental System</h1>
          <p>All Rights Reserved &copy; 2013 Car Rental System
            </h1>
</p>
        </div></td>
      </tr>
</table>
</body>
</html>
