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
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row about">
            <div class="col-md-12">
                <h1 class="text-center header1">RAJ Technologies Inc.</h1>
            </div>
            <div class="col-xs-12 col-md-4">
                <img class="img-responsive" src="{{ asset('Assets/img/RAJ-White.jpg') }}" alt="RAJ Technologies Inc.">
            </div>
            <div class="col-xs-12 col-md-8">
                <p>Our Company is a type of business or industry that focuses on the provision of IT Services and Solutions, Sale and Service of Communications Equipment. Of late, it has ventured into providing  Document Imaging services as it partners with Canon Philippines.</p>
                <p>We aim to provide INTEGRATED IT Solutions. Continued growth has given us the opportunity to expand our interests and persistently improve our services.</p>
            </div>
        </div>
        <div class="row about">
            <div class="col-xs-12 col-md-12 mission">
                <h4>Our Mission</h4>
                <p>To constantly strive to meet or surpass our customers' needs and expectations of services and to stay ahead of the competition by earning our customers' confidence and enthusiasm through continuous improvement driven by the integrity, teamwork, innovation and passion for excellence.</p>
            </div>
        </div>
        <div class="row about">
            <div class="col-xs-12 col-md-12 vision">
                <h4>Our Vision</h4>
                <p>To provide top quality and effective technological outsourcing solutions and services through skilled, proficient and committed employees.</p>
            </div>
        </div>
        <div class="row about">
            <div class="col-xs-12 col-md-12 responsibility">
                <h4>Corporate Responsibility</h4>
                <p>Our company will always be directed by the principles of Integrity and Discipline. This is the culture that we expect all our employees to grow into, live in and grow out from..                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Authorize Partners -->
		
        <div class="row">
            <div class="hr-row-line"></div>
            <div class="col-lg-12">
                <h2 class="text-center header1">Authorized Partners</h2>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ asset('Assets/img/Canon-logo.jpg') }}" alt="Canon">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ asset('Assets/img/Cignus-logo.jpg') }}" alt="Cignus">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ asset('Assets/img/Icom-logo.jpg') }}" alt="Icom">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ asset('Assets/img/Kenwood-logo.jpg') }}" alt="Kenwood">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ asset('Assets/img/Motorola-logo.jpg') }}" alt="Motorola">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="{{ asset('Assets/img/Fuji-logo.jpg') }}" alt="Fuji">
            </div>
        </div>
		
        <!-- /.row -->

    </div>
    <!-- /.container -->
@include('Pages.footer-snippet')

</body>

</html>
