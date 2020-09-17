<div class="md:w-4/5 mr-0 md:mr-2 ml-auto mt-4 sm:mt-10 flex flex-col min-h-screen">
	<div class="flex flex-wrap items-center">
		<?php
		$image       = get_field( 'image' );
		$orientation = get_field( 'image_orientation' );
		$text        = get_field( 'text' );
		?>
		<div class="w-full sm:w-1/2">
			<img class="mx-auto" src="<?php echo $image['sizes'][ $orientation . '-small' ]; ?>"/>
		</div>
		<div class="w-full sm:w-1/2 p-2 pr-4">
			<?php echo $text; ?>
		</div>
	</div>
</div>
