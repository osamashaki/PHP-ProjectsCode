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
	if(isset($_POST["submit"])) 
{
		$pid = $_SESSION["userid"] ; 
		$appdate = $_POST["timestamp"];
		$ammount = $_POST["ammount"];
		$details = $_POST["details"];
		$comment = $_POST["comment"];
		
		if(empty($appdate) || empty($ammount))
		{
			echo "<h4 style='color:#FF0000'>Please select date and ammount</h4>";
		}
		else
		{
			mysql_query("INSERT INTO payments  VALUES ('','$appdate','$ammount','$details','$comment','$pid')");
			echo "<h4 style='color:#FF0000'>Payment has been added successfully. Thank you.</h4>";
		
		}
}		
	?>
	</center>
		  <form action="addpay.php" method="post" name="form1">
		  <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="8" class="page_heading"><div align="left" class="style5"><strong>Add New Payment :</strong></div></td>
            </tr>
            <tr>
              <td width="18%" class="style4"><div align="left">Date</div></td>
              <td width="17%" class="style4"><div align="left">Amount</div></td>
              <td width="24%" class="style4"><div align="left">Details</div></td>
              <td width="32%" class="style4"><div align="left">Commennt</div></td>
              
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
                <input name="ammount" type="text" id="ammount" value="" size="10" />
               RM </div></td>
              <td><div align="left">
                <input name="details" type="text" id="details" value="" size="30" />
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
