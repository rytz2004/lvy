<?php

header("Content-type: text/html; charset=UTF-8");

$array = array();
$id= $_POST["id"];
$id = intval($id);
if(isset($id)){
    $array = array(1=>"免费治理",2=>"免费检测",3=>"特惠检测",4=>"特惠治理",5=>"空气清新剂1瓶",6=>"活性炭包",7=>"500元治理抵扣",8=>"800元治理抵扣",0=>"谢谢参与");

    if($id == 1){//无
        $array['code'] = -1;
        $array['msg'] = "失败";
        $array['msg_bak'] = "亲！很抱歉，您下手慢了，免费治理以发放完毕！";
        echo json_encode($array,true);return;
    }

    if($id == 2){//3
        $connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');
        $sql = "set names utf8";
        mysqli_query($connect,$sql);
        $sql = "select count(*) as number from lv_award where type=2";
        $result = mysqli_query($connect,$sql);
        $row = @mysqli_fetch_row($result);
        $number = intval($row[0]);
        mysqli_close($connect);
        if($number>=3){
            $array['code'] = -1;
            $array['msg'] = "失败";
            $array['msg_bak'] = "亲！很抱歉，您下手慢了，免费检测以发放完毕！";
            echo json_encode($array,true);return;
        }
    }

    if($id == 3){//5
        $connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');
        $sql = "set names utf8";
        mysqli_query($connect,$sql);
        $sql = "select count(*) as number from lv_award where type=3";
        $result = mysqli_query($connect,$sql);
        $row = @mysqli_fetch_row($result);
        $number = intval($row[0]);
        mysqli_close($connect);
        if($number>=5){
            $array['code'] = -1;
            $array['msg'] = "失败";
            $array['msg_bak'] = "亲！很抱歉，您下手慢了，特惠检测以发放完毕！";
            echo json_encode($array,true);return;
        }
    }

    if($id == 4){//8
        $connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');
        $sql = "set names utf8";
        mysqli_query($connect,$sql);
        $sql = "select count(*) as number from lv_award where type=4";
        $result = mysqli_query($connect,$sql);
        $row = @mysqli_fetch_row($result);
        $number = intval($row[0]);
        mysqli_close($connect);
        if($number>=8){
            $array['code'] = -1;
            $array['msg'] = "失败";
            $array['msg_bak'] = "亲！很抱歉，您下手慢了，特惠治理以发放完毕！";
            echo json_encode($array,true);return;
        }
    }

    if($id == 5){//5
        $connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');
        $sql = "set names utf8";
        mysqli_query($connect,$sql);
        $sql = "select count(*) as number from lv_award where type=5";
        $result = mysqli_query($connect,$sql);
        $row = @mysqli_fetch_row($result);
        $number = intval($row[0]);
        mysqli_close($connect);
        if($number>=5){
            $array['code'] = -1;
            $array['msg'] = "失败";
            $array['msg_bak'] = "亲！很抱歉，您下手慢了，空气清新剂1瓶以发放完毕！";
            echo json_encode($array,true);return;
        }
    }

    if($id == 6){//5
        $connect = mysqli_connect('120.25.79.227','renyuan','string123','lv') or die('Unale to connect');
        $sql = "set names utf8";
        mysqli_query($connect,$sql);
        $sql = "select count(*) as number from lv_award where type=6";
        $result = mysqli_query($connect,$sql);
        $row = @mysqli_fetch_row($result);
        $number = intval($row[0]);
        mysqli_close($connect);
        if($number>=5){
            $array['code'] = -1;
            $array['msg'] = "失败";
            $array['msg_bak'] = "亲！很抱歉，您下手慢了，活性炭包以发放完毕！";
            echo json_encode($array,true);return;
        }
    }

    if($id == 0){
        $array['id']=$id;
        $array['code'] = -1;
        $array['msg'] = "失败";
        $array['msg_bak'] = "谢谢参与！";
        echo json_encode($array,true);return;
    }

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