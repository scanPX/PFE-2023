import react from 'react';
import { BrowserRouter as Router, Link, Routes, Route } from "react-router-dom";
import '../../../css/Consultation/Consultation.css';


export default function Consultation(){

    return(
        <nav id='NavLink'>
            <a class='link' id='link1' href="/Naissance">Naissance</a>
        </nav>
    );
}