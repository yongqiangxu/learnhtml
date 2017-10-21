<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/14
 * Time: 上午9:35
 */
$username = $_POST['username'];
$password = $_POST['password'];

$dbc = mysqli_connect('127.0.0.1', root, 123456, 'demo');
$query = "SELECT username,password FROM account WHERE username = '" . $username . "'";
var_dump($query);
$result = mysqli_query($dbc,$query);
//var_dump($result);

$num = mysqli_num_rows($result);
//var_dump($row);
if ($num > 0) {
   $row = mysqli_fetch_array($result);
    if ($password == $row['password']) {
        echo 'success';

    } else {
        echo '密码错误';
    }
} else {
    echo '用户名错误';
}
