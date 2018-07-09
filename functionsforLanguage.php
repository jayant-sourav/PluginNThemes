<?php
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'before_widget' => '<div class="sidepanel">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
	));

	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

	function empty_content($str) {
		return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
	}

	function register_my_menu() {
	  register_nav_menu('main-menu',__( 'Primary Navigation' ));
	  register_nav_menu('menu2',__( ' Menu2' ));
	  register_nav_menu('mob-menu',__( ' Responsive' ));
		register_nav_menu('language-menu',__( ' Language' ));
	}
	add_action( 'init', 'register_my_menu' );

	/**
	 * Language Selector Shortcode
	*/
	function qtranxf_generateLanguageSelectorShortcode() {
		global $q_config;

		if(is_404()) $url = get_option('home'); else $url = '';
		//echo '<pre>';
//print_r($q_config);
		echo PHP_EOL.'<div style="text-transform: uppercase;" class="lang-sel sel-dropdown"><span class="qtranxs_flags qtranxs_flag_'.$q_config['language'].'">'.$q_config['language'].' <i class="fa fa-angle-down" aria-hidden="true"></i>
</span><ul>'.PHP_EOL;
	        foreach(qtranxf_getSortedLanguages() as $language) {
              $alt = $q_config['language_name'][$language].' ('.$language.')';
              $classes = array('lang-'.$language);

              if($language != $q_config['language']){
								echo '<li class="'. implode(' ', $classes) .'"><a href="'.qtranxf_convertURL($url, $language, false, true).'"';
                // set hreflang
                echo ' hreflang="'.$language.'"';
                echo ' title="'.$alt.'"';
                echo ' >';
                echo '<span style="text-transform: uppercase;" class="qtranxs_flags qtranxs_flag_'.$language.'">'.$language.'</span>';

                echo '</a></li>'.PHP_EOL;
							}
	        }
		echo '</ul></div><div class="qtranxs_widget_end"></div>'.PHP_EOL;
	}




											<div class="lang-container">
												<?php //wp_nav_menu( array( 'theme_location' => 'language-menu' ) ); ?>

												<?php qtranxf_generateLanguageSelectorShortcode(); ?>
										</div>

















