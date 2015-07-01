<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')

    <!-- Page Content -->
    <div class="container-fluid bg-plain">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row breacrum-nav">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('home') }}">Home</a>
                    </li>
                    <li class="active">Product Compare List</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

		<div class="row">
			<div class="col-md-12">
				<span class="pull-left">Total of Items: {{ $totalItems }}</span>
				<a class="pull-right" href="{{ URL::to('clearAll') }}">Clear All</a><br />
				@if ($errors->has())
					<div class="alert alert-danger">
						@foreach ($errors->all() as $error)
							{{ $error }}<br>        
						@endforeach
					</div>
				@endif
				@if (Session::has('message-quote'))
				<div class="alert alert-success">{{ Session::get('message-quote') }}</div>
				@endif
				@if (Session::has('message-cart'))
				<div class="alert alert-info">{{ Session::get('message-cart') }}</div>
				@endif
			</div>
		</div>
		
        <!-- Products Compare Row -->
        <div class="row">
			<div class="product-compare-container col-md-12">
				<table class="product-compare-table table table-bordered">
					<tbody>
						@foreach ($content as $row)
							<colgroup>
								<col width="30%">
							</colgroup>
						@endforeach
						<tr>
							@foreach ($content as $row)
							<th>
								<a class="pull-right" href="{{ URL::to('remove' . $row->rowid) }}"><i class="fa fa-times"></i></a>
								{{ Form::open(array('url' => 'get_quantity' . $row->rowid)) }}
								<span class="pull-left">Quantity: {{ Form::text('quantity', Input::old('quantity')?: $row->qty, array('width' => '100%')) }}</span>
								{{ Form::submit('CHANGE') }}
								{{ Form::close() }}
							</th>
							@endforeach
						</tr>
						<tr>
							@foreach ($content as $row)
							<th>
								<a href="{{ URL::to('product-item-' . $row->id) }}">
									<img class="product-image product-compare-image img-hover" src="{{ asset('Uploads/' . $row->product->image_1) }}" alt="{{ $row->product->brand }} - {{ $row->product->model }}">
								</a>
								<h4 class="product-compare-brand">{{ $row->product->brand }}</h4>
							</th>
							@endforeach
						</tr>
						<tr>
							<td class="product-compare-label" colspan="50">Model</td>
						</tr>
						<tr>
							@foreach ($content as $row)
							<td class="product-compare-content">{{ $row->product->model }}</td>
							@endforeach
						</tr>
						<tr>
							<td class="product-compare-label" colspan="50">Supplier</td>
						</tr>
						<tr>
							@foreach ($content as $row)
							<td class="product-compare-content">{{ $row->product->supplier }}</td>
							@endforeach
						</tr>
						<tr>
							<td class="product-compare-label" colspan="50">Category</td>
						</tr>
						<tr>
							@foreach ($content as $row)
							<td class="product-compare-content">{{ $row->product->category }}</td>
							@endforeach
						</tr>
						<tr>
							<td class="product-compare-label" colspan="50">Sub Category</td>
						</tr>
						<tr>
							@foreach ($content as $row)
							<td class="product-compare-content">{{ $row->product->sub_category }}</td>
							@endforeach
						</tr>
						<tr>
							<td class="product-compare-label" colspan="50">Description</td>
						</tr>
						<tr>
							@foreach ($content as $row)
							<td class="product-compare-content">{{ $row->product->description }}</td>
							@endforeach
						</tr>
					</tbody>
				</table>
			</div>
        </div>
        <!-- /.row -->

		<div class="row request-quote-top-buffer">
			<div class="col-md-12">
			<center><a class="btn btn-info btn-lg" href="{{ URL::to('product-get-quote') }}" role="button">Request a Quote</a></center>
			</div>
		</div>
	</div>

@include('Pages.footer-snippet')

</body>

</html>
