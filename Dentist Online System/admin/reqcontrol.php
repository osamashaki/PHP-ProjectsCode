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
.style6 {color: #FF6600; font-weight: bold; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="814" height="171" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">SITE ADMIN </div></td>
      </tr>
	   <tr>
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a> - <a href="reqcontrol.php">Appoitments requests</a> </td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p align="left">&nbsp;</p>
          <p align="left" class="style6"><strong>Appoitments requests</strong>: </p>
          <table width="701" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td height="30" colspan="7" class="page_heading"><div align="center">
			  <?
			  	  $aid = $_GET["id"];  
				  $ach = $_GET["ch"]; 
				  if ( $aid != '' && $ach == '1')
				  {
				  		mysql_query("Update appreq set status = '1' where id = '$aid' ");
						echo "The appointment has accepted";
						print "<script type=\"text/javascript\">"; 
						print "alert('SMS has sent to the patient: your appointment has apprroved')"; 
						print "</script>";  
				  } 
				  if ( $aid != '' && $ach == '0')
				  {
				  		mysql_query("Update appreq set status = '0' where id = '$aid'");
						echo "The appointment has rejected";
						print "<script type=\"text/javascript\">"; 
						print "alert('SMS has sent to the patient: your appointment has rejected')"; 
						print "</script>";  
				  } 
			  ?>
			  </div></td>
            </tr>
            <tr>
              <td width="12%" class="form_label_right"><div align="left" class="style6">Date:</div></td>
              <td width="15%"><span class="style6">Time:</span></td>
              <td width="15%"><div align="left" class="style6">Patient</div></td>
              <td width="26%"><div align="left" class="style6">Treatments:</div></td>
              <td width="8%"><div align="left" class="style6">Comment</div></td>
              <td width="9%"><span class="style6">Status</span></td>
              <td width="30%">&nbsp;</td>
            </tr>
            <tr>
              <td class="form_label_right">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <?
			
	   	$query = "SELECT * FROM appreq";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$date_    	     = $rowApps1->date_;
			$time_    	     = $rowApps1->time_;
			$treatments    	 = $rowApps1->treatments;
			$status			 = $rowApps1->status;
			$pid			 = $rowApps1->pid;
			$com			 = $rowApps1->comment;			

			$data = mysql_fetch_array(mysql_query(" select name from patient where id = '$pid'  "));					
	 		$name = $data[0];
	 ?>
            <tr>
              <td><div align="left"><? echo $date_;?></div></td>
              <td><? echo $time_;?></td>
              <td><div align="left"><? echo $name;?></div></td>
              <td><div align="left"><? echo $treatments;?></div></td>
              <td><div align="left">
                <? echo $com; ?>
              </div></td>
              <td><? if ($status == '1') echo "Accepted" ; else echo "Rejected";?></td>
              <td><a href="reqcontrol.php?id=<? echo $id;?>&ch=1">Accept</a> - <a href="reqcontrol.php?id=<? echo $id;?>&ch=0">Reject</a> </td>
            </tr>
            <?
}
?>
            <tr>
              <td colspan="7"><p>&nbsp;</p>                  </td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p><a href="home.php">Back</a></p>
          <p>&nbsp;</p>
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
