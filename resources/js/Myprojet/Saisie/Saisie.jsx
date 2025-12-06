import React, { useState } from 'react';
import '../../../css/Saisie/Saisie.css';

export default function Saisie(){
    
    // const [inputValues, setInputs] = useState({
    //     annee: '',
    //     numero: '',

    //     prenom: '',
    //     nom: '',

    //     ne_le: '',
    //     en: '',
    //     corresp_au: '',

    //     lieu: '',
    //     nationnalite: '',

    //     fils_p: '',
    //     fils_m: '',

    //     deces: '',

    //     ar_prenom: '',
    //     ar_nom: '',

    //     ar_ne_le: '',
    //     ar_en: '',
    //     ar_corresp_au: '',

    //     ar_lieu: '',
    //     // ar_nationnalite: '',

    //     ar_fils_p: '',
    //     ar_fils_m: '',

    //     ar_deces: '',
    //   });

    //   const handleSubmit = (event) => {
    //     event.preventDefault();
        
    //     // Check if any input values are empty
    //     if (Object.values(inputValues).some((value) => value === '')) {
    //       alert('Veuillez remplir tous les champs.');
    //       return;
    //     }
        
    //     // If all input values are non-empty, send data to database
    //     // ... code to send data to database ...
    //   };
    //   const handleInputChange = (event) => {
    //     const { name, value } = event.target;
    //     setInputValues((prevState) => ({
    //       ...prevState,
    //       [name]: value
    //     }));
    //   };

/* -------------------------------------------------------------------------- */
    // const [annee, setAnnee] = useState('');
    // const [numero, setNumero] = useState('');

    // const [prenom, setPrenom] = useState('');
    // const [nom, setNom] = useState('');

    // const [ne_le, setNe_le] = useState('');
    // const [en, setEn] = useState('');
    // const [corresp_au, setCorresp_au] = useState('');

    // const [lieu, setLieu] = useState('');
    // const [nationnalite, setNationnalite] = useState('');

    // const [fils_p, setFils_p] = useState('');
    // const [fils_m, setFils_m] = useState('');

    // const [deces, setDeces] = useState('');

    // const [ar_prenom, setAr_prenom] = useState('');
    // const [ar_nom, setAr_nom] = useState('');
    // const [ar_ne_le, setAr_ne_le] = useState('');
    // const [numero, setNumero] = useState('');
    
    return(
        <form method="get" action="/Saisie" id="form">
        <br/>
        <br/>
        <fieldset id="identification">
            <legend id="legendID">Identification</legend>
            <div className="rowLI">
                <label className="labelModif" htmlFor="annee">Année</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="annee" className="inpt"/>
            </div>
            <div className="rowLI">
                <label className="labelModif" htmlFor="numero">Numero</label>&nbsp;
                <input type="text" name="numero" className="inpt" />
            </div>
        </fieldset>

        <br/>

        <fieldset id="NomPre" >
            <legend>Nom et Prenom</legend>

            <div className="nom_prenom">
                <div className="rowLI">
                    <label className="labelModif" htmlFor="nom">Nom</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="nom" className="inpt"/>
                </div>
                <div className="rowLI">
                    <label className="labelModif" htmlFor="prenom">Prenom</label>&nbsp;
                    <input type="text" name="prenom" className="inpt" />
                </div>
            </div>

            <div className="nom_prenom">
                <div className="rowLI">
                    <input type="text" name="ar_nom" className="inpt" />&nbsp;
                    <label className="labelModif" htmlFor="nom" >الإسم العائلي</label>
                </div>
                <div className="rowLI">
                    <input type="text" name="ar_prenom" className="inpt" />&nbsp;
                    <label className="labelModif" htmlFor="prenom" >الإسم الشخصي</label>
                </div>   
            </div>
        </fieldset>

        <br/>

        <fieldset id="Date">
            <legend>Date</legend>

            <div className="date">
                <div className="rowLI">
                    <label className="labelModif" htmlFor="nele">né le</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="ne_le" className="inpt"/>
                </div>
                <div className="rowLI">
                    <label className="labelModif" htmlFor="en">en</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="en" className="inpt" />
                </div>
                <div className="rowLI">
                    <label className="labelModif" htmlFor="corresp">corresp. au</label>
                    &nbsp;&nbsp;
                    <input type="text" name="corresp_au" className="inpt"/>
                </div>
            </div>
            <div className="date">
                <div className="rowLI">
                    <input type="text" name="ar_ne_le" className="inpt"/>
                    &nbsp;&nbsp;
                    <label className="labelModif" htmlFor="ar_nele" >ولد يوم</label>
                </div>
                <div className="rowLI">
                    <input type="text" name="ar_en" className="inpt" />
                    &nbsp;&nbsp;
                    <label className="labelModif" htmlFor="ar_en">سنة</label>
                </div>
                <div className="rowLI">
                    <input type="text" name="ar_corresp_au" className="inpt"/>
                    &nbsp;&nbsp;
                    <label className="labelModif" htmlFor="ar_corresp_au">الموافق ل</label>
                </div>
            </div>
        </fieldset>

        <br/>

        <fieldset id="Lieu">
            <legend>Lieu</legend>

            <div className="rowLI">
                <label className="labelModif" htmlFor="a">à</label>
                &nbsp;&nbsp;
                <input type="text" name="lieu" className="inpt"/>
            </div>

            <select name="nationnalite" id="nationnalité">
                <option value="">nationnalité</option>
                <option value="marocaine">marocaine</option>
                <option value="francais">francais</option>
                <option value="espaniol">espaniol</option>
                <option value="pays_bas">pays bas</option>
                <option value="USA">USA</option>
            </select>

            <div className="rowLI">
                <input type="text" name="ar_lieu" className="inpt" />
                &nbsp;&nbsp;
                <label className="labelModif" htmlFor="ar_lieu">ب</label>
            </div>
        </fieldset>

        <br/>

        <fieldset id="parent">
            <legend>Parent</legend>

            <div className="parent">
                <div className="rowLI">
                    <label className="labelModif" htmlFor="Fils_de">Fils de</label>
                    &nbsp;
                    <input type="text" name="fils_p" className="inpt"/>
                </div>
                <div className="rowLI">
                    <label className="labelModif" htmlFor="ar_en">et de</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="fils_m" className="inpt"/>
                </div>
            </div>
            <div className="parent">
                <div className="rowLI">
                    <input type="text" name="ar_fils_p" className="inpt" />
                    &nbsp;&nbsp;
                    <label className="labelModif" htmlFor="ar_nele">والده هو</label>
                </div>
                <div className="rowLI">
                    <input type="text" name="ar_fils_m" className="inpt" />
                    &nbsp;&nbsp;
                    <label className="labelModif" htmlFor="ar_en">والدته هي</label>
                </div>
            </div>
        </fieldset>

        <br/>

        <fieldset id="Deces">
            <legend>Décès</legend>

            <div className="rowLI">
                <label className="labelModif" htmlFor="Mention_marginale_décès">Mention marginale décès</label>
                &nbsp;&nbsp;
                <input type="text" name="deces" className="inpt" />
            </div>
            <div className="rowLI">
                <input type="text" name="ar_deces" className="inpt" />
                &nbsp;&nbsp;
                <label className="labelModif" htmlFor="ar_en"> بيان الوفاة المشار إليه في طرة الرسم</label>
            </div>
        </fieldset>

        <br/><br/>

        <div id="DivSubmit">
            <input type="submit" id="submit"/>
        </div>
    </form>
    );
}