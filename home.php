<?php 

session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.html');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #1fc8db; background-image: linear-gradient(140deg,#EADEDB 0%, #BC70A4 50%, #BFD641 75%);">

<div class="container_img_header">
  <div class="text_img_header">WanglePC</div>
</div>


<nav class="navbar navbar_header navbar-expand-lg navbar-dark bg-dark " role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.html">WanglePC</a>
        <button class="btn_header navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="AboutUs.php" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="Games.php" class="nav-link">Games</a></li>
                <li class="nav-item"><a href="Blogs.php" class="nav-link">Blogs</a></li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
              <h3 style="margin-right:15px; margin-top: 1px; color: white;"><?php  echo $_SESSION['username']; ?></h3>
            	<a class="float-right" href="logout.php" style="font-weight: bold; color: red; margin-top:6px;"><span style="border:3px solid white; background-color: white;">LOGOUT</span></a>
            </ul>	
        </div>
    </div>
</nav>




<br><br><br><br><br><br>
<h2 class="Games_text" style="text-align:center">GAMES</h2>
<br><br>


<div class="container-fluid con_slideslow">
  <div class="mySlides">
    <div class="numbertext">1 / 12</div>
    <img class="img_slideslow" src="CyberPunk(Slide slow).jpeg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 12</div>
    <img  class="img_slideslow" src="GTA 5(Slide Slow).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 12</div>
    <img  class="img_slideslow" src="Valorant(Slide Slow).webp" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 12</div>
    <img class="img_slideslow" src="COD(Slide Slow).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 12</div>
    <img  class="img_slideslow" src="Rocket Leauge(Slide Slow).jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 12</div>
    <img  class="img_slideslow" src="Fortnite(Slide Slow).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">7 / 12</div>
    <img  class="img_slideslow" src="CSGO(Slide Slow).webp" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 12</div>
    <img  class="img_slideslow" src="ITT(Slide Slow).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">9 / 12</div>
    <img  class="img_slideslow" src="FIFA(Slide Slow).png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">10 / 12</div>
    <img  class="img_slideslow" src="APEX(Slide Slow).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">11 / 12</div>
    <img  class="img_slideslow" src="Wayout(Slide Slow).jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">12 / 12</div>
    <img  class="img_slideslow" src="Fallguys(Slide Slow).jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row row_slideslow">
    <div class="column column_slideslow">
      <img class="demo cursor" src="CyberPunk(Slide slow).jpeg" style="width:100%" onclick="currentSlide(1)" alt="Cyberpunk 2077">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="GTA 5(Slide Slow).jpg" style="width:100%" onclick="currentSlide(2)" alt="Grand Theft Auto V">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="Valorant(Slide Slow).webp" style="width:100%" onclick="currentSlide(3)" alt="Valorant">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="COD(Slide Slow).jpg" style="width:100%" onclick="currentSlide(4)" alt="Call of Duty: Warzone">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="Rocket Leauge(Slide Slow).jpg" style="width:100%" onclick="currentSlide(5)" alt="Rocket League">
    </div>    
    <div class="column column_slideslow">
      <img class="demo cursor" src="Fortnite(Slide Slow).jpg" style="width:100%" onclick="currentSlide(6)" alt="Fortnite">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="CSGO(Slide Slow).webp" style="width:100%" onclick="currentSlide(7)" alt="Counter-Strike: Global Offensive">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="ITT(Slide Slow).jpg" style="width:100%" onclick="currentSlide(8)" alt="It Takes Two">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="FIFA(Slide Slow).png" style="width:100%" onclick="currentSlide(9)" alt="FIFA 21">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="APEX(Slide Slow).jpg" style="width:100%" onclick="currentSlide(10)" alt="Apex Legends">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="Wayout(Slide Slow).jpg" style="width:100%" onclick="currentSlide(11)" alt="A Way Out">
    </div>
    <div class="column column_slideslow">
      <img class="demo cursor" src="Fallguys(Slide Slow).jpg" style="width:100%" onclick="currentSlide(12)" alt="Fall Guys: Ultimate Knockout">
    </div>
  </div>
</div>


<br><br><br><br><br><br><br><br>
<center><a href="#" class="w3-btn w3-teal btn-lg" style="padding:15px; padding-left: 50px; padding-right:50px;">Redirecting to Desktop</a></center>

<br><br><br><br><br><br><br><br><br>
<center>
<a href="Contact_from_afterlogin.html" class="button_form"><span class="three_button_text" style="color:black;font-weight:bold;">Contact</span></a>
</center>


<br><br><br><br><br><br><br><br>
<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Wangle<span>PC</span></h3>
 
 <p class="footer-links">
 <a href="home.php">Home</a>
 ·
 <a href="Blogs.php">Blogs</a>
 ·
 <a href="AboutUs.php">AboutUs</a>
 ·
 <a href="Games.php">Games</a>
 .
 <a href="Contact_form.html">FAQ</a>
 ·
 <a href="mailto:someone@gmail.com?Subject=Hello%20again">Contact</a>
 </p>
 
 <p class="footer-company-name">wanglepc &copy; 2021</p>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-map-marker"></i>
 <p><span>21 Revolution Street</span> Delhi, India</p>
 </div>
 
 <div>
 <i class="fa fa-phone"></i>
 <p>+1 999 999999</p>
 </div>
 
 <div>
 <i class="fa fa-envelope"></i>
 <p><a href="mailto:support@company.com">contact@wanglepc.com</a></p>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 <span>About the company</span>
 Web Dev Trick is a blog for web designers, graphic designers, web developers &amp; SEO Learner.
 </p>
 
 <div class="footer-icons">
 
 <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
 <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
 <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
 <a href="https://github.com/"><i class="fa fa-github"></i></a>
 
 </div>
 </div>
 </footer>




<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>



</body>
</html>