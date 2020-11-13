<?php
    try{
        $con = new  PDO('mysql:host=localhost;dbname=ApiFacebook',
                        'root',
                        '');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo 'Conectado a la base de datos <br><br>';

        /*
        *   Esta parte busca todos los registros de la tabla
        *    y prepara solo los nombre
        */
        /*
        $stmt = $con->prepare('SELECT nombre FROM usuario');
        $stmt->execute();

        while($datos = $stmt->fetch()){
            echo 'Nombre: ' .$datos[0] . '<br>';
        }*/


        //Regresa el registro del usuario Juan
        $user    = 'Lebron';
        $pass    = 'bbbb';
        $nombre  = 'Lebron James';
        $correo  = 'lebron@nba.com';

        //regresa el registro del usuario Juan
        //$stmt = $con ->prepare ('SELECT  nombre, correo_e FROM usuario WHERE usuario=usuario');
        //$stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
        //$stmt->execute();
        //$stmt->execute(array(':usuario'=>$user));
        /*
        while($datos = $stmt->fetch()){
            echo 'Nombre: ' .$datos[0]. '<br>' .'Correo: ' .$datos[1];
    

    }*/

    /*
    //Inserción de un registro
    $stmt = $con->prepare('INSERT INTO usuario(usuario, contrasena, nombre, correo_e)
                                VALUES (:user, :pass, :nom, :mail)');
    $rows = $stmt->execute(array(':user'=>$user,
                                    ':pass'=>$pass,
                                    ':nom'=>$nombre,
                                    ':mail'=>$correo));

    if($rows == 1){
        echo 'Inserción correcta';
    }*/

    /*
    //modificación de un registro
    $stmt = $con->prepare('UPDATE usuario SET usuario=:user WHERE nombre=:nom');
    $rows = $stmt->execute(array(':user'=>$user, ':nom'=>$nombre));

    if($rows > 0){
        echo 'Modificación correcta';
    }*/


    //Borrado de un registro
    $stmt = $con->prepare('DELETE FROM usuario WHERE usuario=:user');
    $rows = $stmt->execute(array(':user'=>$user));

    if($rows > 0){
        echo 'Borrado Correcto';
    }

    } 
    catch (PDOEXCEPTION $e){
        die('Error conectando con la base de datos:'
                .$e->getMessage());
    }

    ?>