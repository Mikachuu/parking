
<div class="content-wrapper">
    <div class="container-fluid">
      <?php echo form_open('main/update'); ?>
    	 <?php foreach($tourist as $post); ?>
    	<div class="card" style="box-shadow: 
    	0 4px 8px 0 rgba(0, 0, 0, 0.2);
    	max-width: 300px;
    	margin: auto;
    	text-align: center;">

      <input type="text" name="userid" hidden="true" value="<?php echo $post['userid']; ?>"><br>
    		
    		<img src="<?php echo site_url(); ?>uploads/<?php echo $post['tour_user_image']; ?>" style="width:100%">
  				
  			<h1><?php echo $post['tour_fN']; ?> <?php echo $post['tour_lN']; ?></h1>
  			<p class="title" style=" color: grey;
    		font-size: 18px;">
    		<?php echo $post['employeeid']; ?> </p>


			
			<a style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><?php echo $post['email']; ?></i></a> 

			<a  style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><?php echo $post['tour_contact']; ?></i></a> 

			<a  style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><?php echo $post['plateno']; ?></i></a>

		<!-- 	<a  style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><i class="fa fa-facebook"></i></a>  -->
	
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




<center>
	 <a class="nav-link" data-toggle="modal" data-target="#approvemodal">
           <i class="fa fa-fw fa-sign-out"></i>Approve</a>
            </i>
       </a>
</center>

    <!-- Approve Modal-->
    <div class="modal fade" id="approvemodal" tabindex="-1" role="dialog" aria-labelledby="approvemodalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="approvemodalLabel">Heads up!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">

              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Approve Application?</div>

           <input type="text" class="form-control" name="rfidno" placeholder="RFID Number" required="" autofocus="" />
         
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Approve</button>
          </div>
        </div>
      </div>
    </div> 