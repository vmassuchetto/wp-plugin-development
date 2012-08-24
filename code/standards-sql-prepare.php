$wpdb->get_var( $wpdb->prepare(
    "
    SELECT foo
    FROM {$wpdb->table}
    WHERE 1=1
        AND bar_id = %d
        AND bar_slug = %s
    ",
    $id, $slug
) );

