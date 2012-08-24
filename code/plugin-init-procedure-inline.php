function someplugin_init () {
    add_action('hook1', 'callback1');
    add_action('hook2', 'callback2');
    add_filter('filter', 'callback3');
}
someplugin_init();

