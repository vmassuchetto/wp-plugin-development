function custom_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'my_script', ... 'my_script.js', array( 'jquery' ));
    $params = array(
        'key1' => 'val1',
        'key2' => 'val2'
    );
    wp_localize_script( 'my_plugin', 'params', $params );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
