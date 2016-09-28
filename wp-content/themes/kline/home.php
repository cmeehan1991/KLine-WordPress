<?php
/*
 * @package: KLine-WordPress
 * @subpackage: kline
 */

get_header();
?>
<div class='content'>
    <main class="main-content">

        <!--If there is a breaking news story then display. If not then display the generic banner.-->
        <?php
        $topStoryArgs = array('post_type' => 'news', 'category_name' => 'Breaking News', 'posts_per_page' => '1');
        $topStoryLoop = new WP_Query($topStoryArgs);
        if ($topStoryLoop->have_posts()):
            while ($topStoryLoop->have_posts()): $topStoryLoop->the_post();
                ?>
                <a class="breakingNews-permalink__home" href="<?php the_permalink(); ?>">
                    <span class="breakingNews__home">
                        <?php the_title('<h1>', '</h1>'); ?></span>
                        <img src="<?php the_post_thumbnail_url() ?>" width="100%" height="800px"/>
                        <?php the_excerpt(); ?>
                </a>
                <?php
            endwhile;
        else:
            ?>
            <img src="<?php bloginfo('template_directory'); ?>/images/DSC03169.JPG" alt="" width="100%" height="800px"/>
        <?php
        endif;
        ?>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <ul class="news-sidebar">
                    <li><h3>News &amp; Announcements</h3></li>
                    <?php
                    // Get the news posts and display as a list
                    $args = array('post_type' => 'news', 'posts_per_page' => '5');
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()):$the_query->the_post();
                            ?>
                            <li><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
                            <?php
                        endwhile;
                    else:
                        ?>
                        <!--Display if there are no news posts-->
                        <li><h4>No Current Stories</h4></li>
                    <?php endif; ?>
                </ul>

            </div>
            <div class="mdl-cell mdl-cell--8-col">
                <a href='<?php bloginfo('url'); ?>/services' class='world-services-link'><img src="<?php bloginfo('template_directory'); ?>/images/world-map.jpg" width='100%' height="400px"/></a>
            </div>
            <div class="mdl-cell mdl-cell--8-col">
                <a href='<?php bloginfo('url'); ?>/testimonials' class="testimonials-link"><img src="<?php bloginfo('template_directory'); ?>/images/testimonial.jpg" width="100%" height="400px"/></a>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <a href="<?php bloginfo('url'); ?>/environment" class="environment-link"><img src="<?php bloginfo('template_directory'); ?>/images/environmental-protection.jpg" width="100%" height="400px"/></a> 
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <a href="<?php bloginfo('url'); ?>/vessels" class="vessels-link"><img src="<?php bloginfo('template_directory'); ?>/images/drg.jpg" width="100%" height="400px"/></a>
            </div>
            <div class="mdl-cell mdl-cell--8-col">
                <a href="<?php bloginfo('url'); ?>/schedules" class="schedules-link"><img src="<?php bloginfo('template_directory'); ?>/images/scheduling banner.jpg" width="100%" height="400px"/></a>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();
