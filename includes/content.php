<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?>

<div class="article-wrapper">
    <article>
        <?php get_template_part('includes/article-header'); ?>
        <section class="post-content">
            <?php the_content('<span class="btn">' . $qckConfig['read_more'] . '</span>'); ?>
        </section>
        <?php get_template_part('includes/article-footer'); ?>
    </article>
</div>

<?php if (is_singular() && $qckConfig['disqus']): ?>
<section class="comments">
    <?php get_template_part('includes/disqus'); ?>
</section>
<?php endif; ?>
