<?php

class Profesor 
{    
    public static function consultarProfesores()
    {
        try {
            $result = Database::connect()->prepare("SELECT * FROM tb_profesor");
            $result->execute();
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function agregarProfesor($data)
    {
        try {
            $result = Database::connect()->prepare("INSERT INTO tb_profesor (id, nombre, appat, apmat, telefono, estado) VALUES (NULL,?,?,?,?,'1')");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['appat'], PDO::PARAM_STR);
            $result->bindParam(3, $data['apmat'], PDO::PARAM_STR);
            $result->bindParam(4, $data['telefono'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error User->agregarUsuario()" . $e->getMessage());
        }
    }

    public function consultarProfesor($id)
    {
        try {
            $result = Database::connect()->prepare("SELECT * FROM tb_profesor WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            //Regresa un valor único
            return $result->fetch();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modificarProfesor($data)
    {
        try {
            $result = Database::connect()->prepare("UPDATE tb_profesor SET nombre = ?, appat = ?, apmat= ?, telefono=? WHERE id = ?");
            $result->bindParam(1, $data['nombre'], PDO::PARAM_STR);
            $result->bindParam(2, $data['appat'], PDO::PARAM_STR);
            $result->bindParam(3, $data['apmat'], PDO::PARAM_STR);
            $result->bindParam(4, $data['telefono'], PDO::PARAM_STR);
            $result->bindParam(5, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("Error Profesor->modificarUsuario()" . $e->getMessage());
        }
    }

    public function eliminarProfesor($data){
        try{
            $result = Database::connect()->prepare("DELETE FROM tb_profesor WHERE id = ?");
            $result->bindParam(1,$data['id'], PDO::PARAM_STR);
            return $result->execute();
        }catch(Exception $e){
            die("Error Profesor->eleiminarProfesor()". $e->getMessage());
        }
    }
}
