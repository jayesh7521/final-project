
<!-- start footer -->
<footer class="container-fluid bg-dark text-center p-2" id="footer1">
    <small class="text-white" > Copyright &copy; 2021 || Design by Jayesh Parmar ||<a href="#login" data-bs-toggle="modal" data-bs-target="#exampleModalAdLog">Admin Login</a> </small>

</footer>
<!-- end footer -->


<!-- start student registarion -->



<!-- Modal -->
<div class="modal fade" id="exampleModalReg" tabindex="-1" aria-labelledby="exampleModalRegLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalRegLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- start student registrtion form -->
     <?php
      include("regform.php");
     ?>
<!-- end student registration form -->
      </div>
      <div class="modal-footer">
        <span id="successmsg"></span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!-- end student  registration -->


<!-- start student login fomr -->



<!-- Modal -->
<div class="modal fade" id="exampleModalLog" tabindex="-1" aria-labelledby="exampleModalLogLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLogLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- start student login  form -->
      <form id="stuLogingForm">
       
        <div class="form-group">
        <i class="fas fa-envelope"></i>
        <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
        <input type="email" class="form-control" placeholder="Email"
        name="stuLogemail" id="stuLogemail">
        </div>
        <div class="form-group">
        <i class="fas fa-key"></i>
        <label for="stuLogpass" class="pl-2 font-weight-bold"> Password</label>
        <input type="text" class="form-control" placeholder="password" name="stuLogpass" id="stuLogpass">
        </div>
</form>
<!-- end student login form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="stuLoginbtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- end student login modal -->

<!-- start admin login fomr -->



<!-- Modal -->
<div class="modal fade" id="exampleModalAdLog" tabindex="-1" aria-labelledby="exampleModalAdLogLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalAdLogLabel" >Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- start admin admin login  form -->
      <form id="adminLogingForm">
       
        <div class="form-group">
        <i class="fas fa-envelope"></i>
        <label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
        <input type="email" class="form-control" placeholder="Email"
        name="adminLogemail" id="adminLogemail">
        </div>
        <div class="form-group">
        <i class="fas fa-key"></i>
        <label for="adminLogpass" class="pl-2 font-weight-bold"> Password</label>
        <input type="text" class="form-control" placeholder="password" name="adminLogpass" id="adminLogpass">
        </div>
</form>
<!-- end admin login form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-primary" id="adminLoginbtn"> Login</button>
      </div>
    </div>
  </div>
</div>
<!-- end admin login modal -->
<!-- jquery and boostrap js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script type="text/javascript" src="js/ajexReq.js"> </script>
</body>
</html>