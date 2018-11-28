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

     if(Request::instance()->isPost()){
        return "123";
     }else{
         echo 123;
         return $this->fetch('member/member-add');
     }


    }

    public function addres(){

        return 123;
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