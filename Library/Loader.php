<?php
# Constants declaration
define('CURRENT_VERSION', '1.3.0');

# PHP < 5.3 Compatibility
if(!defined('ENT_IGNORE'))
{
    define('ENT_IGNORE', 0);
}

# Autoloader
function autoloader($class){
    require_once str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
}

spl_autoload_register('autoloader');