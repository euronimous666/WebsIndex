<?php
 require 'conexion.php';
  
 $nombre  = $_POST['nombre'];
 $correo  = $_POST['correo'];
 $sexo  = $_POST['sexo'];
 
 

$insertar = "INSERT INTO table1 VALUES ('$nombre','$correo','$sexo')";


$query = mysqli_query($conectar, $insertar);


if($query){

   echo "<script> alert('correcto');
    location.href = 'index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}

$afp  = $_POST['afp'];

 
 

$insertar = "INSERT INTO table2 VALUES ('$afp')";


$query = mysqli_query($conectar, $insertar);


if($query){

   echo "<script> alert('correcto');
    location.href = 'index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}





?>