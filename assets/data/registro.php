<?php
include('conexionreg.php');
$obj =new Conexion;

$usuario   = $_POST['inputUser'];
$pass      = $_POST['inputPassword'];
$nombre    = $_POST['inputNombre'];
$correo    = $_POST['inputCorreo'];



$res = $obj->insertarUsuario($usuario,$pass,$nombre,$correo);

if($res == 1){
  $datos = array('dato' => 'ok');
}else{
  $datos = array('dato' => 'no');
}

echo json_encode($datos, JSON_FORCE_OBJECT);
?>

