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
.style4 {
	color: #FF6600;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style6 {color: #FF0000; font-weight: bold; }
.style7 {font-size: 14; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="814" height="138" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td width="100%" height="66" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2"><a href="home.php">SITE ADMIN </a></div></td>
      </tr>
	   <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0">
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
        </table>
          <div align="center" class="style3">
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="7" class="page_heading"><div align="left" class="style4">Payments List: </div></td>
            </tr>
            <tr>
              <td width="18%" class="style4"><div align="left">ID</div></td>
              <td width="15%" class="style4"><div align="left">Date</div></td>
              <td width="14%" class="style4"><div align="left">Amount</div></td>
              <td width="19%" class="style4"><div align="left">Order id </div></td>
              <td width="18%" class="style4"><div align="left"></div></td>
              <td width="10%" class="style4"><div align="left"></div></td>
              <td width="6%" class="style4">&nbsp;</td>
            </tr>
            <?
	   	$query = "SELECT * FROM payment";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$date_    	     = $rowApps1->date_;
			$amount			 = $rowApps1->cost;
			$orderid    	 = $rowApps1->orderid;
			
			
			
							
	 ?>
            <tr>
              <td><div align="left"><? echo $id;?></div></td>
              <td><div align="left"><? echo $date_;?></div></td>
              <td><div align="left"><? echo RM." ".$amount;?></div></td>
			  <td><div align="left"><? echo C1000.$orderid;?></div></td>
              <td><div align="left"></div></td>
			  <td><div align="left"></div></td>
              <td>&nbsp;</td>
            </tr>
            <?
}
?>
            <tr>
              <td colspan="7"><p>&nbsp;</p>
                  <p align="center"><a href="#"></a></p></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
      <tr>
        <td height="30" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>Ordering Restaurant Catering Online</p>
          <p> All Rights Reserved &copy; 2015 Ordering Restaurant Catering Online </p>
        </div></td>
      </tr>
</table>
</body>
</html>
