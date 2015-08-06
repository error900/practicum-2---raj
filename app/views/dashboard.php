<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="dashboard">
			
			<div ng-app="app">

				<div ng-controller="tabbed_pages">

					<tabset>

						<?php
						$user = Sentry::getUser();
						if ($user->isSuperUser())
							{
						?>

								<tab>

									<tab-heading>
										<span>I/O</span>
									</tab-heading>

									<div class="dashboard-inner">
										@if ($errors->has())
											<div class="alert alert-danger">
												@foreach ($errors->all() as $error)
													{{ $error }}<br>        
												@endforeach
											</div>
										@endif
										
										@if (Session::has('success'))
											<div class="alert-box success">
												<h2>{{ Session::get('success') }}</h2>
											</div>
										@endif
										@if (Session::has('fail'))
											<div class="alert-box fail">
												<h2>{{ Session::get('fail') }}</h2>
											</div>
										@endif
									</div>
								</tab>

								<tab>

								<tab-heading>
									<span>Sample Tab 2</span>
								</tab-heading>

								<div class="dashboard-inner">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
								</div>
								
								</tab>

								<tab>

								<tab-heading>
									<span>Sample Tab 3</span>
								</tab-heading>

								<div class="dashboard-inner">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
								</div>
								
								</tab>

						<?php
							}
						?>

					</tabset>

				</div>

			</div>
			
		</div>
	</div>
</div>