<?php
$config = file_get_contents('make.json');
$config = json_decode($config);
echo count($config);
?>