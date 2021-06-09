<html lang="en">
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>USER PROFILE</title>
	    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="css/user_profile_style.css">
    </head>
    <body> 
	    <div class="part1">
            <div class="content">
			    <ul>
			        <li class="active"><a href="user_profile.php">USER PROFILE</a></li>
				    <li><a href="menu.php">MENU</a></li>
				    <li><a href="cart.php">CART</a></li>
				    <li><a href="contact.php">CONTACT</a></li>
				    <li><a href="about_us.php">ABOUT US</a></li>
					<li><a href="home.php">LOG OUT</a></li>
			    </ul>
                <h1>Welcome</h1>
				    <p>
					    <?php 
				            session_start(); 
				            if(isset($_SESSION['firstname'])){
					            echo "{$_SESSION['firstname']} !!"; 
						}
				        ?>
					</p>
			</div>
        </div>
        <div class="part2">
		    <h2><div class="text1">Enjoy Your Food</div></h2>
		    <h3><div class="text2">with Domino's</div></h3>
        </div>
        <div class="part3">
            <div class="content">
                <p>
				</p>
            </div>
        </div>
        <div class="part4"> 
		    <div class="half">
			    <h4>Founded in 1960, Domino's is the recognized world leader in pizza delivery operating a network of company-owned and franchise-owned stores in the United States and international markets. Domino's is a company of exceptional people on a mission to be the best pizza delivery company in the world.</h4>
				<h5>Buy Domino’s pizza online for those fun-filled times that demand something light and awesomely delicious, tease your taste buds with the vivid flavours of cheese-filled, crispy Domino’s Pizza. With assorted menus, just ready to be ordered with a swipe, our pizza delivery app has the perfect recipe to build the mood right for any occasion – be it a get together, party, or simply spending time with friends or family.</h5>
			    
			</div>
		</div>
	</body>
</html>
	