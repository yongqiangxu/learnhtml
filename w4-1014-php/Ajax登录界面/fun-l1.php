<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/14
 * Time: 上午9:00
 */
function show ($status, $msg) {
    $arr = array(
        'status' => $status,
        'msg' => $msg
    );
    echo json_encode($arr);
}
