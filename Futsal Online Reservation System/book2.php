<center>
<?
error_reporting(0);
session_start();
$b = $_GET['book']; 
$d =  $_GET['datt']; 
$mid = $_SESSION["userid"] ;
$now = date("m/d/Y"); 
$f = $_GET["from"];
$t = $_GET["end"];
$court = $_GET["c"];

			if($b =='1')
			{
			?>
		<script type="text/javascript"> 
		alert("You cannot CANCLE your booking after you press Continue");
		alert("Press Contiue to Pay or Cancle to exit."); 
		
	  </script>
	<? 
				$total = 100.00; 
				include("connected.php");
				mysql_query("INSERT INTO booking VALUES ('','$now','$d','$f','$t','$mid','$court')");
				echo "<h4 style='color:#FF0000'>Your booking has been sent successfully.<br/>Pleae Pay ". $total ." RM to confirm your booking, Thank you.</h4>";
				echo '<a href="pay.php?t='.$total.'">Continue</a>&nbsp;'; 
				echo '<a href="" onClick="javascript:window.close()";>Cancle</a>';
			}	
			
			
?>			
</center>