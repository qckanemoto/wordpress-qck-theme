<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?>

<aside class="site-aside">
    <div class="inner <?php if ($qckConfig['sticky_sidebar']): ?>sticky<?php endif; ?>">
        <div class="block">
            <form role="search" method="get" action="<?php bloginfo('url'); ?>">
                <input type="search" id="search" name="s" placeholder="<?php echo $qckConfig['str_search']; ?>" />
            </form>
        </div>
        <ul class="icons">
            <?php get_template_part('includes/icons'); ?>
        </ul>
        <hr class="with-no-margin margin-bottom"/>

        <?php if (is_active_sidebar('sidebar-1')): ?>
            <div id="widget-area" class="widget-area" role="complementary">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        <?php endif; ?>
    </div>
</aside>
