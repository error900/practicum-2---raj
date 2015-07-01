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
                    <li class="active">Product View</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Product Item Row -->
        <div class="row">
            <div class="col-md-8">
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

            <div class="col-md-4">
                <h3>Brand : {{ $Product->brand }}</h3>
                <h4>Model : {{ $Product->model }}</h4>
				<h4>Supplier : {{ $Product->supplier }}</h4>
				<h4>Category : {{ $Product->category }}</h4>
				<h4>Sub Category : {{ $Product->sub_category }}</h4>
                <p><strong>Description :</strong> {{ $Product->description }}</p>
				<h4>Available Stocks : {{ $Product->stocks }}</h4>
				<br />
				<a class="btn btn-default" href="{{ URL::to('addToCart' . $Product->id) }}" role="button">Add to comparison list</a><br /><br />
				
					@if (Session::has('message-addToCart'))
					<div class="alert alert-info">{{ Session::get('message-addToCart') }}</div>
					@endif
					
            </div>

        </div>
        <!-- /.row -->
    </div>

@include('Pages.footer-snippet')

</body>

</html>
