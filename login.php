<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<header>
      <h2 class="animate__animated animate__bounce" style="color:white">Social Fiesta</h2>
    </header>
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="index.php">
				<img src="img/avatar.svg">
				<h2 class="animate__heartBeat animate__heartBeat">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" id="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i> 
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" id="password" class="input">
            	   </div>
            	</div>
				
	    <?php if (!empty($_GET['l']) && $_GET['l'] == 'true'): ?>
        <div class="box-success">
          Account successfully created, Sign In to continue
        </div>
        <?php endif; ?>

        <?php if (!empty($_GET['e']) && $_GET['e'] == 'true'): ?>
        <div class="box-error">
          Incorrect Email/Password.
        </div>
        <?php endif; ?>
				
            	<a class="fp" href="#">Forgot Password?</a><br>
				<div class="login-container">
				<p style="color: #595959">Don't have an account? <a id="su" href="http://localhost/website/signup.php" style="color:#38d39f"><strong>Sign Up</strong></a></p>
				</div>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
