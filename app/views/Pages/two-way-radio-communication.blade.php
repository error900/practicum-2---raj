<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
				<hr />
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('home') }}">Home</a>
                    </li>
					<li><a href="{{ URL::to('services-page') }}">Services</a>
                    </li>
                    <li class="active">2 Way Radio Communication</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h4 class="services-heading">Service & Repairs</h4>
                <p class="services-definition">We delivers whatever level of services you need for your two-way radios. Whether it’s a simple repair, system deployment, a permanent install, preventive maintenance, or a rental event, We are the wireless solution. We’re here to help meet all of your wireless communications needs.<br /><br />
				<ul>
					<li>Rentals</li>
					 - Short or long-term rentals with full customer service
					<li>Repairs & Field Services</li>
					 - Repairs and maintenance wherever you need them
					<li>Installation & Deployment</li>
					 - Trust your system to the installation experts
					<li>Extended Warranties</li>
					 - Peace-of-mind and added product performance
					<li>Service Level Agreements</li>
					 - Ease budget pressures and save money
					<li>Preventive Maintenance</li>
					 - Affordable plans to protect and extend service life
					<li>Consulting & Customization</li>
					 - Expertise to provide the best two-way radio systems
					<li>Managed Services</li>
					 - Monitoring and managing your mission-critical wireless networks 
				</ul>
				<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Two_Way_Radio_Service_&_Repairs') }}" role="button">Contact Us</a></p>
            </div>
        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
