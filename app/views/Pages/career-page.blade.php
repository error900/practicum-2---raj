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
					<li class="active">Career</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <div class="col-md-5 col-md-offset-1">
                <p>We are in need of	:</p>
				<p>
				<strong>IT Specialist</strong><br />
				-	Bachelor of Science in Information Technology Graduate<br />
				-	Technical knowledge in navigating hardware, software, networking, operating systems and protocols<br />
				-	Good oral and written communication skills<br />
				-	Team player<br />
				-	Can work with minimum supervision<br />
				-	Amenable to work on shifting schedules, holidays and weekends<br />
				</p>
				<br />
				<p>*for pooling only*</p>
            </div>
			<!-- Contact Form -->
            <div class="contact-form col-md-6">
                <h3 class="custom-header">Fill in the details below and submit your Résumé</h3><hr />
                
					@if ($errors->has())
						<div class="alert alert-danger">
							@foreach ($errors->all() as $error)
								{{ $error }}<br>        
							@endforeach
						</div>
					@endif

					@if (Session::has('message-career'))
					<div class="alert alert-success">{{ Session::get('message-career') }}</div>
					@endif
					
					{{ Form::open(array('action' => 'ContactController@career_inquire', 'files' => true)) }}
					
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
						{{ Form::label('subject', 'Subject :') }}@if ($errors->has('subject')) <span class="alert alert-danger">{{ $errors->first('subject') }}</span> @endif	<br />
						{{ Form::text('subject', Input::old('subject'), array('class' => 'form-control', 'placeholder' => 'your subject . . .')) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('message', 'Message :') }}@if ($errors->has('message')) <span class="alert alert-danger">{{ $errors->first('message') }}</span> @endif	<br />
						{{ Form::textarea('message', Input::old('message'), array('class' => 'textarea', 'maxlength' => '1000', 'placeholder' => 'your message . . .')) }}
					</div>
					
					<center><div class="textarea_feedback"></div></center>
									
					<div class="form-group">
						{{ Form::label('resume', 'Attach your Résumé') }}
						{{ Form::file('resume', array('class' => 'form-control')) }}
						@if ($errors->has('resume')) <p class="alert alert-danger">{{ $errors->first('resume') }}</p> @endif
					</div>

					<div class="form-group">
						{{ Form::label('recaptcha_response_field', 'ReCaptcha :') }}@if ($errors->has('recaptcha_response_field')) <span class="alert alert-danger">{{ $errors->first('recaptcha_response_field') }}</span> @endif
						{{ Form::recaptcha(array('theme' => 'clean', 'use_ssl' => true)) }}
					</div>
					<br />
					{{ Form::submit('Send', array('class' => 'btn btn-primary')) }}

					{{ Form::close() }}
            </div>
        <!-- /.row -->
        </div>

        <hr>

@include('Pages.footer-snippet')

</body>

</html>
