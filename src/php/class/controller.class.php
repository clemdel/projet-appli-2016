<?php
class controller {
	protected $twig;

	public function __construct(){
		$this->pushTwig();
	}

	public function getTwig(){
		return $this->twig;
	}

	protected function pushTwig(){
		try {
			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem(BASE_DIR . 'src/php/views');
			$twig = new Twig_Environment($loader, array(
			    //'cache' => '../cache',
			));
		}
		catch(Exception $e){
			echo $e->getMessage();
		}

		$this->twig = $twig;
	}
}
?>