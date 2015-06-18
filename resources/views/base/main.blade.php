<!DOCTYPE html>
<html>
<head>
	<title>Kevnow</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
	@yield('page-styles')
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- header -->
	<header>
		<section class="container">
			<nav class="navbar">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-world">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">KEVNOW</a>
					</div>
			
					<div class="collapse navbar-collapse navbar-right" id="home-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<i class="glyphicon glyphicon-log-in"></i>&nbsp;
									Login <i class="caret"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Customer</a></li>
									<li><a href="#">Driver</a></li>
									<li><a href="#">Store</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Admin</a></li>
								</ul>
							</li>
							<li><a href=""><i class="glyphicon glyphicon-edit"></i> Sign-up</a></li>
						</ul>
					</div>
				</div>
			</nav>			
		</section>
	</header>
	<!-- End: header -->

	<!-- #main-container -->
	<section id="main-container">
		@yield('content')
	</section>
	<!-- End: #main-container -->

	<!-- footer -->
	<footer>
		<div class="col-md-12 menu">
			<div class="container menu-items">
				<ul class="list-unstyled">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Become a Driver</a></li>
					<li><a href="#">Restaurant Signup</a></li>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-12 copyright">
			<div class="container">
				<p>Copyright Kevnow, Inc</p>
			</div>
		</div>
	</footer>
	<!-- End: footer -->

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	@yield('scripts')
</body>
</html>