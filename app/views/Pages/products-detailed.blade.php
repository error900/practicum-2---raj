<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')

    <!-- Page Content -->
    <div class="container-fluid bg-plain">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row breadcrumb-nav">
            <div class="col-lg-12">
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
            <div class="col-xs-12 col-md-5 col-md-offset-1">
                <a href="{{ URL::to('product-item-' . $list->id) }}">
                    <img class="product-image img-responsive img-hover" src="{{ asset('Uploads/' . $list->image_1) }}" alt="{{ $list->brand }} - {{ $list->model }}">
                </a>
            </div>
            <div class="col-xs-12 col-md-3 product-info">
                <h3>Brand : {{ $list->brand }}</h3>
                <h4>Model : {{ $list->model }}</h4>
                <p>{{ $list->description }}</p>
                <a class="btn btn-primary view-product-btn" href="{{ URL::to('product-item-' . $list->id) }}">View Product</a>
                <div class="hr-row-line hidden-lg hidden-md"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 hidden-xs hidden-sm">
                <div class="hr-row-line"></div>
            </div>
        </div>

		@endforeach
		@if (Session::has('message-products'))
		<div class="alert alert-info">{{ Session::get('message-products') }}</div>
		@endif
        <!-- /.row -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-xs-12 col-md-12">
                {{ $Product->links() }}
            </div>
        </div>
        <!-- /.row -->
    </div>

@include('Pages.footer-snippet')

</body>

</html>
