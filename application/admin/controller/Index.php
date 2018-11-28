<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/25
 * Time: 下午4:01
 */

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
}
