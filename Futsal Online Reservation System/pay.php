<?php
session_start();
$uid = $_SESSION["userid"]; 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<div align="center">
<?
	$tp = $_GET["t"]; 
	if(isset($_POST['pay'])) 
	{
		$tp= $_GET["t"]; 
		
		
		$num = $_POST["num"];
		$name = $_POST["name"];
		$num2 = $_POST["num2"];

		if(empty($name) || empty($num) || empty($num2))
		{
			echo "<h4 style='color:#FF0000'>Please enter your credit card details!</h4>";
		}
		
		
		else
		{	
			
			$now = date("Y-m-d"); 
			include("connected.php");
			$data = mysql_fetch_array(mysql_query("select max(id) from reservation"));
			$rid = $data[0]; //echo $rid;
			
			mysql_query("INSERT INTO payments VALUES ('','$now','$rid','$uid','$tp')");
			echo "<h4 style='color:#FF0000'>Your booking has been confirmed successfully, Thank you.</h4>";
			echo( "<a href=\"#\" onclick=\"window.close(); return false\">Close Window</a></center>"); 
		
		}





	}
	else
	{
?>
</div>

<form action="pay.php?t= <? echo $tp;?>" method="post">
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="3" bgcolor="#333333">
  <tr>
    <td colspan="3" class="style1"><h4>&nbsp;</h4>
      <h4>Credit card detail<strong>s:</strong></h4>    </td>
  </tr>
  <tr>
    <td width="20%" class="style1">Card number:</td>
    <td width="42%"><input name="num" type="text" id="num" size="20" />
        
    &nbsp;</td>
    <td width="38%" rowspan="6" align="left"><img src="images/pay.jpg" alt="p" width="239" height="211" /></td>
  </tr>
  <tr>
    <td height="23" class="style1">Cardholder name printed on card:</td>
    <td><input name="name" type="text" id="name" size="20" /></td>
    </tr>
  <tr>
    <td height="23" class="style1">Expiry date:</td>
    <td><select name="mnth" style="width:123">
      
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option> &nbsp;
      
      </select> <select name="yeer" style="width:123">
<option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        
      </select></td>
    </tr>
  <tr>
    <td height="23" class="style1">Security code (CVC):</td>
    <td class="style1"><input name="num2" type="text" id="num2" size="7" maxlength="3" /></td>
    </tr>
  <tr>
    <td height="23" class="style1">&nbsp;</td>
    <td class="style1">Press the Pay button to continue.</td>
    </tr>
  <tr>
    <td height="23" class="style1">&nbsp;</td>
    <td><input name="pay" type="submit" id="pay" value=" Pay " style="background-color:#F90" />
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input name="cancel" type="button" id="cancel" onclick="javascript:window.close();" value="Cancle" style="background-color:#F90" /></td>
    </tr>
  <tr>
    <td height="23" class="style1">&nbsp;</td>
    <td colspan="2"><div align="center"></div></td>
  </tr>
</table>
</form>
<?
}
?>
</body>
</html>
