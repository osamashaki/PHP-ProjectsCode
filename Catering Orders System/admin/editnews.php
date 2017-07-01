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
.style4 {font-size: 18px; color: #0066FF; font-weight: bold; }
.style5 {color: #FF6600;
	font-weight: bold;
}
.style7 {font-size: 14; }
-->
</style>
</head>

<body>
<table width="814" height="448" border="0" align="center" cellpadding="3" cellspacing="3" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
      <tr>
        <td height="66" colspan="2" valign="middle" bgcolor="#AEFFE4"><div align="center" class="style1 style2"><a href="home.php">SYSTEM ADMIN </a></div>          </td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0">
          <tr>
            <td width="8%"><div align="center" class="style7"><a href="menu.php">Menu</a></div></td>
            <td width="13%"><div align="center" class="style7"><a href="promo.php">Promotions</a></div></td>
            <td width="10%"><div align="center" class="style7"><a href="news.php">News</a></div></td>
            <td width="12%"><div align="center" class="style7"><a href="reviews.php">Reviews</a></div></td>
            <td width="11%"><div align="center" class="style7"><a href="orders.php">Orders</a></div></td>
            <td width="12%"><div align="center" class="style7"><a href="members.php">Members</a></div></td>
            <td width="11%"><div align="center" class="style7"><a href="msgs.php">Messages</a></div></td>
            <td width="12%"><div align="center"><a href="payments.php">Payments</a></div></td>
            <td width="11%"><div align="center" class="style7"><a href="logout.php">Logout</a></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="90%" height="30" valign="middle" bgcolor="#FFFFFF" class="style4">News: Update News </td>
        <td width="10%" valign="middle" bgcolor="#FFFFFF"><div align="center"><a href="logout.php"></a></div></td>
      </tr>
      <tr>
        <td height="8" colspan="2" valign="middle" bgcolor="#FFFFFF"><div align="center"><hr align="center" width="100%" color="#FF0000"/>
        </div></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF">
		<?
		$id = $_GET["id"];
		if(isset($_POST["submit"])) 
		{
			$title = $_POST["title"];
			$newstext = $_POST["desc"];
			
			if ($title == "" || $desc == "")
			{
				echo "<center><font color='red'><b>Please fill all fields</b></font></center>";
				
				
			}
			else
			{   
				
				mysql_query("update news set title ='$title', newstext ='$newstext' where id = '$id' ");
				echo "<center><h4 style='color:#FF0000'>News has been updated successfully. Thank you.</h4></center>";
				$where = "news.php"; 
         		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
			}
			
		}
		else
		{
		
		$query = "SELECT * FROM news where id = $id";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			$id    		 	 = $rowApps1->id;
			$title    	     = $rowApps1->title;
			$newstext     = $rowApps1->newstext;
			
		}	
		?>
		<form method="post" action="<? echo "editnews.php?id=$id" ; ?> "/>
		  <table width="100%" height="163" border="0" cellpadding="2" cellspacing="2" bordercolor="#CCCCCC">
            <tr>
              <td width="11%" class="style5"><div align="left"></div></td>
              <td width="16%" class="style5"><div align="left">Title :</div></td>
              <td width="54%" class="style5"><div align="left">
                <input name="title" type="text" id="title" size="30" value="<? echo $title; ?>" />
              </div></td>
              <td colspan="2" class="style5"><div align="left"></div></td>
              <td width="11%" class="style5">&nbsp;</td>
            </tr>
         
            <tr>
              <td><div align="left"></div></td>
              <td><div align="left" class="style5">Details:</div></td>
              <td><div align="left">
                <input name="desc" type="text" id="desc" size="30" value="<? echo $newstext; ?>" />
              </div></td>
              <td width="4%">&nbsp;</td>
              <td width="4%">&nbsp;</td>
            </tr>
            <tr>
              <td height="39">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input name="submit" type="submit" id="submit" value="  Update  " style="background-color:#FF9900"  /></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
   
            <tr>
              <td colspan="8"><p>&nbsp;</p>
                  <p align="center"><a href="home.php"></a></p></td>
            </tr>
          </table>
		</form>
		<?
		}
		?>        </td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="middle" bgcolor="#FFFFFF"><p>&nbsp;</p>
          <div align="center" class="style3">
          <p>Ordering Restaurant Catering Online</p>
          <p> All Rights Reserved &copy; 2015 Ordering Restaurant Catering Online </p>
          </div></td>
      </tr>
</table>
</body>
</html>
