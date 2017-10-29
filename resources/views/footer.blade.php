
<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col m6 s12">
                <h5 class="white-text">Über uns</h5>
                <p class="grey-text text-lighten-4">Herzlich willkommen im Restaurant Jingjing Asia.<br>
                    Unser Restaurant bietet Ihnen erstklassige chinesisch Spezialität nach <i>Chuan</i> Art und frische japanische Sushi Spezialität.</p>
            </div>

            <div class="col m5 s12 offset-m1">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="white-text" href="{{ url('/') }}">Home</a></li>
                    <li><a class="white-text" href="#!">Speisekarte</a></li>
                    <li><a class="white-text" href="#reservation">Reservierung</a></li>
                    <li><a class="white-text" href="#aboutus" {{--class="dropdown-button" data-activates="dropdown2"--}}>Über uns</a></li>
                    <li><a class="white-text" href="{{ url('contact') }}">Kontakt</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="right">Handcrafted by <a class="brown-text text-lighten-3" href="#!">ACME Ltd.</a> </div>
            <div>©{{date('Y')}} Jingjing Asia Restaurant</div>
        </div>
    </div>
</footer>