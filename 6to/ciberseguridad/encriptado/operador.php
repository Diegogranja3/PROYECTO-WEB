<?php
$enlace=mysqli_connect('sql10.freemysqlhosting.net','sql10618284','1El3h2gCt6','sql10618284');
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