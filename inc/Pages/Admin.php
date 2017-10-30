<?php
/**
 * Created by PhpStorm.
 * User: niwqr
 * Date: 29/10/2017
 * Time: 22:52
 */

namespace Inc\Pages;

use Inc\Base\BaseController;


class Admin extends BaseController
{

    public function register(){

      add_action('admin_menu',array($this,'add_admin_pages'));

    }
    public function  add_admin_pages(){
        add_menu_page('Milestone Plugin','Milestone','manage_options','milestone_plugin',array($this,'admin_index'),'dashicons-admin-multisite',2);
    }

    public function admin_index(){
        //require template
        require_once $this->plugin_path.'templates/admin.php';
    }

}