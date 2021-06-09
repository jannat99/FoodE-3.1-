<?php
	session_start();
	$con = mysqli_connect('localhost','root');
	if($con){
		echo" connection successful";
	}else{
		echo" no connection";
	}
	mysqli_select_db($con, '170204051');
	if(isset($_POST['submit'])){
	$firstname  = $_POST['firstname'];
    $password   = $_POST['password'];
	
	$query = "select * from table1 WHERE firstname='$firstname' && password='$password'";
	$query_run = mysqli_query($con, $query);
	if(mysqli_num_rows($query_run) == 1){
		$_SESSION['firstname'] = $firstname;
		header('location:user_profile.php');
	}
	else{
		header('location:home.php');			
    }
	}
	?>