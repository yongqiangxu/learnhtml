<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/10
 * Time: 上午9:33
 */


$x = 5;
function text() {
    echo "变量在函数外: $x";
}
text();
echo '<br>';


echo "输出变量: $x";
echo "<hr>";


$x = 5;
$y = 10;
function mytext () {
    global $x, $y;

    $y = $x + $y;


}
echo $y;
mytext();
echo '<br>';

echo "$y";


echo "<hr>";


function st() {
    static $x = 0;
    echo "$x";
    $x++;

}
st();
st();
st();
st();
echo '<hr>';

$a = '13';
$a = null;
var_dump($x);
//echo $a;

