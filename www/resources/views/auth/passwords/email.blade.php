@extends('layouts.master')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="large-6 small-12 col-lg-pull-3 pp-form">
            <h2>Be. More. Responsible.</h2>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="row" role="form" method="POST" action="{{ url('/password/email') }}" >
                <p>
                    Oh goodness! It appears that you've arrived on this page because you may have forgotten your password! No worries, just enter your dizzeets in the form of your izeemail below. Or you can always just tell Kevin.
                </p>

                {!! csrf_field() !!}
                <div class="medium-12 small-12 columns">
                    <input type="email" class="{{ $errors->has('email') ? ' is-invalid-input' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}">
                </div>

                <div class="large-12 columns">
                    <button type="submit" class="button float-center large-12 small-12">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
