<?php

function meal_banner_section_metabox( $metaboxes ) {

	$section_id = 0;
	if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
		$section_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
	}

	$section_meta = get_post_meta( $section_id, 'meal-section-type', true );
//	print_r($section_meta);
	$section_type = $section_meta['type'];

	if ( 'banner' != $section_type ) {
		return $metaboxes;
	}

	$metaboxes[] = array(
		'id'        => 'meal-section-banner',
		'title'     => __( 'Banner Section', 'meal-theme' ),
		'post_type' => 'sections',
		'context'   => 'normal',
		'priority'  => 'default',
		'sections'  => array(
			array(
				'name'            => 'meal-banner-section-one',
				'icon'            => 'fa fa-image',
				'fields'          => array(
					array(
						'id'    => 'banner_image',
						'title' => __( 'Banner Image', 'meal-theme' ),
						'type'  => 'image',
					),
					array(
						'id'    => 'button_title',
						'title' => __( 'Button Title', 'meal-theme' ),
						'type'  => 'text',
					),
					array(
						'id'    => 'button_target',
						'title' => __( 'Button Target', 'meal-theme' ),
						'type'  => 'text',
					),
				),
			)
		)
	);

//	print_r($metaboxes);
	return $metaboxes;

}

add_filter('cs_metabox_options', 'meal_banner_section_metabox');
