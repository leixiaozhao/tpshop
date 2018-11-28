<?php
use think\Route;

// +----------------------------------------------------------------------
// | 后台首页
// +----------------------------------------------------------------------
Route::rule([
    'admin/'=>'admin/Index/index',
    'welcome'=>'admin/Welcome/index',
]);


// +----------------------------------------------------------------------
// | 会员模块
// +----------------------------------------------------------------------
Route::rule([
        'memberlist'=>'admin/Member/memberlist',
        'member-add'=>'admin/Member/memberadd',
        'member-del'=>'admin/Member/memberdel',
        'member-edit'=>'admin/Member/memberedit',
        'member-password'=>'admin/Member/memberpassword',
]);

// +----------------------------------------------------------------------
// | 订单模块
// +----------------------------------------------------------------------
Route::rule([
    'orderlist'=>'admin/Order/orderlist',
    'orderadd'=>'admin/Order/orderadd',
    'orderadd'=>'admin/Order/orderadd'
]);


// +----------------------------------------------------------------------
// | 分类模块
// +----------------------------------------------------------------------
Route::rule([
    'cate'=>'admin/Cate/index'
]);

// +----------------------------------------------------------------------
// | 城市管理
// +----------------------------------------------------------------------
Route::rule([
    'city'=>'admin/City/city'
]);


// +----------------------------------------------------------------------
// | 权限模块
// +----------------------------------------------------------------------
Route::rule([
    'adminlist'=>'admin/Admin/adminlist',
    'adminadd'=>'admin/Admin/adminadd',
    'adminrole'=>'admin/Admin/adminrole',
    'adminadd'=>'admin/Admin/adminadd',
    'admincate'=>'admin/Admin/admincate',
    'adminedit'=>'admin/Admin/adminedit',
    'adminrule'=>'admin/Admin/adminrule'
]);
