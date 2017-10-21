<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/10
 * Time: 下午7:49
 */
function show ($status,$msg)
{
    $arr = array(
        'status' => $status,
        'msg' => $msg


    );
    echo json_encode($arr);
}
//echo json_encode(
//    'status',
//    'msg'
//
//);