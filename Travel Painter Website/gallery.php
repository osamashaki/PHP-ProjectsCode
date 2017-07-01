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
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
	<link rel="stylesheet" href="css/screen.css" media="screen"/>
	<link rel="stylesheet" href="css/lightbox.css" media="screen"/>
    <link href="css/lightbox.css" rel="stylesheet" />
</head>

<body>
  <div id="main">
   <?
   	   include ("header.php");
   ?>
    <div id="content">
        <div id="content_item">
		<br/><br/><br/><br/>
        <!-- resizable container -->
      <!-- counter and caption -->
      <h3>&nbsp;</h3>
		
        <div class="image-row">
			
           <div class="image-set">
          <?
		  	
			$dir = "galleryimages";
						
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) 
		{
           if("." == $file || ".." == $file )
		   { continue;}
		?>
          <a class="example-image-link" href="<? echo 'galleryimages/'.$file; ?>" data-lightbox="example-set" title=""><img class="example-image" src="gallerythumbs/<? echo $file; ?>" alt="" width="150" height="150"/></a>
          
           
           <?
		   
		} 
	}
}
        closedir($dh);
		   ?>
           </div>
                       
		</div>
        
       </div>
    </div>
    </div>
   
    <?
	 include("footer.php");
	 ?>
     
  </div>

</body>
</html>
