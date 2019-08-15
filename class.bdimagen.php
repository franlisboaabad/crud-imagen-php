<?php


class DBImagen
{
    private $DBConexion;

    public function __construct($Conexion)
    {
        $this->DBConexion = $Conexion;
    }

    /**********************************
    Función para guardar la ruta de la
       Imagen en la base de datos
    **********************************/
    public function uploadImage($Imagen, $descripcion)
    {
        $ruta = '../images/'.$Imagen['imagen']['name'];
        move_uploaded_file($Imagen['imagen']['tmp_name'], $ruta);

        var_dump($ruta, $descripcion);

        $sql_agregar = 'INSERT INTO imagen (urlphoto,descripcion) value (?,?)';
        $sentencia_agregar = $this->DBConexion->prepare($sql_agregar);
        $sentencia_agregar->execute(array($ruta,$descripcion));

        //var_dump($sentencia_agregar);
        // var_dump($sentencia_agregar['descripcion']);

        //header('location:index.php');
    }
}
