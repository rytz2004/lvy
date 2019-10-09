<?php

header("Content-type: text/html; charset=UTF-8");

$array = array();
$id= $_POST["good"];
$user= $_POST["user"];
$phone= $_POST["phone"];

$id = intval($id);
if(isset($id) && isset($user) && isset($phone)){

    $connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');
    if ($connect->connect_error) {
        die("连接失败: " . $connect->connect_error);
    }

    $sql_where = "select * from lv_award where user_phone = '$phone'";
    $result_where = mysqli_query($connect,$sql_where);
    $row_where = @mysqli_fetch_row($result_where);

    if(!empty($row_where)){
        $array['id']=$row_where;
        $array['code'] = -1;
        $array['msg'] = "手机号重复";
        echo json_encode($array,true);return;
    }

    $create_time = date("Y-m-d H:i:s",time());
    $sql = "INSERT INTO lv_award (user_name,user_phone,type,status,create_time) VALUES ('$user','$phone',$id,1,'$create_time')";
    $result = mysqli_query($connect,$sql);
    $row = @mysqli_fetch_row($result);
    if($result>0){
        $array['id']=$row;
        $array['code'] = 200;
        $array['msg'] = "成功";
        echo json_encode($array,true);return;
    }else{
        $array['id']=$row;
        $array['code'] = -1;
        $array['msg'] = "失败";
        echo json_encode($array,true);return;
    }

}

$array['id']=0;
$array['code'] = -1;
$array['msg'] = "失败";
echo json_encode($array,true);return;

//echo "你输入的名字为：".$name;
?>