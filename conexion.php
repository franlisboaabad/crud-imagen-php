<?php

$enlace = 'mysql:host=localhost;dbname=imagen';
$usuario = 'root';
$pass  = '';

    try {
        $pdo = new PDO($enlace, $usuario, $pass);
    } catch (PDOException $e) {
        print "error! de conexion ".$e->getMessage()."<br/>";
        die();
    }

    /*Crear el objeto para accesar a la clase*/
    include_once 'class.bdimagen.php';
    $DBImagen = new DBImagen($pdo);
