<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/26
 * Time: 上午11:55
 */
namespace app\admin\controller;

use think\Controller;

class Member extends Controller{

    public function memberlist(){

        return $this->fetch('member/member-list');

    }


    public function memberadd(){

        return $this->fetch('member/member-add');
    }

    public function memberdel(){

        return $this->fetch('member/member-del');
    }
}