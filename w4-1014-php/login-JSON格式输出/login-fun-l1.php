<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/14
 * Time: 上午10:46
 */
function show ($status,$msg) {
    $arr = array(
        'status' => $status,
        'msg' => $msg
    );
    echo json_encode($arr);

}