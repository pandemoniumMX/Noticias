<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>

<?php
include'check_sesion.php';
include'conexion.php';


$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];


$tit = $_POST['titulo'];
$gen = $_POST['gen'];
$sip = $_POST['sip'];




$micarpeta = "galeria/noticias/";
if (!file_exists($micarpeta)) {
    mkdir($micarpeta, 0777, true);
}

$archivo = $_FILES['img']['tmp_name'];
$destino = "galeria/noticias/". $_FILES['img']['name'];
move_uploaded_file($archivo, $destino);

$sql = "INSERT INTO peliculas (PEL_TITULO, PEL_SIPOPSIS, PEL_GENERO, PEL_IMG, PEL_ESTADO)
VALUES ('$tit', '$sip', '$gen', '$destino', 'Publicada');";
$res = $conn->query($sql);




$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{
  //echo "<script>alert('Usuario agregado exitosamente con el folio=$')</script>";
  echo "<script>window.open('administrador_peliculas.php','_self')</script>";}

?>
