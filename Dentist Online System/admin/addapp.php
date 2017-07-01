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
.style5 {color: #FF6600}
.style6 {font-weight: bold}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">
<body>
<table width="814" height="171" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">SITE ADMIN </div></td>
      </tr>
	   <tr>
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a></td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <center>
	<?
	$id = $_GET["id"]; 
	
	
	if(isset($_POST["submit"])) 
	{
		
		$pid = $_GET["id"];  echo $id;
		$appdate = $_POST["timestamp"];
		$apptime = $_POST["apptime"];
		$treatment = $_POST["treatment"];
		$comment = $_POST["comment"];
		
		if(empty($appdate) || empty($apptime) )
		{
			echo "<h4 style='color:#FF0000'>Invalid date and time!</h4>";
		}
		else
		{
			mysql_query("INSERT INTO appointment  VALUES ('','$appdate','$apptime','$treatment','$pid','$comment')");
			echo "<h4 style='color:#FF0000'>Appointment has been added successfully. Thank you.</h4>";
		
		}
}		
	?>
	</center>
		  <form action="addapp.php?id=<? echo $id; ?>" method="post" name="form1">
		  <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="8" class="page_heading"><div align="left" class="style5 style6"><span class="style5">Add New Appoitment</span>:</div></td>
            </tr>
            <tr>
              <td width="18%" class="style4"><div align="left">Date</div></td>
              <td width="13%" class="style4"><div align="left">Time</div></td>
              <td width="23%" class="style4"><div align="left">Treatment</div></td>
              <td width="37%" class="style4"><div align="left">Commennt</div></td>
              
              <td width="9%" class="style4">&nbsp;</td>
            </tr>
            <?
			$pid = $_GET["id"];
	   
							
	 ?>
            <tr>
              <td><div align="left">
                <input name="timestamp" type="text" size="9" />
				<script language="JavaScript">
			new tcal ({
				// form name
				'formname': 'form1',
				// input name
				'controlname': 'timestamp'
			});

			</script>
              </div></td>
              <td><div align="left">
                <select name="apptime" style="width:103">
                  <option value=""></option>
                  <option value="9:00AM">9:00 AM</option>
                  <option value="9:30AM">9:30 AM</option>
                  <option value="10:00AM">10:00 AM</option>
                  <option value="10:30AM">10:30 AM</option>
                  <option value="11:00AM">11:00 AM</option>
                  <option value="11:30AM">11:30 AM</option>
                  <option value="12:00PM">12:00 PM</option>
                  <option value="12:30PM">12:30 PM</option>
                  <option value="1:00PM">1:00 PM</option>
                  <option value="1:30PM">1:30 PM</option>
                  <option value="2:00PM">2:00 PM</option>
                  <option value="2:30PM">2:30 PM</option>
                  <option value="3:00PM">3:00 PM</option>
                  <option value="3:30PM">3:30 PM</option>
                  <option value="4:00PM">4:00 PM</option>
                  <option value="4:30PM">4:30 PM</option>
                  <option value="5:00PM">5:00 PM</option>
                  <option value="5:30PM">5:30 PM</option>
                  <option value="6:00PM">6:00 PM</option>
                  <option value="6:30PM">6:30 PM</option>
                  <option value="7:00PM">7:00 PM</option>
                  <option value="7:30PM">7:30 PM</option>
                  <option value="8:00PM">8:00 PM</option>
                  <option value="8:30PM">8:30 PM</option>
                  <option value="9:00PM">9:00 PM</option>
                  <option value="9:30PM">9:30 PM</option>
                  <option value="10:00PM">10:00 PM</option>
                </select>
              </div></td>
              <td><div align="left">
                <input name="treatment" type="text" id="treatment" value="" size="30" />
              </div></td>
              <td><div align="left">
                <input name="comment" type="text" id="comment" value="" size="30" />
              </div></td>
              <td>&nbsp;</td>
            </tr>
           
            <tr>
              <td colspan="8"><p align="center"><a href="patients.php"></a></p>
                <p align="center"><input type="submit" name="submit" value=" Add "/> &nbsp;&nbsp;<input type="button" value="Go Back" onclick="history.back(-1)" />
                </p>
              <hr width="80%" color="#FF6600"/>              </td>
            </tr>
          </table>
		  </form>
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
