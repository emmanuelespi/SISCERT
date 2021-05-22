<?php
class Security extends Database{

    public function validateLogin($email)
    {
        try {
            $result = parent::connect()->prepare("SELECT * FROM tb_users WHERE email = ?");
            $result->bindParam(1, $email, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch();
        } catch (Exception $th) {
            die($th->getMessage());
        }
    }

    public static function verifyUser()
    {
        if(!isset($_SESSION['user'])) header('location:?method=login');
    }
}