<?php 
/** Fenom template '/fenom-master/sandbox/templates/pract/main.tpl' compiled at 2015-07-03 05:53:17 */
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
 	<?php
/* /fenom-master/sandbox/templates/pract/main.tpl:18: {$nav} */
 echo $var["nav"]; ?>
	<?php
/* /fenom-master/sandbox/templates/pract/main.tpl:19: {$content} */
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
	'time' => 1435902406,
	'depends' => array (
  0 => 
  array (
    '/fenom-master/sandbox/templates/pract/main.tpl' => 1435902406,
  ),
),
	'macros' => array(),

        ));
