<?php 
/** Fenom template '/fenom-master/sandbox/templates/pract/auth.tpl' compiled at 2015-07-03 10:38:44 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="well">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form action="/user/auth/1" method="post">
				<h1 align="center">Авторизация</h1>
				<hr>
				<div class="form-group">
					<input type="text" name="login" id="display_name" class="form-control input-lg" placeholder="Login" tabindex="2">
				</div>
				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Пароль" tabindex="4">
				</div>
				<input type="submit" name="submit" value="Авторизация" class="btn btn-primary btn-block btn-lg" tabindex="6">
			</form>
		</div>
	</div>
	</div><?php
}, array(
	'options' => 128,
	'provider' => false,
	'name' => '/fenom-master/sandbox/templates/pract/auth.tpl',
	'base_name' => '/fenom-master/sandbox/templates/pract/auth.tpl',
	'time' => 1435919896,
	'depends' => array (
  0 => 
  array (
    '/fenom-master/sandbox/templates/pract/auth.tpl' => 1435919896,
  ),
),
	'macros' => array(),

        ));
