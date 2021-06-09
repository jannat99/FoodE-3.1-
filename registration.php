<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registration</title>
	<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/registration_style.css">
</head>
<body>
	<div class="container">
	    <div class="item1">
		    <div>
		        <ul>
			        <li><a href="home.php">HOME</a></li>
				    <li class="active"><a href="#">REGISTRATION</a></li>
			    </ul>
			</div>
		</div>
        <div class="item2">
		    <div id="slide">
			    <figure>
					<img src="image/7.jpg" class="size">
					<img src="image/8.jpg" class="size">
					<img src="image/9.jpg" class="size">
					<img src="image/10.jpg" class="size">
					<img src="image/11.jpg" class="size">
				</figure>
			</div>
		</div>
        <div class="item3">
		    <div>
			    <h1 class="header">Register here !</h1>
			        <form action="registration.php" id="form" method="post">
			            <h2 class="name">Firstname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h2>
				            <input class="input" type="text" name="firstname" placeholder="enter your first name"><br>
				            <label class="label"></label>
				        <h2 class="name">Lastname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h2>
				            <input class="input" type="text" name="lastname" placeholder="enter your last name"><br>
				            <label class="label"></label>
				        <h2 class="name">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h2>
				            <input class="input" type="email" name="email" placeholder="enter your email"><br>
				            <label class="label"></label>
				        <h2 class="name">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h2>
				            <input class="input" type="password" name="password" placeholder="enter your password"><br>
				            <label class="label"></label>
				        <h2 class="name">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;+8801</h2>
				            <input class="diff" type="number" name="contact" placeholder="enter your contact"><br>
				            <label class="label"></label>
			           	<h2 class="name">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h2>
				            <input type="radio" id="male" name="gender" value="Male"><span id="male1">Male</span>&nbsp;
				            <input type="radio" id="female" name="gender" value="Female"><span id="male1">Female</span>&nbsp;
				            <input type="radio" id="other" name="gender" value="Other"><span id="male1">Other</span>&nbsp;
				        <button name="submit" id="submit" type="submit">Submit</button>
		        	</form>
					<h3 class="end"><a href="home.php">Already Registered?</a></h3>
		    </div>
	    </div>
         
	</div>
    <div>
	<?php
	session_start();
	
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con, '170204051');
	
	if(isset($_POST['submit'])){
	    $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $contact    = $_POST['contact'];
        $gender     = $_POST['gender'];
	
		if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($contact) || empty($gender)){
		     echo '<script type="text/javascript"> alert("No field should be empty !")</script>';
		}
		else{
			$query = "select * from table1 WHERE firstname='$firstname' && lastname='$lastname' && email='$email' && password='$password' && contact='$contact' && gender='$gender'";
	        $query_run = mysqli_query($con, $query);
	        
	        if(mysqli_num_rows($query_run)>0){
	            echo '<script type="text/javascript"> alert("User already registered")</script>';
	        }
			
			else if(!preg_match("/^[a-zA-Z\s]+$/",$firstname)){
			    echo '<script type="text/javascript"> alert("Enter your firstname in alphabets only !")</script>';
	     	}
			
			else if(!preg_match("/^[a-zA-Z\s]+$/",$lastname)){
			    echo '<script type="text/javascript"> alert("Enter your lastname in alphabets only !")</script>';
	     	}
			
			else if(strlen($_POST["password"]) <= '8' || !preg_match("#[0-9]+#",$password) || !preg_match("#[A-Z]+#",$password)){
			    echo '<script type="text/javascript"> alert("Enter your password of length more that 8 alphabets(a-z , A-Z) and numbers !")</script>';
	     	}
			
			else if(!preg_match('@[5-9]@',$contact)|| (strlen($contact)<9) || (strlen($contact)>9)){
			    echo '<script type="text/javascript"> alert("Enter last 9 digits of your contact!")</script>';
	     	}
			
			else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				 echo '<script type="text/javascript"> alert("Enter your email in correct format !")</script>';
			}
			
	        else{
		        $query1 = "insert into table1(firstname, lastname, email, password, contact, gender) values('$firstname', '$lastname', '$email', '$password', '$contact', '$gender')";
	            $query_run1 = mysqli_query($con,$query1);
		    
		     	if($query_run){
		            echo '<script type="text/javascript"> alert("Account successfully created !")</script>';
	            }
		        else{
                    echo '<script type="text/javascript"> alert("Error !")</script>';
                }			
            }
		}
	}
	?>
	</div>
</body>
</html>
	
	
	
	
	
	