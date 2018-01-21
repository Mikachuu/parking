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
  	 	<th>Id</th>
  	 	<th>Employee Id</th>
  	 	<th>First Name</th>
  	 	<th>Last Name</th>
  	 	<th>Email</th>
  	 	<th>Contact #</th>
  	 	<th>Date</th>
  	 	<th>Action</th>
</tr>
  	 </thead>
  	 <?php foreach($reginfo as $reginfo) :?>

  	 <tr>
  	 	<td><?php echo $reginfo['id']; ?><br> </td>
  		<td><?php echo $reginfo['employeeid']; ?> <br></td>
		<td><?php echo $reginfo['fname']; ?> </td>
		<td><?php echo $reginfo['lname']; ?> <br></td>
		<td><?php echo $reginfo['email']; ?> <br></td>
		<td><?php echo $reginfo['contact']; ?> <br></td>
		<td><small class="post-date"><?php echo $reginfo['created_at']; ?> </small><br></td>
    <td> <a class="btn btn-primary" href="<?php echo site_url('/main/view/'.$reginfo['id']) ; ?>">View <?php echo $reginfo['id']; ?></button>


<br></td></tr>
	<?php endforeach;?>

 </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
