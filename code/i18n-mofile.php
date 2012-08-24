function plugin_textdomain() {
    load_plugin_textdomain( 'plugin_textdomain', false,
        dirname( plugin_basename( __FILE__ ) ) . '/lang/' );

}
add_action( 'plugins_loaded', 'plugin_textdomain' );
