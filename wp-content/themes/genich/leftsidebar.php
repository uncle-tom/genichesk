<div class="col-md-3 col-md-pull-6">
	<div class="menu-verhnee-menyu-container">
		<ul class="menu mobile-show">
			<li>
				<a href="/">Главная</a>
			</li>
			<li>
				<div>
	        <a data-toggle="collapse" data-parent="#accordion" href="#leftmenugenichesk">
	          Базы отдыха Геническ
	        </a>
			    <div id="leftmenugenichesk" class="panel-collapse collapse">
		        <?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => 'Основное-левое', 
							'container'       => 'div', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
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
			    </div><!-- /#collapseOne -->
			  </div>
			</li>
			<li>
				<a href="http://genichesk.info/?page_id=1098">Отдых в Геническе 2017</a>
			</li>
			<li>
				<div>
	        <a data-toggle="collapse" data-parent="#accordion" href="#leftmenuarabat">
	          Отдых на Арабатской стрелке 2017
	        </a>
			    <div id="leftmenuarabat" class="panel-collapse collapse">
		        <?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => 'Основное-левое', 
							'container'       => 'div', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
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
			    </div><!-- /#collapseOne -->
			  </div>
			</li>
			<li>
				<div>
	        <a data-toggle="collapse" data-parent="#accordion" href="#leftmenuspravka">
	          Справочник по Геническу
	        </a>
			    <div id="leftmenuspravka" class="panel-collapse collapse">
		        <?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => 'Основное-левое', 
							'container'       => 'div', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu', 
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
			    </div><!-- /#collapseOne -->
			  </div>
			</li>
		</ul>
		<ul id="menu-verhnee-menyu" class="menu pc-show">
			<li>
				<a href="/">Главная</a>
			</li>
			<li class="dropdown">
				<div class="dropdown-toggle"><a href="#">База отдыха Геническ</a></div>
				<div class="dropdown-menu-125 dropdown-menu">
					<?php wp_nav_menu( array(
						'theme_location'  => '',
						'menu'            => 'Основное-левое', 
						'container'       => 'div', 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => 'menu', 
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
			</li>
		</ul>
	</div>
	<div class="sidebar">
		<?php get_search_form( true ); ?>	
	</div>
	

	<div class="sidebar">
		<div class="sidebar-title">
			<img src="http://genichesk.info/wp-content/uploads/2017/02/taxi-sign.png" alt="">
			<span>Такси по Арабатке</span>
		</div>
		<div class="sidebar-text">
			Такси с лицензией 
			<br>В Крым и по Арабатке 
			<br>Новый Фиат-Добло 
			<br><em>водитель со стажем</em>
			<br>
			<br><i class="fa fa-phone" aria-hidden="true"></i> +38-050-17-76-286	
			<br><i class="fa fa-phone" aria-hidden="true"></i> +38-093-94-23-360 
			<br><i class="fa fa-phone" aria-hidden="true"></i> +38-097-08-95-418
			<br>
			<br>Комплектация групп для поездок
		</div>
	</div>
	<!-- <div class="sidebar">
		<div class="sidebar-title">
			<img src="http://localhost/mythemetwo/genichesk/wp-content/uploads/2017/02/youtube-logo.png" alt="">
			<span>Видео дня</span>
		</div>
		<div class="sidebar-text video-day">
			<a href="#">
				<img src="http://localhost/mythemetwo/genichesk/wp-content/uploads/2017/02/Сгоревший-пансионат-на-Арабатской-стрелке-YouTube.png" alt="">
				<p>Ужасающие последствия пожара на пансионате Арабатской стрелки</p>
			</a>
		</div>
	</div> -->
	<div class="sidebar">
		<div class="sidebar-text">
			<span>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left-Sidebar-Video") ) : ?>
				<?php endif; ?>
			</span>
		</div>
	</div>
	<div class="sidebar">
		<div class="sidebar-text">
			<span>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left-Sidebar") ) : ?>
				<?php endif; ?>
			</span>
		</div>
	</div>
</div>