<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Naissance Extrait</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href=""> -->
        <!-- <link rel="stylesheet" href=""> -->
        <style>
            html{
                height: 100%;
            }
            body{
                height: 100%;
            }
            #content{
                background-color: #EAE7DC;/*#EFE2BA #DEF2F1*/

                width:100%;
                height: 100%;

                border-radius: 15px;
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            #retour{
                text-decoration: none;
                color:white;
            }
            /* extrait */
            #Extrait{
                width: 37%;
                height: 95%;
                background-color: rgb(54, 153, 54);
            }

            #headerEx{
                display: flex;
                justify-content: space-around;
            }

            .head{
                font-size: 9px;
            }

            #body2{
                display: flex;
                justify-content: space-around;
            }

            #body3{
                display: flex;
                justify-content: space-between;
            }
            #body4{
                display: flex;
                justify-content: space-around;
            }

            .body4Size{
                font-size: 8px;
            }

            #body5{
                display: flex;
                justify-content: space-around;
            }
            #body6{
                display: flex;
                justify-content: space-around;
            }
            .body6size{
                font-size: 9px;
            }

            /* Les liens */
            .arrow-link {
              display: inline-block;
              padding: 10px 20px;
              background-color: #1F2937;
              color: #fff;
              font-size: 16px;
              text-decoration: none;
              border-radius: 5px;
            }

            .arrow-link-left:before {
              content: "\2190\00a0"; /* Flèche vers la gauche */
            }

            .arrow-link-right:after {
              content: "\00a0\2192"; /* Flèche vers la droite */
            }

            .arrow-link-left:before,
            .arrow-link-right:after {
              font-size: 20px;
              vertical-align: middle;
              margin-right: 10px;
              opacity: 0.8;
            }

            /* imprimer code */
            

        </style>
        <!-- Scripts -->
        @routes
        
    </head>
    <body >
        <div id="content">
             <button class="arrow-link arrow-link-left"><a href="/Naissance" id="retour" >retour</a></button>
            <div id="Extrait">
                        <!-- {/* header */} -->
                    <div id="headerEx">
                        <div id='headerEx1'>
                            <p class="head" >
                                <strong>ROYAUME DU MAROC</strong><br/>
                                <strong>MINISTERE DE L'INTERIEUR</strong><br/>
                                PROVINCE TAZA<br/>
                                COMMUNE D'AKNOUL<br/>
                                BUREAU DE L'ETAT CIVIL<br/>
                            </p>

                        </div>

                        <div id='headerEx2'>
                            <p class="head" align="center">
                                طبقا  للمرسوم رقم 2.99.665 بتاريخ 2 شعبان 1423 <br/>
                                الموافق ل9 اكتوبر 2002 لتطبيق القانون 37.99 <br/>

                            décret N°:2.99.665 du<br/>
                            2chaàbane1423(9octobre2002)<br/>
                            Pour application de la loi 37.99
                            </p>
                        </div>

                        <div id='headerEx3'>
                            <p class="head" align="right">
                               المملكة المغربية <br/>
                                الوزارة الداخلية <br/>
                               اقليم تازة<br/>
                                جماعة أكنول<br/>
                                مكتب الحالة المدنية
                            </p>
                        </div>
                    </div>


                        <!-- {/* body */}
                            {/* body1 */} -->
                            <h3 align="center">
                                نسخة موجزة من رسم الولادة <br/>
                                EXTRAIT D'ACTE DE NAISSANCE
                            </h3>

                             <!-- body2  -->
                            <div id='body2'>
                                <div>
                                    <strong>
                                        Année &nbsp;
                                        <!-- {
                                            //annee
                                        } -->
                                        @php echo $data['annee']  @endphp
                                    </strong>
                                    gre
                                </div>

                                <div>
                                    Acte N°.&nbsp;
                                    <strong>
                                        <!-- {
                                            // N° acte
                                        } -->
                                        @php echo $data['numero']  @endphp
                                    </strong>
                                    &nbsp;
                                    عقد رقم
                                </div>

                                <div>
                                    <strong>
                                        سنة&nbsp;
                                        <!-- {
                                        //Année
                                        } -->
                                        @php echo $data['annee']  @endphp
                                    </strong>    
                                    م
                                </div>
                            </div><br/>

                            <!-- {/* body3 */} -->
                            <div id='body3'>
                                <div align="left">
                                    &nbsp;  Prénom &nbsp;
                                    <strong>
                                        @php echo $data['prenom'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  Nom de famille &nbsp;
                                    <strong>
                                        @php echo $data['nom'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  né le &nbsp;
                                    <strong>
                                        @php echo $data['ne_le'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  en &nbsp;
                                    <strong>
                                        @php echo $data['en'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  corresp au &nbsp;
                                    <strong>
                                        @php echo $data['corresp_au'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  à &nbsp;
                                    <strong>
                                        @php echo $data['lieu'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  Nationnalité &nbsp;
                                    <strong>
                                        @php echo $data['nationnalite'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  fils de &nbsp;
                                    <strong>
                                        @php echo $data['fils_p'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  et de &nbsp;
                                    <strong>
                                        @php echo $data['fils_m'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    &nbsp;  Mention marginale<br/>
                                    
                                    &nbsp;(décès) &nbsp;
                                    <strong>
                                        @php echo $data['deces'] @endphp
                                    </strong>
                                     
                                </div>

                                <div align="right">
                                    الاسم  الشخصي &nbsp;
                                    <strong>
                                        @php echo $data['ar_prenom'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    الاسم العائلي &nbsp;
                                    <strong>
                                        @php echo $data['ar_nom'] @endphp <br/>
                                    </strong>
                                    
                                    
                                    ولد يوم &nbsp;
                                    <strong>
                                        @php echo $data['ar_ne_le'] @endphp <br/>
                                    </strong>
                                    

                                    سنة &nbsp;
                                    <strong>
                                        @php echo $data['ar_en'] @endphp <br/>
                                    </strong>
                                    

                                    الموافق ل &nbsp;
                                    <strong>
                                        @php echo $data['ar_corresp_au'] @endphp <br/>
                                    </strong>
                                    

                                    ب &nbsp;
                                    <strong>
                                        @php echo $data['ar_lieu'] @endphp <br/>
                                    </strong>
                                    

                                    جنسيته &nbsp;
                                    <strong>
                                         @php echo $data['ar_nationnalite'] @endphp <br/>
                                    </strong>
                                   

                                    والده هو &nbsp;
                                    <strong>
                                        @php echo $data['ar_fils_p'] @endphp <br/>
                                    </strong>
                                    

                                    والدته هي &nbsp;
                                    <strong>
                                        @php echo $data['ar_fils_m'] @endphp <br/>
                                    </strong>
                                    
                                    بيان الوفاة المشار اليه في طرة الرسم  &nbsp;
                                    <strong>
                                        @php echo $data['ar_deces'] @endphp <br/>
                                    </strong>
                                    
                            
                                </div>
                            </div><br/>

                            <!-- {/* body4 */} -->
                            <div id="body4">
                                <div class="body4Size" align="left">
                                    Extrait certifie conforme aux registres de l'état civil , par nous <br/>
                                    Officier de l'état civil de   COMMUNE D'AKNOUL 
                                </div>

                                <div class="body4Size" align="center">
                                    Soussigné<br/>
                                    جماعة أكنول
                                </div>
                                <div class="body4Size" align="right">
                                    نشهد بصفتنا ضابطا للحالة  المدنية نحن الموقع اسفله 
                                    بمطابقة <br/>هذه النسخة لما هو مضمن في سجلات الحالة المدنية لمكتب 
                                </div>
                            </div><br/>

                            <!-- {/* body5 */} -->
                            <div id="body5">
                                <div>
                                    fait à &nbsp; <strong>AKNOUL</strong>
                                </div>

                                <div>
                                    Le &nbsp; 
                                    <strong>
                                        <!-- {
                                             // today date 
                                           currentDate()
                                        } -->
                                        @php echo date('Y-m-d'); @endphp
                                    </strong>
                                    في
                                </div>

                                <div>
                                    و حرر ب <strong>أكنول</strong>
                                </div>
                            </div><br/>
                            <!-- {/* body6 */} -->
                            <div id="body6">
                                <div class="body6size" align="center">
                                    ضابط الحالة المدنية <br/>
                                    Officier de l'état civil
                                </div>
                                <div class="body6size" align="center">
                                    طابع مكتب الحالةالمدنية <br/>
                                    Sceau du Bureau de l'état civil
                                </div>
                            </div>
                </div>
                
                
                <button class="arrow-link arrow-link-right" onclick="printContent()">imprimer</button>
        </div>
    </body>
    <script src="/jquery/jquery-3.6.4.js"></script>  
    <script>
            function printContent() {
        // Get the content element
        var Extrait = document.getElementById("Extrait");

        // Create a new window for printing
        var printWindow = window.open('', '', 'height=500,width=500');

        // Write the content to the new window
        printWindow.document.write('<html><head><title>Impression</title>');
        printWindow.document.write('<style>#Extrait{width: 37%;height: 95%;background-color: rgb(54, 153, 54);}#headerEx{display: flex;justify-content: space-around;}.head{font-size: 9px;}#body2{display: flex;justify-content: space-around;}#body3{display: flex;justify-content: space-between;}#body4{display: flex;justify-content: space-around;}.body4Size{font-size: 8px;}#body5{display: flex;justify-content: space-around;}#body6{display: flex;justify-content: space-around;}.body6size{font-size: 9px;}</style></head><body>');
        printWindow.document.write(Extrait.innerHTML);
        printWindow.document.write('</body></html>');

        // Print the window
        printWindow.print();
    }
    </script>
    @viteReactRefresh
    <!-- @vite(['resources/js/app.jsx']) -->
</html>
