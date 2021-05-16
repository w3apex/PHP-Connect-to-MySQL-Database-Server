<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'batch_one_oop_blogd';

	// Create connection
	$conn = mysqli_connect($host, $user, $pass, $db);

	// Check connection
	if ($conn != true) {
	    die('<p style="color:red;">ERROR: Could not connect. '.mysqli_connect_error().'</p>');
	}
	else {
		echo '<p style="color:green;">Connect Successfully... </p>';
		echo '<h3>Host info : '.mysqli_get_host_info($conn).'</h3>';
	}

?>
