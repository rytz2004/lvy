<?php

header("Content-type: text/html; charset=UTF-8");
$connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');

//设置显示字符集
$sql = "set names utf8";
// 执行sql语句
mysqli_query($connect,$sql);
// 选择数据表

//查询单条数据并以json的格式输出
$sql_2 = "select user_name,user_phone from lv_award where type=2";
$result_2 = mysqli_query($connect,$sql_2);
$row_2 = @mysqli_fetch_all($result_2);

$sql_3 = "select user_name,user_phone from lv_award where type=3";
$result_3 = mysqli_query($connect,$sql_3);
$row_3 = @mysqli_fetch_all($result_3);

$sql_4 = "select user_name,user_phone from lv_award where type=4";
$result_4 = mysqli_query($connect,$sql_4);
$row_4 = @mysqli_fetch_all($result_4);

$sql_5 = "select user_name,user_phone from lv_award where type=5";
$result_5 = mysqli_query($connect,$sql_5);
$row_5 = @mysqli_fetch_all($result_5);

$sql_6 = "select user_name,user_phone from lv_award where type=6";
$result_6 = mysqli_query($connect,$sql_6);
$row_6 = @mysqli_fetch_all($result_6);

$sql_7 = "select user_name,user_phone from lv_award where type=7";
$result_7 = mysqli_query($connect,$sql_7);
$row_7 = @mysqli_fetch_all($result_7);

$sql_8 = "select user_name,user_phone from lv_award where type=8";
$result_8 = mysqli_query($connect,$sql_8);
$row_8 = @mysqli_fetch_all($result_8);

$array['info_2']=$row_2;
$array['info_3']=$row_3;
$array['info_4']=$row_4;
$array['info_5']=$row_5;
$array['info_6']=$row_6;
$array['info_7']=$row_7;
$array['info_8']=$row_8;
$array['code'] = 200;
$array['msg'] = "成功";

echo json_encode($array,true);return;

?>