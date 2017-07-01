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
.style6 {font-size: 18px; color: #0066FF; font-weight: bold; }
.style7 {font-size: 14; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="814" height="425" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2"><a href="home.php">SYSTEM ADMIN</a> </div></td>
      </tr>
	   <tr>
	     <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0">
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
	     <td width="92%" height="26" valign="middle" bgcolor="#FFFFFF"><span class="style6">Messages:</span> </td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php"></a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            
            <tr>
              <td width="11%" class="style4"><div align="left">User id</div></td>
              <td width="13%" class="style4"><div align="left">Name</div></td>
              <td width="27%" class="style4"><div align="left">Email</div></td>
              <td width="21%" class="style4"><div align="left">Text</div></td>
              <td width="14%" class="style4">Date</td>
              <td width="7%" class="style4"><div align="left"></div></td>
              <td width="7%" class="style4"><div align="left"></div></td>
            </tr>
            <?
	   	$query = "SELECT * FROM feedback";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$name    	 	 = $rowApps1->name;
			$email    	 	 = $rowApps1->email;
			$text		     = $rowApps1->text;
			$date_    	     = $rowApps1->date_;			
			
				
		   
							
	 ?>
            <tr>
              <td><div align="left"><? echo $id;?></div></td>
              <td><div align="left"><? echo $name;?></div></td>
              <td><div align="left"><? echo $email;?></div></td>
			  <td><div align="left"><? echo $text;?></div></td>
              <td><? echo $date_;?></td>
              
              <td><div align="center"><? echo '<a href="msgs.php?id='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?>
			  
			 </div></td>
		    </tr>
        <?   
}
$mid = $_GET['id'];
if($mid != '')
{
		 $del = "DELETE FROM feedback WHERE id='$mid'";
		 mysql_query($del);
	     $where = "msgs.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
            <tr>
              <td colspan="7">&nbsp;</td>
            </tr>
          </table>
          <p><a href="home.php"></a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          </div></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>Ordering Restaurant Catering Online</p>
          <p> All Rights Reserved &copy; 2015 Ordering Restaurant Catering Online </p>
        </div></td>
      </tr>
</table>
</body>
</html>
