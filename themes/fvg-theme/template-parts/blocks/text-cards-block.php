<div class="text-card__block">
	<div class="text-card__row" id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
		<?php if ( have_rows( 'text_cards_block' ) ) : ?>
			<?php while ( have_rows( 'text_cards_block' ) ) : the_row(); ?>
			<div class="text-card__wrapper">
				<h2 class="text-card__heading"><?php the_sub_field( 'title' ); ?></h2>
				<p class="text-card__paragraph"><?php the_sub_field( 'paragraph' ); ?></p>
				<?php if ( get_sub_field( 'icon' ) ) { ?>
					<img class="text-card__icon" src="<?php the_sub_field( 'icon' ); ?>" />
				<?php } ?>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	</div>
</div>