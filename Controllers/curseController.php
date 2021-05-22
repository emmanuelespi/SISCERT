<?php

class curseController extends Curse{

    public function __construct()
    {
        
    }

    public function index(){

    }

    public function show(){
        require_once "Views/layouts/header.php";
        require_once "Views/curse/showcurso.php";
        require_once "Views/layouts/footer.php";
    }
    public function create(){
        require_once "Views/layouts/header.php";
        require_once "Views/curse/create.php";
        require_once "Views/layouts/footer.php";
    }

    public function store(){
        parent::agregarCurso($_POST['nombre']);
        header('location:?controller=curse&method=show');
    }
}