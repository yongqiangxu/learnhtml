<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 下午7:14
 */


$text = '1234';
echo "qwer $text!";
echo '<br>';
$txt = "W3Schools.com";
echo "I love $txt!";
echo '<hr>';


echo "i love " . $text . " !";
echo '<hr>';
//函数外变量
$x = '5';
function my(){
    echo "<p>变量在函数内是 $x </p>";

}
my();


echo "<p>变量在函数外$x";


echo '<hr>';
//函数内变量
function text(){
    $y = '123';
    echo "<h3>变量在函数内 $y";

}
text();

echo "<h3>在函数外输出变量 $y";



echo '<hr>';
$a = '5';
$b = '10';
$a = $a + $b + $a;

function test(){
    global $a, $b;
    $a= $a + $b;
}
test();
echo $a;
echo '<hr>';


function mytest() {
   static $z = '4';
   echo $z;
   $z --;

}
mytest();
echo '<br>';
mytest();
mytest();
mytest();
mytest();
mytest();
mytest();



?>