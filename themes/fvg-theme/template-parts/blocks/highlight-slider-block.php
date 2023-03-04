
<div class="highlight-slider__wrapper" id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php if ( have_rows( 'highlight_slides' ) ) : ?>
        <div class="highlight-slider__container">
		<?php while ( have_rows( 'highlight_slides' ) ) : the_row(); ?>
		<div>
			<?php $slide_image = get_sub_field( 'slide_image' ); ?>
			<?php if ( $slide_image ) { ?>
				<img class="highlight-slider__image" src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
			<?php } ?>
			<div class="highlight-slider__caption">
				<h3 class="highlight-slider__heading">
					<span class="highlight-slider__heading--year"><?php the_sub_field( 'year' ); ?></span><?php the_sub_field( 'caption_heading' ); ?>
				</h3>
				<p class="highlight-slider__paragraph"><?php the_sub_field( 'caption_paragraph' ); ?></p>
			</div>
        </div>
		<?php endwhile; ?>
        </div>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>
</div>
