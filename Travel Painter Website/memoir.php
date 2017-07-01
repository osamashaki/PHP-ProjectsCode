<!DOCTYPE HTML>
<html>

<head>
  <title>ABDUL RAHMAN RAHIM - Travel Painter</title>
  <meta name="description" content="Abdul Rahman Rahim is a travel painter who loves to paint landscapes." />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  

  <style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
  </style>
</head>

<body>
  <div id="main">
    <?
   	   include ("header.php");
    ?>
   
      <div id="content">
        <div id="content_item">
		<br/><br/>
        <table border="0" width="80%" cellpadding="0" cellspacing="0">
		<tr><td><br/><strong>My Memoirs</strong> </td></tr>
        <tr><td><br/> </td></tr>
		   
		  <?
		  include("connected.php");
		  ?>
         
		
		<?
		       $query = "SELECT * FROM memoir ";
	  		   $result = mysql_query($query);
			   while($rowApps1 = mysql_fetch_object($result))
			   {
				  $id    	= $rowApps1->id;
				  $text      = $rowApps1->text;
				  $date_	 = $rowApps1->date_;
			?>
		    <tr>
		      <td><br/><ul <li><? echo $text ;?></li></ul><br/><? echo $date_; ?> </td>
		      
	        </tr>
            <tr>
            <td> <hr width="75%"/></td>
            </tr>
        
            <?
			  }
			?>
		<tr>
		<td width="57%" valign="top" >&nbsp;</td>
		 
		</tr>  
        </table>

		
	
		
		</div>
      </div>
    </div>
     <?
	 include("footer.php");
	 ?>
    
    
  </div>
  
</body>
</html>
