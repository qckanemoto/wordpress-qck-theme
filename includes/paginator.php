<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?>

<?php
the_posts_pagination(array(
    'prev_text' => '<span class="btn"><i class="fa fa-chevron-left"></i> ' . $qckConfig['str_prev'] . '</span>',
    'next_text' => '<span class="btn"><i class="fa fa-chevron-right"></i> ' . $qckConfig['str_next'] . '</span>',
    'before_page_number' => '<span class="btn">',
    'after_page_number' => '</span>',
));
?>
