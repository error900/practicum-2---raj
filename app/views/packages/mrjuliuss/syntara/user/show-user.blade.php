@extends(Config::get('syntara::views.master'))

@section('content')

<script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/user.js') }}"></script>
<div class="container-fluid" id="main-container">
    <div class="row">
        <div class="col-xs-12 col-md-3 left-container">
            <section class="module">
                @include('syntara::user.user-avatar')
                <div class="module-head">
                    <b class="bold">{{ trans('syntara::users.information') }}</b>
                    <div class="hr-line"></div>
                </div>
                <div class="module-body ajax-content">
                    @include('syntara::user.user-informations')
                </div>
            </section>
        </div>
        <div class="col-xs-12 col-md-9 center-container">
            <section class="module">
                <div class="module-head">
                    <b class="bold">ID&#35;: {{ $user->getId() }} - <span>{{ $user->username }}</span></b>
                </div>
                <div class="module-body">
                    <form class="form-horizontal" id="edit-user-form" method="PUT">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <!-- <label class="control-label">{{ trans('syntara::users.username') }}</label> -->
                                    <input class="form-control" type="text" id="username" name="username" value="{{ $user->username}}">
                                </div>
                                <div class="form-group">
                                    <!-- <label class="control-label">{{ trans('syntara::all.email') }}</label> -->
                                    <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <!-- <label class="control-label">{{ trans('syntara::all.password') }}</label> -->
                                    <input class="form-control" type="password" placeholder="{{ trans('syntara::all.password') }}" id="pass" name="pass" >
                                </div>
                                <div class="form-group">
                                    <!-- <label class="control-label">{{ trans('syntara::users.last-name') }}</label> -->
                                    <input class="form-control" type="text" id="last_name" name="last_name" value="{{ $user->last_name  }}">
                                </div>
                                <div class="form-group">
                                    <!-- <label class="control-label">{{ trans('syntara::users.first-name') }}</label> -->
                                    <input class="form-control" type="text" id="first_name" name="first_name" value="{{ $user->first_name }}">
                                </div>
                                <div class="form-group">
                                    <b class="bold">{{ trans('syntara::users.groups') }}</b>
                                    @foreach($groups as $group)
                                    <div class="checkbox-inline checkbox-default">
                                        @if($currentUser->hasAccess(Config::get('syntara::permissions.addUserGroup')))
                                        <input type="checkbox" id="groups[{{ $group->getId() }}]" name="groups[]" value="{{ $group->getId() }}" {{ ($user->inGroup($group)) ? 'checked="checked"' : ''}}>
                                        @endif
                                        <label>{{ $group->getName() }}</label>
                                    </div>
                                    @endforeach
                                </div>
                                @if($user->getId() !== $currentUser->getId())
                                        <b class="bold">{{ trans('syntara::users.banned') }}</b><br/>
                                    <div class="form-group switch-toggle well">
                                        <input id="no" name="banned" type="radio" value="no" {{ ($throttle->isBanned() === false) ? 'checked' : '' }}>
                                        <label for="no" onclick="">{{ trans('syntara::all.no') }}</label>

                                        <input id="yes" name="banned" type="radio" value="yes" {{ ($throttle->isBanned() === true) ? 'checked' : '' }}>
                                        <label for="yes" onclick="">{{ trans('syntara::all.yes') }}</label>

                                        <a class="btn btn-primary"></a>
                                    </div>
                                @endif
                            </div>
                            <div class="col-xs-12 col-md-5">
                                @if($currentUser->hasAccess(Config::get('syntara::permissions.addUserPermission')))
                                    @include(Config::get('syntara::views.permissions-select'), array('permissions'=> $permissions))
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <br>
                                <div class="form-group">
                                    <button id="update-user" class="btn btn-primary">{{ trans('syntara::all.update') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>
@stop
