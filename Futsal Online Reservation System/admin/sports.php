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
.style6 {font-weight: bold}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>
<table width="814" height="171" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2">SITE ADMIN </div></td>
      </tr>
	   <tr>
	     <td width="92%" height="30" valign="middle" bgcolor="#FFFFFF"><a href="home.php">Home</a> - <a href="sports.php">Sports Details  </a> </td>
         <td width="8%" valign="middle" bgcolor="#FFFFFF"><a href="logout.php">Log out</a> </td>
  </tr>
	   <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center" class="style3">
          <table width="100%" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
            <tr>
              <td height="33" colspan="7" class="page_heading"><div align="left" class="style5 style6">
                  <p><span class="style5">Add New Sport </span>:</p>
              </div></td>
            </tr>
            <tr>
              <td width="18%" class="style4"><div align="left">Name:</div></td>
              <td width="33%" class="style4">Details:</td>
              <td width="33%" class="style4"><div align="left">Image:</div></td>
              <td rowspan="3" class="style4">&nbsp;</td>
            </tr>
            <?
			
	   		$query = "SELECT * FROM sports";
			$result = mysql_query($query);
			while($rowApps1 = mysql_fetch_object($result))
			{
				$id    		 	 = $rowApps1->id;
				$name    	     = $rowApps1->name;
				$details    	 = $rowApps1->details;
				$image	    	 = $rowApps1->image;
				
							
	 ?>
            <tr>
              <td class="style4"><div align="left"><? echo $name;  ?></div></td>
              <td><div align="left"><? echo $details;  ?></div></td>
              <td><div align="center"><? echo $image;  ?></div></td>
            </tr>
<?
}
?>            
              
            
            <tr>
              <td colspan="7"><p align="center"><a href="patients.php"></a></p>
                  <p align="center">
                    <input type="submit" name="submit" value=" Add "/>
                    &nbsp;&nbsp;
                    <input name="button" type="button" onclick="history.back(-1)" value="Go Back" />
                  </p>
                <p align="center">&nbsp;</p>
                <hr width="80%" color="#FF6600"/>              </td>
            </tr>
            <tr>
              <td colspan="7">&nbsp;</td>
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
          <p>WIN &amp; WIN  Online Sport System</p>
          <p> All Rights Reserved &copy; 2012 WIN &amp; WIN</p>
        </div></td>
      </tr>
</table>
</body>
</html>
