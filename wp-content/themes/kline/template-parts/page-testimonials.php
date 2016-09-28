<?php
/*
 * @package: KLine-WordPress
 * @subpackage: kline
 */

get_header();
?>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
        <header>
            <h1 align="center" width="100%">Customer Testimonials</h1>
        </header>
    </div>
    <div class="mdl-cell mdl-cell--12-col">
        <div class="main-content">
            <div class="testimonials">
                <ul class="testimonial-list">
                    <?php
                    $args = array('post_type' => 'testimonials', 'posts_per_page' => '50');
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()):
                        while ($loop->have_posts()):$loop->the_post();
                            ?>
                            <li>
                                <h2><?php the_title(); ?></h2>
                                <h3><?php the_content(); ?></h3>
                            </li>
                            <?php
                        endwhile;
                    endif;
                    ?>
            </div>
        </div>
    </div>
</div>