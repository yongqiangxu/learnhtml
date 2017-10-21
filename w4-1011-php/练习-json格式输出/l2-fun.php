<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/11
 * Time: 下午8:44
 */

function show ($status, $msg){
    $arr = array(
        'status' => $status,
        'msg' => $msg
    );
    echo json_encode($arr);
}