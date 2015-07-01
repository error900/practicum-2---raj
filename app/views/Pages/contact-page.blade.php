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
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row" style="position: relative;">
            <!-- Map Column -->
            <div class="col-md-12">
                <h3 class="text-center header1">Contact Details</h3>
                <!-- Google Map -->
                <div id="map-canvas"></div>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-12 contact-details">
                <p><i class="fa fa-map-marker fa-2x pull-left"></i>
					2/F RAJ Bldg. #7, Labsan St., Kayang Extn. Brgy., Baguio City, Benguet, Philippines.</p>
                <p><i class="fa fa-phone fa-2x pull-left"></i> 
                     (6374) 619 - 2349</p>
                <p><i class="fa fa-envelope-o fa-2x pull-left"></i> 
                    <a name="link">inquiry@rajtechinc.com</a></p>
                <p><i class="fa fa-clock-o fa-2x pull-left"></i> 
                    Monday - Friday: 9:00 AM to 5:30 PM</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <div class="row">
	        <div class="col-xs-12 col-md-12">
	        	<h3 class="text-center header1">Send us a Message</h3>
	        </div>
            <div class="contact-form col-xs-12 col-md-4 col-md-offset-1">
					

					@if (Session::has('message-contact'))
					<div class="alert alert-success">{{ Session::get('message-contact') }}</div>	
					@endif
					
					{{ Form::open(array('route' => 'contact_inquire')) }}
					
					<div class="form-group">
						{{ Form::label('name', 'Name :') }}@if ($errors->has('name')) <span class="alert alert-danger">{{ $errors->first('name') }}</span> @endif	
						{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'full name')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('email', 'Email :') }}@if ($errors->has('email')) <span class="alert alert-danger">{{ $errors->first('email') }}</span> @endif	
						{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'email address')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('subject', 'Subject :') }}@if ($errors->has('subject')) <span class="alert alert-danger">{{ $errors->first('subject') }}</span> @endif	
						{{ Form::text('subject', Input::old('subject'), array('class' => 'form-control', 'placeholder' => 'subject')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('message', 'Message :') }}@if ($errors->has('message')) <span class="alert alert-danger">{{ $errors->first('message') }}</span> @endif	
						{{ Form::textarea('message', Input::old('message'), array('class' => 'textarea', 'maxlength' => '1000', 'placeholder' => 'message')) }}
					</div>
					
					<center><div class="textarea_feedback"></div></center>
					
					<div class="form-group">
						{{ Form::label('recaptcha_response_field', 'ReCaptcha :') }}@if ($errors->has('recaptcha_response_field')) <span class="alert alert-danger">{{ $errors->first('recaptcha_response_field') }}</span> @endif
						{{ Form::recaptcha(array('theme' => 'clean', 'use_ssl' => true)) }}
					</div>
					
					{{ Form::submit('Send', array('class' => 'btn btn-primary')) }}

					{{ Form::close() }}
            </div>
        </div>
        <!-- /.row -->
    </div>

@include('Pages.footer-snippet')

<script src="{{ asset('Assets/js/google-map.js') }}"></script>

</body>

</html>
