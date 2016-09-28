<?php
/*
 * @package: KLine-WordPress
 * @subpackage: kline
 */

get_header();
?>

<div class="main-content">
    <article class="news-article">
        <div class='mdl-grid'>
            <div class="mdl-cell mdl-cell--12-col">
                <?php the_title('<h1 class="article-title">', '</h1>'); ?>
            </div>
            <div class="mdl-cell mdl-cell--8-col">
                <?php
                while (have_posts()):the_post();
                    if (has_post_thumbnail()):
                        ?>
                        <img src="<?php the_post_thumbnail_url() ?>" width="100%"/>
                        <?php
                    endif;
                    the_content('<div class="article-content">', '</div>');
                endwhile;
                ?>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <h3 align="center">Related Articles</h3>
                <ul class="related-articles">
                    <?php
                    $args = array('post_type' => 'news', 'posts-per-page' => '10');
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()):
                        while ($loop->have_posts()):$loop->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                    <ul>
                                        <li><?php the_date(); ?></li>
                                    </ul>
                                </a>
                            </li>
                        <?php endwhile; ?>
<?php endif; ?>
                </ul>
            </div>
        </div>
    </article>
    <?php get_footer(); ?>
