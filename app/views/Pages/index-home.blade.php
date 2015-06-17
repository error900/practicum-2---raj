<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body class="bg-index">

@include('Pages.header-nav-snippet')

    <header id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill"><img class="img-responsive rajtech-bg-image" src="Assets/img/slider/bg-rajtech-services.jpg" /></div>
				
                <div class="carousel-caption">
				
				<a href="{{ URL::to('two-way-radio-communication') }}">
				<div class="icon1" onmouseover="mouseOver1()" onmouseout="mouseOut1()"><img id="image-icon1" src="{{ asset('Assets/img/slider/Logo1.gif') }}" width="160px" height="160px" /></div>
				</a>
				<a href="{{ URL::to('imaging-solutions') }}">
				<div class="icon2" onmouseover="mouseOver2()" onmouseout="mouseOut2()"><img id="image-icon2" src="{{ asset('Assets/img/slider/Logo2.gif') }}" width="130px" height="130px" /></div>
				</a>
				<a href="{{ URL::to('information-technology') }}">
				<div class="icon3" onmouseover="mouseOver3()" onmouseout="mouseOut3()"><img id="image-icon3" src="{{ asset('Assets/img/slider/Logo3.gif') }}" width="130px" height="130px" /></div>
				</a>
				<a href="{{ URL::to('security-and-surveillance') }}">
				<div class="icon4" onmouseover="mouseOver4()" onmouseout="mouseOut4()"><img id="image-icon4" src="{{ asset('Assets/img/slider/Logo4.gif') }}" width="130px" height="130px" /></div>
				</a>
				<a href="{{ URL::to('renewable-energy') }}">
				<div class="icon5" onmouseover="mouseOver5()" onmouseout="mouseOut5()"><img id="image-icon5" src="{{ asset('Assets/img/slider/Logo5.gif') }}" width="130px" height="130px" /></div>
				</a>
				
				<p style="color: #0066ff;" class="text-caption" id="text-caption"></p>
				
                </div>
				
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container-fluid bg-plain">

        <!-- Marketing Icons Section -->
        <div class="row services-panels">
            <div class="col-md-12">
                <h1 class="text-center header1">Products &amp; Services</h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-users"></i> Information Technology(IT) Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>We are a global leader in delivering IT Outsourcing Services in the industry. Our transformation and innovation capabilities help IT functions to become a key business enabler and harnessing the latest technology for delivering excellent services.</p>
                        <a href="{{ URL::to('information-technology') }}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-file-image-o"></i> Imaging Solution Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Imaging Solutions mean custom office equipment packages to address your specific wants and needs. By combining quality digital printer, copier, scanner and fax hardware, with our excellent customer support.</p>
                        <a href="{{ URL::to('imaging-solutions') }}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-wifi"></i> 2-Way Radio Communication Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our diverse array of portable and mobile two-way radios better enable you to efficiently coordinate and communicate with your on-the-go workforce, regardless of whether you have a small shop or a large nationwide business.</p>
                        <a href="{{ URL::to('two-way-radio-communication') }}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-video-camera"></i> Security & Surveillance Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our expertise includes access control, video surveillance, integrated physical/logical security and intrusion alarms. Our strong experience with 100 percent IP-based systems that lower cost and improve network flexibility and scalability.</p>
                        <a href="{{ URL::to('security-and-surveillance') }}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-recycle"></i> Renewable Energy Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Solar technologies are an effective and increasingly economic choice as conventional energy prices rise. We have the capabilities to develop, construct, operate and optimise the operation of solar powered facilities.</p>
                        <a href="{{ URL::to('renewable-energy') }}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Products Section -->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Products</h2>
            </div>
			<hr />
			@foreach ($Product as $list)
            <div class="col-md-4 col-sm-6">
				<center><span>{{ $list->brand }} - {{ $list->model }}</span></center>
                <a href="{{ URL::to('product-item-' . $list->id) }}">
                    <img class="panel img-responsive img-portfolio img-hover" src="{{ asset('Uploads/' . $list->image_1) }}" alt="{{ $list->brand }} - {{ $list->model }}">
                </a>
            </div>
			@endforeach
        </div>
		@if (Session::has('message-products'))
		<div class="alert alert-info">{{ Session::get('message-products') }}</div>
		@endif
        <!-- /.row -->


@include('Pages.footer-snippet')
		
	<script src="{{ asset('Assets/js/services-icons.js') }}"></script>

</body>

</html>
