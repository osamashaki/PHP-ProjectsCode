<? 
session_start();
$uid=$_SESSION["userid"];
$role= $_SESSION["role"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Library System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style type="text/css">
.style5 {	color: #F07100;
	font-size: 100%;
	font-weight: bold;
}
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span>Home Page</span></a></li>
          <?php if($_SESSION["logged"]=="") { ?>
          <li><a href="signup.php"><span>Sign up</span></a></li>
          <li class="active"><a href="signin.php">Sign in</a></li>
          <? } ?>
          <?php if($_SESSION["logged"]=="YES") { ?>
          <li class="active">
          <? if($role == 'Student') 
		  {
          		echo '<a href="stupage.php?id='.$uid.'"><span>My Account</span></a>';
		  }
		  if($role == 'Lecturer') 
		  {
          		echo '<a href="lecpage.php?id='.$uid.'"><span>My Account</span></a>';
		  }
		  if ($role == 'Librarian') 
		  {
			    echo '<a href="libpage.php?id='.$uid.'"><span>My Account</span></a>';
		  }
		  ?>
          </li>
          <li><a href="logout.php">Logout</a></li>
          <? } ?>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html"><span> Library </span>System</a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span> Welcome To Online Library System.</span></a> <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" />Welcome To Online Library System....</a> <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" />Welcome To Online Library System...</a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Welcome To Online Library System</h2>
<div class="clr"></div>
          <div class="clr"></div>
        </div>
        <table width="469" height="135" border="0" align="center">
          <tr>
            <td><p>&nbsp;</p></td>
            <td>
             <? if (isset($_POST['login']))
	 { 	
	 	error_reporting(0);
		include("connected.php");
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role = $_POST['role'];
		if(empty($username) || empty($password)) 
		{
			
			echo "<center>Username and Password are required fields!<br/><br/>";
			echo "<a href='signin.php'>Back</a></center>"; 
		} 
		else 
		{
			
			$sql="SELECT COUNT(*) AS total FROM user WHERE email='$username' and password='$password' and role = '$role' ";	
			$result=mysql_query($sql);
			$row = mysql_fetch_array($result);
			$count = $row['total'];
			if ($count==0) 
			{
				
				echo "<center>Invalid Username / Password!<br/><br/>";
				echo "<a href='signin.php'>Back</a></center>"; 
			} 
			else 
			{
				# get user details and store in session and redirect to user home page.
				session_start();
				
				$data = mysql_fetch_array(mysql_query("SELECT id,name, role FROM user WHERE email='$username' AND password='$password' and role = '$role'"));
				$_SESSION["userid"] = $data[0];
				$_SESSION["name"] = $data[1];
				$_SESSION["role"] = $data[2];
				$_SESSION["logged"] = "YES";
				$uid= $data[0];
				
				if($role == 'Lecturer')
				{
					echo "Welcome Dr.  "  .$_SESSION["name"]. "<br/><br/>"; 
					$where = "lecpage.php?id=$uid"; 
			    	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">"; 
				}
				else if($role == 'Librarian')
				{
					echo "Welcome "  .$_SESSION["name"]. "<br/><br/>"; 
					$where = "libpage.php?id=$uid"; 
			    	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">"; 
				}
				else
				{
					echo "Welcome "  .$_SESSION["name"]. "<br/><br/>"; 
					$where = "stupage.php?id=$uid"; 
			    	echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">"; 
				}
				
				
				}
				//$where = "profile.php?id=$uid"; 
			    //echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">"; 
				
				//echo "<a href='profile.php?id=$uid'>My Profile</a><br/><br/>";
				
				//echo "<a href=logout.php>Logout</a>"; 
 
			
			}	
		}

else
{
?>
            <form action="signin.php" method="post">
            <table width="100%" border="0" cellpadding="3" cellspacing="3" style="border-style:dotted;>
              <tr>
                <td height="37" colspan="2"><span class="style5">Log in: </span></td>
              </tr>
              <tr>
                <td height="38" colspan="2"><strong>Please enter Username and Password: </strong></td>
              </tr>
              <tr>
                <td width="27%"><div align="left"><strong>Email:</strong></div></td>
                <td><input name="username" type="text" id="username" size="30" /></td>
              </tr>
              <tr>
                <td><div align="left"><strong>Password:</strong></div></td>
                <td><input name="password" type="password" id="password" /></td>
              </tr>
              <tr>
                <td><strong>Role:</strong></td>
                <td><select name="role">
                  <option value="Student">Student</option>
                  <option value="Lecturer">Lecturer</option>
                  <option value="Librarian">Librarian</option>
                </select></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input name="login" type="submit" id="login" style="background-color:#FF9900" value="Login" /></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table>
            </form>
<?
}
?> 

            </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <p class="pages">&nbsp;</p>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#"> 
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star">&nbsp;</h2>
</div>
        <div class="gadget">
          <h2 class="star">&nbsp;</h2>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright Online Library.</p>
      <p class="rf">Design by Mashaan.</p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div align=center>All Rights reserved</div></body>
</html>
