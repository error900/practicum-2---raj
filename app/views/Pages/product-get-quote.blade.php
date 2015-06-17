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
					<li><a href="{{ URL::to('product-compare') }}">Product Compare List</a></li>
                    <li class="active">Request a Quote</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Products Get a Quote Row -->
        <div class="row">
			<div class="col-md-4 col-md-offset-1">
			
					<h4 class="custom-header">Listed Product(s)</h4>
					<ol>
					@foreach ($content as $row)
						<li>{{ $row->product->brand }} - {{ $row->product->model }}		({{ $row->qty }})</li>
					@endforeach
					</ol>
				
			</div>
			<div class="contact-form col-md-6">
                <h3 class="custom-header">Fill out the details below to request a quote.</h3><hr />
                
					@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
					@endif

					{{ Form::open(array('route' => 'get_quote')) }}
					
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

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
