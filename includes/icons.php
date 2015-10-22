<?php
/*
Template Name: QckTheme
*/
global $qckConfig;
?>

<?php if ($qckConfig['icons']['rss']): ?>
<li>
    <a href="<?php bloginfo('rss2_url'); ?>">
        <i class="fa fa-fw fa-rss"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['email']): ?>
<li>
    <a href="mailto:<?php echo $qckConfig['icons']['email']; ?>">
        <i class="fa fa-fw fa-envelope"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['github']): ?>
<li>
    <a href="https://github.com/<?php echo $qckConfig['icons']['github']; ?>">
        <i class="fa fa-fw fa-github"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['bitbucket']): ?>
<li>
    <a href="https://bitbucket.org/<?php echo $qckConfig['icons']['bitbucket']; ?>">
        <i class="fa fa-fw fa-bitbucket"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['twitter']): ?>
<li>
    <a href="https://twitter.com/<?php echo $qckConfig['icons']['twitter']; ?>">
        <i class="fa fa-fw fa-twitter"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['facebook']): ?>
<li>
    <a href="https://www.facebook.com/<?php echo $qckConfig['icons']['facebook']; ?>">
        <i class="fa fa-fw fa-facebook"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['google_plus']): ?>
<li>
    <a href="https://plus.google.com/<?php echo $qckConfig['icons']['google_plus']; ?>">
        <i class="fa fa-fw fa-google-plus"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['tumblr']): ?>
<li>
    <a href="https://<?php echo $qckConfig['icons']['tumblr']; ?>.tumblr.com/">
        <i class="fa fa-fw fa-tumblr"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['behance']): ?>
<li>
    <a href="https://www.behance.net/<?php echo $qckConfig['icons']['behance']; ?>">
        <i class="fa fa-fw fa-behance"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['dribbble']): ?>
<li>
    <a href="https://dribbble.com/<?php echo $qckConfig['icons']['dribbble']; ?>">
        <i class="fa fa-fw fa-dribbble"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['flickr']): ?>
<li>
    <a href="https://www.flickr.com/photos/<?php echo $qckConfig['icons']['flickr']; ?>">
        <i class="fa fa-fw fa-flickr"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['instagram']): ?>
<li>
    <a href="http://instagram.com/<?php $qckConfig['icons']['instagram']; ?>">
        <i class="fa fa-fw fa-instagram"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['linkedin']): ?>
<li>
    <a href="<?php echo $qckConfig['icons']['linkedin']; ?>">
        <i class="fa fa-fw fa-linkedin"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['pinterest']): ?>
<li>
    <a href="http://www.pinterest.com/<?php echo $qckConfig['icons']['pinterest']; ?>">
        <i class="fa fa-fw fa-pinterest"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['reddit']): ?>
<li>
    <a href="https://www.reddit.com/user/<?php echo $qckConfig['icons']['reddit']; ?>">
        <i class="fa fa-fw fa-reddit"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['soundcloud']): ?>
<li>
    <a href="https://soundcloud.com/<?php echo $qckConfig['icons']['soundcloud']; ?>">
        <i class="fa fa-fw fa-soundcloud"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['stack_exchange']): ?>
<li>
    <a href="<?php echo $qckConfig['icons']['stack_exchange']; ?>">
        <i class="fa fa-fw fa-stack-exchange"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['steam']): ?>
<li>
    <a href="http://steamcommunity.com/id/<?php echo $qckConfig['icons']['steam']; ?>">
        <i class="fa fa-fw fa-steam"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['wordpress']): ?>
<li>
    <a href="https://<?php echo $qckConfig['icons']['wordpress']; ?>.wordpress.com/">
        <i class="fa fa-fw fa-wordpress"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($qckConfig['icons']['youtube']): ?>
<li>
    <a href="https://www.youtube.com/user/<?php echo $qckConfig['icons']['youtube']; ?>">
        <i class="fa fa-fw fa-youtube"></i>
    </a>
</li>
<?php endif; ?>
