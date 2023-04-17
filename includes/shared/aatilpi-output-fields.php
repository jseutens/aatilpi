<?php
function output_html_based_on_field($fields_array) {
    foreach ($fields_array as $field) {
        $second_field = $field[1];

        // Output different HTML based on the value of the second field
 
        function output_html_based_on_field($field_key, $field_value) {
            $output = '';
        
            switch ($field_key) {
                case 'aatilpi_address':
                    // Output for address
                    break;
                case 'aatilpi_gps_coords':
                    // Output for GPS coordinates
                    // GOOGLE https://www.google.com/maps/dir/
                    // APPLE https://maps.apple.com/?daddr=
                    // WAZE https://waze.com/ul?ll=
                    // OSM https://www.openstreetmap.org/directions?engine=fossgis_osrm_car&route=%3B

                    break;
                case 'aatilpi_phone':
                    // Output for phone <a href="tel:123-456-7890">123-456-7890</a>
                    break;
                case 'aatilpi_cellphone':
                    // Output for cellphone
                    break;
                case 'aatilpi_fax':
                    // Output for fax
                    break;
                case 'aatilpi_whatsapp':
                    // Output for WhatsApp <a href="https://api.whatsapp.com/send?phone=1234567890">Send Message on WhatsApp</a>

                    break;
                case 'aatilpi_e_mail':
                    // Output for email <a href="mailto:example@example.com">example@example.com</a>
                    // <a href="mailto: [email protected] "> [email protected] </a>
                    break;
                case 'aatilpi_ordering_link':
                    // Output for ordering link <a href="https://www.example.com" target="_blank">Link Text</a> 
                    //    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
                    //	<path fill="#36c" d="M6 1h5v5L8.86 3.85 4.7 8 4 7.3l4.15-4.16L6 1ZM2 3h2v1H2v6h6V8h1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/>
                      //  </svg>
                      $link = 'https://www.example.com';

                      $parsed_url = parse_url($link);
                      $domain = $parsed_url['host'];
                      
                      $current_domain = $_SERVER['HTTP_HOST'];
                      
                      if ($domain !== $current_domain) {
                          $aatilpi_link = '<a href="'.$link.'" class="external-link" target="_blank">'.$link.'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><title>'.__('External Link', AATILPI_TEXTDOMAIN).'</title><path fill="#36c" d="M6 1h5v5L8.86 3.85 4.7 8 4 7.3l4.15-4.16L6 1ZM2 3h2v1H2v6h6V8h1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/></svg></a>';
                      } else {
                          $aatilpi_link = '<a href="'.$link.'">'.$link.'</a>';
                      }
                      $output = $aatilpi_link;
                    break;
                case 'aatilpi_skype':
                    // Output for Skype
                    break;
                case 'aatilpi_viber':
                    // Output for Viber
                    break;
                case 'aatilpi_telegram':
                    // Output for Telegram
                    break;
                case 'aatilpi_wechat':
                    // Output for WeChat
                    break;
                case 'aatilpi_line':
                    // Output for Line
                    break;
                case 'aatilpi_kakao':
                    // Output for KakaoTalk
                    break;
                case 'aatilpi_weibo':
                    // Output for Weibo
                    break;
                case 'aatilpi_VAT':
                    // Output for VAT
                    break;
                case 'aatilpi_company_id':
                    // Output for Company ID
                    break;
                case 'aatilpi_prof_id':
                    // Output for Professional ID
                    break;
                case 'aatilpi_bank_account':
                    // Output for Bank account
                    break;
                case 'aatilpi_bank_bicswift':
                    // Output for BIC/SWIFT code
                    break;
                case 'aatilpi_facebook':
                    // Output for Facebook
                    break;
                case 'aatilpi_twitter':
                    // Output for Twitter
                    break;
                case 'aatilpi_instagram':
                    // Output for Instagram
                    break;
                case 'aatilpi_youtube':
                    // Output for YouTube
                    break;
                case 'aatilpi_reddit':
                    // Output for Reddit
                    break;
                case 'aatilpi_discord':
                    // Output for Discord
                    break;
                case 'aatilpi_twitch':
                    // Output for Twitch
                    break;
                case 'aatilpi_snapchat':
                    // Output for Snapchat
                    break;
                case 'aatilpi_pinterest':
                    // Output for Pinterest
                    break;
                case 'aatilpi_linkedin':
                    // Output for LinkedIn
                    break;
                case 'aatilpi_tumblr':
                    // Output for Tumblr
                    break;
                case 'aatilpi_flickr':
                    // Output for Flickr
                    break;
                case 'aatilpi_github':
                    // Output for GitHub
                    break;
                case 'aatilpi_bitbucket':
                    // Output for Bitbucket
                    break;
                case 'aatilpi_stackoverflow':
                    // Output for Stack Overflow
                    break;
                case 'aatilpi_medium':
                    // Output for Medium
                    break;
                case 'aatilpi_quora':
                    // Output for Quora
                    break;
                case 'aatilpi_vimeo':
                    // Output for Vimeo
                    break;
                case 'aatilpi_dribbble':
                    // Output for Dribbble
                    break;
                case 'aatilpi_behance':
                    // Output for Behance
                    break;
                case 'aatilpi_deviantart':
                    // Output for DeviantArt
                    break;
                case 'aatilpi_foursquare':
                    // Output for Foursquare
                    break;
                default:
                    // Output for any other case
                    break;
                }
            
                return $output;       
        }
    }
}