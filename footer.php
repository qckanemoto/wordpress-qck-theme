<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?>

<footer class="site-footer">
    <div class="inner">
        <span>Powered by <a href="https://github.com/qckanemoto/wordpress-qck-theme">QckTheme</a></span>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/lib/easy-social-buttons/jquery.social-info.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/lib/easy-social-buttons/jquery.easy-social-buttons.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/min/script.js"></script>

<?php if (is_singular()): ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/min/header-link.js"></script>
<?php endif; ?>

<?php get_template_part('includes/google-analytics'); ?>

<?php wp_footer(); ?>

</body>
</html>
