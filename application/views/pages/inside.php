					
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php
        
					echo $this->session->userdata('admin_id');?>
		</li>
      </ol>
      <!-- Icon Cards-->

      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"> <?php echo $this->Post_model->count_notif(); ?> New Users!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5"> <?php echo $this->Post_model->count_message(); ?> Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo $this->Post_model->count_records(); ?> Parked Vehicles</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('main/record_join'); ?>">
              <span class="float-left" >View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5"> 3 Violation</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
        <!--   <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="50"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">$34,693</div>
                  <div class="small text-muted">YTD Revenue</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">$18,474</div>
                  <div class="small text-muted">YTD Expenses</div>
                  <hr>
                  <div class="h4 mb-0 text-success">$16,219</div>
                  <div class="small text-muted">YTD Margin</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div> -->


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url("/assets/vendor/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url("/assets/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url("/assets/vendor/chart.js/Chart.min.js"); ?>"></script>
    <script src="<?php echo base_url("/assets/vendor/datatables/jquery.dataTables.js"); ?>"></script>
    <script src="<?php echo base_url("parking/assets/vendor/datatables/dataTables.bootstrap4.js"); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url("/assets/js/sb-admin.min.js"); ?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url("/assets/js/sb-admin-datatables.min.js"); ?>"></script>
    <script src="<?php echo base_url("/assets/js/sb-admin-charts.min.js"); ?>"></script>
  </div>