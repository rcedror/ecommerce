<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Rcedror\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
  
	$page = new Page();

	$data = array("nome" => "Renato");
	$page->setTpl("index",$data);
});

$app->run();

 ?>