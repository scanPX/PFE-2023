import React from "react";
import '../../../css/Modification/Modification.css';

export default function Modification(){
    return(
        <div id="Modification">

            <form method='get' class="subscribe">
                <p>chercher</p><br/>
                <input type="text" name="annee" class="subscribe-input" placeholder="Annee"/>
                <br/><br/>
                <input type="text" name="numero" class="subscribe-input" placeholder="Numero"/>

                <button type='submit' class="submit-btn">بحث</button>
            </form>
            
        </div>
    );
}