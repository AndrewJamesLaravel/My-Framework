<?php

namespace App;

use App\Helpers\Session;

class Config {

    public static function get() {

        // turn on output buffering
        ob_start();

        // turn on sessions
        Session::init();

        return [
            //set the namespace for routing
            'namespace'          => 'App\Controllers\\',

            //set default controller
            'default_controller' => 'Admin',

            //set default method
            'default_method'     =>  'index',

            //database
            'db_type'            =>  'mysql',
            'db_host'            =>  'bp.test',
            'db_name'            =>  'bp_db',
            'db_charset'         =>  'utf8',
            'db_username'        =>  'homestead',
            'db_password'        =>  'secret',
        ];
    }
}