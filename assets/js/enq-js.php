<?php
foreach (glob('*.js') as $js) {
	echo "wp_enqueue_script ('wptheme-{$js}', get_template_directory_uri().'assets/js/{$js}', array('jquery'), '1.0', true);\n";
}
