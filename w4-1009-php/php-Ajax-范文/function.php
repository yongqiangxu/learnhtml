<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 下午2:12
 */

function show($statu,$msg){
    $arr = array(
        'status' => $statu,
        'msg' => $msg,



    );
    echo json_encode($arr);

}