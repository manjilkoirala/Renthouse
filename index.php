<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>eDera</title>

  <link rel="stylesheet" href="Landing-Page-Element/style.css">
  
</head>
<body>
  <?php
  include("Landing-Page-Element/navbar.php");
  ?>
  <header>
    <div class="container header-section flex">
      <div class="header-left">
        <h1><div>Rent Your</div><div> Dream House</div></h1>
        <p>eDera is a convenient and reliable Nepal-based house rental website providing detailed listings, secure transactions, and 24/7 support for a seamless rental experience.</p>
        <a href="how-to-register.php" class ="primary-button get-started-btn">Get Started</a>
      </div>
      <div class="header-right">
        <img src="images/houseimg.png" alt="hero image">
        <div class="color-box"></div>
      </div>
    </div>
</header>
<section class="properties-section">
  <div class="container">
    <div class="small-bold-text properties-header">FIND THE BEST HOUSES FOR RENT</div>
    <div class="search-box container">
      <?php
      include("search.html");
      ?>
    </div>
    <br><br>
    <!-- <div class="property flex container" id="properties"> -->
      <?php
      include("property-list.php");
      ?>
    
    </div>
  </div>
</section>


  
</body>
</html>









