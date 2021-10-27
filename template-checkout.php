<?php

/*
Template Name: Checkout
*/

get_header();?>
    <section class="breadcrumb-section set-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/breadcrumb.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="<?php echo site_url();?>">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode('[woocommerce_checkout]');?>
            </div>
        </div>
    </div>

 <?php get_footer();?>