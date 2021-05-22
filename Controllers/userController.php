<?php

class userController extends User{
    
    public function __construct()
    {
        Security::verifyUser();
    }

    //Vista de panel de usuario
    public function index(){
        require_once 'Views/layouts/header.php';
        require_once 'Views/user/index.php';
        require_once 'Views/layouts/footer.php';
    }

    //Vista para mostrar el listado de usuarios
    public function show(){
        require_once 'Views/layouts/header.php';
        require_once 'Views/user/showuser.php';
        require_once 'Views/layouts/footer.php';
    }

    //Vista para ingresar nuevos usuarios
    public function create(){
        require_once 'Views/layouts/header.php';
        require_once 'Views/user/create.php';
        require_once 'Views/layouts/footer.php';
    }

    //Para encriptar la contraseña mediante hash
    public function store(){
        $_POST['pswd'] = password_hash($_POST['pswd'], PASSWORD_DEFAULT);
        echo parent::agregarUsuario($_POST) ? header('location:?controller=user&method=show') : 'Error en el registro';
    }

    //Vista para editar los datos de un registro
    public function edit(){
        $user = parent::consultarUsuario($_GET['id']);
        require_once 'Views/layouts/header.php';
        require_once 'Views/user/edit.php';
        require_once 'Views/layouts/footer.php';
    }

    //Modifica el registro en la base de datos
    public function update(){
        $_POST['id'] = $_GET['id'];
        if(parent::modificarUsuario($_POST)){
            header('location:?controller=user&method=show');
        }else{
            die('Error al actualizar');
        }
    }

    //Para eliminar el registro en una base de datos
    public function delete(){
        $_POST['id'] = $_GET['id'];
        if(parent::eliminarUsuario($_POST)){
            header('location:?controller=user&method=show');
        }else{
            die('Error al actualizar');
        }
        //var_dump(parent::eliminarUsuario($_GET['id']));
    }
}