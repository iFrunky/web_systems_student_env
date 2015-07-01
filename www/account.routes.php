<?php
function user2($id1,$id2){
	echo "Это страница пользователя № $id1,$id2";
}
function user($id1){
	echo "Это страница пользователя № $id1";
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
Router::get('^\/home\/?$', 'home');
Router::get('^\/$', 'home');
Router::get('^\/user\/add\/?$', 'add');
Router::get('^\/user\/(\d+)\/?$', 'user');
Router::get('^\/user\/(\d+)\/(\d+)\/?$', 'user2');
Router::get('.*', 'error');
?>

