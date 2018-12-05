<?php
include'conexion.php';
$peliculas = "SELECT *  FROM peliculas where PEL_ESTADO ='Publicada';";

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
        <div class="conthead">
    </div>
  <div class="nav" >
    <ul>
      <li ><a href="index.php">INICIO</a></li>
      <li><a href="catalogo.php" >NOTICIAS</a></li>
      <li><a href="catalogo2.php" class="active">PELICULAS</a></li>
      <li><a href="contacto.php" >CONTACTO</a></li>
      <li><a href="acercade.php" >ACERCA DE</a></li>

      </li>
    </ul>
  </div>

  </nav>
</head>

<body>


<?php
                $ejec1 = mysqli_query($conn, $peliculas);
                while($fila=mysqli_fetch_array($ejec1)){ ?>
                <div id ="about">

                    <img  src="<?php echo $fila['PEL_IMG']; ?>" alt="Card image">
                      <h1><?php echo $fila['PEL_TITULO']; ?></h1>
                      <p> <strong> GENÉRO: </strong>     <?php echo $fila['PEL_GENERO']; ?></p>
                      <P><?php echo $fila['PEL_SIPOPSIS']; ?></P>
                </div>

              <?php } ?>







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

<style type="text/css">
/*about*/
#about {background-color:#d8d8d8; width:850px; height:360px; padding:40px; margin:8px 30px;}
#about h1{ font-size:40px; color:#045fb4 }
#about h2{ font-size:20px; color:#1a5fcd; margin-top:10px }
#about p { text-align: justify; color: #5882fa}
#about strong { color: black}
#about img {width:250PX; height:300PX; padding:20px; margin-left:50px; display:block; float:left; border: 5px solid black; }


#about a  { color: #0742a0; align: right;}

</style>

</head>

<body>



</body>
