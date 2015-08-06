<!DOCTYPE html>
<html lang="en">

@include('Pages.header-snippet')

<body>

@include('Pages.header-nav-snippet')

    <!-- Page Content -->
    <div class="container-fluid">

        <!-- Page Heading/Breadcrumbs -->
<!--         <div class="row breadcrumb-nav">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ URL::to('home') }}">Home</a>
                    </li>
                    <li class="active">Request Service Quote</li>
                </ol>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- Services Get a Quote Row -->
        <div class="row">
        	<div class="col-md-12">
                <h1 class="text-center header1">Requested service - "{{ $Service_Spaces }}"</h1>
            </div>
			<div class="col-xs-12 col-md-4 col-md-offset-4 contact-form">
                
					@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
					@endif

					{{ Form::open(array('url' => 'service_get_quote/' . $Service)) }}
					
					{{ Form::hidden('service', $Service_Spaces) }}
					
					<div class="form-group">
						{{ Form::label('name', 'Name :') }}@if ($errors->has('name')) <span class="alert alert-danger">{{ $errors->first('name') }}</span> @endif	<br />
						{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'your name . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('email', 'Email :') }}@if ($errors->has('email')) <span class="alert alert-danger">{{ $errors->first('email') }}</span> @endif	<br />
						{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'your email . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('contact_number', 'Contact # :') }}@if ($errors->has('contact_number')) <span class="alert alert-danger">{{ $errors->first('contact_number') }}</span> @endif	<br />
						{{ Form::text('contact_number', Input::old('contact_number'), array('class' => 'form-control', 'placeholder' => 'your contact # . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('address', 'Address :') }}@if ($errors->has('address')) <span class="alert alert-danger">{{ $errors->first('address') }}</span> @endif	<br />
						{{ Form::text('address', Input::old('address'), array('class' => 'form-control', 'placeholder' => 'your address . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('message', 'Message :') }}@if ($errors->has('message')) <span class="alert alert-danger">{{ $errors->first('message') }}</span> @endif	<br />
						{{ Form::textarea('message', Input::old('message'), array('class' => 'textarea', 'maxlength' => '1000', 'placeholder' => 'your message . . .')) }}
					</div>
					
					<center><div class="textarea_feedback"></div></center>
					
					{{-- <div class="form-group">
						{{ Form::label('recaptcha_response_field', 'ReCaptcha :') }}@if ($errors->has('recaptcha_response_field')) <span class="alert alert-danger">{{ $errors->first('recaptcha_response_field') }}</span> @endif
						{{ Form::recaptcha(array('theme' => 'clean', 'use_ssl' => true)) }}
					</div> --}}
					<div class="g-recaptcha" data-sitekey="6Lcdcf8SAAAAAFYGXXKG_VyPS1GYRUNYbQy9bDGv"></div>

					<br />
					{{ Form::submit('Send', array('class' => 'btn btn-primary')) }}

					{{ Form::close() }}
            </div>
        </div>
        <!-- /.row -->
   </div>
@include('Pages.footer-snippet')

</body>

</html>
