<div class="md:w-4/5 mr-0 md:mr-2 ml-auto mt-2 flex justify-center flex-col min-h-screen">
    <div class="flex flex-wrap">
		<?php
		$image       = get_field( 'image' );
		$orientation = get_field( 'image_orientation' );
		$text        = get_field( 'text' );
		?>
        <div class="w-1/2">
            <img src="<?php echo $image['sizes'][ $orientation ]; ?>" />
        </div>
        <div class="w-1/2 p-2 pl-4">
			<?php echo $text; ?>
        </div>
    </div>
</div>