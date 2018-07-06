<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 上午 11:41
 */

namespace app\admin\controller;
use think\Controller;

class Login extends  Controller
{
    public function index(){
        if (session('admin_id')) {
            $this->success('已经登录', 'Index/index');
        }
        return $this->fetch();
    }
}