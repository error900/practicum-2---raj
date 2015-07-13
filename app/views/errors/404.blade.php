<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body class="error-page">

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron error-text">
                    <p>You're looking for something that doesn't actually exist...<br/>Try these links:</p>
                    <ul class="nav navbar-nav error-nav">
                    	<li>
	                        <a href="{{ URL::to('home') }}">Home</a>
	                    </li>
	                    <li>
	                        <a href="{{ URL::to('about-us') }}">About</a>
	                    </li>
	                    <li>
	                        <a href="{{ URL::to('services-page') }}">Services</a>
	                    </li>
	                    <li>
	                        <a href="{{ URL::to('contact-page') }}">Contact Us</a>
	                    </li>
	                    <li class="dropdown disabled">
	                        <a href="#" class="dropdown-toggle disabled" data-toggle="dropdown">Products <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                            <li>
	                                <a href="{{ URL::to('products-detailed') }}">Detailed View</a>
	                            </li>
	                            <li>
	                                <a href="{{ URL::to('products-grid') }}">Grid View</a>
	                            </li>
	                            <li>
	                                <a href="{{ URL::to('products-gallery') }}">Gallery View</a>
	                            </li>
	                        </ul>
	                    </li>
						<li class="disabled">
							<a href="#" class="disabled">Compare List</a>
						</li>
	                </ul>
					<div class="error-login">
						<p>&mdash; or &mdash;</p>
						<a href="{{ URL::to('dashboard') }}" class="btn btn-primary login-btn">Login</a>
					</div>
                </div>
            </div>
        </div>
	</div>
</body>

</html>
