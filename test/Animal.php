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
        echo $this->name;
    }

    public static function testName2(){
        echo 'testName2';
    }



}