<?php

header("Content-type: text/html; charset=UTF-8");

$array = array();
$id= $_POST["good"];
$id = intval($id);
if(isset($id)){

    $connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');
    if ($connect->connect_error) {
        die("连接失败: " . $connect->connect_error);
    }
    $array['id']=0;
    $array['code'] = -1;
    $array['msg'] = "失败";
    echo json_encode($array,true);return;
}

$array['id']=0;
$array['code'] = -1;
$array['msg'] = "失败";
echo json_encode($array,true);return;

//echo "你输入的名字为：".$name;
?>