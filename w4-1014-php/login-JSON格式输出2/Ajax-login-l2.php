<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/14
 * Time: 下午8:08
 */
require_once 'Ajax-fun-l2.php';
$username = $_POST['username'];
$password = $_POST['password'];

$dbc = mysqli_connect('127.0.0.1','root','123456','demo');
$query = "SELECT username,password FROM account WHERE username = '" . $username . "'";
$result = mysqli_query($dbc,$query);

$num = mysqli_num_rows($result);
if ($num == 0) {
    show(0,'用户名不存在');

} else {
    $row = mysqli_fetch_array($result);
    if ( $password == $row['password']) {
        show(1,'登陆成功');
    } else {
        show(0,'密码错误');
    }
}
