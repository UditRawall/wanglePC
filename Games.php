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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="Games.css">
</head>
<body>

<div class="container-fluid container_img_gp">
  <div class="text_img_gp">Games</div>
</div>


<div class="topnav" id="myTopnav">
  <a href="Games.php" class="active">Home</a>
  <a href="home.php">WanglePC</a>
  <a href="AboutUs.php">AboutUs</a>
  <a href="Blogs.php">Blogs</a>
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




<br><br><br><br><br><br>
<div class="main_gp">
<div id="myBtnContainer">
  <button class="btn btn_gp active" onclick="filterSelection('all')">All Games</button>
  <button class="btn btn_gp" onclick="filterSelection('Story_Mode')">Story Mode</button>
  <button class="btn btn_gp" onclick="filterSelection('Online')">Online</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row row_gp">
  <div class="column column_gp Story_Mode">
    <div class="content_gp">
      <a href="#"><img src="CyberPunk(Games Page).jpg" alt="Mountains" style="width:100%"></a>
      <center><h4 class="Gamesname_text">Cyberpunk 2077</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Online">
    <div class="content_gp">
      <a href=""><img src="APEX(Games Page).jpg" alt="Lights" style="width:100%"></a>
      <center><h4 class="Gamesname_text">Apex Legends</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Online">
    <div class="content_gp">
    <a href="#"><img src="COD(Games Page).jpg" alt="Nature" style="width:100%"></a>  
      <center><h4 class="Gamesname_text">Call of Duty: Warzone</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  
  <div class="column column_gp Online">
    <div class="content_gp">
      <a href="#"><img src="CSGO(Games Page).jpg" alt="Car" style="width:100%"></a>
      <center><h4 class="Gamesname_text">Counter-Strike: Global Offensive</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Online">
    <div class="content_gp">
    <a href="#"><img src="Fallguys(Games Page).jpg" alt="Car" style="width:100%"></a> 
      <center><h4 class="Gamesname_text">Fall Guys: Ultimate Knockout</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Online">
    <div class="content_gp">
      <a href="#"><img src="FIFA(Games Page).jpg" alt="Car" style="width:100%"></a>
      <center><h4 class="Gamesname_text">FIFA 21</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Story_Mode">
    <div class="content_gp">
    <a href="#"> <img src="GTA 5(Games page).jpg" alt="Car" style="width:100%"></a>  
      <center><h4 class="Gamesname_text">Grand Theft Auto V</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Online">
    <div class="content_gp">
      <a href="#"><img src="Rocket Leauge(Games Page).jpg" alt="Car" style="width:100%"></a>
      <center><h4 class="Gamesname_text">Rocket League</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Online">
    <div class="content_gp">
     <a href="#"><img src="Valorant(Games Page).jpg" alt="Car" style="width:100%"></a> 
      <center><h4 class="Gamesname_text">Valorant</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Story_Mode">
    <div class="content_gp">
     <a href=""><img src="Wayout(Games Page).jpg" alt="Car" style="width:100%"></a> 
      <center><h4 class="Gamesname_text">A Way Out</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>
  <div class="column column_gp Story_Mode">
    <div class="content_gp">
      <a href="#"><img src="ITT(Games Page).png" alt="Car" style="width:100%"></a>
      <center><h4 class="Gamesname_text">It Takes Two</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div> 
  <div class="column column_gp Online">
    <div class="content_gp">
      <a href="#"><img src="Fortnite(Games Page).jpg" alt="Car" style="width:100%"></a>
      <center><h4 class="Gamesname_text">Fortnite</h4>
      <p>Price:- Rs 80/hr </p></center>
    </div>
  </div>        
<!-- END GRID -->
</div>

<!-- END MAIN -->
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
 



<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
