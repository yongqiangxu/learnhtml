<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/11
 * Time: 下午8:44
 */
require_once 'l2-fun.php';

$username = $_POST['username'];
$password = $_POST['password'];
//var_dump($username);
//var_dump($password);
$dbc = mysqli_connect('127.0.0.1', 'root', '123456','demo') or die('Error');

$query = "SELECT username, password FROM  account WHERE username = '" . $username . "'";
//var_dump($query);

$result = mysqli_query($dbc, $query) or die('error');
var_dump($result);
if (mysqli_num_rows($result) == 0) {
    show(0,'用户名错误');
} else {
    $row = mysqli_fetch_array($result);
    if ($row['password'] == $password) {
        show(1, '登陆成功');

    } else {
        show(0, '密码错误');
    }

}
