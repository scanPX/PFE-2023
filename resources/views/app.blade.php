<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Etat civil</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="">
        
        <style>
            #error_home{
                background-color: red ;
                color: white ;
                display: flex;
                justify-content: center;
            }
            html,body{
                height: 100%;
            }
        </style>
        <!-- Scripts -->
        @viteReactRefresh
        @vite(['resources/js/app.jsx'])
        
    </head>
    <body >

        <div id="app">
            <!-- Home page -->
        </div>

        <div>
            <div>
                @php
                    use Illuminate\Routing\Redirector;

                    $name_inp = Request::input('name_inp');
                    $password_inp = Request::input('password_inp');
                @endphp
                    @if(Request::input('name_inp') <> "" && Request::input('password_inp') <> "")
                    
                        @foreach($NamePassws as $NamePassw)
                            @if($NamePassw->name == $name_inp && $NamePassw->password == $password_inp)
                            <script>
                                window.location.href = "{{ route('accueil') }}";
                            </script>
                                break;
                            @endif
                        @endforeach

                    @endif

    </body>
</html>