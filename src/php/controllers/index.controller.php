<?php
class index extends controller {
	public function getIndex(){
		$content = file_get_contents(BASE_DIR . 'cache/data/test.json');
		$content = json_decode($content, true);
		$content[] = $_POST;
		$content = json_encode($content);
		file_put_contents(BASE_DIR . 'cache/data/test.json', $content);

		$template = $this->twig->loadTemplate('index.twig.html');

		$pre = file_get_contents(BASE_DIR . 'cache/data/test.json');
		$pre = json_decode($pre);

		ob_start();
		var_dump($pre);
		$pre = ob_get_contents();
		ob_end_clean();
		
		echo $template->render(array('CONTENU' => $pre));
	}
}
?>