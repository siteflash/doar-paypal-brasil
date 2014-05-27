<?php
/*
Plugin Name: doar-paypal-brasil
Plugin URI: http://andrewebmaster.com.br/doar-paypal-brasil-wordpress-plugin
Description: A wordpress plugins to add paypal donation button after each post content . It has been developed for not profiting organizations . 
Version: 1.0
Author: Andre Luiz(AndreWebmaster)
Author URI: http://andrewebmaster.com.br
Author @andrewebmaster
License: GPLv2
*/

/**********************
* Global variables  ***
**********************/
$paypalbrasil_prefix = 'paypalbrasil_';
$paypalbrasil_plugin_name="Meu primeiro Plugin";
$paypalbrasil_options = get_option('paypalbrasil_settings'); // Retrive our plugins options from database

/**********************
*include scripts file*
**********************/

include ('paypalbrasil-scripts.php');

/**********************
*include other files***
**********************/

include ('paypalbrasil-widget.php');//it creates widget for plugin
include ('paypalbrasil-adminsettings.php');

/**********************
*Create Plugin links***
**********************/

include ('paypalbrasil-pluginlinks.php');

/**********************
*include function file*
**********************/

include ('paypalbrasil-functions.php');

/**********************
*include plugin options page*
**********************/

include ('paypalbrasil-plugin-options.php');


?>
