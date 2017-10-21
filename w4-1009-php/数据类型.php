<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 下午8:40
 */

$x = 5985;

var_dump($x);


$x = 10.234;
var_dump($x);
echo '<hr>';


$cars = array('tom', 'bale', 'isco', 'ronaldo');
var_dump($cars);

echo "<hr>";

class car {
    function car () {
        $this ->model = "VW";

    }
}
$hebide =  new car();
echo $hebide ->model;
echo '<hr>';

$x = 'hello';
$x = null;

var_dump($x);

