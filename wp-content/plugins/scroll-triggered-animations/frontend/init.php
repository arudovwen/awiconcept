<?php $option = get_option( 'toast_sta_settings' ); ?>
<?php if($option['disable_all'] !== 'on'): ?>
<?php include dirname(__FILE__). '/js.php'; ?>
<?php function sta_enqueue_frontend_styles(){
	wp_enqueue_style('sta_css', plugin_dir_url( __FILE__ ).'animations.css', array(), null, false);
}
add_action('wp_enqueue_scripts', 'sta_enqueue_frontend_styles');
endif; ?>