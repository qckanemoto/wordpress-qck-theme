# wordpress-ttskch-theme

A simple and customizable theme for WordPress which is a sister project of [jekyll-ttskch-theme](https://github.com/ttskch/jekyll-tch-theme).

## Screen shot

![image](https://user-images.githubusercontent.com/4360663/30142798-a131a9a8-93bd-11e7-93c3-a2250b935c80.png)

## Features

* Anchor links for each headings
* Responsive
* Share buttons ready
* WordPress Widgets friendly
* Wysiwyg editor has exactly the same style as real site view

## Requirements

* PHP 5.3+
* WordPress 4.3+

## Installation

```bash
$ cd /path/to/wordpress/wp-content/themes/
$ git clone git@github.com:ttskch/wordpress-ttskch-theme.git
```

## Usage

### Configuration

Modify [config.php](config.php) as you like.

### Customizing styles

Modify [assets/sass/includes/base/\_variables.scss](assets/sass/includes/base/_variables.scss) as you like.

And compile scss to css like below:

```bash
$ npm install  # only first time.
$ gulp build
```

### Unshare specific posts or pages

Even when you use share buttons feature, you can hide share buttons for some specific posts or pages.

1. Go to the edit view of the post/page.
1. Add a custom field named `unshare` with any value. (e.g. `1`)
1. That's all.

# See also

* [WordPress.Skeleton](https://github.com/ttskch/wordpress.skeleton) is so useful to create/maintain WordPress projects especially for developers.
