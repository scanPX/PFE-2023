<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Etat Civil Naissance</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="">
        <style>
            html{
                height: 100%;
            }
            body{
                height: 100%;
            }
            #appNaissance{
                height: 100%;
                
            }
        </style>
        <!-- Scripts -->
        @routes
    </head>
    <body >
        <div id="appNaissance">
            
        </div>
        @php
            $annee_inp = Request::input('inpYear');
            $numero_inp = Request::input('inpNum');
        @endphp
        @if(Request::isMethod('get') && Request::has('inpNum'))
            @foreach($datas as $data)
                @if($numero_inp == $data['numero'] && $annee_inp == $data['annee'])
                    <script>
                        window.location.href = "{{ route('Extrait', ['dataId' => $data['id']]) }}";
                    </script>
                @endif
            @endforeach                                                                                                                                             
        @endif

        @php
            $nom_inp = Request::input('inpNom');
            $prenom_inp = Request::input('inpPre');
        @endphp
        @if(Request::has('inpNom') && Request::has('inpPre'))
            @foreach($datas as $data)
                @if($prenom_inp == $data['prenom'] && $nom_inp == $data['nom'] or $prenom_inp == $data['ar_prenom'] && $nom_inp == $data['ar_nom'])
                            <script>
                                window.location.href = "{{ route('Extrait', ['dataId' => $data['id']]) }}";
                            </script>
                @endif
            @endforeach                                                                                                                                             
        @endif
        <?php 
            

                //echo $data[0]['numero'];
        ?>
    </body>
    @viteReactRefresh
    @vite(['resources/js/appNaissance.jsx'])
</html>