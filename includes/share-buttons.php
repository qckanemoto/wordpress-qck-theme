<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?>

<?php if (get_post_meta(get_the_ID(), $qckConfig['unshare_custom_field_name'], true) === ''): ?>
<div class="clearfix">
    <div style="float: right !important;">
        <?php if ($qckConfig['share_buttons']['twitter']): ?>
        <div style="margin-right: 5px !important; float: left !important;">
            <a href="https://twitter.com/share" class="twitter-share-button"{count} data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
        <?php endif; ?>
        <?php if ($qckConfig['share_buttons']['facebook']): ?>
        <div style="width: 105px !important; float: left !important;">
            <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count"></div>
        </div>
        <?php endif; ?>
        <?php if ($qckConfig['share_buttons']['hatena']): ?>
        <div style="float: left !important;">
            <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
