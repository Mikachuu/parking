<html>
  <head>
    <title>Parking Management for Log In</title>
    <!-- <link rel ="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css"> -->
 

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-sandstone.min.css">
  </head>
<style type="text/css">
    
.badge {
  padding: 1px 9px 2px;
  font-size: 12.025px;
  font-weight: bold;
  white-space: nowrap;
  color: #ffffff;
  background-color: #999999;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}
.badge:hover {
  color: #ffffff;
  text-decoration: none;
  cursor: pointer;
}
.badge-error {
  background-color: #b94a48;
}
.badge-error:hover {
  background-color: #953b39;
}
.badge-warning {
  background-color: #f89406;
}
.badge-warning:hover {
  background-color: #c67605;
}
.badge-success {
  background-color: #468847;
}
.badge-success:hover {
  background-color: #356635;
}
.badge-info {
  background-color: #3a87ad;
}
.badge-info:hover {
  background-color: #2d6987;
}
.badge-inverse {
  background-color: #333333;
}
.badge-inverse:hover {
  background-color: #1a1a1a;
}

</style>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">UPark</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
          <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('login/enter'); ?>"><?php echo $this->session->userdata('employeeid'); ?></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

      <li class="nav-item">
        <img src="<?php echo base_url('images/ring.png'); ?>"/>
      </li>
      
      <li>
          <a class="nav-link" href="<?php echo base_url('main/records');?>">
          <span class="badge badge-success"><?php echo $this->Post_model->count_notif(); ?></span></a>
      </li>
      
     </ul>

     <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                   <a class="nav-link" href="<?php echo base_url('login/logout'); ?>"/>Log out</a>
            </li>

          </ul>


   

     <!--  <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
   <!--  </form> -->
  </div>
</nav>

<div class="container-fluid">
  <br>

