

<div class="content-wrapper">
    <div class="container">
      <div class="row">
      <h1>
        Edit
        <small>Slots   </small><br>
      </h1>
      <br>
      <br>
<!--              <?php if($this->session->flashdata('slot_success')): ?>

              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('slot_success'); endif; ?><BR>
                </div></div> -->
   <div class="container">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-8 col-xs-10">
                <ol class="breadcrumb"><li><i class="fa fa-dashboard"></i> Edit Slot</li></ol>
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Add Slot</h3> -->
            </div>
            
              <div class="box-body">
                <?php foreach($listofslots_tbl as $listofslots_tbl) : ?>
                <?php echo validation_errors(); ?>
                <form method="POST" action="<?php echo site_url('Slots/edited_slot/'.$listofslots_tbl['list_id']); ?>">
                <div class="form-group">
                  <label for="group_name">List ID</label>
                  <input type="text" class="form-control" id="list_id" name="list_id" placeholder="<?php echo $listofslots_tbl['list_id']; ?>">
                </div>
                <div class="form-group">
                  <label for="group_name">Floor Level</label>
                  <select class="form-control" id="status" name="floor">
                    <option value="GF">GF</option>
                    <option value="2F">2F</option>
                    <option value="3F">3F</option>
                    <option value="4F">4F</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Slot name</label>
                  <input type="text" class="form-control" id="slot_name" name="slot" placeholder="<?php echo $listofslots_tbl['slot']; ?>">
                </div>
                <div class="form-group">
                  <label for="group_name">Category</label>
                  <select class="form-control" name="category">
                    <option value="<?php echo $listofslots_tbl['category'] ?>" select='selected'><?php echo $listofslots_tbl['category'] ?> - Selected
                    <option value="VIP">VIP</option>
                    <option value="PWD">PWD</option>
                    <option value="Employee">Employee</option>
                    <option value="Student">Student</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="group_name">Status</label>
                  <select class="form-control" id="status" name="status">
                    <option value="<?php echo $listofslots_tbl['status']; ?>"><?php echo $listofslots_tbl['status']; ?></option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                  </select>
                </div>

                <div class="form-group">
                  <input type="text" hidden="hidden" name="date_created" value="<?php echo date("Y.m.d"); ?>">
                </div>
                  <?php endforeach;?> 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('slots/manage_slots') ?>" class="btn btn-warning">Back</a>
              </div>
              <?php echo form_close(); ?>
            </form>


          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#slotsSideTree").addClass('active');
    $("#createSlotsSideTree").addClass('active');
  });
</script>

