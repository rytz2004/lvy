<?php

header("Content-type: text/html; charset=UTF-8");

$array = array();
$id= $_POST["id"];
$array['id']=$id;
$array['code'] = 200;
$array['msg'] = "成功";
echo json_encode($array,true);
//echo "你输入的名字为：".$name;
?>