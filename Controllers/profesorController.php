<?php

class profesorController extends Profesor
{

    public function __construct()
    {
    }

    public function index()
    {
    }

    public function show()
    {
        require_once "Views/layouts/header.php";
        require_once "Views/profesor/showprofesor.php";
        require_once "Views/layouts/footer.php";
    }

    public function create()
    {
        require_once "Views/layouts/header.php";
        require_once "Views/profesor/create.php";
        require_once "Views/layouts/footer.php";
    }

    public function edit()
    {
        require_once "Views/layouts/header.php";
        require_once "Views/profesor/edit.php";
        require_once "Views/layouts/footer.php";
    }

    public function store()
    {
        parent::agregarProfesor($_POST);
        header('location:?controller=profesor&method=show');
    }

    public function update()
    {
        $_POST['id'] = $_GET['id'];
        if(parent::modificarProfesor($_POST)){
            header("location:?controller=profesor&method=show");
        }else{
            die("Error al modificar.");
        }
    }

    public function delete()
    {
        $_POST['id'] = $_GET['id'];
        if (parent::eliminarProfesor($_POST)) {
            header("location:?controller=profesor&method=show");
        } else {
            die("Error al eliminar.");
        }
    }
}
