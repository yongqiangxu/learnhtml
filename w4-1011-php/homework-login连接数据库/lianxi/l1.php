<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/11
 * Time: 下午7:35
 */


$username = $_POST['username'];
$password = $_POST['password'];

$dbc = mysqli_connect('127.0.0.1','root','123456','demo')
    or die('Error to not');
$query = "SELECT username, password FROM  account WHERE username = '" . $username . "'";
$result = mysqli_query($dbc, $query)or die('Error');
$num = mysqli_num_rows($result);
function show ($status, $msg) {
    $arr = array(
        $status => 'status',
        $msg => 'msg'
    );
    echo $arr;

}
if ($num == 0) {
    echo '用户名不存在';
} else {
    $row = mysqli_fetch_array($result);
    if ($row['password'] == $password) {

        echo '登录成功';

    } else {
        echo '密码错误';
    }
}

