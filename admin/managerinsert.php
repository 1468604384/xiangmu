<?php
$method=$_SERVER['REQUEST_METHOD'];
require '../lib/connect.php';
if($method==="GET"){
    require '../view/admin/managerinsert.html';
}else{

//    var_dump($_POST['username']);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $head_img=$_POST['head_img'];
    $insert="insert into manager(username,password,head_img) values ('$username','$password','$head_img')";
    $result=$mysqli->query($insert);
    $data=$mysqli->queruy("select username from manager");
    if($result){
        echo json_encode([
            'code'=>200,
            'msg'=>'插入成功',
            'data'=>$data
        ]);
    }else{
        echo json_encode([
            'code'=>400,
            'msg'=>'插入失败'.$mysqli->error
        ]);
    }

}
