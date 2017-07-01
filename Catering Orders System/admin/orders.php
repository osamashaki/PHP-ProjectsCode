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
.style4 {font-size: 18px; color: #0066FF; font-weight: bold; }
.style5 {color: #FF6600;
	font-weight: bold;
}
.style7 {font-size: 14; }
-->
</style>
</head>

<body>
<table width="814" height="625" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
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
        <td width="90%" height="26" valign="middle" bgcolor="#FFFFFF" class="style4">Orders:</td>
        <td width="10%" valign="middle" bgcolor="#FFFFFF"><div align="center"><a href="logout.php"></a></div></td>
      </tr>
      <tr>
        <td height="8" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center"><hr align="center" width="100%" color="#FF0000"/>
        </div></td>
      </tr>
      <tr>
	  <?
	  $staid = $_GET['staid']; //echo $staid;
	  if(isset($_POST['update']))
	  {
		$query = "SELECT * FROM orders";
		$result = mysql_query($query);
		while($row = mysql_fetch_array($result))
		{
			$id = $row['order_id'];
			$status = "statusopt".$id; //echo $status;
			$value = $_POST[$status]; //echo $value;
			
			mysql_query("UPDATE orders SET status ='$value' WHERE order_id='$id'");	
			
	   }
		   $where = "orders.php"; 
		   echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";
		}
	  
	  ?>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF">
		<?
				  	include("../connected.php");
					$query = "SELECT * FROM orders";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->order_id;
						$order_date    	 = $rowApps1->order_date;
						$meal        	 = $rowApps1->meal;
						$nopeople    	 = $rowApps1->nopeople;
						$place       	 = $rowApps1->place;
						$wedding     	 = $rowApps1->wedding;
						$photographer	 = $rowApps1->photographer;
						$furniture	     = $rowApps1->furniture;
						$crew       	 = $rowApps1->crew;
						$food       	 = $rowApps1->food;
						$cost       	 = $rowApps1->cost;
						$seq 			 = $rowApps1->seq;
						$user_id		 = $rowApps1->user_id;
						$status			 = $rowApps1->status;
						
						
						///$data = mysql_fetch_array(mysql_query("SELECT name FROM customer where id = '$cus_id'"));
						$data = mysql_fetch_array(mysql_query("select first_name from user where id =$user_id  "));
						$name = $data[0];			
				 ?>
				 
		<table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
          
           <form action="orders.php?staid=<? echo $id ?>" method="post">
		    <tr>
            <td colspan="12"><div align="center">
              <input name="update" type="submit" value="Update" />
            </div></td>
          </tr>
		   <tr>
		 
            <td class="style5">Order #:</td>
            <td><? echo $seq;?></td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5"><div align="center"></div></td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="style5">Order date: </td>
            <td><? echo $order_date;?></td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="style5">User id </td>
            <td><? echo $user_id;?></td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
          </tr>
          <tr>
            <td class="style5">User name:</td>
            <td><? echo $name;?></td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
          </tr>
          <tr>
            <td class="style5">No. people:</td>
            <td><? echo $nopeople;?></td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td class="style5"><div align="center"></div></td>
            <td class="style5"><div align="center">
              <p>
			  <?
			  $data = mysql_fetch_array(mysql_query("select status from orders where order_id = '$id'"));
			  $st = $data[0];
			  ?>
                <select name="statusopt<? echo $id; ?>" id="statusopt">
				  <option value="<? echo $st; ?>" selected="selected"><? echo $st; ?></option>
                  <option value="Waiting">Waiting</option>
                  <option value="In the Kitchen">In the Kitchen</option>
                  <option value="Delivered">Delivered</option>
                </select>
              </p>
              </div></td>
            <td class="style5"><div align="center"><? echo '<a href="orders.php?oid='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></div></td>
          </tr>
          <tr>
            <td class="style5">Meal:</td>
            <td ><? echo $meal;?></td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
          </tr>
          <tr>
            <td class="style5">Place:</td>
            <td ><? echo $place;?></td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
            <td >&nbsp;</td>
            <td class="style5">&nbsp;</td>
          </tr>
          <tr>
            <td width="12%" class="style5"><div align="left">Wedding:</div></td>
            <td width="10%" ><div align="left">
              <? if($wedding == "1500") echo "Yes"; else echo "No.";?>
            </div></td>
            <td width="14%" class="style5"><div align="left"></div></td>
            <td width="8%" ><div align="left"></div></td>
            <td width="11%" class="style5"><div align="left"></div></td>
            <td width="14%" >&nbsp;</td>
            <td width="14%" class="style5">&nbsp;</td>
            <td width="12%" >&nbsp;</td>
            <td width="5%" class="style5"><div align="left"></div></td>
          </tr>
          <tr>
            <td class="style5">Photographer:</td>
            <td><? if($photographer == "2500") echo "Yes"; else echo "No" ;?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="style5">Furniture:</td>
            <td colspan="5"><? 
				
				if($furniture == 20)
					echo "2 Tables";
				else if($furniture == 30)
					echo "3 Tables";
				else if($furniture == 50)
					echo "5 Tables";
				else if($furniture == 80)
					echo "10 Tables";	
				else if($furniture == 150)
					echo "20 Tables";
				else if($furniture == 250)
					echo "40 Tables";
					else if($furniture == 0)
					echo "No need";	
				else echo "";					
			
			
			?></td>
            <td class="style5">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span class="style5">Crew:</span></td>
            <td colspan="5"><? echo $crew;?></td>
            <td class="style5">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="left"><span class="style5">Food:</span></div></td>
            <td colspan="5"><div align="left"><? echo $food;?></div>
                <div align="left"></div>
              <div align="left"></div>
              <div align="left"></div></td>
            <td class="style5">&nbsp;</td>
            <td>&nbsp;</td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td class="style5">Order status: </td>
            <td colspan="2"><? echo $status;?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span class="style5">Total Cost:</span></td>
            <td colspan="2">RM <? echo $cost;?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="9"><div align="center">---------------------------------------------------------------------------</div></td>
          </tr>
          <?
}
$mid = $_GET['oid'];
if($mid != '')
{
		 $del = "DELETE FROM orders WHERE order_id='$mid'";
		 mysql_query($del);
		
	     $where = "orders.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
         
		  </form>
        </table>
		
		</td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><p>&nbsp;</p>
          <p class="style4">Promotion Orders: </p>
          <table width="90%" border="0" align="center" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td width="13%" class="style5"><div align="left">Date</div></td>
              <td width="11%" class="style5"><div align="left">Place</div></td>
              <td width="15%" class="style5"><div align="left">Funiture</div></td>
              <td width="9%" class="style5"><div align="left">Crew</div></td>
              <td width="12%" class="style5">Promotion id </td>
              <td width="18%" class="style5">Cost
                <div align="left"></div></td>
              <td width="19%" class="style5">User id </td>
              <td width="3%" class="style5">&nbsp;</td>
            </tr>
            <?
	   	$query = "SELECT * FROM promotionorders";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$date_       	 = $rowApps1->date_;
			$place       	 = $rowApps1->place;
			$furniture	     = $rowApps1->furniture;
			$crew       	 = $rowApps1->crew;
			$promotionid     = $rowApps1->promotionid;
			$cost       	 = $rowApps1->cost;
			$uid			 = $rowApps1->uid;
			
							
	 ?>
            <tr>
              <td><div align="left"><? echo $date_;?></div></td>
              <td><div align="left"><? echo $place;?></div></td>
              <td><div align="left">
			  
			  <? 
			  	
				if($furniture == 20)
					echo "2 Tables";
				else if($furniture == 30)
					echo "3 Tables";
				else if($furniture == 50)
					echo "5 Tables";
				else if($furniture == 80)
					echo "10 Tables";	
				else if($furniture == 150)
					echo "20 Tables";
				else if($furniture == 250)
					echo "40 Tables";
				else if($furniture == 0)
					echo "No need";	
				else echo "";	
			  
			  
			   ?></div></td>
              <td><div align="left"><? echo $crew;?></div></td>
              <td><div align="left"><? echo $promotionid;?></div></td>
			  <td><div align="left"><? echo $cost;?></div></td>
			   <td><div align="left"><? echo $uid;?></div></td>
			  <td><? echo '<a href="orders.php?proid='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></td>
            </tr>
            <?
}
$mid = $_GET['id'];
if($mid != '')
{
		 $del = "DELETE FROM orders WHERE order_id='$mid'";
		 mysql_query($del);
		
	     $where = "orders.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
$proid = $_GET['proid'];
if($proid != '')
{
		 $del = "DELETE FROM promotionorders WHERE id='$proid'";
		 mysql_query($del);
		
	     $where = "orders.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}

?>
            <tr>
              <td colspan="10">&nbsp;</td>
            </tr>
          </table>
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
