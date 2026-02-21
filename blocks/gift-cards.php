<?php
/**
 * LC Gift Cards Block Template.
 *
 * @package lc-hinoki2023
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="gift-cards">
	<div class="container py-5">
		<div class="row gy-5">
			<?php
			while ( have_rows( 'gift_cards' ) ) {
				the_row();
				?>
				<div class="col-lg-6">
					<div class="washi">
						<h3 class="heading--underline"><?php the_sub_field( 'gift_card_title' ); ?> - £<?php the_sub_field( 'gift_card_price' ); ?></h3>
						<p style="min-height:4rem"><?php the_sub_field( 'gift_card_description' ); ?></p>
						<?php echo do_shortcode( '[asp_product id="' . get_sub_field( 'gift_card_product_id' ) . '"]' ); ?>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>