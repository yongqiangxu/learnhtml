<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/13
 * Time: 下午9:02
 */
require_once 'fun-l1.php';

$username = $_POST['username'];
//var_dump($username);

$password = $_POST['password'];
//var_dump($password);
if ($username == 123) {
    if ($password == 'qwe') {
        show(1,'登录成功');
//        var_dump(show);
    } else {
        show(0,'密码错误');
    }
} else {
    show(0,'用户名不存在');
};
