import '../../../css/Consultation/Naissance.css';

import React, { useState } from "react";
import Consultation from "./Consultation";

import NaissanceAutreC from "./NaissanceWork/NaissanceAutreC";
import imgP2 from "./img_N2.jpg"


export default function Naissance(){

    const [contentAutreC, setContent] = useState("");
    // if i click in Autre Critières it will be show 
    function nomPre(){

        if (contentAutreC) {
            setContent("");
        } 
        else {
            setContent(() => {
                return(
                    <NaissanceAutreC/>
                )
            })
        }
    }


        
    // const [RechercheState, setRechercheState] = useState("");
    // function RechercheFct(){

    //     if (RechercheState) {
    //         setRechercheState("");
    //     }
    //     else{
        
    //         setRechercheState(() => {
    //             return(
    //             <NaissanceRecherche/>
    //             );
    //         })
    //     }
    // }

    return (
        
        <div class="containreN">
                <button class='arrow-link arrow-link-left'>
                    <a href='/Accueil' id='link_to_Accueil'>retour</a>
                </button>

            <div id='Naissance'>
            {/* Partie 1 */}
            <div id='part1'>
                <form method='get' id='formAN' action="/Naissance">
                    <br/>
                    <div id="DivInpNPere">
                        <div class="DivInpN">
                            <label class="label">l'Année</label>
                            <input type="year" class="inputN" name='inpYear'/>
                        </div><br/>

                        <div class="DivInpN">
                            <label class="label">Numéro </label>
                            <input type="text" class="inputN" name='inpNum'/>
                        </div>
                    </div>
                    <br/><br/>
                    <input type='submit' class='btnN' value="إبحث"/>
                </form>
            
                <button class='btnN'  id="btnActive" onClick={nomPre} >
                            Autre Critières
                </button>
                            {/* {{$annee}} */}
            {
                // state => if i click in button Autre Critières => show 
                // function nomPre() { nom prenom input }
                contentAutreC
            }
            </div>

            {/* Partie 2 */}
            <div id='part2'>
                <img id='img_p2' src={imgP2} width="100%" height="80%"/>
            </div>

            </div>
            <button class='arrow-link arrow-link-right'>
                <a href='/' id='link_to_Accueil'>quitter</a>
            </button>
        </div>
    

    );
}

