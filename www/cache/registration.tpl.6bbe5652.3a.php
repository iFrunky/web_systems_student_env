<?php 
/** Fenom template '/fenom-master/sandbox/templates/pract/registration.tpl' compiled at 2015-07-03 08:08:13 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="well">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form action="/reg/submit" method="post">
				<h1 align="center">Регистрация</h1>
				<hr>
				<?php
/* /fenom-master/sandbox/templates/pract/registration.tpl:7: {$error} */
 echo $var["error"]; ?>
				<div class="form-group">
					<input type="text" name="login" id="display_name" class="form-control input-lg" placeholder="Login" tabindex="2">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3">
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Пароль" tabindex="4">
						</div>
					</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Подтвердите пароль" tabindex="5">
					</div>
				</div>
				</div>
				<div class="row">
				<div class="col-xs-6 col-md-6">
				<input type="submit" value="Регистрация" class="btn btn-primary btn-block btn-lg" tabindex="6">
				</div>
				<div class="col-xs-6 col-md-6">
				<input type="reset" value="Сбросить" class="btn btn-success btn-block btn-lg" tabindex="6">
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}, array(
	'options' => 128,
	'provider' => false,
	'name' => '/fenom-master/sandbox/templates/pract/registration.tpl',
	'base_name' => '/fenom-master/sandbox/templates/pract/registration.tpl',
	'time' => 1435910888,
	'depends' => array (
  0 => 
  array (
    '/fenom-master/sandbox/templates/pract/registration.tpl' => 1435910888,
  ),
),
	'macros' => array(),

        ));
