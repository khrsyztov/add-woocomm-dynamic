<?php

/*
Plugin Name: Add Woocommerce Dyanimc Pricing
Description: Adds Woocommerce Dyanimc Pricing options to WP All Import
Version: 1.0
Author: Christopher Heneghan
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

include "rapid-addon.php";

$add_woocomm_dynamic = new RapidAddon('Add Woocomm Dynamic', 'add_woocomm_dynamic');

$add_woocomm_dynamic->add_field(
	'applies_to',
	'Applies To',
    'radio',
    array(
        'everyone' => 'Everyone'
    )
);

$add_woocomm_dynamic->add_field(
	'quantities_based_on',
	'Quantities based on:',
    'radio',
    array(
        'product' => 'Product Quantity'
    )
);

$add_woocomm_dynamic->add_field(
	'rules_processing_mode',
	'Rule Processing Mode:',
    'radio',
    array(
        'continuous' => 'Bulk'
    )
);

$add_woocomm_dynamic->add_field('date_from', 'Date From', 'text');
$add_woocomm_dynamic->add_field('date_to', 'Date To', 'text');

$add_woocomm_dynamic->add_field('from', 'Quantity From', 'text');
$add_woocomm_dynamic->add_field('to', 'Quantity To', 'text');
$add_woocomm_dynamic->add_field('amount', 'Price per unit', 'text');

$add_woocomm_dynamic->set_import_function('add_woocomm_dynamic_function');

function add_woocomm_dynamic_function() {
	// add data to dynamic pricing
}

$add_woocomm_dynamic->run(
	array(
		"themes" => array("Bi-Shop Child")
	)
);

