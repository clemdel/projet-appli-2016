<?php
$loader = require("./vendor/autoload.php");
require_once "php/autoload.php";

class Index extends View {
    function __construct(){
        parent::__construct();
        echo $this->twig->render("index.html");
    }
}

new Index;