<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/26
 * Time: 下午4:53
 */
namespace app\admin\controller;

use think\Controller;

class Order extends Controller{

    public function orderlist(){

        return $this->fetch('order/order-list');

    }

    public function orderadd(){

        return $this->fetch('order/order-add');


    }

}
