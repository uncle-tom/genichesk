<?php
/*
Template Name: Category
*/
get_header(); ?>

<?php $mainImage = wp_get_attachment_url( get_post_thumbnail_id($post_id, 'full'))
?>

<div class="container-fluid" style="margin-top: -150px">
	<?php include 'leftsidebar.php'; ?>

	<div class="col-md-6">
		<div id="page-header">
			<!-- PAGE TITLE : begin -->
			<div class="page-title">
				<h1><?php single_cat_title(); ?></h1></div>
			<!-- PAGE TITLE : end -->
		</div>
		<div class="mainblock">
			<div class="mainblock-content post">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="mainblock-post">
						<div class="mainblock-post-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>		
						</div>
						<div class="mainblock-post-date">
							<?php the_time('F j, Y') ?>
						</div>
					</div>
				<?php endwhile; else: ?>
					<h3><?php _e('К сожалению, по Вашему запросу ничего не найдено.'); ?></h3>
				<?php endif; ?>
			</div>
		</div>
		<div class="mainblock">
			<?php the_posts_pagination(array(
				'mid_size' => 2,

			) ); ?>
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
	</div>

	<div class="col-md-3">
		<?php include 'rightsidebar.php'; ?>
	</div>
</div>

<?php get_footer(); ?>