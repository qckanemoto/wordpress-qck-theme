<?php
/*
Template Name: TchTheme
*/
global $tchConfig;
?>

<footer class="site-footer">
    <div class="inner">
        <span>Powered by <a href="https://github.com/ttskch/wordpress-ttskch-theme">TchTheme</a></span>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/min/script.js"></script>

<?php if (is_singular()): ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/min/header-link.js"></script>
<?php endif; ?>

<?php get_template_part('includes/fb-root'); ?>
<?php get_template_part('includes/google-analytics'); ?>

<?php wp_footer(); ?>

</body>
</html>
