<?php
	session_start();

	if (!isset($_SESSION['nama'])) {
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Praktikum 12 Pemrograman Web</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>

  	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">

			<div class="navbar-inner">

				<div class="container">

					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="brand" href="#">Pemrograman Web</a>

					<div class="nav-collapse collapse">
						<ul class="nav">
							<?php
								if ($_SESSION['level'] == "admin") {
									echo '
										<li class="dropdown">
											<a href="#"" class="dropdown-toggle" data-toggle="dropdown">Menu Admin <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">submenu1</a></li>
												<li><a href="#">submenu2</a></li>
												<li><a href="#">submenu3</a></li>
											</ul>
										</li>
									';
								}else if ($_SESSION['level'] == "dosen") {
									echo '
										<li class="dropdown">
											<a href="#"" class="dropdown-toggle" data-toggle="dropdown">Menu Dosen <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">submenu1</a></li>
												<li><a href="#">submenu2</a></li>
												<li><a href="#">submenu3</a></li>
											</ul>
										</li>
									';
								}else if ($_SESSION['level'] == "mahasiswa") {
									echo '
										<li class="dropdown">
											<a href="#"" class="dropdown-toggle" data-toggle="dropdown">Menu Mahasiswa <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">submenu1</a></li>
												<li><a href="#">submenu2</a></li>
												<li><a href="#">submenu3</a></li>
											</ul>
										</li>
									';
								}
							?>
						</ul>

						<div class="btn-group navbar-form pull-right">
							<a href="#" class="btn btn-primary"><i class="icon-user icon-white"></i> <?php echo $_SESSION['nama'];  ?></a>
							<a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="container">

		      <div class="hero-unit">
		        <h1>Hello, world!</h1>
		        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		      </div>

		      <!-- Example row of columns -->
		      <div class="row">
		        <div class="span4">
		          <h2>Heading</h2>
		          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          <p><a class="btn" href="#">View details &raquo;</a></p>
		        </div>
		        <div class="span4">
		          <h2>Heading</h2>
		          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
_		          <p><a class="btn" href="#">View details &raquo;</a></p>
		       </div>
		        <div class="span4">
		          <h2>Heading</h2>
		          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		          <p><a class="btn" href="#">View details &raquo;</a></p>
		        </div>
		      </div>
	      
	      <hr>

	      <footer>
	        <p>Praktikum 12 Pemrograman Web &copy; 2015</p>
	      </footer>

	  	</div>

  	</body>

</html>