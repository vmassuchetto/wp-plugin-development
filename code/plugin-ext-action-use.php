function show_something_header() { /* header */ }
add_action('before_show_something', 'show_something_header');

function show_something_footer() { /* footer */ }
add_action('after_show_something', 'show_something_footer');
