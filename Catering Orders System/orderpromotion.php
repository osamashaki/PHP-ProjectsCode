<? 
session_start();
$id=$_SESSION["userid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ordering Restaurant Catering Online</title>
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
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style7 {color: #FF0000; font-weight: bold; }
-->
</style>
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=150,width=550,left=400,top=300,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=no')
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

</head>
<body id="page4">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.php">Catering<span>.com</span></a></h1>
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
        <h2>Ordering Restaurant Catering Online<span></span></h2>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content"> 
   <div class="main"> 
    <div class="container"> 
     
	 
            <p class="p1 style1">Catering Order :	        </p>
            <table width="100%" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="267"><div align="center"></div></td>
                <td width="899">
           <center> 
		   <?
		    
	  $press = $_GET["press"]; 
	  if(isset($_GET['press']))
	  {
		  if(!(isset($_SESSION['logged'])))
			{
				$where = "signin.php";
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">"; 
			}
			else 
			{	
				$price = $_GET["price"];
				$where = "orderpromotion.php?id=$id&price=$price";
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">"; 
			}
	  }
	  
			include("connected.php");
			$price = $_GET["price"];
			
			
			if(isset($_POST["submit"])) 
			{
				$orderdate = trim($_POST["date"]); 
				$place = $_POST["place"]; 
				$furniture = $_POST["furniture"];  
				$crew = $_POST["crew"];  
				
				 
								
								
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
					echo "<center><font color='red'>You must book 5 days before your event.</font></center><br/>"; 
					echo "<a href='javascript:history.back(1)'>Back</a>";
					
				}
				
				if( $bookdate <= $newdate2)
				{
					echo "<center><font color='red'>Please choose a valid date</font></center><br/>";
					echo "<center><font color='red'>You must book 5 days before your event.</font></center><br/>"; 
					echo "<a href='javascript:history.back(1)'>Back</a>";
				}
				else
				{
					$cost = $price + ($crew * 40) + $furniture;
					$service = ($cost * 0.06);
					$sub = $cost + $service;
					
					
					echo "<center><font color='red'><b>Total price = RM ".$cost."</b></font></center><br/>";
					echo "<center><font color='red'><b>Service charge 6% = RM ".$service."</b></font></center><br/>";
					echo "<center><font color='red'><b>Sub Total = RM ".$sub."</b></font></center><br/>";
					
					
					echo "<p align='left'><font color='red'>Cancelation Notice: 
					<ul>
					<li><p align='left'>1. We will charge you 50% of the total cost if you cancel your catering before 3 days of the event.</p></li>
					<li><p align='left'>2. We will charge you 100% of the total cost if you cancel your catering before 24 hours of the event.</p></li>
					</ul>
					</font></p><br/><br/>";
				    echo "<a href='payment.php?press=2&price=$cost&orderdate=$orderdate&place=$place&furniture=$furniture&crew=$crew'>Continue</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<a href='javascript:history.back(1)'>Back</a>";
				
				}
				
			}
			else
			{
			?>
               </td>
              </tr>
            </table>
           
            <form name="order-form" action="orderpromotion.php?price=<? echo $price; ?>" method="post">
              <table width="1096" border="1" align="center" cellpadding="2" cellspacing="2">
			      <tr>
			        <td width="218" height="41" valign="top"><table width="200" border="1" cellpadding="7" cellspacing="7">
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
			        <td width="858" colspan="3"><table width="100%" height="343" border="1" align="center" cellpadding="4" cellspacing="4">
			          
						
			          <tr>
			            <td width="26%" height="70"><div align="left"><strong>Select a Date: </strong></div></td>
			            <td width="74%"><p>
			              <input name="date" id="date"  type="text"/>
			              <a href="javascript:viewcalendar()">Select</a></p>
			              <p class="style7">You must book 5 days before your event. </p></td>
		              </tr>
			          <tr>
                        <td height="42"><div align="left"><strong>Choose your catering place: </strong></div></td>
			            <td><input name="place" type="radio" id="place" value="Inside" checked />
                          <strong>Inside the restaurant
                          <input name="place" type="radio" id="place" value="Outside" />
                          At your place</strong> <span><a href="JavaScript:newPopup('updateaddress.php');">Update my Address</a></span></td>
		              </tr>
			          <tr>
			            <td height="43" colspan="2"><div align="left"><strong>What  are the services you like to have?</strong> (Optional):</div></td>
		              </tr>
			          <tr>
			            <td height="58"><div align="left"><strong>Furniture:(5 chairs per table)</strong> </div></td>
			            <td><select name="furniture" >
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
			            <td height="50"><div align="left"><strong>Service crew:</strong><strong> </strong></div></td>
			            <td><input name="crew" type="text" id ="crew" onChange="ch3();" value="0" size="5" maxlength="3" />
			              <strong class="style7">2 Waiters are free if you need. </strong></td>
		              </tr>
			          <tr>
			            <td height="50">&nbsp;</td>
			            <td><input name="submit" type="submit" class="button-1" value="  Submit  "/></td>
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