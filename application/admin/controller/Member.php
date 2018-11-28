<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/26
 * Time: 上午11:55
 */
namespace app\admin\controller;

use think\Controller;
use think\Request;

class Member extends Controller{

    public function memberlist(){

        return $this->fetch('member/member-list');

    }


    public function memberadd(){

     if(Request::instance()->isAjax()){
        return "123";
     }else{
         return $this->fetch('member/member-add');
     }


    }

    public function memberdel(){

        return $this->fetch('member/member-del');
    }

    public function memberedit(){

        return $this->fetch('member/member-edit');
    }

    public function memberpassword(){

        return $this->fetch('member/member-password');
    }
}