<!-- begin header here -->
<?php get_header(); ?>
<!-- end header here -->
<section class="section bgg">
    <div class="container">    
        <div class="title-area">
            <h2> <?php printf( __( 'Category Archive for %s', 'nestlaptops'), single_cat_title( '', false ) ); ?> </h2>
            <?php if ( category_description() ) : ?>
                <small class="hidden-xs"><?php echo category_description(); ?></small>
            <?php endif; ?>
        </div><!-- /.pull-right -->
    </div><!-- end container -->
</section>
<div class="container sitecontainer bgw">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
            <div class="widget searchwidget indexslider">
                <?php if ( have_posts() ) :  while( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'templates/content', get_post_format() ); ?>
                <?php endwhile ?>
                <?php else : ?>
                    <?php get_template_part( 'templates/content-none' ); ?>
                <?php endif?>
            </div>
        </div><!-- end col -->

        <?php get_sidebar(); ?>
    </div><!-- end row -->
</div>
<!-- begin footer here -->
<?php get_footer(); ?>
<!-- end footer here -->