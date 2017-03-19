<html>
<title>Genichesk Info</title>
<?php define('WP_USE_THEMES', false); define('WP_CACHE', true); get_header(); ?>


<body>

<div class="container-fluid" style="margin-top: -150px">
	<div class="col-md-6 col-md-push-3">
		<div id="page-header">
			<!-- PAGE TITLE : begin -->
			<div class="page-title">
				<h1>Добро пожаловать!<br><em>Новости Геническа и Арабатской стрелки</em></h1></div>
			<!-- PAGE TITLE : end -->
		</div>
		<div class="mainblock">
			<div class="mainblock-title">
				<img src="http://genichesk.info/wp-content/uploads/2017/02/newspaper.png" alt="">
				<span>Новости</span>
			</div>
			<div class="mainblock-content">
				<?php
					global $post;
					$args = array( 'posts_per_page' => 1, 'offset'=> 1 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<?php $id = get_post_thumbnail_id(); ?>
						<div class="mainblock-mainpost">
							<img src="<?php echo wp_get_attachment_url($id) ?>" alt="">
							<div class="mainblock-mainpost-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
							<div class="mainblock-mainpost-time">
								<i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j, Y') ?>	
							</div>
							
							<div class="mainblock-mainpost-content">
								<?php the_content('...'); ?>	
							</div>
							
						</div>
						<?php
					}
					wp_reset_postdata();
				?>
				<div class="list-posts">
					<?php
					global $post;
					$newargs = array( 'posts_per_page' => 5, 'offset'=> 2 );
					$myposts = get_posts( $newargs );
					foreach( $myposts as $post ){ setup_postdata($post);
						?>
						<div class="mainblock-post">
							<div class="mainblock-post-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>		
							</div>
							<div class="mainblock-post-date">
								<?php the_time('F j, Y') ?>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
				?>
				</div>
				<div>
					<a href="#" style="font-weight:500">Все новости</a>
				</div>
			</div>
		</div>
		<div class="mainblock">
			<div class="mainblock-title">
				<img src="http://genichesk.info/wp-content/uploads/2017/02/double-directional-arrow.png" alt="">
				<span>Рубрики сайта</span>
				<div class="list-categories">
					<ul>
						<?php wp_list_categories('title_li=&depth=1'); ?> 
					</ul>	
				</div>
			</div>
		</div>
		<?php include 'photo-page.php'; ?>
	</div>

	<?php include 'leftsidebar.php'; ?>

	<div class="col-md-3">
		<?php include 'rightsidebar.php'; ?>
	</div>
</div>

<script>
  $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
</script>

<?php get_footer(); ?>
