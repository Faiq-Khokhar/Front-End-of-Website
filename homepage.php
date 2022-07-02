<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
  <section class="showcase">
    <header>
      <h2 class="animate__animated animate__bounce" style="color:white">Social Fiesta</h2>
      <div class="toggle"></div>
    </header>
    <video src="video/2.mp4" type="video/mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>"You miss 100%  </h2> 
      <h3> of the shots you don't take."</h3>
      <p><b>Social Fiesta</b> is a Site which enlightens the Knowledge of <b>CIVIL RIGHTS</b>.</p>
      <a href="http://localhost/website/login.php">Login</a>
	  <a href="http://localhost/website/signup.php">Sign Up</a><br>
	  <a href="http://localhost/website/gallery.php">Explore</a>
    </div>
    <ul class="social">
      <li><a href="https://www.facebook.com/faiq.khokhar.7"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="https://twitter.com/KHOKHOxMEMES?s=09"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="https://www.instagram.com/_faek.06/"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="http://localhost/website/homepage.php">Home</a></li>
      <li><a href="http://localhost/website/gallery.php">Gallery</a></li>
      <li><a href="#">CIVIL RIGHTS</a></li>
    </ul>
  </div>
    <script>
      const menuToggle = document.querySelector('.toggle')
      const showcase = document.querySelector('.showcase')

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active')
        showcase.classList.toggle('active')
      })</script>
  </body>
  </html>