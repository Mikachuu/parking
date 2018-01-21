



<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  
        <fieldset>
          <legend>Register</legend>

          <?php echo form_open('posts/register'); ?>
          <div class="form-group">
         
            <input type="text" class="form-control" name="employeeid" placeholder="Employee ID">
            <?php echo form_error('employeeid'); ?>
          </div>
            <div class="form-group">
                <input type="text" class="form-control" name="fname"  placeholder="First Name">
                <?php echo form_error('fname'); ?>
                </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lname"  placeholder="Last Name">
                 <?php echo form_error('lname'); ?>
            </div>          
            
            
          <div class="form-group">
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                 <?php echo form_error('email'); ?>
          </div>
            
          <div class="form-group">
                <input type="text" class="form-control" name="contact" placeholder="Contact Number">
                 

                 <?php echo form_error('contact'); ?>
          </div>          

          <div class="form-group">
                <input type="text" class="form-control" name="department" placeholder="Department">
                 <?php echo form_error('department'); ?>
          </div>  

          <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                 <?php echo form_error('password'); 

                 ?>
          </div> 
          <input type="hidden" class="form-control" name="notif" value=1>
            <div class="form-group">
          <label class="checkbox">
            <input type="checkbox" value="remember-me" id="agree" name="agree"> I agree with the terms and conditions
         
           </label>

<!-- IMAGE UPLOAD -->

<?php echo $error;?>

<?php echo form_open_multipart('upload_controller/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

<!--           <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset> -->
    </form>
  </div>
  <div class="col-md-4">
  
  </div>

