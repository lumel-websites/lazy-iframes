=== Lazy Videos ===
Contributors: kgkrishna, Puneetlumel
Tags: videos, lazy-loading, youtube, vimeo
Requires at least: 5.8.1
Tested up to: 5.8.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This is a WordPress plugin that can lazy load iframes and increase your Google PageSpeed Score 

== Description ==

This plugin lazy loads iframes on your page by using a placeholder preview image in place of the iframe. The iframe loads only when the preview image is clicked. All the scripts and styles within the iframe are loaded only when the placeholder image is clicked thus improving your site performance as well as increasing your Google PageSpeed/GTMetrix Score.

== Installation ==

1. Upload `lazy-iframes-1.0.0.zip` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Usage ==

1. Once the plugin is activated, you can add the `[lazy_iframes]` shortcode to any post or page
1. The shortcode accepts two mandatory parameters `src` and `poster`
1. The poster parameter accepts image URLs as input

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0.0 =
* Initial Release. 
* **Feat:** Load iframes via the `[lazy_iframes]` shortcode