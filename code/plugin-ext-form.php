<form>
<?php foreach ( $field as $f ) : ?>
    <?php $f = apply_filters( 'display_field', $f ); ?>
    <?php do_action( 'before_display_field', $f ); ?>

    <input
        name="<?php echo $f['name']; ?>"
        type="<?php echo $f['type']; ?>"
        value="<?php echo $f['value']; ?>" />

    <?php do_action( 'after_display_field', $f ); ?>
<?php endforeach; ?>

<?php do_action( 'before_submit' ); ?>
<input type="submit" value="Enviar" />

</form>
