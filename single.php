1
<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile; // end of the loop. ?>

<?php echo get_post_meta($post->ID, 'key', true); ?>

<p>Today's Mood: <?php echo get_post_meta($post->ID, 'Mood', true); ?></p>
