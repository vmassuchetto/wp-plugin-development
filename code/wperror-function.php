function some_func( $param ) {

    $error = false;

    if ( ! empty( $param ) )
        $error = new WP_Error( 'plugin_name',
            sprintf( __( 'Parametro %1$s invalido no arquivo %2$s linha %3$s.',
                'plugin_textdomain' ),
                '$param', __FILE__, __LINE__ ) );

    if ( is_wp_error ( $error ) )
        wp_die ( $error, 'Argumento invalido.' );

    /* func */

}
