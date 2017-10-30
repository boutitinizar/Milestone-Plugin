<?php
/**
 * Created by PhpStorm.
 * User: niwqr
 * Date: 29/10/2017
 * Time: 22:54
 */
namespace Inc;
final class Init
{

    /**
    *Store all the classess inside an array
    * @return array Full list of classes
    **/
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

    /**
    * Loop through the classes, initialize them, and call the register() method if exiàts
    * @return
    **/
    static function register_services(){
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if(method_exists($service,'register')){
                $service->register();
            }
        }

    }

    /**
    * Initialize the class from the services array
    * @return class instance new instance of the class
    **/
    private static function instantiate($class){
        $service = new $class();
        return $service;
    }



}
