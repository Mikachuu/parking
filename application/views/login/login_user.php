



  <div class="wrapper">
    <form method="post" action="<?php echo base_url('login/login_validation_user'); ?>">

    <div class="row">
     <div class="col-md-4">
     </div>
    <div class="col-md-4">
  <div class="p-3 mb-2 bg-secondary text-white">

   <div style="padding-top:30px" class="panel-body" >
    <form class="form-signin"> 
      <!--  <center><img src="../images/admin.png" alt="" style="width:25%">      --> 
        <center>
      <h2 class="form-signin-heading">Please login USER</h2><br>

      <input type="text" class="form-control" name="employeeid" placeholder="Employee ID" required="" autofocus="" />
        <span class="text-danger"><?php echo form_error('employeeid'); ?></span> <br>


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
  </div>