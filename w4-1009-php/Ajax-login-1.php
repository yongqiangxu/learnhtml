<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 下午4:04
 */
require_once 'function.php';
$username = $_POST['username'];
$password = $_POST['password'];
if ($username== '123') {
    if ($password == 'qwe') {
        show(1,'登陆成功');
    }else {
        show(0,'密码错误');

    }

}else {
    show(0, '用户名错误');
}