<?php
/*
	Plugin Name: URL ShortCode
	Plugin URI: http://csnmedia.com
	Description: This plugin registers a Short Code , [CsnUrl] , you can put it on page or post contents. it will return URL, depending on the parameter. EX: [CsnUrl type='wpurl'] , [CsnUrl type='template_directory'], default type is 'wpurl'
	Author: CSN Team
	Version: 0.1-alpha
	Author URI: http://csnmedia.com
 */
?>
<?php
function csn_url_shortcode_handler( $atts, $content=null, $code="" ) {

	$a = shortcode_atts( array(
		   'type' => 'wpurl'
		   ), $atts );
	$url = bloginfo($a[type]);
	return $url;
}
add_shortcode( 'CsnUrl', 'csn_url_shortcode_handler' );
?>