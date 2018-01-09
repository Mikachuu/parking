<html>
	<head>
		<title>Parking Management </title>
		<!-- <link rel ="stylesheet" href="https://bootswatch.com/4/sandstone/bootstrap.min.css"> -->
 

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-sandstone.min.css">
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  			<a class="navbar-brand" href="<?php echo base_url(); ?>">UPark</a>
 			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>"> Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('posts/register'); ?>/register">Register</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('posts/login'); ?>">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container-fluid">
	<br>