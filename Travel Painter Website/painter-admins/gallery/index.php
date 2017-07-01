<?php 
{
require("config.php");
$logok=0; 
$uploading=$_POST['uploading'];


if ($uploading=="") 
{ 
echo 
'<div align="center">
<br><br>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Uploading Photos</title>
</head>
<body>
<div class="e2_photo_gallery">
  <div class="hd">
    
  </div>

    <div class="c">
      <div class="s">
        <!-- Content -->
			 <fieldset>
				
				    <font color="#0000FF" ><div align="center"><h2>Please choose a photo</h2></div></font>
				    <form name="form3" enctype="multipart/form-data" method="post" action="'.$_SERVER['PHP_SELF'] .'">
					<input type="hidden" size="32" name="folder" value="../../galleryimages" />
					<input type="hidden" size="32" name="thumbfolder" value="../../gallerythumbs" />
					<div class="float50">
					<p><input type="file" size="25" name="my_field[]" value="" /> 
				
					</div>
					
					<div class="clear"></div>
					<p class="button"><input type="hidden" name="type" value="multiple" />
					<input type="hidden" name="uploading" value="yes" />
			
					<input type="submit" name="submit" value=" Upload " /> </p>
				</form>
			</fieldset>
        <!-- Content -->
      </div>
    </div>
  </div>
  <div class="ft">
    <div class="c"></div>
  </div>
</div>

</div>
</div>
</body> 
</html>
'; 
?>
<center>
<font color="#0000FF" ><h4>All Gallery Photos</h4></font>  <!-- Content -->

<?php 
require("config.php");
$dir=dir("../../galleryimages/");

?>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2"><font color="#FF0000">Press the X sign to delete a Photo</font></td>
</tr>

<?php 


while (($filename = $dir->read()) !== false) 
{
	if("." == $filename|| ".." == $filename)
	{continue;}
?>
<tr>
<td width="130" align="center"><img src="../../galleryimages/<? echo $filename ?>"  width="120" height="80"/></td>
<td><a href="index.php?filename=<? echo $filename; ?>&dir=../../galleryimages&subdir=../../gallerythumbs"><img src="drop.png" width="16" height="16" border="0" /></a></td>
</tr>
<?

}
$dir->close();
?>

</table>
<p>&nbsp;</p>
<a href="../index.php">Back</a><br/><br/>
<?

$file = $_GET['filename'];
if($file !="")
{
$dir = $_GET['dir'];
$subdir= $_GET['subdir'];
unlink("$dir/$file"); 
unlink("$subdir/$file"); 
$page = $_SERVER['PHP_SELF'];
echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
}
?>
<p>&nbsp;</p>


</center>
<?
} 
else if($uploading=="yes")
{ 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="rsrc/style.css" rel="stylesheet" type="text/css">
<title>..Gallery Control..</title>
</head>
<body>
<div class="e2_photo_gallery">
  
  
    <div class="c">
      <div class="s">
        <!-- Content -->
<font color="#0000FF"><h2 align="center">Uploaded photos</h2></font>
<br />
<center>
	<h4><a href="index.php">Back</a></h4>
	<br />
</center>

    <?php


error_reporting(E_ALL); 

// we first include the upload class, as we will need it here to deal with the uploaded file
include_once'class.upload.php';

if ($_POST['type'] == 'multiple') {
	
	
	$folder=$_POST['folder'];
	$thumbs=$_POST['thumbfolder'];
	
    // ---------- MULTIPLE UPLOADS ----------

    // as it is multiple uploads, we will parse the $_FILES array to reorganize it into $files
    $files = array();
    foreach ($_FILES['my_field'] as $k => $l) {
        foreach ($l as $i => $v) {
            if (!array_key_exists($i, $files)) 
                $files[$i] = array();
            $files[$i][$k] = $v;
        }
    }
	$j=0;
    // now we can loop through $files, and feed each element to the class
    foreach ($files as $file) {
    	
		$j++;		
        // we instanciate the class for each element of $file
        $handle = new Upload($file);
        
        // then we check if the file has been uploaded properly
        // in its *temporary* location in the server (often, it is /tmp)
        if ($handle->uploaded) {
			
			
			$handle->image_resize          = false;
			$handle->image_ratio           = true;
			$handle->image_y               = 600;
			$handle->image_x               = 580;
			$handle->jpeg_quality		   = 95;
            // now, we start the upload 'process'. That is, to copy the uploaded file
            // from its temporary location to the wanted location
            // It could be something like $handle->Process('/home/www/my_uploads/');
            $handle->Process($folder);
            // we check if everything went OK
            if ($handle->processed) {
                // everything was fine !
                echo '<fieldset>';
					echo '  <center><legend><h3>The big photo</h3></legend><center>';
              //  echo '  <p>' . round(filesize($handle->file_dst_pathname)/256)/4 . 'KB</p>';
                echo '  <img src="'.$folder.'/' . $handle->file_dst_name . '"/>';
                echo '</fieldset>';
            } else {
                // one error occured
                echo '<fieldset>';
                echo '  <legend><h3>Uploading Failed!</h3></legend>';
                echo '  Error: ' . $handle->error . '';
                echo '</fieldset>';
            }
			$handle->image_resize          = true;
			$handle->image_y               = 150;
			$handle->image_x               = 150;
			$handle->jpeg_quality		   = 95;
			
            // now, we start the upload 'process'. That is, to copy the uploaded file
            // from its temporary location to the wanted location
            // It could be something like $handle->Process('/home/www/my_uploads/');
            $handle->Process($thumbs);

            // we check if everything went OK
            if ($handle->processed) {
                // everything was fine !
                echo '<fieldset>';
                echo '  <legend><h3>The small photo</h3></legend>';
               // echo '  <p>' . round(filesize($handle->file_dst_pathname)/256)/4 . 'KB</p>';
               echo '  <img src="'.$thumbs.'/' . $handle->file_dst_name . '"/>';
                echo '</fieldset>';
            } else {
                // one error occured
                echo '<fieldset>';
                echo '  <legend><h3>Error occured! Please try again.</h3></legend>';
               
                echo '</fieldset>';
            }
            
        } 
		else 
		{
      		
        }
    }
 
?>

 
</body> 
</html>

<?php
} 
else 
{ 
echo 'WRONG DETAILS - <a href="'.$_SERVER['PHP_SELF'] .'">CLICK TO TRY AGAIN</a>'; 
} 
} 
else 
{ 

} 

}

?>