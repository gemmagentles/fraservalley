<?php if ( have_rows( 'cards_with_captions_block' ) ) : ?>
<div class="cards-with-captions__cards-wrapper">
    <?php while ( have_rows( 'cards_with_captions_block' ) ) : the_row(); ?>
        <div data-aos="fade-up" data-aos-easing="ease-in" data-aos-duration="550" class="cards-with-captions__card">
            <?php $image = get_sub_field( 'image' ); ?>
            <?php if ( $image ) { ?>
                <div class="cards-with-captions__image-wrapper">
                    <img class="cards-with-captions__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />                    
                </div>
            <?php } ?>
            <div class="cards-with-captions__text-wrapper">
                <h3 class="cards-with-captions__title"><?php the_sub_field( 'title' ); ?></h3>
                <span class="cards-with-captions__subtitle"><?php the_sub_field( 'sub_title' ); ?></span>
            </div>
        </div>
	<?php endwhile; ?>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
