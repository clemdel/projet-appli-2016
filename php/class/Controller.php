<?php

class Controller {
    protected static $twig_path_views = "./views/";
    protected static $twig_path_cache = "./caches/";
    protected $twig;
    protected $twig_load;

    function __construct(){
        // Mise en place de Twig
        $this->twig();
    }

    function twig(){
        $this->twig_load = new Twig_Loader_Filesystem(self::$twig_path_views);
        $this->twig = new Twig_Environment($this->twig_load);
    }
}