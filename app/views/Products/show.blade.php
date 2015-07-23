@extends('layouts.master')

@section('title')
	Product {{ $Product->brand}}
@stop

@section('content')
	<div id="breadcrumb">
		<a href= "{{ URL::to('dashboard') }}"><span>Dashboard</span></a>
		<span> > </span>
		<a href="{{ URL::to('Products') }}"><span>Products</span></a>
		<span> > </span>
		<a href="{{ URL::to('Products') }}"  class="current"><span>Show Product</span></a>
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
@stop