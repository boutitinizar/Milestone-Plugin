<?php
/**
 * Created by PhpStorm.
 * User: niwqr
 * Date: 30/10/2017
 * Time: 14:12
 */

namespace Inc\Base;

use Inc\Base\BaseController;
class SettingsLinks extends BaseController
{

    public function register(){
        add_filter("plugin_action_links_".$this->plugin_name,array($this,'settings_link'));
    }
    public function settings_link($links){
        //add costum settings link
        $setting_link = '<a href="admin.php?page=milestone_plugin">Milestone Config</a>';
        array_push($links,$setting_link);
        return $links;

    }
}