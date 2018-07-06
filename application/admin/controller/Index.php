<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/11 0011
 * Time: 下午 2:33
 */

namespace app\admin\controller;

class Index extends Base
{


    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        return $this->fetch();
    }
}