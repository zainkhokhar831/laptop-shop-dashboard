<div id="post-<?php the_ID(); ?>" <?php post_class( 'large-widget m30' ); ?>>
    <div class="post row clearfix">
        <div class="col-md-5">
            <div class="post-media">
                <?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
                    <?php the_post_thumbnail( '', ['alt' => "", 'class' => 'img-responsive img-thumbnail' ] ); ?>
                <?php else : ?>
                    <h3>No image found!</h3>
                <?php endif;?>
            </div>
        </div>

        <div class="col-md-7">
            <div class="title-area">
                <!-- get category list -->
                <?php $category_list = get_the_category_list( ' | ' ); ?>
                <?php if ($category_list) : ?>
                    <div class="colorfulcats">
                        <span class="label label-info"><?php echo $category_list; ?></span>
                    </div>
                <?php endif ?>
                <!-- get category list -->

                <!-- get title  -->
                <?php if ( is_single() ) : ?>
                    <h3><?php the_title(); ?></h3>
                <?php else : ?>
                    <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php endif ?>
                <!-- get title -->

                <!-- get excerpt -->
                <?php if ( is_search() ) : ?>
                    <p><?php the_excerpt(); ?></p>
                <?php else : ?>
                    <p><?php the_excerpt(); ?></p>
                <?php endif ?>
                <!-- get excerpt -->

                <?php nestlaptops_post_meta(); ?>
                <!-- end meta -->
            </div>
            <!-- /.pull-right -->
        </div>
    </div>
    <!-- end post -->
</div>