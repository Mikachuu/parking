
<div class="content-wrapper">
    <div class="container-fluid">
      <?php echo form_open('main/update'); ?>
            <center><h3> New Registered User </h3>
    	     <?php foreach($user_tbl as $post); ?>
    	
          <div class="card" style="box-shadow: 
    	     0 4px 8px 0 rgba(0, 0, 0, 0.2);
    	     max-width: 600px;
           margin: auto;
    	     text-align: left;">

      <input type="text" name="employeeid" hidden="true" value="<?php echo $post['employeeid']; ?>"><br>

      <input type="text" name="title" hidden="true" value="<?php echo "Greetings!" ?>">
      <input type="text" name="message" hidden="true" value="<?php echo "Get your rfid card!" ?>">

      <table width="700">
      <tr>
      <td>
      <img src="<?php echo base_url('assets/images/admin.png'); ?>" style="width:100px; margin-left: 45%;">
      </td>
      <tr>
      <td>
         <p class="title" style=" font-size: 18px;margin-left: 5%;">
         <b>Name:</b>   
  			<?php echo strtoupper($post['fname']); ?> <?php echo strtoupper($post['lname']); ?>
      </td>

    </tr>

    <tr>
      <td>
        <p class="title" style=" font-size: 18px;margin-left: 5%;">
        <b>Employee ID:</b>  <?php echo ($post['employeeid']); ?> 
       
      </td>
    </tr>

    <tr>
      <td>
          <p class="title" style="font-size: 18px;margin-left: 5%;">   
          <b>Email: </b>
          <?php echo ($post['email']); ?> </p>
      </td>
    </tr>

     <tr>
      <td>
              <p style="font-size: 18px; color: black;margin-left: 5%;">
              <b>Contact No: </b>
              <?php echo $post['contactno']; ?></p> 
      </td>
    </tr>

    <tr>
      <td>
    
            <p style="font-size: 18px; color: black;margin-left: 5%; margin-bottom: 15%;">
              <b>Plate No.:  </b><?php echo $post['plateno']; ?></p>
      </td>
    </tr>



  </table>
  		


		<!-- 	<a  style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><i class="fa fa-facebook"></i></a>  -->
	<br>
			</div>

<!-- <input type="text" name="id" value="<?php echo $post['id']; ?>"><br> -->
<!-- <?php echo $post['employeeid']; ?> <br>
<?php echo $post['fname']; ?> 
<?php echo $post['lname']; ?> <br>
<?php echo $post['email']; ?> <br>
<?php echo $post['contact']; ?> <br>
<?php echo $post['department']; ?> <br>
<?php echo $post['plateno']; ?> <br>
<img src="<?php echo site_url(); ?>uploads/<?php echo $post['post_image']; ?>" style="width:120px;height: 150px"> <br> -->



<br><br>
<center>
	 <button class="nav-link" data-toggle="modal" data-target="#approvemodal">
           <i class="fa fa-fw fa-sign-out"></i>Approve</a>
            </i>
       </a>
</center>

    <!-- Approve Modal-->
    <div class="modal fade" id="approvemodal" tabindex="-1" role="dialog" aria-labelledby="approvemodalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="approvemodalLabel">New User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">

              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Approve Application?</div>

           <input type="text" style="margin: 5%; width: 90%;" class="form-control" name="rfidno" placeholder="RFID Number" required="" autofocus="" />
         
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Approve</button>
          </div>
        </div>
      </div>
    </div> 