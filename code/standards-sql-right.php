$r = $wpdb->get_results(
    "
    SELECT ID, post_title, post_content
    FROM {$wpdb->posts}
    WHERE 1=1
        AND post_date > '2012-08-25 00:00:00'
    "
);
