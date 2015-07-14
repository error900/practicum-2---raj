<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body class="index">

@include('Pages.header-nav-snippet')

    <div class="rajtech-bg-image">
        <div class="services-offered hidden-xs hidden-sm">
    		<a href="{{ URL::to('two-way-radio-communication') }}">
                <img id="image-icon1" onmouseover="mouseOver1()" onmouseout="mouseOut1()" src="{{ asset('Assets/img/slider/icon1.png') }}" width="160px" height="160px"/>
                <img class="gear" src="{{ asset('Assets/img/slider/gear1.png') }}">
                <p class="service-title">Information Technology (IT) Services</p>
                <p class="service-description">We are a global leader in delivering IT Outsourcing Services in the industry. Our transformation and innovation capabilities help IT functions to become a key business enabler and harnessing the latest technology for delivering excellent services.
                </p>

    		</a>
    		<a href="{{ URL::to('imaging-solutions') }}">
                <img id="image-icon2" onmouseover="mouseOver2()" onmouseout="mouseOut2()" src="{{ asset('Assets/img/slider/icon2.png') }}" width="130px" height="130px"/>
                <img class="gear" src="{{ asset('Assets/img/slider/gear2.png') }}">
                <p class="service-title">Imaging Solution Services</p>
                <p class="service-description">Imaging Solutions mean custom office equipment packages to address your specific wants and needs. By combining quality digital printer, copier, scanner and fax hardware, with our excellent customer support.</p>

    		</a>
    		<a href="{{ URL::to('information-technology') }}">
                <img id="image-icon3" onmouseover="mouseOver3()" onmouseout="mouseOut3()" src="{{ asset('Assets/img/slider/icon3.png') }}" width="130px" height="130px"/>
                <img class="gear" src="{{ asset('Assets/img/slider/gear3.png') }}">
                <p class="service-title">2-Way Radio Communication Services</p>
                <p class="service-description">Our diverse array of portable and mobile two-way radios better enable you to efficiently coordinate and communicate with your on-the-go workforce, regardless of whether you have a small shop or a large nationwide business.</p>

    		</a>
    		<a href="{{ URL::to('security-and-surveillance') }}">
                <img id="image-icon4" onmouseover="mouseOver4()" onmouseout="mouseOut4()" src="{{ asset('Assets/img/slider/icon4.png') }}" width="130px" height="130px"/>
                <img class="gear" src="{{ asset('Assets/img/slider/gear4.png') }}">
                <p class="service-title">Security &amp; Surveillance Services</p>
                <p class="service-description">Our expertise includes access control, video surveillance, integrated physical/logical security and intrusion alarms. Our strong experience with 100 percent IP-based systems that lower cost and improve network flexibility and scalability.</p>

    		</a>
    		<a href="{{ URL::to('renewable-energy') }}">
                <img id="image-icon5" onmouseover="mouseOver5()" onmouseout="mouseOut5()" src="{{ asset('Assets/img/slider/icon5.png') }}" width="130px" height="130px"/>
                <img class="gear" src="{{ asset('Assets/img/slider/gear5.png') }}">
                <p class="service-title">Renewable Energy Services</p>
                <p class="service-description">Solar technologies are an effective and increasingly economic choice as conventional energy prices rise. We have the capabilities to develop, construct, operate and optimise the operation of solar powered facilities.</p>

    		</a>
            <img class="gearcc g1" src="{{ asset('Assets/img/slider/g1cc.png') }}">
            <img class="gearcc g3" src="{{ asset('Assets/img/slider/g2cc.png') }}">
            <img class="gearcc g5" src="{{ asset('Assets/img/slider/g3cc.png') }}">
            <img class="gearcc g8" src="{{ asset('Assets/img/slider/g4cc.png') }}">
            <img class="gearcc g10" src="{{ asset('Assets/img/slider/g5cc.png') }}">
            <img class="gearc g2" src="{{ asset('Assets/img/slider/g1c.png') }}">
            <img class="gearc g4" src="{{ asset('Assets/img/slider/g2c.png') }}">
            <img class="gearc g6" src="{{ asset('Assets/img/slider/g3c.png') }}">
            <img class="gearc g7" src="{{ asset('Assets/img/slider/g4c.png') }}">
            <img class="gearc g9" src="{{ asset('Assets/img/slider/g5c.png') }}">
        </div>
    </div>
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
                        <h4><span class="service-panel-icon"><img src="{{ asset('Assets/img/check-o.png') }}"></span>Information Technology (IT) Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>We are a global leader in delivering IT Outsourcing Services in the industry. Our transformation and innovation capabilities help IT functions to become a key business enabler and harnessing the latest technology for delivering excellent services.</p>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ URL::to('information-technology') }}" class="btn btn-default learnmore-btn">Learn More</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="service-panel-icon"><img src="{{ asset('Assets/img/check-o.png') }}"></span></i>Imaging Solution Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Imaging Solutions mean custom office equipment packages to address your specific wants and needs. By combining quality digital printer, copier, scanner and fax hardware, with our excellent customer support.</p>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ URL::to('imaging-solutions') }}" class="btn btn-default learnmore-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="service-panel-icon"><img src="{{ asset('Assets/img/check-o.png') }}"></span>2-Way Radio Communication Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our diverse array of portable and mobile two-way radios better enable you to efficiently coordinate and communicate with your on-the-go workforce, regardless of whether you have a small shop or a large nationwide business.</p>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ URL::to('two-way-radio-communication') }}" class="btn btn-default learnmore-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="service-panel-icon"><img src="{{ asset('Assets/img/check-o.png') }}"></span></i>Security &amp; Surveillance Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our expertise includes access control, video surveillance, integrated physical/logical security and intrusion alarms. Our strong experience with 100 percent IP-based systems that lower cost and improve network flexibility and scalability.</p>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ URL::to('security-and-surveillance') }}" class="btn btn-default learnmore-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="service-panel-icon"><img src="{{ asset('Assets/img/check-o.png') }}"></span>Renewable Energy Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>Solar technologies are an effective and increasingly economic choice as conventional energy prices rise. We have the capabilities to develop, construct, operate and optimise the operation of solar powered facilities.</p>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="{{ URL::to('renewable-energy') }}" class="btn btn-default learnmore-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->

    <!-- Products Section -->

    <div class="container-fluid bg-plain">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center header1">Products</h2>
            </div>
            @foreach ($Product as $list)
            <div class="col-md-4 col-sm-6 product-name text-center">
                <div class="product-badge">
                    <span>
                        <p>{{ $list->brand }}</p>
                        <p>{{ $list->model }}</p>
                    </span>
                </div>
                <a href="{{ URL::to('product-item-' . $list->id) }}">
                    <img class="panel img-responsive img-portfolio img-hover product-image3" src="{{ asset('Uploads/' . $list->image_1) }}" alt="{{ $list->brand }} - {{ $list->model }}">
                </a>
            </div>
            @endforeach
        </div>
		@if (Session::has('message-products'))
		<div class="alert alert-info">{{ Session::get('message-products') }}</div>
		@endif
    </div>
    <!-- /.container -->

@include('Pages.footer-snippet')

<script src="{{ asset('Assets/js/services-icons.js') }}"></script>
</body>

</html>
