<?php
namespace Framework\Core;

class AutoLoad
{
    public static function autoload($className)
    {
        $className = str_replace('App', '', $className);

        $className = str_replace('\\', '/', $className);

        $className .='.php';

        echo $className."<br>"  ;


        if(file_exists(APP . $className)) {

            require_once APP . $className;

        }else

            echo APP . $className;

    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');