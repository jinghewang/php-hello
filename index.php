<?php
/**
 * Created by PhpStorm.
 * User: hltravel
 * Date: 16/3/7
 * Time: 下午1:14
 */


require_once("test/Animal.php");
require_once("test/Mammal.php");
require_once("test/Person.php");


$person =new \test\Person('wjh',35);
$person->testName();