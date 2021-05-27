<?php
include("header.php");
?>
 <div class="container-fluid bg-dark">
  <div class="row">
  <img src="imgs/cbanner.jpg" alt="courses"
  style="height: 500px; width: 100%; object-fit:cover;
  box-shadow:10px;"/>
  </div>
  </div>
<!-- start main content -->
<div class="container">
<h2 class="text-center my-4">Payment Status</h2>
<form method="post" action="">
<div class="form-group row mb-3">
    <label class="col-sm-1 col-form-label">Order Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" >
    </div>
  </div>
    <div>
        <input type="submit" class="btn btn-primary  mx-4 mb-2">
    </div>
</div>
</form>
</div>
<!-- end main content -->

<?php
include("contact.php");
?>
<?php
include("footer.php");
?>