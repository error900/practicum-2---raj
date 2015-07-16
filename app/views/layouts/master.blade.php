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
		{{ HTML::script('Assets/js/angular.min.js'); }}
		{{ HTML::script('Assets/js/ui-bootstrap-tpls-0.12.0.min.js'); }}
		{{ HTML::script('Assets/js/angular-snippet.js'); }}
	</head>

	<body>
		@yield('content')
	</body>

        <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-md-12 pattern-divider"></div>
            <div class="col-md-9">
                <ul class="nav navbar-nav nav-footer text-center">
                    <li><a href="{{ URL::to('home') }}">Home</a></li>
                    <div class="hr-nav-line hidden-lg hidden-md"></div>
                    <li><a href="{{ URL::to('about-us') }}">About</a></li>
                    <div class="hr-nav-line hidden-lg hidden-md"></div>
                    <li><a href="{{ URL::to('services-page') }}">Services</a></li>
                    <div class="hr-nav-line hidden-lg hidden-md"></div>
                    <li><a href="{{ URL::to('contact-page') }}">Contact</a></li>
                    <div class="hr-nav-line hidden-lg hidden-md"></div>
                    <li><a href="{{ URL::to('career-page') }}">Careers</a></li>
                    <li><a href="{{ URL::to('dashboard') }}" class="btn btn-default login-btn disabled">Login</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="copyright">Copyright &copy; RAJ. Technologies Inc. 2015</p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('Assets/js/jquery-1.11.2.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>

	<!-- Custom JavaScript -->
	<script src="{{ asset('Assets/js/bootbox.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
	<script src="{{ asset('Assets/js/scripts.js') }}"></script>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')
@section('content')
@stop

@include('Pages.footer-snippet')

</body>

</html> -->