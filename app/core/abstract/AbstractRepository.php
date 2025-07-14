<?php
namespace App\Core\Abstract;
 abstract  class AbstractReposity 
{

    abstract public function selectAll();
    abstract public function selectById($id);
    abstract public function  insert();

}