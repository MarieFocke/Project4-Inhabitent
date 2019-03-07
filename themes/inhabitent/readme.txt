# Inhabitent: Project 4
##Description
Inhabitent is a website made for the people that love hiking or simply spending time in the nature.
Its main use is bying online materials and equipement relatited to this sport. 
You may even let a comment about the stuff that you texted.
In addition, you have also acces to nice articles and funny stories in the journal.
There is also a page "About" were we explain how we are and a possibility to contact us via mail on the "Find us" page.
##Support
If you need any help look at the sidebar on the Journal pages, the Find us page or on the Footer. You can contact us via email and phone call.
## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `redstarter-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

## Main Tools used

-html/php
-css/sass
-javascript/jquery
-wordpress
## Intresting things learned
###search button
```bash
$( "div.foo" ).toggleClass(function() {
  if ( $( this ).parent().is( ".bar" ) ) {
    return "happy";
  } else {
    return "sad";
  }
});
//http://api.jquery.com/toggleclass/
```
###function change color logo on certain page
```bash
    <div class="logo-image">
		<?php if(is_page('about')||is_front_page()){?>
				<a href="<?php bloginfo('url');?>"><img class="image" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg"  alt="banner image"/></a>
		<?php }else{ ?>
				<a href="<?php bloginfo('url'); ?>"><img class="image" src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg"  alt="banner image"/></a>
		<?php } ?>
	</div>
```
### enqueuing
```bash
wp_enqueue_script( 'original_name', get_template_directory_uri() . '/right_adress.js', array(), '20151215', true );
```
##Roadmap
If I had some extra time I would correct the header(not totally fix) and look at the small syntax error that appear on the search page.

## License
[MIT](https://choosealicense.com/licenses/mit/)
* Based on Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2015 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
