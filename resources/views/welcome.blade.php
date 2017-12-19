@extends('layouts.app')

@section('title', 'Willkommen - Welcome - 欢迎光临')
@section('body_class', 'welcome')
@section('sidebar')
    @parent
@endsection

@section('content')
    <div id="index-banner" class="parallax-container valign-wrapper slider">

        <div class="parallax"><img src="{{asset('img/f1.jpg')}}" alt=""></div>
        <div class="parallax"><img src="{{asset('img/f2.jpg')}}" alt=""></div>
        <div class="parallax"><img src="{{asset('img/f3.jpg')}}" alt=""></div>
        <div class="parallax"><img src="{{asset('img/f4.jpg')}}" alt=""></div>
        <div class="parallax"><img src="{{asset('img/f5.jpg')}}" alt=""></div>
        <div class="parallax"><img src="{{asset('img/f6.jpg')}}" alt=""></div>

    </div>
    <div class="container">
        <div class="section scrollspy" id="aboutus">

            <div class="row ">

                <div class="col s12 center">
                    <h4><i class="mdi-content-send red-text text-darken-4">Über uns</i></h4>
                    <p class="left-align light  ">
                        Herzlich willkommen im Restaurant Jingjing Asia.
                        Unser Restaurant bietet Ihnen erstklassige chinesisch Spezialität nach "Chuan" Art und frische japanische Sushi Spezialität .
                        Unser Restaurant besteht aus zwei innere Gasträumen mit ca. 350 Plätzen und Terrassenräume mit ca. 150 Plätzen.
                        Außerdem haben wir 3 Separat VIP Räume, die sehr gut für Private Feiern unter Freunden ,der Familie oder Kollegen geeignet sind. Für hochwertige Firmenevent, Veranstaltung organisieren Wir in schöne The Squaire Gartenbereich .
                        Wir wünschen allen lieben Gästen guten Appetit.</p>
                </div>


            </div>


            <!--   Icon Section   -->
            <div class="row no-margin-bottom">
                <div class="col s12 l4 offset-l1">
                    <div class="row ">

                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/g1.jpg')}}"></p>
                        </div>


                        <div class="icon-block no-padding s12 left-align">
                            <h5 class=" red-text text-darken-4">Sushi 10,80 €</h5>
                            <p class="left-align light">
                                Die kleinen appetitlichen Häppchen auch in unserer gemütlichen Sushibar. Wir servieren sämtliche Köstlichkeiten aus Heimservicekarte sowie traditionelle japanische Suppen und leckere heiße Gerichte.
                            </p>
                        </div>


                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/jingjingexpress_big.jpg')}}"></p>
                        </div>


                        <div class="icon-block no-padding s12 left-align">
                            <h5 class="red-text text-darken-4">Jingjing Express Flughafen</h5>
                            <p class="light">
                                The SQUAIRE am Flughafen<br>
                                ATRIUM Ebene 3 west<br>

                                60549 Frankfur am Main<br><br>


                                Öffnungszeiten<br>
                                Mo. - So. 10:30 - 22:00<br>
                                Sonderöffnungszeiten<br>
                                23.12.2017  10:00 - 22:00 Uhr<br>
                                24.12.2017  geschlossen<br>
                                25.12.2017  geschlossen<br>
                                26.12.2017  10:00 - 22:00 Uhr<br>
                                31.12.2017  10:00 - 21:00 Uhr<br>
                                01.01.2018  12:00 - 22:00 Uhr<br>
                            </p>
                        </div>


                    </div>
                </div>

                <div class="col s12 l4 offset-l1">
                    <div class="row ">


                        <div class="icon-block no-padding s12 left-align">
                            <h5 class=" red-text text-darken-4">Öffnungszeiten</h5>
                            <p class="light">
                                Mo. - Fr. :11:00 - 23:00<br>
                                Sa.: 17:30 - 23:00<br>
                                So.: 11:00 - 23:00

                            </p>
                        </div>


                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/g2.jpg')}}"></p>
                        </div>

                        <div class="icon-block no-padding s12 left-align">
                            <h5 class="red-text text-darken-4">Hauptmenu</h5>
                            <p class="light">
                                Es stehen Ihnen wöchentlich fünf Vorspeisen und fünf Hauptspeisen zur Wahl. Wir servieren Ihnen dazu wahlweise einen Wein, ein Bier oder ein alkoholfreies Getränk und zum Abschied einen Esspresso.
                            </p>
                        </div>

                        <div class="icon-block no-padding s12 center-align">
                            <p><img class="responsive-img" src="{{asset('img/raum.jpg')}}"></p>
                        </div>




                        <div class="icon-block no-padding s12 left-align">
                            <h5 class="red-text text-darken-4">Kontakt</h5>
                            <p class="light">

                                Jingjing Asia Restaurant<br>

                                Atrium Ebene 5 West Fernbahnhof<br>
                                THE SQUAIRE 13 AM FLUGHAFEN<br>
                                60549 Frankfurt am Main<br>

                                Tel.: +49(0)69/643 552 272<br>
                                Fax: +49(0)69/643 552 369<br>
                                E-Mail: jingjing-asia@live.com
                            </p>
                        </div>




                        <div class="icon-block no-padding s12 left-align">
                            <h5 class=" red-text text-darken-4">Sonderöffnungszeiten</h5>
                            <p class="light">
                                23.12.2017  geschlossen<br>
                                24.12.2017  geschlossen<br>
                                25.12.2017  geschlossen<br>
                                26.12.2017  11:00 - 23:00 Uhr<br>
                                31.12.2017  11:00 - 21:30 Uhr<br>
                                01.01.2018  17:30 - 23:00 Uhr<br>
                            </p>
                        </div>







                    </div>
                </div>
            </div>              <!--  End row -->



        </div>

        <div class="section scrollspy" id="reservation">

                @include('reservation-inc')

        </div>

        <div class="section scrollspy" id="jingjing_express">
            <div class="row">
                <div class="col s12 ">
                    <h4 class="center">
                        <i class="red-text text-darken-4">
                            Wenn es mal schnell gehen muss.</i>
                    </h4>
                </div>
            </div>
            <div class="row">

                <div class="bh-sl-container">
                    <div id="bh-sl-map-container" class="bh-sl-map-container">



                        <div id="bh-sl-map" class="bh-sl-map"></div>


                        <div class="card hoverable bh-sl-loc-list">
                            <ul class="list"></ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>



    </div>

    <div class="container">

    <div class="section  scrollspy" id="contact">

        <h4 class="red-text text-darken-4 center">Kontaktieren Sie uns</h4>
            @include('contact-inc')


    </div>
    </div>

@endsection



@section('bottom_scripts')

    <script src="{{asset('store-locator/dist/')}}/assets/js/libs/handlebars.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCjMDS2EjGYY3KSyKLksa92SK2UiVM1WJQ"></script>
    <script src="{{asset('store-locator/dist/')}}/assets/js/plugins/storeLocator/jquery.storelocator.js"></script>
    <script>
        $(function () {
            $('#bh-sl-map-container').storeLocator({
                'slideMap': false,
                'defaultLoc': true,
                'defaultLat': '49.55204864',
                'defaultLng': '8.77608032',
                'distanceAlert': 500,
                'listColor1'                 : 'rgba(255,255,255,0.9)',
                'listColor2'                 : 'rgba(255,255,255,0.9)',
                'mapSettings': {
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoom: 8
                },
                'infowindowTemplatePath': '{{asset('store-locator/dist/')}}/assets/js/plugins/storeLocator/templates/infowindow-description.html',
                'listTemplatePath': '{{asset('store-locator/dist/')}}/assets/js/plugins/storeLocator/templates/location-list-description.html',
                'dataType': 'xml',
                'dataLocation': '{{asset('store-locator/dist/')}}/data/locations.xml'
            });
        });
    </script>
@endsection

@section('after_styles')
    <link rel="stylesheet" type="text/css" href="{{asset('store-locator/dist/')}}/assets/css/storelocator.css"/>

@endsection