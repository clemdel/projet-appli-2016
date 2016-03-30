<?php

class controller {
    protected $twig_path_views = "./views/";
    protected $twig_path_cache = "./caches/";
    protected $twig;

    function __construct(){
        // Mise en place de Twig
        $this->twig();
    }

    function twig(){
        $this->twig_path_views = new Twig_Loader_Filesystem("./views/");
        $this->twig = new Twig_Environment($this->twig_path_views);
    }
}