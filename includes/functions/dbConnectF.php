<?php
//Connects to the database
function dbConnect ($sql = '')
{
	// Create connection ,"kendramo_spacefinder"
	$con = mysqli_connect("localhost","kendramo_spf","DbmHvhw3" ,"kendramo_spacefinder");

	// Check connection
	if (mysqli_connect_errno($con))
  {
  	echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  }
	
	//execute query
	mysqli_query($con,$sql);
		
//	unset($con, $sql);
}
?>

