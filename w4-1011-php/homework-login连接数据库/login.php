<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/11
 * Time: 下午4:52
 */


//获取前端数据
$username = $_POST['username'];
$password = $_POST['password'];



//查找数据库
$dbc = mysqli_connect('127.0.0.1', 'root', '123456', 'demo')
or die('Error to connect Mysql');

$query = "SELECT username, password FROM  account WHERE username = '" . $username . "'";

//var_dump($query);

$result = mysqli_query($dbc, $query);
var_dump($result);
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo '用户名不存在';
} else {
    $row = mysqli_fetch_array($result);
    if ($row['password'] == $password) {
        echo 'success';

    } else {
        echo '密码错误';
    }
}




//返回前端

