<?php
	session_start();
	$Con=mysqli_connect("localhost","root","","login");

	$username=$_POST['username'];
	$password=$_POST['pass'];


	$username=stripcslashes($username);
	$password=stripcslashes($password);

	$username=mysqli_real_escape_string($Con,$username);
	$password=mysqli_real_escape_string($Con,$password);

	$result=mysqli_query($Con,"SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");

	$row = mysqli_fetch_array($result);

	if ($row['username'] == $username && $row['password'] == $password)
 	{
		$_SESSION['user']=$row['sno'];
		header("location:home.html");
 	}
 	else
 	{
 		echo "<script>alert('Login Values are Not Correct')</script>";
 		echo "<script>window.location.assign('login.html')</script>";
 	}
?>