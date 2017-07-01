<? 
session_start();
$id=$_SESSION["userid"];
if(!(isset($_SESSION['logged'])))
{
    header('Location: signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HalfMoon Restaurant Catering Service</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">
	<script src="php_calendar/scripts.js" type="text/javascript"></script>
	<script src="jquery-1.10.2.min.js"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->

<style type="text/css">
<!--
.style5 {color: #FF0000}
.style7 {color: #FF0000; font-weight: bold; }
.style9 {font-weight: bold}
.style10 {color: #404040}
-->
</style>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>

<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=170,width=550,left=400,top=300,resizable=no,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>


<script type="text/javascript">
<!--	
	function ch_empty()
	{
		
		var u1 = document.getElementById("date");
		var u2 = document.getElementById("nopeople");
		
		if(u1.value=="" )
		{
			alert("Please enter a date");
			u1.style.backgroundColor='#cccccc';
			u1.focus();
			u1.select();
			return false;
		}
		else if(u2.value=="" )
		{
			alert("Please enter number of people");
			u2.style.backgroundColor='#cccccc';
			u2.focus();
			u2.select();
			return false;
		}
		
		else
		{
			return true;
		}
	
	}
</script>	
	
<script type="text/javascript">	
	function ch1()
	{ 
	 var n1=document.getElementById("nopeople");
	 if (n1.value < 10 || n1.value > 200)
	{  
		alert("Minimum number of people is 10 and Maximum is 200");
	    n1.focus();
		n1.select();
		return false;
	 }
    return true;	
	}
	
	function ch2()
	{ 
		var n2=document.getElementById("nopeople");
		if (n2.value.search(/\D/) !=-1)
		{  
			alert("Please enter numbers only for Number of people"); ///to do
			n2.style.backgroundColor='#cccccc';
			n2.focus();
			n2.select();
			return false;
		 }
	
		return true;	
	}
	function ch3()
	{ 
		var n3=document.getElementById("crew");
		if (n3.value.search(/\D/) !=-1)
		{  
			alert("Please enter numbers only for Crew"); ///to do
			n3.style.backgroundColor='#cccccc';
			n3.focus();
			n3.select();
			return false;
		 }
	
		return true;	
	}
	

</script>

<script>
function change()
{
	if(document.getElementById('lunch').checked)
	{ 
		
		document.getElementById('lunchdiv').style.display = 'block';
		document.getElementById('dinnerdiv').style.display = 'none';
		
	}
	else if(document.getElementById('dinner').checked)
	{ 
		
		document.getElementById('lunchdiv').style.display = 'none';
		document.getElementById('dinnerdiv').style.display = 'block';
	}
}
</script>
</head>
<body id="page4">
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
			<li><a href="profile.php?id=<? echo $id ?>" title="">My Profile</a></li>
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
        <h2>HalfMoon Restaurant Catering Service</h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content"> 
   <div class="main"> 
    <div class="container"> 
     
	 
            <p align="left"><strong>Catering Order :</strong> </p>
            <table width="100%" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="267"><div align="center"></div></td>
                <td width="899">
          
		   <?
			include("connected.php");
			
			if(isset($_POST["submit"])) 
			{
				
				$orderdate = trim($_POST["date"]); 
				$meal = $_POST["meal"];  
				$nopeople = $_POST["nopeople"];  
				$place = $_POST["place"]; 
				$wedding = $_POST["wedding"];
				$photographer = $_POST["photographer"]; 
				$furniture = $_POST["furniture"];  
				$crew = $_POST["crew"];  
				
				$data = mysql_fetch_array(mysql_query("select MAX(order_id) from orders")); 
				$seq = $data[0]+1; 
				$seq = C1000.$seq; //echo $seq;
				
				
				if ($meal == "Breakfast") 
				{
				
					$mealprice = 35; 
					
				} 
				else if($meal == "Lunch") 
				{
				
				   $mealprice = 65;
				   
				}
				else if($meal == "Dinner")
				{
					$mealprice = 50;
				}
				if (isset($_POST['wedding'])) {
				
					$wedding = 1500; //echo $wedding;
				} 
				else 
				{
				
				   $wedding = 0;
				}
				
				if (isset($_POST['photographer'])) {
				
					$photographer = 2500; //echo $photographer;
				} 
				else 
				{
				
				   $photographer = 0; //echo $photographer;
				}
				
				//$GLOBALS['meals'] = '';
				if(!empty($_POST['food']))
				{
					$selected_food = $_POST['food'];
				
				foreach($selected_food as $key => $id)
				{
					
					$query = "select meal_name  from menu WHERE meal_id = '$id' ";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$name    = $rowApps1->meal_name;
						
						
					}			
					$meals = $meals. ", ". $name; //echo $meals;
				}
					//echo $sum;	
				}					
				//for date
				$now = date("m/d/Y");  // 
				$newdate = date("m/d/Y",strtotime($now . ' + 5 day')); //8
				$newdate2 = strtotime($newdate); 
				$bookdate = strtotime($orderdate); //10
				
						
				//$difference = abs($newdate2 - $bookdate); 
				//$days = floor($difference/(60*60*24));
				//echo 'Days '.$days;
				if(empty($orderdate))
				{
					echo "<center><font color='red'>Please choose a date</font></center><br/>";
					echo "<center><font color='red'>You must book 5 days before your event.</font><br/>"; 
					echo "<a href='javascript:history.back(1)'>Back</a></center>";
					
				}
				
				if( $bookdate <= $newdate2)
				{
					echo "<center><font color='red'>Please choose a valid date</font></center><br/>";
					echo "<center><font color='red'>You must book 5 days before your event.</font><br/><br/><br/>"; 
					echo "<a href='javascript:history.back(1)'>Back</a></center>";
				}
				else
				{
					$cost = ($nopeople *  $mealprice) + ($crew * 40) + $furniture + $wedding +  $photographer;
					$service = ($cost * 0.06);
					$sub = $cost + $service;
					
					echo "<center><table border=1 cellpadding='3' cellspacing='3'>";
					echo "<tr><td>Orders Details:<br/></td></tr>";
					echo "<tr><td><font color='red'><b>Orders #:</td><td>".$seq."<b></font></td></tr>";
					echo "<tr><td><font color='red'><b>Total price: </td><td> RM ".$cost."</b></font><br/></td></tr>";
					echo "<tr><td><font color='red'><b>Service charge 6%: "."&nbsp;&nbsp; ". "</td><td>  RM ".$service."</b></font><br/></td></tr>";
					echo "<tr><td><font color='red'><b>Sub Total: </td><td> RM ".$sub."</b></font><br/></td></tr>";
					
					echo "</table>";
					echo "<p align='left'><font color='red'>Cancelation Notice:
					
					<ul>
					<li><p align='left'>1. We will charge you 50% of the total cost if you cancel your catering before 3 days of the event.</p></li>
					<li><p align='left'>2. We will charge you 100% of the total cost if you cancel your catering before 24 hours of the event.</p></li>
					</ul>
					 </font></p><br/><br/>";
				    echo "<a href='payment.php?press=1&orderdate=$orderdate&meal=$meal&nopeople=$nopeople&place=$place&wedding=$wedding&photographer=$photographer&furniture=$furniture&crew=$crew&food=$meals&uid=".$_SESSION['userid']."&cost=$sub&seq=$seq'>Continue</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<a href='javascript:history.back(1)'>Back</a>";
				
				}
				
				
				
			}
			else
			{
			?>
               </td>
              </tr>
            </table>
           
            <form name="order-form" action="order.php" method="post">
              <table width="1096" border="1" align="center" cellpadding="2" cellspacing="2">
			      <tr>
			        <td width="200" height="41" valign="top"><table width="200" border="1" cellpadding="7" cellspacing="7">
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
			        <td width="876" colspan="3"><table width="100%" height="1105" border="1" align="center" cellpadding="4" cellspacing="4">
			          <tr>
			            <td colspan="3">&nbsp;</td>
		              </tr>
						
			          <tr>
			            <td width="34%"><div align="left"><strong>Select a Date: </strong></div></td>
			            <td colspan="2"><p>
			              <input name="date" id="date"  type="text"/>
			              <a href="javascript:viewcalendar()">Select</a></p>
			              <p class="style7">You must book 5 days before your event.</p></td>
		              </tr>
			          <tr>
			            <td><div align="left">
			              <p><strong>Select Meal: </strong></p>
			              </div></td>
			            <td colspan="2"><p align="left">
			              
			                <input name="meal" type="radio" id= "lunch"  onClick="change()" value="Lunch" checked="checked"/>
			                Launch (from 12:00 AM to 5:00 PM) <span class="style7">*RM 65 per person </span></p>
			                <p align="left">
			                <input id= "dinner" name="meal" type="radio" value="Dinner" onClick="change()" />
			                Dinner (from 5:00 PM to 10:00 PM) <span class="style7">*RM 50 per person</span> </p></td>
		              </tr>
			          <tr>
			            <td height="44"><div align="left"><strong>Number of people: </strong></div></td>
			            <td colspan="2"><input name="nopeople" id ="nopeople" type="text" size="5" maxlength="3"  onChange="ch1();" onMouseOut="ch1();" /> 
			              <span class="style7">If the number of people is more than 200,  please contact us</span> <a href="contact.php"><strong>here</strong></a> </td>
		              </tr>
			          <tr>
			            <td height="42"><div align="left"><strong>Choose your catering place: </strong></div></td>
		                <td width="12%"><input name="place" type="radio" id="place" value="Inside" checked /> 
                        <strong>Inside the restaurant	                      </strong> </td>
			            <td width="54%">
			              <input name="place" type="radio" id="radio" value="Outside" />
			              <strong>At your place</strong>						  <span><a href="JavaScript:newPopup('updateaddress.php');">Update my Address</a></span>					    </td>
			          </tr>
			          <tr>
			            <td height="46" colspan="3"><p><strong>What  are the services you like to have?</strong> (Optional):</p>						</td>
		              </tr>
			          
			          <tr>
			            <td height="82"><div align="left"><strong><img src="images/table.jpg" alt="image" width="90" height="70"> Furniture:(5 chairs per table)</strong> </div></td>
			            <td colspan="2"><select name="furniture" >
			              <option value="0" selected>Select</option>
			              <option value="20">2 Tables - RM 20</option>
			              <option value="30">3 Table - RM 30</option>
			              <option value="50">5 Tables - RM 50</option>
			              <option value="80">10 Tables - RM 80 </option>
			              <option value="150">20 Tables - RM 150 </option>
			              <option value="250">40 Tables - 250</option>
			              </select> 
			              <span class="style7">Please select the number of tables if you need any. </span></td>
		              </tr>
			          <tr>
			            <td height="50"><div align="left"><strong><img src="images/crew.jpg" alt="image" width="90" height="70"> Service crew:</strong><strong> </strong></div></td>
			            <td colspan="2"><input name="crew" type="text" id ="crew" onChange="ch3();" value="0" size="5" maxlength="3" />
			              <strong class="style7"> Any additional waiters we charge RM 40 esch.</strong></td>
		              </tr>
			          <tr>
			            <td><div align="left">
			              <p>&nbsp;</p>
			              <p><strong>Please choose Food from the menu:</strong> (<span class="style5">Minimum 3 Meals</span>) </p>
			            </div></td>
			            <td colspan="2">&nbsp;</td>
		              </tr>
			          <tr>
			            <td colspan="3"><p>
                                              
                    <?
					
			   		$dir = "admin/thumbs/";
					include("connected.php");
			    	
					$Lquery = "SELECT * FROM menu WHERE type='L' order by disporder";
			    	$Dquery = "SELECT * FROM menu WHERE type='D' order by disporder";
					

					$Bresult = mysql_query($Bquery);
					$Lresult = mysql_query($Lquery);
					$Dresult = mysql_query($Dquery);
					?>
					
					
				
				<div id="lunchdiv" style="display:block">  
				<table width="763" border="2" align="center" cellpadding="2" cellspacing="3">
				<?
					
					while($rowApps1 = mysql_fetch_object($Lresult))
					{
						$id    		 	 = $rowApps1->meal_id;
						$price    	     = $rowApps1->meal_price;
						$name			 = $rowApps1->meal_name;
						$description     = $rowApps1->meal_desc;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?> 
			 
                                                <tr>
                                                  <td width="32" rowspan="3" valign="middle"><div align="center">
                                                    <input type="checkbox" name="food[]" value="<? echo $id; ?>" />
                                                    
                                                    
                                                  </div></td>
                                                  <td width="142" rowspan="3"><div align="center"><? echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =140 height=130>"; ?></div>
                                                  <div align="center"></div></td>
                                                  <td width="489" height="38" valign="top"><div align="left"><strong> Meal: <? echo $name; ?> </strong></div></td>
                                                  <td width="62" valign="top"><div align="center">
                                                  <select name ="num">
                                                    <option>--</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                  <option>10</option>

                                                  </select>
                                                  
                                                  
                                                  </div></td>
                                                </tr>
                                                <tr>
                                                  <td height="38" valign="top"><div align="left"><strong>Meal Description: </strong><strong><? echo $description ?></strong></div></td>
                                                  <td valign="top"><div align="center"></div></td>
                                                </tr>
                                                
                                                <tr>
                                                  <td height="38" valign="top">&nbsp;</td>
                                                  <td valign="top">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td colspan="4"><div align="center">---------------------------------------------</div></td>
                                                </tr>
                                                <tr>
                                                  <td colspan="4"><div align="left"></div></td>
                                                </tr>
                                                <?
				}
				?>
				</table>
				</div>
				
				<div id="dinnerdiv" style="display:none">
				<table width="763" border="2" align="center" cellpadding="2" cellspacing="3">
				<?
					
					while($rowApps1 = mysql_fetch_object($Dresult))
					{
						$id    		 	 = $rowApps1->meal_id;
						$price    	     = $rowApps1->meal_price;
						$name			 = $rowApps1->meal_name;
						$description     = $rowApps1->meal_desc;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?> 
                                                <tr>
                                                  <td width="32" rowspan="3" valign="middle"><div align="center">
                                                    <input type="checkbox" name="food[]" value="<? echo $id; ?>" />
                                                    
                                                    
                                                  </div></td>
                                                  <td width="142" rowspan="3"><div align="center"><? echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =140 height=130>"; ?></div>
                                                  <div align="center"></div></td>
                                                  <td width="489" height="38" valign="top"><div align="left"><strong> Meal: <? echo $name; ?> </strong></div></td>
                                                  <td width="62" valign="top"><div align="center">
                                                  <select name ="num">
                                                  <option>--</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                  <option>10</option>

                                                  </select>
                                                  
                                                  </div></td>
                                                </tr>
                                                <tr>
                                                  <td height="38" valign="top"><div align="left"><strong>Meal Description: </strong><strong><? echo $description ?></strong></div></td>
                                                  <td valign="top"><div align="center"></div></td>
                                                </tr>
                                                
                                                <tr>
                                                  <td height="38" valign="top">&nbsp;</td>
                                                  <td valign="top">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td colspan="4"><div align="center">---------------------------------------------</div></td>
                                                </tr>
                                                <tr>
                                                  <td colspan="4"><div align="left"></div></td>
                                                </tr>
                                                <?
				}
				?>
				</table>
				</div>
                <h3> Drinks:</h3>
                <table width="764" border="2" align="center" cellpadding="2" cellspacing="2">
			    <?
			   		$dir = "admin/thumbs/";
					include("connected.php");
			    	$query = "SELECT * FROM menu where type='dr' order by disporder asc";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->meal_id;
						$price    	     = $rowApps1->meal_price;
						$name			 = $rowApps1->meal_name;
						$description     = $rowApps1->meal_desc;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?> 
			    <tr>
                  <td width="221" rowspan="2"><div align="center">
				   <? 
				  if($photo_path == "")
				  {
				  	echo "<img src='images/magnify.png' width =160 height=150>"; 
				  }
				  else
				  {
				  	echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =160 height=150>"; 
				  }
				?>
				  </div></td>
                  <td height="42" valign="top"><strong><span class="style2">Meal:</span> <? echo $name; ?> </strong>
                  </td>
                  <td></td>
                   <td><select name ="num">
                                                  <option>--</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                  <option>10</option>

                                                  </select></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span class="style2"><strong>Meal Description:</strong></span><strong> <span class="extra-wrap"><? echo $description ?> </span></strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="365"><div align="right"></div></td>
                  <td width="470"></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left" class="style2"><hr width="55%" color="#FF6600" /></div></td>
                </tr>
				 <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
				<?
				}
				?>
            </table> 
            
             <h3> Desert:</h3>
                <table width="764" border="2" align="center" cellpadding="2" cellspacing="2">
			    <?
			   		$dir = "admin/thumbs/";
					include("connected.php");
			    	$query = "SELECT * FROM menu where type='des' order by disporder asc";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->meal_id;
						$price    	     = $rowApps1->meal_price;
						$name			 = $rowApps1->meal_name;
						$description     = $rowApps1->meal_desc;
						$photo_path		 = $rowApps1->photo_path;
						
			
			   
			   ?> 
			    <tr>
                  <td width="221" rowspan="2"><div align="center">
				   <? 
				  if($photo_path == "")
				  {
				  	echo "<img src='images/magnify.png' width =160 height=150>"; 
				  }
				  else
				  {
				  	echo "<img src=\"" . $dir . $photo_path . "\"border=\"0\" alt=\"\" width =160 height=150>"; 
				  }
				?>
				  </div></td>
                  <td height="42" valign="top"><strong><span class="style2">Meal:</span> <? echo $name; ?> </strong>
                  </td>
                  <td></td>
                   <td><select name ="num">
                                                  <option>--</option>
                                                  <option>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                  <option>5</option>
                                                  <option>10</option>

                                                  </select></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span class="style2"><strong>Meal Description:</strong></span><strong> <span class="extra-wrap"><? echo $description ?> </span></strong></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="365"><div align="right"></div></td>
                  <td width="470"></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="left" class="style2"><hr width="55%" color="#FF6600" /></div></td>
                </tr>
				 <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
				<?
				}
				?>
            </table>                               
			              <div align="center">
			                <input name="submit" type="submit" class="button-1" value="  Submit  "/>
		                  </div></td>
		              </tr>
		            </table></td>
		        </tr>
			      
			        <tr>
			          <td height="36" colspan="4"><div align="center"></div></td>
		            </tr>
		      </table>
			    </form>
				<?
				}
				
				?>
			
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
<script type="text/javascript">
document.forms[0].onsubmit=ch_empty;

document.getElementById("nopeople").onchange=ch1;
document.getElementById("nopeople").onchange=ch2;
document.getElementById("nopeople").onchange=ch3;

</script>