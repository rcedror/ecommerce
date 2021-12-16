<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Rcedror\Page;
use \Rcedror\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
  
	$page = new Page();

	$data = array("nome" => "Renato");
	$page->setTpl("index",$data);
});

$app->get('/admin', function() {
  
	$page = new PageAdmin();

	$data = array("nome" => "Renato");
	$page->setTpl("index",$data);
});

$app->run();

 ?>