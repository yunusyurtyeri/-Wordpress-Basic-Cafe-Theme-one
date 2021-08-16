<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="<?php the_field('facebook_adresi', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php the_field('twitter_adresi', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php the_field('linkedin_adresi', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php the_field('instagram_adresi', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php the_field('youtube_adresi', 'option'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                    	<?php $footer_logo = get_field('footer_logo','option'); ?>
                        <a href="<?php bloginfo('url'); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <?php the_field('copyright_metini', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>