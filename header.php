<?php 
include "includes/connect.php";
?>
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="home.php">Student Guide</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="studyguide/guide.php">Study Guide</a></li>
          <li><a class="nav-link scrollto" href="bookstore/viewbooks.php?dept=All&sem=All">Bookstore</a></li>
          <li><a class="nav-link scrollto" href="notestore/viewnotes.php?dept=All&sem=All">Notestore</a></li>
		  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      <?php 
include("includes/connect.php"); 
session_start();
if (isset($_SESSION['email'])) {
  ?>
      <li><a class="getstarted scrollto" href="includes/logout.php">Logout</a></li>
  <?php
}
else
{
  ?>
  
      <li><a class="getstarted scrollto" href="includes/login.php">Login/Register</a></li>
  <?php
}
?>

		  <!--<li><a class="getstarted scrollto" href="includes/login.php">Login/Register</a></li>
}
-->
		  
		  
		  
		  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>