<?php
include'check_sesion.php';
//include'fuctions.php';
include'conexion.php';

$var_name=$_SESSION['USU_NOMBRE'];
$var_clave= $_SESSION['clave'];
$var_tipo = $_SESSION['USU_TIPO'];


if($var_tipo != "Administrador") {
 //echo "<script>alert('No tienes acceso a esta página!')</script>";
   echo "<script>window.open('acceso.php','_self')</script>";
 }


$publicada = "SELECT *  FROM peliculas where PEL_ESTADO ='Publicada';";



$eliminada = "SELECT *  FROM peliculas where PEL_ESTADO ='Eliminada';";

?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <!-- Open Graph Meta-->
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/chartist.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js"></script>


    <!-- Font-icon css-->
  <link href= "css/themify-icons.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/img/favicon.ico">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" onclick="faqs();">ID de Usuario: <?php echo $var_clave ?></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="ti-search"></i></button>
        </li>
        <!--Notification Menu-->
     
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="ti-bell"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">Tienes nuevas notificaciones</li>

           <div class="app-notification__content">
           
              <li><a class="app-notification__item" href="javascript:;">

                  <div>
               
                  </div></a></li>
                

            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <a class="app-nav__item" href="destroy.php"><i class="ti-shift-left"></i></a>


      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">



      </div>
      <ul class="app-menu">
      
     
      <li><a class="app-menu__item " href="administrador.php"><i class="app-menu__icon ti-agenda"></i><span class="app-menu__label">Administración de noticias</span></a></li>
      <li><a class="app-menu__item active" href="administrador_peliculas.php"><i class="app-menu__icon ti-video-clapper"></i><span class="app-menu__label">Administración de peliculas</span></a></li>

      <li><a class="app-menu__item " href="administrador_usuarios.php"><i class="app-menu__icon ti-user"></i><span class="app-menu__label">Administración de usuarios</span></a></li>
</ul>




    </aside>
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Panel administrativo</h1>
          <p>Alta, modificaion y eliminación de noticias</p>
        </div>

      </div>
      <div class="card text-black bg-primary mb-3">
        <div class="card-body">
        <div class="col-sm-12" align="center">
             <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <form id='form-id'>

                    <label class="btn btn-danger active" onclick="nueva();" >
                      <a  /> Nueva película
                      </label>

                    <label class="btn btn-success" id='watch-me'>
                      <input name='test' type='radio' /> Modificar pelicula
                    </label>

                      <label class="btn btn-warning" id='see-me'>
                      <input name='test' type='radio' /> Peliculas eliminadas
                    </label>

                     
    <!--common script for all pages

                    <label class="btn btn-danger" onclick="location='admin_editar_taller.php'">
                      <input name='test' type='radio' /> Editar taller
                    </label>

                    <label class="btn btn-info" onclick="aviso();">
                      <input name='test' type='radio' /> Nuevo aviso
                    </label>

                    <label class="btn btn-danger" onclick="location='admin_editar_vehiculos.php'">
                      <input name='test' type='radio' /> Control de vehículos
                    </label>

                    <label class="btn btn-success" onclick="location.href='admin_editar_recepciones.php'" >
                      <input name='test' type='radio' /> Recepciones
                    </label>

                          <label class="btn btn-warning" onclick="location.href='recepcion_ventas.php'" >
                      <input name='test' type='radio' /> Ventas
                    </label>


-->


                  </form>
                </div>


 <div id='show-me'>
 <div class="tile">
                      <div class="tile-body">
 <h4 >Noticias publicadas</h4>

 <div class="row">
                <?php
                $ejec1 = mysqli_query($conn, $publicada);
                while($fila=mysqli_fetch_array($ejec1)){ ?>

                <div class="col-lg-4" ><form action="administrador_fn_eliminar_pelicula.php" method="post" name="data" content="text/html; charset=utf-8">
                  <div class="bs-component">
                    <div class="card" >
                      <h4 class="card-header"><?php echo $fila['PEL_TITULO']; ?></h4>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $fila['PEL_SIPOPSIS']; ?></h5>
                        <h6 class="card-subtitle text-muted"><?php echo $fila['PEL_GENERO']; ?></h6>
                      </div><img style="height: 350px; width: 100%; display: block;" src="<?php echo $fila['PEL_IMG']; ?>" alt="Card image">

                      <div class="card-footer text-muted"><?php echo  $fila['PEL_FECHA']; ?> </div>
                      <button class="btn btn-success" type="button" onclick="modificar(<?php echo $fila['ID_PELICULA']; ?>), fn_modificar(<?php echo $fila['ID_PELICULA']; ?>);">Modificar</button>
                      <input  type="hidden" id="id" name="id" value="<?php echo $fila['ID_PELICULA']; ?>" />

                      <input class="btn btn-danger" type="submit" name="foo" value="Eliminar" />

                      </div>
                </form>
                  </div><br></br>
                </div>

              <?php } ?>
              
              </div></div></div></div>


 <div id='show-me-two' style='display:none;  border:2px solid #ccc'>
 <div class="tile">
 <div class="tile-body">
 <h4 >Noticias Finalizadas</h4>

 <div class="row">
                <?php
                $ejec1 = mysqli_query($conn, $eliminada);
                while($fila=mysqli_fetch_array($ejec1)){ ?>
                <div class="col-lg-4">
                  <div class="bs-component">
                    <div class="card">
                      <h4 class="card-header"><?php echo $fila['PEL_TITULO']; ?></h4>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $fila['PEL_SIPOPSIS']; ?></h5>
                        <h6 class="card-subtitle text-muted"><?php echo $fila['PEL_GENERO']; ?></h6>
                      </div><img style="height: 350px; width: 100%; display: block;" src="<?php echo $fila['PEL_IMG']; ?>" alt="Card image">

                      <div class="card-footer text-muted"><?php echo  $fila['PEL_FECHA']; ?> </div>
                        <button class="btn btn-success" type="button" onclick="modificar(<?php echo $fila['ID_PELICULA']; ?>), fn_modificar(<?php echo $fila['ID_PELICULA']; ?>);">Republicar</button>
                      </div>

                  
                  </div><br></br>
                </div>

              <?php } ?>
              
</div></div></div></div>

  
  </body>

</main>
   

    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.9/dist/sweetalert2.all.min.js"></script>

    <script src="js/jquery.js"></script>
 
    
 <script type="text/javascript">
  $(document).ready(function ()
   {
     //primero
    $("#watch-me").click(function()
    {
     $("#show-me:hidden").show('slow');
     $("#show-me-two").hide();
     $("#show-me-three").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#watch-me").click(function()
    {
      if($('watch-me').prop('checked')===false)
     {
      $('#show-me').hide();
     }
    });

    //segundo
    $("#see-me").click(function()
    {
      $("#show-me-two:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-three").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#see-me").click(function()
    {
      if($('see-me-two').prop('checked')===false)
     {
      $('#show-me-two').hide();
     }
    });

    //tercero
    $("#look-me").click(function()
    {
      $("#show-me-three:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me").click(function()
    {
      if($('see-me-three').prop('checked')===false)
     {
      $('#show-me-three').hide();
     }
    });

    //cuarto
    $("#look-me2").click(function()
    {
      $("#show-me-three2:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me2").click(function()
    {
      if($('see-me-three2').prop('checked')===false)
     {
      $('#show-me-three2').hide();
     }
    });

      //quinto
    $("#look-me3").click(function()
    {
      $("#show-me-three3:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three").hide();
     $("#show-me-three4").hide();
     });
     $("#look-me3").click(function()
    {
      if($('see-me-three3').prop('checked')===false)
     {
      $('#show-me-three3').hide();
     }
    });


    //sexto
    $("#look-me4").click(function()
    {
      $("#show-me-three4:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three5").hide();
     $("#show-me-three3").hide();
     $("#show-me-three").hide();
     });
     $("#look-me4").click(function()
    {
      if($('see-me-three4').prop('checked')===false)
     {
      $('#show-me-three4').hide();
     }
    });

    //septimo
    $("#look-me5").click(function()
    {
      $("#show-me-three5:hidden").show('slow');
     $("#show-me").hide();
     $("#show-me-two").hide();
     $("#show-me-three2").hide();
     $("#show-me-three4").hide();
     $("#show-me-three3").hide();
     $("#show-me-three").hide();
     });
     $("#look-me4").click(function()
    {
      if($('see-me-three5').prop('checked')===false)
     {
      $('#show-me-three5').hide();
     }
    });


   });


  </script>
  
 

    <div class="content-panel">
 <div class="col-lg-7">

</div>
</div>

<script type="text/javascript">
 //Script para mandar ID para generar la orden
function fn_modificar(id){
  $.ajax({
      // la URL para la petición
      url : 'administrador_fn_mod_peli.php',
      // la información a enviar
      // (también es posible utilizar una cadena de datos)
      data : {
         id : id
      },
      // especifica si será una petición POST o GET
      type : 'POST',
      // el tipo de información que se espera de respuesta
      dataType : 'json',
      // código a ejecutar si la petición es satisfactoria;
      // la respuesta es pasada como argumento a la función
      success : function(data) {
        //Manda Llamar id,nombre y apellido

       //  $("#id").val(data.data.id);

         $("#tit").val(data.data.tit);
         $("#gen").val(data.data.gen);
         $("#sip").val(data.data.sip);
         $("#est").val(data.data.est);
      },
      // código a ejecutar si la petición falla;
      // son pasados como argumentos a la función
      // el objeto de la petición en crudo y código de estatus de la petición
      error : function(xhr, status) {

      },
      // código a ejecutar sin importar si la petición falló o no
      complete : function(xhr, status) {

      }
  });
}

</script>

<script type="text/javascript">

  function nueva(){


  swal({
 title: 'Registrar nueva película',
 html:
 '<div class="col-lg-12"> <form action="administrador_fn_nueva_pelicula.php" method="post" name="data" enctype="multipart/form-data">'+
 '<label>Titulo</label>' +
 '<input input type="text" name="titulo" id="titulo" pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s,. ]+" title="Sólo letras" class="form-control border-input" maxlength="50" required>' +
 '<label>Genero</label>' +
 '<input input type="text" name="gen" id="gen" pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s,. ]+" title="Sólo letras y números" class="form-control border-input maxlength="50" required>' +
 '<label>Sipnosis</label>' +
 '<textarea type="text" name="sip" id="sip" pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s,. ]+" title="Sólo letras y números" class="form-control border-input"></textarea>'+
  '<label>imagen</label>' +
 '<input input type="file" name="img" id="img"  required accept="image/png/jpg" class="form-control border-input" required></br>'+
 
 '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Agregar pelicula</Button>'+
 '</form></div>',
 showCancelButton: true,
 confirmButtonColor: '#3085d6',
 cancelButtonColor: '#d33',
 confirmButtonText: '</form> Actualizar solicitud',
 cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
 showConfirmButton: false,
 focusConfirm: false,
 buttonsStyling: false,
  reverseButtons: true
})

};
</script>

<script type="text/javascript">

function modificar(id){


swal({
title: 'Modificar',
html:
'<div class="col-lg-12"> <form action="administrador_fn_act_peli.php" method="post" name="data" enctype="multipart/form-data">'+
'<input input type="number" name="id" id="id" value="'+id+'" title="Sólo letras" class="form-control border-input" maxlength="20" required>' +
'<label>Titulo</label>' +
'<input input type="text" name="tit" id="tit" pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s,. ]+" title="Sólo letras" class="form-control border-input" maxlength="20" required>' +
'<label>Genero</label>' +
'<input input type="text" name="gen" id="gen" pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s,. ]+" title="Sólo letras y números" class="form-control border-input maxlength="20" required>' +
'<label>Sipnosis</label>' +
'<input input type="textarea" name="sip" id="sip" pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s,. ]+" title="Sólo letras y números" class="form-control border-input maxlength="20" required>' +
'<label>Estado</label>' +
'<select class="form-control form-control-sm" textalign="center"   required name="est" id="est">'+
 '<option value=""></option>'+
 '<option value="Publicada">Publicada</option>'+
 '<option value="Eliminada">Eliminar</option>'+
 '</select>' +
 '<label>imagen</label>' +
'<input input type="file" name="img" id="img"   accept="image/png/jpg" class="form-control border-input" ></br>'+
'<Button type="submit" class= "btn btn-info btn-fill btn-wd">Actualizar noticia</Button>'+
'</form></div>',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: '</form> Actualizar solicitud',
cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
showConfirmButton: false,
focusConfirm: false,
buttonsStyling: false,
reverseButtons: true
})

};
</script>


  </body>
</html>