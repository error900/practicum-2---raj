<?php
if (Sentry::check())
    {
        $user = Sentry::getUser();
        if ($user->isSuperUser())
        {
?>
            <!-- app/views/Products/index.blade.php -->

            <!DOCTYPE html>
            <html>
            <head>
                <title>@yield('title')</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="{{ asset('Assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
                <link rel="stylesheet" href="{{ asset('Assets/css/bootstrap.min.css') }}" />
                <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/toggle-switch.css') }}" />
                <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/base.css') }}" media="all" />
                <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/styles.css') }}" media="all" />
                <link rel="stylesheet" href="{{ asset('packages/mrjuliuss/syntara/assets/css/dashboard.css') }}" media="all" />
                <link rel="shortcut icon" href="{{ asset('Assets/ico/favicon.ico') }}">
                {{ HTML::script('Assets/js/angular.min.js'); }}
                {{ HTML::script('Assets/js/ui-bootstrap-tpls-0.12.0.min.js'); }}
                {{ HTML::script('Assets/js/angular-snippet.js'); }}
                
            </head>
            <body>
                <nav class="navbar main-bar navbar-inverse">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="{{ URL::to('dashboard') }}"><i class="fa fa-tachometer"></i> Dashboard</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('Products') }}"><i class="glyphicon glyphicon-shopping-cart"></i> <span>Products</span></a></li>
                    <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-plus"></i> <span>Create</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::to('Products/create') }}"><span>Product</span></a></li>
                            <li><a href="{{ URL::to('Products/createSCS') }}"><span>Supplier / Category / SubCategory</span></a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </nav>

                    

                @yield('content')
                <script src="{{ asset('Assets/js/jquery-1.11.2.min.js') }}"></script>
                <script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('Assets/js/bootbox.min.js') }}"></script>
                <script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/base.js') }}"></script>
                <script src="{{ asset('Assets/js/scripts.js') }}"></script>
            </body>
            </html>
<?php
        }
        else {
            header('Location: dashboard');
            die();
        }
    }
    else {
        header('Location: tachometer');
        die();
    }
?>