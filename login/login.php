<!DOCTYPE html>
<html>
<head>
	<title>Silahkan Masuk</title>

	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
    <script src="Bootstrap/js/jquery-3.2.1.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Please Login  </h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="email" name="username" class="form-control" placeholder="Email address" required autofocus>
                <label>USERNAME </label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <label>PASSWORD </label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label">REMEMBER ME </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">LOGIN</button>
              <hr class="my-4">
             <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>
      </div>
    </div>
       
     
  </div>

</body>
</html>