

<div class="content-wrapper">
    <div class="container">
      <div class="row">
      <h1>
        Incident Report
        <small>  </small><br>
      </h1>
      <br>
      <br>

   <div class="container">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-8 col-xs-10">
                <ol class="breadcrumb"><li><i class="fa fa-dashboard"></i> Report</li></ol>
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Add Slot</h3> -->
            </div>
            
              <div class="box-body">
                <?php foreach($incidentreport_tbl as $incidentreport_tbl) : ?>
                <?php echo validation_errors(); ?>
                <form method="POST" action="<?php echo site_url('Incident/edited_incident/'.$incidentreport_tbl['id']); ?>">
                <div class="form-group">
                  <label for="group_name">Report ID</label>
                  <input type="text" class="form-control" id="id" name="id" placeholder="<?php echo $incidentreport_tbl['id']; ?>">
                </div>
                <div class="form-group">
                  <label for="group_name">Subject: <b> <?php echo $incidentreport_tbl['incident']; ?> </b>
      
                </div>
                <div class="form-group">
                  <label for="group_name">Message: <?php echo $incidentreport_tbl['report_mssg']; ?></label>
                  
                </div>
                <div class="form-group">
                  <label for="group_name">Employee ID: <?php echo $incidentreport_tbl['employeeid']; ?></label>
                </div>
                <div class="form-group">
                  <label for="group_name">Status</label>
                  <select class="form-control" id="status" name="status">
                    <option value="<?php echo $incidentreport_tbl['status']; ?>"><?php echo $incidentreport_tbl['status']; ?></option>
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

