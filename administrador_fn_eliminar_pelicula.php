<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>

<?php
include'check_sesion.php';
include'conexion.php';



$id = $_POST ['id'];

$sql = "UPDATE peliculas set PEL_ESTADO='Eliminada' WHERE ID_PELICULA=$id";

$res = $conn->query($sql);


if (!$res) {
  printf("Errormessage: %s\n", $conn->error);
}
else{
  echo "<script>window.open('administrador_peliculas.php','_self')</script>";
}

?>
