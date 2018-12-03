<!-- Sweet Alert 2 plugin -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js
"></script>

<?php
include'check_sesion.php';
include'conexion.php';
verificar_sesion();

$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];


$tit = $_POST['tit'];
$sub = $_POST['sub'];
$con = $_POST['con'];
$est = $_POST['est'];


$micarpeta = "galeria/noticias/";
if (!file_exists($micarpeta)) {
    mkdir($micarpeta, 0777, true);
}

$archivo = $_FILES['img']['tmp_name'];
$destino = "galeria/noticias/". $_FILES['img']['name'];
move_uploaded_file($archivo, $destino);

$sql = "UPDATE noticias set NOT_TITULO ='$TIT', NOT_SUBTITULO='$sub', NOT_CONTENIDO='$con', NOT_ESTADO='$est' , NOT_IMG='$destino';";



$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{
  //echo "<script>alert('Usuario agregado exitosamente con el folio=$')</script>";
  echo "<script>window.open('administrador.php','_self')</script>";}

?>
