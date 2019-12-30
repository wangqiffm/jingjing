@extends('layouts.app_blank')

@section('title', 'Menu')
@section('body_class', 'page')

@section('sidebar')
    @parent
@endsection


<?php
$path = 'menu2/';
$sections = [
  [
    'title' => 'Mittagskarte',
    'from'  =>  ["mittag1","mittag2"],
  ],
  [
    'title' => 'Sushi',
    'from'  => ["sushi1","sushi2"],
  ],
  [
    'title' => 'Suppen',
    'from'  => 1,
  ],
  [
    'title' => 'Salat',
    'from'  => 2,
  ],
  [
    'title' => 'Vorspeisen',
    'from'  => [3,4],
  ],
  [
    'title' => 'Kalte Speise',
    'from'  => [5,6],
  ],
  [
    'title' => 'Nudelsuppe',
    'from'  => [7],
  ],
  [
    'title' => 'Gebratene Reis und Nudel',
    'from'  => [8,9],
  ],
  [
    'title' => 'Fleisch',
    'from'  => [10,11,12],
  ],
  [
    'title' => 'Meeresfrüchte',
    'from'  => [13,14],
  ],
  [
    'title' => 'Topf',
    'from'  => [15],
  ],
  [
    'title' => 'Vegetarisch',
    'from'  => [16],
  ],
  [
    'title' => 'Nachtisch',
    'from'  => [17],
  ],
  [
    'title' => 'Getränke',
    'from'  => [18,19],
  ],
  [
    'title' => 'Weine',
    'from'  => [20,21,22],
  ],
]
?>

@section('content')

    <div class="hide-on-small-only" id="close-menu">
        <a href="javascript:history.back()" class="scroll-top-button visible"> <i class="material-icons">close</i></a>
    </div>

    <div class="container">


        <div class="row">
            <div class="col s12 m9 l10">

                @foreach($sections as $key=>$section)
                    @component('menu_slot', ['from' =>$section['from'],'key' => $key,'path'=>$path])
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
                        @foreach($sections as $key=>$section)

                            <li><a href="#{{$key}}">{{$section['title']}}</a></li>

                        @endforeach
                    </ul>

                </div>
            </div>
        </div>


    </div>
@endsection