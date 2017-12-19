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
    @yield('after_styles')
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


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

<script src="{{asset('unveil/jquery.unveil.js')}}"></script>


<script src="js/init.js"></script>
<script>

    $(function(){



        async_form('#reservation-form','#modal1','{{route('reservation.send')}}');
        async_form('#contact-form','#modal2','{{route('contact.send')}}');

        function async_form(form_id , modal_query, url){
            $(modal_query).modal();

            $(form_id).on('submit',function(e){
                $.ajaxSetup({
                    header:$('meta[name="csrf-token"]').attr('content')
                });
                var sb = $('[type=submit]', $(this));
                sb.toggleClass('disabled');
                var print_error_msg =  $(".print-error-msg", $(this));
                print_error_msg.hide();

                $.ajax({
                    type:"POST",
                    url:url,
                    data:$(this).serialize(),
                    dataType: 'json',
                    success: function(data){
                        $(modal_query).modal('open');
                        sb.toggleClass('disabled');

                    },
                    error: function(data){
                        sb.toggleClass('disabled');


                        $.each(data.responseJSON.errors, function (key, value){
                            var name = key;
                            if(key.indexOf('.') >-1){
                                name =  key.split('.').join('[') +']';
                            }
                            $('label[for="'+name+'"]').attr('data-error',value.join('<br>'));
                            $('[name="'+name+'"]').toggleClass('invalid');

                        });

                        print_error_msg.find("ul").html('');
                        print_error_msg.css('display','block');
                        $.each( data.responseJSON.errors, function( key, value ) {
                            print_error_msg.find("ul").append('<li>'+value+'</li>');
                        });

                    }
                });

                e.preventDefault();
            });
        }


    });
</script>

@yield('bottom_scripts')
</body>
</html>