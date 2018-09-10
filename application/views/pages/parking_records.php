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
  	 <!-- 	<th>Id</th> -->
  	 	<!-- <th>Employee Id</th> -->
  	 	<th>Floor</th>
      <th>Slot</th>
  	 	<th>Category</th>
  	 	<th>Date Created</th>
    </tr>
  	 </thead>

<?php foreach($tourist as $tourist) : 

    
?>

  	 <tr>
<!--   	 	<td><p class="<?php $pclass;?>"><?php echo $tourist['tour_id']; ?></p><br> </td> -->
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
		<td> <?php if ($tourist['date_stay'] > 24){?><p class="bg-danger"><?php }

    else if ($tourist['date_stay'] <= 24){ ?>
      <p class="bg-success">

    <?php }
     echo $tourist['date_stay'];  ?>
   


<br></td></tr>
	<?php endforeach;?>

 </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

