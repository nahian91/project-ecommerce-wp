<?php


get_header();
?>
<section class="breadcrumb-section set-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/breadcrumb.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb__text">
					<h2><?php woocommerce_page_title(); ?></h2>
					<div class="breadcrumb__option">
						<a href="<?php echo site_url();?>">Home</a>
						<span><?php woocommerce_page_title(); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container search-page">
	<div class="row">
		<?php
			while ( have_posts() ) { the_post(); ?>
			<div class="col-lg-4">
				<?php wc_get_template_part( 'content', 'product' ); ?>
			</div>
		<?php } ?>
	</div>
</div>
<?php
get_footer();