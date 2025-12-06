<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,body{
                height: 100%;
            }
        </style>

        @routes
    </head>
    <body id="body">
        <div class="div_Modif">

            <!-- partie 1 : les buttons -->
            <div class="div_btn_Modif">
                <br>
                <div>
                    @if(isset($datas[$id]['updated_at']))
                        @php echo '<strong>la dernier mise à jour en : </strong>'.$datas[$id]['updated_at']; @endphp
                    @endif
                </div>
                <br><br>
                <button class="buttons_Modif" id="up_id">Identification</button><br/>
                <button class="buttons_Modif" id="up_nom">Nom et Prenom</button><br/>
                <button class="buttons_Modif" id="up_date">Date</button><br/>
                <button class="buttons_Modif" id="up_lieu">Lieu</button><br/>
                <button class="buttons_Modif" id="up_parent">Parent</button><br/>
                <button class="buttons_Modif" id="up_deces">Décès</button><br/>
                <button class="buttons_Modif" id="back"><a id="to_Accueil" href="http://127.0.0.1:8000/Accueil">Retour</a></button><br/>
            </div>

            <!-- partie 2 : les fieldsets -->
            <div class="div_affiche_Modif" id="div_aff">
                @if(session()->get('message')=="successfully")
                    <div id="success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                    <!-- identification -->
                    <!-- style="display:none" = hide() -->

                    <form class="justify-content-center" method="get" id="identification" style="display:none">
                        <legend id="legendID">Identification</legend>
                        <div class="row">
                            <label htmlFor="annee">Année</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="annee_modif" class="form-control"/>
                        </div>
                        <br>
                        <div class="row">
                            <label  htmlFor="numero">Numero</label>&nbsp;
                            <input type="text" name="numero_modif" class="form-control" />
                        </div>
                        <br>
                        <button class="btn btn-info" type="submit">تحديث</button>
                    </form >

                    <!-- nom et prenom -->

                    <form class="justify-content-center" method="get" id="NomPre"  style="display:none">
                        <legend>Nom et Prenom</legend>
                        
                        <div class="">
                            <div class="row">
                                <label  htmlFor="nom">Nom</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="nom" class="form-control"/>
                            </div>
                            <div class="row">
                                <label  htmlFor="prenom">Prenom</label>&nbsp;
                                <input type="text" name="prenom" class="form-control" />
                            </div>
                        </div>

                        <div class="nom_prenom">
                            <div class="row">
                                <input type="text" name="ar_nom" class="form-control" />&nbsp;
                                <label  htmlFor="nom" >الإسم العائلي</label>
                            </div>
                            <div class="row">
                                <input type="text" name="ar_prenom" class="form-control" />&nbsp;
                                <label  htmlFor="prenom" >الإسم الشخصي</label>
                            </div>   
                        </div>
                        <button class="btn btn-info" type="submit">تحديث</button>
                    </form >

                    <!-- Date -->

                    <form class="justify-content-center" method="get" id="Date" style="display:none">
                        <legend>Date</legend>

                        <div class="date">
                            <div class="row">
                                <label  htmlFor="nele">né le</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="ne_le" class="form-control"/>
                            </div>
                            <div class="row">
                                <label  htmlFor="en">en</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="en" class="form-control" />
                            </div>
                            <div class="row">
                                <label  htmlFor="corresp">corresp. au</label>
                                &nbsp;&nbsp;
                                <input type="text" name="corresp_au" class="form-control"/>
                            </div>
                        </div>
                        <div class="date">
                            <div class="row">
                                <input type="text" name="ar_ne_le" class="form-control"/>
                                &nbsp;&nbsp;
                                <label  htmlFor="ar_nele" >ولد يوم</label>
                            </div>
                            <div class="row">
                                <input type="text" name="ar_en" class="form-control" />
                                &nbsp;&nbsp;
                                <label  htmlFor="ar_en">سنة</label>
                            </div>
                            <div class="row">
                                <input type="text" name="ar_corresp_au" class="form-control"/>
                                &nbsp;&nbsp;
                                <label  htmlFor="ar_corresp_au">الموافق ل</label>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">تحديث</button>
                    </form >

                    <!-- Lieu -->

                    <form class="justify-content-center" method="get" id="Lieu" style="display:none">
                        <legend>Lieu</legend>

                        <div class="row">
                            <label  htmlFor="a">à</label>
                            &nbsp;&nbsp;
                            <input type="text" name="lieu" class="form-control"/>
                        </div>

                        <select name="nationnalite" id="nationnalité">
                            <option value="">nationnalité</option>
                            <option value="marocaine">marocaine</option>
                            <option value="francais">francais</option>
                            <option value="espaniol">espaniol</option>
                            <option value="pays_bas">pays bas</option>
                            <option value="USA">USA</option>
                        </select>

                        <div class="row">
                            <input type="text" name="ar_lieu" class="form-control" />
                            &nbsp;&nbsp;
                            <label  htmlFor="ar_lieu">ب</label>
                        </div>
                        <button class="btn btn-info" type="submit">تحديث</button>
                    </form >

                    <!-- parent -->

                    <form class="justify-content-center" method="get" id="parent"  style="display:none">
                        <legend>Parent</legend>

                        <div class="parent">
                            <div class="row">
                                <label  htmlFor="Fils_de">Fils de</label>
                                &nbsp;
                                <input type="text" name="fils_p" class="form-control"/>
                            </div>
                            <div class="row">
                                <label  htmlFor="ar_en">et de</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="fils_m" class="form-control"/>
                            </div>
                        </div>
                        <div class="parent">
                            <div class="row">
                                <input type="text" name="ar_fils_p" class="form-control" />
                                &nbsp;&nbsp;
                                <label  htmlFor="ar_nele">والده هو</label>
                            </div>
                            <div class="row">
                                <input type="text" name="ar_fils_m" class="form-control" />
                                &nbsp;&nbsp;
                                <label  htmlFor="ar_en">والدته هي</label>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">تحديث</button>
                    </form >

                    <!-- Décès -->

                    <form class="justify-content-center" method="get" id="Deces" style="display:none">
                        <legend>Décès</legend>

                        <div class="row">
                            <label  htmlFor="Mention_marginale_décès">Mention marginale décès</label>
                            &nbsp;&nbsp;
                            <input type="text" name="deces" class="form-control" />
                        </div>
                        <div class="row">
                            <input type="text" name="ar_deces" class="form-control" />
                            &nbsp;&nbsp;
                            <label  htmlFor="ar_en"> بيان الوفاة المشار إليه في طرة الرسم</label>
                        </div>
                        <button class="btn btn-info" type="submit">تحديث</button>
                    </form >
                
            </div>
        </div>
    </body>
    <!-- jQuery -->
    <script src="/jquery/jquery-3.6.4.js"></script>   
        <script>
            
            $("#up_id").click(function(){
                $("#identification").toggle();

                $("#NomPre").hide();
                $("#Date").hide();
                $("#Lieu").hide();
                $("#parent").hide();
                $("#Deces").hide();

                $("#success").hide();
            })
            $("#up_nom").click(function(){
                $("#NomPre").toggle();

                $("#identification").hide();
                $("#Date").hide();
                $("#Lieu").hide();
                $("#parent").hide();
                $("#Deces").hide();

                $("#success").hide();
            })
            $("#up_date").click(function(){
                $("#Date").toggle();

                $("#identification").hide();
                $("#NomPre").hide();
                $("#Lieu").hide();
                $("#parent").hide();
                $("#Deces").hide();

                $("#success").hide();
            })
            $("#up_lieu").click(function(){
                $("#Lieu").toggle();

                $("#identification").hide();
                $("#NomPre").hide();
                $("#Date").hide();
                $("#parent").hide();
                $("#Deces").hide();

                $("#success").hide();
            })
            $("#up_parent").click(function(){
                $("#parent").toggle();

                $("#identification").hide();
                $("#NomPre").hide();
                $("#Lieu").hide();
                $("#Date").hide();
                $("#Deces").hide();

                $("#success").hide();
            })
            $("#up_deces").click(function(){
                $("#Deces").toggle();

                $("#identification").hide();
                $("#NomPre").hide();
                $("#Lieu").hide();
                $("#parent").hide();
                $("#Date").hide();

                $("#success").hide();
            })
        </script>  
    @vite(['resources/css/Modifications.css'])
</html>