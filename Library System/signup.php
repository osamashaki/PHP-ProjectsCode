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
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="signup.php"><span>Sign up</span></a></li>
          <li><a href="signin.php">Sign in</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.html"><span> Library </span>System</a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span> Welcome To Online Library System.</span></a> <img src="images/slide2.jpg" width="960" height="360" alt="" />Welcome To Online Library System.... <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" />Welcome To Online Library System...</a> </div>
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
        <table width="578" height="135" border="0" align="center">
          <tr>
            <td align="center" valign="middle">
            <div align="left">
             <?php
                if(isset($_POST['submit']))
                {
                    // this is an error variable to hold any error entered by user
                      $errors = "";
                  if (empty($_POST['username']))
                    $errors .= "Please provide a fullname. <br/>";
                  if (empty($_POST['password']))
                    $errors .= "Please provide a password. <br/>";
                  if (empty($_POST['confirm']))
                    $errors .= "Please confirm your password. <br/>";
                  if ( strcmp($_POST['password'], $_POST['confirm']) != 0)
                    $errors .= "Passwords don't match. <br/>";
                  if (!isset($_POST['email']))
                    $errors .= "Please provide an email address. <br/>";
				  if (!isset($_POST['college']))
                    $errors .= "Please enter your college. <br/>";
				  //if (!isset($_POST['mobile']))
                    //$errors .= "Please enter your mobile. <br/>";	

                  
                  // check for valid email
                     if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email']))
                     {
                          $errors .= "Please provide a valid email address. <br/>";
                     }

                  if ($errors == "") {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email    = $_POST['email'];
                    $college = $_POST['college'];
                    $mobile   = $_POST['mobile'];
					$role   = $_POST['role'];
					
					
					include("connected.php");
				    $registerDate = date("m/d/Y");

                    $query = "INSERT INTO user  VALUES ('','$username','$email','$password','$mobile','$college','$role','$registerDate') ";
					
					mysql_query($query);
				
                       echo "<strong>Registration Successfully done! you can login to your account now.<strong></br></br>";
                       $where = "signin.php"; 
					   echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"4;URL=$where\">"; 
                     
                        
                    
                  } else {
                     echo '<p style="color:#F00"><strong>'. $errors."Please try again.<br/><br/>";
                  }
                }

          ?>
          </div>
          <form action="signup.php" method="POST">
          <table width="473" height="189" cellpadding="3" cellspacing="3" style="border:dotted">
          <tr>
            <td>&nbsp;</td>
            <td><strong>* Please fill all the requiredfields:</strong></td>
          </tr>
          <tr>
          <td width="138">* Full Name:</td>
          <td width="313"><input type="text" name="username" ></td>
          </tr>
          <tr>
          <td>* Password:</td>
          <td><input type="password" name="password"></td>
          </tr>
          <tr>
          <td>* Confirm Password:</td>
          <td><input type="password" name="confirm"></td>
          </tr>
          <tr>
          <td>* Email</td>
          <td><input type="text" name="email"></td>
          </tr>
          <td>College:</td>
          <td><select name="college" id="college">
            <option value="COIT" selected="selected">COIT</option>
            <option value="COE">COE</option>
            <option value="COGS">COGS</option>
            <option value="MBA">MBA</option>
            <option value="None">None</option>
          </select></td>
          </tr>
          <tr>
          <td>Mobile:</td>
          <td><input type="text" name="mobile" id="mobile" /></td>
          </tr>
          <tr>
            <td>Role:</td>
            <td align="left"><select name="role">
             
              <option value="Student">Student</option>
              <option value="Lecturer">Lecturer</option>
              <option value="Librarian">Librarian</option>
            </select></td>
          </tr>
          <tr>
            <td></td>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
          <td></td>
          <td align="center">
            <div align="left">
              <input name="submit" type="submit"  value="Submit" style="background-color:#FF9900"  />
                <input type="reset"  value="Reset" style="background-color:#FF9900" />
              <input type="hidden" name="submitted" value="TRUE" />
              </div></td>
          </tr>
          </table>
          </form>
            </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
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
