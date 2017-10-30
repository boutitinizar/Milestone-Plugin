<?php
/**
 * Created by PhpStorm.
 * User: Nizar
 * Date: 29/10/2017
 * Time: 03:22
 *
 * @package MilestonePlugin
 * @version 1.0
 *

Plugin Name: MilestonePlugin
Plugin URI: http://Milestone.tn
Version: 1.0
Author URI: http://Milestone.tn
 */

defined('ABSPATH') or die;

require __DIR__ . '/vendor/autoload.php';

use \Inc\Pages\Admin;


if(class_exists('Inc\\Init')){
    \Inc\Init::register_services();
}


class MilestonePlugin
{



    function creat_post_type(){
        add_action('init',array($this,'custom_post_type'));
    }
    function activate(){
        //Generate a CPT
        $this->custom_post_type();
        //Flush rewirite rules
        flush_rewrite_rules();
    }
    function deactivate(){
        //Flush rewirite rules
        flush_rewrite_rules();
    }

    function custom_post_type(){
        register_post_type('book',['public'=>true,'label'=>'Books']);
    }


}


if(class_exists('MilestonePlugin')){
    $MilestonePlugin = new MilestonePlugin();
    $MilestonePlugin->creat_post_type();
}


//Activation
register_activation_hook(__FILE__,array( $MilestonePlugin,'activate'));

//Desactivation
register_deactivation_hook(__FILE__,array( $MilestonePlugin,'deactivate'));


