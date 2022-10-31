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
<link rel="stylesheet" type="text/css" href="Blogs.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="image-container_blog">
  <div class="text_blog">Blogs</div>
</div>




<div class="topnav" id="myTopnav">
  <a href="Blogs.php" class="active">Home</a>
  <a href="home.php">WanglePC</a>
  <a href="AboutUs.php">AboutUs</a>
  <a href="Games.php">Games</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <a class="float-right" href="logout.php"><?php  echo $_SESSION['username']; ?></a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



<br><br><br><br><br><br><br><br>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Virtual Cloud Gaming</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg"><img style="height:100%; width:100%;" src="Virtual Machine.png"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>PC Games</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg"><img style="height:100%; width:100%;" src="Games_bg(Blog Page).jpg"></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg"><img style="height:100%; width:100%;" src="Games_bg(Blog Page).jpg"></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Games</h3>
      <div class="fakeimg"><img style="height:100%; width:100%;" src="FIFA(Slide Slow).png"></div><br>
      <div class="fakeimg"><img style="height:100%; width:100%;" src="GTA 5(Slide Slow).jpg"></div><br>
      <div class="fakeimg"><img style="height:100%; width:100%;" src="COD(Games Page).jpg"></div><br>
      <div class="fakeimg"><img style="height:100%; width:100%;" src="Fallguys(Games Page).jpg"></div>
    </div>
    <div class="card">
      <h3>Follow Us</h3>
      <p>Instagram</p>
      <p>Facebook</p>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br><br>
<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Wangle<span>PC</span></h3>
 
 <p class="footer-links">
 <a href="index.html">Home</a>
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
