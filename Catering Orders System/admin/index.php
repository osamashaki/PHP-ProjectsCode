<?
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<title>Admin Login</title>
	
	    <style type="text/css">
<!--
.style1 {font-size: 24px}
body {
	background-color: #FFFFFF;
}
-->
        </style>
</head>
	<body>
		<p>&nbsp;</p>
		<p><br/>
		    <br/>
        </p>
		<?
		if (isset($_POST['login']))
	 	{ 	
			include("../connected.php");
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(empty($username) || empty($password)) 
			{
				
				echo "<center>Username / Password are required fields!<br/><br/>";
				echo "<a href='index.php'>Back</a></center>"; 
			} 
			else 
			{
				$sql="SELECT COUNT(*) AS total FROM admin WHERE email='$username' and password='$password' ";	
				$result=mysql_query($sql);
				$row = mysql_fetch_array($result);
				$count = $row['total'];
				if ($count==0) 
				{
				
				echo "<center>Invalid Username / Password!<br/><br/>";
				echo "<a href='index.php'>Back</a></center>"; 
				} 
				else 
				{
					# get user details and store in session and redirect to user home page.
					
					
					$data = mysql_fetch_array(mysql_query("SELECT id,first_name FROM admin WHERE email='$username' AND password='$password'"));
					$_SESSION["adminid"] = $data[0];
					$_SESSION["name"] = $data[1];
					$_SESSION["admin_logged_in"] = "YES";
					$pid= $data[0];
					echo "<center>Welcome  ".$_SESSION["name"]."<br/><br/>"; 
					$where = "home.php"; 
					echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">";		
			}	
		}
	}
	else
	{	
		
		?>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<table width="30%" height="206" border="1" align="center" cellpadding="2" cellspacing="2" bordercolor="#FF9900" bgcolor="#FF9900">
          <tr>
            <td colspan="2" bgcolor="#66CCFF"><div align="center"><span class="title style1 style1" style="background-color:#33CCFF">Administrator Control Panel</span></div></td>
          </tr>
          <tr>
            <td width="25%"><span class="style1">Login: </span></td>
            <td width="75%">&nbsp;</td>
          </tr>
          <tr>
            <td><label for="label">Username:</label></td>
            <td><input name="username" type="text" id="username" value="" size="30" /></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input name="password" type="password" id="password" size="30" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input name="login" type="submit" class="positive" id="login" value="Login" style="background-color:#CCFF99">
             
            </td>
          </tr>
        </table>
		</form>
		<?
		}
		?>
	</body>
</html>