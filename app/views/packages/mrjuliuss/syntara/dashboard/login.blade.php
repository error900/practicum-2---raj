@extends(Config::get('syntara::views.master'))

@section('content')
<script type="text/javascript" src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/login.js') }}"></script>
<div class="container-fluid">
    <div class="row" style="margin-top: 20px;">
        <div class="col-xs-12 col-md-4 col-md-offset-4 login">
            <form id="login-form" method="post" class="form-horizontal">
                <div class="form-group account-username">
                    @if($loginAttribute === 'email')
                    <input type="text" class="col-lg-12 form-control login-field" placeholder="{{ trans('syntara::all.email') }}" name="email" id="email">
                    <i class="fa fa-user input-icon"></i>
                    @elseif($loginAttribute === 'username')
                    <input type="text" class="col-lg-12 form-control login-field" placeholder="{{ trans('syntara::users.username') }}" name="username" id="username">
                    <i class="fa fa-user input-icon"></i>
                    @endif
                </div>
                <div class="form-group account-username account-password">
                   <input type="password" class="col-lg-12 form-control login-field" placeholder="{{ trans('syntara::all.password') }}" name="pass" id="pass">
                   <i class="fa fa-lock input-icon"></i>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" id="remember" value="false">{{ trans('syntara::all.remember') }}
                    </label>
                </div>
                <button class="btn btn-block btn-large btn-primary login-btn">{{ trans('syntara::all.signin') }}</button>
            </form>
        </div>
    </div>
</div>
@stop
