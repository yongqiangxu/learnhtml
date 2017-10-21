<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 下午4:39
 */
require_once 'function-l2.php';


$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 123) {

    if ($password == 'qwe') {

        show(1, 'success');

    }else {
        show(0, '密码错误');

    }

}else {
    show(0, '用户名错误');
}