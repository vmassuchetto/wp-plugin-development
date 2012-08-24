function some_func( $param ) {

    if ( empty( $param ) )
        $this->error->add( 'plugin_name',
            sprintf( __( 'Parametro %1$s invalido no arquivo %2$s linha %3$s.',
                'plugin_textdomain' ),
                '$param', __FILE__, __LINE__ ) );

    /* func */

}
