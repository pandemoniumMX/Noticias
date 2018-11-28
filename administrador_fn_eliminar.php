<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>

<?php
include'check_sesion.php';
include'conexion.php';



$id = $_POST ['id'];

$sql = "UPDATE  noticias set NOT_ESTADO='Eliminada' WHERE ID_NOTICIA=$id";

$res = $conn->query($sql);


if (!$res) {
  printf("Errormessage: %s\n", $conn->error);
}
else{
  echo "<script>window.open('administrador.php','_self')</script>";
}

?>
