<?php
$loader = require("./vendor/autoload.php");
$loader->add("App", __DIR__ . "php/class/");

class test extends Controller {
    function __construct(){
        parent::__construct();
        echo $this->twig->render("test.html");
    }
}

new test;