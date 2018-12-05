<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>

<?php
include'check_sesion.php';
include'conexion.php';


//$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];


$tit = $_POST['titulo'];
$sub = $_POST['sub'];
$con = $_POST['contenido'];

$tip = $_POST['tip'];


$micarpeta = "galeria/noticias/";
if (!file_exists($micarpeta)) {
    mkdir($micarpeta, 0777, true);
}

$archivo = $_FILES['img']['tmp_name'];
$destino = "galeria/noticias/". $_FILES['img']['name'];
move_uploaded_file($archivo, $destino);

$sql = "INSERT INTO noticias (NOT_TITULO, NOT_SUBTITULO, NOT_CONTENIDO, NOT_IMG, NOT_ESTADO)
VALUES ('$tit', '$sub', '$con', '$destino', 'Publicada');";
$res = $conn->query($sql);




$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{
  //echo "<script>alert('Usuario agregado exitosamente con el folio=$')</script>";
  echo "<script>window.open('administrador.php','_self')</script>";}

?>
