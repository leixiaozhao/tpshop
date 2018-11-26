<?php
use think\Route;


Route::rule(['admin/'=>'admin/Index/index']);
Route::rule(['admin'=>'admin/Index/index']);
Route::rule(['welcome'=>'admin/Welcome/index']);
Route::rule(['memberlist'=>'admin/Member/memberlist']);
Route::rule(['member-add'=>'admin/Member/memberadd']);
Route::rule(['member-del'=>'admin/Member/memberdel']);
Route::rule(['orderlist'=>'admin/Order/orderlist']);
Route::rule(['orderadd'=>'admin/Order/orderadd']);
Route::rule(['cate-index'=>'admin/Cate/index']);