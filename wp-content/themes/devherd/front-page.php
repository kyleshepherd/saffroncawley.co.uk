<?php
get_header();
?>

    <main>
		<?php get_template_part( 'inc/sidebar' ); ?>
		<?php get_template_part( 'inc/block', 'masonry' ); ?>
    </main>

<?php
get_footer();
?>