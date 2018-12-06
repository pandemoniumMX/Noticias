<?php
include 'conexion.php';


$response = array();
if(isset($_POST['id'])){
  $id = $_POST['id'];


  $consulta = "SELECT * FROM peliculas WHERE ID_PELICULA = $id";


   $resultado = $conn->query($consulta);


   if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()) {
  $response['data'] = array (
    "tit"        =>  $row["PEL_TITULO"],
    "gen"        =>  $row["PEL_GENERO"],
    "sip"        =>  $row["PEL_SIPOPSIS"],
    "est"        =>  $row["PEL_ESTADO"],

  );
   }
   }

  $response['codigo'] = 1;
  $response['msj'] = "El id se recibio ".$id;
}
else{
  $response['codigo'] = 0;
  $response['msj'] = "Error no se recibio el id";
}

echo json_encode($response);

 ?>
