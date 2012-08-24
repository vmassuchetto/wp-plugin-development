function callback1 () { /* code */ }
add_action( 'hook1', 'callback1' );

function callback2 () { /* code */ }
add_action( 'hook2', 'callback2' );

function callback3 ($param) { /* code */ return $param; }
add_filter( 'filter', 'callback3' );
