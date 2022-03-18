<?php

class Autoloader {

        static function register(): void {

            spl_autoload_register(array(__CLASS__, 'controllerAutoload'));
            spl_autoload_register(array(__CLASS__, 'modelAutoload'));

        }

        static function controllerAutoload($class): bool {

            $path = __DIR__ . "/Controller/" . $class . ".php";

            if (is_file($path)) {

                require_once($path);
                return true;
        
            } else {
        
                return false;
        
            }

        }

        static function modelAutoload($class): bool {

            $path = __DIR__ . "/Model/" . $class . ".php";

            if (is_file($path)) {

                require_once($path);
                return true;
        
            } else {
        
                return false;
        
            }

        }

    }

?>
