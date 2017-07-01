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
          <li class="active"><a href="libpage.php?id=<? echo $uid ?>"><span>My Account</span></a></li>
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
        
  		
        <table width="100%" height="135" border="0" align="center">
          <tr>
            <td align="left" width="205"><? include ("leclinks.php"); ?></td>
            <td width="699" rowspan="7" valign="top">
            <left>
			<?
			 if(isset($_POST['add']))
             {
				    $errors = "";
                    if (empty($_POST['title']))
                    $errors .= "Please provide book title. <br/>";
					if (empty($_POST['publisher']))
                    $errors .= "Please provide book publisher. <br/>";
	  			    if (empty($_POST['authors']))
                    $errors .= "Please provide book authors. <br/>";
					
					if ($errors == "") {
                  
                    $title         = $_POST['title'];
                    $publisher    = $_POST['publisher'];
                    $authors = $_POST['authors'];
                    $copies   = $_POST['copies'];
					
					
					
					include("connected.php");
				   

                    $query = "INSERT INTO book_request  VALUES ('','$title','$publisher','$authors','$copies','',$uid) ";
					
					mysql_query($query);
				
                       echo "<strong>Book request sent Successfully<strong></br></br>";
                       $where = "lec_req_book.php"; 
					   echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">"; 
                     
                        
                    
                  } 
				  else
				  {
                     echo '<p style="color:#fff"><strong>'. $errors."Please try again.";
                  } 
				 
				 
			 }
			
			?>
            </left>
            <form action="<? echo $PHP_SELF; ?>" method="post">
            <table width="650" height="89" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="3" align="left"><h3>Request a book:</h3></td>
              </tr>
              <tr>
                <td width="137">Book title:</td>
                <td width="237"><input name="title" type="text" size="50" id="title"/></td>
                <td width="187">&nbsp;</td>
              </tr>
              <tr>
                <td>Book publisher:</td>
                <td><input name="publisher" type="text" size="50" id="publisher"/></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Book Author(s):</td>
                <td><input name="authors" type="text" size="50" id="authors"/></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Copies number:</td>
                <td><select name="copies">
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
                  </select>
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
                <td><input name="add" type="submit" id="add" style="background-color:#FF9900" value="Send request" /> <input name="login2" type="reset" id="login2" style="background-color:#FF9900" value="Reset" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            </form>
            <?
			
			?>
            </td>
          </tr>
          <tr align="left">
            <td>&nbsp;</td>
          </tr>
          <tr align="left">
            <td>&nbsp;</td>
          </tr>
          <tr align="left">
            <td>&nbsp;</td>
          </tr>
          <tr align="left">
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
        </table>
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
