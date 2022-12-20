<?php

	$conn = mysqli_connect("localhost","root","","Basic-Banking-System");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>



