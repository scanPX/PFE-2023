import React from "react";
import "../../../../css/Consultation/NaissanceWork/NaissanceAutreC.css";

export default function NaissanceAutreC(){
    // function handleClick1(button) {
    //     const buttons = document.getElementsByName("langue1");
    //     for (let i = 0; i < buttons.length; i++) {
    //         if (buttons[i] !== button) {
    //             buttons[i].checked = false;
    //         }
    //     }
    // }

    // function handleClick2(button) {
    //     const buttons = document.getElementsByName("langue2");
    //     for (let i = 0; i < buttons.length; i++) {
    //         if (buttons[i] !== button) {
    //             buttons[i].checked = false;
    //         }
    //     }
    // }
    return(
        <form method="get" action="/Naissance" id='NomPre'>
            <label class="label">le Nom  الإسم العائلي</label>
            <input type='text'  name='inpNom' class="inpAutreC"/>

            <label class="label">Prénom الإسم الشخصي</label>
            <input type='text'  name='inpPre' class="inpAutreC"/>
            <br/>

            <button type="submit" id="recherche">إبحث</button><br/>
        </form>
    )
}