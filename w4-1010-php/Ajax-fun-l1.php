<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/10
 * Time: 上午8:37
 */
function show($status,$msg) {
    $arr = array(
        'status' => $status,
        'msg' => $msg,

    );
    echo json_encode($arr);

}