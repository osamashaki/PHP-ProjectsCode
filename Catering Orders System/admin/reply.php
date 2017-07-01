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
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a> - <a href="msgs.php">Messages</a> </td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <?
		  include("../connected.php");	
		  $mid = $_GET['mid'];
		  
		
				  
if(isset($_POST["send"])) 
{
		$pid =  $_GET['id'];
		
		$reply = $_REQUEST["reply"];
		$sendDate = date('d/m/Y'); 
		
		
			
		
			
			
		
		if(empty($reply))
		{
			echo "<br/><center><h4 style='color:#FF0000'>Please enter your reply! Thank you.</h4></center>";
		}
		else
		{
			$query = "SELECT * FROM patient where id = '$pid' ";
			$result = mysql_query($query);
			while($rowApps1 = mysql_fetch_object($result))
			{
				$id    		 	 = $rowApps1->id;
				$name    	 	 = $rowApps1->name;
				$mobile    		 = $rowApps1->mobile;
				$email    	 	 = $rowApps1->email;
			}	
			
			
		    mysql_query("INSERT INTO message  VALUES ('','$name','$mobile','$email','$reply','$sendDate','$pid')");
			echo "<center><h4 style='color:#FF0000'>Message has been sent.</h4></center>";
		}
		
}
?>		

		  <form action="reply.php?id=<? echo $pid; ?>" method="post">
            <table width="500" border="0" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>

              <tr>
                <td width="25%" class="form_label_right"><span class="required">*</span>Your Reply: </td>
                <td width="75%"><textarea name="reply" cols="40" rows="5" id="reply"><?php echo $comments;?></textarea></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input name="send" type="submit" id="send" value="Send" /></td>
              </tr>
            </table>
          </form>
          <p>&nbsp;</p>
          <p><a href="home.php">Home</a></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <p>Ordering Restaurant Catering Online</p>
          <p> All Rights Reserved &copy; 2015 Ordering Restaurant Catering Online </p>
        </div></td>
      </tr>
</table>
</body>
</html>
