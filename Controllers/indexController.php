<?php

class indexController
{

    public function __construct()
    {
    }

    public function index()
    {
        require_once "Views/layouts/header.php";
        require_once "Views/index/index.php";
        require_once "Views/layouts/footer.php";
    }

    public function login()
    {
        require_once "Views/layouts/header.php";
        require_once "Views/user/index.php";
        require_once "Views/layouts/footer.php";
    }
    
}
