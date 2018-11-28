<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/26
 * Time: 下午4:53
 */
namespace app\admin\controller;

use think\Controller;

class Admin extends Controller{
/**
    管理员列表
 **/
    public function adminlist(){

        return $this->fetch('admin/admin-list');

    }
    /**
        添加管理员
     **/

    public function adminadd(){

        return $this->fetch('admin/admin-add');

    }
    /**
        管理员角色
     **/
    public function adminrole(){

        return $this->fetch('admin/admin-list');


    }
    /**
        添加角色
     **/
    public function roleadd(){

        return $this->fetch('admin/role-add');

    }

    /**
        权限分类
     **/

    public function admincate(){
        return $this->fetch('admin/admin-cate');
    }

    /**
        模块修改
     **/

    public function adminedit(){
        return $this->fetch('admin/admin-edit');
    }

    /**
        权限管理
     **/

    public function adminrule(){
        return $this->fetch('admin/admin-rule');
    }
}
