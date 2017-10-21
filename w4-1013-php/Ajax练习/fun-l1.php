<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/13
 * Time: 下午9:07
 */

function show ($status,$msg) {
    $arr = array(
        'status' => $status,
        'msg' => $msg,

    );
    echo json_encode($arr);



}