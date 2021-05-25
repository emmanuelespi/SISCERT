<?php

class Student
{
    public static function consultarAlumnos(){
        try {
            $result = Database::connect()->prepare("SELECT * FROM tb_alumno");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function agregarAlumno($data)
    {
        try {
            $result = Database::connect()->prepare("INSERT INTO tb_alumno (id, nombre, appat, apmat, telefono, estado) VALUES (NULL,?,?,?,'1')");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['appat'], PDO::PARAM_STR);
            $result->bindParam(3, $data['apmat'], PDO::PARAM_STR);
            $result->bindParam(4, $data['telefono'], PDO::PARAM_STR);
            $result->bindParam(5, $data['estado'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error User->agregarUsuario()" . $e->getMessage());
        }
    }

    public function consultarAlumno($id)
    {
        try {
            $result = Database::connect()->prepare("SELECT * FROM tb_alumno WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            //Regresa un valor único
            return $result->fetch();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modificarAlumno($data)
    {
        try {
            $result = Database::connect()->prepare("UPDATE tb_alumno SET nombre = ?, appat = ?, apmat= ? WHERE id = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['appat'], PDO::PARAM_STR);
            $result->bindParam(3, $data['apmat'], PDO::PARAM_STR);
            $result->bindParam(5, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("Error User->modificarUsuario()" . $e->getMessage());
        }
    }
}
