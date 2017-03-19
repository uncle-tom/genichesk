<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); 
global $wp_query;

?>

<?php $mainImage = wp_get_attachment_url( get_post_thumbnail_id($post_id, 'full'))
?>

<div class="container-fluid" style="margin-top: -150px">
	<div class="col-md-6 col-md-push-3">
		<div id="page-header">
			<!-- PAGE TITLE : begin -->
			<div class="page-title">
				<h1>Результаты поиска</h1></div>
			<!-- PAGE TITLE : end -->
		</div>
		<div class="mainblock">
			<div class="mainblock-content post">
				<div class="wapper">
  <div class="contentarea clearfix">
    <div class="content">
      <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
        <?php _e( 'Поиск по', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

        <?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>

               <li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>">Read More</a></div>
               </li>

            <?php } ?>

            </ul>

           <?php paginate_links(); ?>

        <?php } ?>

    </div>
  </div>
</div>
			</div>
		</div>
		<div class="mainblock">
			<?php echo paginate_links( $args ) ?>
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

	<?php include 'leftsidebar.php'; ?>	

	<div class="col-md-3">
		<?php include 'rightsidebar.php'; ?>
	</div>
</div>

<?php get_footer(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_search_form(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>