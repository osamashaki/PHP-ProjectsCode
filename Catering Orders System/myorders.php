<? 

session_start();
$id = $_SESSION["userid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<style type="text/css">
<!--
.style5 {color: #FF6600;
	font-weight: bold;
}
.style6 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body id="page6">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.php">HalfMoon</a></h1>
        <nav>
          <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="promotion.php">Promotion </a></li>
            <li><a href="news.php">Latest News </a></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
			<?php if($_SESSION["logged"]=="") { ?>
			<li><a href="signup.php" title="">Sign Up</a></li>
			<li><a href="signin.php" title="">Sign In</a></li>
			
			<?php } ?>
			<?php if($_SESSION["logged"]=="YES") { ?>
			<li><a class="active" href="profile.php?id=<? echo $id ?>" title="">My Profile</a></li>
			<li><a href="logout.php" title="">Logout</a></li>
			<?php } ?>
            
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="row-bot">
    <div class="row-bot-bg">
      <div class="main">
        <h2>HalfMoon Restaurant Catering Service<span></span></h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div align="center">
          <form action="signin.php" method="post">
            <p align="left"><strong>My Orders: </strong></p>
            <p align="left"></p>
            <table width="1096" height="370" border="1" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td width="200" height="39"><table width="200" border="1" cellpadding="7" cellspacing="7">
                  <tr>
                    <td><a href="profile.php?id=<? echo $id;?>">My Profile</a></td>
                  </tr>
                  <tr>
                    <td><a href="order.php?id=<? echo $id;?>">Order</a></td>
                  </tr>
                  <tr>
                    <td><a href="myorders.php?id=<? echo $id;?>">My Orders</a></td>
                  </tr>
                  <tr>
                    <td><a href="logout.php">Logout</a></td>
                  </tr>
                </table></td>
                <td width="876" rowspan="6" valign="top"><table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
                 <?
				  	include("connected.php");
					$query = "SELECT * FROM orders where user_id ='$id' order by order_id desc";
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
						$status 			 = $rowApps1->status;
						
						
						
										
				 ?>
				  <tr>
				    <td class="style5"><div align="justify">Order #:</div></td>
				    <td><div align="justify"><? echo $seq;?></div></td>
				    <td class="style5">&nbsp;</td>
				    <td >&nbsp;</td>
				    <td>&nbsp;</td>
			      </tr>
				  <tr>
                    <td class="style5"><div align="justify">Order date: </div></td>
                    <td><div align="justify"><? echo $order_date;?></div></td>
                    <td class="style5">&nbsp;</td>
                    <td >&nbsp;</td>
                    <td><div align="center" class="style6">Cancel</div></td>
                  </tr>
                  <tr>
                    <td class="style5"><div align="justify">No. people: </div></td>
                    <td><div align="justify"><? echo $nopeople;?></div></td>
                    <td class="style5">&nbsp;</td>
                    <td class="style5">&nbsp;</td>
                    <td width="18%" rowspan="4" class="style5"><div align="center">
                      
                      <? 
					$now = date("m/d/Y"); // 16
					$datenow = strtotime($now); 
					$newdate3 = date("m/d/Y",strtotime($order_date . ' - 3 day')); //13
					$newdate4 = strtotime($newdate3); 
					
					
					if ($datenow < $newdate4)
					{
					echo '<a href="myorders.php?oid='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; 
					}
					else
					{
						echo "<a href='contact.php'>Contact us</a>";
					}
					?>
                    </div><div align="left"></div></td>
                  </tr>
                  <tr>
                    <td class="style5"><div align="justify">Meal:</div></td>
                    <td ><div align="justify"><? echo $meal;?></div></td>
                    <td class="style5">&nbsp;</td>
                    <td >&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style5"><div align="justify">Place:</div></td>
                    <td ><div align="justify"><? echo $place;?></div></td>
                    <td class="style5">&nbsp;</td>
                    <td >&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="15%" class="style5"><div align="justify">Wedding:</div></td>
                    <td width="26%" ><div align="justify">
                      <? if($wedding == "1500") echo "Yes"; else echo "No.";?>
                    </div></td>
                    <td width="22%" class="style5"><div align="left"></div></td>
                    <td width="19%" ><div align="left"></div></td>
                  </tr>
                 
                  <tr>
                    <td class="style5"><div align="justify">Photographer:</div></td>
                    <td><div align="justify">
                      <? if($photographer == "2500") echo "Yes"; else echo "No" ;?>
                    </div></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style5">Furniture:</td>
                    <td colspan="3"><? echo $furniture;?></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="style5">Crew:</span></td>
                    <td colspan="3"><? echo $crew;?></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><div align="left"><span class="style5">Food</span>:</div></td>
                    <td colspan="3"><div align="left"><? echo $food;?></div>                      <div align="left"></div>                      <div align="left"></div>                      <div align="left"></div></td>
                    <td><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td><span class="style5">Total Cost: </span></td>
                    <td colspan="3">RM <? echo $cost;?></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style5">Order status: </td>
                    <td colspan="3"><? echo $status;?></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3"><div align="center"><hr width="80%" color="#FF9900"/>  </div></td>
                    <td>&nbsp;</td>
                  </tr>
                  <?
}
$mid = $_GET['oid'];
if($mid != '')
{
		 $del = "DELETE FROM orders WHERE order_id='$mid'";
		 mysql_query($del);
		
	     $where = "myorders.php?id=$id"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
                  <tr>
                    <td colspan="8"></td>
                  </tr>
                </table>
                <p><strong>Promotion Orders:</strong></p>
                <table width="100%" border="1" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
                  <tr>
                    <td width="13%" class="style5"><div align="left">Date</div></td>
                    <td width="11%" class="style5"><div align="left">Place</div></td>
                    <td width="15%" class="style5"><div align="left">Funiture</div></td>
                    <td width="9%" class="style5"><div align="left">Crew</div></td>
                    <td width="12%" class="style5">Promotion id </td>
                    <td width="18%" class="style5">Cost
                      <div align="left"></div></td>
                    <td width="13%" class="style5">User id </td>
                    <td width="9%" class="style5"><div align="center"><span class="style6">Cancel</span></div></td>
                  </tr>
                  <?
				  $id=$_SESSION["userid"];
	   	$query = "SELECT * FROM promotionorders where uid = '$id' order by id desc";
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
			  
			  
			   ?>
                    </div></td>
                    <td><div align="left"><? echo $crew;?></div></td>
                    <td><div align="left"><? echo $promotionid;?></div></td>
                    <td><div align="left"><? echo $cost;?></div></td>
                    <td><div align="left"><? echo $uid;?></div></td>
                    <td><div align="center">
					
					
					<? 
					$now = date("m/d/Y"); // 16
					$datenow = strtotime($now); 
					$newdate3 = date("m/d/Y",strtotime($date_ . ' - 3 day')); //13
					$newdate4 = strtotime($newdate3); 
					
					
					if ($datenow < $newdate4)
					{
						echo '<a href="myorders.php?proid='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; 
						
					
					}
					else
					{
					
						echo "<a href='contact.php'>Contact us</a>";
						
					}
					
					
					?></div></td>
                  </tr>
                  <?
}

$proid = $_GET['proid'];
if($proid != '')
{
		 $del = "DELETE FROM promotionorders WHERE id='$proid'";
		 mysql_query($del);
		
	     $where = "myorders.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
                  <tr>
                    <td colspan="10">&nbsp;</td>
                  </tr>
                </table>                
                <p>&nbsp; </p></td>
              </tr>
              <tr>
                <td height="35">&nbsp;</td>
              </tr>
              <tr>
                <td height="32">&nbsp;</td>
              </tr>
              <tr>
                <td height="39">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><a href="logout.php"></a></td>
              </tr>
            </table>
            <p align="left">&nbsp;</p>
            <p>&nbsp;</p>
          </form>
    </div>
          
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="aligncenter">
      <p align="center"><span>Copyright &copy; 2015 Ordering Restaurant Catering Online </span></p>
      <p align="center"><span>All Rights Reserved</span></p>
    </div>
  </div>
</footer>
</body>
</html>
