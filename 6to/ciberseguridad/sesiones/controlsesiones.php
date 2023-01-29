<?php
if(isset( $_COOKIE['TestCookie'])){
header("location:/../6to/Funciones/ingresar/ingresardatos.php");
}else{
header("location:/../6to/logins/loginoperador.php");
}
?>