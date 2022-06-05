<?php
//The code that handles the data
if (isset($_POST['submit'])) {
	
	//Grabbing the data
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	//Instantiate Signup controller
	include "../classes/dbh.classes.php";
	include "../classes/login.classes.php";
	include "../classes/login-contr.classes.php";
	$login = new LoginContr($uid, $pwd);


	//Running error handlers
	$login->loginUser();

	//Going back to front page
	header("location: ../index.php?error=none");
}