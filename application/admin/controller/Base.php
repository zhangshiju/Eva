<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller {

    protected $admin_info;

    public function initialize() {
        $this->admin_info = $this->systemLogin();
        //验证权限
        $this->is_admin();
    }

    protected final function systemLogin()
    {
        $admin_info = array(
            'admin_id' => session('admin_id'),
            'admin_name' => session('admin_name'),
            'admin_gid' => session('admin_gid'),
            'admin_is_super' => session('admin_is_super'),
        );
        if (empty($admin_info['admin_id']) || empty($admin_info['admin_name']) || !isset($admin_info['admin_gid']) || !isset($admin_info['admin_is_super'])) {
            session(null);
            $this->redirect('admin/Login/index');
        }

        return $admin_info;
    }


    protected function is_admin()
    {

    }

}

?>
