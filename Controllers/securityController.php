<?php
class securityController extends Security
{
    public function login()
    {
        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user))
        {
            $_SESSION['message'] = 'Correo incorrecto.';
            return header('location:?method=index');
        }
        if(password_verify($_POST['password'], $user->pswd))
        {
            $_SESSION['user'] = $user;
            return header('location:?controller=user');
        }

        $_SESSION['message'] = 'Contraseña incorrecta.';
        return header('location:?method=index');
    }
    //destruye la variable de sesión.
    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        // redirecciona al controlador index.
        header('location:?controller=index');
    }
}