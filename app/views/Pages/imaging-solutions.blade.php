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
                    <li class="active">Imaging Solutions</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <h4 class="services-heading">Imaging Solutions</h4>
                <p class="services-definition">Imaging Solutions mean custom office equipment packages to address your specific wants and needs, at an affordable price. By combining quality digital printer, copier, scanner and fax hardware, with our excellent experience and high standards in customer support.<br /><br />
				<ul>
					<li>Digital copier and printer solutions</li>
					 - Canon printers and copiers
					 - Hewlett Packard(HP) printers and copiers
					 - Fuji printers and copiers
					<li>Fax solutions</li>
					 - Canon Fax
					 - Hewlett Packard(HP) Fax
					 - Fuji Fax
					<li>Color copier and color printer solutions</li>
					 - Canon color copiers, color printers
					 - Hewlett Packard(HP) color copiers, color printers
					 - Fuji color copiers, color printers
					<li>Multi-function systems</li>
					<li>Desktop laser printer solutions</li>
					 - Canon printers and copiers
					 - Hewlett Packard(HP) printers and copiers
					 - Fuji printers and copiers
					<li>Scan directly to PC or E-mail</li>
				</ul>
				<a class="btn btn-default btn-xs" href="{{ URL::to('service-get-quote/Imaging_Solutions') }}" role="button">Contact Us</a></p>
            </div>
        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
