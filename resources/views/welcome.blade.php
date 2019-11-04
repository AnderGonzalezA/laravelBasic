<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TAREA 4.1
                </div>
                <div class="links">
                    <a href="{{route('contacto')}}">a)Contacto</a>
                    <a href="{{route('blog',1)}}">b)Blog</a>
                    <a href="{{route('blogConNombre',[1,'Ander'])}}">c)Blog con nombre</a>
                </div>
                <div class="title m-b-md">
                    TAREA 4.2
                </div>
                <div class="links">
                    <a href="{{route('saludo')}}">a)Saludo</a>
                    <a href="{{route('saludoConNombre','Mikel')}}">b)Saludo con nombre</a>
                    <a href="{{route('saludoConNombreColor',['Mikel','FF5733'])}}">c)Saludo con nombre y color</a>
                </div>
                <div class="title m-b-md">
                    TAREA 4.3
                </div>
                <div class="links">
                    <a href="{{route('formularioGet')}}">a)Formulario get</a>
                    <a href="{{route('formularioPost')}}">b)Formulario post</a>
                    <a href="{{route('formularioPost2')}}">b)Formulario post misma vista</a>
                </div>
            </div>
        </div>
    </body>
</html>
