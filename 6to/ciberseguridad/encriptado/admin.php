<?php
$enlace=mysqli_connect('sql10.freemysqlhosting.net','sql10618284','1El3h2gCt6','sql10618284');
$lave="11";
$clave=password_hash("$lave", PASSWORD_DEFAULT);
echo $clave;
$insertar="INSERT INTO loginadmin(ID_admin, Nombre_admin, Usuario_admin, Clave_admin)VALUES('11','PIA','11','$clave')";
  $ejecutarINSERTAR=mysqli_query($enlace,$insertar);
    $ejecutarINSERTAR=mysqli_query($enlace,$insertar);

  if(!$ejecutarINSERTAR){
      echo"Error al insertar registros";
      header("location:prueba2.php");
  }
  ?>