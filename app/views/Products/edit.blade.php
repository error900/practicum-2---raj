@extends('layouts.master')

@section('title')
Edit Product {{ $Product->brand }}
@stop

@section('content')
	<div id="breadcrumb">
		<a href= "{{ URL::to('dashboard') }}"><span>Dashboard</span></a>
		<span> > </span>
		<a href="{{ URL::to('Products') }}"><span>Products</span></a>
		<span> > </span>
		<a href="{{ URL::to('Products/createSCS') }}"><span>Edit Product</span></a>
	</div>
	<div class="content">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="dashboard">
					<div class="dashboard-inner">

					<h1>Edit {{ $Product->brand }}</h1>

					<!-- if there are creation errors, they will show here -->
					@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
						@endif

						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						{{ Form::model($Product, array('route' => array('Products.update', $Product->id), 'method' => 'PUT', 'files' => true)) }}

							<div class="form-group">
								{{ Form::label('brand', 'Brand') }}
								{{ Form::text('brand', Input::old('brand'), array('class' => 'form-control')) }}
								@if ($errors->has('brand')) <p class="alert alert-danger">{{ $errors->first('brand') }}</p> @endif
							</div>

							<div class="form-group">
								{{ Form::label('model', 'Model') }}
								{{ Form::text('model', Input::old('model'), array('class' => 'form-control')) }}
								@if ($errors->has('model')) <p class="alert alert-danger">{{ $errors->first('model') }}</p> @endif
							</div>

							<div class="form-group">
								{{ Form::label('description', 'Description') }}
								{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
								@if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif
							</div>

							<div class="form-group">
								{{ Form::label('supplier', 'Supplier') }}
								{{ Form::select('supplier', array('' => 'Choose A Supplier', '------------------------------' => $product_suppliers), Input::old('supplier'), array('class' => 'form-control')) }}
								@if ($errors->has('supplier')) <p class="alert alert-danger">{{ $errors->first('supplier') }}</p> @endif
							</div>

							<div class="form-group">
								{{ Form::label('category', 'Category') }}
								{{ Form::select('category', array('' => 'Choose A Category', '------------------------------' => $product_categories), Input::old('category'), array('class' => 'form-control')) }}
								@if ($errors->has('category')) <p class="alert alert-danger">{{ $errors->first('category') }}</p> @endif
							</div>

							<div class="form-group">
								{{ Form::label('sub_category', 'Sub Category') }}
								{{ Form::select('sub_category', array('' => 'Choose A Sub Category', '------------------------------' => $product_sub_categories), Input::old('sub_category'), array('class' => 'form-control')) }}
								@if ($errors->has('sub_category')) <p class="alert alert-danger">{{ $errors->first('sub_category') }}</p> @endif
							</div>

							<div class="form-group">
								{{ Form::label('image_1', 'Product Image') }}
								{{ Form::file('image_1', array('class' => 'form-control')) }}
								@if ($errors->has('image_1')) <p class="alert alert-danger">{{ $errors->first('image_1') }}</p> @endif
							</div>

							<div class="form-group">
								{{ Form::label('image_2', 'Specs') }}
								{{ Form::file('image_2', array('class' => 'form-control')) }}
								@if ($errors->has('image_2')) <p class="alert alert-danger">{{ $errors->first('image_2') }}</p> @endif
							</div>

							{{ Form::submit('Edit the Product!', array('class' => 'btn btn-primary')) }}

						{{ Form::close() }}

					</div>
				</div>
			</div>
		</div>
	</div>
@stop