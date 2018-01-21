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
   <!--  <?php echo $error;?> -->
    <?php echo form_open_multipart('register');?>

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


          <!-- image upload -->
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
</div>
