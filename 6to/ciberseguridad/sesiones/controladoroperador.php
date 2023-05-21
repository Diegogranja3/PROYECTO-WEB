<?php
if(!empty($_POST["Continuar"])){
    if(empty($_POST["usuario"]) or empty($_POST["clave"])){
        echo '<div class="alert alert-danger">EXISTEN CAMPOS ESTAN VACIOS</div>';
    }else{
         $usuario=$_POST["usuario"];
         $clave=$_POST["clave"];
         $sql=$conexion->query("SELECT * FROM loginoperador where Usuario_operador='$usuario'");
         if($datos=$sql->fetch_object()){
            $clave1=$datos->Clave_operador;
            $usu=$datos->Nombre_operador;
        if(password_verify($clave, $clave1)){
         setcookie("TestCookie","$usu", time()+1000, $path="/");
            header("location:/6to/Funciones/ingresar/ingresardatos.php");
         }else{
            echo '<div class="alert alert-danger">DATOS INCORRECTOS</div>';
         }
    }else{
        echo '<div class="alert alert-danger">DATOS INCORRECTOS</div>';
    }
}
}
?>