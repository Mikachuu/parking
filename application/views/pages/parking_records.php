<div class="content-wrapper">
    <div class="container-fluid">

       
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i></div>
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
  	 	<th>Department</th>
  	 	<th>Plate No</th>
  	 	<th>RFID No</th>
  	 	<th>Time In</th>
  	 	<th>Time Out</th>
  	 	<th>No. of Hours</th>
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
		<td><?php echo $reginfo['department']; ?> <br></td>
		<td><?php echo $reginfo['plateno']; ?> <br></td>
		<td><?php echo $reginfo['rfidno']; ?> <br></td>
		<td><?php echo $reginfo['timein']; ?> <br></td>
		<td><?php echo $reginfo['timeout']; ?> <br></td>
		<td><?php echo $reginfo['date_stay']; ?>


<br></td></tr>
	<?php endforeach;?>

 </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

