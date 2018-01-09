  <div class="wrapper">
    <form method="post" action="<?php echo base_url(); ?>posts/login_validation">

    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>


      <input type="text" class="form-control" name="employeeid" placeholder="Employee ID" required="" autofocus="" />
        <span class="text-danger"><?php echo form_error('employeeid'); ?> </span>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
        <span class="text-danger"><?php echo form_error('password'); ?> </span>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="insert">Login</button>   

        <?php
          echo $this->session->flashdata("error");
        ?>
    </form>
  </div>