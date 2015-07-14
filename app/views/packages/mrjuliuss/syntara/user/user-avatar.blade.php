<div class="user-avatar">
	<div class="user-photo">
		<img src="../../../public/Assets/img/profile/profile_avatar.jpg">
	</div>
	<?php $group_json = $user->getGroups();
	$group = json_decode($group_json, true);
	?>
	<div class="user-basic-info">
		<p class="user-name"><span>{{ $user->last_name  }}</span>, {{ $user->first_name }}</p>
		<p class="user-email">{{ $user->email }}</p>
		<!-- <p class="user-group">{{ json_encode($user->getGroups()) }}</p> -->
		<p class="user-group">
			<?php foreach ($group as $key => $value) {
				echo "<p>" .$value['name'] . "</p>";
			}
			?>
		</p>
	</div>
</div>