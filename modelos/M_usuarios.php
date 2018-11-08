<?php

require_once 'conexion.php';

class ModeloUsuarios
{
    // =========================================================================
    // Mostrar usuario para el ingreso
    // id, fk_p_padron, usuario, password, estado, foto, ultimoLogin, ultimaActualizacion
    // =========================================================================

    static public function MdlMostrarUsuarios($tabla, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare('SELECT id, fk_p_padron, usuario, password, estado, foto, ultimoLogin, ultimaActualizacion from ' . $tabla . ' where ' . $item . ' = :' . $item);

        $stmt->bindParam(':' . $item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }

    public static function MdlObtenerUsuarios($tabla)
    {
        $stmt = Conexion::conectar()->prepare('SELECT id, usuario, password, estado, foto, ultimoLogin from ' . $tabla );

        
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }
}
