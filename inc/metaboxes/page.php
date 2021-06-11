<?php

function meal_section_picker_options( $metaboxes ) {

	$page_id = 0;
	if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
		$page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
	}

	$current_page_template = get_post_meta( $page_id, '_wp_page_template', true );
	if ( ! in_array( $current_page_template, array( 'page-templates/landing-page.php' ) ) ) {
		return $metaboxes;
	}

	$metaboxes[] = array(
		'id'        => 'meal-page-section',
		'title'     => __( 'Sections', 'meal-theme' ),
		'post_type' => 'page',
		'context'   => 'normal',
		'priority'  => 'default',
		'sections'  => array(
			array(
				'name'            => 'meal-page-sections-section-one',
				'icon'            => 'fa fa-image',
				'fields'          => array(
					array(
						'id' => 'sections',
						'title' => __('Select Sections', 'meal-theme'),
						'type'            => 'group',
						'button_title'    => __( 'Add New Section', 'meal-theme' ),
						'accordion_title' => __( 'Select Sections', 'meal-theme' ),
						'fields' => array(
							array(
								'id'         => 'section',
								'title'      => __( 'Select Section', 'meal-theme' ),
								'type'       => 'select',
								'options'    => 'post',
								'query_args' => array(
									'post_type'      => 'sections',
									'posts_per_page' => -1,
								)
							)
						)
					)
				)
			)
		)
	);

//	print_r($metaboxes);
	return $metaboxes;

}

add_filter( 'cs_metabox_options', 'meal_section_picker_options' );
