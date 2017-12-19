
<ul id="nav-mobile" class="side-nav">
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="#jingjing_express">Jingjing Express</a></li>
    <li><a href="{{ url('/menu-page') }}">Speisekarte</a></li>
    <li><a href="#reservation">Reservierung</a></li>
    <li><a href="#aboutus">Über uns</a></li>
    <li><a href="#contact">Kontakt</a></li>

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
            </div>
        </div>
    </div>
</div>

<div class=" navbar">
    <nav class="white " role="navigation">
        <div class="nav-wrapper container ">
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#jingjing_express">Jingjing Express</a></li>
                <li><a href="{{ url('/menu-page') }}">Speisekarte</a></li>
                <li><a href="#reservation">Reservierung</a></li>
                <li><a href="#aboutus">Über uns</a></li>
                <li><a href="#contact">Kontakt</a></li>

            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>
