function custom_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'my_script',
        'my_script.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
