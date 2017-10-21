<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/14
 * Time: 上午10:46
 */
require_once 'login-fun-l1.php';
$username = $_POST['username'];
$password = $_POST['password'];
//var_dump($username);

$dbc = mysqli_connect('127.0.0.1', 'root', '123456', 'demo');
$query = "SELECT username,password FROM account WHERE username = '" . $username . "'";
//var_dump($query);
$result = mysqli_query($dbc,$query);

//var_dump($result);

$num = mysqli_num_rows($result);
//var_dump($num);
if ($num == 0) {
    show(0,'用户名错误');
//    var_dum(show);
} else {
    $row = mysqli_fetch_array($result);
//    var_dump($row);
    if ($row['password'] == $password) {
        show(1,'登陆成功');
    } else {
        show(0,'密码错误');
    }
}