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
                    <li class="active">Security & Surveillance</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h4 class="services-heading">Security & Surveillance</h4>
                <p class="services-definition">Whether you require a simple CCTV system or comprehensive integrated system, We are your resource for end-to-end security system solutions. Our expertise includes access control, video surveillance, integrated physical/logical security and intrusion alarms. Our strong experience with 100 percent IP-based systems that lower cost and improve network flexibility and scalability.<br /><br />
				<ul>
					<li>Remote monitoring</li>
					<li>Security design and consulting</li>
					<li>Product management through product acquisition and equipment install</li>
					<li>Support and maintenance with help desk and training</li>
				</ul>
				<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Security_&_Surveillance') }}" role="button">Contact Us</a></p>
            </div>
        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
