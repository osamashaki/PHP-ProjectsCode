<? 
include("connected.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>Update</title>
<style type="text/css">
.style1 {
	text-align: center;
}
.style2 {
	color: #FF0000;
}
.style3 {
	text-decoration: underline;
}
.style4 {
	color: #FF0000;
	text-decoration: underline;
	font-size: medium;
}
.style5 {
	font-size: medium;
}
.style6 {
	font-weight: bold;
	background-color: #FF0000;
}
.style7 {
	border-width: 0px;
}
.style8 {
	font-size: large;
}
.style9 {
	font-family: "Times New Roman", Times, serif;
}
.style10 {
	font-family: "Courier New", Courier, monospace;
}
.style11 {
	text-align: center;
	font-family: "Times New Roman", Times, serif;
}
</style>
</head>


<body>
 <div class="style1">
	<span class="style4"><strong>
 <? 

$id=$_GET['id'];
?></strong></span> <span class="style2"><strong><span class="style3">
	<span class="style5">
<br>
	Updae Memoir
<br>
<br>
	</span></span></strong></span></div>
<center>
<?

if($bt4)
{
				$old =$_POST["t1"];
				$query = "update  memoir set text='$old' where id=$id ";
				$result = mysql_query($query);
				echo "<br><br> Updated successfully <br><br>\n";
				$where = "index.php";
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";
}
else if(!isset($bt4))
{
			$query = "SELECT * From memoir where id=$id ";
			$result = mysql_query($query);
			while($rowApps1 = mysql_fetch_object($result))
			{
			
       		  $text = $rowApps1->text;
				
		 	}
			
			?>
			<form  method="post">
 			<strong>
 			<textarea  name="t1" cols="70" rows="5" dir="rtl"><? echo  $text ?></textarea></strong><br />
 			<strong><span class="style2"><span class="style5">
			<span class="style8"><span class="style9"><span class="style10">
 			<input type="submit" name="bt4" value=" Update " style="width: 97px" class="style6" /></span></span></span></span></span></strong>
			</form><? ?>


<?
 
 
}	
	

?>	
	<p class="style11">

<a href="index.php">  back   </a>


	</p>
	<p class="style1">&nbsp;</p>
</center>
</body>
</html>