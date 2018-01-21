
<div class="content-wrapper">
    <div class="container-fluid">
    	 <?php foreach($reginfo as $post); ?>
    	<div class="card" style="box-shadow: 
    	0 4px 8px 0 rgba(0, 0, 0, 0.2);
    	max-width: 300px;
    	margin: auto;
    	text-align: center;">
    		
    		<img src="<?php echo site_url(); ?>uploads/<?php echo $post['post_image']; ?>" style="width:100%">
  				
  			<h1><?php echo $post['fname']; ?> <?php echo $post['lname']; ?></h1>
  			<p class="title" style=" color: grey;
    		font-size: 18px;">
    		<?php echo $post['employeeid']; ?> </p>


			<p>Harvard University</p>
			<a href="#" style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><?php echo $post['email']; ?></i></a> 

			<a href="#" style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><?php echo $post['department']; ?></i></a> 

			<a href="#" style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><?php echo $post['plateno']; ?></i></a>

			<a href="#" style="    
			text-decoration: none;
    		font-size: 22px;
    		color: black;"><i class="fa fa-facebook"></i></a> 
			<p><button style="    border: none;
			    outline: 0;
			    display: inline-block;
			    padding: 8px;
			    color: white;
			    background-color: #000;
			    text-align: center;
			    cursor: pointer;
			    width: 100%;
			    font-size: 18px;"><?php echo $post['contact']; ?></button></p>
			</div>
<?php echo form_open('main/update'); ?>



<table>
<!-- 

 	<tr>
  	 	<td><input type="text" name="id" value="<?php echo $post['id']; ?>"><br> </td>
  		<td><?php echo $post['employeeid']; ?> <br></td>
		<td><?php echo $post['fname']; ?> </td>
		<td><?php echo $post['lname']; ?> <br></td>
		<td><?php echo $post['email']; ?> <br></td>
		<td><?php echo $post['contact']; ?> <br></td>
		<td><?php echo $post['department']; ?> <br></td>
		<td><?php echo $post['plateno']; ?> <br></td>
		<td><img src="<?php echo site_url(); ?>uploads/<?php echo $post['post_image']; ?>" style="width:120px;height: 150px"> <br></td>

	</tr>

	 <a class="nav-link" data-toggle="modal" data-target="#approvemodal">
           <i class="fa fa-fw fa-sign-out"></i>Approve</a>
            </i>
       </a>
	

	<!-- <a class="btn btn-success" href="<?php echo site_url('main/update/'.$post['id']); ?>">Approved</a> -->
</table> -->
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
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Approve</button>
          </div>
        </div>
      </div>
    </div>