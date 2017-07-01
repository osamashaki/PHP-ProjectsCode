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
	font-size: 130%;
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
          <li class="active"><a href="stupage.php?id=<? echo $uid; ?>"><span>My Account</span></a></li>
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
        <?
	include("connected.php");
		$uid = $_GET["id"];
		$data = mysql_fetch_array(mysql_query("SELECT name,email,password,mobile,college,role FROM user WHERE id = '$uid' "));
		$name = $data[0];
		$email = $data[1];
		$password = $data[2];
		$mobile = $data[3];
		$college = $data[4];
		$role = $data[5];
		
	
	if(isset($_POST['update']))
	{
		
		$name = $_POST["name"];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$mobile = $_POST['mobile'];
		$college = $_POST['college']; 
		$role = $_POST['role'];		
	
		
		if($password != $repassword)
		{	
			echo "<center><h3>Password and Confirm password do not match!</h3>";
			echo "<a href='javascript:history.back();'>Back</a></center>";
		}
		else
		{
				
			$uid = $_SESSION["userid"];
	        $sqlUpdate = "UPDATE user SET name='$name',email='$email',password='$password',mobile='$mobile',college='$college',role='$role'  WHERE id='$uid'";		
			mysql_query($sqlUpdate); 
			echo "<center><h3>Account updated successfully.</h3></center>";
			$where = "stuprofile.php?id=$uid"; 
			echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">"; 
				
		}
	}
	?>
  		<form action="stuprofile.php?id=<? echo $uid;?>" method="post">
  		  <table width="100%" height="135" border="0" align="center">
  		    <tr>
  		      <td align="center"><? include ("stulinks.php"); ?></td>
  		      <td width="691" rowspan="6" align="center"><table width="469" height="135" border="0" align="center">
  		        <tr>
  		          <td width="279"><table width="600" height="330" border="1" align="center" cellpadding="3" cellspacing="3" style="border:dotted">
  		            <tr>
  		              <td width="25%" class="form_label_right"><span class="style7">*</span> Full Name: </td>
  		              <td width="75%"><input name="name" type="text" id="name" value="<? echo $name;?>" size="40" /></td>
		              </tr>
  		            <tr>
  		              <td class="form_label_right"><span class="style7">*</span> Mobile:</td>
  		              <td><input name="mobile" type="text" id="mobile" size="40" value="<? echo $mobile;?>"/></td>
		              </tr>
  		            <tr>
  		              <td class="form_label_right"><span class="style7">*</span> Your E-mail: </td>
  		              <td><input name="email" type="text" id="email" size="40" value="<? echo $email;?>"/></td>
		              </tr>
  		            <tr>
  		              <td class="form_label_right"><span class="style7">*</span> Password: </td>
  		              <td><input name="password" type="password" id="password" size="20" value="<? echo $password;?>"/></td>
		              </tr>
  		            <tr>
  		              <td class="form_label_right"><span class="style7">*</span> Confirm Password: </td>
  		              <td><input name="repassword" type="password" id="repassword" size="20" value="<? echo $password;?>" /></td>
		              </tr>
  		            <tr>
  		              <td>Role:</td>
  		              <td><select name="role">
  		                <option value="<?  echo $role; ?>"><? echo $role; ?></option>
  		                <option value="Student">Student</option>
  		                <option value="Lecturer">Lecturer</option>
  		                <option value="Librarian">Librarian</option>
		                </select></td>
		              </tr>
  		            <tr>
  		              <td>College:</td>
  		              <td><select name="college" id="college">
  		                <option value="<?  echo $college; ?>" selected="selected">
  		                  <?  echo $college; ?>
  		                  </option>
  		                <option value="COIT">COIT</option>
  		                <option value="COE">COE</option>
  		                <option value="COGS">COGS</option>
  		                <option value="MBA">MBA</option>
		                </select></td>
		              </tr>
  		            <tr>
  		              <td>&nbsp;</td>
  		              <td>&nbsp;</td>
		              </tr>
  		            <tr>
  		              <td>&nbsp;</td>
  		              <td><input name="update" type="submit" id="update" value="Update Profile" style="background-color:#FF9900" /></td>
		              </tr>
		            </table></td>
		          </tr>
	          </table></td>
	        </tr>
  		    <tr>
  		      <td width="199" align="center">&nbsp;</td>
	        </tr>
  		    <tr>
  		      <td align="center">&nbsp;</td>
	        </tr>
  		    <tr>
  		      <td align="center">&nbsp;</td>
	        </tr>
  		    <tr>
  		      <td align="center">&nbsp;</td>
	        </tr>
  		    <tr>
  		      <td align="center">&nbsp;</td>
	        </tr>
	      </table></form>
      </div>
      <div class="sidebar">
       
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
