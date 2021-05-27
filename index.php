<!-- start navigation
 -->
 <?php
include("header.php");
 ?>
 <!-- end navigation -->
<!--  start img background -->

<div class="containe-flud remove-vid-mrg">
<div class="vid-parent">
  <video playsinline autoplay muted loop>
  <source src="imgs/study.mp4">
  </video>
  <div class="vid-overlay"></div>
</div>
<div class="vid-content">
  <h1 class="my-content">Welcome to MySchool</h1>
  <small class="my-content">Learn and Implement</small><br/>
  <a href="#" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModalReg">Get started</a>
</div>
</div>
<!-- end video background -->

<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i>100+ Online Cources</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>Expert</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>Life time Access</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
    </div>
  </div>
</div>

<!-- end text banner -->

<!-- start most popular courses -->
<?php
include("Hcourse.php");
?>
<!-- end popular courses -->

<!-- start conatct us -->
<?php
include('./contact.php');
?>

<!-- end contact us -->
<!-- start social followed -->
<div class="container-fluid bg-danger">
<div class="row text-white text-center p-1" id="row1">
    <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> facebook</a>
    </div>
    <div class="col-sm">
    <a class="text-white social-hover "href="#"> <i class="fab fa-twitter"></i>twitter</a>
    </div>
    <div class="col-sm">
    <a class="text-white social-hover "href="#"> <i class="fab fa-whatsapp"></i>whatsapp</a>
    </div>
    <div class="col-sm">
    <a class="text-white social-hover "href="#"> <i class="fab fa-instagram"></i>instagram</a>
    </div>
</div>
</div>
<!-- end social follow -->

<!-- start about section -->
<div class="container-fluid p-4" style="background-color:lightgray">
<div class="container" style="background-color: lightgray">
    <div class="row text-center" id="last-c">
    <div class="col-sm">
    <h5>About Us</h5>
    <p>This website will help you to increase your knowledge in programming langagues and 
      create new projects, website development, application development.  

    </p>
    </div>
    <div class="col-sm">
    <h5>Category</h5>
    <a class="text-dark"href="#">Web development</a><br>
    <a class="text-dark"href="#">Web designing</a><br>
    <a class="text-dark"href="#">Android app development</a><br>
    <a class="text-dark"href="#"> python programming</a><br>
    <a class="text-dark"href="#">java programming</a><br>
    <a class="text-dark"href="#">c/c++ programming</a><br>
    <a class="text-dark"href="#">php learning</a><br>
    </div>
    <div class="col-sm" id="col-sm3"> 
    <h5>Contact US</h5>
    <p>Myschool Pvt Ltd <br>Near.... <br>ph.0000000000</p>
    </div>
</div>
</div>
</div>
<!-- end about section -->


<!--  start including footer -->
<?php
include("footer.php");
?>
<!-- end footer -->