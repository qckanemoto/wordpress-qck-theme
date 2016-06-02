<?php
/*
Template Name: TchTheme
*/
global $tchConfig;
?>

<?php get_header(); ?>

<div class="site-container">
    <div class="site-content">
        <div class="article-wrapper">
            <article>
                <header>
                    <div class="panel">
                        <h1><?php echo $tchConfig['str_search_resulsts']; ?></h1>
                    </div>
                </header>
                <section class="post-content">
                    <div id="search-results">
                        <hr id="first-hr" class="with-no-margin"/>

                        <?php while (have_posts()): the_post(); ?>
                        <div>
                            <div class="article-wrapper">
                                <article>
                                    <?php get_template_part('includes/article-header'); ?>
                                </article>
                            </div>
                            <hr class="with-no-margin"/>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </section>
            </article>
        </div>
        <?php get_template_part('includes/paginator'); ?>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
