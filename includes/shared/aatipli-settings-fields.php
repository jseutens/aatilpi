<?php
function aatilpi_get_fields_array() {
	// $arr_field=['Field name','aatilpi_field_name','field_type',field_order,'yes/no','description'];
	//contact data
	$arr_address=[__('Address', AATILPI_TEXTDOMAIN),'aatilpi_address','textarea',1,'yes',__('Fill in the address of the location', AATILPI_TEXTDOMAIN)];
	$arr_gps_coords=[__('Gps Coordinates', AATILPI_TEXTDOMAIN),'aatilpi_gps_coords','text',2,'yes',__('GPS coordinates seperated with a comma', AATILPI_TEXTDOMAIN)];
	$arr_phone=[__('Phone', AATILPI_TEXTDOMAIN),'aatilpi_phone','text',3,'yes',__('Your landline number', AATILPI_TEXTDOMAIN)];
	$arr_cellphone=[__('Cellphone', AATILPI_TEXTDOMAIN),'aatilpi_cellphone','text',4,'yes',__('Your cellphone number', AATILPI_TEXTDOMAIN)];
	$arr_fax=[__('Fax', AATILPI_TEXTDOMAIN),'aatilpi_fax','text',5,'yes',__('Your fax number', AATILPI_TEXTDOMAIN)];
	$arr_whatsapp=[__('Whatsapp', AATILPI_TEXTDOMAIN),'aatilpi_whatsapp','text',6,'yes',__('This is the number that will be used to send the message. It must be a full phone number in international format. Omit any zeroes, brackets, or dashes when adding the phone number in international format.<br>Examples:<br>Use: 1XXXXXXXXXX<br>Don\'t use: +001-(XXX)XXXXXXX', AATILPI_TEXTDOMAIN)];
	$arr_e_mail=[__('E-mail', AATILPI_TEXTDOMAIN),'aatilpi_e_mail','text',7,'yes',__('Your e-mail address', AATILPI_TEXTDOMAIN)];
	$arr_ordering_link=[__('Ordering link', AATILPI_TEXTDOMAIN),'aatilpi_ordering_link','text',8,'yes',__('If you offer online ordering, enter the URL of your order page here (can be on this site or external) and a link to it will display in your contact card.', AATILPI_TEXTDOMAIN)];
	//Legal information
	$arr_VAT=[__('VAT', AATILPI_TEXTDOMAIN),'aatilpi_VAT','text',9,'yes',__('This is your VAT number', AATILPI_TEXTDOMAIN)];
	$arr_prof_id=[__('Professional ID', AATILPI_TEXTDOMAIN),'aatilpi_prof_id','text',10,'yes',__('This is the company ID number with the goverment , can be the same as VAT like in Belgium', AATILPI_TEXTDOMAIN)];
	$arr_bank_account=[__('Bank account', AATILPI_TEXTDOMAIN),'aatilpi_bank_account','text',11,'yes',__('This is the company bank account number', AATILPI_TEXTDOMAIN)];
	$arr_bank_bicswift=[__('BIC/SWIFT code', AATILPI_TEXTDOMAIN),'aatilpi_bank_bicswift','text',12,'yes',__('The BIC/SWIFT code of the bank', AATILPI_TEXTDOMAIN)];
	//social media
	$arr_facebook=[__('Facebook', AATILPI_TEXTDOMAIN),'aatilpi_facebook','text',13,'no',__('Your Facebook page', AATILPI_TEXTDOMAIN)];
	$arr_twitter=[__('Twitter', AATILPI_TEXTDOMAIN),'aatilpi_twitter','text',14,'no',__('Your Twitter handle', AATILPI_TEXTDOMAIN)];
	$arr_instagram=[__('Instagram', AATILPI_TEXTDOMAIN),'aatilpi_instagram','text',15,'no',__('Your Instagram account', AATILPI_TEXTDOMAIN)];
	$arr_youtube=[__('YouTube', AATILPI_TEXTDOMAIN),'aatilpi_youtube','text',16,'no',__('Your YouTube page', AATILPI_TEXTDOMAIN)];
	$arr_reddit=[__('Reddit', AATILPI_TEXTDOMAIN),'aatilpi_reddit','text',17,'no',__('Your Reddit page', AATILPI_TEXTDOMAIN)];
	$arr_discord=[__('Discord', AATILPI_TEXTDOMAIN),'aatilpi_discord','text',18,'no',__('Your Discord page', AATILPI_TEXTDOMAIN)];
	$arr_twitch=[__('Twitch', AATILPI_TEXTDOMAIN),'aatilpi_twitch','text',19,'no',__('Your Twich page', AATILPI_TEXTDOMAIN)];
	$arr_snapchat=[__('Snapchat', AATILPI_TEXTDOMAIN),'aatilpi_snapchat','text',19,'no',__('Your Snapchat account', AATILPI_TEXTDOMAIN)];
    return [$arr_address,$arr_gps_coords,$arr_phone,$arr_cellphone,$arr_fax,$arr_whatsapp,$arr_e_mail,$arr_ordering_link,$arr_VAT,$arr_prof_id,$arr_bank_account,$arr_bank_bicswift,$arr_facebook,$arr_twitter,$arr_instagram,$arr_youtube,$arr_reddit,$arr_discord];
}
define('AATILPI_FIELDS_ARRAY', aatilpi_get_fields_array());

