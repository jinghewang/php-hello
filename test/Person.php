<?php
/**
 * Created by PhpStorm.
 * User: hltravel
 * Date: 16/3/7
 * Time: 下午1:11
 */

namespace test;

class Person extends Animal
{

    public static function testStatic($args){
        var_dump('testStatic--sucessful',$args);
    }

}