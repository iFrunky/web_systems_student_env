<?php

function user2($id1,$id2){
	return "Это страница пользователя № $id1,$id2";
}
function user($id1){
	return "Это страница пользователя № $id1";
}
function add(){
	$Fenom = get_fenom();
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/registration.tpl', array('content' => $content));
}
function error(){
	include "404.html";
}
function HOME(){
	return "HOME";
}
Router::get('^\/home\/?$', 'home');
Router::get('^\/$', 'home');
Router::get('^\/user\/add\/?$', 'add');
Router::get('^\/user\/(\d+)\/?$', 'user');
Router::get('^\/user\/(\d+)\/(\d+)\/?$', 'user2');
Router::get('.*', 'error');
?>