<?php
session_start();
$uid = $_SESSION["userid"];
include("connected.php");
$bookingdate = $_GET["timestamp"];
$myDate = date("Y-m-d", strtotime($bookingdate) ); //echo $myDate;
$now =  date("Y-m-d"); //echo 'nn'.$now;

$d1 = strtotime($myDate);
$d2 = strtotime($now);


	// Retrieve data from Query String
	
$timestamp = $_GET['timestamp'];
$city = $_GET['city'];
$startt = date("H:i:s",strtotime($_GET['startt'])); 
$endt   = date('H:i:s',strtotime($_GET['endt']));

	// Escape User Input to help prevent SQL Injection
$timestamp = mysql_real_escape_string($timestamp);
$city = mysql_real_escape_string($city);
$startt = mysql_real_escape_string($startt);
$endt = mysql_real_escape_string($endt);

	if(strtotime($endt) < strtotime($startt) || $d1 < $d2 )
	{
		echo "<br/><h4 style='color:#FF0000'><center>Error in choosing date or time!</center></h4>";
	}
	else
	{
		if($city == "Any")
		{
			$query = "SELECT * FROM playground where id NOT IN (select p_id from reservation where date_ = '$myDate' AND (('$startt' >= start_time AND '$startt' < end_time) OR ('$endt' > start_time AND '$endt' < end_time))) order by city ";
			
		}
		else
		{
	
			$query = "SELECT * FROM playground where city = '$city' and id NOT IN (select p_id from reservation where date_ = '$myDate' AND (('$startt' >= start_time AND '$startt' < end_time) OR ('$endt' > start_time AND '$endt' < end_time))) order by city "; 
			
		}
			$result = mysql_query($query) or  die(mysql_error());
			$rows = mysql_num_rows($result);
			if($rows == 0)
			{
				echo "<br/><h4 style='color:#FF0000'><center>No available playground, please choose another date, city or time</center></h4>";
			}
			else
			{

				//Build Result String
				$display_string = "<center><h2>Available Playgrounds</h2></center>";
				$display_string .= "<table cellspacing='15' cellspacing='3' border='2'>";
				$display_string .= "<tr>";
				$display_string .= "<th>Playgoround Id</th>";
				$display_string .= "<th>Playgoround name</th>";
				$display_string .= "<th>City</th>";
				$display_string .= "<th></th>";
				$display_string .= "</tr>";

				// Insert a new row in the table for each person returned
				while($row = mysql_fetch_array($result))
				{
					$display_string .= "<tr>";
					$display_string .= "<td>$row[id]</td>";
					$display_string .= "<td>$row[playground_name]</td>";
					$display_string .= "<td>$row[city]</td>";
					$display_string .= "<td><a href='book.php?d=$myDate&st=$startt&et=$endt&uid=$uid&city=$row[city]&pid=$row[id]'>Book</a></td>";
					$display_string .= "</tr>";
				
				}
			}
			
			
//echo "Query: " . $query . "<br />";
$display_string .= "</table>";
echo "<center>".$display_string."</center>";
}
?>