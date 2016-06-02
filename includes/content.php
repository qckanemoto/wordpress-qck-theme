<?php
/*
Template Name: TchTheme
*/
global $tchConfig;
?>

<div class="article-wrapper">
    <article>
        <?php get_template_part('includes/article-header'); ?>
        <section class="post-content">
            <?php the_content('<span class="btn">' . $tchConfig['read_more'] . '</span>'); ?>
        </section>
        <?php get_template_part('includes/article-footer'); ?>
    </article>
</div>

<?php if (is_singular() && $tchConfig['disqus']): ?>
<section class="comments">
    <?php get_template_part('includes/disqus'); ?>
</section>
<?php endif; ?>
