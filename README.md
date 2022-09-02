# Lazy iframes
* **Contributors:** kgkrishnalmt, Puneetlumel
* **Tags:** iframes, lazy-loading, youtube, vimeo
* **Requires at least:** 5.8.1
* **Tested up to:** 5.8.1
* **Stable tag:** 1.0.1
* **License:** GPLv2 or later
* **License URI:** http://www.gnu.org/licenses/gpl-2.0.html

This is a WordPress plugin that can lazy load iframes and increase your Google PageSpeed Score 

---

### Description

This plugin lazy loads iframes on your page by using a placeholder preview image in place of the iframe. The iframe loads only when the preview image is clicked. All the scripts and styles for the iframe are loaded only when the placeholder image is clicked thus improving your site performance as well as increasing your Google PageSpeed/GTMetrix Score.

---

### Installation

1. Upload `lazy-iframes-1.0.1.zip` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

---

### Usage

1. Once the plugin is activated, you can add the `[lazy_iframes]` shortcode to any post or page
1. The shortcode accepts two mandatory parameters `src` and `poster`
1. The poster parameter accepts image URLs as input

---

### Changelog

**1.0.1**
* Initial Release. 
* **Feat:** Added Play Icon


**1.0.0**
* Initial Release. 
* **Feat:** Load iframes via the `[lazy_iframes]` shortcode

