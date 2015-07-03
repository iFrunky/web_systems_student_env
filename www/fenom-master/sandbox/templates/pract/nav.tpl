<div class="col-sm-2">
	<div class="nav nav-pills nav-stacked" >
	<p style="margin-left:15px;"><h4>Navigation</h4></p>
            <ul class="nav navbar-nav">
				{foreach $nav as $elements}
					<li class=""><a href='{$elements.href}'>{$elements.link}</a></li>
				{/foreach}
			</ul>
	</div>
</div>