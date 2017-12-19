
{{--reservation-box--}}
<div class="valign-wrapper row contact-box">

    <!-- Modal Structure -->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <h5>Vielen Dank für Ihre Nachricht</h5>
            <p>Ihre Nachricht wurde erfolgreich gesendet. <br>
                Wir kümmern uns gern um Ihre Anfrage und melden uns umgehend bei Ihnen.<br><br>

                Herzliche Grüße<br>
                Ihr Team Jingjing Asia</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Schließen</a>
        </div>
    </div>


    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l6 pull-l3">


        <form class="" id="contact-form" action="{{ route("contact.send") }}" method="post">

            {{ csrf_field() }}
            <div class="card-content">


            <span class="card-title"></span>

            <div class="row">
                @if (session('status'))
                    <div class="m12 s12 col">
                        <div class="card-panel light-green darken-1">
                            <div class="row">
                                <div class="col l8 white-text">
                                    <h5>Vielen Dank!</h5>
                                    <p>Ihre Nachricht wurde erfolgreich gesendet. <br>
                                        Wir kümmern uns gern um Ihre Anfrage und melden uns umgehend bei Ihnen.<br><br>

                                        Herzliche Grüße<br>
                                        Ihr Team Jingjing Asia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif

                @if ($errors->any())
                    <div class="m12 s12 col">
                        <div class="card-panel deep-orange darken-1">
                            <div class="row">
                                <div class="col l8 white-text">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
                    <div class="m12 s12 col print-error-msg" style="display:none">
                        <div class="card-panel deep-orange darken-1">
                            <div class="row">
                                <div class="col l8 white-text">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                <div class="input-field col m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="contact[name]" placeholder="Name" type="text" class="validate" name="contact[name]" required>
                    <label for="contact[name]" data-error="">Ihr Name (Pflichtfeld)</label>
                </div>

                    <div class="input-field col m12 l6">
                        <i class="material-icons prefix">phone</i>
                        <input id="contact[phone]" placeholder="Telefon" type="tel" class="validate"  name="contact[phone]">
                        <label for="contact[phone]">Ihre Telefonnummer</label>
                    </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="contact[email]" placeholder="E-Mail"  type="email" class="validate"  name="contact[email]" required>
                    <label for="contact[email]">Ihre E-Mail-Adresse (Pflichtfeld)</label>
                </div>

            </div>


            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">messages</i>
                    <textarea id="contact[message_body]"placeholder="Nachricht" class="materialize-textarea" name="contact[message_body]"></textarea>
                    <label for="contact[message_body]">Ihre Nachricht</label>
                </div>
            </div>

            {{--<div class="row">--}}
                {{--<div class="input-field col s12 m4">--}}
                    {{--{!! captcha_img() !!}--}}
                {{--</div>--}}

                {{--<div class="input-field col s12 m8">--}}
                    {{--<i class="material-icons prefix">info_outline</i>--}}
                    {{--<textarea id="captcha" class="materialize-textarea" name="captcha"></textarea>--}}
                    {{--<label for="captcha">Bitte geben Sie den angezeigten Text ein.</label>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="card-action right-align">
                <input type="reset"  class="btn-flat grey-text waves-effect no-padding">
                <button  class="btn red waves-effect waves-light " type="submit" name="action">Senden
                    <i class="material-icons right">send</i>
                </button>
            </div>
            </div>
        </form>


    </div>
</div> {{--END reservation-box--}}