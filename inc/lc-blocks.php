<?php
/**
 * LC Blocks
 * Register custom blocks for LC site
 *
 * @package lc-hinoki2023
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register ACF Blocks
 */
function acf_blocks() {
	if ( function_exists('acf_register_block_type') ) {
		acf_register_block(
			array(
				'name'            => 'LC Gift Cards',
				'title'           => 'LC Gift Cards',
				'description'     => '',
				'render_template' => 'blocks/gift-cards.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Hero',
				'title'           => 'LC Hero',
				'description'     => '',
				'render_template' => 'blocks/image_hero.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Latest Banner',
				'title'           => 'LC Latest Banner',
				'description'     => '',
				'render_template' => 'blocks/latest.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Text Button 60:40',
				'title'           => 'LC Text Button 60:40',
				'description'     => '',
				'render_template' => 'blocks/text_6040.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Rollover Nav',
				'title'           => 'LC Rollover Nav',
				'description'     => '',
				'render_template' => 'blocks/rollover.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Upcoming Sessions',
				'title'           => 'LC Upcoming Sessions',
				'description'     => '',
				'render_template' => 'blocks/upcoming.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC CTA Block',
				'title'           => 'LC CTA Block',
				'description'     => '',
				'render_template' => 'blocks/cta_block.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Text Image Washi',
				'title'           => 'LC Text Image Washi',
				'description'     => '',
				'render_template' => 'blocks/text_image_washi.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Text Image',
				'title'           => 'LC Text Image',
				'description'     => '',
				'render_template' => 'blocks/text_image_plain.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Page Title',
				'title'           => 'LC Page Title',
				'description'     => '',
				'render_template' => 'blocks/page_title.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Card Grid',
				'title'           => 'LC Card Grid',
				'description'     => '',
				'render_template' => 'blocks/card_grid.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Buttons',
				'title'           => 'LC Buttons',
				'description'     => '',
				'render_template' => 'blocks/buttons.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Latest News',
				'title'           => 'LC Latest News',
				'description'     => '',
				'render_template' => 'blocks/latest_news.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Newsletter',
				'title'           => 'LC Newsletter',
				'description'     => '',
				'render_template' => 'blocks/newsletter.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Full Width',
				'title'           => 'LC Full Width',
				'description'     => '',
				'render_template' => 'blocks/full_width.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Secondary Nav',
				'title'           => 'LC Secondary Nav',
				'description'     => '',
				'render_template' => 'blocks/secondary.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Client Quote',
				'title'           => 'LC Client Quote',
				'description'     => '',
				'render_template' => 'blocks/client_quote.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Text Location',
				'title'           => 'LC Text Location',
				'description'     => '',
				'render_template' => 'blocks/text_location.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Sessions Nav',
				'title'           => 'LC Sessions Nav',
				'description'     => '',
				'render_template' => 'blocks/sessions_nav.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Sessions Cards',
				'title'           => 'LC Sessions Cards',
				'description'     => '',
				'render_template' => 'blocks/sessions_cards.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);

		// phpcs:disable
		/*
		acf_register_block(
		array(
			'name'              => 'LC Text Image',
			'title'             => 'LC Text Image',
			'description'       => '',
			'render_template'   => 'blocks/text_image_plain.php',
			'category'          => 'layout',
			'icon'              => 'excerpt-view',
			'mode'  => 'edit',
			'supports' => array('mode' => false),
		));
		acf_register_block(
		array(
			'name'              => 'LC Text Map',
			'title'             => 'LC Text Map',
			'description'       => '',
			'render_template'   => 'blocks/text_map.php',
			'category'          => 'layout',
			'icon'              => 'excerpt-view',
			'mode'  => 'edit',
			'supports' => array('mode' => false),
		));

		acf_register_block(
		array(
			'name'              => 'LC Text Button 60:40',
			'title'             => 'LC Text Button 60:40',
			'description'       => '',
			'render_template'   => 'blocks/text_6040.php',
			'category'          => 'layout',
			'icon'              => 'excerpt-view',
			'mode'  => 'edit',
			'supports' => array('mode' => false),
		));

		acf_register_block(
		array(
			'name'              => "LC What's On",
			'title'             => "LC What's On",
			'description'       => '',
			'render_template'   => 'blocks/whatson_list.php',
			'category'          => 'layout',
			'icon'              => 'excerpt-view',
			'mode'  => 'edit',
			'supports' => array('mode' => false),
		));
		acf_register_block(
		array(
			'name'              => "LC Featured Post",
			'title'             => "LC Featured Post",
			'description'       => '',
			'render_template'   => 'blocks/featured.php',
			'category'          => 'layout',
			'icon'              => 'excerpt-view',
			'mode'  => 'edit',
			'supports' => array('mode' => false),
		));
		acf_register_block(
		array(
			'name'              => "LC Icon Nav",
			'title'             => "LC Icon Nav",
			'description'       => '',
			'render_template'   => 'blocks/icon_nav.php',
			'category'          => 'layout',
			'icon'              => 'excerpt-view',
			'mode'  => 'edit',
			'supports' => array('mode' => false),
		));

		*/
		// phpcs:enable

		// corporate blocks.
		acf_register_block(
			array(
				'name'            => 'LC Corp - Intro',
				'title'           => 'LC Corp - Intro',
				'description'     => '',
				'render_template' => 'blocks/corp_intro.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Corp - Pane Two',
				'title'           => 'LC Corp - Pane Two',
				'description'     => '',
				'render_template' => 'blocks/corp_paneTwo.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Corp - Pane Three',
				'title'           => 'LC Corp - Pane Three',
				'description'     => '',
				'render_template' => 'blocks/corp_paneThree.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Corp - Pane Four',
				'title'           => 'LC Corp - Pane Four',
				'description'     => '',
				'render_template' => 'blocks/corp_paneFour.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Corp - Pane Six',
				'title'           => 'LC Corp - Pane Six',
				'description'     => '',
				'render_template' => 'blocks/corp_paneSix.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Corp - Pane Seven',
				'title'           => 'LC Corp - Pane Seven',
				'description'     => '',
				'render_template' => 'blocks/corp_paneSeven.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Corp - Pane Eight',
				'title'           => 'LC Corp - Pane Eight',
				'description'     => '',
				'render_template' => 'blocks/corp_paneEight.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);
		acf_register_block(
			array(
				'name'            => 'LC Corp - Pane Nine',
				'title'           => 'LC Corp - Pane Nine',
				'description'     => '',
				'render_template' => 'blocks/corp_paneNine.php',
				'category'        => 'layout',
				'icon'            => 'excerpt-view',
				'mode'            => 'edit',
				'supports'        => array( 'mode' => false ),
			)
		);

	}
}
add_action('acf/init', 'acf_blocks');

/**
 * Gutenburg core modifications.
 *
 * @param array  $args Block type arguments.
 * @param string $name Block type name.
 * @return array Modified block type arguments.
 */
function core_image_block_type_args( $args, $name ) {
	if ( 'core/paragraph' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}
	if ( 'core/heading' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}
	if ( 'core/list' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}

	return $args;
}
add_filter('register_block_type_args', 'core_image_block_type_args', 10, 3);

/**
 * Add Bootstrap 5 container.
 *
 * @param array  $attributes Block type arguments.
 * @param string $content Block content.
 * @return string Modified block content.
 */
function modify_core_add_container( $attributes, $content ) {
	ob_start();
	// $class = $block['className'];
	?>
<div class="container-xl">
	<?= $content; ?>
</div>
	<?php
	$content = ob_get_clean();
	return $content;
}


?>