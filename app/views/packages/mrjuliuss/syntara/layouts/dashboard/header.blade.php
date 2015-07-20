<nav class="navbar main-bar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('home') }}" target="_new">
                {{ (!empty($siteName)) ? $siteName : "Syntara"}}
                <div class="visible-sm"><img class="ajax-loader ajax-loader-sm" src="{{ asset('packages/mrjuliuss/syntara/assets/img/ajax-load.gif') }}" style="float: right;"/></div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL::route('indexDashboard') }}"><i class="fa fa-tachometer"></i> <span>{{ trans('syntara::navigation.index') }}</span></a></li>
                @if (Sentry::check())
                    @if($currentUser->hasAccess(Config::get('syntara::permissions.listUsers')) || $currentUser->hasAccess(Config::get('syntara::permissions.listGroups')))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> <span>{{ trans('syntara::navigation.users') }}</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @if($currentUser->hasAccess(Config::get('syntara::permissions.listUsers')))
                            <li><a href="{{ URL::route('listUsers') }}">{{ trans('syntara::navigation.users') }}</a></li>
                            @endif

                            @if($currentUser->hasAccess(Config::get('syntara::permissions.listGroups')))
                            <li><a href="{{ URL::route('listGroups') }}">{{ trans('syntara::navigation.groups') }}</a></li>
                            @endif
                            @if($currentUser->hasAccess(Config::get('syntara::permissions.listPermissions')))
                            <li><a href="{{ URL::route('listPermissions') }}">{{ trans('syntara::navigation.permissions') }}</a></li>
                            @endif
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    @endif
                    @if($currentUser->isSuperUser())
                    <li class=""><a href="{{ URL::route('Products.index') }}"><i class="fa fa-shopping-cart"></i> <span>Products</span></a></li>
<!--                     <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-shoppping-cart"></i> <span>Products</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::route('Products.index') }}"><span>View Products</span></a></li>
                            <li><a href="{{ URL::to('Products/create') }}"><span>Register Product</span></a></li>
                            <li><a href="{{ URL::to('Products/createSCS') }}"><span>Register Supplier / Category / SubCategory</span></a></li>
                        </ul>
                    </li> -->
                    @endif
                {{ (!empty($navPages)) ? $navPages : '' }}
                @endif
            </ul>
            @if(Sentry::check())
                <ul class="nav navbar-nav navbar-{{ (Config::get('syntara::config.direction') === 'rtl') ? 'left' : 'right' }}">
                    <li class="hidden-sm"><img class="ajax-loader ajax-loader-lg" src="{{ asset('packages/mrjuliuss/syntara/assets/img/ajax-load.gif') }}" style="float: right;"/></li>
                    {{ (!empty($navPagesRight)) ? $navPagesRight : '' }}
                    <li><a href="{{ URL::route('showUser', Sentry::getUser()->id ) }}"><i class="fa fa-user"></i><span class="text">{{ Sentry::getUser()->username }}</span></a></li>
                    <li><a title="Logout" href="{{ URL::route('logout') }}"><i class="fa fa-sign-out"></i> <span class="text">{{ trans('syntara::navigation.logout') }}</span></a></li>
                </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>