<?php

header("Content-type: text/html; charset=UTF-8");
$connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');

//设置显示字符集
$sql = "set names utf8";
// 执行sql语句
mysqli_query($connect,$sql);
// 选择数据表

//查询单条数据并以json的格式输出
$sql = "select * from lv_award where id desc";
// 执行sql语句返回结果集
$result = mysqli_query($connect,$sql);
$row = @mysqli_fetch_row($result);
print_r($row);die;
echo  json_encode($row);


?>