<?php
session_start();
include_once 'Router.php';
include_once 'fenom-master/src/Fenom.php';
include_once 'account.routes.php';
Fenom::registerAutoload();
function get_fenom() {
	return Fenom::factory('', 'cache/', array('auto_reload' => true));
}
$content = Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
$Fenom = get_fenom();
$nav = nav();
$Fenom->display('/fenom-master/sandbox/templates/pract/main.tpl', array('content' => $content, 'nav'=>$nav));


