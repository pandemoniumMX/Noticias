<!-- Sweet Alert 2 plugin -->
<script src= "assets/js/sweetalert2.js"></script>

<?php
include'check_sesion.php';
include'fuctions.php';
include'conexion.php';

$var_name=$_SESSION['nombre'];
$var_clave= $_SESSION['clave'];


$usu = $_POST['usu'];
$con = md5($_POST['con']);
$ape = $_POST['ape'];
$apem = $_POST['apem'];
$nom = $_POST['nom'];
$cor = $_POST['cor'];
$tip = $_POST['tip'];




$sql = "INSERT INTO usuarios (USUARIO, USU_CONTRASENA, USU_APATERNO, USU_AMATERNO, USU_NOMBRE, USU_CORREO, USU_TIPO)
VALUES ('$usu', '$con', '$ape', '$apem', '$nom','$cor','$tip');";



$res = $conn->query($sql);



if (!$res) {
   printf("Errormessage: %s\n", $conn->error);
}
else{
  //echo "<script>alert('Usuario agregado exitosamente con el folio=$')</script>";
  echo "<script>window.open('administrador_usuarios.php','_self')</script>";}

?>
