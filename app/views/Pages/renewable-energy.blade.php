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
                    <li class="active">Renewable Energy</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h4 class="services-heading">Delivering Solar Power Projects</h4>
                <p class="services-definition">Enough solar energy reaches the earth's surface every hour to power the world for a year. Solar power is an essential solution to the world's long term energy needs. The potential is huge and largely untapped. Solar technologies are an effective and increasingly economic choice as conventional energy prices rise.<br /><br />
				 - A proven, low maintenance technology<br />
				 - An inexhaustable resource with predictable financial returns<br />
				 - Flexible and quickly installed on buildings and land<br /><br />
				We are an experienced partner, we have the capabilities to develop, construct, operate and optimise the operation of grid connected solar farms utilising Photovoltaic power (PV).<br /><br />
				We can provide feasibility, detailed design, project management, through to construction, finance, ownership, asset sale or continued energy generation and carbon saving.<br /><br />
				We provide an extensive and tailored service for organisations looking to undertake a solar project. We can assist in either an advisory or  project management capacity as solar technology and our service can be scaled for commercial or utility scale.<br /><br />
				<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Solar_Power_Services') }}" role="button">Contact Us</a></p>
            </div>
        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
