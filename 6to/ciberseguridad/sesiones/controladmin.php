<?php
if(!empty($_POST["Continuar"])){
    if(empty($_POST["usuario"]) and empty($_POST["clave"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{
         $usuario=$_POST["usuario"];
         $clave=$_POST["clave"];
         $sql=$conexion->query("SELECT * FROM loginadmin where Usuario_admin='$usuario'");
         if($datos=$sql->fetch_object()){
            $clave1=$datos->Clave_admin;
            $usu=$datos->Nombre_admin;
            if(password_verify($clave, $clave1)){
                setcookie("TestCookie1","$usuario", time()+300, $path="/");
                header("location:/6to/Base-de-datos/Basededatos.php");
         }else{
            echo '<div class="alert alert-danger">DATOS INCORRECTOS</div>';
         }
    }
}
}
?>