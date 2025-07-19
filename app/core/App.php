<?php
namespace  App\Core;

use Symfony\Component\Yaml\Yaml;
   Class App
{
        private static $instancies=[];

        public static function getDependency($name)
        {
        // $deps= require __DIR__.("/../config/dependencies.php");
                $deps=Yaml::parseFile(__DIR__.'/../config/service.yml');

            if (array_key_exists($name,self::$instancies))
            {
                 return  self::$instancies[$name];
            }
             foreach ($deps as  $groupe)
            {
                if (isset($groupe[$name]))
                {
                    $className=$groupe[$name];
                    if (class_exists($className))
                    {
                       $instance= $className::getInstance();
                        if ($instance)
                        {
                            self::$instancies[]=$instance;
                            return $instance;
                        }
                    }
                }
            }

        }
}
