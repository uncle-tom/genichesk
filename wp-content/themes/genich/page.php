<?php get_header(); ?>
<?php $mainImage = wp_get_attachment_url( get_post_thumbnail_id($post_id, 'full'))
?>

<div class="container-fluid" style="margin-top: -150px">
	<?php include 'leftsidebar.php'; ?>

	<div class="col-md-6">
		<div id="page-header">
			<!-- PAGE TITLE : begin -->
			<div class="page-title">
				<h1><?php single_post_title(); ?></h1></div>
			<!-- PAGE TITLE : end -->
		</div>
		<div class="mainblock">
			<div class="photo">
				<img src="<?php echo $mainImage ?>" alt="">
			</div>
			<div class="mainblock-content post">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="single-post-date">
				<?php the_time('F j, Y') ?> 
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
	</div>

	<div class="col-md-3">
		<?php include 'rightsidebar.php'; ?>
	</div>
</div>
<?php get_footer(); ?>