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
                    <li><a href="{{ URL::to('home') }}"><i class="fa fa-home"></i>Home</a>
                    </li>
					<li><a href="{{ URL::to('services-page') }}">Services</a>
                    </li>
                    <li class="active">2 Way Radio Communication</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row service-page">
            <div class="col-lg-12">
                <h4 class="services-heading">Service & Repairs</h4>
                <p class="services-definition">We delivers whatever level of services you need for your two-way radios. Whether it’s a simple repair, system deployment, a permanent install, preventive maintenance, or a rental event, We are the wireless solution. We’re here to help meet all of your wireless communications needs.<br /><br />
				<ul class="service-list">
							<li>
								<h4>Rentals</h4>
								<p>Short or long-term rentals with full customer service</p>
							</li>
							
							<li>
								<h4>Repairs & Field Services</h4>
								<p>Repairs and maintenance wherever you need them</p>
							</li>
							
							<li>
								<h4>Installation & Deployment</h4>
								<p>Trust your system to the installation experts</p>
							</li>
							
							<li>
								<h4>Extended Warranties</h4>
								<p>Peace-of-mind and added product performance</p>
							</li>
							
							<li>
								<h4>Service Level Agreements</h4>
								<p>Ease budget pressures and save money</p>
							</li>
							
							<li>
								<h4>Preventive Maintenance</h4>
								<p>Affordable plans to protect and extend service life</p>
							</li>
							
							<li>
								<h4>Consulting & Customization</h4>
								<p>Expertise to provide the best two-way radio systems</p>
							</li>
							
							<li>
								<h4>Managed Services</h4>
								<p>Monitoring and managing your mission-critical wireless networks </p>
							</li>
						</ul>
				<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Two_Way_Radio_Service_&_Repairs') }}" role="button">Contact Us</a></p>
            </div>
        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
