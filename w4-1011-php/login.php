<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/11
 * Time: 上午10:55
 */

// 获取前端数据
$username = $_POST['username'];
$password = $_POST['password'];
require_once 'head.php';








//连接数据库,进行数据相关操作(增,删,改,查);
//连接MySQL

$dbc = mysqli_connect('127.0.0.1',
    'root', '123456', 'demo') or die('Error to Connet MySQL');


//var_dump($dbc);



//执行SQL语句
$query = "SELECT * FROM  account  ";

//$query2 = "INSERT INTO account (username, password) VALUES ('ozil', md5('1234'))";

$result = mysqli_query($dbc, $query)or die('Error to query');

//$result2 = mysqli_query($dbc, $query2)or die('error to query');


//var_dump($result);//若成功返回对象
//var_dump($result2);//若成功,返回true


//查看数据表中有多少条数据
//$num = mysqli_num_rows($result);
//echo $num;




//获取返回结果$result中的每行数据(默认是第一行);

//$row1 = mysqli_fetch_array($result); //返回数据为:关联数组和索引数组
//$row2 = mysqli_fetch_row($result); //索引数组
//$row3 = mysqli_fetch_assoc($result);//关联数组
//var_dump($row1);
//var_dump($row2);
//var_dump($row3);
echo '<hr>';
//遍历数据表中每行数据

$row = mysqli_fetch_array($result);
echo '<table>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>name</th>';
echo '<th>password</th>';
echo '</tr>';


while($row = mysqli_fetch_array($result)) {
//    var_dump($row);
    echo '<tr>';
    echo '<td>' . $row['account_id'] . '</td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['password'] . '</td>';
    echo '</tr>';





}
echo '</table>';




//将结果(HTML页面形式,JSON数据格式)返回给前端



//关闭MySQL语句
//mysqli_close();
require_once 'footer.php';
