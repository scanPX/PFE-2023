import React from "react";
import { BrowserRouter as Router, Link, Routes, Route  } from "react-router-dom";
import '../../../css/Accueil/Accueil.css';


import Consultation from "../Consultation/Consultation";
import Naissance from "../Consultation/Naissance";

import Modification from "../Modification/Modification";
import Saisie from "../Saisie/Saisie";
// import image
import logoExtrait2 from "./logoExtrait2.jpg";
import img1 from "./img_projet/1Test.jpg";
import img2 from "./img_projet/2Test.jpg";
import img3 from "./img_projet/3Test.jpg";
import img4 from "./img_projet/4Test.jpg";
import img5 from "./img_projet/5Test.jpg";
import img6 from "./img_projet/6Test.jpg";



export default function Accueil(){
    
    return(
        <div id="containre">
            <Router>
                <div id="LinksAccueil">
                    <div id="img">
                        <Link  to="/Accueil">
                            <img src={logoExtrait2} width="20%" height="100%"/> <br/>
                        </Link>
                    </div>
                    <div id="Dlinks">
                        <Link className="Links" to="Accueil/Consultation" >Consultation</Link><br/>
                        <Link className="Links" to="/Modification" >Modification</Link><br/>
                        <Link className="Links" to="/Saisie">Saisie</Link><br/>
                        <a className="Links" id="quitter" href="/">Quitter</a><br/>
                    </div>
                </div>
                <Routes>
                    <Route exact path="Accueil/Consultation" element={<Consultation/>} ></Route>
                    <Route exact path="/Modification" element={<Modification/>} ></Route>
                    <Route exact path="/Saisie" element={<Saisie/>} ></Route>
                    <Route exact path="/Consultation/Naissance" element={<Naissance/>} ></Route>
                </Routes>
                    <div id="images">
                        <div id="grp1">
                            <div id="g1i1" className="g1"><img src={img1} className="img" width="100%" height="100%"/></div>
                            <div id="g1i2" className="g1"><img src={img5} className="img" width="100%" height="100%"/></div>
                            <div id="g1i3" className="g1"><img src={img3} className="img" width="100%" height="100%"/></div>
                        </div>
                        <div id="grp2">
                            <div id="g2i1" className="g2"><img src={img4} className="img"  width="100%" height="100%"/></div>
                            <div id="g2i2" className="g2"><img src={img2} className="img" width="100%" height="100%"/></div>
                            <div id="g3i3" className="g2"><img src={img6} className="img" width="100%" height="100%"/></div>
                        </div>
                    </div>
            </Router>
            
        </div>
        );
}