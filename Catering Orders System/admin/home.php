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
.style7 {font-size: 14; }
-->
</style>
</head>

<body>
<table width="814" height="608" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="4" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2"><a href="home.php">SYSTEM ADMIN</a> </div>
          <div align="right"><a href="logout.php"></a></div></td>
      </tr>
      <tr>
        <td height="25" colspan="4" valign="middle"><table width="100%" border="0">
          <tr>
            <td width="8%"><div align="center" class="style7"><a href="menu.php">Menu</a></div></td>
            <td width="13%"><div align="center" class="style7"><a href="promo.php">Promotions</a></div></td>
            <td width="10%"><div align="center" class="style7"><a href="news.php">News</a></div></td>
            <td width="12%"><div align="center" class="style7"><a href="reviews.php">Reviews</a></div></td>
            <td width="11%"><div align="center" class="style7"><a href="orders.php">Orders</a></div></td>
            <td width="12%"><div align="center" class="style7"><a href="members.php">Members</a></div></td>
            <td width="11%"><div align="center" class="style7"><a href="msgs.php">Messages</a></div></td>
            <td width="12%"><div align="center"><a href="payments.php">Payments</a></div></td>
            <td width="11%"><div align="center" class="style7"><a href="logout.php">Logout</a></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="25%" height="173" valign="middle">
		  <div align="center"><a  href="../index.php"></a><a href="menu.php"><img src="images/menu.jpg" width="128" height="128" border="0" /></a><br/>
          <a href="../index.php"></a>          </div></td>
        <td width="25%" valign="middle">
		  <div align="center"><a href="uni_add.php"></a><a href="promo.php"><img src="images/promo.jpg" alt="app" width="128" height="128" border="0"></a><br/>
          <a class="button" href="uni_add.php"></a>          </div></td>
        <td width="25%" valign="middle">
         
          <div align="center">
          <a href="news.php"><img src="images/news.jpg" alt="appreq" width="128" height="128" border="0"></a><br/>
          <a href="uni_list.php"></a>          </div></td>
        <td width="25%" valign="middle"><div align="center"><a href="reviews.php"><img src="images/reviews.jpg" alt="appreq" width="141" height="128" border="0"></a></div></td>
      </tr>
      <tr>
        <td height="25" valign="middle" bgcolor="#FF9900"><div align="center"><a href="menu.php">Menu</a></div></td>
        <td width="25%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="promo.php">Promotions</a><a class="button" href="uni_add.php"></a></div></td>
        <td width="25%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="news.php">News</a><a href="uni_list.php"></a></div></td>
        <td width="25%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="reviews.php">Reviews</a></div></td>
      </tr>
      <tr>
        <td height="207" valign="middle">
          <div align="center"><a class="button" href="userlist.php"></a>          <a href="orders.php"><img src="images/orders.jpg" alt="t" width="150" height="150" border="0"></a></div></td>
        <td valign="middle" class="style2">
		  <div align="center"><a href="members.php"><img src="images/Users.png" width="128" height="128" border="0"></a><br/>
          <a class="button" href="logout.php"></a>          </div></td>
        <td width="25%" valign="middle">
        <div align="center">
        <div align="center"><a href="logout.php"></a><a href="msgs.php"><img src="images/msg.jpg" width="130" height="130" border="0"></a><br/>
          
           <a class="button" href="approve_comments.php"></a></div></td>
        <td width="25%" valign="middle"><div align="center"><a href="payments.php"><img src="images/pay.jpg" alt="pay" width="130" height="130" border="0"></a></div></td>
      </tr>
      <tr>
        <td height="25" valign="middle" bgcolor="#FF9900"><div align="center"><a href="orders.php">Orders</a></div></td>
        <td valign="middle" bgcolor="#FF9900" class="style2"><div align="center"><a href="members.php">Members </a></div></td>
        <td width="25%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="msgs.php">Messages</a></div></td>
        <td width="25%" valign="middle" bgcolor="#FF9900"><div align="center"><a href="payments.php">Payments</a></div></td>
      </tr>
      <tr>
        <td height="30" colspan="4" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>Ordering Restaurant Catering Online</p>
          <p> All Rights Reserved &copy; 2015 Ordering Restaurant Catering Online </p>
        </div></td>
      </tr>
</table>
</body>
</html>
