<?php
include'check_sesion.php';
include'conexion.php';



$id = $_GET ['id'];
//Tabla para ver todos los equipos


$cons = "SELECT * FROM noticias WHERE ID_NOTICIA = $id";
$resu = $conn->query($cons);


   if($resu->num_rows > 0){

    while($row = $resu->fetch_assoc()) {
    $tit = $row["NOT_TITULO"];
    $sub = $row["NOT_SUBTITULO"];
   	$con = $row["NOT_CONTENIDO"];
   	$img = $row["NOT_IMG"];
   	$fec = $row["NOT_FECHA"];
  


   //aqui termina el while

 }
}else{}
  
?>

<!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

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
        <li><a href="catalogo.php" class="active">CATALOGO</a></li>
        <li><a href="catalogo2.php">CATALOGO2</a></li>
        <li><a href="contacto.php" >CONTACTO</a></li>
        <li><a href="acercade.php" >ACERCA DE</a></li>

        </li>
      </ul>
    </div>

    </nav>
  </head>
<body>

      <div class="noticiaindividual">
      <h1><?php echo $tit ?></h1>
        <img  src='<?php echo $img ?>'>

        <h3><?php echo $sub ?></h3>

      <p><?php echo $con ?></p>
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
