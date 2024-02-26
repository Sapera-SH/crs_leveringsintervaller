<?php
	/*
	Plugin Name: Cloud Retail Systems A/S - Show product delivery intervals
	Plugin URI: http://cloudretailsystems.dk
	Description: Show product delivery intervals: [crs_delivery_intervals].
	Author: Cloud Retail Systems A/S - Søren Højby
	Version: 1.0
	Author URI: http://cloudretailsystems.dk
	*/

	function crs_delivery_intervals() {
		global $product;

		if(!is_null($product)){
			if($product->get_attribute('leveringstid')){
				$leveringstid = @$product->get_attribute('leveringstid');
				return '<span class="woo-custom-intervals">Leveringstid: <span class="woo-custom-intervals_att">'.$leveringstid.'</span></span>';
			}else{
				return  '<span class="woo-custom-intervals"></span>';
			}
		}

	}

	add_shortcode('crs_delivery_intervals', 'crs_delivery_intervals');


