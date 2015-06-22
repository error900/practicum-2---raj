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
                    <li class="active">Imaging Solutions</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row service-page">
            <div class="col-lg-12">
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
            </div>
        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
