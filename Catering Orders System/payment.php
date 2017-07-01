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
.style7 {color: #000000}
.style8 {color: #FFFFFF}
-->
</style>
<script type="text/javascript">
<!--	
	function ch_empty()
	{
		
		var u1 = document.getElementById("num");
		var u2 = document.getElementById("name");
		var u3 = document.getElementById("num2");
		
		if(u1.value=="" )
		{
			alert("Please enter card number");
			u1.style.backgroundColor='#cccccc';
			u1.focus();
			u1.select();
			return false;
		}
		else if(u2.value=="" )
		{
			alert("Please enter your name");
			u2.style.backgroundColor='#cccccc';
			u2.focus();
			u2.select();
			return false;
		}
		else if(u3.value=="" )
		{
			alert("Please enter your security code");
			u3.style.backgroundColor='#cccccc';
			u3.focus();
			u3.select();
			return false;
		}
		
		else
		{
			return true;
		}
	
	}

	function ch1()
	{ 
		var n1=document.getElementById("num");
		if (n1.value.search(/\D/) !=-1)
		{  
			alert("Please enter numbers only"); ///to do
			n1.style.backgroundColor='#cccccc';
			n1.focus();
			n1.select();
			return false;
		 }
	
		return true;	
	}
	function ch2()
	{ 
		var n2=document.getElementById("num2");
		if (n2.value.search(/\D/) !=-1)
		{  
			alert("Please enter numbers only"); ///to do
			n2.style.backgroundColor='#cccccc';
			n2.focus();
			n2.select();
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
                <td width="274"><div align="center"></div></td>
                <td width="892">
          
		   <?
		   include("connected.php");
		   		
				$press = $_GET['press'];
				
				if($press == 1)
				{
					
					$orderdate = $_GET['orderdate']; 
					$meal = $_GET["meal"];  
					$nopeople = $_GET["nopeople"];  
					$place = $_GET["place"]; 
					
					$wedding = $_GET["wedding"];
					$photographer = $_GET["photographer"]; 
					$furniture = $_GET["furniture"];  
					$crew = $_GET["crew"]; 
					$food = $_GET['food']; 
					$uid = $_GET['uid']; 
					$cost = $_GET['cost'];
					$seq = $_GET['seq'];
					
					mysql_query("INSERT INTO orders VALUES('','$orderdate','$meal','$nopeople','$place','$wedding','$photographer','$furniture','$crew','$food','$cost','$uid','$seq','Waiting')") or die(mysql_error()) ; 
					echo "<p align ='left'><font color ='red'><b>Your Order has been added successfully, please enter your details for payment:</b></font></p>";
				
				}
				
				if($press == 2)
				{
					
					$orderdate = $_GET['orderdate'];  
					$place = $_GET["place"]; 
					$furniture = $_GET["furniture"];  
					$crew = $_GET["crew"]; 
					$uid = $_SESSION["userid"]; 
					$cost =  $_GET["price"]; 
					
					$data = mysql_fetch_array(mysql_query("select id from promotion")); 
					$pid = $data[0]; 
					
					mysql_query("INSERT INTO promotionorders VALUES('','$orderdate','$place','$furniture','$crew','$pid','$cost','$uid')") or die(mysql_error()) ; 
					echo "<p align ='left'><font color ='red'><b>Your Promotion Order has been added successfully, please enter your details for payment:</b></font></p>";
				
				}
			
			
			if(isset($_POST["pay"])) 
			{
			$num = $_POST["num"];
			$name = $_POST["name"];
			$month = $_POST["month"];
			$year = $_POST["year"];
			$num2 = $_POST["num2"];
			
			if(empty($num) || empty($name) || empty($num2))
			{
				echo "<center><font color='red'><b>Please ennter your credit card details.</b></font></center>";
				
			}
			else
			{
				
				include("connected.php");
				$date_ = date('d-m-Y'); 
				$data = mysql_fetch_array(mysql_query("select MAX(order_id) from orders")); 
				$o_id = $data[0];
				mysql_query("INSERT INTO payment VALUES('','$date_','$cost','$o_id')");			
				echo "<center><font color='red'><b>Your payment has done successfully</b></font></center>";
				$where = "myorders.php?id=$id"; 
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"3;URL=$where\">"; 
				
				
				
			}
							
				
				
			}
			else
			{
			?>               </td>
              </tr>
            </table>
           
            <form name="payment-form" action="payment.php?cost=<? echo $cost ?>" method="post">
              <table border="1" align="center" cellpadding="2" cellspacing="2">
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
			        <td width="876" colspan="3"><table width="100%" border="1" align="center" cellpadding="4" cellspacing="4">
			          <tr>
			            <td width="100%" valign="top"><table width="721" border="2" align="center" cellpadding="6" cellspacing="6">
                          <tr>
                            <td width="204">Credit card detail<strong>s:</strong></td>
                            <td width="474">&nbsp;</td>
                          </tr>
                          <tr>
                            <td><span class="style7">Card number:</span></td>
                            <td><input name="num" type="text" id="num" size="20" maxlength="16" /></td>
                          </tr>
                          <tr>
                            <td><span class="style7">Cardholder name printed on card</span></td>
                            <td><input name="name" type="text" id="name" size="20" /></td>
                          </tr>
                          <tr>
                            <td><span class="style7">Expiry date:</span></td>
                            <td><select name="mnth" style="width:123">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              &nbsp;
                            </select>
                              <select name="yeer" style="width:123">
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                              </select></td>
                          </tr>
                          <tr>
                            <td><span class="style7">Security code (CVC):</span></td>
                            <td><span class="style8">
                              <input name="num2" type="text" id="num2" size="7" maxlength="3" />
                            </span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><span class="style7">Press the Pay button to continue.</span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><input name="pay" type="submit" id="pay" value="   Pay   " />
&nbsp;&nbsp;
<input name="cancel" type="button" id="cancel" onClick="window.location.href='order.php'" value="Cancle" /> </td>
                          </tr>
                          <tr>
                            <td height="257" colspan="2"><div align="left">
                              <p>&nbsp;</p>
                              <p align="left"><img src="images/creditcards.jpg" alt="p" width="154" height="127" />  <img src="images/pay.jpg" alt="p" width="154" height="127" />  <img src="images/FE_DA_CreditCards.jpg" alt="p" width="154" height="127" /></p>
                            </div></td>
                          </tr>
                        </table></td>
		              </tr>
		            </table></td>
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

document.getElementById("num").onchange=ch1;
document.getElementById("num2").onchange=ch2;
</script>