<div class="sidebar">
	<div class="sidebar-title"><img src="http://genichesk.info/wp-content/uploads/2017/02/beach.png" alt="">
		<span>Где отдохнуть летом 2017:</span>
	</div>
	<?php wp_nav_menu( array(
		'theme_location'  => '',
		'menu'            => 'Где отдохнуть 2017', 
		'container'       => 'div', 
		'container_class' => '', 
		'container_id'    => '',
		'menu_class'      => 'right-sidebar-menu', 
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => '',
	) ); ?>
</div>
<div class="sidebar">
	<img src="https://tpc.googlesyndication.com/simgad/4958361518961808237" alt="">
</div>
<div class="sidebar">
	<div class="sidebar-text">
		<span>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right-Sidebar") ) : ?>
			<?php endif; ?>
		</span>
	</div>
</div>