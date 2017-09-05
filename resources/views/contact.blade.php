@extends('layouts.app')

@section('title', 'Contact')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div id="index-banner" class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">


            <br><br>
            <h1 class="header center white-text text-lighten-2">德国是您进驻欧洲的首选</h1>
            <div class="row center">
                <h5 class="header col s12 light">德达商业服务愿为您在德国的投资创业提供最专业、最全面的服务。</h5>
            </div>
            <div class="row center">
                <a href="#!" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>



        </div>
        <div class="parallax"><img src="img/a.jpg" alt="Unsplashed background img 1"></div>
    </div>

<div class="container">
    <div class="section">
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Last Name</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone">Telephone</label>
                </div>
            </div>
        </form>
    </div>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">您的留言</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection