<?php
function aatilpi_get_fields_array() {
	$arr_address=[__('Address', AATILPI_TEXTDOMAIN),'aatilpi_address','textarea',1,'yes'];
	$arr_gps_coords=[__('Gps Coordinates', AATILPI_TEXTDOMAIN),'aatilpi_gps_coords','text',2,'yes'];
	$arr_phone=[__('Phone', AATILPI_TEXTDOMAIN),'aatilpi_phone','text',3,'yes'];
	$arr_cellphone=[__('Cellphone', AATILPI_TEXTDOMAIN),'aatilpi_cellphone','text',4,'yes'];
	$arr_fax=[__('Fax', AATILPI_TEXTDOMAIN),'aatilpi_fax','text',5,'yes'];
	$arr_whatsapp=[__('Whatsapp', AATILPI_TEXTDOMAIN),'aatilpi_whatsapp','text',6,'yes'];
	$arr_e_mail=[__('E-mail', AATILPI_TEXTDOMAIN),'aatilpi_e_mail','text',7,'yes'];
	$arr_ordering_link=[__('Ordering link', AATILPI_TEXTDOMAIN),'aatilpi_ordering_link','text',8,'yes'];
	$arr_VAT=[__('VAT', AATILPI_TEXTDOMAIN),'aatilpi_VAT','text',9,'yes'];
	$arr_prof_id=[__('Professional ID', AATILPI_TEXTDOMAIN),'aatilpi_prof_id','text',10,'yes'];
	$arr_bank_account=[__('Bank account', AATILPI_TEXTDOMAIN),'aatilpi_bank_account','text',11,'yes'];
	$arr_bank_bicswift=[__('BIC/SWIFT code', AATILPI_TEXTDOMAIN),'aatilpi_bank_bicswift','text',12,'yes'];
	$arr_facebook=[__('Facebook', AATILPI_TEXTDOMAIN),'aatilpi_facebook','text',13,'no'];
	$arr_twitter=[__('Twitter', AATILPI_TEXTDOMAIN),'aatilpi_twitter','text',14,'no'];
	$arr_instagram=[__('Instagram', AATILPI_TEXTDOMAIN),'aatilpi_instagram','text',15,'no'];
	$arr_youtube=[__('YouTube', AATILPI_TEXTDOMAIN),'aatilpi_youtube','text',16,'no'];
	$arr_reddit=[__('Reddit', AATILPI_TEXTDOMAIN),'aatilpi_reddit','text',17,'no'];
	$arr_discord=[__('Discord', AATILPI_TEXTDOMAIN),'aatilpi_discord','text',18,'no'];
	$arr_twitch=[__('Twitch', AATILPI_TEXTDOMAIN),'aatilpi_twitch','text',19,'no'];
    return [$arr_address,$arr_gps_coords,$arr_phone,$arr_cellphone,$arr_fax,$arr_whatsapp,$arr_e_mail,$arr_ordering_link,$arr_VAT,$arr_prof_id,$arr_bank_account,$arr_bank_bicswift,$arr_facebook,$arr_twitter,$arr_instagram,$arr_youtube,$arr_reddit,$arr_discord];
}
define('AATILPI_FIELDS_ARRAY', aatilpi_get_fields_array());