<?php  
require_once (dirname(__FILE__). DIRECTORY_SEPARATOR . "autoload.php");
echo "On index page<br>";
$v = $_SERVER['REQUEST_URI'];
echo  "Request URI: $v <br>";
$frontController = new FrontController();
$frontController->run();
echo "Front controller has run: request path is:<br>";
$v = $_SERVER['REQUEST_URI'];
echo  "Request URI after: $v <br>";
?>
