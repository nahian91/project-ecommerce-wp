<?php

/*
Template Name: Home
*/
get_header();?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <?php
                                $args = array(
                                    'taxonomy' => 'product_cat',
                                    'hide_empty' => true
                                );
                                $cats = get_categories($args);
                                foreach($cats as $cat) {
                            ?>
                                <li><a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"><?php echo $cat->cat_name;?></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5><?php the_field('phone', 'option');?></h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <?php
                        $bannar = get_field('bannar', 'option');
                    ?>
                    <div class="hero__item set-bg" style="background-image:url('<?php echo $bannar['bannar_image']['url'];?>">
                        <div class="hero__text">
                            
                            <span><?php echo $bannar['bannar_subtitle'];?></span>
                            <h2><?php echo $bannar['bannar_title'];?></h2>
                            <p><?php echo $bannar['bannar_description'];?></p>
                            <a href="<?php echo $bannar['bannar_btn_url'];?>" class="primary-btn"><?php echo $bannar['bannar_btn_text'];?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">

                    <?php
                        $cats = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC'));
                        foreach($cats as $cat) {
                        $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); 
                        $cat_image = wp_get_attachment_url( $thumbnail_id );
                        $cat_link = get_term_link( $cat );
                    ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" style="background-image:url(<?php echo $cat_image;?>);">
                                <h5><a href="<?php echo $cat_link;?>"><?php echo $cat->name; ?></a></h5>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    <br><br><br>
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-1.jpg')">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-2.jpg')">  
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-3.jpg')">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-4.jpg')">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-5.jpg')">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-6.jpg')">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-7.jpg')">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background-image:url('<?php echo get_template_directory_uri();?>/img/featured/feature-8.jpg')">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">

                <?php
                    $home_ads = get_field('home_ads', 'option');
                ?>
                    <div class="banner__pic">
                        <img src="<?php echo $home_ads['ads_1'];?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="<?php echo $home_ads['ads_2'];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3
                                    );
                                $loop = new WP_Query( $args );
                                if ( $loop->have_posts() ) {
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                ?>
                                    <a href="<?php echo get_permalink($product->ID);?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo $product->get_name();?></h6>
                                            <span><?php echo $product->get_price_html();?></span>
                                        </div>
                                    </a>
                                <?php
                                    endwhile;
                                } else {
                                    echo __( 'No products found' );
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'offset' => 3
                                    );
                                $loop = new WP_Query( $args );
                                if ( $loop->have_posts() ) {
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                ?>
                                    <a href="<?php echo get_permalink($product->ID);?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo $product->get_name();?></h6>
                                            <span><?php echo $product->get_price_html();?></span>
                                        </div>
                                    </a>
                                <?php
                                    endwhile;
                                } else {
                                    echo __( 'No products found' );
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'orderby'   => 'meta_value_num',
                                    'meta_key'  => 'total_sales',
                                    );
                                $loop = new WP_Query( $args );
                                if ( $loop->have_posts() ) {
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                ?>
                                    <a href="<?php echo get_permalink($product->ID);?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo $product->get_name();?></h6>
                                            <span><?php echo $product->get_price_html();?></span>
                                        </div>
                                    </a>
                                <?php
                                    endwhile;
                                } else {
                                    echo __( 'No products found' );
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 3,
                                    'offset' => 3,
                                    'orderby'   => 'meta_value_num',
                                    'meta_key'  => 'total_sales',
                                    );
                                $loop = new WP_Query( $args );
                                if ( $loop->have_posts() ) {
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                ?>
                                    <a href="<?php echo get_permalink($product->ID);?>" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo $product->get_name();?></h6>
                                            <span><?php echo $product->get_price_html();?></span>
                                        </div>
                                    </a>
                                <?php
                                    endwhile;
                                } else {
                                    echo __( 'No products found' );
                                }
                                wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo get_template_directory_uri();?>/img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo get_template_directory_uri();?>/img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo get_template_directory_uri();?>/img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo get_template_directory_uri();?>/img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo get_template_directory_uri();?>/img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?php echo get_template_directory_uri();?>/img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    );
                    $query = new WP_Query($args);
                    while($query->have_posts()) {
                        $query->the_post();
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </div>
                            <div class="blog__item__text">
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date( 'F j, Y' );?></li>
                                    <li><i class="fa fa-comment-o"></i> <?php echo get_comments_number();?></li>
                                </ul>
                                <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                <?php the_excerpt();?>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                ?>
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

 <?php get_footer();?>