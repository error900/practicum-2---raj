@extends('layouts.master')

@section('title')
Create Supplier/Category/Subcategory
@stop

@section('content')
	<div id="breadcrumb">
		<a href= "{{ URL::to('dashboard') }}"><span>Dashboard</span></a>
		<span> > </span>
		<a href="{{ URL::to('Products') }}"><span>Products</span></a>
		<span> > </span>
		<a href="{{ URL::to('Products/createSCS') }}"  class="current"><span>Create Supplier/Category/Subcategory</span></a>
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
						{{ Form::label('subcategoryName', 'Subcategory Name') }}
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
@stop