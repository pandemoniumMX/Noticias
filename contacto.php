<?php
include'check_sesion.php';
//include'fuctions.php';
include'conexion.php';

$var_name=$_SESSION['USU_NOMBRE'];
$var_clave= $_SESSION['clave'];
$var_tipo = $_SESSION['USU_TIPO'];

if($var_tipo != "Contacto" && $var_tipo !='Administrador') {
  //echo "<script>alert('No tienes acceso a esta página!')</script>";
    echo "<script>window.open('Error_restrinccion.html','_self')</script>";
  }

?>
  <!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-Type";
    content-"text/html; charset-utf-8"/>
    <meta charset="utf-8">
    <title>Ejemplo con CSS</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/estilos_base.css" media="screen" />

      <div class="header">
          <div class="conthead"></div>
          <div class="conthead">
            <div class="contheadlogo"><img  src="images/logo.png"></div>
          </div>
          <div class="conthead"></div>
      </div>
    <div class="nav" >
      <ul>
        <li ><a href="index.php">INICIO</a></li>
        <li><a href="catalogo.php">CATALOGO</a></li>
        <li><a href="catalogo2.php">CATALOGO2</a></li>
        <li><a href="contacto.php"  class="active">CONTACTO</a></li>
        <li><a href="acercade.php" >ACERCA DE</a></li>

        </li>
      </ul>
    </div>

    </nav>
  </head>

<body>

  <div class="ubicacion">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14702.190797157984!2d-109.90800515!3d22.8931609!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1539137299624" width="1200" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

<div class="frmdatos">

 <div class="formulario">
 <h2>COMENTARIOS O DUDAS</h2>
 <table class="frm">

    <tr><td>Nombre</td><td><input type="text1" name="nombre" required></td></tr>
    <tr><td>Apellido</td><td><input type="text1" name="Apellido" required></td></tr>
    <tr><td >E-mail</td><td><input type="email" name="correo" pattern="^[-\w.]+@{1}[-a-z0-9]+[.]{1}[a-z]{2,5}$" required></td></tr>
    <tr><td>Teléfono o Celular </td><td><input type="text1" name="telefono" required></td></tr>
    <tr><td>Ciudad </td><td><input type="text1" name="ciudad" required></td></tr>
    <tr><td >Comentarios o dudas</td><td><textarea  type="text1" name="comentario" required></textarea></td></tr>
    <tr><td></td><td><input type="submit" value="Enviar comentario" ></td></tr>
  </table>
</div>

<div class="datoscontacto">
  <h2>CONTACTANOS</h2>
  <h2>REDES SOCIALES</h2>
  <p></p><a href="http://www.facebook.com">www.facebook.com/noticpelic</a></p>
  <p></p><a href="http://www.facebook.com">www.twitter.com/noticpelic</a></p>
  <H2>CORREO</H2>
  <h1>Fernando@noticpelic.com</h1>
  <h1>Zuey@noticpelic.com</h1>
  <H2>TELEFONO</H2>
  <h1>624-17-8-78-29</h1>

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
  </html>
