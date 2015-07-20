<?php
if (Sentry::check())
    {
		$user = Sentry::getUser();
		if ($user->isSuperUser())
		{
?>
			<!-- app/views/Products/create.blade.php -->
			
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

				<div class="col-md-4 dashboard-inner">

				<h3>Create a Supplier</h3>

				<!-- if there are creation errors, they will show here -->
				@if (Input::old('hidden1')==1)
				@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
				@endif
				@endif

				@if (Session::has('message1'))
					<div class="alert alert-success">{{ Session::get('message1') }}</div>
				@endif

				{{ Form::open(array('route' => 'CreateSCS.Supplier')) }}

					<div class="form-group">
						{{ Form::label('supplierName', 'Supplier Name') }}
						{{ Form::text('supplierName', Input::old('supplierName'), array('class' => 'form-control')) }}
						{{ Form::hidden('hidden1', '1') }}
					</div>

					{{ Form::submit('Create a Supplier!', array('class' => 'btn btn-primary')) }}

				{{ Form::close() }}

				</div>

				<div class="col-md-4 dashboard-inner">

				<h3>Create a Category</h3>

				<!-- if there are creation errors, they will show here -->
				@if (Input::old('hidden2')==1)
				@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
				@endif
				@endif

				@if (Session::has('message2'))
					<div class="alert alert-success">{{ Session::get('message2') }}</div>
				@endif

				{{ Form::open(array('route' => 'CreateSCS.Category')) }}

					<div class="form-group">
						{{ Form::label('categoryName', 'Category Name') }}
						{{ Form::text('categoryName', Input::old('categoryName'), array('class' => 'form-control')) }}
						{{ Form::hidden('hidden2', '1') }}
					</div>

					{{ Form::submit('Create a Category!', array('class' => 'btn btn-primary')) }}

				{{ Form::close() }}

				</div>

				<div class="col-md-4 dashboard-inner">

				<h3>Create a Sub Category</h3>

				<!-- if there are creation errors, they will show here -->
				@if (Input::old('hidden3')==1)
				@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
				@endif
				@endif

				@if (Session::has('message3'))
					<div class="alert alert-success">{{ Session::get('message3') }}</div>
				@endif

				{{ Form::open(array('route' => 'CreateSCS.SubCategory')) }}

					<div class="form-group">
						{{ Form::label('subcategoryName', 'subcategoryName') }}
						{{ Form::text('subcategoryName', Input::old('subcategoryName'), array('class' => 'form-control')) }}
						{{ Form::hidden('hidden3', '1') }}
					</div>

					{{ Form::submit('Create a Sub Category!', array('class' => 'btn btn-primary')) }}

				{{ Form::close() }}

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