class Some_Plugin {

    function SomePlugin() {
        add_action( 'hook1', array($this, 'hook1' ));
        add_action( 'hook1', array($this, 'hook2' ));
    }

    function hook1 { /* code */ }

    function hook2 { /* code */ }

}
new Some_Plugin();
