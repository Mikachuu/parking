<div class="content-wrapper">
    <div class="container-fluid">

       
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"> Parking Records </i></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>

<!--   <table class="table table-striped table-bordered table-hover">	 -->
  	<tr>
  		<th>Date</th>
  	 	<th>From</th>
  	 	<th>Title</th>
  	 	<th>Mmessage</th>
  	 	<th>Action</th>
	</tr>
  	 </thead>
			<?php foreach($messages_tbl as $messages_tbl) : ?>

   		<td><?php echo $messages_tbl['date']; ?> </td>
   		<td><?php echo $messages_tbl['tour_fN']," ", $messages_tbl['tour_lN']; ?> </td>
		<td><?php echo $messages_tbl['title']; ?> </td>
		<td><?php echo $messages_tbl['message']; ?> </td>

   		<td><a class="btn btn-primary"  href="<?php echo site_url('/message/view_message/'.$messages_tbl['employeeid']) ; ?>">View</a> <button type="button" class="btn btn-danger">Delete </td>


		</tr>
 			<?php endforeach;?>
 </tbody>

            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>