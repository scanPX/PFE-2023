import React from 'react';
import imgHome1 from "./back_home1.jpg";
import imgHome2 from "./back_home2.jpg";

export default function Home(){
    return(
        <div id="home">
            <div id='imgHome1'><img src={imgHome1} width="100%" height="100%"/></div>   

         <form method='get' class="card" id="cart">
            
             <div class="dokhol"> تسجيل الدخول</div><br/><br/>
                <div class="group">
                     <label class="labelH">Name</label>
                     <input required=""  
                        type="text" class="input" name='name_inp' id="name"/><br/>

                     <label class="labelH">password</label>
                     <input required=""
                        type="password" class="input" name='password_inp' id="password"/><br/><br/>


                    <button class="btnHome" type='submit' id="btnHome">
                          <span class="transition"></span>
                          <span class="gradient"></span>
                          <span class="label">دخول</span>
                    </button>
                    <br/>
                
                </div>
            </form>
            <div id='imgHome2'><img src={imgHome2} width="100%" height="100%"/></div>   
        </div> 
    )
}