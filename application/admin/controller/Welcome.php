<?php
/**
 * Created by PhpStorm.
 * User: zhaolei
 * Date: 2018/11/25
 * Time: 下午4:55
 */
namespace app\admin\controller;

use think\Controller;

class Welcome extends Controller
{
    public function index()
    {



       // return $this->fetch('welcome');
        $data = [
            'SERVER_ADDR'=>$_SERVER['SERVER_ADDR'],
            'SERVER_SOFTWARE'=>$_SERVER ['SERVER_SOFTWARE'],
            'PHP_OS'=>PHP_OS,
            'PHPVERSION'=>phpversion(),
        ];
        $this->assign('server',$data);

        return $this->fetch('welcome/welcome');
        //echo 123;
    }
}