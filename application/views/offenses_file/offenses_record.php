<div class="content-wrapper">
    <div class="container-fluid">

       
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Offenses Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>

<!--   <table class="table table-striped table-bordered table-hover">	 -->
  	<tr>
  	 	<!-- <th>Id</th> -->
  	<!--  	<th>Employee Id</th> -->
  	 	<th>First Name</th>
      <th>Middle Name</th>
  	 	<th>Last Name</th>
  	 	<th>Email</th>
  	 	<th>Contact #</th>
  	 	<th>Address</th>
  	 	<th>Plate No</th>
  	 	<th>RFID No</th>
  	 	<th>Time In</th>
  	 	<th>Time Out</th>
  	 	<th>No. of Hours</th>
</tr>
  	 </thead>

<?php foreach($tourist as $tourist) : if ($tourist['date_stay'] > 24) { ?>

  	 <tr>
  	<!--  	<td><?php echo $tourist['tour_id']; ?><br> </td> -->
  	<!-- 	<td><?php echo $tourist['employeeid']; ?> <br></td> -->
		<td><?php echo $tourist['tour_fN']; ?> </td>
		<td><?php echo $tourist['tour_mN']; ?> <br></td>
    <td><?php echo $tourist['tour_lN']; ?> <br></td>
		<td><?php echo $tourist['email']; ?> <br></td>
		<td><?php echo $tourist['tour_contact']; ?> <br></td>
		<td><?php echo $tourist['tour_address']; ?> <br></td>
		<td><?php echo $tourist['plateno']; ?> <br></td>
		<td><?php echo $tourist['rfidno']; ?> <br></td>
		<td><?php echo $tourist['timein']; ?> <br></td>
		<td><?php echo $tourist['timeout']; ?> <br></td>
		<td><?php echo $tourist['date_stay'];  }?>


<br></td></tr>
	<?php endforeach;?>

 </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

