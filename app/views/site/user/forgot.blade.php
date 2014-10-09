@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.forgot_password') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
    <h3>{{{ Lang::get('user/user.forgot_password') }}}</h3>
</div>
{{ Confide::makeForgotPasswordForm() }}
@stop
