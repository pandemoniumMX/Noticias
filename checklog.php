<?php

function verificar_sesion() {

	if( !isset ($_SESSION['clave']) ){
        unset($_SESSION);
        echo "<script>window.open('acceso.php','_self')</script>";
	}
}

?>
