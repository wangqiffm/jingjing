@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div id="index-banner" class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">

            <div class="row center">
                <h1 class="header col s12"><span class=" bg-pad">Hauptmenu</span></h1>
                <p class="header col s12 m6 offset-m3 light bg-pad">Es stehen Ihnen wöchentlich fünf Vorspeisen und fünf Hauptspeisen zur Wahl. Wir servieren Ihnen dazu wahlweise einen Wein, ein Bier oder ein alkoholfreies Getränk und zum Abschied einen Esspresso.</p>
                <h6 class="header col s12 "><a href="#!" class="btn-large waves-effect waves-light orange lighten-1">Weiterlesen</a></h6>

            </div>

        </div>
        <div class="parallax"><img src="img/slide1.png" alt="Unsplashed background img 1"></div>
    </div>

    {{--<div class="slider parallax-container valign-wrapper">--}}
        {{--<ul class="slides">--}}
            {{--<li>--}}
                {{--<img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>This is our big Tagline!</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->--}}
                {{--<div class="caption left-align">--}}
                    {{--<h3>Left Aligned Caption</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->--}}
                {{--<div class="caption right-align">--}}
                    {{--<h3>Right Aligned Caption</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>This is our big Tagline!</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}


    <div class="container">
        <div class="section scrollspy" id="aboutus">

            <div class="row ">

                <div class="col s12 center">
                    <h4><i class="mdi-content-send red-text text-darken-4">Über uns</i></h4>
                    <p class="left-align light  ">
                        Herzlich willkommen im Restaurant Jingjing Asia
                        Unser Restaurant bietet Ihnen erstklassige chinesisch Spezialität nach "Chuan" Art und frische japanische Sushi Spezialität .
                        Unser Restaurant besteht aus zwei innere Gasträumen mit ca. 350 Plätzen und Terrassenräume mit ca. 150 Plätzen.
                        Außerdem haben wir 3 Separat VIP Räume, die sehr gut für Private Feiern unter Freunden ,der Familie oder Kollegen geeignet sind. Für hochwertige Firmenevent, Veranstaltung organisieren Wir in schöne The Squaire Gartenbereich .
                        Wir haben berühmte Nachtisch für Sie vorbereitet: Gebackne Banane und Ananas mit Honig dazu chinesisch Früchte.
                        Wir wünschen allen lieben Gästen guten Appetit.</p>
                </div>


            </div>


            <!--   Icon Section   -->
            <div class="row no-margin-bottom">
                <div class="col s12 l4 offset-l1">
                    <div class="row ">

                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/front-img-1.png')}}"></p>
                        </div>

                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/front-img-2.png')}}"> </p>
                        </div>


                        <div class="icon-block no-padding s12 center-align">
                            <h5 class="center red-text text-darken-4">Sonderöffnungszeiten</h5>
                            <p class="light">
                                23.12. 11:00-15:30;<br>
                                24.12. nicht geöffnet;<br>
                                25.12. 17:30-23:00;<br>
                                26.12. 17:30-23:00
                            </p>
                        </div>

                        {{--<div class="icon-block no-padding s12">--}}
                            {{--<h5 class="center red-text text-darken-4">Reservierung</h5>--}}
                            {{--<p class="light">--}}
                                {{--Vielen Dank für Ihre Reservierung. Wir werden Ihre Anfrage schnellstmöglich zu bearbeiten.--}}
                                {{--Bitte beachten Sie, dass Ihre Reservierung erst dann Gültigkeit hat, wenn Sie von uns eine schriftliche Bestätigung erhalten haben.--}}

                                {{--Wir freuen uns darauf, Sie schon bald als Gast in unserem Hause zu begrüßen.--}}

                                {{--Ihr Team vom Jingjing Asia Restaurant--}}
                            {{--</p>--}}
                        {{--</div>--}}

                    </div>
                </div>

                <div class="col s12 l4 offset-l1">
                    <div class="row ">


                        <div class="icon-block no-padding s12 center-align">
                            <h5 class="center red-text text-darken-4">Öffnungszeiten</h5>
                            <p class="light">
                                Mo. - Fr. :11:00 - 23:00 <br>
                                Sa.: 17:30- 23:00<br>
                                So.: 11:00 - 23:00
                            </p>
                        </div>


                        <div class="icon-block no-padding s12 center-align">
                            <h5 class="center red-text text-darken-4">Kontakt</h5>
                            <p class="light">
                                Tel.: +49(0)69/643 552 272<br>
                                Fax: +49(0)69/643 552 369<br>
                                E-Mail: jingjing-asia@live.com
                            </p>
                        </div>

                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/jingjing.jpg')}}"></p>
                        </div>


                        <div class="icon-block no-padding s12 center-align">
                            <h5 class="center red-text text-darken-4">Jingjing Express Flughafen</h5>
                            <p class="light">
                                Öffnungsteiten<br>
                                Mo. - So. 10:30 - 22:00
                            </p>
                        </div>


                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/jingjingexpress_big.jpg')}}"></p>
                        </div>







                    </div>
                </div>
            </div>              <!--  End row -->

            {{--<div class="container " id="reservation">--}}
                {{--<div class="section">--}}

                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="row time-picker">--}}
                {{--<div class="col s12 m9 offset-m1">--}}


                        {{--<div class="icon-block center-align">--}}

                            {{--<p><img class="" src="{{asset('img/front-img-4.jpg')}}"> </p>--}}
                            {{--<div id="time-picker">--}}

                                    {{--<div class="row ">--}}
                                        {{--<h5 class="header col s12 offset-m1 light ">Tischreservierung</h5>--}}
                                        {{--<h6 class="header col s12 offset-m1 light ">In unserem Tischreservierungs-Portal haben Sie die Möglichkeit, freie Plätze zu Ihrer Wunschzeit anzufragen und erhalten sofort eine Bestätigung oder einen anderen Terminvorschlag. Natürlich können Sie uns auch jederzeit per Telefon 069/6 43 55 22 70-72 , Fax 069/6 43 55 22 71 oder E-Mail an  jingjing-asia@live.com--}}
                                            {{--erreichen.</h6>--}}
                                    {{--</div>--}}
                                    {{--<div class="row ">--}}
                                        {{--<div class="input-field col s12  m5 offset-m1">--}}
                                            {{--<input placeholder="Placeholder" type="text" name="reservation[date]" class="datepicker">--}}
                                            {{--<label for="reservation[date]">Datum</label>--}}
                                        {{--</div>--}}

                                        {{--<div class="input-field col s12  m5">--}}
                                            {{--<select>--}}
                                                {{--<option value="1" selected>1 Person</option>--}}
                                                {{--@for ($i = 2; $i <= 20; $i++)--}}
                                                    {{--<option value="{{ $i }}">{{ $i }} Personen</option>--}}
                                                {{--@endfor--}}
                                            {{--</select>--}}
                                            {{--<label>Personen<label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                            {{--</div>--}}



                        {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}


        </div>

        <div class="section">
            <div class="row scrollspy" id="reservation">
                <div class="col s12 m9 offset-m1 valign-bg ">

                    {{--reservation-box--}}
                    <div class="valign-wrapper row reservation-box">
                        <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
                            <form>
                                <div class="card-content">
                                    <span class="card-title"><h5 class="red-text text-darken-4">Reservierung</h5></span>
                                    <div class="row">

                                        <div class="input-field col s12">
                                            <select name="reservation[personen]">
                                                <option value="1" selected>1 Person</option>
                                                @for ($i = 2; $i <= 20; $i++)
                                                    <option value="{{ $i }}">{{ $i }} Personen</option>
                                                @endfor
                                            </select>

                                            <label for="reservation[personen]">Personen<label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input placeholder="Placeholder" type="text" name="reservation[date]" class="datepicker">
                                            <label for="reservation[date]">Datum</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action right-align">
                                    <input type="reset" id="reset" class="btn-flat grey-text waves-effect">
                                    <input type="submit" class="btn green waves-effect waves-light" value="Senden">
                                </div>
                            </form>
                        </div>
                    </div> {{--END reservation-box--}}

                </div>
            </div>
        </div>

        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h4><i class="mdi-content-send red-text text-darken-4">
                            Das sagen unsere Gäste...</i></h4>
                    <p class="left-align light caption flow-text"></p>
                </div>

                <div class="col s12 m6 offset-m3">
                    <h5 style="letter-spacing:0.2em; font-weight: 300; font-size: 12px;">Antje S. - Google Local Guide</h5>
                    <p class="flow-text ">
                        “Nettes Personal. Gute Produkte und gutes Preis-Leistungs-Verhältnis.”

                    </p>
                </div>
                <div class="col s12 m6 offset-m3">
                    <h5 style="letter-spacing:0.2em; font-weight: 300; font-size: 12px;">Sascha J. - Google Local Guide</h5>
                    <p class="flow-text">
                        “Lecker und günstig! Sehr zum empfehlen wenn es schnell gehen und satt machen soll.”

                    </p>
                </div>

            </div>
        </div>
    </div>




    <div class="container">
        <div class="section">

            <div class="row">



            </div>


        </div>
    </div>




    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="header col s12 light">Hauptmenu</h3>
                    <p class="header col s12 m6 offset-m3 light">Es stehen Ihnen wöchentlich fünf Vorspeisen und fünf Hauptspeisen zur Wahl. Wir servieren Ihnen dazu wahlweise einen Wein, ein Bier oder ein alkoholfreies Getränk und zum Abschied einen Esspresso.</p>
                    <h6 class="header col s12 light"><a href="#!" class="btn waves-effect waves-light orange lighten-1">Weiterlesen</a></h6>

                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/service1.jpg" alt="Unsplashed background img 3"></div>
    </div>

@endsection