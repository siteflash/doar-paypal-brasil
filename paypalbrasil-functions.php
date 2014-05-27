<?php
/*************************************************************
*This file contains function for donate via paypal plugins*******
*************************************************************/
function paypalbrasil_add_content($content) {
global $paypalbrasil_options;
if ($paypalbrasil_options['paypalbrasil_display_options'] == 1 ) {
$content_type=is_single(); 
} elseif ($paypalbrasil_options['paypalbrasil_display_options'] == 2 ) {
$content_type=is_page(); 
} elseif ($paypalbrasil_options['paypalbrasil_display_options'] == 3 ) {
$content_type=is_singular(); }



if ($content_type) {

$extra_content= '  

<center><b>' . $paypalbrasil_options['paypal_widget_textarea'] . ' </b></center>
<div align="center"><form method="post" action="https://www.paypal.com/cgi-bin/webscr" method=" post" target="_bank">
<div class="paypal-donations">
<input type="hidden" value="_donations" name="cmd"/>
<input type="hidden" value="' . $paypalbrasil_options['paypal_id'] . '" name="business"/>
<input type="hidden" name="currency_code" value="' . $paypalbrasil_options['paypalbrasil_seller_country'] . '">
<input type="hidden" name="return" value="' . $paypalbrasil_options['paypalbrasil_return_url'] . '">
<input type="hidden" value="Voce achou as ideas uteis e quero dizer obrigado. Sua doacao sera suficiente para nos inspirar a fazer mais. Agradece a um grupo!" name="item_name"/>
<input type="hidden" value="BRL" name="currency_code"/>
<input type="image" alt="PayPal - A maneira mais segura, mais fácil de pagar online." name="submit" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif"/>

';
$content .= $extra_content;
}

return $content;
}

add_filter('the_content','paypalbrasil_add_content');



?>
