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


$person = new \test\Person('wjh', 35);
//$person->testName3(['age'=>'232']);



function barber($type)
{
    echo "You wanted a $type haircut, no problem\n";
}
call_user_func('barber', "mushroom");
call_user_func('barber', "shave");

die;



\test\Person::hello();

/**
 * @param $person
 */
function testEcho($person)
{
//echo print
    echo '222', $person->testName();
    print '333' . $person->testName();
}

//testEcho($person);

function testImage()
{
    //imagesize
    $file = __DIR__ . '/mm.jpg';
    $imageSize = getimagesize($file);
    print_r($imageSize);
}

//testImage();


//define('cmp','hlt');
//echo cmp;

error_reporting(E_ALL);
function increment(&$var)
{
    var_dump('----1111----');
    $var++;
}

$a = 0;
call_user_func(increment, $a);
echo $a."\n";
