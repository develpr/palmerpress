@extends('layouts.master')

@section('hero')
<div class="hero">
    <video autoplay loop poster="/images/poster.jpg">
        <source src="https://s3-us-west-1.amazonaws.com/palmerpress.co/video/house_1.mp4">
    </video>
    <img src="/images/press.png" alt="Palmer Press" />
</div>
@endsection


@section('content')
    <div class="hero">
        <video autoplay loop poster="/images/poster.jpg">
            <source src="https://s3-us-west-1.amazonaws.com/palmerpress.co/video/house_1.mp4">
        </video>
        <img src="/images/press.png" alt="Palmer Press" />
    </div>
@endsection