<?php
/*
Template Name: TchTheme
*/
global $tchConfig;
?>

<?php
the_posts_pagination(array(
    'prev_text' => '<span class="btn"><i class="fa fa-chevron-left"></i> ' . $tchConfig['str_prev'] . '</span>',
    'next_text' => '<span class="btn"><i class="fa fa-chevron-right"></i> ' . $tchConfig['str_next'] . '</span>',
    'before_page_number' => '<span class="btn">',
    'after_page_number' => '</span>',
));
?>
