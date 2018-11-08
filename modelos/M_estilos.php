<?php

require_once 'conexion.php';

class estilosPagina{

    public static function cargarJs()
    {
        $stmt = Conexion::conectar()->prepare('SELECT descripcion, ruta from estilos where value = 2');

        $stmt->execute();

        //PDO::FETCH_KEY_PAIR para obtener array associativo 
        //para poder pasarlo a smarty
        
        return $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

        $stmt->close();
        $stmt->null;        
    }
}