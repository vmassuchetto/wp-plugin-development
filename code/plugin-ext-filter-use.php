function parse_something ( $something ) {

    return preg_replace( $regex, $replace, $something );

}
add_filter( 'get_something', 'parse_something' );
