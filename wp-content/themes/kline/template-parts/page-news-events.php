<?php
/*
 * @package: KLine-WordPress
 * @subpackage:kline
 */
get_header();
?>
<div class='content'>
    <main class='main-content'>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <!--Top Stories-->
                <div class='mdl-cell mdl-cell--12-col'>
                    <div class="top_stories">
                        <h2>Top Stories</h2>
                        <ul class='trending__top-stories'>
                            <?php
                            $args = array('post_type' => 'news', 'posts_per_page' => '5');
                            $loop = new WP_Query($args);
                            if ($loop->have_posts()):
                                while ($loop->have_posts()): $loop->the_post();
                                    ?>
                                    <li>
                                        <a href='<?php the_permalink(); ?>'>
                                            <?php
                                            the_title('<h4>', '</h4>');
                                            ?>
                                        </a>
                                    </li>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>

                <!--"K" Line News-->
                <div class='mdl-cell mdl-cell--12-col' id="kline-news">
                    <h2 align='center' class="kline-news__title">&quot;K&quot; Line News</h2>
                    <ul class='trending'>
                        <?php
                        $klineArgs = array('post_type' => 'news', 'posts_per_page' => '5', 'category_name' => 'K-Line');
                        $klineLoop = new WP_Query($args);
                        if ($klineLoop->have_posts()):
                            while ($klineLoop->have_posts()): $klineLoop->the_post();
                                ?>
                                <li>
                                    <a href='<?php the_permalink(); ?>'>
                                        <?php
                                        the_title('<h4>', '</h4>');
                                        ?>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <!--Breaking News-->
            <div class='mdl-cell mdl-cell--8-col'>
                <?php
                $topStoryArgs = array('post_type' => 'news', 'category_name' => 'Breaking News', 'posts_per_page' => '1');
                $topStoryLoop = new WP_Query($topStoryArgs);
                if ($topStoryLoop->have_posts()):
                    while ($topStoryLoop->have_posts()): $topStoryLoop->the_post();
                        ?>
                        <a class="breakingNews-permalink__home" href="<?php the_permalink(); ?>">
                            <span class="breakingNews__home">
                                <?php the_title('<h1>', '</h1>'); ?></span>
                            <img src="<?php the_post_thumbnail_url() ?>" width="100%"/>
                            <?php the_excerpt(); ?>
                        </a>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>

            <!--Industry News-->
            <div class='mdl-cell mdl-cell--12-col'>
                <h2 align='center'>Industry News</h2>
                <ul class='trending'>
                    <?php
                    $args = array('post_type' => 'news', 'posts_per_page' => '5', 'category_name' => 'General Shipping');
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()):
                        while ($loop->have_posts()): $loop->the_post();
                            ?>
                            <li>
                                <a href='<?php the_permalink(); ?>'><?php the_title('<h4>', '</h4>'); ?>
                                    <ul>
                                        <li><?php the_excerpt('<p>', '</p>'); ?></li>
                                    </ul>
                                </a>
                            </li>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </main>
</div>
<?php
get_footer();
