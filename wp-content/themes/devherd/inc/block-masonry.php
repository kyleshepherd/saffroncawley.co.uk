<div class="md:w-4/5 mr-0 md:mr-2 ml-auto mt-2">
	<?php if ( have_rows( 'images' ) ) { ?>
        <div id="masonry">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>
			<?php while ( have_rows( 'images' ) ) {
				the_row();
				$image       = get_sub_field( 'image' );
				$orientation = get_sub_field( 'orientation' ) . '-prev';
				?>
                <a class="grid-img inline-block mb-2" href="<?php echo $image['sizes'][ $orientation ]; ?>">
                    <img src="<?php echo $image['sizes'][ $orientation ]; ?>" />
                </a>
			<?php } ?>
        </div>
	<?php } ?>
</div>
