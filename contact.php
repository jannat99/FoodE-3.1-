<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>CONTACT</title>
	<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/contact_style.css">
	
</head>
<body>
    <div class="back">
		<ul>
			<li><a href="user_profile.php">USER PROFILE</a></li>
		    <li><a href="menu.php">MENU</a></li>
		    <li><a href="cart.php">CART</a></li>
		    <li class="active"><a href="#">CONTACT</a></li>
		    <li><a href="about_us.php">ABOUT US</a></li>
			<li><a href="home.php">LOG OUT</a></li>
		</ul>
		<div class="contact-form">
		    <div class="extra"><p>+8801</p></div>
			<form id="contact-form" method="POST">
			    <h1>Say Hello!</h1>
				    <h2>We are here for you</h2>
						<div class="text"><input type="text" name="fname" value="" placeholder="Enter First Name" required></div>	
						<div class="text"><input type="text" name="lname" value="" placeholder="Enter Last Name" required></div>
						<div class="text"><input type="email" name="email" value="" placeholder="Enter Email" required></div>
						<div class="text"><input type="number_format" name="phone" value="" placeholder="Enter Phone Number" required></div>
						<div class="text"><textarea name="message" class="form-control" placeholder="Write Message" row="4" required></textarea></div>
						<input type="submit" name="submit" class="form-control submit" value="SEND">	
			</form>
			<div class="side">
			    <p><i><u>Address</u></i><br><br>Rangs Fortune Square, Ground & First<br>Floor,House/ Plot no #32, Rd 02, Dhaka 1205<br><br><br><br><i><u>Let's Talk</u></i><br><br>+09612-216656<br><br><br><br><i><u>General Support</u></i><br><br>dominos33@gmail.com</p>
			</div>
			<?php
			session_start();
	
	        $con = mysqli_connect('localhost','root');
	        mysqli_select_db($con, '170204051');
	
	        if(isset($_POST['submit'])){
	            $fname   = $_POST['fname'];
	            $lname   = $_POST['lname'];
	            $email   = $_POST['email'];
	            $phone   = $_POST['phone'];
	            $message = $_POST['message'];
	            
				
				if(!preg_match("/^[a-zA-Z\s]+$/",$fname)){
			        echo '<script type="text/javascript"> alert("Enter your firstname in alphabets only !")</script>';
	     	    }
			    else if(!preg_match("/^[a-zA-Z\s]+$/",$lname)){
			        echo '<script type="text/javascript"> alert("Enter your lastname in alphabets only !")</script>';
	     	    }
                else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				    echo '<script type="text/javascript"> alert("Enter your email in correct format !")</script>';
			    }
			    else if(!preg_match('@[5-9]@',$phone)|| (strlen($phone)<9) || (strlen($phone)>9)){
			        echo '<script type="text/javascript"> alert("Enter last 9 digits of your contact!")</script>';
	     	    }
			
		        $query = "insert into table2(fname, lname, email, phone, message) values('$fname', '$lname', '$email', '$phone', '$message')";
	            $query_run = mysqli_query($con,$query);
		    
		     	if($query_run){
		            echo '<script type="text/javascript"> alert("recorded successfully !")</script>';
	            }
		        else{
                    echo '<script type="text/javascript"> alert("Error !")</script>';
                }			
			}
            ?>
		</div>
    </div>
	<section class="footer">
     	<p>©2020 DOMINO'S PIZZA. Made of 100% Halal Ingredients.</p>
	</section>
</body>
</html>