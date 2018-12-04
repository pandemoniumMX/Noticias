<?php
include'conexion.php';
$publicada = "SELECT *  FROM noticias where NOT_ESTADO ='Publicada';";

?>

<!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/estilos_base.css" media="screen" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js"></script>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
        <link rel="stylesheet" type="text/css" href="css/estilos_base.css" media="screen" />

      <div class="header">
          <div class="conthead"></div>
          <div class="conthead">
            <div class="contheadlogo"><img  src="images/logo.png"></div>
          </div>
          <div class="conthead"><div class="nav" ><ul><li><a onclick="login();" >LOGIN</a></li></ul></div></div>
      </div>
    <div class="nav" >
      <ul>
   

        </li>
      </ul>
    </div>

    </nav>
  </head>

<body>




  <div class="contentnoticias">
               <h1>Necesitas iniciar sesión</h1>
               <img style="height: 350px; width: 550px; "  src="images/acceso.jpg">
</br>
               <a style="font-size: 30px" href="javascript:history.go(-1)">Regresar página anterior</a>

</div>
</div>





</body>
    <footer>
  <div class="footer">
    <div class="contfoot"></div>
    <div class="contfoot">
      <div class="contfootredes">
        <h2>SIGUENOS EN:</h2>
        <img  src="images/facebook.png">
        <img  src="images/twitter.png">
        <img  src="images/instagram.png">
        <img  src="images/whatsapp.png">
      </div>
    </div>
    <div class="contfoot"></div>
  </div>
</footer>
<script type="text/javascript">
  //Nuevo Aviso
      function login(){
  
  
      swal({
     title: 'Iniciar Sesion',
     html:
     '<div class="col-lg-12"> <form action="manejador.php" method="post" name="data">'+
  '<img src="images/login.png">'+
  '<br>'+

     '<label>Nombre de usuario</label>' +
     '<br>'+

     '<input name="user"  id="user" type="text" maxlength="25"   class="form-control border-input">'+
     '<br>'+
    
     '<label>Contraseña</label>' +
     '<br>'+

     '<input name="pass"  id="pass" type="password" maxlength="25"   class="form-control border-input">'+
     '<br>'+

  '<br>'+
  
     '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Iniciar sesión</Button>'+
     '</form></div>',
     
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: '</form> Registrar aviso',
     cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
     showConfirmButton: false,
     focusConfirm: false,
     buttonsStyling: false,
      reverseButtons: true
    })
    };
    </script>
  </html>
