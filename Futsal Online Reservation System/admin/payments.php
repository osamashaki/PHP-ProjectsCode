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
          <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="10" class="page_heading"><div align="left" class="style4">Payments:</div></td>
            </tr>
            <tr>
              <td width="13%" class="style4"><div align="left">Date</div></td>
              <td width="13%" class="style4"><div align="left">Res id </div></td>
              <td width="15%" class="style4"><div align="left"> Name </div></td>
              <td width="12%" class="style4"><div align="left">Amount</div></td>
              <td width="11%" class="style4"><div align="left"></div></td>
                            
              <td width="9%" class="style4">&nbsp;</td>
            </tr>
            <?
					$query = "SELECT * FROM payments";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->id;
						$pay_date    	     = $rowApps1->pay_date;
						$resid   		 = $rowApps1->resid;
						$uid		  	 = $rowApps1->uid;
						$total	    	 = $rowApps1->total;
						
						
						
			$data = mysql_fetch_array(mysql_query("select name from member where id = '$uid' "));
			$mname = $data[0];							
	 		?>
            <tr>
              <td><div align="left"><? echo $pay_date;?></div></td>
              <td><div align="left"><? echo $resid;?></div></td>
              <td><div align="left"><? echo $mname;?></div></td>
              <td><div align="left"><? echo $total;?></div></td>
			  
              
              <td><div align="center"><? echo '<a href="payments.php?id='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></div></td>
            </tr>
            <?
}
$pid = $_GET['id'];
if($pid != '')
{
		 $del = "DELETE FROM payments WHERE id='$pid'";
		 mysql_query($del);
	     $where = "payments.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
            <tr>
              <td colspan="10"><p>&nbsp;</p>
                  <p align="center"><a href="#"></a></p></td>
            </tr>
          </table>
          <p><a href="home.php">Back</a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>WIN &amp; WIN  Online Sport System</p>
          <p> All Rights Reserved &copy; 2012 WIN &amp; WIN</p>
        </div></td>
      </tr>
</table>
</body>
</html>
