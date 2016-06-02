<?php
/*
Template Name: TchTheme
*/
global $tchConfig;
?>

<header>
    <div class="panel">
        <h1>
            <?php if (!is_singular()): ?>
            <a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php else: ?>
            <?php the_title(); ?>
            <?php endif; ?>
        </h1>

        <?php if (get_post_type() === 'post'): ?>

        <?php if ($categories = get_the_category()): foreach ($categories as $category): ?>
        <ul class="tags">
            <li><i class="fa fa-folder-open-o"></i></li>
            <li>
                <?php
                $names = explode('/', trim(get_category_parents($category->term_id, false, '/', false), '/'));
                for ($i = 0; $i < count($names); $i++): if ($i > 0) { echo '/'; }
                ?>
                <a class="tag" href="<?php echo get_category_link(get_cat_ID($names[$i])); ?>"><?php echo $names[$i]; ?></a>
                <?php endfor; ?>
            </li>
        </ul>
        <?php endforeach; endif; ?>

        <ul class="tags">
            <?php if ($tags = get_the_tags()): ?>
            <li><i class="fa fa-tags"></i></li>
            <?php endif; ?>
            <?php if ($tags = get_the_tags()): foreach ($tags as $tag): ?>
            <li>
                <a class="tag" href="<?php echo get_tag_link($tag->term_id); ?>">#<?php echo $tag->name; ?></a>
            </li>
            <?php endforeach; endif; ?>
        </ul>

        <div class="clearfix">
            <ul class="meta">
                <li>
                    <i class="fa fa-calendar"></i> <?php echo get_the_date('Y-m-d'); ?>
                </li>
                <li>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <i class="fa fa-user"></i> <?php the_author(); ?>
                    </a>
                </li>
            </ul>
        </div>

    <?php endif; ?>

    </div>

    <?php if (is_singular()): ?>
    <div style="margin-top: 1em;">
        <?php get_template_part('includes/share-buttons'); ?>
    </div>

    <?php if (has_post_thumbnail()): ?>
    <p style="text-align: center">
        <?php echo get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', array('class' => 'eye-catch')); ?>
    </p>
    <?php endif; ?>
    <?php endif; ?>
</header>
