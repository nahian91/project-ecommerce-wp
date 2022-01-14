<?php

get_header();

?>

<section class="breadcrumb-section set-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/breadcrumb.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb__text">
					<h2>404 Not Found!</h2>
					<div class="breadcrumb__option">
						<a href="<?php echo site_url();?>">Home</a>
						<span>404 Not Found!</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container 404-page">
    <div class="row">
        <div class="col-xl-12">
            <h1>Sorry! Nothing Found</h1>
            <a href="<?php echo site_url();?>">Back to Home</a>
        </div>
    </div>
</div>

<?php

get_footer();