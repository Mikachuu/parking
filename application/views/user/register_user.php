<div class="content-wrapper">
    <div class="container-fluid">
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">

      <div class="card-header">Register another Admin</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="fname">First name</label>
                <input class="form-control" id="fname" name="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
                  <?php echo form_error('fname'); ?>
              </div>
              <div class="col-md-6">
                <label for="lname">Last name</label>
                <input class="form-control" id="lname" name="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Admin ID </label>
            <input class="form-control" id="employeeid" name="employeeid" type="text" aria-describedby="employeeid" placeholder="Admin ID">
          </div>

          <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" id="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>