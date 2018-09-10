<div class="content-wrapper">
    <div class="container-fluid">

       
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i><?php echo $this->Post_model->count_notif(); ?> New Registered Users</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>

<!--   <table class="table table-striped table-bordered table-hover">	 -->
  	<tr>
  	 <!-- 	<th>Id</th> -->
  	 	<th>Username</th>
  	 	<th>First Name</th>
      <th>Middle Name</th>
  	 	<th>Last Name</th>
  	 	<th>Address</th>
  	 	<th>Contact #</th>
  	 	<th>Date Registered</th>
  	 	<th>Action</th>
</tr>
  	 </thead>
  	 <?php foreach($user_tbl as $user_tbl) :?>

  	 <tr>
  	 	<!-- <td><?php echo $user_tbl['tour_id']; ?><br> </td> -->
  		<td><?php echo $user_tbl['id']; ?> <br></td>
		<td><?php echo $user_tbl['fname']; ?> </td>
		<td><?php echo $user_tbl['mname']; ?> <br></td>
    <td><?php echo $user_tbl['employeeid']; ?> <br></td>
		<td><?php echo $user_tbl['email']; ?> <br></td>
		<td><?php echo $user_tbl['contactno']; ?> <br></td>
		<td><small class="post-date"><?php echo $user_tbl['created_at']; ?> </small><br></td>
    <td> <a class="btn btn-primary" href="<?php echo site_url('/main/view/'.$user_tbl['id']) ; ?>">View<!--  <?php echo $user_tbl['tour_id']; ?> --></button>
      

<br></td></tr>
	<?php endforeach;?>

 </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
