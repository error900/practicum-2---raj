@if (Session::has('success'))
	<div class="alert alert-success">
		{{ Session::get('success') }}
	</div>
@endif
@if (Session::has('fail'))
	<div class="alert alert-danger">
		{{ Session::get('fail') }}
	</div>
@endif
<div class="user-avatar">
	<div class="user-photo{{ $errors->has('image') ? ' has-error' : ''}}">
		<img src="{{ asset('Assets/img/profile/' . $user->image) }}" alt="profile picture">
		<div class="upload">
			{{ Form::open(array('route' => array('postPhoto', $user->id), 'files' => true, 'method' => 'post', 'id' => 'form')) }}
				{{ Form::file('image', array('class' => 'form-control','id' => 'file')) }}
			{{ Form::close() }}
			
		</div>
	</div>
	<?php 
		$group_json = $user->getGroups();
		$group = json_decode($group_json, true);
	?>
	<div class="user-basic-info">
		<p class="user-name"><span>{{ $user->last_name  }}</span>, {{ $user->first_name }}</p>
		<p class="user-email">{{ $user->email }}</p>
		<!-- <p class="user-group">{{ json_encode($user->getGroups()) }}</p> -->
		<p class="user-group">
			<?php 
				foreach ($group as $key => $value) {
					echo "<p>" .$value['name'] . "</p>";
				}
			?>
		</p>
		<div>
			@if ($errors->has())
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
						{{ $error }}<br>        
					@endforeach
				</div>
			@endif
			
		</div>
	</div>
</div>

<script type="text/javascript">
	document.getElementById("file").onchange = function() {
	    document.getElementById("form").submit();
	}
</script>