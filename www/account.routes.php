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
function auth(){
	$Fenom=get_fenom();
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/auth.tpl',array('auth'=>$auth));
}
function error(){
	include "404.html";
}
function nav(){
	$Fenom = get_fenom();
	$nav = array(
	array('link'=>'Главная', 'href'=>'/'),
	array('link'=>'Регистрация', 'href'=>'/user/add/'),
	array('link'=>'Авторизация', 'href'=>'/auth/'),
	);
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/nav.tpl', array('nav' => $nav));
}
function HOME(){
	$Fenom = get_fenom();
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/content.tpl', array('content' => $content));
}
Router::get('^\/home\/?$', 'home');
Router::get('^\/$', 'home');
Router::get('^\/user\/add\/?$', 'add');
Router::get('^\/auth\/?$','auth');
Router::get('^\/user\/(\d+)\/?$', 'user');
Router::get('^\/user\/(\d+)\/(\d+)\/?$', 'user2');
Router::get('.*', 'error');
?>