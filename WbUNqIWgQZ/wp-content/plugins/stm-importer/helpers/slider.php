<?php

function stm_theme_import_sliders($layout)
{

	$default_sliders = array(
		'about_us_slider',
		'service_slider'
	);
	$slider_names = array(
		'layout_1' => 'fullscreen-main-slider',
        'layout_2' => 'main_slider',
        'layout_3' => 'main_slider',
        'layout_5' => 'main_slider',
        'layout_6' => 'main_slider',
        'layout_7' => 'main_slider',
        'layout_8' => 'main_slider',
        'layout_9' => 'main_slider',
        'layout_10' => 'main_slider',
        'layout_11' => 'main_slider',
        'layout_12' => 'main_slider',
        'layout_13' => 'main_slider',
        'layout_14' => 'main_slider',
        'layout_15' => 'main_slider',
        'layout_16' => 'main_slider',
        'layout_17' => 'main_slider',
        'layout_18' => 'main_slider',
        'layout_19' => 'main_slider',
        'layout_20' => 'main_slider',
        'layout_amsterdam' => 'main_slider',
        'layout_zurich' => 'main_slider',
        'layout_mumbai' => 'main_slider',
        'layout_davos' => 'main_slider',
        'layout_denver' => 'main_slider',
        'layout_brussels' => 'main_slider',
        'layout_los_angeles' => 'main_slider',
        'layout_toronto' => 'main_slider',
        'layout_san_francisco' => 'main_slider',
        'layout_beijing' => 'main_slider',
        'layout_istanbul' => 'main_slider',
        'layout_new_delhi' => 'main_slider',
        'layout_vienna' => 'main_slider',
        'layout_marseille' => 'Home',
        'layout_berlin' => 'highlight-carousel7',
        'layout_lisbon' => 'highlight-carousel7',
        'layout_lyon' => 'main_slider',
        'layout_melbourne' => 'main_slider',
        'layout_barcelona' => 'main_slider',
        'layout_osaka' => 'main_slider',
        'layout_ankara' => 'main_slider',
        'layout_budapest' => 'main_slider',
        'layout_liverpool' => 'highlight-carousel7',
        'layout_geneva' => 'main_slider',
	);

	if (class_exists('RevSlider')) {
		if (!empty($slider_names[$layout])) {
			$path = STM_CONFIGURATIONS_PATH . '/demos/' . $layout . '/sliders/';
			$slider_path = $path . $slider_names[$layout] . '.zip';

			if (file_exists($slider_path)) {
				$slider = new RevSlider();
				$slider->importSliderFromPost(true, true, $slider_path);
			}
		}
		
		$default_path = STM_CONFIGURATIONS_PATH . '/demos/default_sliders/';
		foreach ($default_sliders as $slider_name) {
			$slider_path = $default_path . $slider_name . '.zip';
			if (file_exists($slider_path)) {
				$slider = new RevSlider();
				$slider->importSliderFromPost(true, true, $slider_path);
			}
		}
	}

}