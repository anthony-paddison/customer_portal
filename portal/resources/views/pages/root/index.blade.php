@extends('layouts.no_nav')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 give_bottom_room">
                @if(file_exists(base_path("/public/assets/images/logo.png")))
                    <img src="/assets/images/logo.png" class="center-block">
                @else
                    <img src="/assets/images/transparent_logo.png" class="center-block">
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well">
                    {!! Form::open(['action' => 'AuthenticationController@authenticate']) !!}
                    <div class="form-group">
                        <label for="username">{{trans("root.username")}}</label>
                        {!! Form::text("username",null,['placeholder' => trans("root.username"), 'id' => 'username', 'class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="password">{{trans("root.password")}}</label>
                        {!! Form::password("password",['placeholder' => trans("root.password"), 'id' => 'password', 'class' => 'form-control']) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">{{trans("actions.login")}}</button>
                    <small style="margin-left: 3em;">
                        <a href="{{action("AuthenticationController@showResetPasswordForm")}}">{{trans("root.forgot")}}</a>
                    </small>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 1em;">
            <div class="col-md-4 col-md-offset-4">
                <p>
                    <a class="btn btn-success center-block" href="{{action("AuthenticationController@showRegistrationForm")}}" role="button">{{trans("root.register")}}</a>
                </p>
            </div>
        </div>
    </div>
@endsection
@section('additionalCSS')
    <link rel="stylesheet" href="/assets/css/pages/index.css">
@endsection
@section('additionalJS')
    {!! JsValidator::formRequest('App\Http\Requests\AuthenticationRequest') !!}
@endsection