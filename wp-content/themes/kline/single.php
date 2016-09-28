<?php

/*
 * @package: KLine-WordPress
 * @subpackage: kline
 */

get_header();
?>

<div class="single">
    <article class="single__main">
        <?php get_template_part('template-parts/single',  get_post_type()); ?>
    </article>
</div>

