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
.style51 {color: #FF6600;
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
        
  		
        <table width="98%" height="135" border="0" align="center">
          <tr>
            <td align="center"><? include ("liblinks.php"); ?></td>
            <td width="671" rowspan="7" valign="top">
              <table width="95%" border="1" cellpadding="3" cellspacing="3" bordercolor="#999999">
                <tr>
                  <td bgcolor="#FF0000">&nbsp;</td>
                  <td colspan="2" align="center" bgcolor="#FF0000"><strong>Books requests</strong></td>
                  <td bgcolor="#FF0000">&nbsp;</td>
                  <td bgcolor="#FF0000" class="style51">&nbsp;</td>
                  <td bgcolor="#FF0000" class="style51">&nbsp;</td>
                  <td bgcolor="#FF0000" class="style51">&nbsp;</td>
                </tr>
                <tr>
                  <td width="13%" bgcolor="#FF0000"><div align="left"><strong>Title</strong></div></td>
                  <td width="12%" bgcolor="#FF0000"><div align="left"><strong>Publisher</strong></div></td>
                  <td width="18%" bgcolor="#FF0000"><div align="left"><strong>Author(s)</strong></div></td>
                  <td width="9%" bgcolor="#FF0000"><div align="left"><strong>Copies</strong></div></td>
                  <td bgcolor="#FF0000"><strong>Delete</strong></td>
                  <td colspan="2" bgcolor="#FF0000"><div align="left"><strong>Status</strong></div></td>
                </tr>
                <?
		 include("connected.php");
	   	$query = "SELECT * FROM book_request";
		$result = mysql_query($query);
		while($rowApps1 = mysql_fetch_object($result))
		{
			
			$id				 = $rowApps1->id;
			$title    	     = $rowApps1->title;
			$publisher		 = $rowApps1->publisher;
			$author    		 = $rowApps1->authors;
			$status          = $rowApps1->status;
			$copies          = $rowApps1->copies;
			
			
	 ?>
                <tr>
                  <td height="68"><div align="left"><? echo $title; ?></div></td>
                  <td><div align="left"><? echo $publisher;?></div></td>
                  <td><div align="left"><? echo $author;?></div></td>
                  <td><div align="left"><? echo $copies;?></div></td>
                  <td width="5%" align="left"><? echo '<a href="books_request.php?id='.$id.'"onClick=\'return confirm("Are you sure?")\'><img src="images/del.png" width="32" height="32" border="0" alt=" delete " /></a>'; ?></td>
                  <td width="5%" align="left"><? echo $status;?></td>
                  <td width="5%"><div align="left">
                    <p><a href="books_request.php?pid=<? echo $id; ?>">Pending </a><a href="books_request.php?did=<? echo $id; ?>">Delivered</a></p>
</div></td>
                </tr>
                <?
}

$rid = $_GET['id'];
if($rid != '')
{
		
		 $del = "DELETE FROM book_request WHERE id='$rid'";
		 mysql_query($del);
		 echo "<center><h4 style='color:#fff'><strong>Book request deleted successfully. Thank you.<br/></strong></h4></center>";
		
		 	
	     $where = "books_request.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1;URL=$where\">";
}
//pending
$pid = $_GET['pid'];
if($pid != '')
{
		 
		 $update = "update book_request set status='Pending' WHERE id='$pid'";
		 mysql_query($update);
		 echo "<center><h3 style='color:#fff'>Book request status has been updated successfully. Thank you.</h3></center>";
		
		 	
	     $where = "books_request.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">";
}
//deliver
$did = $_GET['did'];
if($did != '')
{
		 
		 $update = "update book_request set status='Delivered' WHERE id='$did'";
		 mysql_query($update);
		 echo "<center><h3 style='color:#fff'>Book request status has been updated successfully. Thank you.</h3></center>";
		
		 	
	     $where = "books_request.php"; 
         echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=$where\">";
}
?>
            </table></td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td width="201" align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
          </tr>
        </table>
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
