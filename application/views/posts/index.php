this is post
<br>

  <table class="table table-striped table-bordered">	
  	 <tr>
  	 	<td><strong>Id</strong></td>
  	 	<td><strong>Employee Id</strong></td>
  	 	<td><strong>First Name</strong></td>
  	 	<td><strong>Last Name</strong></td>
  	 	<td><strong>Email</strong></td>
  	 	<td><strong>Contact #</strong></td>
  	 	<td><strong>Date</strong></td>
  	 	<td><strong>Action</strong></td>

  	 </tr> 
  	 <?php foreach($reginfo as $post) :?>

  	 <tr>
  	 	<td><?php echo $post['id']; ?> <br> </td>
  		<td><?php echo $post['employeeid']; ?> <br></td>
		<td><?php echo $post['fname']; ?> </td>
		<td><?php echo $post['lname']; ?> <br></td>
		<td><?php echo $post['email']; ?> <br></td>
		<td><?php echo $post['contact']; ?> <br></td>
		<td><small class="post-date"><?php echo $post['created_at']; ?> </small><br></td>

	<?php endforeach;?>
</tr>
</table>


