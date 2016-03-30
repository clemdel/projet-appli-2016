<?php
namespace App;

function __autoload($nom){
    echo $nom;
    if(file_exists("./class/" . $nom . '.php'))
        include_once("./class/" . $nom . '.php');
}