<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title> -->
  <!-- Bootstrap core CSS-->
<!--   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom fonts for this template-->
<!--   <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom styles for this template-->
<!--    <link href="css/sb-admin.css" rel="stylesheet"> -->
<!-- </head>
<?php echo $error;?> 

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form>
          <?php echo form_open_multipart('register');?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="fname">First name</label>
                <input class="form-control" name="fname" id="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
                <?php echo form_error('fname'); ?>
              </div>
              <div class="col-md-6">
                <label for="lname">Last name</label>
                <input class="form-control" id="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
                 <?php echo form_error('lname'); ?>
              </div>
            </div>
          </div>

        <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="employeeid">Employee ID</label>
                <input class="form-control" name="employeeid" id="employeeid" type="text" placeholder="Employee ID">
                <?php echo form_error('employeeid'); ?>
              </div>

              <div class="col-md-6">
                <label for="department">Department</label>
                <input class="form-control" name="department" id="department" type="text" placeholder="Department">
                <?php echo form_error('department'); ?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
               <div class="col-md-6">
                  <label for="exampleInputEmail1">Email address</label>
                  <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <?php echo form_error('email'); ?>
              </div>

              <div class="col-md-6">
                <label for="contact">Contact Number</label>
                <input class="form-control" name="contact" id="contact" type="text" placeholder="Contact Number">
                <?php echo form_error('contact'); ?>
              </div>
            </div>
          </div>

            <div class="form-row">
               <div class="col-md-6">
                  <label for="exampleInputEmail1">Plate Number</label>
                  <input class="form-control" name="plateno" id="plateno" type="text" aria-describedby="emailHelp" placeholder="Enter email">
                  <?php echo form_error('plateno'); ?>
              </div>

              <div class="col-md-6">
                        <input type="file" name="userfile" size="20" />
              </div>
            </div>


          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
                <?php echo form_error('password'); ?>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                  <label for="exampleConfirmPassword">Confirm password</label>
                    <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
              </div>
          <div class="col-md-6">

          </div>
          </div>
        </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <input type="hidden" class="form-control" name="notif" value=1>
                  <label class="checkbox">
                    <input type="checkbox" value="remember-me" id="agree" name="agree"> <a href="">I agree with the terms and conditions </a>
                     <?php echo form_error('agree'); ?>
                  </label>
                </div>
              </div>
            </div>

        <input type="submit" value="Register" class="btn btn-success" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
   Bootstrap core JavaScript
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  Core plugin JavaScript
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
  -->


 <style type="text/css">
         body {
        /*background:url("../parking/images/park.jpg");  */
        background-repeat:no-repeat;
        background-size:cover;
             }
      </style>

<div class="content-wrapper">
    <div class="container-fluid">

<body>
<div class="container-fluid">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
 <?php echo $error;?>
 <form action="<?php echo base_url('upload_controller/do_upload'); ?>" method="post">

        <fieldset>
          <legend>Register</legend>

        
          <div class="form-group">
         
            <input type="text" class="form-control" name="employeeid" placeholder="Employee ID" >
            <?php echo form_error('employeeid'); ?>
           
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" >
            <?php echo form_error('password'); ?>
                
          </div> 

          <div class="form-group">
                <input type="password" class="form-control" name="password2" placeholder="Confirm Password" >
                <?php echo form_error('password2'); ?>
                
          </div>  
            <div class="form-group">
                <input type="text" class="form-control" name="fname"  placeholder="First Name" >
                <?php echo form_error('fname'); ?>
               
                </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lname"  placeholder="Last Name" >
                <?php echo form_error('lname'); ?>
                
            </div>          
            
            
          <div class="form-group">
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" >
                <?php echo form_error('email'); ?>
                
          </div>
            
          <div class="form-group">
                <input type="text" class="form-control" name="contact" placeholder="Contact Number" >
                <?php echo form_error('contact'); ?>
                 

                
          </div>          

          <div class="form-group">
                <input type="text" class="form-control" name="department" placeholder="Department" >
                <?php echo form_error('department'); ?>
                
          </div>  
         

          <div class="form-group">
                <input type="text" class="form-control" name="plateno" placeholder="Plate Number" >
                <?php echo form_error('plateno'); ?>
                 
          </div> 


         <input type="file" name="userfile" size="20" />

            <br /><br />
          <input type="hidden" class="form-control" name="notif" value=1>
           
          <div class="form-group">
            <label class="checkbox">
              <input type="checkbox" value="remember-me" id="agree" name="agree"> <a href="">I agree with the terms and conditions </a>
              <?php echo form_error('agree'); ?>
            </label>

           <br>


            <input type="submit" value="Register" class="btn btn-success" />
    </form>
  </div>
  </div>
</div>
<!-- </div>
 -->