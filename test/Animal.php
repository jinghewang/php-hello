<?php
/**
 * Created by PhpStorm.
 * User: hltravel
 * Date: 16/3/7
 * Time: 下午1:09
 */

namespace test;

class Animal
{

    private $name;

    /**
     * Animal constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
    private $age;


    public function testName()
    {
        return $this->name;
    }

    public static function testName2(){
        echo 'testName2';
    }

    function __call($name, $arguments)
    {
        echo "<b>function name:</b>";
        echo $name . '<br>';

        echo "<b>function arguments:</b>";
        print_r( $arguments );
    }



    public static function helloCall($name,$age){
        var_dump($name,$age);
    }

    public static function __callStatic($name, $arguments)
    {
        echo "<b>function name2:</b>";
        echo $name . '<br>';

        echo "<b>function arguments2:</b>";
        print_r( $arguments );

        if ($name == 'hello'){
            var_dump('----3333333333----');
            //call_user_func(function($arr){ var_dump($arr);},[123,456]);

            //call_user_func($this->helloCall(),[123,456]);
        }
    }



}