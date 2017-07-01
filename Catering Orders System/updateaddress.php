<?
session_start();
$id=$_SESSION["userid"];
?>
<html>
<head>


<style type="text/css">
<!--
.style1 {color: #FF6600}
-->
</style>

</head>
<body>


  <? 
						  	if(isset($_POST["update"])) 
							{
								include("connected.php");
								$address = $_POST['address']; 
								$query = "update user set  address = '$address' where '$id' ";
								$result = mysql_query($query);
								//mysql_query("update user set address = '$address' where id = '$id'");
								echo "<br/><center><font color='red'><b>Your address has been updated.</b></font><br/><br/>";
								echo "<a href='#' onclick='window.close();'>Close this window</a></center>";
								
								
							}
							else
							{
						  
						  ?>
  
  <table width="90%" border="0" align="center">
    <tr>
      <td><div align="center" class="style1"><strong>Update my address:</strong></div></td>
    </tr>
    <tr>
      <td>
	  
	  <form action="updateaddress.php" method="post">
        <?
						  	include("connected.php");
						  	$sql = "SELECT address from user WHERE id ='$id'";
							$result = mysql_query($sql);
							while($rowApps1 = mysql_fetch_object($result))
							{
								$address    	 = $rowApps1->address;
							}
							?>
        <textarea name="address" cols="60" width="200"><? echo $address; ?></textarea>
        <input type="submit" name="update" value=" Update "/>
        <input type="button" name="close" value=" Close " onClick="window.close();"/>
      </form>      </td>
    </tr>
    <tr>
      <td><div align="center">
        					
      </div></td>
    </tr>
  </table>
  <?
  }
  ?>

</body>
</html>