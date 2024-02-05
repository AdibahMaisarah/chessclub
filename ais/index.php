<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to C'STA, UiTMCK</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.mySlides 
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-60"> 
    	<img src="img/Club Logo.png" style="width:120px;height:120px;"> <br><br>
    	<b>Chess Strategic Thinking 
 <br>Association (C'STA)</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-purple">Home</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-purple">About Us</a> 
    <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-purple">C'STA Committee</a> 
    <a href="#activities" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-purple">Activities</a> 
    <a href="#photos" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-purple">Photos</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-purple">Contact</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-purple w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-purple w3-margin-right" onclick="w3_open()">☰</a>
  <span>C'STA, UiTMCK</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <div class="w3-container" style="margin-top:30px" id="showcase">
    <p align="right"><a href="login.php">Login as Admin</a>
    <h1 class="w3-jumbo"><b>Welcome to C'STA, UiTMCK</b></h1> <br>
    <h1 class="w3-xxxlarge w3-text-purple"><b>About Us</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
  <p>C'STA is a chess club based in UiTMCK, Machang. This chess club is the ideal location for fans of every ability level. Here, we enjoy friendly competition, thrilling games, and the chance to hone our strategic abilities. We get together in this club to develop a friendly community of chess aficionados, share our passion for the game, and trade advice.</p>
</div>

 <br>
<div class="w3-container w3-center">
<img src="img/Club Logo.png" class=" w3-circle" style="width:25%;">
</div> 

  <!-- Committee -->
  <div class="w3-container" id="committee" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-purple"><b>C'STA Committee</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
    <p>An essential component of our club's structure, a chess club committee member donates their knowledge, experience, and enthusiasm to make sure the club runs well and succeeds. Our committee members actively participate in organizing and carrying out different activities, overseeing club resources, and creating a welcoming and cheerful environment as part of their commitment to spreading the passion of chess across our community. Their commitment and guidance are vital in determining the course of the club, fostering an atmosphere in which participants may relish the exhilaration of strategy in chess while building enduring relationships with other aficionados.
    </p> 
    <br>
    <p><b>Our Secretariats</b>:</p>
  </div>

  <!-- The Team -->
  
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-purple">
        <img src="img/adibah.png" alt="Adibah" style="width:55%">
        <div class="w3-container">
          <h4>ADIBAH MAISARAH SEZALI</h4>
          <p class="w3-opacity">Club President</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-purple">
        <img src="img/kira.png" alt="Syakira" style="width:60%">
        <div class="w3-container">
          <h4>SITI NURSYAKIRA NOR AZMI</h4>
          <p class="w3-opacity">Vice Club President</p>
          
        </div>
      </div>
    </div>

    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-purple">
        <img src="img/malin.png" alt="Amalin" style="width:55%">
        <div class="w3-container">
          <h4>NUR AMALIN ELIANA WAN ZULMAN</h4>
          <p class="w3-opacity">Secretary</p>
          
        </div>
      </div>
    </div>
        <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-purple">
        <img src="img/alia.png" alt="Alia" style="width:55%">
        <div class="w3-container">
          <h4>SITI NOR ALIA MOHD LOKMAN</h4>
          <p class="w3-opacity">Treasurer</p>
          
        </div>
      </div>
    </div>
        <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-purple">
        <img src="img/iqah.png" alt="Syafiqah" style="width:55%">
        <div class="w3-container">
          <h4>NUR SYAFIQAH MOHD NORIZAN</h4>
          <p class="w3-opacity">Special Committee Member</p>
          
        </div>
      </div>
    </div>
  </div>
  
  <!-- Activities -->
  <div class="w3-container" id="activities" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-purple"><b>Activities</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">

 <p>Players of all skill levels can enjoy a variety of events provided by our chess club.</p> 
 <p>We provide events for all skill levels, from easygoing game evenings for novices to challenging competitions for seasoned players looking for a change of pace. To improve players' grasp of strategy and offer insightful analysis of the game, our club holds educational seminars. For those who enjoy chess, there are additional cooperative chess problems that encourage critical thinking and collaboration, as well as friendly matches and themed chess tournaments. 

    </p>
  </div>
  <br>
  <div class="w3-container w3-center">
  <img src="img/chess.jpg" alt="chess" class="w3-round" style="width:60%">
</div>
  <!-- Photos -->
  <div class="w3-container" id="photos" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-purple"><b>Photos</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
    <p> View our photo gallery to see the lively moments of our chess club. Take a look at our exciting club activities and events. Experience the unwavering enthusiasm for the classic game via the expressions of resolve, competitive excitement, and camaraderie. </p>
    <br>

<div class="w3-container w3-center">
<div class="w3-content w3-display-container">
    <div class="w3-display-container mySlides">
    <img src="img/chess3.png" style="width:50%">
    <div class="w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

    <div class="w3-display-container mySlides">
    <img src="img/chess2.png" style="width:50%">
    <div class="w3-display-w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

    <div class="w3-display-container mySlides">
    <img src="img/chess4.png" style="width:50%">
    <div class="w3-display-w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

    <div class="w3-display-container mySlides">
    <img src="img/chess5.png" style="width:50%">
    <div class="w3-display-w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

    <div class="w3-display-container mySlides ">
    <img src="img/chess.png" style="width:50%">
    <div class="w3-display-w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

    <div class="w3-display-container mySlides">
    <img src="img/chess6.png" style="width:50%">
    <div class="w3-display-w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

    <div class="w3-display-container mySlides">
    <img src="img/csta2.jpg" style="width:50%">
    <div class="w3-display-w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

    <div class="w3-display-container mySlides">
    <img src="img/csta3.jpg" style="width:50%">
    <div class="w3-display-w3-display-middle w3-large w3-container w3-padding-16 ">
    </div>
    </div>

<button class="w3-button w3-display-left w3-purple" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-purple" onclick="plusDivs(1)">&#10095;</button>

</div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-purple"><b>Contact</b></h1>
    <hr style="width:50px;border:5px solid purple" class="w3-round">
    <p>Got any question about our club? Fill out the form below and let us know your thought :) </p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <a href="action.php" class="w3-button w3-black w3-hover-purple">Send Message</a>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
