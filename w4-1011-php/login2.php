<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/11
 * Time: 上午10:55
 */



//连接数据库,进行数据相关操作(增,删,改,查);
//连接MySQL

$dbc = mysqli_connect('127.0.0.1',
    'root', '123456', 'demo') or die('Error to Connet MySQL');



//执行SQL语句
$query = "SELECT * FROM  account  ";

$result = mysqli_query($dbc, $query)or die('Error to query');

//遍历数据表中每行数据

$row = mysqli_fetch_array($result);
?>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>

<?php
while($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row['account_id'] . '</td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['password'] . '</td>';
    echo '</tr>';

}
?>

</table>
<?php
//将结果(HTML页面形式,JSON数据格式)返回给前端


//关闭MySQL语句
//mysqli_close();
