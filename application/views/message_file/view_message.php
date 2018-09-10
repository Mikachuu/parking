<style> 
.this {
    border: 2px solid;
    padding: 20px; 
    width: 450px;
    resize: both;
    overflow: auto;
}
</style>

<div class="content-wrapper">
    <div class="container-fluid">
      <?php echo form_open('message/snd_msg'); ?>

               <?php foreach($messages_tbl as $messages_tbl); ?>  
             

        <div class="alert alert-success" style="margin:auto"> Inbox > <?php echo $messages_tbl['title']; ?></p></b></div><br>
        

      <div class="card" style="box-shadow: 
           0 4px 8px 0 rgba(0, 0, 0, 0.2);
           max-width: 600px;
           margin: auto;
           text-align: left;">

   		
            <b> <p style="margin-left: 5%; margin-top: 5%;"><?php echo  $messages_tbl['tour_fN'], " ", $messages_tbl['tour_lN']; ?></b> <?php echo  $messages_tbl['date'];?>
   		
   		<div class="this" style="margin-left: 5%; margin-top: 5%;">
  			 <?php echo $messages_tbl['message'] ?>
		</div>
		<br>

</div>

<br>

      <div class="card" style="box-shadow: 
           0 4px 8px 0 rgba(0, 0, 0, 0.2);
           max-width: 600px;
           margin: auto;
           text-align: left;">


    <div style="margin-top: 5%; margin-left: 5%;">

     <b>Reply:</b><br><br><textarea rows="4" cols="55" name="message" ></textarea>

    <div style="margin-top: 5%;">

    <b>Admin: </b><?php echo $this->session->userdata('admin_id');?>

    </div>
      <br>

      <center> <button type="submit" class="btn btn-primary"> Send </button>

    </div>

    <br>
  </div>