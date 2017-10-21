<?php
/**
 * Created by PhpStorm.
 * User: inter
 * Date: 2017/10/9
 * Time: 下午4:15
 */
function show($status, $msg){
    $arr = array(
        'status' => $status,
        'mgs' => $msg,

    );
    echo json_encode($arr);

}