<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/10
 * Time: 上午10:17
 */
//遍历索引数组
$arr = array('bale', 'ronaldo', 'isco', 'ramos');
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo '<br>';

}


//遍历关联数组
$cars = array(
    'bale' => 26,
    'ronaldo' => 32,
    'isco' => 25,
    'ramos' => 31);
foreach ($cars as $x => $x_val){
    echo $x . ' ' . $x_val . '<br>';
}
