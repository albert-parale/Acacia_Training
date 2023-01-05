<?php
	
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$cpwd = $_POST['cpwd'];
	}

	include "../classes/signup.classes.php";
	include "../classes/signup-ctr.classes.php";

	$signup = new SignupCtr($uname, $fname, $lname, $email_add, $pwd, $cpwd)
?>