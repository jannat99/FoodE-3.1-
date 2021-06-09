<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cart</title>
	<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cart_style.css">
</head>
<body>
    <div class="back">
		<ul>
			<li><a href="user_profile.php">USER PROFILE</a></li>
	        <li><a href="menu.php">MENU</a></li>
		    <li class="active"><a href="#">CART</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="about_us.php">ABOUT US</a></li>
			<li><a href="home.php">LOG OUT</a></li>
	    </ul>
	    <div class="content">
			<div class="heading"><div class="head1">Food Name & Size</div><div class="head2">Quantity</div><div class="head3">Price/Quantity</div><div class="head4">Price with Quantity</div><div class="head5">+Vat(15%)</div><div class="head6">Toatl Price</div></div>
			    <h1>
		            <?php
			            if(isset($_REQUEST['option1'])) { echo $_REQUEST['option1']."<br>";  }
			            if(isset($_REQUEST['option2'])) { echo $_REQUEST['option2']."<br>";  }
                        if(isset($_REQUEST['option3'])) { echo $_REQUEST['option3']."<br>";  }
                        if(isset($_REQUEST['option4'])) { echo $_REQUEST['option4']."<br>";  }
			            if(isset($_REQUEST['option5'])) { echo $_REQUEST['option5']."<br>";  }
                        if(isset($_REQUEST['option6'])) { echo $_REQUEST['option6']."<br>";  }
                        if(isset($_REQUEST['option7'])) { echo $_REQUEST['option7']."<br>";  }
			            if(isset($_REQUEST['option8'])) { echo $_REQUEST['option8']."<br>";  }
                        if(isset($_REQUEST['option9'])) { echo $_REQUEST['option9']."<br>";  }
                        if(isset($_REQUEST['option10'])){ echo $_REQUEST['option10']."<br>"; }
			            if(isset($_REQUEST['option11'])){ echo $_REQUEST['option11']."<br>"; }
                        if(isset($_REQUEST['option12'])){ echo $_REQUEST['option12']."<br>"; }	
                        if(isset($_REQUEST['option13'])){ echo $_REQUEST['option13']."<br>"; }
			            if(isset($_REQUEST['option14'])){ echo $_REQUEST['option14']."<br>"; }
                        if(isset($_REQUEST['option15'])){ echo $_REQUEST['option15']."<br>"; }
                        if(isset($_REQUEST['option16'])){ echo $_REQUEST['option16']."<br>"; }
			            if(isset($_REQUEST['option17'])){ echo $_REQUEST['option17']."<br>"; }
                        if(isset($_REQUEST['option18'])){ echo $_REQUEST['option18']."<br>"; }
                        if(isset($_REQUEST['option19'])){ echo $_REQUEST['option19']."<br>"; }
			            if(isset($_REQUEST['option20'])){ echo $_REQUEST['option20']."<br>"; }
                        if(isset($_REQUEST['option21'])){ echo $_REQUEST['option21']."<br>"; }
                        if(isset($_REQUEST['option22'])){ echo $_REQUEST['option22']."<br>"; }
			            if(isset($_REQUEST['option23'])){ echo $_REQUEST['option23']."<br>"; }
                        if(isset($_REQUEST['option24'])){ echo $_REQUEST['option24']."<br>"; }				
                    ?>	
                </h1>
			    <h2>
			        <?php
			            if(isset($_REQUEST['option1'])) { echo $_REQUEST['q1']."<br>";  }
			            if(isset($_REQUEST['option2'])) { echo $_REQUEST['q2']."<br>";  }
                        if(isset($_REQUEST['option3'])) { echo $_REQUEST['q3']."<br>";  }
                        if(isset($_REQUEST['option4'])) { echo $_REQUEST['q4']."<br>";  }
			            if(isset($_REQUEST['option5'])) { echo $_REQUEST['q5']."<br>";  }
                        if(isset($_REQUEST['option6'])) { echo $_REQUEST['q6']."<br>";  }
                        if(isset($_REQUEST['option7'])) { echo $_REQUEST['q7']."<br>";  }
			            if(isset($_REQUEST['option8'])) { echo $_REQUEST['q8']."<br>";  }
                        if(isset($_REQUEST['option9'])) { echo $_REQUEST['q9']."<br>";  }
                        if(isset($_REQUEST['option10'])){ echo $_REQUEST['q10']."<br>"; }
			            if(isset($_REQUEST['option11'])){ echo $_REQUEST['q11']."<br>"; }
                        if(isset($_REQUEST['option12'])){ echo $_REQUEST['q12']."<br>"; }	
                        if(isset($_REQUEST['option13'])){ echo $_REQUEST['q13']."<br>"; }
			            if(isset($_REQUEST['option14'])){ echo $_REQUEST['q14']."<br>"; }
                        if(isset($_REQUEST['option15'])){ echo $_REQUEST['q15']."<br>"; }
                        if(isset($_REQUEST['option16'])){ echo $_REQUEST['q16']."<br>"; }
			            if(isset($_REQUEST['option17'])){ echo $_REQUEST['q17']."<br>"; }
                        if(isset($_REQUEST['option18'])){ echo $_REQUEST['q18']."<br>"; }
                        if(isset($_REQUEST['option19'])){ echo $_REQUEST['q19']."<br>"; }
			            if(isset($_REQUEST['option20'])){ echo $_REQUEST['q20']."<br>"; }
                        if(isset($_REQUEST['option21'])){ echo $_REQUEST['q21']."<br>"; }
                        if(isset($_REQUEST['option22'])){ echo $_REQUEST['q22']."<br>"; }
		              	if(isset($_REQUEST['option23'])){ echo $_REQUEST['q23']."<br>"; }
                        if(isset($_REQUEST['option24'])){ echo $_REQUEST['q24']."<br>"; }			
                    ?>	
                </h2>
			    <h3>
			        <?php
		               	if(isset($_REQUEST['option1'])) { echo "699" ."<br>";  }
			            if(isset($_REQUEST['option2'])) { echo "1299" ."<br>";  }
                        if(isset($_REQUEST['option3'])) { echo "699" ."<br>";  }
                        if(isset($_REQUEST['option4'])) { echo "1299" ."<br>";  }
			            if(isset($_REQUEST['option5'])) { echo "699" ."<br>";  }
                        if(isset($_REQUEST['option6'])) { echo "1299" ."<br>";  }
                        if(isset($_REQUEST['option7'])) { echo "699" ."<br>";  }
			            if(isset($_REQUEST['option8'])) { echo "1299" ."<br>";  }
                        if(isset($_REQUEST['option9'])) { echo "699" ."<br>";  }
                        if(isset($_REQUEST['option10'])){ echo "1299" ."<br>";  }
			            if(isset($_REQUEST['option11'])){ echo "699" ."<br>";  }
                        if(isset($_REQUEST['option12'])){ echo "1299" ."<br>";  }	
                        if(isset($_REQUEST['option13'])){ echo "199" ."<br>";  }
			            if(isset($_REQUEST['option14'])){ echo "349" ."<br>";  }
                        if(isset($_REQUEST['option15'])){ echo "199" ."<br>";  }
                        if(isset($_REQUEST['option16'])){ echo "349" ."<br>";  }
			            if(isset($_REQUEST['option17'])){ echo "199" ."<br>";  }
                        if(isset($_REQUEST['option18'])){ echo "349" ."<br>";  }
                        if(isset($_REQUEST['option19'])){ echo "199" ."<br>";  }
			            if(isset($_REQUEST['option20'])){ echo "349" ."<br>";  }
                        if(isset($_REQUEST['option21'])){ echo "199" ."<br>";  }
                        if(isset($_REQUEST['option22'])){ echo "349" ."<br>";  }
			            if(isset($_REQUEST['option23'])){ echo "199" ."<br>";  }
                        if(isset($_REQUEST['option24'])){ echo "349" ."<br>";  }				
                    ?>	
                </h3>
			    <h4>
			        <?php
			            if(isset($_REQUEST['option1'])) { echo 699 * $_REQUEST['q1']."<br>";  }
		              	if(isset($_REQUEST['option2'])) { echo 1299 * $_REQUEST['q2']."<br>";  }
                        if(isset($_REQUEST['option3'])) { echo 699 * $_REQUEST['q3']."<br>";  }
                        if(isset($_REQUEST['option4'])) { echo 1299 * $_REQUEST['q4']."<br>";  }
		             	if(isset($_REQUEST['option5'])) { echo 699 * $_REQUEST['q5']."<br>";  }
                        if(isset($_REQUEST['option6'])) { echo 1299 * $_REQUEST['q6']."<br>";  }
                        if(isset($_REQUEST['option7'])) { echo 699 * $_REQUEST['q7']."<br>";  }
		             	if(isset($_REQUEST['option8'])) { echo 1299 * $_REQUEST['q8']."<br>";  }
                        if(isset($_REQUEST['option9'])) { echo 699 * $_REQUEST['q9']."<br>";  }
                        if(isset($_REQUEST['option10'])){ echo 1299 * $_REQUEST['q10']."<br>"; }
		             	if(isset($_REQUEST['option11'])){ echo 699 * $_REQUEST['q11']."<br>"; }
                        if(isset($_REQUEST['option12'])){ echo 1299 * $_REQUEST['q12']."<br>"; }	
                        if(isset($_REQUEST['option13'])){ echo 199 * $_REQUEST['q13']."<br>"; }
		             	if(isset($_REQUEST['option14'])){ echo 349 * $_REQUEST['q14']."<br>"; }
                        if(isset($_REQUEST['option15'])){ echo 199 * $_REQUEST['q15']."<br>"; }
                        if(isset($_REQUEST['option16'])){ echo 349 * $_REQUEST['q16']."<br>"; }
			            if(isset($_REQUEST['option17'])){ echo 199 * $_REQUEST['q17']."<br>"; }
                        if(isset($_REQUEST['option18'])){ echo 349 * $_REQUEST['q18']."<br>"; }
                        if(isset($_REQUEST['option19'])){ echo 199 * $_REQUEST['q19']."<br>"; }
			            if(isset($_REQUEST['option20'])){ echo 349 * $_REQUEST['q20']."<br>"; }
                        if(isset($_REQUEST['option21'])){ echo 199 * $_REQUEST['q21']."<br>"; }
                        if(isset($_REQUEST['option22'])){ echo 349 * $_REQUEST['q22']."<br>"; }
			            if(isset($_REQUEST['option23'])){ echo 199 * $_REQUEST['q23']."<br>"; }
                        if(isset($_REQUEST['option24'])){ echo 349 * $_REQUEST['q24']."<br>"; }		
                    ?>	
                </h4>
		    	<h5>
			        <?php
		               	if(isset($_REQUEST['option1'])) { echo 699 * $_REQUEST['q1'] * 0.15 ."<br>";  }
		            	if(isset($_REQUEST['option2'])) { echo 1299 * $_REQUEST['q2'] * 0.15 ."<br>";  }
                        if(isset($_REQUEST['option3'])) { echo 699 * $_REQUEST['q3'] * 0.15 ."<br>";  }
                        if(isset($_REQUEST['option4'])) { echo 1299 * $_REQUEST['q4'] * 0.15 ."<br>";  }
		             	if(isset($_REQUEST['option5'])) { echo 699 * $_REQUEST['q5'] * 0.15 ."<br>";  }
                        if(isset($_REQUEST['option6'])) { echo 1299 * $_REQUEST['q6'] * 0.15 ."<br>";  }
                        if(isset($_REQUEST['option7'])) { echo 699 * $_REQUEST['q7'] * 0.15 ."<br>";  }
		             	if(isset($_REQUEST['option8'])) { echo 1299 * $_REQUEST['q8'] * 0.15 ."<br>";  }
                        if(isset($_REQUEST['option9'])) { echo 699 * $_REQUEST['q9'] * 0.15 ."<br>";  }
                        if(isset($_REQUEST['option10'])){ echo 1299 * $_REQUEST['q10'] * 0.15 ."<br>"; }
		               	if(isset($_REQUEST['option11'])){ echo 699 * $_REQUEST['q11'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option12'])){ echo 1299 * $_REQUEST['q12'] * 0.15 ."<br>"; }	
                        if(isset($_REQUEST['option13'])){ echo 199 * $_REQUEST['q13'] * 0.15 ."<br>"; }
		            	if(isset($_REQUEST['option14'])){ echo 349 * $_REQUEST['q14'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option15'])){ echo 199 * $_REQUEST['q15'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option16'])){ echo 349 * $_REQUEST['q16'] * 0.15 ."<br>"; }
		             	if(isset($_REQUEST['option17'])){ echo 199 * $_REQUEST['q17'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option18'])){ echo 349 * $_REQUEST['q18'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option19'])){ echo 199 * $_REQUEST['q19'] * 0.15 ."<br>"; }
		              	if(isset($_REQUEST['option20'])){ echo 349 * $_REQUEST['q20'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option21'])){ echo 199 * $_REQUEST['q21'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option22'])){ echo 349 * $_REQUEST['q22'] * 0.15 ."<br>"; }
		              	if(isset($_REQUEST['option23'])){ echo 199 * $_REQUEST['q23'] * 0.15 ."<br>"; }
                        if(isset($_REQUEST['option24'])){ echo 349 * $_REQUEST['q24'] * 0.15 ."<br>"; }	
                    ?>	
                </h5>
	            <h6>
		          	<?php
		             	@$m1 = 699 * $_REQUEST['q1'];   
                        @$m2 = 1299 * $_REQUEST['q2'];
                        @$m3 = 699 * $_REQUEST['q3'];   
                        @$m4 = 1299 * $_REQUEST['q4'];
                        @$m5 = 699 * $_REQUEST['q5'];   
                        @$m6 = 1299 * $_REQUEST['q6'];
                        @$m7 = 699 * $_REQUEST['q7'];   
                        @$m8 = 1299 * $_REQUEST['q8'];
                        @$m9 = 699 * $_REQUEST['q9'];   
                        @$m10 = 1299 * $_REQUEST['q10'];
                        @$m11 = 699 * $_REQUEST['q11'];   
                        @$m12 = 1299 * $_REQUEST['q12'];		
			            @$m13 = 199 * $_REQUEST['q13'];   
                        @$m14 = 349 * $_REQUEST['q14'];
                        @$m15 = 199 * $_REQUEST['q15'];   
                        @$m16 = 349 * $_REQUEST['q16'];
                        @$m17 = 199 * $_REQUEST['q17'];   
                        @$m18 = 349 * $_REQUEST['q18'];
                        @$m19 = 199 * $_REQUEST['q19'];   
                        @$m20 = 349 * $_REQUEST['q20'];
                        @$m21 = 199 * $_REQUEST['q21'];   
                        @$m22 = 349 * $_REQUEST['q22'];
                        @$m23 = 199 * $_REQUEST['q23'];   
                        @$m24 = 349 * $_REQUEST['q24'];
			            @$n1 = 699 * $_REQUEST['q1'] * 0.15;   
                        @$n2 = 1299 * $_REQUEST['q2'] * 0.15;
                        @$n3 = 699 * $_REQUEST['q3'] * 0.15;   
                        @$n4 = 1299 * $_REQUEST['q4'] * 0.15;
                        @$n5 = 699 * $_REQUEST['q5'] * 0.15;   
                        @$n6 = 1299 * $_REQUEST['q6'] * 0.15;
                        @$n7 = 699 * $_REQUEST['q7'] * 0.15;   
                        @$n8 = 1299 * $_REQUEST['q8'] * 0.15;
                        @$n9 = 699 * $_REQUEST['q9'] * 0.15;   
                        @$n10 = 1299 * $_REQUEST['q10'] * 0.15;
                        @$n11 = 699 * $_REQUEST['q11'] * 0.15;   
                        @$n12 = 1299 * $_REQUEST['q12'] * 0.15;		
			            @$n13 = 199 * $_REQUEST['q13'] * 0.15;   
                        @$n14 = 349 * $_REQUEST['q14'] * 0.15;
                        @$n15 = 199 * $_REQUEST['q15'] * 0.15;   
                        @$n16 = 349 * $_REQUEST['q16'] * 0.15;
                        @$n17 = 199 * $_REQUEST['q17'] * 0.15;   
                        @$n18 = 349 * $_REQUEST['q18'] * 0.15;
                        @$n19 = 199 * $_REQUEST['q19'] * 0.15;   
                        @$n20 = 349 * $_REQUEST['q20'] * 0.15;
                        @$n21 = 199 * $_REQUEST['q21'] * 0.15;   
                        @$n22 = 349 * $_REQUEST['q22'] * 0.15;
                        @$n23 = 199 * $_REQUEST['q23'] * 0.15;   
                        @$n24 = 349 * $_REQUEST['q24'] * 0.15;		
                
			         	if(isset($_REQUEST['option1']) || isset($_REQUEST['option2']) || isset($_REQUEST['option3']) || isset($_REQUEST['option4']) || isset($_REQUEST['option5']) || isset($_REQUEST['option6'])|| isset($_REQUEST['option7']) || isset($_REQUEST['option8']) || isset($_REQUEST['option9']) || isset($_REQUEST['option10']) || isset($_REQUEST['option11']) || isset($_REQUEST['option12']) || isset($_REQUEST['option13']) || isset($_REQUEST['option14']) || isset($_REQUEST['option15']) || isset($_REQUEST['option16']) || isset($_REQUEST['option17']) || isset($_REQUEST['option18']) || isset($_REQUEST['option19']) || isset($_REQUEST['option20']) || isset($_REQUEST['option21']) || isset($_REQUEST['option22']) || isset($_REQUEST['option23']) || isset($_REQUEST['option24'])){
				
			               	@$n = $m1 + $m2 + $m3 + $m4 + $m5 + $m6 + $m7 + $m8 + $m9 + $m10 + $m11 + $m12 + $m13 + $m14 + $m15 + $m16 + $m17 + $m18 + $m19 + $m20 + $m21 + $m22 + $m23 + $m24 + $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 + $n9 + $n10 + $n11 + $n12 + $n13 + $n14 + $n15 + $n16 + $n17 + $n18 + $n19 + $n20 + $n21 + $n22 + $n23 + $n24;
                            echo " ".$n;  
			            }
                    ?>	
                </h6>
			    <div class="check1"><a><button class="button" name="confirm" value="confirm">Confirm Order</button></a></div>
			    <div class="check2"><a href="user_profile.php"><p class="see">Check User Profile</p></a></div>
	        </div>
		</div>
    </div>		
	<section class="footer">
		<p>©2020 DOMINO'S PIZZA. Made of 100% Halal Ingredients.</p>				
	</section>
</body>
</html>