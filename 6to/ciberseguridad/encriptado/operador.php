<?php
$enlace=mysqli_connect('localhost','root','','sql');
$lave="11";
$clave=password_hash("$lave", PASSWORD_DEFAULT);
$insertar="INSERT INTO loginoperador(ID_operador, Nombre_operador, Usuario_operador, Clave_operador)VALUES('11','PIA','11','$clave')";
  $ejecutarINSERTAR=mysqli_query($enlace,$insertar);
    $ejecutarINSERTAR=mysqli_query($enlace,$insertar);

  if(!$ejecutarINSERTAR){
      echo"Error al insertar registros";
      header("location:prueba2.php");
  }
  ?>