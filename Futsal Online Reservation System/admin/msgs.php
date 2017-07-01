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
          <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="6" class="page_heading"><div align="left" class="style4">Messages: </div></td>
            </tr>
            <tr>
              <td width="23%" class="style4"><div align="left">Date</div></td>
              <td width="24%" class="style4"><div align="left"> Name</div></td>
              <td width="18%" class="style4"><div align="left">Mobile</div></td>
              <td width="25%" class="style4"><div align="left">Message</div></td>
              <td width="10%" class="style4">&nbsp;</td>
              <td width="10%" class="style4"><div align="left"></div></td>
            </tr>
            <?
	   	$query = "SELECT * FROM msgs";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$title    	     = $rowApps1->title;
			$name    	 	 = $rowApps1->name;
			$mobile    		 = $rowApps1->mobile;
			$msg		     = $rowApps1->msg;
			$date_    	     = $rowApps1->date_;
			$uid    	     = $rowApps1->uid;
			
			
							
	 ?>
            <tr>
              <td><div align="left"><? echo $date_;?></div></td>
              <td><div align="left"><? echo $name;?></div></td>
			  <td><div align="left"><? echo $mobile;?></div></td>
              <td><div align="left"><? echo $msg;?></div></td>
              <td align="center"><a href="reply.php?uid=<? echo $uid; ?>">Reply</a></td>
              <td><div align="center">
			  <? echo '<a href="msgs.php?id='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></div></td>
		    </tr>
            <?
}
$mid = $_GET['id'];
if($mid != '')
{
		 $del = "DELETE FROM msgs WHERE id='$mid'";
		 mysql_query($del);
	     $where = "msgs.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
            <tr>
              <td colspan="6">&nbsp;</td>
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
          <p>WIN &amp; WIN  Online Sport System</p>
          <p> All Rights Reserved &copy; 2015 WIN &amp; WIN </p>
        </div></td>
      </tr>
</table>
</body>
</html>
