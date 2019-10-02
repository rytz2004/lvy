<?php

header("Content-type: text/html; charset=UTF-8");

$array = array();
$id= $_POST["id"];
if(isset($id)){
    $array = array(1=>"免费治理",2=>"免费检测",3=>"特惠检测",4=>"特惠治理",5=>"空气清新剂1瓶",6=>"活性炭包",7=>"500元治理抵扣",8=>"800元治理抵扣",0=>"谢谢参与");
    $array['id']=$id;
    $array['code'] = 200;
    $array['msg'] = "成功";
    $array['msg_bak'] = "获得".$array[$id];
    echo json_encode($array,true);return;
}

$array['id']=0;
$array['code'] = -1;
$array['msg'] = "失败";
echo json_encode($array,true);return;

//echo "你输入的名字为：".$name;
?>