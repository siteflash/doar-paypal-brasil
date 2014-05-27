<?php

/********************
* paypalbrasil plugin Options*
********************/


/********************
creates function*****
********************/

function paypalbrasil_options_page() {

     global $paypalbrasil_options;
     ob_start(); ?>
	 
	 <div class="wrap"> 
	
	
	 
	 <form method="post" action="options.php">
	 <table class="widefat">
	 <?php settings_fields('paypalbrasil_settings_group'); ?>
	 
	<thead>
        <tr>
          <th scope="col" style="width: 40%;"><?php _e('donate via paypal options'); ?></th><th></th>
        </tr>
      </thead>
      <a href="http://andrewebmaster.com.br/doacoes/" target="_blank"><p align="center"><img src="http://andrewebmaster.com.br/imagem/logo-desenvolvedor.jpg" width="400" height="100" border="0"></p></a>
	 
	<tr><td> <p> <label class="description" for="paypalbrasil_settings[paypal_id]"> <?php _e('Digite seu Paypal ID e-mail na qual deseja receber dinheiro de contribuinte','paypalbrasil_email')?> </label> </td>
	 <td>
	 <input id="paypalbrasil_settings[paypal_id]" name="paypalbrasil_settings[paypal_id]" type="email" value="<?php echo $paypalbrasil_options['paypal_id'] ?>" /> <br />
	</td> </tr>
	<tr><td> <p> <label class="description" for="paypalbrasil_settings[paypal_widget_textarea]"> <?php _e('Digite o texto que deseja exibir acima do botao doar','paypal_widget_text')?></td> </label>
	 
	<td> <textarea id="paypalbrasil_settings[paypal_widget_textarea]" name="paypalbrasil_settings[paypal_widget_textarea]" type="text" value="<?php echo $paypalbrasil_options['paypal_widget_textarea'] ?>" cols=30 rows=04> <?php echo $paypalbrasil_options['paypal_widget_textarea'] ?>  </textarea> </td>
	 
	 </tr>
	 
	 
	 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <?php
	 
	 if ($paypalbrasil_options[paypalbrasil_display_options] == 1 )
	 { $ppdonate1_checked_status ='checked';} elseif ($paypalbrasil_options[paypalbrasil_display_options] == 2 )
	 { $ppdonate2_checked_status ='checked';} elseif ($paypalbrasil_options[paypalbrasil_display_options] == 3 )
	 { $ppdonate3_checked_status ='checked';} elseif ($paypalbrasil_options[paypalbrasil_display_options] == 4 )
	 { $ppdonate4_checked_status ='checked';} ?>
	 <tr>
		<td><b><?php _e('Onde deseja exibir botao doar paypal ?','paypalbrasil_display_options') ?></b></td> </center>
		<td><br />  
<label class="checkbox" for="paypalbrasil_settings[paypalbrasil_display_options]" > </label>
Apenas nos Posts<input type="radio" id="paypalbrasil_settings[paypalbrasil_display_options]" value="1" name="paypalbrasil_settings[paypalbrasil_display_options]" <?php echo $ppdonate1_checked_status?>/><br/>
Apenas nas Paginas<input type="radio" id="paypalbrasil_settings[paypalbrasil_display_options]" value ="2" name="paypalbrasil_settings[paypalbrasil_display_options]" <?php echo $ppdonate2_checked_status?>/> <br/>
Posts e Pages<input type="radio"  id="paypalbrasil_settings[paypalbrasil_display_options]" value ="3" name="paypalbrasil_settings[paypalbrasil_display_options]" <?php echo $ppdonate3_checked_status?>/>
 <br />Nao exibir Agora<input type="radio" id="paypalbrasil_settings[paypalbrasil_display_options]" value ="4" name="paypalbrasil_settings[paypalbrasil_display_options]" <?php echo $ppdonate4_checked_status?> />
 
             </td>
	</tr> <br /> <br /> <br />
			<tr>	<td> <b>Selecione moeda para receber o pagamento via paypal</b> </td> <td> <select id="paypalbrasil_settings[paypalbrasil_seller_country]" name="paypalbrasil_settings[paypalbrasil_seller_country]">
<OPTION VALUE="BRL" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "BRL") { echo 'selected';}?>>Real Brasil
<OPTION VALUE="EUR" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "EUR") { echo 'selected';}?>>Europian Euro
<OPTION VALUE="AUD" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "AUD") { echo 'selected';}?>>Australian dollar
<OPTION VALUE="NZD" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "NZD") { echo 'selected';}?>>New Zealand Dollar
<OPTION VALUE="USD" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "USD") { echo 'selected';}?>>United states dollar
<OPTION VALUE="CAD" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "CAD") { echo 'selected';}?>>Canadian Dollar
<OPTION VALUE="CZK" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "CZK") { echo 'selected';}?>>Czech Koruna
<OPTION VALUE="DKK" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "DKK") { echo 'selected';}?>>Danish Krone
<OPTION VALUE="HKD" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "HKD") { echo 'selected';}?>>Hongkong Dollar
<OPTION VALUE="HUF" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "HUF") { echo 'selected';}?>>Hungarian Forint
<OPTION VALUE="ILS" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "ILS") { echo 'selected';}?>>Israeli New Sheqel
<OPTION VALUE="JPY" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "JPY") { echo 'selected';}?>>Japanese Yen
<OPTION VALUE="SEK" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "SEK") { echo 'selected';}?>>Swedish Krona
<OPTION VALUE="THB" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "THB") { echo 'selected';}?>>Thai Baht
<OPTION VALUE="SGD" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "SGD") { echo 'selected';}?>>Singapore Dollar
<OPTION VALUE="CHF" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "CHF") { echo 'selected';}?>>Swiss Franc
<OPTION VALUE="GBP" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "GBP") { echo 'selected';}?>>Pound Sterling
<OPTION VALUE="MYR" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "MYR") { echo 'selected';}?>>Malaysian Ringgit
<OPTION VALUE="MXN" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "MXN") { echo 'selected';}?>>Mexican Peso
<OPTION VALUE="NOK" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "NOK") { echo 'selected';}?>>Norwegian Krone
<OPTION VALUE="PLN" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "PLN") { echo 'selected';}?>>Polish Zloty
<OPTION VALUE="TWD" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "TWD") { echo 'selected';}?>>Taiwan New Dollar
<OPTION VALUE="TRY" <?php if($paypalbrasil_options['paypalbrasil_seller_country'] == "TRY") { echo 'selected';}?>>Turkish Lira

</select>	</td>	</tr>
		<tr><td><label class="description" for="paypalbrasil_settings[paypalbrasil_return_url]"> <?php _e('<b>Sua Url de retorno PayPal</b>','paypalbrasil_return_url')?> </td></label>
 <td>
	 <input id="paypalbrasil_settings[paypalbrasil_return_url]" name="paypalbrasil_settings[paypalbrasil_return_url]" type="url" value="<?php echo $paypalbrasil_options['paypalbrasil_return_url'] ?>" size="80" /> <br />
</td> </tr>

</table>		
	 <br /><center><input type="submit" value="SALVAR CONFIG" class="primary-button" /></center> </br />
     </form>
	 </p>  <br />

	
	 </p>

</form>
   <div align="center"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="QUN2JASAJCEB8">
<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>
	 </div>
	 
	  <br />

	 <?php
	 
	 echo ob_get_clean();
}  
     function paypalbrasil_add_options_link() {
	 
	 add_options_page('Doar PayPal Brasil options','Doar PayPal Br ','manage_options','paypalbrasil-options','paypalbrasil_options_page');
	 }
	 add_action('admin_menu','paypalbrasil_add_options_link');
	 
	 function paypalbrasil_register_settings() {
	   register_setting('paypalbrasil_settings_group','paypalbrasil_settings');
	 }
	 
	 add_action ('admin_init','paypalbrasil_register_settings');
	 
	 function paypalbrasil_plugin_action_links( $links, $file ) {
	if ( $file == plugin_basename( dirname(__FILE__).'/donate-via-paypal.php' ) ) {
		$links[] = '<a href="admin.php?page=paypalbrasil-options">'.__('Settings').'</a>';
	}

	return $links;
}

add_filter( 'plugin_action_links', 'paypalbrasil_plugin_action_links', 10, 2 );
	 
	 
?>
