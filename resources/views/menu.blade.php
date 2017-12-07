@extends('layouts.app_blank')

@section('title', 'Menu')
@section('body_class', 'page')

@section('sidebar')
    @parent
@endsection


<?php
$sections = [
  [
    'title' => 'Suppen',
    'from'  => 1,
    'to'    => 2,
  ],
  [
    'title' => 'Salat',
    'from'  => 3,
    'to'    => 3,
  ],
  [
    'title' => 'Vorspeisen',
    'from'  => 4,
    'to'    => 5,
  ],
  [
    'title' => 'Kalte Speise',
    'from'  => 6,
    'to'    => 10,
  ],
  [
    'title' => 'Nudelsuppe',
    'from'  => 11,
    'to'    => 12,
  ],
  [
    'title' => 'Gebratene Reis und Nudel',
    'from'  => 13,
    'to'    => 15,
  ],
  [
    'title' => 'Meerfrüchte',
    'from'  => 23,
    'to'    => 28,
  ],
  [
    'title' => 'Topf',
    'from'  => 29,
    'to'    => 30,
  ],
  [
    'title' => 'Vegetarisch',
    'from'  => 31,
    'to'    => 33,
  ],
  [
    'title' => 'Beilage',
    'from'  => 34,
    'to'    => 34,
  ],
  [
    'title' => 'Nachtisch',
    'from'  => 35,
    'to'    => 36,
  ],
  [
    'title' => 'Getränke',
    'from'  => 37,
    'to'    => 38,
  ],
]
?>

@section('content')

    <div id="close-menu">
        <a href="#close" class="scroll-top-button visible"> <i class="material-icons">close</i></a>
    </div>
    {{--<div id="page-banner" class="parallax-container valign-wrapper">--}}
    {{--<div class="section no-pad-bot">--}}

    {{--<h1 class="header center white-text text-lighten-2">Speisekarte </h1>--}}
    {{--<div class="row center">--}}
    {{--<h5 class="header col s12 light"></h5>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="parallax"><img src="img/header_2.png" alt="background img 1"></div>--}}
    {{--</div>--}}

    <div class="container">


        <div class="row">
            <div class="col s12 m9 l10">

                @foreach($sections as $section)
                    @component('menu_slot', ['from' =>$section['from'],'to' => $section['to'],])
                        @slot('title')
                            {{$section['title']}}
                        @endslot
                    @endcomponent
                @endforeach

            </div>
            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper">
                    <br>
                    <a href="{{ url('/') }}"><img src="{{asset('img/logo_transparent.png')}}"></a>

                    <div>Atrium Ebene 5 West Fernbahnhof<br>
                        THE SQUAIRE 13 AM FLUGHAFEN<br>
                        60549 Frankfurt am Main
                    </div>

                    <ul class="section table-of-contents">
                        @foreach($sections as $section)

                            <li><a href="#{{str_replace(' ','_',$section['title'])}}">{{$section['title']}}</a></li>

                        @endforeach
                    </ul>

                </div>
            </div>
        </div>


    </div>
@endsection