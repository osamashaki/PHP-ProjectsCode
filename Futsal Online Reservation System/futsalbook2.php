<?php 
session_start();
if ($_SESSION["logged"] == "YES")
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Basketball Court Booking</title>
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
	if(isset($_POST["book"])) 
	{
	
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
				$total = 100 * $hs; 
				include("connected.php");
				mysql_query("INSERT INTO booking VALUES ('','$now','$bookingdate','$starttime','$endtime','$mid','Football Court')");
				echo "<h4 style='color:#FF0000'>Your booking has been sent successfully. <br/>Pleae Pay ". $total ." RM to confirm your booking, Thank you.</h4>";
				?>
			<script type="text/javascript"> 
			alert("You cannot CANCLE your booking after you press Continue");
			alert("Press Contiue to Pay or Cancle to exit."); 
			
		  </script>
		<? 
				echo '<a href="pay.php?t='.$total.'">Continue</a>&nbsp;'; 
				echo '<a href="" onClick="javascript:window.close()";>Cancle</a>';
			
			}
		}
	}	
	?>
</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="form1">
<p>&nbsp;</p>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="3" bgcolor="#333333">
 
  <tr>
    <td colspan="3" class="style1"><span class="style3">Football Futsal Court:</span></td>
  </tr>
  <tr>
    <td colspan="3" class="style1"><p><strong>Please choose date and time: </strong></p>      </td>
    </tr>
  <tr>
    <td width="17%"><span class="style1">Booking Date:</span></td>
    <td width="30%"><input name="timestamp" type="text" size="9" />
      <script language="JavaScript">
			new tcal ({
				// form name
				'formname': 'form1',
				// input name
				'controlname': 'timestamp'
			});

			</script>	&nbsp;
	  <input name="show" type="submit" id="show" value="Show available time" /></td>
    <td width="53%" rowspan="4"><div align="left"><img src="images/ftball.jpg" alt="v" width="401" height="215"></div></td>
  </tr>
  <tr>
    <td height="23" class="style1">Start time: </td>
    <td><select name="startt" style="width:123">
      <option value="1">Fullybook</option>
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
    <td><select name="endt" style="width:123">
      <option value="11:00">11:00</option>
      <option value="12:00">12:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option>15:00</option>
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
    <td colspan="2"> <input name="book" type="submit" id="book" value="Book" /> &nbsp;&nbsp;
      <input type="button" name="cancel32" value="Cancle" onclick="javascript:window.close();" /></td>
  </tr>
</table>
</form>
<br />
<center>
<?
if(isset($_POST["show"]))
	{	
		include("connected.php");
		$mid = $_SESSION["userid"] ; 
		$bookingdate = $_POST["timestamp"];
		$now = date("m/d/Y");  
		
	    $bdate = strtotime($bookingdate);
		$myDate = date("m/d/Y", $bdate ); 
		
		$weekdate = date('m/d/Y', strtotime($now . ' + 7 day'));
		$query = mysql_fetch_array(mysql_query("select booking_date from booking where booking_date='$bookingdate' and start_time='1' and court='Football Court'"));
				$d = $query[0];
		
		if(empty($bookingdate))
		{
			echo "<h4 style='color:#FF0000'>Please choose a date!</h4>";
		}
		else if($myDate <= $now )
		{
			echo "<h4 style='color:#FF0000'>Invalid date</h4>";
		}
		
		else if($myDate > $weekdate )
		{
			echo "<h4 style='color:#FF0000'>You can't book a court, you can book only during 7 days from today !</h4>";
		}
				
		else if($d !='')
		{
			echo "<h4 style='color:#FF0000'>Sorry! This day is fully booked. Please choose another day.</h4>";
		}		
		else
		{
			
			?><center><h2>Available Times:</h2></center>
            <table width="587">
			<tr>
			  <td width="114"><div align="left">Date</div></td>
			  <td width="131"><div align="left">From</div></td>
			  <td width="157"><div align="left">To</div></td>
			  <td width="157"><div align="left"></div></td>
			  </tr>
			<tr>
              <td><div align="left"><? echo $bookingdate; ?></div></td>
              <td><div align="left">10:00</div></td>
			  <td><div align="left">11:00</div></td>
			  <td><div align="left">
		<? 
		$data = mysql_fetch_array(mysql_query(" select id from booking where booking_date='$bookingdate' and start_time='10:00' and end_time = '11:00' and court='Football Court' "));					
	 	$id = $data[0];
		if($id =='')
		{
			$from='10:00';
			$to = '11:00';
			$c = 'Football Court'; 
			echo "<a href='book2.php?book=1&datt=".$bookingdate."&from=$from&end=$to&c=$c'>Book</a>";
		} 
		else
		{
			echo "Not Available";
		}
		?>
		</div></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><div align="left">11:00</div></td>
			  <td><div align="left">12:00</div></td>
			  <td>
			    <div align="left">
			      <? 
		$data = mysql_fetch_array(mysql_query(" select id from booking where booking_date='$bookingdate' and start_time='11:00' and end_time = '12:00'and court='Football Court' "));					
	 	$id = $data[0];
		if($id =='')
		{	
			$from='11:00';
			$to = '12:00';
			$c = 'Football Court'; 
			echo "<a href='book2.php?book=1&datt=".$bookingdate."&from=$from&end=$to&c=$c'>Book</a>";
			
						
		} 
		else
		{
			echo "Not Available";
		}
		?>
	            </div></td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><div align="left">12:00</div></td>
			  <td><div align="left">13:00</div></td>
			  <td><div align="left">
			    <? 
		$data = mysql_fetch_array(mysql_query(" select id from booking where booking_date='$bookingdate' and start_time='12:00' and end_time = '13:00' and court='Football Court'"));					
	 	$id = $data[0];
		if($id =='')
		{
			$from='12:00';
			$to = '13:00';
			$c = 'Football Court'; 
			echo "<a href='book2.php?book=1&datt=".$bookingdate."&from=$from&end=$to&c=$c'>Book</a>";
		} 
		else
		{
			echo "Not Available";
		}
		?>
			  </div></td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><div align="left">13:00</div></td>
			  <td><div align="left">14:00</div></td>
			  <td><div align="left">
                <? 
		$data = mysql_fetch_array(mysql_query(" select id from booking where booking_date='$bookingdate' and start_time='13:00' and end_time = '14:00' and court='Football Court' "));					
	 	$id = $data[0];
		if($id =="")
		{
			$from='13:00';
			$to = '14:00';
			$c = 'Football Court'; 
			echo "<a href='book2.php?book=1&datt=".$bookingdate."&from=$from&end=$to&c=$c'>Book</a>";
		} 
		else
		{
			echo "Not Available";
		}
		?>
</div></td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><div align="left">14:00</div></td>
			  <td><div align="left">15:00</div></td>
			  <td><div align="left">
                <? 
		$data = mysql_fetch_array(mysql_query(" select id from booking where booking_date='$bookingdate' and start_time='14:00' and end_time = '15:00' and court='Football Court'"));					
	 	$id = $data[0];
		if($id =="")
		{
			$from='14:00';
			$to = '15:00';
			$c = 'Football Court'; 
			echo "<a href='book2.php?book=1&datt=".$bookingdate."&from=$from&end=$to&c=$c'>Book</a>";
		} 
		else
		{
			echo "Not Available";
		}
		?>
</div></td>
			  </tr>
  </table>
			
			<?
			
		}	
	}	
?>
</center>
</body>
</html>
<?
}
else
{
	echo "<center><h4 style='color:#FF0000'>Sorry! You have to Login first, if you don't have an account please register. Thanks</h4><br/>";
	echo( "<a href=\"#\" onclick=\"window.close(); return false\">Close Window</a></center>");  
}   
?>