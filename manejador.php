<?php
include'check_sesion.php';
include'conexion.php';
//if(isset($_POST['submit']))
//{

if ( (isset($_POST['user'])) || (isset($_POST['pass'])) ){


    $var_user = $_POST['user'];
	$var_contra = md5($_POST['pass']);






$consulta = "SELECT USU_TIPO,USUARIO,USU_NOMBRE FROM usuarios WHERE USUARIO ='$var_user' AND USU_CONTRASENA = '$var_contra' ";
$resultado = $conn->query($consulta);


if($resultado->num_rows > 0){

	while($row = $resultado->fetch_assoc()) {
	$var_nombre = $row["USU_NOMBRE"];
	$var_apellidop = $row["USU_APATERNO"];
	$log_nom = $var_nombre. " ".$var_apellidop;
	$tipo = $row["USU_TIPO"];
	//Aspirantes

    if($tipo == 'Administrador'){
    		$_SESSION['clave'] = $row["ID_USUARIO"];
    		//$id = $row["ID_USUARIO"];//
    	    $_SESSION['nombre']=$var_nombre;
    	    $_SESSION['tipo']=$var_tipo;

    		header("location:administrador.php");
    	}


    	 }//aqui termina el while

	}else{

    echo "<script>alert('Usuario o contraseña invalidos!')</script>";
        echo "<script>window.open('index.php','_self')</script>";}


	}else{
	header("location:index.php");
	}


//} else{
//}


?>
<head>
     <link rel="stylesheet" media="screen" type="text/css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>