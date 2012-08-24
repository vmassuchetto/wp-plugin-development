$r = $wpdb->get_results( $wpdb->prepare(
    "
    SELECT ID, post_title, post_content
    FROM $wpdb->posts
    WHERE 1=1
        AND post_date > '%s'
    "
, $some_date ) );
