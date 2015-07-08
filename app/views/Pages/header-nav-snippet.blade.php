
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid nav-wide">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('home') }}"><span>RAJ</span> Technologies Inc.</a>
                <div class="logo"></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="social text-right hidden-xs hidden-sm">
                    <!-- <p class="company-address">#7 Labsan St. Baguio City</p> -->
                    <!-- <ul class="nav navbar-nav">
                        <li><a href="#" class="fb"></a>facebook</li>
                        <li><a href="#" class="twtr"></a>twitter</li>
                        <li><a href="#" class="gml"></a>email</li>
                    </ul> -->
                </div>
                <ul class="nav navbar-nav navbar-right nav-position-abs">
                    <li>
                        <a href="{{ URL::to('about-us') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('services-page') }}">Services</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('contact-page') }}">Contact</a>
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="scroll-top-wrapper">
		<span class="scroll-top-inner">
			<i class="fa fa-lg fa-chevron-up"></i>
		</span>
	</div>
	