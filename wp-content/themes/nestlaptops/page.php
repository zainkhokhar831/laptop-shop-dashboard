<!-- begin header here -->
<?php get_header(); ?>
<!-- end header here -->
<?php if ( have_posts() ) : the_post(); ?>
<section class="section bgg">
    <div class="container">    
        <div class="title-area">
            <h2><?php the_title(); ?> </h2>
        </div><!-- /.pull-right -->
    </div><!-- end container -->
</section>
<div class="container sitecontainer bgw">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
            <div class="widget">
                <div class="large-widget m30">
                    <div class="post-desc">
                        <?php the_content(); ?>
                    </div><!-- end post-desc -->
                </div><!-- end large-widget -->
            </div><!-- end widget -->
        </div><!-- end col -->

        <?php get_sidebar(); ?>
    </div><!-- end row -->
</div>
<?php endif; ?>
<!-- begin footer here -->
<?php get_footer(); ?>
<!-- end footer here -->