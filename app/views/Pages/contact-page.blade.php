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
                    <li><a href="{{ URL::to('home') }}">
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div> -->
        <!-- /.row -->
        @if (Session::has('message-contact'))
		<div class="alert alert-success">{{ Session::get('message-contact') }}</div>
		@endif			
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-12 map">
                <!-- Google Map -->
                <div id="map-canvas"></div>
            </div>
        </div>
        <!-- /.row -->
        <div class="col-md-12 hr-row-line"></div>
        <!-- Contact Form -->
        <div class="row contact-row">
       		<!-- Contact Details Column -->
            <div class="col-md-5 col-md-offset-1 contact">
                <div class="contact-details">
					<p>
						2/F RAJ Bldg. #7, Labsan St., Kayang Extn. Brgy., Baguio City, Benguet, Philippines.
					</p>
					<p>
						(6374) 619 - 2349
					</p>
					<p>
						inquiry@rajtechinc.com
					</p>
					<p>
						Monday - Friday: 8:00 AM to 5:30 PM
					</p>
                </div>
            </div>
            <div class="contact-form col-md-5">
					@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
					@endif

										
					{{ Form::open(array('action' => 'ContactController@contact_inquire')) }}
					
					<div class="form-group">
						@if ($errors->has('name')) <span class="alert alert-danger">{{ $errors->first('name') }}</span> @endif	
						{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Full Name')) }}
					</div>
					
					<div class="form-group">
						@if ($errors->has('email')) <span class="alert alert-danger">{{ $errors->first('email') }}</span> @endif	
						{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Email Address')) }}
					</div>
					
					<div class="form-group">
						@if ($errors->has('subject')) <span class="alert alert-danger">{{ $errors->first('subject') }}</span> @endif	
						{{ Form::text('subject', Input::old('subject'), array('class' => 'form-control', 'placeholder' => 'Subject')) }}
					</div>
					
					<div class="form-group">
						@if ($errors->has('message')) <span class="alert alert-danger">{{ $errors->first('message') }}</span> @endif	
						{{ Form::textarea('message', Input::old('message'), array('class' => 'textarea form-control', 'rows' => '6', 'maxlength' => '1000', 'placeholder' => 'Message')) }}
					</div>
					
					<center><div class="textarea_feedback"></div></center>
					
					<div class="form-group">
						{{ Form::label('recaptcha_response_field', 'ReCaptcha :') }}@if ($errors->has('recaptcha_response_field')) <span class="alert alert-danger">{{ $errors->first('recaptcha_response_field') }}</span> @endif
						{{ Form::recaptcha(array('theme' => 'white', 'use_ssl' => true)) }}
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
