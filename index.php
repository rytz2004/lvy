<?php

header("Content-type: text/html; charset=UTF-8");

$array = array();
$id= $_POST["id"];
if(isset($id)){
    $array['id']=$id;
    $array['code'] = -1;
    $array['msg'] = "成功";
    echo json_encode($array,true);
}

$array['id']=0;
$array['code'] = -1;
$array['msg'] = "失败";
echo json_encode($array,true);

//echo "你输入的名字为：".$name;
?>