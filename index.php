  <?php
include'conexion.php';
$ultima = "SELECT *  FROM noticias where NOT_ESTADO ='Publicada';";

?>

  <!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-Type";
    content-"text/html; charset-utf-8"/>
    <meta charset="utf-8">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js
"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>Ejemplo con CSS</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
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
        <li ><a href="index.php" class="active">INICIO</a></li>
        <li><a href="catalogo.php">CATALOGO</a></li>
        <li><a href="catalogo2.php">CATALOGO2</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
        <li><a href="acercade.php" >ACERCA DE</a></li>



        </li>
      </ul>
    </div>

    </nav>

  </head>

  <body>
  <div class="banner">
        <img  src="images/banner.png">
  </div>



    <div class="notidia">
    	<h2>Noticia del dia</h2>
    	<img  src="images/imagen.png">
    	<h1>titulo de ls noticia</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="popular">
    <h2>POPULAR</h2>
      <div class="popunoti">
      <img  src="images/imagen.png">
      <h1>titulo de ls noticia</h1>

      </div>
      <div class="popunoti">
      <img  src="images/imagen.png">
      <h1>titulo de ls noticia</h1>
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
