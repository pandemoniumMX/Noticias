<?php

function verificar_sesion() {

	if( !isset ($_SESSION['clave']) ){
        unset($_SESSION);
        echo "<script>window.open('Error_sesion.html','_self')</script>";
	}
}

?>
