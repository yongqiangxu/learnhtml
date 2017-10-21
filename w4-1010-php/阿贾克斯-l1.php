<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/10
 * Time: 下午7:48
 */


$username = $_POST['username'];
$password = $_POST['password'];
//require_once '阿贾克斯-fun-l1.php';

if ($username == '123') {
    if ($password == '456') {

//        show(1, 'success');
        echo json_encode(1, 'success');

    } else {

//        show(0, '密码错误');
        echo json_encode(0, '密码错误');
    }

} else {
//    show(0, '用户名错误');
    echo json_encode(0, '用户名错误');

}