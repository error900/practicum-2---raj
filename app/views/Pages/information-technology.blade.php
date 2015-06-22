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
                    <li class="active">Information Technology</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row service-page">
            <div class="col-lg-12">
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
            </div>
        </div>
    </div>  
@include('Pages.footer-snippet')

</body>

</html>
