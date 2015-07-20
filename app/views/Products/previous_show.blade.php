<?php
if (Sentry::check())
    {
		$user = Sentry::getUser();
		if ($user->isSuperUser())
		{
?>
			<!-- app/views/Products/show.blade.php -->

			<!DOCTYPE html>
			<html>
			<head>
				<title>Products</title>
				<link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}" />
				<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/toggle-switch.css') }}" />
				<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base.css') }}" media="all" />
				<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/dashboard.css') }}" media="all" />
				<link rel="shortcut icon" href="{{ asset('Assets/ico/favicon.ico') }}">
			</head>
			<body>

			<nav class="navbar main-bar navbar-inverse">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="{{ URL::to('dashboard') }}"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
				</div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::to('Products') }}"><i class="glyphicon glyphicon-shopping-cart"></i> <span>Products</span></a></li>
					<li class="dropdown" >
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-plus"></i> <span>Create</span></a>
								<ul class="dropdown-menu">
									<li><a href="{{ URL::to('Products/create') }}"><span>Product</span></a></li>
									<li><a href="{{ URL::to('Products/createSCS') }}"><span>Supplier / Category / SubCategory</span></a></li>
								</ul>
					</li>
				</ul>
				</div>
			</nav>

			<div id="breadcrumb">
			<a href="{{ URL::to('Products') }}"><i class="glyphicon glyphicon-picture"></i> <span>Products</span></a>
			</div>

			<div class="content">

				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="dashboard">
							<div class="col-md-5 dashboard-inner">

								<div class="jumbotron text-center">
									<h2>{{ $Product->brand }}</h2>
									<div>
										<strong>Model:</strong> {{ $Product->model }}<br>
										<strong>Description:</strong> {{ $Product->description }}<br>
										<strong>Supplier:</strong> {{ $Product->supplier }}<br>
										<strong>Category:</strong> {{ $Product->category }}<br>
										<strong>Sub Category:</strong> {{ $Product->sub_category }}<br>
										<strong>Available Stocks:</strong> {{ $Product->stocks }}<br>
									</div>
								</div>

							</div>
							<div class="col-md-7 dashboard-inner">

								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img class="img-responsive" src="{{ asset('Uploads/' . $Product->image_1) }}" alt="{{ $Product->brand }} - {{ $Product->model }}">
										</div>
										<div class="item">
											<img class="img-responsive" src="{{ asset('Uploads/' . $Product->image_2) }}" alt="{{ $Product->brand }} - {{ $Product->model }}">
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
				
			</div>

				<script src="{{ asset('Assets/js/jquery-1.11.2.min.js') }}"></script>
				<script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>
				<script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/base.js') }}"></script>
				<script src="{{ asset('Assets/js/scripts.js') }}"></script>
			</body>
			</html>
<?php
		}
		else {
			header('Location: ../dashboard');
			die();
		}
    }
	else {
		header('Location: ../home');
		die();
	}
?>