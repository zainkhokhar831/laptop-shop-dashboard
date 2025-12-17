<div class="widget">
    <div class="widget-title">
        <h4>Latest Laptops</h4>
        <hr>
    </div>
    <!-- end widget-title -->

    <div class="reviewlist review-posts row m30">
        <?php 
            $recent_laptops = wp_get_recent_posts([
                'numberposts' => 6,
                'post_status' => 'publish'
            ]);
        ?>
        <?php foreach( $recent_laptops as $recent_laptop ) : ?>

        <div class="post-review col-md-4 col-sm-12">
            <div class="post-media entry">
                <a href="<?php echo get_permalink($recent_laptop['ID']) ?>" title="">
                    <?php if ( has_post_thumbnail( $recent_laptop['ID'] ) ) : ?>
                        <?php echo get_the_post_thumbnail($recent_laptop['ID'], ''); ?>
                    <?php else : ?>
                        <h3>No image found!</h3>
                    <?php endif;?>    
                    <div class="magnifier">
                    </div>
                </a>
            </div>
            <!-- end media -->
            <div class="post-title">
                <h3><a href="<?php echo get_permalink($recent_laptop['ID']) ?>"><?php echo esc_html( $recent_laptop['post_title'] ); ?></a></h3>
            </div>
            <!-- end post-title -->
        </div>
        <!-- end post-review -->
        <?php endforeach; ?>

    </div>

</div>