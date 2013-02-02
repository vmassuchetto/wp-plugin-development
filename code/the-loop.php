<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php // content ?>

  <?php endwhile; ?>

<?php else : ?>

  <?php // not found ?>

<?php endif; ?>
