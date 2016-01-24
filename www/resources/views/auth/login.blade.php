@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div id="auth-forms" style="display:none;" class="large-6 small-12 col-lg-pull-3 pp-form">
                <div class="row form-selector">
                    <div class="large-4 small-4 columns option signin">Sign In</div>
                    <div class="switch medium small-4 large-4 columns">
                        <input class="switch-input" id="formSelect" type="checkbox" name="formSelect">
                        <label class="switch-paddle" for="formSelect">
                            <span class="show-for-sr">Form Select</span>
                        </label>
                    </div>
                    <div class="large-4 small-4 columns option register">Register</div>
                </div>

                <form id="form-signin" role="form" class="row" method="POST" action="{{ url('/login') }}" data-last="<?php echo Session::get('authRoute', 'login') == "login" ? "true" : "false"; ?>">
                    <p>
                        Login here, if you want. If you forgot your password you can <a href="/password/reset">go here to reset it</a>.
                    </p>
                    {!! csrf_field() !!}
                    <div class="medium-6 columns">

                            <input type="text" name="email" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" placeholder="Email" value="{{ old('email') }}">

                    </div>
                    <div class="medium-6 columns">

                            <input placeholder="Password" name="password" type="password" class="{{ $errors->has('password') ? ' is-invalid-input' : '' }}">

                    </div>

                    <div class="large-12 columns">
                        <input id="remember" name="remember" type="checkbox"><label for="remember">Remember Me</label>
                    </div>

                    <div class="large-12 columns">
                        <button type="submit" class="button float-center large-12 small-12">Sign In</button>
                    </div>
                </form>

                <form id="form-register" class="row" role="form" method="POST" action="{{ url('/register') }}" data-last="<?php echo Session::get('authRoute', 'login') == "register" ? "true" : "false"; ?>">
                    <p>Thanks for registering! Once you've registered an admin will verify you are a local resident (i.e. you live in this house), after which you'll recieve an email letting you know your account has been approved!</p>
                    {!! csrf_field() !!}
                    <div class="medium-6 columns">
                        <input type="text" name="email" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="medium-6 columns">
                        <input placeholder="Password" name="password" type="password" class="{{ $errors->has('password') ? ' is-invalid-input' : '' }}">
                    </div>

                    <div class="medium-6 columns">
                        <input placeholder="Confirm Password" name="password_confirm" type="password" class="{{ $errors->has('password_confirmation') ? ' is-invalid-input' : '' }}">
                    </div>

                    <div class="large-12 columns">
                        <button type="submit" class="button float-center large-12 small-12">Register</button>
                    </div>
                </form>
        </div>
    </div>
@endsection
