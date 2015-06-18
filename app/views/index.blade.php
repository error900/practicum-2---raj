<!DOCTYPE html>

@extends(Config::get('syntara::views.master'))
@section('content')

{{ HTML::style('packages/mrjuliuss/syntara/assets/css/dashboard.css'); }}

@include('dashboard')

{{ HTML::script('Assets/js/angular.min.js'); }}
{{ HTML::script('Assets/js/ui-bootstrap-tpls-0.12.0.min.js'); }}
{{ HTML::script('Assets/js/angular-snippet.js'); }}

@stop

