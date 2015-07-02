<?php 
/** Fenom template '/fenom-master/sandbox/templates/pract/main.tpl' compiled at 2015-07-02 11:15:23 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css">
<link rel="javascript" type="text/javascript" href="/js/bootstrap.js">
<link rel="javascript" type="text/javascript" href="/js/bootstrap.min.js">
<meta charset="utf-8">
	<title>Test</title>
</head>
<body>
<div class="panel-heading">
<h1>HEADER</h1>
</div>
	<!--NAV-->
	<nav class="col-sm-2">
	<div class="nav nav-pills nav-stacked" >
	<p style="margin-left:15px;">Navigation</p>
	<ul>
	<br />
	<a href="/"><li>Home</li></a>
	<a href="/user/add/"><li>Регистрация</li></a>
	<a href="#"><li>user 10</li></a>
	<a href="/user/11"><li>user 11</li></a>
	</ul>
	</div>
	</nav>
	<!--NAV-->
	<?php
/* /fenom-master/sandbox/templates/pract/main.tpl:32: {$content} */
 echo $var["content"]; ?>
 <footer class="row footer">
      <div class="panel-footer"><p>&copy; 2015 <a href="/">Webdb.dev</a></p></div>
    </footer>
</body>
</html><?php
}, array(
	'options' => 128,
	'provider' => false,
	'name' => '/fenom-master/sandbox/templates/pract/main.tpl',
	'base_name' => '/fenom-master/sandbox/templates/pract/main.tpl',
	'time' => 1435835719,
	'depends' => array (
  0 => 
  array (
    '/fenom-master/sandbox/templates/pract/main.tpl' => 1435835719,
  ),
),
	'macros' => array(),

        ));
