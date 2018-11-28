<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/25
 * Time: 下午5:58
 */
namespace app\admin\controller;

use think\Controller;
class Cate extends Controller{
    public function index(){
        return $this->fetch('cate/cate');
    }

}