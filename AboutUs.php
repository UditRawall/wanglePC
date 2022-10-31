<?php 

session_start();
if(!isset($_SESSION['username']))
{
  header('location:index.html');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="AboutUs.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="about-section">
  <div class="image-container">
  <div class="text_header">AboutUs</div>
  </div>
</div>



<nav class="navbar navbar_header navbar-expand-lg navbar-dark bg-dark " role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.html">WanglePC</a>
        <button class="btn_header navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="Games.php" class="nav-link">Games</a></li>
                <li class="nav-item"><a href="Blogs.php" class="nav-link">Blogs</a></li>
            </ul>
            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
              <h3 style="margin-right:15px; color: white;"><?php  echo $_SESSION['username']; ?></h3>
              <a class="float-right" href="logout.php" style="font-weight: bold; color: red; margin-top:6px;"><span style="border:3px solid white; background-color: white;">LOGOUT</span></a>
            </ul> 
        </div>
    </div>
</nav>



<br><br><br><br><br><br><br><br><br><br>
<h2 style="text-align:center">Our Team</h2>
<div class="row_about">
  <div class="column_about">
    <div class="card_about">
      <img src="SAKSHAM_web.jpeg" alt="TAKTAM" style="width:100%">
      <div class="container_about"><center>
        <h2>SAKSHAM TOMAR</h2>
        <p class="title_about">CEO</p>
        <p>B.Tech Computer Science Student With Specialization in IOT and Cloud Computing</p>
        <a href="https://www.linkedin.com/in/saksham-tomar-94b63017a"><button class="button_about">LinkedIn</button></a></center>
      </div>
    </div>
  </div>

  <div class="column_about">
    <div class="card_about">
      <img src="KRITGYA_web.jpg" alt="Mike" style="width:100%">
      <div class="container_about"><center>
        <h2>KRITGYA KUMAR</h2>
        <p class="title_about">STACK DEVELOPER</p>
        <p>B.Tech CSE Student With Specialization in Python(Core and Advanced) and Graphic Designing</p>
        <a href="https://www.linkedin.com/in/kritgya-kumar-8a0651155/"><button class="button_about">LinkedIn</button></a></center>
      </div>
    </div>
  </div>
  
  <div class="column_about">
    <div class="card_about">
      <img src="ANSHUL_web.jpeg" alt="John" style="width:100%">
      <div class="container_about"><center>
        <h2>ANSHUL TAKSHAK</h2>
        <p class="title_about">CONTENT WRITER</p>
        <p>B.Tech ECE Student With Specialization in Programming and Cloud Computing</p>
        <a href="https://www.linkedin.com/in/anshul-takshak-06097514b/"><button class="button_about">LinkedIn</button></a></center>
      </div>
    </div>
  </div>
</div> 





<br><br><br><br><br><br><br><br><br>
<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Wangle<span>PC</span></h3>
 
 <p class="footer-links">
 <a href="#">Home</a>
 ·
 <a href="Blogs.html">Blogs</a>
 ·
 <a href="AboutUs.html">AboutUs</a>
 ·
 <a href="Games.html">Games</a>
 .
 <a href="#">FAQ</a>
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
 


</body>
</html>
