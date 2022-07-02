<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
      <h2 class="animate__animated animate__bounce" style="color:white">Social Fiesta</h2>
    </header>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form class="box_" action="sign-up.php" method="post">
				<img id="avatar" src="img/avatar.svg">
				<h2 class="animate__heartBeat animate__heartBeat">Registration Form</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First & Last Name</h5>
           		   		<input type="text" id="name" class="input">
           		   </div>
           		</div>
				
				           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" id="email" class="input">
           		   </div>
           		</div>
				
				           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Password</h5>
           		   		<input type="password" id="password" class="input">
           		   </div>
           		</div>
				
				           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Confirm Password</h5>
           		   		<input type="password" id="password" class="input">
           		   </div>
           		</div>
				
				
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i> 
           		   </div>
           		   <div class="div">
           		    	<h5>Phone#</h5>
           		    	<input type="text" id="ph" class="input">
            	   </div>
            	</div>
				
				<?php if (!empty($_GET['e']) && $_GET['e'] == 'true'): ?>
                <div class="box-error">
                Account with this email already exists!
                </div>
                <?php endif; ?>
				
				<div class="login-container">
				<p style="color: #595959">Already have an account? <a href="http://localhost/website/login.php" style="color:#38d39f">Log In</a></p>
				</div>
            	<input type="submit" id="submit" class="btn" value="Sign Up">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
