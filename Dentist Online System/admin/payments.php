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
.style6 {color: #FF0000; font-weight: bold; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="814" height="171" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">SITE ADMIN </div></td>
      </tr>
	   <tr>
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a> - <a href="payments.php">Payments</a> </td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="7" class="page_heading"><div align="left" class="style4">Payments List: </div></td>
            </tr>
            <tr>
              <td width="18%" class="style4"><div align="left">Date</div></td>
              <td width="15%" class="style4"><div align="left">Amount</div></td>
              <td width="14%" class="style4"><div align="left">Details</div></td>
              <td width="19%" class="style4"><div align="left">Commennt</div></td>
              <td width="18%" class="style4"><div align="left">Patient</div></td>
              <td width="10%" class="style4"><div align="left"></div></td>
              <td width="6%" class="style4">&nbsp;</td>
            </tr>
            <?
	   	$query = "SELECT * FROM payments";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$date_    	     = $rowApps1->date_;
			$amount			 = $rowApps1->amount;
			$details    	 = $rowApps1->details;
			$comment    	 = $rowApps1->comment;
			$pid    	 	 = $rowApps1->pid;
			
			$data = mysql_fetch_array(mysql_query("SELECT name FROM patient where id = '$pid'"));
			$name = $data[0];
							
	 ?>
            <tr>
              <td><div align="left"><? echo $date_;?></div></td>
              <td><div align="left"><? echo $amount. " RM";?></div></td>
              <td><div align="left"><? echo $details;?></div></td>
			  <td><div align="left"><? echo $comment;?></div></td>
              <td><div align="left"><? echo $name;?></div></td>
			  <td><div align="left"></div></td>
              <td>&nbsp;</td>
            </tr>
            <?
}
?>
            <tr>
              <td colspan="7"><p>&nbsp;</p>
                  <p align="center"><a href="#"></a></p></td>
            </tr>
          </table>
          <p><a href="home.php">Home</a></p>
          
<table width="73%" border="1" align="center" cellpadding="3" cellspacing="3">
  <tr>
    <td colspan="2"><div align="left"><span class="style6">Statistics:</span></div></td>
    </tr>
  <tr>
    <td><div align="left"><span class="style3">Total number of patients: </span></div></td>
    <td><div align="left"><span class="style3">
      <?
		$data = mysql_fetch_array( mysql_query("SELECT Count(id) FROM patient"));
		$n = $data[0];
		echo "$n Patients\n";
	?>
    </span></div></td>
  </tr>
  <tr>
    <td><div align="left"><span class="style3">Total number of Appointments: </span></div></td>
    <td><div align="left"><span class="style3">
      <?
		$result2 = mysql_query("SELECT * FROM appointment");
		$num_rows = mysql_num_rows($result2);
		echo "$num_rows Appointments\n";
	?>	
    </span></div></td>
  </tr>
 


  <tr>
    <td class="style3"><div align="left">Total Payments: </div></td>
    <td class="style3"><div align="left">
      <?
		$data = mysql_fetch_array( mysql_query("SELECT SUM(amount) FROM payments"));
		$sum = $data[0];
		echo "$sum RM\n";
	?>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" class="style3"><div align="left">
      <p class="style6">Number of Treatments by Type: </p>
      </div>      </td>
    </tr>
  <tr>
    <td colspan="2" valign="middle">
	
	<table width="97%" border="2" align="center" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
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
    </table>      
      <p class="style3">&nbsp; </p></td>
  </tr>
</table>

          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>Dental Online System</p>
          <p> All Rights Reserved &copy; 2012 DOS SYSTEM </p>
        </div></td>
      </tr>
</table>
</body>
</html>
