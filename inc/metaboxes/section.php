<?php

function meal_section_type_metabox($metaboxes) {
	$metaboxes[] = array(
		'id' => 'meal-section-type',
		'title' => __('Section Type', 'meal-theme'),
		'post_type' => 'sections',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name' => 'meal_section_type_one',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'type',
						'title' => __('Select Section Type', 'meal-theme'),
						'type' => 'select',
						'options' => array(
							'banner'	=> __('Banner', 'meal-theme'),
							'featured' => __('Featured Recipes', 'meal-theme')
						)
					)
				)
			)
		)
	);
//	print_r($metaboxes);
	return $metaboxes;

}

add_filter('cs_metabox_options', 'meal_section_type_metabox');
