$wpdb->get_var( $wpdb->prepare(
    "
    SELECT foo
    FROM {$wpdb->table}
    WHERE bar = %s
    ",
    $id
) );

