<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/10
 * Time: 上午8:37
 */
$username = $_POST['username'];
$password = $_POST['password'];
require_once 'Ajax-fun-l1.php';
if ($username == '123') {
    if ($password == 'qwe') {
        show(1, '登录成功');
    } else {
        show(0, '密码错误');
    }
} else {
    show(0, '用户名错误');

}
