<?php
session_start();

if(!(isset($_SESSION['admin_logged_in'])))
{
    header('Location: index.php');
}
include("../connected.php");
$pid = $_GET["id"];
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
.style5 {color: #FF6600}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="814" height="171" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">SITE ADMIN </div></td>
      </tr>
	   <tr>
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a> - <a href="patients.php">Patient Details </a> </td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="8" class="page_heading"><div align="left"><span class="style4">Appoitments List: </span><span class="style5"><a href="addapp.php?id=<? echo $pid;?>">Add New Appoitment</a></span></div></td>
            </tr>
            <tr>
              <td width="19%" class="style4"><div align="left">Date</div></td>
              <td width="14%" class="style4"><div align="left">Time</div></td>
              <td width="15%" class="style4"><div align="left">Treatment</div></td>
              <td width="18%" class="style4"><div align="left"> Details</div></td>
              <td width="19%" class="style4"><div align="left">Patient</div></td>
              
              <td width="15%" class="style4">&nbsp;</td>
            </tr>
            <?
		$pid = $_GET["id"]; 
	   	$query = "SELECT * FROM appointment where pid = '$pid' ";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$date_    	     = $rowApps1->date_;
			$time_    	 	 = $rowApps1->time_;
			$treatment    	 = $rowApps1->treatment;
			$details    	 = $rowApps1->details;
			$pid    	 	 = $rowApps1->pid;
			
			
			$data = mysql_fetch_array(mysql_query("SELECT name FROM patient where id = '$pid'"));
			$name = $data[0];
							
	 ?>
            <tr>
              <td><div align="left"><? echo $date_;?></div></td>
              <td><div align="left"><? echo $time_;?></div></td>
              <td><div align="left"><? echo $treatment;?></div></td>
              <td><div align="left"><? echo $details;?></div></td>
              <td><div align="left"><? echo $name;?></div></td>
            </tr>
            <?
}
?>
            <tr>
              <td colspan="8"><p align="center">&nbsp;</p>
                <p align="center"><a href="patients.php">Back</a></p>
                <hr width="80%" color="#FF6600"/>              </td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="7" class="page_heading"><div align="left"><span class="style4">Treatments List: </span><span class="style5"><a href="addtreat.php?id=<? echo $pid;?>">Add New Treatment</a></span> </div></td>
            </tr>
            <tr>
              <td width="18%" class="style4"><div align="left">Date</div></td>
              <td width="15%" class="style4"><div align="left">Amount</div></td>
              <td width="14%" class="style4"><div align="left">Commennt</div></td>
              <td width="19%" class="style4"><div align="left"> Details</div></td>
              <td width="18%" class="style4"><div align="left">Patient</div></td>
              <td width="10%" class="style4"><div align="left"></div></td>
              <td width="6%" class="style4">&nbsp;</td>
            </tr>
            <?
			$pid = $_GET["id"];  echo $pid;
	   	$query = "SELECT * FROM treatments where pid = '$pid'";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$date_    	     = $rowApps1->date_;
			$cost			 = $rowApps1->cost;
			$desc    	     = $rowApps1->desc;
			$comment    	 = $rowApps1->comment;
			$pid    	 	 = $rowApps1->pid;
			
			$data = mysql_fetch_array(mysql_query("SELECT name FROM patient where id = '$pid'"));
			$name = $data[0];
							
	 ?>
            <tr>
              <td><div align="left"><? echo $date_;?></div></td>
              <td><div align="left"><? echo $cost. " RM";?></div></td>
              <td><div align="left"><? echo $comment;?></div></td>
              <td><div align="left"><? echo $desc;?></div></td>
              <td><div align="left"><? echo $name;?></div></td>
              <td><div align="left"></div></td>
              <td>&nbsp;</td>
            </tr>
            <?
}
?>
            <tr>
              <td colspan="7"><p align="center">&nbsp;</p>
                <p align="center"><a href="patients.php">Back</a></p>
                <hr width="80%" color="#FF6600"/></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="7" class="page_heading"><div align="left"><span class="style4">Payments List: </span><span class="style5"><a href="addpay.php?id=<? echo $pid;?>">Add New Payment</a></span> </div></td>
            </tr>
            <tr>
              <td width="18%" class="style4"><div align="left">Date</div></td>
              <td width="15%" class="style4"><div align="left">Amount</div></td>
              <td width="14%" class="style4"><div align="left">Commennt</div></td>
              <td width="19%" class="style4"><div align="left"> Details</div></td>
              <td width="18%" class="style4"><div align="left">Patient</div></td>
              <td width="10%" class="style4"><div align="left"></div></td>
              <td width="6%" class="style4">&nbsp;</td>
            </tr>
            <?
		$pid = $_GET["id"];
	   	$query = "SELECT * FROM payments where pid = '$pid'";
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
              <td><div align="left"><? echo $comment;?></div></td>
              <td><div align="left"><? echo $details;?></div></td>
              <td><div align="left"><? echo $name;?></div></td>
              <td><div align="left"></div></td>
              <td>&nbsp;</td>
            </tr>
            <?
}
?>
            <tr>
              <td colspan="7"><p align="center">&nbsp;</p>
                <p align="center"><a href="patients.php">Back</a></p>
                <hr width="80%" color="#FF6600"/>
                  <p align="center"><a href="#"></a></p></td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>Dental Online System</p>
          <p> All Rights Reserved &copy; 2015 DOS SYSTEM </p>
        </div></td>
      </tr>
</table>
</body>
</html>
