<?php
//The code that handles the data

if (isset($_POST['submit'])) {
	
	//Grabbing the data
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$pwdrepeat = $_POST['pwdrepeat'];
	$email = $_POST['email'];
	$ewallet = $_POST['ewallet'];
	$dp = $_POST['dp']; //Profile image
	$cardno = $_POST['cardno']; //visa number 
	$postalcode = $_POST['cardno']; //postal code

	//Instantiate Signup controller
	include "../classes/dbh.classes.php";
	include "../classes/signup.classes.php";
	include "../classes/signup.contr.classes.php";
	$signup = new SignupContr($uid, $pwd, $pwdrepeat, $email, $ewallet, $dp, $cardno, $postalcode);


	//Running error handlers
	$signup->signupUser();

	//Going back to front page
	header("location: ../index.php?error=none");
}