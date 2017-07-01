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
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">Agency Admin</div></td>
      </tr>
	   <tr>
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a> - <a href="playgrounds.php">Playgrounds</a></td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="7" class="page_heading"><div align="left" class="style4">Playground  List: </div></td>
            </tr>
            <tr>
              <td width="17%" class="style4"><div align="left">ID</div></td>
              <td width="33%" class="style4"><div align="left">Name</div></td>
              <td width="23%" class="style4"><div align="left">City</div></td>
              <td width="15%" class="style4"><div align="left"></div></td>
              
              <td width="12%" class="style4">&nbsp;</td>
            </tr>
            <?
					$query = "SELECT * FROM playground where city = 'KL' ";
					$result = mysql_query($query);
					while($rowApps1 = mysql_fetch_object($result))
					{
						$id    		 	 = $rowApps1->id;
						$name    	     = $rowApps1->playground_name;
						$city    	 	 = $rowApps1->city;
						
				//$data = mysql_fetch_array(mysql_query("select name from member where id = '$member_id' "));
					//$name = $data[0]; 
							
	 		?>
            <tr>
              <td><div align="left"><? echo $id;?></div></td>
              <td><div align="left"><? echo $name;?></div></td>
			  <td><div align="left"><? echo $city;?></div></td>
			  <td><div align="center"><? echo '<a href="playground.php?id='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></div></td>
              <td><div align="left"></div></td>
            </tr>
            <?
}
$bid = $_GET['id'];
if($bid != '')
{
		 $del = "DELETE FROM playground WHERE id='$bid'";
		 mysql_query($del);
	     $where = "playground.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
?>
            <tr>
              <td colspan="7"><p>&nbsp;</p>
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
          <p> All Rights Reserved &copy; 2015 WIN &amp; WIN</p>
        </div></td>
      </tr>
</table>
</body>
</html>
