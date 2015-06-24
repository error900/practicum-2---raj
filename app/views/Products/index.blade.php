<?php
if (Sentry::check())
    {
		$user = Sentry::getUser();
		if ($user->isSuperUser())
		{
?>
			<!-- app/views/Products/index.blade.php -->

			<!DOCTYPE html>
			<html>
			<head>
				<title>Products</title>
        		<link href="{{ asset('Assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}" />
				<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/toggle-switch.css') }}" />
				<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base.css') }}" media="all" />
				<link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/styles.css') }}" media="all" />
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
					<a class="navbar-brand" href="{{ URL::to('dashboard') }}"><i class="fa fa-tachometer"></i> Dashboard</a>
				</div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::to('Products') }}"><i class="fa fa-shopping-cart"></i> <span>Products</span></a></li>
					<li class="dropdown" >
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-plus"></i> <span>Create</span></a>
								<ul class="dropdown-menu">
									<li><a href="{{ URL::to('Products/create') }}"><span>Product</span></a></li>
									<li><a href="{{ URL::to('Products/createSCS') }}"><span>Supplier / Category / SubCategory</span></a></li>
								</ul>
					</li>
				</ul>
				</div>
			</nav>

			<div id="breadcrumb">
			<a href="{{ URL::to('Products') }}"><i class="fa fa-picture"></i> <span>Products</span></a>
			</div>

			<div class="content">

			<div class="row">
			<div class="col-md-12">
			<div class="dashboard">
			<div class="dashboard-inner">

			<h1>Products</h1>

			<!-- will be used to show any messages -->
			@if ($errors->has())
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
						{{ $error }}<br>        
					@endforeach
				</div>
			@endif
			@if (Session::has('message-create'))
				<div class="alert alert-success">{{ Session::get('message-create') }}</div>
			@endif
			@if (Session::has('message'))
				<div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
			@if (Session::has('message-stock-error'))
				<div class="alert alert-warning">{{ Session::get('message-stock-error') }}</div>
			@endif

			<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="strong">
						<td>Brand</td>
						<td>Model</td>
						<td>Description</td>
						<td>Supplier</td>
						<td>Category</td>
						<td>Sub Category</td>
						<td>Available Stocks</td>
					</tr>
				</thead>
				<tbody>
				@foreach($Products as $key => $value)
					<tr>
						<td>{{ $value->brand }}</td>
						<td>{{ $value->model }}</td>
						<td>{{ $value->description }}</td>
						<td>{{ $value->supplier }}</td>
						<td>{{ $value->category }}</td>
						<td>{{ $value->sub_category }}</td>
						<td>Current Stock : {{ $value->stocks }}
							{{ Form::open(array('url' => 'updateStocks' . $value->id)) }}
							<span class="pull-left">Modify Stock : {{ Form::number('stocks', Input::old('stocks'), array('width' => '100%')) }}</span><br />
							<span class="pull-left">{{ Form::submit('Update Stock') }}</span>
							{{ Form::close() }}
						</td>

						<!-- we will also add show, edit, and delete buttons -->
						<td class="custom-td1">

							<!-- show the Product (uses the show method found at GET /Products/{id} -->
							<a class="btn btn-small btn-success pull-left custom-btn" href="{{ URL::to('Products/' . $value->id) }}">Show</a>

							<!-- edit this Product (uses the edit method found at GET /Products/{id}/edit -->
							<a class="btn btn-small btn-info pull-left custom-btn" href="{{ URL::to('Products/' . $value->id . '/edit') }}">Edit</a>

							<!-- delete the Product (uses the destroy method DESTROY /Products/{id} -->
							{{ Form::open(array('url' => 'Products/' . $value->id, 'class' => 'delete-form')) }}
								{{ Form::hidden('_method', 'DELETE') }}
								{{ Form::submit('Delete', array('class' => 'btn btn-small btn-warning pull-left custom-btn')) }}
							{{ Form::close() }}
							
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>

			<!-- Pagination -->
			<div class="row text-center">
				<div class="col-lg-12">
					{{ $Products->links() }}
				</div>
			</div>
			<!-- /.row -->
			
			</div>
			</div>
			</div>
			</div>

			<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<div class="dashboard">

			<div class="col-md-4 dashboard-inner">
			<h4>Suppliers</h4>

			<!-- will be used to show any messages -->
			@if (Session::has('message1'))
				<div class="alert alert-info">{{ Session::get('message1') }}</div>
			@endif

			<table class="table table-striped table-bordered">
				<thead>
					<tr class="strong">
						<td>Supplier Name</td>
					</tr>
				</thead>
				<tbody>
				@foreach($ProductSuppliers as $key => $value1)
					<tr>
						<td>{{ $value1->supplierName }}</td>

						<!-- we will also add show, edit, and delete buttons -->
						<td class="custom-td2">

							{{ Form::open(['route' => ['DeleteSupplier/', $value1->id], 'method' => 'delete', 'class' => 'delete-form']) }}
							{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
							{{ Form::close() }}
							
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>

			<div class="col-md-4 dashboard-inner">
			<h4>Categories</h4>

			<!-- will be used to show any messages -->
			@if (Session::has('message2'))
				<div class="alert alert-info">{{ Session::get('message2') }}</div>
			@endif

			<table class="table table-striped table-bordered">
				<thead>
					<tr class="strong">
						<td>Category Name</td>
					</tr>
				</thead>
				<tbody>
				@foreach($ProductCategories as $key => $value2)
					<tr>
						<td>{{ $value2->categoryName }}</td>

						<!-- we will also add show, edit, and delete buttons -->
						<td class="custom-td2">

							{{ Form::open(['route' => ['DeleteCategory/', $value2->id], 'method' => 'delete', 'class' => 'delete-form']) }}
							{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
							{{ Form::close() }}
							
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>

			<div class="col-md-4 dashboard-inner">
			<h4>Sub Categories</h4>

			<!-- will be used to show any messages -->
			@if (Session::has('message3'))
				<div class="alert alert-info">{{ Session::get('message3') }}</div>
			@endif

			<table class="table table-striped table-bordered">
				<thead>
					<tr class="strong">
						<td>Sub Category Name</td>
					</tr>
				</thead>
				<tbody>
				@foreach($ProductSubCategories as $key => $value3)
					<tr>
						<td>{{ $value3->subcategoryName }}</td>

						<!-- we will also add show, edit, and delete buttons -->
						<td class="custom-td2">

							{{ Form::open(['route' => ['DeleteSubCategory/', $value3->id], 'method' => 'delete', 'class' => 'delete-form']) }}
							{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
							{{ Form::close() }}
							
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>

			</div>
			</div>
			</div>

			</div>

				<script src="{{ asset('Assets/js/jquery-1.11.2.min.js') }}"></script>
				<script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>
				<script src="{{ asset('Assets/js/bootbox.min.js') }}"></script>
				<script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/base.js') }}"></script>
				<script src="{{ asset('Assets/js/scripts.js') }}"></script>
			</body>
			</html>
<?php
		}
		else {
			header('Location: dashboard');
			die();
		}
    }
	else {
		header('Location: tachometer');
		die();
	}
?>