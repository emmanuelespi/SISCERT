<?php

class User 
{
    public static function consultarTodo()
    {
        try {
            $result = Database::connect()->prepare('SELECT * FROM tb_users');
            $result->execute();
            //Devuelve toda una colección de datos
            return $result->fetchAll();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function agregarUsuario($data)
    {
        try {
            $result = Database::connect()->prepare("INSERT INTO tb_users (id, usuario, email, pswd, estado, tipo) VALUES (NULL,?,?,?,'1','Usuario')");
            $result->bindParam(1, $data['user'], PDO::PARAM_STR);
            $result->bindParam(2, $data['email'], PDO::PARAM_STR);
            $result->bindParam(3, $data['pswd'], PDO::PARAM_STR);
            return $result->execute();
        } catch (Exception $e) {
            die("Error User->agregarUsuario()" . $e->getMessage());
        }
    }

    public function consultarUsuario($id)
    {
        try {
            $result = Database::connect()->prepare('SELECT * FROM tb_users WHERE id = ?');
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            //Regresa un valor único
            return $result->fetch();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function modificarUsuario($data)
    {
        try {
            $result = Database::connect()->prepare("UPDATE tb_users SET usuario = ?, email = ? WHERE id = ?");
            $result->bindParam(1, $data['user'], PDO::PARAM_STR);
            $result->bindParam(2, $data['email'], PDO::PARAM_STR);
            $result->bindParam(3, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $e) {
            die("Error User->modificarUsuario()" . $e->getMessage());
        }
    }

    public function eliminarUsuario($data){
        try {
            $result = Database::connect()->prepare("DELETE FROM tb_users where  id= ?");
            $result->bindParam(1, $data['id'],PDO::PARAM_INT);
            return $result->execute();
        } catch (Exception $th) {
            die("Error user->eliminar()". $th->getMessage());
        }
    }
}
