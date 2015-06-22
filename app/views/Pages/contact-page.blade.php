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
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Google Map -->
                <div id="map-canvas"></div>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3 class="custom-header">Contact Details</h3><hr />
                <p><i style="color: #f75c50;" class="fa fa-map-marker"></i>
					<abbr title="Address">A</abbr> : 2/F RAJ Bldg. #7, Labsan St., Kayang Extn. Brgy.,<br />
					Baguio City, Benguet, Philippines.</p>
                <p><i style="color: #018bd3;" class="fa fa-phone"></i> 
                    <abbr title="Phone Number">P</abbr> : (6374) 619 - 2349</p>
                <p><i style="color: #00827d;" class="fa fa-envelope-o"></i> 
                    <abbr title="Email Address">E</abbr> : <a name="link">inquiry@rajtechinc.com</a></p>
                <p><i style="color: #314e6c;" class="fa fa-clock-o"></i> 
                    <abbr title="Shop Hours">H</abbr> : Monday - Friday: 9:00 AM to 5:30 PM</p>
				<br />
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <div class="row">
            <div class="contact-form col-md-8">
                <h3 class="page-header">Send us a Message</h3>
                
					@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
					@endif

					@if (Session::has('message-contact'))
					<div class="alert alert-success">{{ Session::get('message-contact') }}</div>
					@endif
					
					{{ Form::open(array('route' => 'contact_inquire')) }}
					
					<div class="form-group">
						{{ Form::label('name', 'Name :') }}@if ($errors->has('name')) <span class="alert alert-danger">{{ $errors->first('name') }}</span> @endif	<br />
						{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'your name . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('email', 'Email :') }}@if ($errors->has('email')) <span class="alert alert-danger">{{ $errors->first('email') }}</span> @endif	<br />
						{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'your email . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('subject', 'Subject :') }}@if ($errors->has('subject')) <span class="alert alert-danger">{{ $errors->first('subject') }}</span> @endif	<br />
						{{ Form::text('subject', Input::old('subject'), array('class' => 'form-control', 'placeholder' => 'your subject . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('message', 'Message :') }}@if ($errors->has('message')) <span class="alert alert-danger">{{ $errors->first('message') }}</span> @endif	<br />
						{{ Form::textarea('message', Input::old('message'), array('class' => 'textarea', 'maxlength' => '1000', 'placeholder' => 'your message . . .')) }}
					</div>
					
					<center><div class="textarea_feedback"></div></center>
					
					<div class="form-group">
						{{ Form::label('recaptcha_response_field', 'ReCaptcha :') }}@if ($errors->has('recaptcha_response_field')) <span class="alert alert-danger">{{ $errors->first('recaptcha_response_field') }}</span> @endif
						{{ Form::recaptcha(array('theme' => 'clean', 'use_ssl' => true)) }}
					</div>
					<br />
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
