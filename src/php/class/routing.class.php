<?php
class user{
	public function getUser($nom, $prenom){
		echo $nom;
	}
}

class routing {
	protected $routes_config = array(); 
	protected $routes_regex = array();

	public function add($pattern, $params){
		$attributes = $params['attributes'];
		$keys = array_keys($attributes);
 		
 		$pattern = ereg_replace('/', '\/', $pattern);

		for($i = 0; $i < count($keys); $i++)
			$pattern = ereg_replace('\{'.$keys[$i].'\}', '('.$attributes[$keys[$i]].')', $pattern);

		array_push($this->routes_config, $params);
		array_push($this->routes_regex, $pattern);
	}

	public function getRoute($route){
		for($i = 0; $i < count($this->routes_regex); $i++){
			if(preg_match('/' . $this->routes_regex[$i] . '/', $route, $matches)) {
				$config = $this->routes_config[$i]; 
				$args = array(); 
				
				for($j = 0; $j < count($config['attributes']); $j++){
					array_push($args, $matches[$j + 1]);
				}

				call_user_func_array($config['controller'] . '::' . $config['method'], $args);

				return true;
			}
		}

		return $this->getDefaultRoute();
	}

	public function getDefaultRoute(){
		echo 'getDefaultRoute';

		return true;
	}

	public function getError(){
		echo 'getError()';

		return false;
	}

	public function __destruct(){
		if(!empty($_GET['route']))
			$this->getRoute($_GET['route']);
		else 
			$this->getDefaultRoute();
	}
}

$routing = new routing();
$routing->add('utilisateur/{nom}/{prenom}', array(
	'controller' => 'user',
	'method' => 'getUser',
	'attributes' => array(
		'nom' => '[a-z]{1,30}',
		'prenom' => '[a-z]{1,30}')));
?>