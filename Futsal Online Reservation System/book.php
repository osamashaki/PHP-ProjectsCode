<center>
<?
		error_reporting(0);
		if(!isset($_SESSION['logged'])) 
		{
			session_start();
		}
		$bookd = $_GET['d']; //echo $bookd;
		$st    = $_GET['st']; 
		$et    = $_GET['et']; 
		$uid   = $_GET['uid'];
		$city  = $_GET['city'];
		$pid   = $_GET['pid'];
		
		$h = $et - $st; 
			
		?>
		<script type="text/javascript"> 
		//alert("You cannot CANCLE your booking after you press Continue");
		alert("Press Contiue to Pay or Cancel to exit."); 
		
	    </script>
		<? 
				$total = $h * 100.00; 
				include("connected.php");
				mysql_query("INSERT INTO reservation VALUES ('','$bookd','$st','$et','$uid','$city','$pid','$total')");
				echo "<h4 style='color:#FF0000'><br/><br/>Your booking has been sent successfully.<br/><br/>Pleae Pay ". $total ." RM to confirm your booking, Thank you.</h4>";
				echo '<a href="pay.php?t='.$total.'">Continue</a>&nbsp;'; 
				echo '<a href="" onClick="javascript:window.close()";>Cancel</a>';
				
			
			
?>			
</center>