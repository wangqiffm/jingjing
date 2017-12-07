<div class="row">
    <div class="col s12 valign-bg ">

        {{--reservation-box--}}
        <div class="valign-wrapper row reservation-box">


            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h5>Vielen Dank für Ihre Reservierung</h5>
                    <p>
                        Wir werden Ihre Anfrage schnellstmöglich zu bearbeiten.
                        Bitte beachten Sie, dass Ihre Reservierung erst dann Gültigkeit hat, wenn Sie von uns eine schriftliche Bestätigung erhalten haben.

                        Wir freuen uns darauf, Sie schon bald als Gast in unserem Hause zu begrüßen.

                        Ihr Team vom Jingjing Asia Restaurant</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Schließen</a>
                </div>
            </div>


            <div class="col card hoverable s10 pull-s1 l6 pull-l3 xl4 pull-xl1">
                <form class="" id="reservation-form" action="{{ route("reservation.send") }}" method="post">
                    {{ csrf_field() }}
                    <div class="card-content">


                        <span class="card-title"><h5 class="red-text text-darken-4">Reservierung</h5></span>

                        <div class="row">

                            <div class="input-field col s12">
                                <select name="reservation[people]">
                                    <option value="1" selected>1 Person</option>
                                    @for ($i = 2; $i <= 20; $i++)
                                        <option value="{{ $i }}">{{ $i }} Personen</option>
                                    @endfor
                                </select>

                                <label for="reservation[people]">Wie viele Personen ?<label>
                            </div>

                            <div class="input-field col s12">
                                <input placeholder="Placeholder" type="text" name="reservation[date]" class="datepicker">
                                <label for="reservation[date]">An welchem Tag ?</label>
                            </div>

                            <div class="input-field col s12">
                              <?php

                              $options = [];

                              $dt = Carbon\Carbon::create(2012, 1, 31, 11,30,0);
                              $end = Carbon\Carbon::create(2012, 1, 31, 22,0,0);
                              while($dt->lessThan($end)){
                                $options[$dt->format('H:i')] = $dt->format('H:i');
                                $dt->addMinutes(15);
                              }
                              ?>
                                <select name="reservation[time]">
                                    @foreach($options as $key => $option)
                                        <option value="{{ $key }}">{{ $option }}</option>
                                    @endforeach
                                </select>
                                <label for="reservation[time]">Uhrzeit</label>
                            </div>

                            <div class="input-field col s6">
                                <input placeholder="Name" type="text" name="reservation[name]" class="validate" required>
                                <label for="reservation[name]">Ihr Name</label>
                            </div>

                            <div class="input-field col s6">
                                <input placeholder="Telefon" type="text" name="reservation[phone]" class="validate" required>
                                <label for="reservation[phone]">Telefon</label>
                            </div>

                            <div class="input-field col s12">
                                <input placeholder="E-Mail" type="email" class="validate"  name="reservation[email]" required>
                                <label for="reservation[email]">Ihre E-Mail-Adresse</label>
                            </div>

                        </div>
                    </div>
                    <div class="card-action right-align">
                        <input type="reset" class="btn-flat grey-text waves-effect no-padding">
                        <button  class="btn green waves-effect waves-light " type="submit" name="action">Senden
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div> {{--END reservation-box--}}

    </div>
</div>