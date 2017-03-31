<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{ url('api/list/country') }}">country</a>
                    <a href="{{ url('api/list/department') }}">department</a>
                    <a href="{{ url('api/list/municipality') }}">municipality</a>
                    <a href="{{ url('api/list/area') }}">area</a>
                    <a href="{{ url('api/list/service') }}">service</a>
                    <a href="{{ url('api/list/identification') }}">identification</a>
                    <a href="{{ url('api/list/sex') }}">sex</a>
                    <a href="{{ url('api/list/nationality') }}">nationality</a>
                    <a href="{{ url('api/list/profession') }}">profession</a>
                    <a href="{{ url('api/list/workstation') }}">workstation</a>
                    <a href="{{ url('api/list/postal_code') }}">postal_code</a>
                    <a href="{{ url('api/list/academic_level') }}">academic_level</a>
                    <button id="publication">actualizar</button>
                </div>

            </div>
        </div>
    </body>
</html>
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

<script src="{{ asset('js/jquery-3.1.1.js') }}"></script>

<script>
     $(document).ready(function(){
        $("#publication").click(function(){
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: 'localhost:81/Academy_API/public/api/list/sex/1',
                type: "PUT",
                dataType: 'json',
            });

            $.ajax({
                data: { 'description': 'Masculino'},
                success: function(data){
                    if(data.status == 'success'){
                        alert(data.msg);
                    }
                }
            });
        });    
    });
</script>
