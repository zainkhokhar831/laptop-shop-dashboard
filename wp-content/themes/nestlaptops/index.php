<!-- begin header here -->
 <?php get_header(); ?>
<!-- end header here -->

        <div class="container sitecontainer bgw">
            
            <?php get_template_part( 'templates/news'); ?>

            <div class="row">
                <div class="col-md-9 col-sm-12">

                    <?php get_template_part( 'templates/slider' ); ?>
                    <!-- end property-slider -->

                    <div class="widget searchwidget indexslider">
                      <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'templates/content', get_post_format() ); ?>
                        <?php endwhile ?>
                        <?php else : ?>
                            <?php get_template_part( 'templates/content-none' ); ?>
                        <?php endif?>
                    </div>
                    <!-- end widget -->

                    <?php get_template_part( 'templates/latest' ); ?>
                    <!-- end widget -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="ads-widget">
                                    <a href="#"><img src="<?php echo IMAGES ?>/ads/ads-970-90.jpg" alt="" class="img-responsive"></a>
                                </div>
                                <!-- end ads-widget -->
                            </div>
                            <!-- end widget -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- end col -->

                <!-- begin sidebar here -->
                 <?php get_sidebar(); ?>
                <!-- end sidebar here -->
-
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

        <!-- begin footer here -->
            <?php get_footer(); ?>
        <!-- end footer here -->