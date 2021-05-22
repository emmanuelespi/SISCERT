<?php

class Curse extends Database
{
    public static function consultarCursos()
    {
        try {
            $result = Database::connect()->prepare("SELECT * FROM tb_curso");
            $result->execute();
            //Regresa una colección de valores
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function agregarCurso($nombre)
    {
        try {
            $result = Database::connect()->prepare("INSERT INTO tb_curso(id, nombre, estado) VALUES (null, ?, '1')");
            $result->bindParam(1, $nombre, PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }
}
