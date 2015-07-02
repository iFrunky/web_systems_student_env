<?php 
/** Fenom template '/fenom-master/sandbox/templates/pract/registration.tpl' compiled at 2015-07-02 11:13:30 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?>
	<div class="well">
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form">
				<h1 align="center">Регистрация</h1>
				<hr>
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
				<div class=""><input type="submit" value="Регистрация" class="btn btn-primary btn-block btn-lg" tabindex="6"></div>

			</form>
		</div>
	</div>
	</div>
<!--
	<div class="panel-heading">
	<h1>HEADER</h1>
	</div>

	<nav class="col-sm-2">
	<div class="nav nav-pills nav-stacked" >
	<p style="margin-left:15px;">Navigation</p>
	<ul>
	<br />
	<a href="/"><li>Home</li></a>
	<a href="/registration.html"><li>Регистрация</li></a>
	<a href="#"><li>user 10</li></a>
	<a href="/user/11"><li>user 11</li></a>
	</ul>
	</div>
	</nav>
 <footer class="row footer">
      <div class="panel-footer"><p>&copy; 2015 <a href="/">Webdb.dev</a></p></div>
    </footer>
</body>
</html> -->
<?php
}, array(
	'options' => 128,
	'provider' => false,
	'name' => '/fenom-master/sandbox/templates/pract/registration.tpl',
	'base_name' => '/fenom-master/sandbox/templates/pract/registration.tpl',
	'time' => 1435835345,
	'depends' => array (
  0 => 
  array (
    '/fenom-master/sandbox/templates/pract/registration.tpl' => 1435835345,
  ),
),
	'macros' => array(),

        ));
