

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <div class="card-body">
       
          <div class="form-group">
             <center><img src="assets/images/admin.png" alt="" style="width:35%"> </center>  
                
               <form method="post" action="<?php echo base_url('login/login_validation'); ?>">

            <label for="admin_username">Username</label>
            <input class="form-control" name="admin_username" id="admin_username" placeholder="Username">
            <?php echo form_error('admin_username'); ?>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" name="password" id="password" type="password" placeholder="Password">
            <?php echo form_error('password'); ?>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="insert">Login</button>
            <?php echo $this->session->flashdata("error"); ?>
        </form>
        <div class="text-center">
         
         <!--  <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>




  <!-- <div class="wrapper">
    <form method="post" action="<?php echo base_url('login/login_validation'); ?>">

    <div class="row">
     <div class="col-md-4">
     </div>
    <div class="col-md-4">
  <div class="p-3 mb-2 bg-secondary text-white">

   <div style="padding-top:30px" class="panel-body" >
    <form class="form-signin"> 
       <center><img src="../images/admin.png" alt="" style="width:25%">      
      <h2 class="form-signin-heading">Please login</h2>

      <input type="text" class="form-control" name="admin_username" placeholder="Admin Username" required="" autofocus="" />
        <span class="text-danger"><?php echo form_error('admin_username'); ?></span> <br>


      <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
        <span class="text-danger"><?php echo form_error('password'); ?> </span><br>




      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="insert">Login</button>   

        <?php
          echo $this->session->flashdata("error");
        ?>
        <br>
    </form>
  </div> -->