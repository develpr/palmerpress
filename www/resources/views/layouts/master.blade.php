<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/style/app.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
</div>
<div id="main-menu" class="top-bar" style="">
    <div class="top-bar-left">
        <ul class=" menu" data-dropdown-menu>
            <li class="menu-text palmerpress-title"><a href="/">Palmer Press</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu" data-dropdown-menu>
            <li><a href="/latest">Latest Issue</a></li>
            @if(Auth::check())
                @if(Auth::user()->email == "shoelessone@gmail.com")
                    <li><a href="/issues">Issues</a></li>
                @endif
                <li><a href="/articles">Articles</a></li>
                <li><a href="/classifieds">Classifieds</a></li>
                {{--<li><a href="/ads">ads</a></li>--}}
                <li><a href="/logout">Log Out</a></li>
            @else
                <li><a href="/sign-in">Sign In / Register</a></li>
            @endif
        </ul>
    </div>
</div>

<div class="main" id="content">
    @yield('hero')
    @yield('content')
</div>



<script src="/scripts/app.js"></script>
</body>
</html>