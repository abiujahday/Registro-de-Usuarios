<?php

 class Conexion{
  var $conn;

  function conectar(){
    $conn=NULL;
    try{
      $conn = new PDO ('mysql:host=localhost;dbname=tiendaut',
      'root','');

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo 'Conectando a la base de datos <br> <br>';

    }catch(PDOException $e){
      die(print_r ('Error conectando con la base de datos: '
            . $e->getMesage()));
    }return $conn;
  }

    function insertarUsuario($user, $pass, $nombre, $correo){
        $con = $this->conectar();

        /*$consulta = 'INSERT INTO usuario(usuario, contrasena, nombre, correo_e)
                     VALUES (:user, :pass, :nombre, :correo)';

        $stmt = $con->prepare($consulta);
        $rows = $stmt->execute(array(':user'=>$user, ':nombre'=>$nombre, ':pass'=>$pass, ':correo'=>$correo));*/

        $stmt = $con->prepare('INSERT INTO usuarios(usuario, contrasena, nombre, correo_e) VALUES (:user, :pass, :nombre, :correo)');
        $rows = $stmt->execute(array(':user'=>$user, ':pass'=>$pass, ':nombre'=>$nombre, ':correo'=>$correo));
        
  
        return $rows;
  }

}


?>