<!-- Sweet Alert 2 plugin -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js
"></script>

<?php
include'check_sesion.php';
include'conexion.php';


$id = $_POST['id'];

$tit = $_POST['tit'];
$gen = $_POST['gen'];
$sip = $_POST['sip'];
$est = $_POST['est'];


$micarpeta = "galeria/peliculas/";
if (!file_exists($micarpeta)) {
    mkdir($micarpeta, 0777, true);
}

$archivo = $_FILES['img']['tmp_name'];
$destino = "galeria/peliculas/". $_FILES['img']['name'];
move_uploaded_file($archivo, $destino);

$sql = "UPDATE peliculas set PEL_TITULO ='$tit', PEL_SIPOPSIS='$sip', PEL_GENERO='$gen', PEL_ESTADO='$est' , PEL_IMG='$destino' where ID_PELICULA='$id';";



$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{
  //echo "<script>alert('Usuario agregado exitosamente con el folio=$')</script>";
  echo "<script>window.open('administrador_peliculas.php','_self')</script>";}

?>
