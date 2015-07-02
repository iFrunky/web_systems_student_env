	<nav class="col-sm-2">
	<div class="nav nav-pills nav-stacked" >
	<p style="margin-left:15px;">Navigation</p>
	<ul>
	<br />
{foreach $menu as $lnk => $menuitem}
<li {if $lnk==$url}class="active"{/if}><a href="{$lnk}">{$menuitem}</a></li>
{/foreach}
	</ul>
	</div>
	</nav>

