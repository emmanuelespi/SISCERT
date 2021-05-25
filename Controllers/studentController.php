<?php

class studentController extends Student{
    public function __construct()
    {
        
    }

    public function index()
    {
        require_once "Views/layouts/header.php";
        require_once "Views/student/index.php";
        require_once "Views/layouts/footer.php";
    }

    public function show(){
        require_once "Views/layouts/header.php";
        require_once "Views/student/showstudent.php";
        require_once "Views/layouts/footer.php";
    }

    public function create(){
        require_once "Views/layouts/header.php";
        require_once "Views/student/create.php";
        require_once "Views/layouts/footer.php";
    }

    public function edit(){
        require_once "Views/layouts/header.php";
        require_once "Views/student/edit.php";
        require_once "Views/layouts/footer.php";
    }

    public function update(){
        require_once "Views/layouts/header.php";
        require_once "Views/student/edit.php";
        require_once "Views/layouts/footer.php";        
    }

    public function delete(){
    }

    public function store(){
        parent::agregarAlumno($_POST);
        header('location:?controller=student&method=show');
    }
}