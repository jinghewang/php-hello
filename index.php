<?php
/**
 * Created by PhpStorm.
 * User: hltravel
 * Date: 16/3/7
 * Time: 下午1:14
 */


use test\OtherClass;

require_once("test/Animal.php");
require_once("test/Mammal.php");
require_once("test/Person.php");
require_once("test/OtherClass.php");


$person = new \test\Person('wjh', 35);

$a = ['id','1','name','wjh','age',3];

$temp_number = array("s"=>"one",'s'=>"two","three","four");
print_r($temp_number);