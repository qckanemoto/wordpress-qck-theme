<?php
/*
Template Name: TchTheme
*/
global $tchConfig;
?>

<?php if ($tchConfig['icons']['rss']): ?>
<li>
    <a href="<?php bloginfo('rss2_url'); ?>">
        <i class="fa fa-fw fa-rss"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['email']): ?>
<li>
    <a href="mailto:<?php echo $tchConfig['icons']['email']; ?>">
        <i class="fa fa-fw fa-envelope"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['github']): ?>
<li>
    <a href="https://github.com/<?php echo $tchConfig['icons']['github']; ?>">
        <i class="fa fa-fw fa-github"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['bitbucket']): ?>
<li>
    <a href="https://bitbucket.org/<?php echo $tchConfig['icons']['bitbucket']; ?>">
        <i class="fa fa-fw fa-bitbucket"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['twitter']): ?>
<li>
    <a href="https://twitter.com/<?php echo $tchConfig['icons']['twitter']; ?>">
        <i class="fa fa-fw fa-twitter"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['facebook']): ?>
<li>
    <a href="https://www.facebook.com/<?php echo $tchConfig['icons']['facebook']; ?>">
        <i class="fa fa-fw fa-facebook"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['google_plus']): ?>
<li>
    <a href="https://plus.google.com/<?php echo $tchConfig['icons']['google_plus']; ?>">
        <i class="fa fa-fw fa-google-plus"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['tumblr']): ?>
<li>
    <a href="https://<?php echo $tchConfig['icons']['tumblr']; ?>.tumblr.com/">
        <i class="fa fa-fw fa-tumblr"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['behance']): ?>
<li>
    <a href="https://www.behance.net/<?php echo $tchConfig['icons']['behance']; ?>">
        <i class="fa fa-fw fa-behance"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['dribbble']): ?>
<li>
    <a href="https://dribbble.com/<?php echo $tchConfig['icons']['dribbble']; ?>">
        <i class="fa fa-fw fa-dribbble"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['flickr']): ?>
<li>
    <a href="https://www.flickr.com/photos/<?php echo $tchConfig['icons']['flickr']; ?>">
        <i class="fa fa-fw fa-flickr"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['instagram']): ?>
<li>
    <a href="http://instagram.com/<?php $tchConfig['icons']['instagram']; ?>">
        <i class="fa fa-fw fa-instagram"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['linkedin']): ?>
<li>
    <a href="<?php echo $tchConfig['icons']['linkedin']; ?>">
        <i class="fa fa-fw fa-linkedin"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['pinterest']): ?>
<li>
    <a href="http://www.pinterest.com/<?php echo $tchConfig['icons']['pinterest']; ?>">
        <i class="fa fa-fw fa-pinterest"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['reddit']): ?>
<li>
    <a href="https://www.reddit.com/user/<?php echo $tchConfig['icons']['reddit']; ?>">
        <i class="fa fa-fw fa-reddit"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['soundcloud']): ?>
<li>
    <a href="https://soundcloud.com/<?php echo $tchConfig['icons']['soundcloud']; ?>">
        <i class="fa fa-fw fa-soundcloud"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['stack_exchange']): ?>
<li>
    <a href="<?php echo $tchConfig['icons']['stack_exchange']; ?>">
        <i class="fa fa-fw fa-stack-exchange"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['steam']): ?>
<li>
    <a href="http://steamcommunity.com/id/<?php echo $tchConfig['icons']['steam']; ?>">
        <i class="fa fa-fw fa-steam"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['wordpress']): ?>
<li>
    <a href="https://<?php echo $tchConfig['icons']['wordpress']; ?>.wordpress.com/">
        <i class="fa fa-fw fa-wordpress"></i>
    </a>
</li>
<?php endif; ?>

<?php if ($tchConfig['icons']['youtube']): ?>
<li>
    <a href="https://www.youtube.com/user/<?php echo $tchConfig['icons']['youtube']; ?>">
        <i class="fa fa-fw fa-youtube"></i>
    </a>
</li>
<?php endif; ?>
