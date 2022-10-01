<?php
// conectar con servidor
$conectar= @mysql_connect('localhost','root','');
// verificamos conexion
if(!$conectar){
    echo"no se pudo conectar con el servidor";
}else{
    $base= mysql_select_db('formconsulta');
   if(!$base){
    echo"No se encontro la base de datos";
   } 

};
// recuperar variables
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$mensaje= $_POST['mensaje'];
// ha cemos la sentancia SQL
$sql= "INSERT INTO datos VALUES('$nombre',
                                '$email',
                                '$mensaje')";
    
// EJECUTAMOS LA SENTANCIA
    $ejecutar= mysql_query($sql);
    if(!$ejecutar){
        echo"Hubo algun error";
    }else{
        echo"Se envio formulario de consulta de manera correcta";
    };
?>