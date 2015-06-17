<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
				<hr />
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('home') }}">Home</a>
                    </li>
                    <li class="active">Products - Detailed View</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Products Row -->
		@foreach ($Product as $list)
        <div class="row">
            <div class="col-md-7">
                <a href="{{ URL::to('product-item-' . $list->id) }}">
                    <img class="product-image img-responsive img-hover" src="{{ asset('Uploads/' . $list->image_1) }}" alt="{{ $list->brand }} - {{ $list->model }}">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Brand : {{ $list->brand }}</h3>
                <h4>Model : {{ $list->model }}</h4>
                <p><strong>Description :</strong> {{ $list->description }}</p>
                <a class="btn btn-primary" href="{{ URL::to('product-item-' . $list->id) }}">View Product</a>
            </div>
        </div>
		
        <hr>

		@endforeach
		@if (Session::has('message-products'))
		<div class="alert alert-info">{{ Session::get('message-products') }}</div>
		@endif
        <!-- /.row -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                {{ $Product->links() }}
            </div>
        </div>
        <!-- /.row -->

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
