<?php
foreach (glob('*.css') as $css) {
	echo "wp_enqueue_style ('css-{$css}', get_template_directory_uri().'assets/css/{$css}', null)\n";
}