<?php
namespace App\Core\Abstract;
 abstract class AbstractEntity 
{
        abstract public  static function toObject(array $data);
        abstract public  static function toArray ():array;

         public   function toJson () :string
        {
            return json_encode($this->ToArray());
        }


}