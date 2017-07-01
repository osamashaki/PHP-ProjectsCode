<?php
session_start();

if(!(isset($_SESSION['admin_logged_in'])))
{
    header('Location: index.php');
}
include("../connected.php");

if(isset($_POST['submit']))
{
		$query = "SELECT * FROM menu ";
		$result = mysql_query($query);
		while($row = mysql_fetch_array($result))
		{
			$id = $row['meal_id'];
			$name = "disporder".$id;
			$value = $_POST[$name];
			mysql_query("UPDATE menu SET disporder='$value' WHERE meal_id='$id'");	
		}
		$where = "menu.php"; 
        echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">";
}

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
.style4 {font-size: 18px; color: #0066FF; font-weight: bold; }
.style5 {color: #FF6600;
	font-weight: bold;
}
.style7 {font-size: 14; }
-->
</style>
</head>

<body>
<table width="814" height="602" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2"><a href="home.php">SYSTEM ADMIN </a></div>          </td>
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
        <td width="90%" height="26" valign="middle" bgcolor="#FFFFFF" class="style4">Menu: <a href="addmenu.php">Add New Meal </a></td>
        <td width="10%" valign="middle" bgcolor="#FFFFFF"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="8" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center"><hr align="center" width="100%" color="#FF0000"/>
        </div></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF">
		<form action="menu.php" method="post">
		<table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
          <tr>
            <td width="12%" class="style5"><div align="left">Meal Id</div></td>
            <td width="20%" class="style5"><div align="left">Name</div></td>
            <td width="11%" class="style5">Type</td>
            <td width="35%" class="style5">Description</td>
            <td width="7%" class="style5"><div align="center">Order</div></td>
            <td colspan="2" class="style5"><div align="left"></div></td>
            <td width="9%" class="style5">&nbsp;</td>
          </tr>
          <?
	   	$query = "SELECT * FROM menu order by type, disporder";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->meal_id;
			$price    	     = $rowApps1->meal_price;
			$name			 = $rowApps1->meal_name;
			$description     = $rowApps1->meal_desc;
			$photo_path      = $rowApps1->photo_path;
			$disporder		 = $rowApps1->disporder;
			$type			= $rowApps1->type;
			
			
			
							
	 ?>
          <tr>
            <td><div align="left"><? echo $id;?></div></td>
            <td><div align="left"><? echo $name;?></div></td>
            <td><? echo $type;?></td>
            <td><div align="left"><? echo $description;?></div></td>
            <td><div align="center"><input name="disporder<? echo $id;?>" type="text" value="<? echo $disporder; ?>" size="3" maxlength="2" /> 
            </div></td>
            <td width="3%"><div align="center"><? echo '<a href="editmenu.php?id='.$id.'"><img src="images/edit.png" alt="ed" width="32" height="32" border="0"></a>'; ?></div></td>
            <td width="3%"><div align="left"><? echo '<a href="menu.php?id='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></div></td>
          </tr>
          <?
}

$mid = $_GET['id'];
if($mid != '')
{
		 $dir = "thumbs/".$photo_path;
		 $del = "DELETE FROM menu WHERE meal_id='$mid'";
		 mysql_query($del);
		 echo "<center><h4 style='color:#FF0000'>Meal has been deleted successfully. Thank you.</h4></center>";
		 unlink($dir);
		 	
	     $where = "menu.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";
}
		
		
		
?>
          <tr>
            <td colspan="10"><p>&nbsp;</p>
			  <div align="center">
			    <input type="submit" name="submit" value="Set Order" />
			  </div>		    </td>
          </tr>
        </table>
		</form>		</td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <div align="center" class="style3">
          <p>Ordering Restaurant Catering Online</p>
          <p> All Rights Reserved &copy; 2015 Ordering Restaurant Catering Online </p>
          </div></td>
      </tr>
</table>
</body>
</html>
