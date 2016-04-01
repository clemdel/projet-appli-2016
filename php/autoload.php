<?php

function _Autoload($nom){
    if(file_exists(__DIR__."/class/" . $nom . '.php'))
        include_once(__DIR__."/class/" . $nom . '.php');

}
spl_autoload_register("_Autoload");