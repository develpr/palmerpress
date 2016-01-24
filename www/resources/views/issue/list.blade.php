@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <ul class="vertical menu" data-accordion-menu>
                <li>
                    <a href="#">Item 1</a>
                    <ul class="menu veritcal nested">
                        <li><a href="#">Item 1A</a></li>
                        <li><a href="#">Item 1B</a></li>
                    </ul>
                </li>
                <li><a href="#">Item 2</a></li>
            </ul>
        </div>
    </div>
@endsection

