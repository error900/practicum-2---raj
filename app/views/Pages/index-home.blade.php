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
            <div class="col-md-12 hr-row-line"></div>
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

    <script>
        function mouseOver1() {
            $("#image-icon2 + .gear").addClass("spincc");
            $("#image-icon3 + .gear").addClass("spinc");
            $("#image-icon4 + .gear").addClass("spincc");
            $("#image-icon5 + .gear").addClass("spincc");
        }

        function mouseOut1() {
            $("#image-icon2 + .gear").removeClass("spincc");
            $("#image-icon3 + .gear").removeClass("spinc");
            $("#image-icon4 + .gear").removeClass("spincc");
            $("#image-icon5 + .gear").removeClass("spincc");
        }

        function mouseOver2() {
            $("#image-icon1 + .gear").addClass("spinc");
            $("#image-icon3 + .gear").addClass("spinc");
            $("#image-icon4 + .gear").addClass("spincc");
            $("#image-icon5 + .gear").addClass("spincc");
        }

        function mouseOut2() {
            $("#image-icon1 + .gear").removeClass("spinc");
            $("#image-icon3 + .gear").removeClass("spinc");
            $("#image-icon4 + .gear").removeClass("spincc");
            $("#image-icon5 + .gear").removeClass("spincc");
        }

        function mouseOver3() {
            $("#image-icon1 + .gear").addClass("spinc");
            $("#image-icon2 + .gear").addClass("spincc");
            $("#image-icon4 + .gear").addClass("spincc");
            $("#image-icon5 + .gear").addClass("spincc");
        }

        function mouseOut3() {
            $("#image-icon1 + .gear").removeClass("spinc");
            $("#image-icon2 + .gear").removeClass("spincc");
            $("#image-icon4 + .gear").removeClass("spincc");
            $("#image-icon5 + .gear").removeClass("spincc");
        }

        function mouseOver4() {
            $("#image-icon1 + .gear").addClass("spinc");
            $("#image-icon2 + .gear").addClass("spincc");
            $("#image-icon3 + .gear").addClass("spinc");
            $("#image-icon5 + .gear").addClass("spincc");
        }

        function mouseOut4() {
            $("#image-icon1 + .gear").removeClass("spinc");
            $("#image-icon2 + .gear").removeClass("spincc");
            $("#image-icon3 + .gear").removeClass("spinc");
            $("#image-icon5 + .gear").removeClass("spincc");
        }

        function mouseOver5() {
            $("#image-icon1 + .gear").addClass("spinc");
            $("#image-icon2 + .gear").addClass("spincc");
            $("#image-icon3 + .gear").addClass("spinc");
            $("#image-icon4 + .gear").addClass("spincc");
        }

        function mouseOut5() {
            $("#image-icon1 + .gear").removeClass("spinc");
            $("#image-icon2 + .gear").removeClass("spincc");
            $("#image-icon3 + .gear").removeClass("spinc");
            $("#image-icon4 + .gear").removeClass("spincc");
        }

        
    </script>
    <script type="text/javascript"> 
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            $('.services-offered').css({'opacity':(( 300-scroll )/300)});
        });
    </script>​
    <script type="text/javascript"> 
        $(window).scroll(function() { 
            // The social div 
            var $socialDiv = $('.hero_text'); 

            //Get scroll position of window 
            var windowScroll = $(this).scrollTop(); 

            //Slow scroll of social div and fade it out 
            $socialDiv.css({ 
                'margin-top' : - (windowScroll / 3) + "px", 
                'opacity' : 1 - (windowScroll / 550) 
            }); 
        }); 
    </script>​

    
		
</body>

</html>
