<?php
function user($id){
	echo "Это страница пользователя № $id";
}
function add(){
	echo "Это страница добавления пользователя";
}
function error(){
	include "404.html";
}
function HOME(){
	//header('Location: /');
	include_once 'home.html';
}
Router::get('^\/home\/$', 'home');
Router::get('^\/$', 'home');
Router::get('^\/user(\/?)add\/?$', 'add');

Router::get('^\/user(\/?)(\d+)$', 'user');
Router::get('.*', 'error');
?>

