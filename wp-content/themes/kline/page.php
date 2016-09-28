<?php
/*
 * @package: KLine
 * @subpackage: kline
 */

get_header();
?>

<div class="page">
    <main class="page-content">
        <?php
        get_template_part('template-parts/page', get_query_var('pagename'));
        ?>
    </main>
</div>

<?php
get_footer();
