<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<? 
include("connected.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Momoir</title>
<style type="text/css">
.top {
	text-align: center;
}
</style>
<head>
</head>
<body>
<center>
<br />
<h3>My Memoirs</h3><br />
</center>
<?
$query1 = "SELECT * FROM memoir ";
$result1 = mysql_query($query1);
$x=0;
 while($rowApps11 = mysql_fetch_object($result1))
		{
			$text [] = $rowApps11->text;
			$x++;
		}
		?>
		<br>
<br>

<div align="center"><br />
  
  <table border="2" align="center" bordercolor="#CCCCCC" style="width: 370px">
    <tr>
      <div align="center">
        <? $query2 = "SELECT * FROM memoir ";
			$result2 = mysql_query($query2);
 			while($rowApps12 = mysql_fetch_object($result2))
			{
			$id     =$rowApps12->id;
			$text    = $rowApps12->text;
		
		?>
      </div>
      <td style="width: 304px"><div align="center"><? echo $text ?></div></td>
      <td><div align="center"><? echo '<a href="update.php?id='.$id.'" ><img src="imgs/edit.png" width="32" height="32" border="0" alt=" تعديل "/></a>' ; ?></div></td>
      <td><div align="center"><? echo '<a href="delete.php?id='.$id.'" onClick=\'return confirm("Are you sure?")\'><img src="imgs/delete.png" width="32" height="32" border="0" alt=" حذف " /></a>'; ?></div></td>
    </tr>
    <tr>
      <?
}
?>
    </tr>
  </table>
</div>
<h4 align="center" style="color:#CC0033;font-family:Tahoma, Arial, "Times New Roman""><a href="add.php">Add</a> - <a href="../">Home</a></h4>
<center>
<br /><br />



</body>
</html>

