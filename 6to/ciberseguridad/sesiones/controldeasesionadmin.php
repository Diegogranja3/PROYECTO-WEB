<?php
if(isset( $_COOKIE['TestCookie1'])){
header("location:/../6to/Base-de-datos/Basededatos.php");
}else{
header("location:/../6to/logins/loginadmin.php");
}
?>