<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Jingjing Asia Restaurant - @yield('title')</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('noUiSlider')}}/nouislider.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="@yield('body_class')">

@component('nav')

@endcomponent

@section('sidebar')

@show

@if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}">
        {!! session('message.content') !!}
    </div>
@endif

    @yield('content')

@component('footer')

@endcomponent
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
{{--<script src="js/app.js"></script>--}}
<script src="js/materialize.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/packery@2/dist/packery.pkgd.min.js"></script>

<script src="{{asset('noUiSlider')}}/nouislider.min.js"></script>

<script src="js/init.js"></script>
<script>

    $(function(){

        $('.modal').modal();

        $('#reservation-form').on('submit',function(e){
            $.ajaxSetup({
                header:$('meta[name="csrf-token"]').attr('content')
            });

            $('#send').toggleClass('disabled');
//            $('#loader').toggleClass('hide');

            $('#modal1').modal('open');

            $.ajax({
                type:"POST",
                url:'{{route('reservation.send')}}',
                data:$(this).serialize(),
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    $('#send').toggleClass('disabled');

//                    $.when($('#reservation-form').fadeOut(500))
//                        .done(function() {
//                            $('#send').toggleClass('disabled');
////                            $('#loader').toggleClass('hide',500);
////                            $('#reservation .hide').toggleClass('hide',500);
//                        });

                },
                error: function(data){

                }
            });

            e.preventDefault();
        });
    });
</script>

</body>
</html>