<div class="navbar main-bar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('home') }}" target="_new">
            {{ (!empty($siteName)) ? $siteName : "Syntara"}}

            <div class="visible-sm"><img class="ajax-loader ajax-loader-sm" src="{{ asset('packages/mrjuliuss/syntara/assets/img/ajax-load.gif') }}" style="float: right;"/></div>
        </a>
    </div>

    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li class=""><a href="{{ URL::route('indexDashboard') }}"><i class="fa fa-tachometer"></i> <span>{{ trans('syntara::navigation.index') }}</span></a></li>
            @if (Sentry::check())
                @if($currentUser->hasAccess(Config::get('syntara::permissions.listUsers')) || $currentUser->hasAccess(Config::get('syntara::permissions.listGroups')))
                <li class="dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-users"></i> <span>{{ trans('syntara::navigation.users') }}</span><b class="caret"></b></a>
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
                    </ul>
                </li>
                @endif
				@if($currentUser->isSuperUser())
					<li class=""><a href="{{ URL::route('Products.index') }}"><i class="fa fa-shopping-cart"></i> <span>Products</span></a></li>
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
    </div>
</div>
