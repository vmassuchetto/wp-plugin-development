<form>
<?php foreach ( $field as $f ) : ?>
    <?php $field = apply_filters( 'display_field', $field ); ?>
    <?php do_action( 'after_display_field', $field ); ?>

    <input
        name="<?php echo $f['name']; ?>"
        type="<?php echo $f['type']; ?>"
        value="<?php echo $f['value']; ?>" />

    <?php do_action( 'after_display_field', $field ); ?>
<?php endforeach; ?>

<?php do_action( 'before_submit' ); ?>
<input type="submit" value="Enviar" />

</form>
