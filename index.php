  <?php
include'conexion.php';
$ultima = "SELECT *  FROM noticias where NOT_ESTADO ='Publicada' order by NOT_FECHA desc LIMIT 1;";
$primera = "SELECT *  FROM noticias where NOT_ESTADO ='Publicada' order by NOT_FECHA asc LIMIT 1;";
?>

  <!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <meta charset="utf-8">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js"></script>
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
    <?php
       $ejec1 = mysqli_query($conn, $ultima);
       while($fila=mysqli_fetch_array($ejec1)){ ?>

    	<h2>Noticia del día</h2>
      <img  src="<?php echo $fila['NOT_IMG']; ?>" alt="Card image">
    	<h1><?php echo $fila['NOT_TITULO']; ?></h1>
      <p><?php echo $fila['NOT_CONTENIDO']; ?></p>
      <?php } ?>
    </div>

    <div class="popular">
    <h2>POPULAR</h2>
      <div class="popunoti">
    <?php
       $ejec1 = mysqli_query($conn, $ultima);
       while($fila=mysqli_fetch_array($ejec1)){ ?>

      <img  src="<?php echo $fila['NOT_IMG']; ?>" alt="Card image">
      <h1><?php echo $fila['NOT_TITULO']; ?></h1>

      <?php } ?>

      </div>
      <div class="popunoti">
    <?php
       $ejec1 = mysqli_query($conn, $primera);
       while($fila=mysqli_fetch_array($ejec1)){ ?>


      <img src="<?php echo $fila['NOT_IMG']; ?>" alt="Card image">
      <h1><?php echo $fila['NOT_TITULO']; ?></h1>

      <?php } ?>
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
