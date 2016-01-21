@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
            @if($errors->has('password') || $errors->has('email'))
            <div class="callout alert">

                <p>Email and password combination was not found. Please try again.</p>

            </div>
            @endif
            <form class="" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <div class="medium-6 columns">
                    <label class="{{ $errors->has('email') ? ' is-invalid-label' : '' }}">Email
                        <input type="text" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" placeholder="Email" value="{{ old('email') }}">
                    </label>
                </div>
                <div class="medium-6 columns">
                    <label class="{{ $errors->has('password') ? ' is-invalid-label' : '' }}">Password
                        <input type="password" class="{{ $errors->has('password') ? ' is-invalid-input' : '' }}">
                    </label>
                </div>

                <fieldset class="large-12 columns">
                    <input id="remember" type="checkbox"><label for="remember">Remember Me</label>
                </fieldset>

                <div class="large-12">
                <button type="submit" class="button float-center large-4 small-10">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
