<?
include("../connected.php");
?>
<style type="text/css">
<!--
.style3 {color: #006699; font-weight: bold; }
-->
</style>

<table width="50%" border="1" align="center" cellpadding="3" cellspacing="2">
  <tr>
    <td><span class="style3">Statistics:</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style3">Total number of patients: </span></td>
    <td><span class="style3">
      <?
		$data = mysql_fetch_array( mysql_query("SELECT Count(id) FROM patient"));
		$n = $data[0];
		echo "$n Patients\n";
	?>
    </span></td>
  </tr>
  <tr>
    <td><span class="style3">Total number of Appointments: </span></td>
    <td><span class="style3">
	<?
		$result2 = mysql_query("SELECT * FROM appointment");
		$num_rows = mysql_num_rows($result2);
		echo "$num_rows Appointments\n";
	?>	
	</span></td>
  </tr>
 


  <tr>
    <td class="style3">Total Payments: </td>
    <td class="style3"><?
		$data = mysql_fetch_array( mysql_query("SELECT SUM(amount) FROM payments"));
		$sum = $data[0];
		echo "$sum RM\n";
	?></td>
  </tr>
  <tr>
    <td class="style3">Number of Treatments by Type: </td>
    <td class="style3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="2" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
      <tr>
        <td width="31%" class="style3">Month:</td>
        <td width="36%" class="style3">Treatment</td>
        <td width="33%" class="style3">Number</td>
      </tr>
      <?
		$query2 = "SELECT date_ ,treatment, COUNT(id) FROM appointment group by treatment ";
		$result2 = mysql_query($query2);
		while($row2 = mysql_fetch_array($result2))
		{
						
			$mo = $row2['date_'];
			$y = substr($mo,6,4); 
			
			$m = substr($mo,0,2);
			$month = "";
			if($m == '01') $month = "January"; 
			else if($m  == '02')  $month = "February";
			else if($m  == '03')  $month = "March";
			else if($m  == '04')  $month = "April";
			else if($m  == '05')  $month = "May";
			else if($m  == '06')  $month = "June";
			else if($m  == '07')  $month = "July";
			else if($m  == '08')  $month = "August";
			else if($m  == '09')  $month = "September";
			else if($m  == '10')  $month = "October";
			else if($m  == '11')  $month = "November";
			else if($m  == '12')  $month = "December";
		?>
      <tr>
        <td><? echo "$month ($y) "; ?></td>
        <td><? echo $row2['treatment'];?></td>
        <td><? echo $row2['COUNT(id)'];  ?></td>
      </tr>
      <?	
		}
		?>
    </table>      <span class="style3">
     
    </span></td>
  </tr>
</table>
