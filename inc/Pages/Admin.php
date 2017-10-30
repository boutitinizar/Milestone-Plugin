<?php
/**
 * Created by PhpStorm.
 * User: niwqr
 * Date: 29/10/2017
 * Time: 22:52
 */

namespace Inc\Pages;

use Inc\Base\BaseController;
use Inc\Api\SettingsApi;


class Admin extends BaseController
{
    public $settings;
    public $pages = [];
    public function __construct()
    {
        $this->settings = new SettingsApi();
        $this->pages = [
            [
                'page_title'=>'Milestone Plugin',
                'menu_title'=>'Milestone',
                'capability'=>'manage_options',
                'menu_slug'=>'milestone_plugin',
                'callback'=>function(){echo'<h1>Plugin</h1>';},
                'icon_url'=>'dashicons-admin-multisite',
                'position'=>'2',
            ]
        ];

    }

    public function register()
    {
        $this->settings->addPages($this->pages)->register();
    }


}