<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<? 
include("connected.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Add..</title>
<style type="text/css">
.style1 {
	color: #FF0000;
}
.style2 {
	text-align: right;
}
.style3 {
	text-align: center;
}
.style4 {
	border-width: 0px;
}
</style>
<script type="text/javascript" >
function cleartxt()
{
		f1.text1.value="";	
}

</script>
</head>
<body>
 <center>
  <p>
 <? 
 if(isset($_POST['btn10']))
 {
 ?>
 <p>&nbsp;</p>
 <p class="style1"><strong>&nbsp;    </strong></p>
 <?			
          	$text1 = $_POST['text1'];
			$date_ = date("Y-m-d H:i:s");    
			$query = "insert into  memoir  values('','$text1','$date_') ";
			$result = mysql_query($query);
			echo "Your memoir has added successfully ","<br><br>";
			$where = "index.php";
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";		  
 }
else
{
?>
  <p>&nbsp;</p>
  <p>&nbsp;    </p>
<form method="post" name="f1">
<table border="1" bordercolor="#0000FF" align="center">
<tr>
<td class="style2"><textarea name="text1" cols="60" rows="5" id="text1" dir="ltr" lang="ar-kw" onactivate="cleartxt()"></textarea></td>
<td><input type="submit" name="btn10" value=" Add " /></td></table>
</form>
<?
echo "<p><h4 align='center' style='color:#CC0033;font-family:Tahoma, Arial, 'Times New Roman'><a href='index.php'>  back  </a></h4></p>"; 
 }
 ?>
 
 
 </center>
	
</body>
</html>