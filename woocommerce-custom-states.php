<?php
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
 function custom_woocommerce_states( $states ) {
  $states['IN'] = array(
    'AP' => 'Andra Pradesh',
    'AR' => 'runachal Pradesh',
    'AS' => 'Assam',
	'BR' => 'Bihar',
	'CT' => 'Chhattisgarh',
	'GA' => 'Goa',
	'GJ' => 'Gujarat',
	'HR' => 'Haryana',
	'HP' => 'Himachal Pradesh',
	'JK' => 'Jammu and Kashmir',
	'JH' => 'Jharkhand',
	'KA' => 'Karnataka',
	'KL' => 'Kerala',
	'MP' => 'Madhya Pradesh',
	'MH' => 'Maharashtra',
	'MN' => 'Manipur',
	'ML' => 'Meghalaya',
	'MZ' => 'Mizoram',
	'NL' => 'Nagaland',
	'OR' => 'Orissa',
	'PB' => 'Punjab',
	'RJ' => 'Rajasthan',
	'SK' => 'Sikkim',
	'TN' => 'Tamil Nadu',
	'TG' => 'telengana State'
	'TR' => 'Tripura',
	'UT' => 'Uttaranchal',
	'UP' => 'Uttar Pradesh',
	'WB' => 'West Bengal',
	'AN' => 'Andaman and Nicobar Islands',
	'CH' => 'Chandigarh',
	'DN' => 'Dadar and Nagar Haveli',
	'DD' => 'Daman and Diu',
	'DL' => 'Delhi',
	'LD' => 'Lakshadeep',
	'PY' => 'Pondicherry (Puducherry)'
);
 
  return $states;
}
?>
