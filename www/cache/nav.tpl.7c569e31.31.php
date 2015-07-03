<?php 
/** Fenom template '/fenom-master/sandbox/templates/pract/nav.tpl' compiled at 2015-07-02 12:39:30 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="col-sm-2">
	<div class="nav nav-pills nav-stacked" >
	<p style="margin-left:15px;"><h4>Navigation</h4></p>
            <ul class="nav navbar-nav">
				<?php
/* /fenom-master/sandbox/templates/pract/nav.tpl:5: {foreach $nav as $elements} */
  if(!empty($var["nav"]) && (is_array($var["nav"]) || $var["nav"] instanceof \Traversable)) {
  foreach($var["nav"] as $var["elements"]) {  ?>
					<li class=""><a href='<?php
/* /fenom-master/sandbox/templates/pract/nav.tpl:6: {$elements.href} */
 echo $var["elements"]["href"]; ?>'><?php
/* /fenom-master/sandbox/templates/pract/nav.tpl:6: {$elements.link} */
 echo $var["elements"]["link"]; ?></a></li>
				<?php
/* /fenom-master/sandbox/templates/pract/nav.tpl:7: {/foreach} */
   } } ?>
			</ul>
	</div>
</div><?php
}, array(
	'options' => 128,
	'provider' => false,
	'name' => '/fenom-master/sandbox/templates/pract/nav.tpl',
	'base_name' => '/fenom-master/sandbox/templates/pract/nav.tpl',
	'time' => 1435840529,
	'depends' => array (
  0 => 
  array (
    '/fenom-master/sandbox/templates/pract/nav.tpl' => 1435840529,
  ),
),
	'macros' => array(),

        ));
