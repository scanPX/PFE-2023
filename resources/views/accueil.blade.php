<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Etat civil</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="">
        <style>

            html,body{
                height: 100%;
            }
            #AccueilApp{
                height: 100%;
            }
            #success{
                background-color: rgb(143, 244, 143);
                display: flex;
                justify-content: center;
            }
            #NotSuccess{
                display: flex;
                justify-content: center;
                background-color: red;
                color: white;
            }
            #deja{
                display: flex;
                justify-content: center;
                background-color: yellow;
                color: black;
            }
        </style>
        <!-- Scripts -->
        @routes
    </head>
    <body >
        @if(session()->get('message')=="successfully")
            <div id="success">
                {{ session()->get('message') }}
            </div>
            @elseif(session()->get('message')=="not successfully")
            <div id="NotSuccess">
                {{ session()->get('message') }}
            </div>

            @elseif(session()->get('message')=="le numero et l'année deja existe")
            <div id="deja">
                {{ session()->get('message') }}
            </div>
        @endif

        <div id="AccueilApp">
            
        </div>

    </body>
    @viteReactRefresh
    @vite(['resources/js/appAccueil.jsx'])
</html>