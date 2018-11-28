<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/25
 * Time: 下午5:58
 */
namespace app\admin\controller;

use think\Controller;
class City extends Controller{
    public function city(){
        return $this->fetch('city/city');
    }

}