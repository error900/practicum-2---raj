<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')

    <!-- Page Content -->
    <div class="container-fluid bg-plain">

        <!-- Page Heading/Breadcrumbs -->
<!--         <div class="row breadcrumb-nav">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('home') }}"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div> -->
        <!-- /.row -->

		@if (Session::has('message-service-quote'))
		<div class="alert alert-success">{{ Session::get('message-service-quote') }}</div>
		@endif
		
        <!-- Service Tabs -->
        <div class="row service-page">
        	<div class="col-md-12">
                <h1 class="text-center header1">Products &amp; Services</h1>
            </div>
            <div class="col-lg-12">
                <ul onclick="tabScrollDown()" id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-arrow-right"></i>Information Technology</a>
                    </li>
					<li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-arrow-right"></i>Imaging Solutions</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-arrow-right"></i>2-Way Radio Communication</a>
                    </li>
					<li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-arrow-right"></i>Security & Surveillance</a>
                    </li>
                    <li class=""><a href="#service-five" data-toggle="tab"><i class="fa fa-arrow-right"></i>Renewable Energy</a>
                    </li>
                </ul>
                <div class="hr-row-line hidden-lg hidden-md"></div>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4 class="services-heading">Software Development & Support</h4>
                        <p class="services-definition">The Support Tools Team supports and develops IT and Manufacturing applications for internal IT teams and business customers for the clients of RAJ. These applications include hardware & software asset management, ticketing systems, change management, knowledge base, dashboards, and various web applications. - <a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Software_Development_&_Support') }}" role="button">Contact Us</a></p>
						<h4 class="services-heading">Mainframe Support</h4>
						<p class="services-definition">Mainframe Support duties provide assistance to application support teams and programmers, troubleshoot and resolved issues by following documented processes related to Mainframe, Windows, and Unix/Linux based on monitoring. This monitoring includes Mainframe and Distributed environment monitoring via monitoring tools, tickets and/or email messages.</p>
						<p class="services-definition">It is responsible for documenting and escalating tickets/abend as needed, Interacting with customers via the phone and email and also updating problem documentation, process and support documentation as needed. - <a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Mainframe_Support') }}" role="button">Contact Us</a></p>
						<h4 class="services-heading">Server Support</h4>
						<p class="services-definition">Major duties & responsibilities includes support for Windows/Unix Server Support for applying patches, performing regular maintenance checks to ensure health of the servers, responsible for performing tasks such as granting access to server shares, adjusting share quota, and other software related requests of the similar nature. And also responsible for troubleshooting of server related concerns, hardware inventory, warranty and RMA (including CMARs).</p>
						<p class="services-definition">It is responsible in DataCenter Support for monitoring DataCenter equipment and reporting weekly about any alarms/concerns while managing back-up media - ingress, egress and shipping of DR tapes and maintaining DataCenter 5S. And also responsible in Executive Support for handling IT-related concerns of all client's Directors, as well as all other Executive visitor's of the client and supporting important events such as reviews and audits. - <a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Server_Support') }}" role="button">Contact Us</a></p>
						<h4 class="services-heading">Network Security Support</h4>
						<p class="services-definition">It is responsible for providing support in network security on DataCenter's by maintaining updated Virus and Malware protection for detecting and preventing Denial of Service attacks from outside sources. And also responsible for giving assistance to Network Administrators. - <a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Network_Security_Support') }}" role="button">Contact Us</a></p>
						<div class="hr-row-line hidden-lg hidden-md"></div>
                    </div>
					<div class="tab-pane fade" id="service-two">
                        <h4 class="services-heading">Imaging Solutions</h4>
                        <p class="services-definition">Imaging Solutions mean custom office equipment packages to address your specific wants and needs, at an affordable price. By combining quality digital printer, copier, scanner and fax hardware, with our excellent experience and high standards in customer support.<br /><br />
						<ul class="service-list">
							<li>
								<h4>Digital copier and printer solutions</h4>
								<p>Canon printers and copiers</p>
								<p>Hewlett Packard(HP) printers and copiers</p>
								<p>Fuji printers and copiers</p>
							</li>
							<li>
								<h4>Fax solutions</h4>
								<p>Canon Fax</p>
								<p>Hewlett Packard(HP) Fax</p>
								<p>Fuji Fax</p>
							</li>
							<li>
								<h4>Color copier and color printer solutions</h4>
								<p>Canon color copiers, color printers</p>
								<p>Hewlett Packard(HP) color copiers, color printers</p>
								<p>Fuji color copiers, color printers</p>
							</li>
							<li>
								<h4>Multi-function systems</h4>
							</li>
							<li>
								<h4>Desktop laser printer solutions</h4>
								<p>Canon printers and copiers</p>
								<p>Hewlett Packard(HP) printers and copiers</p>
								<p>Fuji printers and copiers</p>
							</li>
							<li>
								<h4>Scan directly to PC or E-mail</h4>
							</li>
						</ul>
						<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Imaging_Solutions') }}" role="button">Contact Us</a></p>
						<div class="hr-row-line hidden-lg hidden-md"></div>
                    </div>
                    <div class="tab-pane fade" id="service-three">
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
						<div class="hr-row-line hidden-lg hidden-md"></div>
                    </div>
					<div class="tab-pane fade" id="service-four">
                        <h4 class="services-heading">Security & Surveillance</h4>
                        <p class="services-definition">Whether you require a simple CCTV system or comprehensive integrated system, We are your resource for end-to-end security system solutions. Our expertise includes access control, video surveillance, integrated physical/logical security and intrusion alarms. Our strong experience with 100 percent IP-based systems that lower cost and improve network flexibility and scalability.<br /><br />
						<ul class="service-list">
							<li>
								<h4>Remote monitoring</h4>
							</li>
							<li>
								<h4>Security design and consulting</h4>
							</li>
							<li>
								<h4>Product management through product acquisition and equipment install</h4>
							</li>
							<li>
								<h4>Support and maintenance with help desk and training</h4>
							</li>
						</ul>
						<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Security_&_Surveillance') }}" role="button">Contact Us</a></p>
                    	<div class="hr-row-line hidden-lg hidden-md"></div>
                    </div>
                    <div class="tab-pane fade" id="service-five">
                        <h4 class="services-heading">Delivering Solar Power Projects</h4>
                        <p class="services-definition">Enough solar energy reaches the earth's surface every hour to power the world for a year. Solar power is an essential solution to the world's long term energy needs. The potential is huge and largely untapped. Solar technologies are an effective and increasingly economic choice as conventional energy prices rise.<br /><br />
						<ul class="service-list">
							<li>
								<p>A proven, low maintenance technology</p>
								<p>An inexhaustable resource with predictable financial returns</p>
								<p>Flexible and quickly installed on buildings and land</p>
							</li>
						</ul>
						<p class="services-definition">We are an experienced partner, we have the capabilities to develop, construct, operate and optimise the operation of grid connected solar farms utilising Photovoltaic power (PV).</p>
						<p class="services-definition">We can provide feasibility, detailed design, project management, through to construction, finance, ownership, asset sale or continued energy generation and carbon saving.</p>
						<p class="services-definition">We provide an extensive and tailored service for organisations looking to undertake a solar project. We can assist in either an advisory or  project management capacity as solar technology and our service can be scaled for commercial or utility scale.</p>
						<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Solar_Power_Services') }}" role="button">Contact Us</a></p>
                    	<div class="hr-row-line hidden-lg hidden-md"></div>
                    </div>
                </div>

            </div>
		</div>	<!-- /.container -->
    </div>
@include('Pages.footer-snippet')

	<script>
		function tabScrollDown() {
			 window.scrollTo(0, 80);
		}
	</script>

</body>

</html>
