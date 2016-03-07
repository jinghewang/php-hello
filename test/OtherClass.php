<?php
/**
 * Created by PhpStorm.
 * User: hltravel
 * Date: 16/3/7
 * Time: 下午3:50
 */

namespace test;


class OtherClass
{

    private $var=222;

    /**
     * @return mixed
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * @param mixed $var
     */
    public function setVar($var)
    {
        $this->var = $var;
    }
}