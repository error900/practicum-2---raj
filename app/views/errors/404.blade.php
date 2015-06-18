<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body class="error-page">

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1><span class="error-404"><i style="color: #337AB7;" class="fa fa-meh-o"></i> Page not found</span></h1>
                    <p class="error-404">Aw! Sorry... the page you are looking for can not be located.</p><br />
					<p class="error-404">Maybe this links can help you:</p>
                    <ul>
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
							<a href="{{ URL::to('contact-page') }}">Contact</a>
						</li>
						<li>
							<a>Products</a>
							<ul>
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
						<li>
							<a href="{{ URL::to('product-compare') }}">Compare List</a>
						</li>
						<li>
							<a href="{{ URL::to('dashboard') }}">Login</a>
						</li>
                    </ul>
                </div>
            </div>

        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
