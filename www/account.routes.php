<?php
function user2($id1,$id2){
	return "Это страница пользователя $id1,$id2";
}
function user($id1){
	return "Это страница пользователя $id1";
}
function submit(){
	if($_POST['password']== ($_POST['password_confirmation'])){
		$data=serialize($_POST);
		file_put_contents("acc/".$_POST['login'].".txt",$data);
		return user($id1);
	}
	else{
		$_SESSION['error']='Пароли не совпадают';
		$Fenom = get_fenom();
		$error=$Fenom->fetch('/fenom-master/sandbox/templates/pract/error.tpl', array());
		return $Fenom->fetch('/fenom-master/sandbox/templates/pract/registration.tpl', array('content' => $content, 'error'=>$error));
	}
}
function add(){
	$Fenom = get_fenom();
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/registration.tpl', array('content' => $content));
}
function auth(){
	$Fenom=get_fenom();
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/auth.tpl',array('content'=>$content));
}
function auth1(){
	$file=file_get_contents('acc/'.$_POST['login'].'.txt');
	$str=unserialize($file);
	if ($_POST['password']==$str['password']) {
		header('Location: /');
    $_SESSION['enter']='yes';
    $_SESSION['user']=$_POST['login'];
	}
}
function notfound(){
	include "404.html";
}
function logout(){
	session_destroy();
	header('Location: /');
}
function nav(){
	$Fenom = get_fenom();
	$nav = array(
	array('link'=>'Главная', 'href'=>'/'),
	array('link'=>'Регистрация', 'href'=>'/user/add/'),
	array('link'=>'Авторизация', 'href'=>'/user/auth/'),
	array('link'=>'Выход', 'href'=>'/logout'),
	);
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/nav.tpl', array('nav' => $nav));
}
function HOME(){
	if($_SESSION['enter']=='yes'){
		echo'Добро пожаловать,'.$_SESSION['user'];
	}
	$Fenom = get_fenom();
	return $Fenom->fetch('/fenom-master/sandbox/templates/pract/content.tpl', array('content' => $content));
}
Router::get('^\/home\/?$', 'home');
Router::get('^\/$', 'home');
Router::get('^\/logout$', 'logout');
Router::get('^\/user\/add\/?$', 'add');
Router::get('^\/user\/auth\/?$','auth');
Router::post('^\/user\/auth\/1?$','auth1');
Router::get('^\/user\/(\d+)\/?$', 'user');
Router::get('^\/user\/(\d+)\/(\d+)\/?$', 'user2');
Router::get('.*', 'notfound');
Router::post('^\/reg\/submit\/?$','submit');
?>