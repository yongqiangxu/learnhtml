<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/11
 * Time: 下午6:52
 */
$username = $_POST['username'];
$password = $_POST['password'];


$dbc = mysqli_connect('127.0.0.1', 'root', '123456', 'demo')
or die('Error to not database');


$query = "SELECT username, password FROM  account WHERE username = '" . $username . "'";
//var_dump($query);

$result = mysqli_query($dbc, $query) or die('Error to not query');
$num = mysqli_num_rows($result);
if ($num == 0) {
    echo 'yonghumingnull';

} else {
    $row = mysqli_fetch_assoc($result);

//    var_dump($row);
    if ($row['password'] == $password) {
        echo 'success';

    } else {
        echo 'mimacuowu';
    }
}