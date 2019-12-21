<?php
//1.get方法打开当前页面    2.post   进行验证、
//var_dump($_SERVER)
$method=$_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    require'../view/admin/login.html';
}else{
//    var_dump($_POST);
    $username=$_POST['username'];
    $password=$_POST['password'];
    //连接数据库
    require "../lib/connect.php";
    //查询  有无用户
    $select="select * from manager where username='$username'";
    $result=$mysqli->query($select)->fetch_all(MYSQLI_ASSOC);
    if($result){
        if($result[0]['password']==$password){
            session_start();
            $_SESSION['id']=$password;
            $_SESSION['name']=$username;
            echo json_encode([
                'code'=>200,
                'msg'=>'登录成功正在登陆...'
            ]);
        }else{
            echo json_encode([
                'code'=>400,
                'msg'=>'登录失败用户名密码不匹配',
            ]);
        }
    }else{
            echo json_encode([
                'code'=>400,
                'msg'=>'该用户不存在'
        ]);
    }
}
?>