   <!-- Footer Section Begin -->
   <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <?php
                                $footer_logo = get_field('footer_logo', 'option');
                            ?>
                            <a href="<?php echo site_url();?>"><img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>"></a>
                        </div>
                        <ul>
                            <li><?php the_field('footer_address', 'option');?></li>
                            <li><?php the_field('footer_phone', 'option');?></li>
                            <li><?php the_field('footer_email', 'option');?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <?php
                            dynamic_sidebar('footer');
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <?php echo do_shortcode('[contact-form-7 id="125" title="Subscribe"]');?>
                        <div class="footer__widget__social">
                            <?php
                                $footer_socials = get_field('footer_social', 'option');
                                foreach($footer_socials as $footer_social) {
                            ?>
                                <a href="<?php echo $footer_social['icon_link'];?>"><i class="fa <?php echo $footer_social['icon_name'];?>"></i></a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><?php the_field('footer_copy', 'option');?></p></div>
                        <div class="footer__copyright__payment"><img src="<?php echo get_template_directory_uri();?>/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <?php wp_footer();?>
</body>

</html>