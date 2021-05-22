<?php

class studentController{
    public function __construct()
    {
        
    }

    public function index()
    {

    }

    public function show(){
        require_once "Views/layouts/header.php";
        require_once "Views/student/showprofesor.php";
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
}