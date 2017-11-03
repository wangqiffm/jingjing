<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
</ul>
<ul id="dropdown2" class="dropdown-content">
</ul>
<ul id="nav-mobile" class="side-nav">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="#!">Speisekarte</a></li>
    <li><a href="{{ url('/') }}/#reservation">Reservierung</a></li>
    <li><a href="{{ url('/') }}/#aboutus" {{--class="dropdown-button" data-activates="dropdown2"--}}>Über uns</a></li>
    <li><a href="{{ url('contact') }}">Kontakt</a></li>

</ul>

<div class="section no-pad-bot no-margin" id="index-banner">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="header center">
                    <a href="{{ url('/') }}"><img src="{{asset('img/logo_transparent.png')}}"></a>
                    <div id="header-address"  class="hide-on-med-and-down">Atrium Ebene 5 West Fernbahnhof<br>
                        THE SQUAIRE 13 AM FLUGHAFEN<br>
                        60549 Frankfurt am Main </div>
                </div>


                {{--<h4 class="light red-text text-lighten-4 center-on-small-only">Learn about Material Design and our Project Team.</h4>--}}
            </div>
        </div>
    </div>
</div>

<div class=" navbar">
    <nav class="white " role="navigation">
        <div class="nav-wrapper container ">
            {{--<a id="logo-container" href="#" class="brand-logo">Logo</a>--}}
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#!">Speisekarte</a></li>
                <li><a href="#reservation">Reservierung</a></li>
                <li><a href="#aboutus" {{--class="dropdown-button" data-activates="dropdown2"--}}>Über uns</a></li>
                <li><a href="{{ url('contact') }}">Kontakt</a></li>
                {{--<li>--}}
                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url(config('backpack.base.route_prefix', 'admin') .'/dashboard') }}">{{ Auth::user()->name }}</a></li>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}
                    {{--@endif--}}

                {{--</li>--}}

            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
