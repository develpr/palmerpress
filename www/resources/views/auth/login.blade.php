@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div id="auth-forms" class="large-6 small-12 float-center">
                <div class="large-9 small-12 float-center form-selector">
                    <div class="large-4 small-4 columns option signin">Sign In</div>
                    <div class="switch small small-3 large-4 columns">
                        <input class="switch-input" id="formSelect" type="checkbox" name="formSelect">
                        <label class="switch-paddle" for="formSelect">
                            <span class="show-for-sr">Form Select</span>
                        </label>
                    </div>
                    <div class="large-4 small-4 columns option register">Register</div>
                </div>

                <form class="" id="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                    @if($errors->has('password') || $errors->has('email'))
                        <div class="callout alert">

                            <p>Email and password combination was not found. Please try again.</p>

                        </div>
                    @endif
                    {!! csrf_field() !!}
                    <div class="medium-6 columns">

                            <input type="text" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" placeholder="Email" value="{{ old('email') }}">

                    </div>
                    <div class="medium-6 columns">

                            <input placeholder="Password" type="password" class="{{ $errors->has('password') ? ' is-invalid-input' : '' }}">

                    </div>

                    <div class="large-12 columns">
                        <input id="remember" type="checkbox"><label for="remember">Remember Me</label>
                    </div>

                    <div class="large-12 columns">
                        <button type="submit" class="button float-center large-12 small-12">Sign In</button>
                    </div>
                </form>

                <form class="" id="form-register" role="form" method="POST" action="{{ url('/register') }}">
                    @if($errors->has('password') || $errors->has('email'))
                        <div class="callout alert">

                            <p>Email and password combination was not found. Please try again.</p>

                        </div>
                    @endif
                    {!! csrf_field() !!}
                    <div class="medium-6 columns">
                        <input type="text" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="medium-6 columns">
                        <input placeholder="Password" type="password" class="{{ $errors->has('password') ? ' is-invalid-input' : '' }}">
                    </div>

                    <div class="medium-6 columns">
                        <input placeholder="Confirm Password" type="password" class="{{ $errors->has('password_confirmation') ? ' is-invalid-input' : '' }}">
                    </div>

                    <div class="large-12 columns">
                        <button type="submit" class="button float-center large-12 small-12">Register</button>
                    </div>
                </form>

            <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
