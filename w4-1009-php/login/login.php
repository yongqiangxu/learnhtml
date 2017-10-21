<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 上午9:41
 */

//php中有四个函数是(ˇˍˇ) 想～界面输出内容
//1. echo 函数. 主要输出内容, 最常用.
//2. printf
//3. printf_r
//4. var_dump 函数. 主要用于调试, 输出变量

echo 'hello';

echo '<hr>';
echo '<h1>Hello</h1>';

echo '<hr>';
//php有两个全局数组, $_POST, $_GET, 里面是从前端传来的数据.

echo '<h3>输出$_POST变量, 观察变量里面的内容</h3>';
var_dump($_POST);

echo '<hr>';

//获取用户名,密码,进行判断,根据结果返回给前端不同的值

$username = $_POST['username'];
$password = $_POST['password'];
echo '$username';//单引号不解析变量
echo '<br>';
echo "$username";//双引号解析变量

//单双引号嵌套时,交叉使用
echo '<p class="p1">abcd</p>';

//判断
if ($username == '1234') {
    if ($password == 'qwer') {
        echo '登录成功';
    }else{
        echo '密码错误';
    }

}else{
    echo '用户名不存在';

}