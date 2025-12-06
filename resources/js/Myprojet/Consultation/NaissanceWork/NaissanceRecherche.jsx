import React from "react";
import "../../../../css/Consultation/NaissanceWork/NaissanceRecherche.css";

export default function NaissanceRecherche(){
    function handleClickR(button) {
        const buttons = document.getElementsByName("radioR");
        for (let i = 0; i < buttons.length; i++) {
            if (buttons[i] !== button) {
                buttons[i].checked = false;
            }
        }
    }

    
    return (
        <div id="NRecherche">
            <div id="NRechercheInpt">
                عربي
                <input type="radio" class="inpRechClass" name="radioR" onclick={handleClickR}/>&nbsp;
                Francais
                <input type="radio" class="inpRechClass" name="radioR" onclick={handleClickR}/>&nbsp;
                Bilingue
                <input type="radio" class="inpRechClass" name="radioR" onclick={handleClickR}/>&nbsp;
            </div><br/>

            <div id="NRechercheBtn">
                <button class="btnCherch">imprimer</button><br/>
                <button class="btnCherch">Nouvelle Recherche</button>
            </div>
        </div>
    )
}