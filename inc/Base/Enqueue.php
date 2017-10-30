<?php
/**
 * Created by PhpStorm.
 * User: niwqr
 * Date: 30/10/2017
 * Time: 13:50
 */

namespace Inc\Base;

use Inc\Base\BaseController;

class Enqueue extends BaseController
{
    public function register(){
        add_action('admin_enqueue_scripts',array($this,'enqueue'));
    }
    function enqueue(){
        //enqueue all our script
        wp_enqueue_style('milestoneCss',$this->plugin_url.'assets/style.css');
        wp_enqueue_script('milestonejs',$this->plugin_url.'assets/main.js');
    }
}