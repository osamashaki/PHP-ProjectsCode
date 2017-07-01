<?php 
session_start();
if ($_SESSION["logged"] == "YES")
{
	$uid = $_SESSION["userid"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Court Booking</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">
    <style type="text/css">
<!--
.style3 {	font-size: large;
	font-weight: bold;
}
-->
    </style>
</head>

<body>
<div align="center">
<?
/*
	if(isset($_POST["book"])) 
	{
	?>
		<script type="text/javascript"> 
		alert("You cannot CANCLE your booking after you press Continue");
		alert("Press Contiue to Pay or Cancle to exit."); 
		
	  </script>
	<? 
		$mid = $_SESSION["userid"] ; 
		$bookingdate = $_POST["timestamp"];
		$starttime = $_POST["startt"];
		$endtime = $_POST["endt"];
		
		//for date
		$now = date('m/d/Y'); 
	    $bdate = strtotime( $bookingdate );
		$myDate = date( 'm/d/Y', $bdate ); 
		
		//for start time
		$stime = strtotime( $starttime );
		$mytime1 = date( 'H:i', $stime ); 
		
		//for end time
		$etime = strtotime( $endtime );
		$mytime2 = date( 'H:i', $etime );
		
		$timenow = date('H:i');   
		$hs = $mytime2 - $mytime1; 
		
		$check = mysql_fetch_array(mysql_query("select id from booking where booking_date = '$bookingdate' and start_time = '$starttime' and end_time = '$endtime' and court = 'Small Futsal Court' "));
		$ch = $check[0];
		 
		if(!empty($ch))
		{
			echo "<h4 style='color:#FF0000'>This time is booked! Please choose another time</h4>";
		}
		else
		{
			if($myDate < $now )
			{
				echo "<h4 style='color:#FF0000'>Invalid date</h4>";
			}
			else if($myDate == $now  && $mytime < $timenow || $mytime2 < $mytime1)
			{
				echo "<h4 style='color:#FF0000'>Invalid Time</h4>";
			}
			
			else if(empty($bookingdate) || empty($starttime) || empty($endtime))
			{
				echo "<h4 style='color:#FF0000'>Please choose date and time!</h4>";
			}
			
			
			else
			{	
				$total = 50.00 * $hs; 
				include("connected.php");
				mysql_query("INSERT INTO booking VALUES ('','$now','$bookingdate','$starttime','$endtime','$mid','Small Futsal Court')");
				echo "<h4 style='color:#FF0000'>Your booking has been sent successfully. <br/>Pleae Pay ". $total ." RM to confirm your booking, Thank you.</h4>";
				echo '<a href="pay.php?t='.$total.'">Continue</a>&nbsp;'; 
				echo '<a href="" onClick="javascript:window.close()";>Cancle</a>';
			
			}
		}	
	}
	*/
	?>
</div>
<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajaxDiv');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
 var timestamp = document.getElementById('timestamp').value;
 var city = document.getElementById('city').value;
 var startt = document.getElementById('startt').value;
 var endt = document.getElementById('endt').value;
 
 var queryString = "?timestamp=" + timestamp ;
 queryString +=  "&city=" + city + "&startt=" + startt + "&endt=" + endt;
 ajaxRequest.open("GET", "getdataajax.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
//-->
</script>
<form action="" method="post" name="form1">
<p>&nbsp;</p>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#333333">
 
  <tr>
    <td colspan="3" class="style1"><span class="style3"> Futsal Court:</span></td>
  </tr>
  <tr>
    <td class="style1"><p><strong>Please choose date and time: </strong></p>      </td>
    <td class="style1">&nbsp;</td>
    <td width="50%" rowspan="6" class="style1"><div align="left"><img src="images/ftball.jpg" alt="v" width="400" height="212"></div></td>
    </tr>
  <tr>
    <td width="20%"><span class="style1">Choose Date:</span></td>
    <td width="30%"><input name="timestamp" id="timestamp" type="text" size="9" readonly />
      <script language="JavaScript">
			new tcal ({
				// form name
				'formname': 'form1',
				// input name
				'controlname': 'timestamp'
			});

			</script>	&nbsp;</td>
    </tr>
  <tr>
    <td height="23" class="style1">Choose Area:</td>
    <td><select name="city" style="width:123" id="city">
<option value="Any">Any</option>
<option value="Kajang">Kajang</option>
<option value="Bangi">Bangi</option>
<option value="Serdang">Serdang</option>
<option value="KL">KL</option>
    </select></td>
  </tr>
  <tr>
    <td height="23" class="style1">Start time: </td>
    <td><select name="startt" id="startt" style="width:123">
<option value="10:00">10:00</option>
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <option value="20:00">20:00</option>
    </select></td>
  </tr>
  <tr>
    <td height="23" class="style1">End time: </td>
    <td><select name="endt" id="endt" style="width:123">
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="15:00">15:00</option>
      <option value="16:00">16:00</option>
      <option value="17:00">17:00</option>
      <option value="18:00">18:00</option>
      <option value="19:00">19:00</option>
      <option value="20:00">20:00</option>
      <option value="21:00">21:00</option>
      <option value="22:00">22:00</option>
    </select></td>
  </tr>
  <tr>
    <td height="23" class="style1">Price/hour:</td>
    <td class="style1">100 RM /hour </td>
    </tr>
  <tr>
    <td height="23" class="style1">&nbsp;</td>
    <td colspan="2"><input name="show" type="button" id="show" onclick='ajaxFunction()' value="Show available playgrounds" style="background-color:#F90" /></td>
  </tr>
</table>
</form>
<br />
<div id='ajaxDiv'>Your results will be displayed here</div>
<center>

<?
/*
if(isset($_POST["show"]))
{	
		include("connected.php");
		$mid = $_SESSION["userid"] ; 
		$bookingdate = $_POST["timestamp"];
		$city = $_POST["city"];
		$start_time = $_POST["startt"];
		$end_time = $_POST["endt"];
		$now = date("m/d/Y");  
		
	    //$bdate = strtotime($bookingdate);
		$myDate = date("m/d/Y", strtotime($bookingdate) ); 
		
		//$weekdate = date('m/d/Y', strtotime($now . ' + 7 day'));
				
		
		if(empty($bookingdate))
		{
			echo "<h4 style='color:#FF0000'>Please choose a date!</h4>";
		}
		else if($myDate <= $now )
		{
			echo "<h4 style='color:#FF0000'>Invalid date, Please choose a valid date.</h4>";
		}
		
		else
		{	
			
			
			//$data = mysql_fetch_array(mysql_query("select name from member where id = '$member_id' "));
				//$name = $data[0]; 
				
			$query = "SELECT * FROM playground where city = '$city' and id NOT IN (select p_id from reservation where start_time = '$start_time' and end_time= '$end_time' and date_ = '$myDate') ";
			$result = mysql_query($query);
			$rows = mysql_num_rows($result);
			if($rows == 0)
			{
				echo "<br/><h4 style='color:#FF0000'>No available playground, please choose another date, city or time</h4>";
			}
			else
			{	
				echo "<center><h2>Available Playgrounds</h2></center>";
				echo '<table cellspacing="15" cellspacing="3" border="2">';
				echo "<tr>";
				echo "<td>Playgoround Id</td>";
				echo "<td>Playgoround name</td>";
				echo "<td>City</td>";
				echo "<td></td>";
				echo "</tr>";
				
				while($rowApps1 = mysql_fetch_object($result))
				{
					$id    		 	 = $rowApps1->id;
					$pname    	     = $rowApps1->playground_name;
					$city        	 = $rowApps1->city;
				
	 		?>
            
            <tr>
              <td><div align="left"><? echo $id;?></div></td>
              <td><div align="left"><? echo $pname;?></div></td>
              <td><div align="left"><? echo $city;?></div></td>
              <td><div align="left"><? echo "<a href='book.php?d=$myDate&st=$start_time&et=$end_time&uid=$uid&city=$city&pid=$id'>Book</a>";?></div></td>
            </tr>
				<?
                }//end while
			}//else end
                ?>
            
 
<?			
		}//else end	
?>
</center>
</body>
</html>
<?
}// is set show end
*/

}// if login end

else
{
	echo "<center><h4 style='color:#FF0000'>Sorry! You have to Login first, if you don't have an account please register. Thanks</h4><br/>";
	echo( "<a href=\"#\" onclick=\"window.close(); return false\">Close Window</a></center>");  
}


?>