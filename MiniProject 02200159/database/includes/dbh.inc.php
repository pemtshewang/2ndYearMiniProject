<?php
	$serverName = 'localhost'
	$dBUserName = 'root'
	$dBPassword = ''
	$dBName = 'artgallery'

	$conn = mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName)

	if(!$conn)
	{
		die("The connection failed!" . mysqli_connect_error())
	}else{
		echo("Connected successfully")
	}
?>
