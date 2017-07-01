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
.style4 {font-size: medium;
	color: #036;
	font-weight:bold;
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
		  ?>
          		<a href="stupage.php?id=<? echo $uid; ?>"><span>My Account</span></a>
		  <? }
		  if($role == 'Lecturer') 
		  {
          ?>
          	<a href="lecpage.php?id=<? echo $uid; ?>"><span>My Account</span></a>';
		  <?
          }
		  if($role == 'Librarian') 
		  {
		  ?>
			    <a href="libpage.php?id=<? echo $uid; ?>"><span>My Account</span></a>';
		  <?
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
          <h3>Welcome To Online Library System</h3>
<div class="clr"></div>
          <div class="clr"></div>
        </div>
        
  		
        <table width="100%" height="135" border="0" align="center">
          <tr>
            <td width="212" align="left" valign="top"> <? include ("leclinks.php"); ?></td>
            <td width="678" valign="top"><table width="488" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td width="15">&nbsp;</td>
                <td width="444" align="center" valign="top"><p align="center" class="style4">Search for a book</p>
                  <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table width="343" border="0" cellpadding="3" cellspacing="3">
                      <tr>
                        <td width="257">ISBN:
                          <input name="search1" type="text" id="search1" value="" /></td>
                        <td width="70"><input name="search" type="submit" id="search" value="Search" /></td>
                      </tr>
                      <tr>
                        <td>Title :
                          <input name="search2" type="text" id="search2" value="" /></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>Author :
                          <input name="search3" type="text" id="search3" value="" /></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>Publisher:
                          <input name="search4" type="text" id="search4" value="" /></td>
                        <td>&nbsp;</td>
                      </tr>
                  </table>
                  </form>
                  <?php
        

        if (isset($_POST['search']))
        {
		   include("connected.php");
           $searchTerms1 = trim($_POST['search1']);
		   $searchTerms2 = trim($_POST['search2']);
		   $searchTerms3 = trim($_POST['search3']);
		   $searchTerms4 = trim($_POST['search4']);
           //$searchTerms = strip_tags($searchTerms); // remove any html/javascript.

           if (strlen($searchTerms1) < 0) 
		   {
              echo "<br/>Search terms must be longer than 2 characters.";
			  
           }
		   else 
		   {
		     
             $searchTermDB = mysql_real_escape_string($searchTerms1);  // prevent sql injection.
             
			 echo "<br/><h3 align='left'>Search Results</h3>"; 
			 include("connected.php"); 
 			 //Now we search for our search term, in the field the user specified 
        	 
			 $result = mysql_query("SELECT * FROM book where `isbn` LIKE '%$searchTerms1%' OR `title` LIKE '%$searchTerms2%' OR `author` LIKE '%$searchTerms3%' OR `publisher` LIKE '%$searchTerms4%' ") or die(mysql_error());
		    
			 //And we display the results 
			 echo "<table width = 100% align='center' border='2' cellpadding='3' cellspacing='3' bordercolor='#0066CC'>";
			  echo "<b>Searched For:</b> <br/>";
			 if($searchTerms1 != "") echo "isbn:".$searchTerms1."<br/>";
			 if($searchTerms2 != "") echo "title:".$searchTerms2."<br/>";
			 if($searchTerms3 != "") echo "author:".$searchTerms3."<br/>";
			 if($searchTerms4 != "") echo "publisher:".$searchTerms4."<br/>";
			 while($row = mysql_fetch_array( $result )) 
			 { 
			 	 $isbn = $row['isbn'];
				 echo "<tr><td width=40%><b>Book ISBN:</b></td><td>". $row['isbn']. "</td></tr>"; 
				 echo "<br> ";  
				 echo "<tr><td width=40%><b>Book title:</b></td><td>". $row['title']. "</td></tr>"; 
				 echo "<br> "; 
				 echo "<tr><td><b>Book Publisher:</b></td><td>". $row['publisher']."</td><tr>"; 
				 echo "<br>"; 
				 echo "<tr><td><b>Book Author:</b></td><td>". $row['author']."</td><tr>"; 
				 
				 echo "<tr align='center'><td colspan='2'><b><a href='lecborrow.php?isbn=".$isbn."' class='style4'> Borrow this Book</a></b></td><tr>"; 
				 echo "<tr align='center'><td colspan='2'>---------------------------------</td><tr>";  
			 } 
			 echo "</table>";
		    	 
			 //This counts the number or results - and if there wasn't any it gives them a little message explaining that 
			 $anymatches = mysql_num_rows($result); 
			 
			 if ($anymatches == 0) 
			 { 
			 	echo "<br/><br/>Sorry, but we can not find an entry to match your query<br><br>"; 
			 } 
			 
			     //And we remind them what they searched for 
				
			 } 
			 }
			 ?></td>
                <td width="9">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><div align="center">
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p><a href="javascript:history.back();">Back</a></p>
                </div></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
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
