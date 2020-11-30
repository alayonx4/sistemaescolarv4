<?php
require_once "header.php";
?>
<html lang ="en">
    <head>
        <meta charset ="UTF-8">
        <meta name ="viewport" content="width-device-width, initial-scale-1.0">
        <title>sistema de calificaciones escolares </title>
        <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
        <script src="node_modules/axios/dist/axios.min.js"></script>
    </head>
      <body>
        
          <div class="box">
             <div class="columns is-centered is-2">
                  <div class = "column is-half">
                     <div class= "notificacion is-link">
                        <h1>sistema escolar de calificaciones </h1>
                        </div> 
                        <!--usuario inf-->
                        
                        <!--usuario inf-->
                        <form action= "login.php" method="post">

                          <span class="hidden" data-region="loading-icon-container">
                            <span class="loading-icon icon-no-margin">
                              <img src="Bubbles3.gif" alt="height=100px" width="100px">
                            </span></span>
                             
                              <div class="field">
                                   <label class="label" for="usuarios">Usuario</label>
                                   <input class="input" type="text" id="usuarios" name="usuarios">
                               </div>    
                     
                               <div class="field">
                                <label class="label" for="password">Password</label>
                                <input class="input" type="password" id="password" name="password">
                            </div>    

                            <div class= "field">
                            <div class="control">
                              <input class="button" type="submit" value="Enviar"onclick="login()">
                          </div>    
                        </div>

                       </form>

                    </div>
                  </div>
                </div>
              <script>   
               
             function login(){

        axios.post(`api/funcion.php/login/${document.forms[0].usuarios.value}`, {
        usuarios: document.forms[0].usuarios.value,
        password: document.forms[0].password.value,
       }).then(resp => {
         if (resp.data.aceptado){
             alert(`bienvenido: ${resp.data.nombreperfil}`)
             setTimeout(`location.href='inicio.php?idusuarios=${
                 resp.data.idusuarios}'`,500)
         } else {
             alert(`el usuario y/o contraseña esta incorrecto\n
             verifique e intenten de nuevo.`)
         }

       })axios.catch(error => {
         console.log(error)
       })
    }
    </script>
</body>
</html>