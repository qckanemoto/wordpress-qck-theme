<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?>

<?php if ($qckConfig['share_buttons'] && get_post_meta(get_the_ID(), $qckConfig['unshare_custom_field_name'], true) === ''): ?>
<div class="share-buttons-wrapper">
    <div class="share-buttons" data-url="<?php the_permalink(); ?>" data-title="<?php the_title(); ?>"></div>
</div>
<?php endif; ?>
