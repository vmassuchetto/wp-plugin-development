function custom_scripts() {
    <script type="text/javascript" src="script.js" />
    <script type="text/javascript">
        someCall();
    </script>
}
add_action( 'custom_scripts', 'wp_head' );
