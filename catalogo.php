<?php
include'conexion.php';
$publicada = "SELECT *  FROM noticias where NOT_ESTADO ='Publicada';";

?>

<!DOCTYPE html>
  <html>
  <head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/estilos_base.css" media="screen" />


    <script src="assets/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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




  <div class="contentnoticias">
                <?php
                $ejec1 = mysqli_query($conn, $publicada);
                while($fila=mysqli_fetch_array($ejec1)){ ?>
                <div class="noticia">

                    <img  src="<?php echo $fila['NOT_IMG']; ?>" alt="Card image">
                      <h1><?php echo $fila['NOT_TITULO']; ?></h1>

                        <a href='noticia.php?id=(<?php echo $fila['ID_NOTICIA']; ?>);'>Leer más</a>

                     
                </div>

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
  </html>
