@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {!! Html::style('https://use.fontawesome.com/releases/v5.6.3/css/all.css') !!}
    {!! Html::style('theme/css/style_login.css') !!}
    {!! Html::style('theme/css/style_login_responsive.css') !!}
@endpush('css')

@section('content')

<div class="mainlogin">

<div id="wrapper">
    <div class="loginmain">
        <div class="container">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="loginbx col-sm-12 col-md-8">
                    <h1>Login</h1>
                    @if (session('login-status'))
                        {{ session('login-status') }}
                        <br><br>
                    @endif
                    {!! Form::open(['route' => 'signOn', 'class' => 'login-page-form']) !!}
                    <div class="form-group">
                        {!! Form::text('identifier',null,['class' => 'form-control','placeholder' => 'Email or Customer ID', 'id' => 'identifier']) !!}
                        {!! $errors->first('identifier') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::password('password', [ 'class'=>"form-control",'placeholder' => 'Password', 'id' => 'password']) }}
                        {!! $errors->first('password') !!}
                    </div>
                    {!! Form::button('<span class="fas fa-arrow-right"></span>',
                        ['class' => 'btn btn-primary loginbtn system-background', 'type' => 'submit']) !!}
                    <div class="form-group mt-3">
                        <a href="{{ route('forgot-password') }}" class="forgotbtn system-background">Forgot Password?</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6"></div>
        </div>
    </div>
</div>
</div>
@endsection
@include('layouts.partials._javascript')

<script>
    $(function(){
        $('.login-page-form').validate({
            rules: {
                password:     "required",
                identifier:{
                    required: true,
                },
            },
            messages: {
                password:     "Please provide your password",
                identifier: {
                    required: "Please enter your Email ID or Customer ID",
                },
            },

            errorElement: "em",

            errorPlacement: function( error, element ){

                error.addClass('form-text text-muted text-danger');
                error.insertAfter(element);
            },
        });

    });
</script>
