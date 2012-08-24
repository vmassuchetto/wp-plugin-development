class Some_Plugin {

    function Some_Plugin() {
        add_action( 'hook1', array($this, 'hook1' ));
        add_action( 'hook1', array($this, 'hook2' ));
    }

    function hook1 { /* code */ }

    function hook2 { /* code */ }

}
