            <!-- Footer -->
    <div class="container-fluid">
        <footer>
            <div class="row">
                <div class="col-md-9">
                    <ul class="nav navbar-nav nav-footer text-center">
                        <li><a href="{{ URL::to('home') }}">Home</a></li>
                        <div class="hr-nav-line hidden-lg hidden-md"></div>
                        <li><a href="{{ URL::to('about-us') }}">About</a></li>
                        <div class="hr-nav-line hidden-lg hidden-md"></div>
                        <li><a href="{{ URL::to('services-page') }}">Services</a></li>
                        <div class="hr-nav-line hidden-lg hidden-md"></div>
                        <li><a href="{{ URL::to('contact-page') }}">Contact</a></li>
                        <div class="hr-nav-line hidden-lg hidden-md"></div>
                        <li><a href="{{ URL::to('career-page') }}">Careers</a></li>
                        <li><a href="{{ URL::to('dashboard') }}" class="btn btn-default login-btn">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="copyright">Copyright &copy; RAJ. Technologies Inc. 2015</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('Assets/js/jquery-1.11.2.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>

	<!-- Custom JavaScript -->
	<script src="{{ asset('Assets/js/bootbox.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
	<script src="{{ asset('Assets/js/scripts.js') }}"></script>
	