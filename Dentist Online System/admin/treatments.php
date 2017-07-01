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
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a> - <a href="treatments.php">Treatments</a> </td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="7" class="page_heading"><div align="left" class="style4">Treatments List: </div></td>
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
	   	$query = "SELECT * FROM treatments";
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
              <td><div align="left"><? echo $desc;?></div></td>
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
