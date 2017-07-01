<? 
include("connected.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>delete</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<? 
$id=$_GET['id'];
?>
<br>
<br>
<br>
<br>
<center>
<?
		$SelectStr11 = "DELETE FROM memoir WHERE id=$id";
		 mysql_query($SelectStr11);
		echo "Momoir deleted..","<br><br>";
         $where = "index.php";
		echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";


?>

</body>
</html>