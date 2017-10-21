<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 上午11:24
 */

//如何获取从前端发来的数据
//后台脚本不判断是通过form还是Ajax传来的数据

//var_dump($_POST);

//导入funtion.php文件
//once 避免重复导入,只导入一次

require_once 'function.php';
//include_once 'function.php';
//require 'function.php'; //文件有问题,会提示,同时下面代码不执行
//include 'function.php'; //导入文件如果有问题,会提示,但不影响下面PHP代码
//导入文件的本质是把代码粘贴过来



$username = $_POST['username'];
$password = $_POST['password'];
if ($username == '123') {
    if($password =='qwe'){
        show(1,'欢迎登陆');

    }else{
       show(0,'密码错误') ;
    }
    //返回 JSON 数据

}else{
    show(0,'用户名不存在');


}