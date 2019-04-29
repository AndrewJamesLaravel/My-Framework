<?php

if (file_exists('../vendor/autoload.php')) {
    require '../vendor/autoload.php';
} else {
    echo "<h1>Please install via composer.json</h1>";
    echo "<p>Install Composer instructions:
    <a href='https://getcomposer.org/doc/oo-intro.md#globally'>https://getcomposer.org/doc/oo-intro.md#globally</a>
</p>";
    echo "<p>Once composer is installed	navigate to	the	working
    directory in your terminal/command prompt and enter 'composer
    install'</p>";
    exit;
}

define('ENVIRONMENT', 'development');

if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {
        case 'development':
            error_reporting(E_ALL);
            break;
        case 'production':
            error_reporting(0);
            break;
        default:
            exit('The application environment is not set correctly.');
    }
}

//initiate config
$config = App\Config::get();

new System\Route($config);