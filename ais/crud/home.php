<!DOCTYPE html>
<html>
<head>
<title>UiTMCK Club Information System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">


<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><strong>C'STA</strong></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="Club Logo.png" class="w3-circle w3-margin-right" style="width:70px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user-circle"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h4>Dashboard</h4>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="home.php" class="w3-bar-item w3-button"> <i class="fa fa-home fa-fw"></i>  Home</a>
    <a href="club.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Club</a>
    <a href="membership.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card fa-fw"></i>  Memberships</a>
    <a href="activity.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Activities</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comment fa-fw"></i>  Comments</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Log Out</a>
   <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->

  
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-pink w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>Club</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-purple w3-padding-16">
        <div class="w3-left"><i class="fa fa-id-card w3-xxxlarge"></i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>Memberships</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>Activities</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          
        </div>
        <div class="w3-clear"></div>
        <h4>Comments</h4>
      </div>
    </div>
  </div>
  <br><br>
  <div>
  <div class="w3-center">
   <h5><b>For any inquiries, contact the persons below:</b></h5>
  </div>
  <br>
  <div class="w3-row-padding">
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="adibah.png" alt="Adibah" style="width:50%">
        <div class="w3-container">
          <h5><strong>ADIBAH MAISARAH SEZALI</strong></h5>
          <p>Club President</p>
          <p><i class="fa fa-phone fa-fw"></i> 011-58702365</p>
          
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="kira.png" alt="Syakira" style="width:53%">
        <div class="w3-container">
          <h5><strong>SITI NURSYAKIRA NOR AZMI</strong></h5>
          <p>Vice Club President</p>
          <p><i class="fa fa-phone fa-fw"></i> 017-7273121</p>
          
        </div>
      </div>
    </div>

    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="malin.png" alt="Amalin" style="width:50%">
        <div class="w3-container">
          <h5><strong>NUR AMALIN ELIANA WAN ZULMAN</strong></h5>
          <p>Secretary</p>
          <p><i class="fa fa-phone fa-fw"></i> 013-6003267</p>
        </div>
      </div>
    </div>
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
</body>
</html>
