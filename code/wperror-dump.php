function dump_errors() {
    if ( ! $error_codes = $this->error->get_error_codes() )
        return true;

    foreach ( $error_codes as $code ) {
        $message = $this->error->get_error_message( $code );
        $data = $this->error_get_error_data( $code );

        /* display error */

        echo "Error: {$message}\n\t{$data}\n\n";
    }
}
